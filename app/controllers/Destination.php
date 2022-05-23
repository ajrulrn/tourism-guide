<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model([
            'Destination_m',
            'Region_m'
        ]);
    }

    public function index()
    {
        if ($this->session->has_userdata(SESSION_KEY) && current_user()->level_id == 2) {
            $destinations = Destination_m::get_by_user_id($this->session->userdata(SESSION_KEY));
        } else if ($this->session->has_userdata(SESSION_KEY) && current_user()->level_id == 1) {
            $destinations = Destination_m::get_all();
        } else {
            $destinations = Destination_m::get_published();
        }

        $data = [
            'destinations' => $destinations
        ];
        $this->load->view('pages/destination/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'destination'   => Destination_m::get_by_id($id),
            'review'        => Destination_m::get_review($id),
            'total_review'  => Destination_m::get_total_review($id)
        ];
        $this->load->view('pages/destination/detail', $data);
    }

    public function view($id)
    {
        $data = [
            'destination'   => Destination_m::get_by_id($id),
            'review'        => Destination_m::get_review($id),
            'total_review'  => Destination_m::get_total_review($id),
            'timelines'     => Destination_m::get_timelines($id)
        ];
        $this->load->view('pages/destination/view', $data);
    }

    public function edit($id)
    {
        $destination = Destination_m::get_by_id($id);
        $data = [
            'destination'   => $destination,
            'provinces'     => Region_m::get_provinces(),
            'cities'        => Region_m::get_cities(substr($destination->region_code, 0, 2))
        ];
        $this->load->view('pages/destination/edit', $data);
    }

    public function create()
    {
        $data = [
            'provinces' => Region_m::get_provinces()
        ];
        $this->load->view('pages/destination/create', $data);
    }

    public function store()
    {
        $validation = $this->form_validation;
        $flashdata = 'Destinasi gagal ditambah';
        $validation->set_rules(Destination_m::rules());
        if ($validation->run()) {
            Destination_m::save();
            $flashdata = 'Destinasi berhasil ditambah';
        }

        $this->session->set_flashdata('alert_destination', $flashdata);
        redirect('destination');
    }

    public function update($id)
    {
        $validation = $this->form_validation;
        $flashdata  = 'Gagal mengubah destinasi';
        $validation->set_rules(Destination_m::rules());
        if ($validation->run()) {
            Destination_m::update($id);
            $flashdata  = 'Destinasi berhasil diubah.';
        }

        $this->session->set_flashdata('alert_destination', $flashdata);
        redirect('destination');
    }

    public function timeline($id)
    {
        $data = [
            'destination' => Destination_m::get_by_id($id)
        ];
        $this->load->view('pages/destination/timeline', $data);
    }

    public function save_timeline($id)
    {
        $destination = Destination_m::get_by_id($id);
        
        for ($i = 1; $i <= $destination->duration; $i++) {
            $times_array['day_'.$i] = $this->input->post('times'. $i .'[]');
            $desc_array['day_'.$i] = $this->input->post('desc'.$i.'[]');

            for ($x = 0; $x < count($times_array['day_'.$i]); $x++) {
                // $data[$i][$x]['time'] = $times_array['day_'.$i][$x];
                // echo $i.'-'.$x.'<br>';
                $time = $times_array['day_'.$i][$x];
                $desc = $desc_array['day_'.$i][$x];
                if ($time && $desc) {
                    $data = [
                        'destination_id'    => $id,
                        'day'               => $i,
                        'time'              => $time,
                        'description'       => $desc,
                    ];
                    Destination_m::create_timeline($data);
                    $updated = true;
                }
            }
        }

        if ($updated) Destination_m::update_timeline($id);

        redirect('destination');
    }

    public function delete_timeline($id)
    {
        Destination_m::delete_timeline($id);
        $this->session->set_flashdata('alert_destination', 'Timeline berhasil dihapus');
        redirect('destination');
    }

    public function publish($id)
    {
        Destination_m::publish($id);
        redirect('destination');
    }

    public function unpublish($id)
    {
        Destination_m::unpublish($id);
        redirect('destination');
    }
}