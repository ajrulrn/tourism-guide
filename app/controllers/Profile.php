<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
    }

    public function index()
    {
        $data = [

        ];
        $this->load->view('pages/profile', $data);
    }

    public function update($username)
    {
        $validation = $this->form_validation;
        $validation->set_rules('name', 'Nama', 'required');

        if ($validation->run()) {
            User_m::update_profile_by_username($username);
        }

        redirect('home');
    }

}