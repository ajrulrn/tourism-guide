<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('pages/order/index');
    }

    public function detail()
    {
        $this->load->view('pages/order/detail');
    }

}