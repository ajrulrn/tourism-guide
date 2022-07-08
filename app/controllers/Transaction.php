<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaction_m');
        $this->load->library('Midtrans');
    }

    public function index()
    {
        $transactions = current_user()->level_id == ADMIN ? Transaction_m::get_all() : (current_user()->level_id == GUIDE ? Transaction_m::get_order_by_guide_id($this->session->userdata(SESSION_KEY)) : Transaction_m::get_by_user_id($this->session->userdata(SESSION_KEY)));
        $data = [
            'transactions' => $transactions
        ];
        $this->load->view('pages/transaction/index', $data);
    }

    public function detail($transaction_id=null)
    {
        $data = [
            'transaction'   => Transaction_m::get_by_id($transaction_id),
            'review'        => Transaction_m::get_rating($transaction_id)
        ];
        $this->load->view('pages/transaction/detail', $data);
    }

    public function store($destination_id)
    {
        $transaction    = null;
        $validation     = $this->form_validation;
        $flashdata      = '';
        $validation->set_rules(Transaction_m::rules());
        if ($validation->run()) {
            $transaction = Transaction_m::save($destination_id);
            $flashdata = '';
        }

        $this->session->set_flashdata('');
        redirect('transaction/checkout/'.$transaction);
    }

    public function checkout($transaction_id)
    {
        $data = [
            'transaction' => Transaction_m::get_by_id($transaction_id)
        ];
        $this->load->view('pages/transaction/checkout', $data);
    }

    public function pay()
    {
        $this->form_validation->set_rules('_transaction', 'Transaksi', 'required');
        if ($this->form_validation->run() === FALSE) {
            redirect('transaction');
        }
        
        $transaction_id = $this->input->post('_transaction', true);
        $transaction    = Transaction_m::get_by_id($transaction_id);
        $body = [
            'payment_type' => 'bank_transfer',
            'transaction_details' => [
                'order_id' => $transaction->id,
                'gross_amount' => $transaction->subtotal
            ],
            'bank_transfer' => [
                'bank' => 'bca'
            ]
        ];
        Midtrans::request_payment($body);
        redirect('transaction/detail/'.$transaction_id);
    }

    public function confirm($transaction_id)
    {
        Midtrans::check_status($transaction_id);
        redirect('transaction/detail/'.$transaction_id);
    }
}