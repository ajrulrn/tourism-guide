<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('current_user')) 
{
    function current_user() 
    {
        $CI = &get_instance();
        $CI->load->model('Auth_m');
        $Auth = $CI->Auth_m;
        return $Auth->current_user();
    }
}