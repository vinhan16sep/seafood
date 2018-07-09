<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends MY_Model {

	public $table = 'blog';

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_all_blog(){
        $this->db->from('blog');
        $this->db->where('is_deleted', 0);
        return $result = $this->db->get()->result_array();
    }

}

/* End of file Blog_model.php */
/* Location: ./application/models/Blog_model.php */