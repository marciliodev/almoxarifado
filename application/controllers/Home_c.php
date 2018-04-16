<?php
/**
 * Created by PhpStorm.
 * User: marci
 * Date: 13/04/2018
 * Time: 17:18
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('index');
    }

}