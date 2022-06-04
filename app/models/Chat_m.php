<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_m extends CI_Model {

    private static $table = 'chats', $ci;

    public function __construct()
    {
        parent::__construct();
        self::$ci = &get_instance();
    }

    public static function get_conversations($receiver_user_id)
    {
        return self::$ci->db->get_where(self::$table, ['sender_user_id' => self::$ci->session->userdata(SESSION_KEY), 'receiver_user_id' => $receiver_user_id])->result();
    }

    public static function create()
    {
        $chat                       = self::$ci->input->post();
        self::$ci->sender_user_id   = self::$ci->session->userdata(SESSION_KEY);
        self::$ci->receiver_user_id = $chat['receiver_user_id'];
        self::$ci->message          = $chat['message'];
        self::$ci->db->insert(self::$table, self::$ci);
        return self::$ci->db->insert_id();
    }

    public static function get_detail_conversation($user_id)
    {
        return self::$ci->db->select('chats.*, receiver.name AS `receiver`, sender.name AS `sender`')
        ->from('chats')
        ->join('users AS receiver', 'receiver.id = chats.receiver_user_id')
        ->join('users AS sender', 'sender.id = chats.sender_user_id')
        ->where('(chats.sender_user_id = '.self::$ci->session->userdata(SESSION_KEY).' OR chats.receiver_user_id = '.self::$ci->session->userdata(SESSION_KEY).') AND (chats.receiver_user_id = '.$user_id.' OR chats.sender_user_id = '.$user_id.')')
        ->order_by('chats.inserted_at', 'ASC')
        ->get()->result();
    }

    public static function get_conversation_catalog()
    {
        $users = self::$ci->db->where_not_in('id', [self::$ci->session->userdata(SESSION_KEY)])->get('users')->result();

        $chats = [];
        foreach($users as $item) {
            array_push($chats, self::$ci->db->select('chats.*, receiver.name AS `receiver`, sender.name AS `sender`')
            ->from('chats')
            ->join('users AS receiver', 'receiver.id = chats.receiver_user_id')
            ->join('users AS sender', 'sender.id = chats.sender_user_id')
            ->where('(chats.sender_user_id = '.self::$ci->session->userdata(SESSION_KEY).' OR chats.receiver_user_id = '.self::$ci->session->userdata(SESSION_KEY).') AND (chats.receiver_user_id = '.$item->id.' OR chats.sender_user_id = '.$item->id.')')
            ->order_by('chats.inserted_at', 'DESC')
            ->limit(1)->get()->row());
        }

        $filter = array_filter($chats, function($e) {
            return is_object($e);
        });
        return $filter;
    }

}