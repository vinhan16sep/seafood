<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property  event_model
 */
class Event extends Admin_Controller {

    private $request_language_template = array(
        'title', 'description', 'content'
    );
    private $author_data = array();

    function __construct() {
        parent::__construct();

        $this->load->model('event_model');
        $this->load->model('event_lang_model');
        $this->load->helper('common');

        $this->author_data = handle_author_common_data();
    }

    public function index() {
        $this->render('admin/event/list_event_view');
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title_vi', 'Tiêu đề', 'trim|required');
        $this->form_validation->set_rules('title_en', 'Title', 'trim|required');
        $this->form_validation->set_rules('title_cn', '标题', 'trim|required');

        if ($this->form_validation->run() === false) {
            $this->render('admin/event/create_event_view');
        } else {
            if ($this->input->post()) {
                $image = $this->upload_image('image_shared', $_FILES['image_shared']['name'], 'assets/upload/event', 'assets/upload/event/thumb');
                $shared_request = array(
                    'image' => $image,
                    'slug' => $this->input->post('slug_shared'),
                    'meta_keywords' => $this->input->post('metakeywords_shared'),
                    'meta_description' => $this->input->post('metadescription_shared'),
                    'created_at' => $this->author_data['created_at'],
                    'created_by' => $this->author_data['created_by'],
                    'updated_at' => $this->author_data['updated_at'],
                    'updated_by' => $this->author_data['updated_by']
                );

                $this->db->trans_begin();

                $insert = $this->event_model->common_insert($shared_request);
                if($insert){
                    $requests = handle_multi_language_request('event_id', $insert, $this->request_language_template, $this->input->post(), $this->page_languages);
                    $this->event_lang_model->insert_with_language($requests);
                }

                if ($this->db->trans_status() === false) {
                    $this->db->trans_rollback();
                    $this->load->libraries('session');
                    $this->session->set_flashdata('message', 'Cannot add item!');
                    $this->render('admin/event/create_event_view');
                } else {
                    $this->db->trans_commit();
                    $this->session->set_flashdata('message', 'Item added!');
                    redirect('admin/event', 'refresh');
                }

            }
        }
    }

    public function edit($id = null){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title_vi', 'Tiêu đề', 'trim|required');
        $this->form_validation->set_rules('title_en', 'Title', 'trim|required');
        $this->form_validation->set_rules('title_cn', '标题', 'trim|required');

        if($this->form_validation->run() === false){

        }
    }

}