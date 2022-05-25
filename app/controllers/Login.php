<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_m');
    }

    public function index()
    {
        if ($this->session->has_userdata(SESSION_KEY)) redirect('dashboard');
        $this->load->view('pages/auth/login');
    }

    public function authenticate()
    {
        $authenticate = Auth_m::login();
        if (!$authenticate) redirect('login');

        if (current_user()->level_id == ADMIN) redirect('dashboard');
        if (current_user()->level_id == GUIDE) redirect('order');
        if (current_user()->level_id == TOURIST) redirect('home');
    }

    public function logout()
    {
        $this->Auth_m->logout();
        redirect('login');
    }

}