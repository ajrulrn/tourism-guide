<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region_m extends CI_Model {

    private static $table = 'regions', $ci;

    public function __construct()
    {
        parent::__construct();
        self::$ci = &get_instance();
    }

    public function get_province($region_code)
    {
        return $this->db->get_where(self::$table, ['code' => $region_code])->row();
    }

    public static function get_provinces()
    {
        return self::$ci->db->order_by('name', 'ASC')->get_where(self::$table, ['LENGTH(code) = ' => 2])->result();
    }

    public static function get_cities($province_id)
    {
        return self::$ci->db->like('code', $province_id)->get_where(self::$table, ['LENGTH(code) = ' => 5])->result();
    }

}