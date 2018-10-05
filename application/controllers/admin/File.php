<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property  blog_model
 */
class File extends Admin_Controller {
	function __construct() {
        parent::__construct();
        $this->load->helper('file');
		$this->load->helper('form');
    }
    function edit(){
    	if(!empty($_FILES['link_shared']['name']) && $_FILES['link_shared']['size'] < 20971520){
	    	if(strtolower($_FILES['link_shared']['name']) == 'sitemap.xml'){
		    	if(file_exists('sitemap.xml')){
		    		unlink('sitemap.xml');
		    	}
		    	move_uploaded_file($_FILES['link_shared']['tmp_name'], strtolower($_FILES['link_shared']['name']));
	    		$this->session->set_flashdata('message_success','Sửa thành công');
	    		redirect('admin/file/edit', 'refresh');  
	    	}else{
	    		$this->session->set_flashdata('message_error','Sửa thất bại');
	    		redirect('admin/file/edit', 'refresh');  
	    	}
    	}

    	$this->render('admin/edit_file_view');
    }

}