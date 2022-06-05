<?php

class Transaction {

    public static function status($id)
    {   
        $base_url   = $_ENV['APP_ENV'] == 'production' ? $_ENV['MIDTRANS_PRODUCTION_URL'] : $_ENV['MIDTRANS_SANDBOX_URL'];
        $url        = $base_url.$id.'/status';
        $ch         = curl_init();

        $curl_options = array(
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Accept: application/json',
                'Authorization: Basic ' . base64_encode($_ENV['MIDTRANS_SERVER_KEY'] . ':')
            ),
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1
        );
        curl_setopt_array($ch, $curl_options);

        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}