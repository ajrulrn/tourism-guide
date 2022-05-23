<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_m extends CI_Model {

    private static $table = 'chats', $ci;

    public function __construct()
    {
        parent::__construct();
        self::$ci = &get_instance();
    }

}