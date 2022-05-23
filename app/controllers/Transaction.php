<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

    public function index()
    {
        $this->load->view('pages/transaction/index');
    }

    public function detail()
    {
        $this->load->view('pages/transaction/detail');
    }

    public function checkout()
    {
        $this->load->view('pages/transaction/checkout');
    }
}