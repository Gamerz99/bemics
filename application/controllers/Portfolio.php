<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends MY_Controller {

    public function index() {
        $this->load->model('backend/portfolio_model','portfolio_model');

        $data['portfolios'] = $this->portfolio_model->get_all();

        $this->load->view('frontend/portfolio',$data);
    }


}