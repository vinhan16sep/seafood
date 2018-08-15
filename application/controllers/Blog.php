<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "class.phpmailer.php";
include "class.smtp.php";
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
        // echo '<pre>';
        // print_r($result);die;
		
		$this->render('blog_view');
	}

	public function detail($slug='')
	{
		$this->data['current_link'] = 'blog/detail';
		$detail = $this->blog_model->get_by_slug($slug, $this->data['lang']);
		$this->data['detail'] = $detail;

		$this->data['relative'] = $this->blog_model->get_relative_blog($this->data['lang'], $slug, 4);
        // echo '<pre>';
        // print_r($detail);die;

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('contact_name', 'Your name', 'required');
        $this->form_validation->set_rules('contact_mail', 'Your email', 'required');
        $this->form_validation->set_rules('contact_phone', 'Your phone number', 'required');
        $this->form_validation->set_rules('contact_date', 'Date', 'required');
        $this->form_validation->set_rules('contact_time', 'Time', 'required');
        $this->form_validation->set_rules('contact_quantity', 'Number of people', 'required');

        if ($this->form_validation->run() == true) {
            if($this->input->post()){
                $data = array();
                $data['name'] = $this->input->post('contact_name');
                $data['email'] = $this->input->post('contact_mail');
                $data['phone'] = $this->input->post('contact_phone');
                $data['time'] = $this->input->post('contact_time') .' - '. $this->input->post('contact_date');
                $data['quantity'] = $this->input->post('contact_quantity');
            }
            $send = $this->send_mail($data);

            if($send == false){
                $this->output->set_status_header(404)
                    ->set_output(json_encode(array('message' => 'Fail', 'data' => $data)));
            }else{
                $this->render('detail_blog_view');
            }
        }else{
            $this->render('detail_blog_view');
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
        $message .= '<p>Chào Admin, bạn có order mới từ người dùng trên website</p>';
        $message .= '<p>Thông tin như sau:</p>';
        $message .= '<p>Họ tên: ' . $data['name'] . '</p>';
        $message .= '<p>Email: ' . $data['email'] . '</p>';
        $message .= '<p>Số điện thoại: ' . $data['phone'] . '</p>';
        $message .= '<p>Thời gian: ' . $data['time'] . '</p>';
        $message .= '<p>Số người: ' . $data['quantity'] . '</p>';
        $message .= "</body></html>";

        return $message;
    }

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */