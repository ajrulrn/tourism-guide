<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('rating')) 
{
    function rating($destination_id) 
    {
        $CI = &get_instance();
        $CI->load->model('Destination_m');
        $Model = $CI->Destination_m;
        return $Model->get_rating($destination_id);
    }
}

if (!function_exists('sold'))
{
    function sold($destination_id)
    {
        $CI = &get_instance();
        $CI->load->model('Destination_m');
        $Model  = $CI->Destination_m;
        $sold   = $Model->get_sold($destination_id);
        $result = 'Belum terjual';
        if ($sold > 0) {
            if (strlen($sold) == 4) $sold = substr($sold, 0, 1).'rb+';
            if (strlen($sold) == 5) $sold = substr($sold, 0, 2).'rb+';
            if (strlen($sold) == 6) $sold = substr($sold, 0, 3).'rb+';
            if (strlen($sold) == 7) $sold = substr($sold, 0, 1).'jt+';
            if (strlen($sold) == 8) $sold = substr($sold, 0, 2).'jt+';
            if (strlen($sold) == 9) $sold = substr($sold, 0, 3).'jt+';
            if (strlen($sold) == 10) $sold = substr($sold, 0, 1).'m+';
            $result = 'Terjual '.$sold;
        }
        return $result;
    }
}

if (!function_exists('province'))
{
    function province($region_code)
    {
        $CI = &get_instance();
        $CI->load->model('Region_m');
        $Model          = $CI->Region_m;
        $region_code    = substr($region_code, 0, 2);
        $province       = $Model->get_province($region_code)->name;
        return $province;
    }
}