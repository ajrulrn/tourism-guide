<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Region_m');
    }

    public function get_cities()
    {
        $province_id    = $this->input->post('province_id', TRUE);
        $cities         = Region_m::get_cities($province_id);
        $result = [
            'cities' => $cities
        ];
        echo json_encode($result);
    }

}