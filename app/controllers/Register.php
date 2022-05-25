<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
        if ($this->session->has_userdata(SESSION_KEY)) redirect('admin/dashboard');
        $this->load->view('pages/auth/register');
    }

    public function store()
    {

    }

}