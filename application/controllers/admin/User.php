<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    public function login() {
        $this->load->view('backend/user/login');
    }


    public function validatelogin() {
        $uname = '';
        $utype = '';
        if (($this->input->post('email') != '') and ( $this->input->post('password') != '')) {
            $this->db->select('id,contactName,type,image')
                ->from('user')
                ->where('email', $this->input->post('email'))
                ->where('status',1)
                ->where('password', $this->input->post('password'));
            $query = $this->db->get();
            if ($query->num_rows() == 1) {
                foreach ($query->result_array() as $row) {
                    $this->load->library('session');
                    $uname = $row['contactName'];
                    $utype = $row['type'];
                    $id = $row['id'];
                    $image = $row['image'];
                }
            }
        }
        if ($uname == '') {
            $data['msg'] = 1;
            $this->load->view('user/login', $data);
        } else {
            $newdata = array(
                'username' => $uname,
                'utype' => $utype,
                'id' => $id,
                'image' => $image
            );
            $this->session->set_userdata('login_data', $newdata);
            if ($utype != 1) {
                redirect('admin/dashboard');
            } else {
                redirect('admin/dashboard');
            }
        }
    }

    public function logout() {
        $this->load->library(array('session'));
        $this->session->sess_destroy();
        $this->load->view('backend/user/login');
    }
}