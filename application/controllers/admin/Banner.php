<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 4/7/2018
 * Time: 9:47 AM
 */

class Banner extends Admin_Controller {
    private $request_language_template = array(
        ''
    );
    private $author_data = array();

    function __construct() {
        parent::__construct();

        $this->load->model('banner_model');
        $this->load->helper('common');

        $this->author_data = handle_author_common_data();
    }

    public function index(){
        $banner = $this->banner_model->get_all_banner();
        $this->data['banner'] = $banner;
        $this->render('admin/banner/list_banner_view');
    }

    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        if($this->input->post()){
            $check_upload = true;
            if ($_FILES['image_shared']['size'] > 1228800) {
                $check_upload = false;
            }
            if ($check_upload == true) {
                if(!empty($_FILES['image_shared']['name'])){
                    $image = $this->upload_image('image_shared', $_FILES['image_shared']['name'], 'assets/upload/banner', 'assets/upload/banner/thumb');
                    $shared_request = array(
                        'image' => $image,
                        'imagetitle' => $this->input->post('imagetitle_shared'),
                        'imagealt' => $this->input->post('imagealt_shared'),
                        'imagedescription' => $this->input->post('imagedescription_shared'),
                        'created_at' => $this->author_data['created_at'],
                        'created_by' => $this->author_data['created_by'],
                        'updated_at' => $this->author_data['updated_at'],
                        'updated_by' => $this->author_data['updated_by']
                    );
                    $insert = $this->banner_model->common_insert($shared_request);
                    if($insert){
                        $this->session->set_flashdata('message_success', 'Thêm mới Banner thành công!');
                        redirect('admin/banner');
                    }
                }else{
                    $this->session->set_flashdata('message_error', 'Vui lòng chọn ảnh upload!');
                    redirect('admin/banner/create');
                }
            }else{
                $this->session->set_flashdata('message_error', 'Hình ảnh vượt quá 1200 Kb. Vui lòng kiểm tra lại và thực hiện lại thao tác!');
                redirect('admin/banner');
            }
        }
        $this->render('admin/banner/create_banner_view');
    }
    public function remove(){
        $id = $this->input->post('id');
        $data = array('is_deleted' => 1);
        $update = $this->banner_model->common_update($id, $data);
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