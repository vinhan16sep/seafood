<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends Public_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->render('booking_view');
    }

}