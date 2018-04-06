<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Public_Controller {

    private $_lang = '';

    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('about_model');
        $this->load->model('our_food_model');
        $this->load->model('event_model');
        $this->load->model('image_model');
        $this->data['lang'] = $this->session->userdata('langAbbreviation');
    }

    public function index() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->data['current_link'] = 'homepage';

        /**
         *
         * Get About
         *
         */
        $about = $this->about_model->get_by_id(1, $this->data['lang']);
        $about_avatar = explode('.', $about['avatar']);
        if(count($about_avatar) == 2){
            $about['avatar'] = $about_avatar[0] .'_thumb.'. $about_avatar[1];
        }
        $this->data['about'] = $about;

        /**
         *
         * Get Our Food
         *
         */
        $our_food = $this->our_food_model->get_our_food_by_id(1, $this->data['lang']);
        $our_food_avatar = explode('.', $our_food['avatar']);
        if(count($our_food_avatar) == 2){
            $our_food['avatar'] = $our_food_avatar[0] .'_thumb.'. $our_food_avatar[1];
        }
        $this->data['our_food'] = $our_food;

        /**
         *  Get Event
         */
        $event = $this->event_model->get_event_when_active($this->data['lang']);
        $event_avatar = explode('.', $event['image']);
        if(count($event_avatar) == 2){
            $event['image'] = $event_avatar[0] .'_thumb.'. $event_avatar[1];
        }
        $this->data['event'] = $event;

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
//        print_r($new_library);die;

        $this->data['library'] = $new_library;


        $this->data['current_link'] = 'homepage';
        $this->render('homepage_view');
    }

}