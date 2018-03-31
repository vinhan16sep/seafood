<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * @param $table
     * @param $data
     * @return integer|bool
     */
    protected function common_insert($table, $data) {
        $this->db->set($data)->insert($table);

        if ($this->db->affected_rows() == 1) {
            return $this->db->insert_id();
        }
        return false;
    }

    /**
     * @param $table
     * @param $data
     * @return mixed
     */
    protected function insert_batch($table, $data){
        return $this->db->insert_batch($table, $data);
    }
}