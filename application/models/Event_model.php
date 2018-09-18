<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends MY_Model {

    public $table = 'event';

    public function __construct() {
        parent::__construct();
    }

    public function get_event_when_active($lang = '') {
        $this->db->query('SET SESSION group_concat_max_len = 10000000');
        $this->db->select($this->table .'.*, GROUP_CONCAT('. $this->table_lang .'.title ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_title,
                                GROUP_CONCAT('. $this->table_lang .'.description ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_description,
                                GROUP_CONCAT('. $this->table_lang .'.content ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_content,
                                GROUP_CONCAT('. $this->table_lang .'.imagetitle ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_imagetitle,
                                GROUP_CONCAT('. $this->table_lang .'.imagedescription ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_imagedescription,
                                GROUP_CONCAT('. $this->table_lang .'.imagealt ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_imagealt,
                                GROUP_CONCAT('. $this->table_lang .'.dynamictitle ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_dynamictitle,
                        ');
        $this->db->from($this->table);
        $this->db->join($this->table_lang, $this->table_lang .'.'. $this->table .'_id = '. $this->table .'.id', 'left');
        if($lang != ''){
            $this->db->where($this->table_lang .'.language', $lang);
        }
        $this->db->where($this->table .'.is_deleted', 0);
        $this->db->where($this->table .'.is_activated', 1);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function get_event_by_id($id, $lang = '') {
        $this->db->query('SET SESSION group_concat_max_len = 10000000');
        $this->db->select($this->table .'.*, GROUP_CONCAT('. $this->table_lang .'.title ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_title,
                                GROUP_CONCAT('. $this->table_lang .'.description ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_description,
                                GROUP_CONCAT('. $this->table_lang .'.content ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_content,
                                GROUP_CONCAT('. $this->table_lang .'.imagetitle ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_imagetitle,
                                GROUP_CONCAT('. $this->table_lang .'.imagedescription ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_imagedescription,
                                GROUP_CONCAT('. $this->table_lang .'.imagealt ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_imagealt,
                                GROUP_CONCAT('. $this->table_lang .'.dynamictitle ORDER BY '. $this->table_lang .'.language separator \' ||| \') as '. $this->table .'_dynamictitle,
                                ');
        $this->db->from($this->table);
        $this->db->join($this->table_lang, $this->table_lang .'.'. $this->table .'_id = '. $this->table .'.id', 'left');
        if($lang != ''){
            $this->db->where($this->table_lang .'.language', $lang);
        }
        $this->db->where($this->table .'.is_deleted', 0);
        $this->db->where($this->table .'.id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }
}