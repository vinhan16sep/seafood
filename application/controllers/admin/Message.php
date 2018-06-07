<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends Admin_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->render('admin/message_view');
    }
}
