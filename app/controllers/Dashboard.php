<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            'Destination_m',
            'User_m',
            'Transaction_m'
        ]);
    }

    public function index()
    {
        $data = [
            'total_destinations' => Destination_m::get_total(),
            'total_guides' => User_m::get_guides(),
            'total_tourists' => User_m::get_tourists(),
            'total_transactions' => Transaction_m::get_total(),
            'most_visited_destinations' => Destination_m::get_most_visited(),
            'latest_transactions' => Transaction_m::get_latest_transactions()
        ];
        
        $this->load->view('pages/dashboard', $data);
    }

}