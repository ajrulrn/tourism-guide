<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MX_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata(SESSION_KEY)) redirect('login');
    }

}