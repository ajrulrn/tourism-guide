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
        $flashdata  = array('value' => 'Registrasi gagal, isilah form dengan benar!', 'status' => 'danger');
        $validation->set_rules(Auth_m::register_rules());
        if ($validation->run()) {
            Auth_m::register();
            $flashdata = array('value'=> 'Registrasi berhasil, silahkan login untuk masuk!', 'status' => 'success');
        }

        $this->session->set_flashdata('alert_login', $flashdata);
        redirect('login');
    }

}