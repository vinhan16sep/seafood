<?php

defined('BASEPATH') OR exit('No direct script access allowed');
include "class.phpmailer.php";
include "class.smtp.php";

class Homepage extends Public_Controller {

    private $_lang = '';

    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('about_model');
        $this->load->model('our_food_model');
        $this->load->model('event_model');
        $this->load->model('image_model');
        $this->load->model('banner_model');
        $this->load->model('break_model');
        $this->load->model('upload_model');
        $this->load->model('blog_model');
        $this->data['lang'] = $this->session->userdata('langAbbreviation');
    }

    public function index() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->data['current_link'] = 'homepage';

        /**
         * Get Banner
         */
        $banner = $this->banner_model->get_all_banner();
        $this->data['banner'] = $banner;
        /**
         *
         * Get About
         *
         */
        $this->data['about'] = $this->about_model->get_by_id(1, $this->data['lang']);
//        $about_avatar = explode('.', $about['avatar']);
//        if(count($about_avatar) == 2){
//            $about['avatar'] = $about_avatar[0] .'_thumb.'. $about_avatar[1];
//        }
//        $this->data['about'] = $about;

        /**
         *
         * Get Our Food
         *
         */
        $this->data['our_food'] = $this->our_food_model->get_our_food_by_id(1, $this->data['lang']);
//        $our_food_avatar = explode('.', $our_food['avatar']);
//        if(count($our_food_avatar) == 2){
//            $our_food['avatar'] = $our_food_avatar[0] .'_thumb.'. $our_food_avatar[1];
//        }
//        $this->data['our_food'] = $our_food;

        /**
         *  Get Event
         */
        $this->data['event'] = $this->event_model->get_event_when_active($this->data['lang']);
        // echo '<pre>';
        // print_r($this->data['event']);die;
//        $event_avatar = explode('.', $event['image']);
//        if(count($event_avatar) == 2){
//            $event['image'] = $event_avatar[0] .'_thumb.'. $event_avatar[1];
//        }
//        $this->data['event'] = $event;

        /**
         *  Get Gallery
         */
        $library = $this->image_model->get_all_image($this->data['lang']);
        foreach ($library as $key => $value){
            $library_avatar = explode('.', $value['image']);
            if(count($library_avatar) == 2){
                $library[$key]['image_thumb'] = $library_avatar[0] .'_thumb.'. $library_avatar[1];
            }
        }
        if(count($library) <= 8){
            $count = 1;
        }else{
            $count = count($library);
        }
        $new_library = array();

        for($i = 0; $i < $count ; $i += 8){
            $new_library[] = array_slice($library, $i, 8);
        }

        $this->data['library'] = $new_library;

        /**
         *
         * Get Break one
         *
         */
        $break_1 = $this->break_model->get_break_by_id(1, $this->data['lang']);

        $this->data['break_1'] = $break_1;

        /**
         *
         * Get Break one
         *
         */
        $break_2 = $this->break_model->get_break_by_id(2, $this->data['lang']);

        $this->data['break_2'] = $break_2;

        /**
         *
         * Get Break food
         *
         */
        $food = $this->upload_model->get_active(0);
        $this->data['food'] = $food;

        /**
         *
         * Get Break floor
         *
         */
        $floor = $this->upload_model->get_active(1);
        $this->data['floor'] = $floor;

        /**
         *
         * Get Blogs
         *
         */
        $total_rows  = $this->blog_model->count_search();
        $this->load->library('pagination');
        $config = array();
        $base_url = base_url('blog/index');
        $per_page = 3;
        $uri_segment = 3;
        foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $result = $this->blog_model->get_all_with_pagination_by_lang($per_page, $this->data['page'], $this->data['lang']);
        $this->data['blogs'] = $result;

        $this->data['current_link'] = 'homepage';
        $this->render('homepage_view');
    }

    public function create(){
        $data = $this->input->post();
        $send = $this->send_mail($data);

        if($send == false){
            $this->output->set_status_header(404)
                ->set_output(json_encode(array('message' => 'Fail', 'data' => $data)));
        }else{

            $this->output->set_status_header(200)
                ->set_output(json_encode(array('message' => 'Success', 'data' => $data)));
        }
    }

    public function send_mail($data) {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // set mailer to use SMTP
        $mail->Host = "smtp.gmail.com"; // specify main and backup server
        $mail->Port = 465; // set the port to use
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->SMTPSecure = 'ssl';
        $mail->Username = "ngochuong.res@gmail.com"; // your SMTP username or your gmail username
        $mail->Password = "ngochuong123"; // your SMTP password or your gmail password
        $from = "ngochuong.res@gmail.com"; // Reply to this email
        $to = "info@ngochuong.vn"; // Recipients email ID
        $name = 'WEBMAIL'; // Recipient's name
        $mail->From = $from;
        $mail->FromName = $name; // Name to indicate where the email came from when the recepient received
        $mail->AddAddress($to, $name);
        $mail->CharSet = 'UTF-8';
        $mail->WordWrap = 50; // set word wrap
        $mail->IsHTML(true); // send as HTML
        $mail->Subject = "Mail từ " . strip_tags($data['name']);

        $mail->Body = $this->email_template($data); //HTML Body

        //$mail->SMTPDebug = 2;

        if(!$mail->Send()){
            return false;
        } else {
            return true;
        }
    }

    public function email_template($data){
        $message = '<html><body>';
        $message .= '<p>Chào Admin, bạn có mail mới từ người dùng trên website</p>';
        $message .= '<p>Thông tin như sau:</p>';
        $message .= '<p>Họ tên: ' . $data['name'] . '</p>';
        $message .= '<p>Email: ' . $data['email'] . '</p>';
        $message .= '<p>Số điện thoại: ' . $data['phone'] . '</p>';

        // $options = array(
        //     '1' => '',
        //     '2' => $this->lang->line('contact_reason_2'),
        //     '3' => $this->lang->line('contact_reason_3'),
        //     '4' => $this->lang->line('contact_reason_4'),
        //     '5' => $this->lang->line('contact_reason_5'),
        // );

        $message .= '<p>Lý do liên hệ: ' . $data['reason'] . '</p>';
        $message .= '<p>Nội dung: ' . $data['message'] . '</p>';
        $message .= "</body></html>";

        return $message;
    }

    public function change_language(){
        if($this->session->userdata('langAbbreviation') == $this->input->get('lang')){
            return $this->return_api(HTTP_SUCCESS, MESSAGE_CHANGE_LANGUAGE_FAIL, $this->session->userdata('langAbbreviation'), null);
        }else{
            $this->session->set_userdata('langAbbreviation', $this->input->get('lang'));
            if($this->session->userdata('langAbbreviation') == $this->input->get('lang')){
                return $this->return_api(HTTP_SUCCESS, MESSAGE_CHANGE_LANGUAGE_SUCCESS, $this->session->userdata('langAbbreviation'), null);
            }
            return $this->return_api(HTTP_SUCCESS, MESSAGE_CHANGE_LANGUAGE_FAIL, $this->session->userdata('langAbbreviation'), null);
        }
    }

}