<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Midtrans {

    public static function request_payment($body)
    {
        $CI = &get_instance();
        $CI->load->model('Transaction_m');

        $Model      = $CI->Transaction_m;
        $base_url   = $_ENV['APP_ENV'] == 'production' ? $_ENV['MIDTRANS_PRODUCTION_URL'] : $_ENV['MIDTRANS_SANDBOX_URL'];
        $url        = $base_url.'/charge';
        $curl       = curl_init();

        
        $curl_options = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Accept: application/json',
                'Authorization: Basic ' . base64_encode($_ENV['MIDTRANS_SERVER_KEY'] . ':')
            ),
        );
        curl_setopt_array($curl, $curl_options);

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);
        if ($response->payment_type == 'bank_transfer') $Model->update_va_number($response->order_id, $response->va_numbers[0]->va_number, $response->va_numbers[0]->bank, date('Y-m-d H:i:s', strtotime('+1 day', strtotime($response->transaction_time))));
    }

    public static function notification_handler()
    {   
        $CI = &get_instance();
        $CI->load->model('Transaction_m');
        $notification = new Notification();

        $order = explode('-', $notification->order_id);

        // Assign variable
        $status     = $notification->transaction_status;
        $type       = $notification->payment_type;
        $fraud      = $notification->fraud_status;
        $order_id   = $order[1];

        // Search transaction by id
        $transaction = Transaction_m::get_by_id($order_id);
        if ($transaction->status != $status) Transaction_m::update_status($order_id, $status);
        exit(0);
    }

    public static function check_status($transaction_id)
    {
        $CI = &get_instance();
        $CI->load->model('Transaction_m');
        $Model = $CI->Transaction_m;

        $base_url   = $_ENV['APP_ENV'] == 'production' ? $_ENV['MIDTRANS_PRODUCTION_URL'] : $_ENV['MIDTRANS_SANDBOX_URL'];
        $url        = $base_url.'/'.$transaction_id.'/status';
        $curl       = curl_init();

        
        $curl_options = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Accept: application/json',
                'Authorization: Basic ' . base64_encode($_ENV['MIDTRANS_SERVER_KEY'] . ':')
            ),
        );
        curl_setopt_array($curl, $curl_options);

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);
        if ($response->transaction_status != 'pending') {
            if ($response->transaction_status == 'settlement') $Model->update_status($transaction_id, 'Siap diproses');
        }
    }
    
}