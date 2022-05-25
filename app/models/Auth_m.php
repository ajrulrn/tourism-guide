<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_m extends CI_Model {

    private static $table = 'users', $ci;
    protected $fillable = [
        'name',
        'username',
        'email',
        'level_id'
    ];

    public function __construct()
    {
        parent::__construct();
        self::$ci = &get_instance();
    }

    public static function login()
    {
        $credentials = self::$ci->input->post();
        $user = self::$ci->db->where('username', $credentials['identity'])
        ->or_where('email', $credentials['identity'])
        ->get(self::$table)->row();
        
        if ($user) {
            if (password_verify($credentials['password'], $user->password)) {
                self::$ci->session->set_userdata([SESSION_KEY => $user->id]);
                return true;
            }
        }

        return false;
    }

    public function current_user()
    {
        if (!$this->session->has_userdata(SESSION_KEY)) return null;

        $user_id    = $this->session->userdata(SESSION_KEY);
        $user       = $this->db->select($this->fillable)->get_where($this->_table, ['id' => $user_id])->row();
        return $user;
    }

    public function logout()
    {
        $this->session->sess_destroy();
    }

    public static function register_rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Nama Lengkap',
                'rules' => 'required'
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|is_unique[users.username]'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[6]|matches[confirm_password]'
            ],
            [
                'field' => 'confirm_password',
                'label' => 'Konfirmasi Password',
                'rules' => 'required|matches[password]'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|is_unique[users.email]|valid_email'
            ],
            [
                'field' => 'terms',
                'label' => 'Terms',
                'rules' => 'required'
            ]
        ];
    }

    public static function register()
    {
        $user               = self::$ci->input->post();
        self::$ci->name     = $user['name'];
        self::$ci->username = $user['username'];
        self::$ci->password = $user['password'];
        self::$ci->email    = $user['email'];
        self::$ci->level_id = 3;
        self::$ci->db->insert(self::$table, self::$ci);
        return self::$ci->db->insert_id();
    }

}