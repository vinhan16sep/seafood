<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    public $table = '';
    public $table_lang = '';

    function __construct() {
        parent::__construct();
        $this->table_lang = $this->table . '_lang';
    }

    /**
     * @param $data
     * @return integer|bool
     */
    function common_insert($data) {
        $this->db->set($data)->insert($this->table);

        if ($this->db->affected_rows() == 1) {
            return $this->db->insert_id();
        }
        return false;
    }

    /**
     * @param $data
     * @return mixed
     */
    function insert_with_language($data){
        return $this->db->insert_batch($this->table, $data);
    }
}