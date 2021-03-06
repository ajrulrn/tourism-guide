<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
    }

    public function index()
    {
        $data = [
            'users' => User_m::get_all()
        ];
        $this->load->view('pages/user/index', $data);
    }
    
    public function create()
    {
        $data = [
            'levels' => User_m::get_all_levels()
        ];
        $this->load->view('pages/user/create', $data);
    }

    public function store()
    {
        $validation = $this->form_validation;
        $flashdata  = array('value' => 'User gagal dibuat, mohon isi form dengan benar!', 'status' => 'danger');
        $validation->set_rules(User_m::rules());
        if ($validation->run()) {
            User_m::save();
            $flashdata  = array('value' => 'User baru berhasil dibuat!', 'status' => 'success');
        }

        $this->session->set_flashdata('admin_user', $flashdata);
        redirect('user');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('user');

        $data = [
            'user' => User_m::get_by_id($id)
        ];

        $this->load->view('pages/user/edit', $data);
    }

    public function update($id = null)
    {
        if (!isset($id)) redirect('user');

        $user       = $this->User_m;
        $validation = $this->form_validation;
        
        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('admin_user');
        }

        redirect('user');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();
    }

    public function activate($id)
    {
        User_m::activate($id);
        redirect('user');
    }

    public function unactivate($id)
    {
        User_m::unactivate($id);
        redirect('user');
    }

}