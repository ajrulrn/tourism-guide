<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_m');
    }

    public function index()
    {
        if ($this->session->has_userdata(SESSION_KEY)) redirect('dashboard');
        $this->load->view('pages/auth/register');
    }

    public function store()
    {
        $validation = $this->form_validation;
        $flashdata  = '';
        $validation->set_rules(Auth_m::register_rules());
        if ($validation->run()) {
            Auth_m::register();
            $flashdata = '';
        }
        
        $this->session->set_flashdata('');
        redirect('login');
    }

}