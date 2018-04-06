<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 4/2/2018
 * Time: 4:54 PM
 */

class About extends Admin_Controller {
    private $request_language_template = array(
        'title', 'content'
    );
    private $author_data = array();

    function __construct() {
        parent::__construct();

        $this->load->model('about_model');
        $this->load->helper('common');

        $this->author_data = handle_author_common_data();
    }

    public function index(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $about = $this->about_model->get_by_id(1);

        $title = explode('|||', $about['about_title']);
        $about['title_cn'] = $title[0];
        $about['title_en'] = $title[1];
        $about['title_vi'] = $title[2];


        $content = explode('|||', $about['about_content']);
        $about['content_cn'] = $content[0];
        $about['content_en'] = $content[1];
        $about['content_vi'] = $content[2];

        $this->data['about'] = $about;

//        print_r($about);die;


        $this->render('admin/about/detail_about_view');
    }

    public function edit(){
        $id = 1;
        $about = $this->about_model->get_by_id($id);

        $title = explode('|||', $about['about_title']);
        $about['title_cn'] = $title[0];
        $about['title_en'] = $title[1];
        $about['title_vi'] = $title[2];


        $content = explode('|||', $about['about_content']);
        $about['content_cn'] = $content[0];
        $about['content_en'] = $content[1];
        $about['content_vi'] = $content[2];

        $this->data['about'] = $about;

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title_vi', 'Tiêu đề', 'required');
        $this->form_validation->set_rules('title_en', 'Title', 'required');
        $this->form_validation->set_rules('title_cn', '标题', 'required');

        if($this->form_validation->run() == false){
            $this->render('admin/about/edit_about_view');
        }else{
            if($this->input->post()){
                $image = $this->upload_file('./assets/upload/about', 'image_shared', 'assets/upload/about/thumb');
                $image_json = json_encode($image);
                 $shared_request = array(
                    'slug' => $this->input->post('slug_shared'),
                    'created_at' => $this->author_data['created_at'],
                    'created_by' => $this->author_data['created_by'],
                    'updated_at' => $this->author_data['updated_at'],
                    'updated_by' => $this->author_data['updated_by']
                );
                if($image){
                    $shared_request['image'] = $image_json;
                    $shared_request['avatar'] = $image[0];
                }


                $this->db->trans_begin();

                $update = $this->about_model->common_update($id, $shared_request);
                if($update){
                    $requests = handle_multi_language_request('about_id', $id, $this->request_language_template, $this->input->post(), $this->page_languages);
                    // echo "<pre>";
                    // print_r($requests);die;
                    foreach ($requests as $key => $value){
                        $this->about_model->update_with_language($id, $value['language'], $value);
                    }
                }

                if ($this->db->trans_status() === false) {
                    $this->db->trans_rollback();
                    $this->load->libraries('session');
                    $this->session->set_flashdata('message', 'Cannot add item!');
                    $this->render('admin/about/edit');
                } else {
                    $this->db->trans_commit();
                    
                    $this->session->set_flashdata('message', 'Item added!');
                    if($image != '' && $image != $about['image']){
                        $old_image = json_decode($about['image']);
                        foreach ($old_image as $key => $value) {
                            if(file_exists('assets/upload/about/'.$value)){
                                unlink('assets/upload/about/'.$value);
                            }
                        }
                    }
                    redirect('admin/about', 'refresh');
                    
                }
            }
        }
    }

    public function active_avatar(){
        $image = $this->input->post('image');
        $data = array('avatar' => $image);

        $update = $this->about_model->common_update(1, $data);
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
}