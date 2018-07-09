<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends Public_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('blog_model');
        $this->data['lang'] = $this->session->userdata('langAbbreviation');
    }

	public function index()
	{
		$this->data['current_link'] = 'blog';

        $total_rows  = $this->blog_model->count_search();
        $this->load->library('pagination');
        $config = array();
        $base_url = base_url('blog/index');
        $per_page = 10;
        $uri_segment = 3;
        foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $result = $this->blog_model->get_all_with_pagination_by_lang($per_page, $this->data['page'], $this->data['lang']);
        $this->data['blogs'] = $result;
		
		$this->render('blog_view');
	}

	public function detail($slug='')
	{
		$this->data['current_link'] = 'blog/detail';
		$detail = $this->blog_model->get_by_slug($slug, $this->data['lang']);
		$this->data['detail'] = $detail;
		$this->render('detail_blog_view');
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */