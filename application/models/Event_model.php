<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    function insert($table, $data) {
        return $this->common_insert($table, $data);
    }

    function insert_with_language($table, $data){
        return $this->insert_batch($table, $data);
    }
}