<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends MY_Model {

    public $table = 'event';

    public function __construct() {
        parent::__construct();
    }
}