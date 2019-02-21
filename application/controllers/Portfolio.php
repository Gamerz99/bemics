<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends MY_Controller {

    public function index() {

        $this->load->view('frontend/portfolio');
    }


}