<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaction_m');
    }

    public function index()
    {
        $data = [
            'transactions' => Transaction_m::get_order_by_guide_id($this->session->userdata(SESSION_KEY))
        ];
        $this->load->view('pages/order/index', $data);
    }

    public function detail($transaction_id)
    {
        $data = [
            'transaction' => Transaction_m::get_order_by_id($transaction_id)
        ];
        $this->load->view('pages/order/detail', $data);
    }

    public function start($transaction_id)
    {
        Transaction_m::start($transaction_id);
        redirect('order/detail/'.$transaction_id);
    }

    public function stop($transaction_id)
    {
        Transaction_m::stop($transaction_id);
        redirect('order/detail/'.$transaction_id);
    }

    public function cancel($transaction_id)
    {
        Transaction_m::cancel($transaction_id);
        redirect('order/detail/'.$transaction_id);
    }
}