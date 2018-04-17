<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once APPPATH . '/third_party/mpdf-7.0/autoload.php';

class Mpdf {

    function __construct() {
        $CI = & get_instance();
    }

    function load($param = NULL) {
        return new \Mpdf\Mpdf($param);
    }

}