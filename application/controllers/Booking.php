<?php

defined('BASEPATH') OR exit('No direct script access allowed');
include "class.phpmailer.php";
include "class.smtp.php";
class Booking extends Public_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->data['current_link'] = 'booking';

        $this->render('booking_view');
    }

    public function create(){
        $data = array();
        $data['name'] = $this->input->post('contact_name');
        $data['email'] = $this->input->post('contact_mail');
        $data['phone'] = $this->input->post('contact_phone');
        $data['time'] = $this->input->post('contact_time') .' - '. $this->input->post('contact_date');
        $data['quantity'] = $this->input->post('contact_quantity');


        $send = $this->send_mail($data);

        if($send == false){
            $this->output->set_status_header(404)
                ->set_output(json_encode(array('message' => 'Fail', 'data' => $data)));
        }else{
            redirect('booking');
        }
    }

    public function send_mail($data) {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // set mailer to use SMTP
        $mail->Host = "smtp.gmail.com"; // specify main and backup server
        $mail->Port = 465; // set the port to use
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->SMTPSecure = 'ssl';
        $mail->Username = "nghemalao@gmail.com"; // your SMTP username or your gmail username
        $mail->Password = "Huongdan1"; // your SMTP password or your gmail password
        $from = "minhtruong93gtvt@gmail.com"; // Reply to this email
        $to = "truong.do@matocreative.vn"; // Recipients email ID
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