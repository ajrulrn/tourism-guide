<?php

class Notification {

    private $response;

    public function __construct($input_source = "php://input")
    {   
        $CI =& get_instance();
        $CI->load->library('Transaction');
        $Library = $CI->transaction;
        $raw_notification   = json_decode(file_get_contents($input_source), true);
        $status_response    = $Library::status($raw_notification['transaction_id']);
        $this->response     = $status_response;
    }

    public function __get($name)
    {
        if (isset($this->response->$name)) {
            return $this->response->$name;
        }
    }

    public function getResponse()
    {
        return $this->response;
    }
    
}