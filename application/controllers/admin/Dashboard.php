<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function index() {
        $this->load->model('backend/user_model','user_model');

        $data['session_data'] =  $this->user_model->getLoginSession();

        $this->load->view('backend/dashboard/dashboard',$data);
    }

}