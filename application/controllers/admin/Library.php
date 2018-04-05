<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Library extends Admin_Controller
{
	
	private $request_language_template = array(
        'title'
    );
    private $author_data = array();

    function __construct() {
        parent::__construct();

        $this->load->model('library_model');
        $this->load->helper('common');

        $this->author_data = handle_author_common_data();
    }

    public function index(){
    	$keywords = '';
        if($this->input->get('search')){
            $keywords = $this->input->get('search');
        }
        $total_rows  = $this->library_model->count_search();
        if($keywords != ''){
            $total_rows  = $this->library_model->count_search($keywords);
        }

        $this->load->library('pagination');
        $config = array();
        $base_url = base_url('admin/library/index');
        $per_page = 10;
        $uri_segment = 4;
        foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $result = $this->library_model->get_all_with_pagination_search($per_page, $this->data['page']);
        if($keywords != ''){
            $result = $this->library_model->get_all_with_pagination_search($per_page, $this->data['page'], $keywords);
        }
        if($result){
        	foreach ($result as $key => $value) {
        		$result[$key]['image'] = json_decode($value['image']);
        	}
        }
        $this->data['library'] = $result;
        $this->data['keywords'] = $keywords;

    	$this->render('admin/library/list_lirary_view');
    }

    public function create(){
    	$this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title_vi', 'Tiêu đề', 'trim|required');
        $this->form_validation->set_rules('title_en', 'Title', 'trim|required');
        $this->form_validation->set_rules('title_cn', '标题', 'trim|required');

        if ($this->form_validation->run() === false) {
            $this->render('admin/library/create_library_view');
        } else {
            if ($this->input->post()) {
            	$slug = $this->input->post('slug_shared');
            	$unique_slug = $this->library_model->build_unique_slug($slug);
            	if(!file_exists("assets/upload/library/".$unique_slug)){
                    mkdir("assets/upload/library/".$unique_slug, 0755);
                    mkdir("assets/upload/library/".$unique_slug.'/thumb', 0755);
                }

                $image = $this->upload_file('./assets/upload/library/'.$unique_slug, 'image_shared', 'assets/upload/library/'. $unique_slug .'/thumb');
                $image_json = json_encode($image);
                $shared_request = array(
                    'image' => $image_json,
                    'slug' => $unique_slug,
                    'created_at' => $this->author_data['created_at'],
                    'created_by' => $this->author_data['created_by'],
                    'updated_at' => $this->author_data['updated_at'],
                    'updated_by' => $this->author_data['updated_by']
                );

                $this->db->trans_begin();

                $insert = $this->library_model->common_insert($shared_request);
                if($insert){
                    $requests = handle_multi_language_request('library_id', $insert, $this->request_language_template, $this->input->post(), $this->page_languages);
                    $this->library_model->insert_with_language($requests);
                }

                if ($this->db->trans_status() === false) {
                    $this->db->trans_rollback();
                    $this->load->libraries('session');
                    $this->session->set_flashdata('message', 'Cannot add item!');
                    $this->render('admin/library/create_library_view');
                } else {
                    $this->db->trans_commit();
                    $this->session->set_flashdata('message', 'Item added!');
                    redirect('admin/library', 'refresh');
                }

            }
        }
        
    }

    public function edit($id){
    	$this->load->helper('form');
        $this->load->library('form_validation');

        $library = $this->library_model->get_library_by_id($id);
        $title = explode('|||', $library['library_title']);
        $library['title_cn'] = $title[0];
        $library['title_en'] = $title[1];
        $library['title_vi'] = $title[2];

        if($library){
    		$library['image'] = json_decode($library['image']);
        }
        $this->data['library'] = $library;

        $this->form_validation->set_rules('title_vi', 'Tiêu đề', 'trim|required');
        $this->form_validation->set_rules('title_en', 'Title', 'trim|required');
        $this->form_validation->set_rules('title_cn', '标题', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
        	$this->render('admin/library/edit_library_view');
        } else {
        	if ($this->input->post()) {
        		$slug = $this->input->post('slug_shared');
            	$unique_slug = $this->library_model->build_unique_slug($slug, $id);
                if(file_exists("assets/upload/library/".$library['slug'])){
                    rename("assets/upload/library/".$library['slug'], "assets/upload/library/".$unique_slug);
                }
            	if(!file_exists("assets/upload/library/".$unique_slug)){
                    mkdir("assets/upload/library/".$unique_slug, 0755);
                    mkdir("assets/upload/library/".$unique_slug.'/thumb', 0755);
                }
        		$image = $this->upload_file('./assets/upload/library/'.$unique_slug, 'image_shared', 'assets/upload/library/'. $unique_slug .'/thumb');
        		$image_array = array();
        		$image_array = $library['image'];
        		if($image){
        			foreach ($image as $key => $value) {
        				$image_array[] = $value;
        			}
        		}
        		$shared_request = array(
                    'slug' => $unique_slug,
                    'created_at' => $this->author_data['created_at'],
                    'created_by' => $this->author_data['created_by'],
                    'updated_at' => $this->author_data['updated_at'],
                    'updated_by' => $this->author_data['updated_by']
                );
                if($image){
                	$shared_request['image'] = json_encode($image_array);
                }

                $this->db->trans_begin();

                $update = $this->library_model->common_update($id, $shared_request);
                if($update){
                    $requests = handle_multi_language_request('library_id', $id, $this->request_language_template, $this->input->post(), $this->page_languages);
                    foreach ($requests as $key => $value){
                        $this->library_model->update_with_language($id, $requests[$key]['language'], $value);
                    }
                }

                if ($this->db->trans_status() === false) {
                    $this->db->trans_rollback();
                    $this->load->libraries('session');
                    $this->session->set_flashdata('message', 'Cannot add item!');
                    $this->render('admin/library/edit/'.$id);
                } else {
                    $this->db->trans_commit();
                    $this->session->set_flashdata('message', 'Item added!');
                    redirect('admin/library', 'refresh');
                }
        	}
        }

    	
    }

    public function detail($id){
    	$this->load->helper('form');
        $this->load->library('form_validation');

    	$library = $this->library_model->get_library_by_id($id);

    	$title = explode('|||', $library['library_title']);
        $library['title_cn'] = $title[0];
        $library['title_en'] = $title[1];
        $library['title_vi'] = $title[2];

        if($library){
    		$library['image'] = json_decode($library['image']);
        }
        $this->data['library'] = $library;


    	$this->render('admin/library/detail_library_view');
    }

    public function remove_image(){
    	$id = $this->input->post('id');
    	$image = $this->input->post('image');
    	$library = $this->library_model->get_only_library_by_id($id);

    	$upload = [];
        $upload = json_decode($library['image']);
        $key = array_search($image, $upload);
        unset($upload[$key]);
        $newUpload = [];
        foreach ($upload as $key => $value) {
            $newUpload[] = $value;
        }
        
        $image_json = json_encode($newUpload);
        $data = array('image' => $image_json);

        $update = $this->library_model->common_update($id, $data);
        if($update == 1){
            $reponse = array(
                'csrf_hash' => $this->security->get_csrf_hash()
            );
            if($image != '' && file_exists('assets/upload/library/'.$library['slug'].'/'.$image)){
            	unlink('assets/upload/library/'.$library['slug'].'/'.$image);
            }
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'reponse' => $reponse)));
        }
            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(HTTP_BAD_REQUEST)
                    ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST)));
    }

    public function remove(){
    	$id = $this->input->post('id');
    	$data = array('is_deleted' => 1);
        $update = $this->library_model->common_update($id, $data);
        if($update == 1){
            $reponse = array(
                'csrf_hash' => $this->security->get_csrf_hash()
            );
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(HTTP_SUCCESS)
                ->set_output(json_encode(array('status' => HTTP_SUCCESS, 'reponse' => $reponse)));
        }
            return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(HTTP_BAD_REQUEST)
                    ->set_output(json_encode(array('status' => HTTP_BAD_REQUEST)));
    }

    public function create_image($id){
    	$this->load->helper('form');
        $this->load->library('form_validation');

        $library = $this->library_model->get_library_by_id($id);
        $title = explode('|||', $library['library_title']);
        $library['title_cn'] = $title[0];
        $library['title_en'] = $title[1];
        $library['title_vi'] = $title[2];

        if($library){
    		$library['image'] = json_decode($library['image']);
        }

        
        if($this->input->post()){
            if (!empty($_FILES['userfile']['name'])){
            	$image = $this->upload_file('./assets/upload/library/'.$library['slug'], 'image_shared', 'assets/upload/library/'. $library['slug'] .'/thumb');
    	        $image_array = array();
    	        $image_array = $library['image'];
    	        if($image){
    	        	foreach ($image as $key => $value) {
    	        		$image_array[] = $value;
    	        	}
    	        }

    	        if($image){
    	        	$shared_request['image'] = json_encode($image_array);
    	        }

    	        $update = $this->library_model->common_update($id, $shared_request);
    	        if($update){
    	        	redirect('admin/library/detail/'. $id);
    	        }
            }else{
                $this->session->set_flashdata('message', 'Vui lòng chọn ảnh!');
                redirect('admin/library/create_image/'.$id);
            }
        }

    	$this->render('admin/library/create_image_view');
    }

    public function remove_all_image($id){
    	$library = $this->library_model->get_library_by_id($id);
    	if($library){
    		$library['image'] = json_decode($library['image']);
        }
        if(is_array($library['image'])){
        	$shared_request['image'] = '';
	    	$update = $this->library_model->common_update($id, $shared_request);
	    	if($update){
	    		foreach ($library['image'] as $key => $value) {
	    			unlink('assets/upload/library/'.$library['slug'].'/'.$value);
	    		}
	        	redirect('admin/library/detail/'. $id);
	        }
        }
    	
    }
}