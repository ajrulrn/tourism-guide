<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    private static $table = 'users', $ci;
    public static $id, $name, $username, $password, $email, $level;

    public function __construct()
    {
        parent::__construct();
        self::$ci = &get_instance();
    }

    public static function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|is_unique[users.email]|valid_email'
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|is_unique[users.username]|alpha_numeric'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|matches[confirmation_password]|min_length[8]'
            ],
            [
                'field' => 'confirmation_password',
                'label' => 'Konfirmasi Password',
                'rules' => 'required|matches[password]'
            ],
            [
                'field' => 'level',
                'label' => 'Level',
                'rules' => 'required'
            ]
        ];
    }

    public static function get_all()
    {
        return self::$ci->db->select(self::$table.'.*, levels.name AS level')
        ->from(self::$table)
        ->join('levels', 'levels.id = '.self::$table.'.level_id')
        ->get()->result();
    }

    public static function get_by_id($id)
    {
        return self::$ci->db->get_where(self::$table, ['id' => $id])->row();
    }

    public static function save()
    {
        $post               = self::$ci->input->post();
        self::$ci->name     = $post['name'];
        self::$ci->username = $post['username'];
        self::$ci->email    = $post['email'];
        self::$ci->password = password_hash($post['password'], PASSWORD_DEFAULT);
        self::$ci->level_id    = $post['level'];
        self::$ci->db->insert(self::$table, self::$ci);
    }

    public function update($id)
    {
        $post           = self::$ci->input->post();
        self::$name     = $post['name'];
        self::$email    = $post['email'];
        return self::$ci->db->update(self::$table, self::$ci, ['id' => $id]);
    }

    public function delete($id)
    {
        return self::$ci->db->delete(self::$table, ['id' => $id]);
    }

    public static function get_all_levels()
    {
        return self::$ci->db->get('levels')->result();
    }

    public static function update_profile_by_username($username)
    {
        $post           = self::$ci->input->post();
        self::$ci->name = $post['name'];
        self::$ci->db->update(self::$table, self::$ci, ['username' => $username]);
    }

    public static function change_password_by_username($username)
    {
        $post = self::$ci->input->post();
        $user = self::$ci->db->get_where(self::$table, ['username' => $username])->row();

        if (password_verify($post['old_password'], $user->password)) {
            self::$ci->password = password_hash($post['password'], PASSWORD_DEFAULT);
            self::$ci->db->update(self::$table, self::$ci, ['username' => $username]);
        }
    }

    public static function activate($id)
    {
        self::$ci->is_activate = 1;
        self::$ci->db->update(self::$table, self::$ci, ['id' => $id]);
    }

    public static function unactivate($id)
    {
        self::$ci->is_activate = 0;
        self::$ci->db->update(self::$table, self::$ci, ['id' => $id]);
    }

    public static function get_guides()
    {
        return self::$ci->db->get_where(self::$table, ['level_id' => GUIDE])->num_rows();
    }

    public static function get_tourists()
    {
        return self::$ci->db->get_where(self::$table, ['level_id' => TOURIST])->num_rows();
    }
}