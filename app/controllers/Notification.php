<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Midtrans');
    }

    public function callback()
    {
        Midtrans::notification_handler();
    }

    public function unfinish()
    {
        $this->load->view('');
    }

    public function finish()
    {
        $this->load->view('');
    }

    public function error()
    {
        $this->load->view('');
    }

}