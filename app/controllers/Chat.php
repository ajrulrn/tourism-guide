<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            'Chat_m',
            'User_m'
        ]);
    }

    public function index()
    {
        $data = [
            'chats' => Chat_m::get_conversation_catalog()
        ];
        $this->load->view('pages/chat/index', $data);
    }

    public function detail($user_id)
    {
        $data = [
            'receiver'  => User_m::get_by_id($user_id),
        ];
        $this->load->view('pages/chat/detail', $data);
    }

    public function store()
    {
        $chat = Chat_m::create();
        echo json_encode($chat);
    }

    public function get_conversation()
    {
        $receiver_user_id   = $this->input->post('receiver_user_id', true);
        $chats              = Chat_m::get_detail_conversation($receiver_user_id);

        echo json_encode($chats);
    }

}