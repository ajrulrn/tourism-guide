<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_m extends CI_Model {

    private $_table = 'users';
    protected $fillable = [
        'name',
        'username',
        'email',
        'level_id'
    ];

    public function login()
    {
        $credentials = $this->input->post();
        $user = $this->db->where('username', $credentials['identity'])
        ->or_where('email', $credentials['identity'])
        ->get($this->_table)->row();
        
        if ($user) {
            if (password_verify($credentials['password'], $user->password)) {
                $this->session->set_userdata([SESSION_KEY => $user->id]);
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

}