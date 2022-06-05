<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_m extends CI_Model {

    private static $table = 'transactions', $ci;

    public function __construct()
    {
        parent::__construct();
        self::$ci = &get_instance();
        $this->load->model('Destination_m');
    }

    public static function rules()
    {
        return [
            [
                'field' => 'num_of_tourist',
                'label' => 'Jumlah Turis',
                'rules' => 'required'
            ],
            [
                'field' => 'trip_date',
                'label' => 'Tanggal Perjalanan',
                'rules' => 'required'
            ]
        ];
    }

    public static function get_all()
    {
        return self::$ci->db->select(self::$table.'.*, destinations.title AS `destination`, destinations.price')
        ->from(self::$table)
        ->join('destinations', 'destinations.id = '.self::$table.'.destination_id')
        ->get()->result();
    }

    public static function get_by_id($transaction_id)
    {
        return self::$ci->db->select(self::$table.'.*, destinations.title AS `destination`, destinations.price, destinations.user_id AS `destination_user_id`')
        ->from(self::$table)
        ->join('destinations', 'destinations.id = '.self::$table.'.destination_id')
        ->where(self::$table.'.id', $transaction_id)
        ->get()->row();
    }

    public static function get_by_user_id($user_id)
    {
        return self::$ci->db->select(self::$table.'.*, destinations.title AS `destination`, destinations.price')
        ->from(self::$table)
        ->join('destinations', 'destinations.id = '.self::$table.'.destination_id')
        ->where(self::$table.'.user_id', $user_id)
        ->get()->result();
    }

    public static function get_order_by_guide_id($guide_id)
    {
        return self::$ci->db->select(self::$table.'.*, destinations.title AS `destination`, destinations.price')
        ->from(self::$table)
        ->join('destinations', 'destinations.id = '.self::$table.'.destination_id')
        ->where('destinations.user_id', $guide_id)
        ->get()->result();
    }

    public static function get_order_by_id($transaction_id)
    {
        return self::$ci->db->select(self::$table.'.*, destinations.title AS `destination`, destinations.price, users.username')
        ->from(self::$table)
        ->join('destinations', 'destinations.id = '.self::$table.'.destination_id')
        ->join('users', 'users.id = '.self::$table.'.user_id')
        ->where(self::$table.'.id', $transaction_id)
        ->get()->row();
    }

    public static function save($destination_id)
    {
        $transaction                = self::$ci->input->post();
        $destination                = Destination_m::get_by_id($destination_id);
        $subtotal                   = $destination->price * $transaction['num_of_tourist'];
        $trip_date                  = explode('/', $transaction['trip_date']);
        self::$ci->user_id          = self::$ci->session->userdata(SESSION_KEY);
        self::$ci->destination_id   = $destination_id;
        self::$ci->subtotal         = $subtotal;
        self::$ci->num_of_tourist   = $transaction['num_of_tourist'];
        self::$ci->trip_date        = $trip_date[2].'-'.$trip_date[1].'-'.$trip_date[0];
        self::$ci->status           = 'Menunggu Pembayaran'; 
        self::$ci->db->insert(self::$table, self::$ci);
        return self::$ci->db->insert_id();
    }

    public static function pay($transaction_id)
    {
        self::$ci->payment_method   = 'Gopay';
        self::$ci->status           = 'Siap diproses';
        self::$ci->db->update(self::$table, self::$ci, ['id' => $transaction_id]);
    }

    public function check_rate($transaction_id)
    {
        $transaction = self::$ci->db->get_where('ratings', ['transaction_id' => $transaction_id])->row();
        if ($transaction) return true;
        return false;
    }

    public static function update_status($transaction_id, $status)
    {
        self::$ci->status = $status;
        self::$ci->db->update(self::$table, self::$ci, ['id' => $transaction_id]);
    }

    public static function update_va_number($transaction_id, $va_number, $payment_type)
    {
        self::$ci->va_number        = $va_number;
        self::$ci->status           = 'Pending';
        self::$ci->payment_method   = $payment_type;
        self::$ci->db->update(self::$table, self::$ci, ['id' => $transaction_id]);
    }
}