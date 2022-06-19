<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
    }

    public function index()
    {
        $this->load->view('pages/setting');
    }

    public function change_password($username)
    {
        $validation = $this->form_validation;
        $validation->set_rules('old_password', 'Password Lama', 'required');
        $validation->set_rules('password', 'Password Baru', 'required|matches[confirm_password]');
        $validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|matches[password]');

        if ($validation->run()) {
            User_m::change_password_by_username($username);
        }

        redirect('setting');
    }

}