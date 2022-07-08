<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination_m extends CI_Model {

    private static $table = 'destinations', $ci;

    public function __construct()
    {
        parent::__construct();
        self::$ci = &get_instance();
    }

    public static function rules()
    {
        return [
            [
                'field' => 'title',
                'label' => 'Nama Destinasi',
                'rules' => 'required'
            ],
            [
                'field' => 'price',
                'label' => 'Harga',
                'rules' => 'required'
            ],
            [
                'field' => 'min_tourist',
                'label' => 'Minimal Turis',
                'rules' => 'required'
            ],
            [
                'field' => 'max_tourist',
                'label' => 'Maksimal Turis',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'Deskripsi',
                'rules' => 'required'
            ],
            [
                'field' => 'city',
                'label' => 'Kota',
                'rules' => 'required'
            ]
        ];
    }

    public static function get_all()
    {
        return self::$ci->db->select(self::$table.'.*, regions.name AS `city`')
        ->from(self::$table)
        ->join('regions', 'regions.code = '.self::$table.'.region_code')
        ->get()->result();
    }

    public static function get_published()
    {
        return self::$ci->db->select(self::$table.'.*, regions.name AS `city`')
        ->from(self::$table)
        ->join('regions', 'regions.code = '.self::$table.'.region_code')
        ->where(self::$table.'.is_published', 1)
        ->get()->result();
    }

    public static function get_by_id($id)
    {
        return self::$ci->db->select(self::$table.'.*, regions.name AS `city`')
        ->from(self::$table)
        ->join('regions', 'regions.code = '.self::$table.'.region_code')
        ->where(self::$table.'.id', $id)
        ->get()->row();
    }
    
    public static function get_by_user_id($user_id)
    {
        return self::$ci->db->select(self::$table.'.*, regions.name AS `city`')
        ->from(self::$table)
        ->join('regions', 'regions.code = '.self::$table.'.region_code')
        ->where(self::$table.'.user_id', $user_id)
        ->get()->result();
    }

    public static function save()
    {
        self::_check_image();
        $image_data             = self::_upload_image();
        $destination            = self::$ci->input->post();
        self::$ci->title        = trim($destination['title']);
        self::$ci->price        = $destination['price'];
        self::$ci->region_code  = $destination['city'];
        self::$ci->user_id      = self::$ci->session->userdata(SESSION_KEY);
        self::$ci->description  = $destination['description'];
        self::$ci->duration     = $destination['duration'];
        self::$ci->min_tourist  = $destination['min_tourist'];
        self::$ci->max_tourist  = $destination['max_tourist'];
        self::$ci->image        = $image_data['file_name'];
        self::$ci->slug         = strtolower(str_replace(' ', '-', self::$ci->title));
        self::$ci->db->insert(self::$table, self::$ci);
    }

    public static function update($destination_id)
    {
        $current_data           = self::get_by_id($destination_id);
        $destination            = self::$ci->input->post();
        self::$ci->price        = $destination['price'];
        self::$ci->region_code  = $destination['city'];
        self::$ci->description  = $destination['description'];
        self::$ci->min_tourist  = $destination['min_tourist'];
        self::$ci->max_tourist  = $destination['max_tourist'];

        if ($current_data->title != $destination['title']) {
            self::$ci->title    = trim($destination['title']);
            self::$ci->slug     = strtolower(str_replace(' ', '-', self::$ci->title));
        }

        if ($current_data->duration != $destination['duration']) {
            self::delete_timeline($destination_id);
            self::$ci->is_published     = 0;
            self::$ci->is_have_timeline = 0;
            self::$ci->duration         = $destination['duration'];
        }

        self::$ci->db->update(self::$table, self::$ci, ['id' => $destination_id]);
    }

    private static function _check_image()
    {
        if (!$_FILES['image']['name']) {
            redirect('destination/create');
        }

        $config['upload_path']          = FCPATH.'assets/images/destinations/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 5000;
        $config['encrypt_name']         = TRUE;

        self::$ci->load->library('upload', $config);
    }

    private static function _upload_image()
    {
        if ( ! self::$ci->upload->do_upload('image')) {
            $error = array('error' => self::$ci->upload->display_errors());
            self::$ci->session->set_flashdata('alert_create_destination', $error['error']);
            redirect('destination/create');
        }

        return self::$ci->upload->data();
    }

    public static function create_timeline($data)
    {
        self::$ci->db->insert('destination_timelines', $data);
    }

    public static function delete_timeline($destination_id)
    {
        self::$ci->db->delete('destination_timelines', ['destination_id' => $destination_id]);
    }

    public function get_rating($destination_id)
    {
        $total_rows = $this->db->get_where('ratings', ['destination_id' => $destination_id])->num_rows();
        if (!$total_rows || $total_rows < 1) return 'Belum ada penilaian';
        $ratings    = $this->db->select_sum('rate')->get_where('ratings', ['destination_id' => $destination_id])->row()->rate;
        $rating     = $ratings / $total_rows;
        return $rating;
    }

    public function get_sold($destination_id)
    {
        return $this->db->get_where('transactions', ['destination_id' => $destination_id, 'status' => 'Selesai'])->num_rows();
    }

    public static function get_review($destination_id)
    {
        return self::$ci->db->select('ratings.*, users.name AS user')
        ->from('ratings')
        ->join('users', 'users.id = ratings.user_id')
        ->where('ratings.destination_id', $destination_id)
        ->order_by('ratings.inserted_at', 'desc')
        ->get()->row();
    }

    public static function get_total_review($destination_id)
    {
        return self::$ci->db->get_where('ratings', ['destination_id' => $destination_id])->num_rows();
    }

    public static function get_timelines($destination_id)
    {
        return self::$ci->db->get_where('destination_timelines', ['destination_id' => $destination_id])->result();
    }

    public static function update_timeline($destination_id)
    {
        self::$ci->db->update(self::$table, ['is_have_timeline' => 1], ['id' => $destination_id]);
    }

    public static function publish($destination_id)
    {
        self::$ci->db->update(self::$table, ['is_published' => 1], ['id' => $destination_id]);
    }
    
    public static function unpublish($destination_id)
    {
        self::$ci->db->update(self::$table, ['is_published' => 0], ['id' => $destination_id]);
    }

    public static function get_top_destination()
    {
        return self::$ci->db->select(self::$table.'.*, regions.name AS `city`')
        ->from('ratings')
        ->join(self::$table, self::$table.'.id = ratings.destination_id')
        ->join('regions', 'regions.code = '.self::$table.'.region_code')
        ->where(self::$table.'.is_published', 1)
        ->group_by('ratings.destination_id')
        ->get()->result();
    }

    public static function get_total()
    {
        return self::$ci->db->count_all_results(self::$table);
    }

    public static function get_most_visited()
    {
        return self::$ci->db->select('count(transactions.destination_id) AS `total`, '.self::$table.'.title')
        ->from('transactions')
        ->join(self::$table, self::$table.'.id = transactions.destination_id')
        ->where('transactions.status', 'SUCCESS')
        ->group_by('transactions.destination_id')
        ->limit(5)
        ->get()->result();
    }

    public static function get_group_timeline($destination_id)
    {
        return self::$ci->db->group_by('day')->get_where('destination_timelines', ['destination_id' => $destination_id])->result();
    }
}