<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolios extends MY_Controller {

    public function index($msg = null) {
        if ($msg)
            $data['msg'] = $msg;
        $this->load->model('backend/user_model','user_model');
        $this->load->model('backend/portfolio_model','portfolio_model');

        $data['session_data'] =  $this->user_model->getLoginSession();
        $data['portfolios'] = $this->portfolio_model->get_all();

        $this->load->view('backend/portfolio/portfolio',$data);
    }

    public function add_portfolio($id = null) {
        $this->load->model('backend/user_model','user_model');
        $this->load->model('backend/portfolio_model','portfolio_model');

        $data['portfolio'] = null;
        $data['session_data'] =  $this->user_model->getLoginSession();
        if ($id) {
            $data['portfolio'] = $this->portfolio_model->get($id);
        }

        $this->load->view('backend/portfolio/add_portfolio',$data);
    }

    public function save_portfolio() {
        $message = 2;
        $id = $this->input->post('id');
        $this->load->library('form_validation');
        $data = $this->form_validation->remove_unknown_fields($this->input->post(), $this->form_validation->get_field_names('save_portfolio'));
        $this->form_validation->set_data($data);
        if ($this->form_validation->run('save_portfolio') != false) {
            $this->load->model('backend/portfolio_model','portfolio_model');
            if ($id) {
                $this->portfolio_model->update($data, $id);
                if ($_FILES["image"]["name"]) {
                    $img = $this->portfolio_model->get($id);
                    if($img['image']) {
                        unlink("flayout/images/portfolio/" . $img['image']);
                    }
                    $config['upload_path'] = 'flayout/images/portfolio/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = 'portfolio_' . $id;
                    $type = $_FILES["image"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('image');

                    $data2 = array(
                        'image' => $qFile_name
                    );
                    $this->portfolio_model->update($data2, $id);
                }
                $message = 1;

            } else {
                $id = $this->portfolio_model->insert($data);
                if ($_FILES["image"]["name"]) {
                    $config['upload_path'] = 'flayout/images/portfolio/';
                    $config['allowed_types'] = 'gif|jpg|png|pdf|doc';
                    $qFile_name = 'portfolio_' . $id;
                    $type = $_FILES["image"]["type"];
                    $type = explode('/', $type);
                    if ($type[1] == "jpeg")
                        $type[1] = 'jpg';

                    $qFile_name = $qFile_name . "." . $type[1];
                    $config['file_name'] = $qFile_name;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->upload->do_upload('image');

                    $data2 = array(
                        'image' => $qFile_name
                    );
                    $this->portfolio_model->update($data2, $id);
                }
                $message = 1;
            }
        }
        redirect('admin/portfolios/index/' . $message);
    }

    public function delete_portfolio() {
        $id = $this->input->post('id');
        $message = 2;
        if ($id) {
            $this->load->model('backend/portfolio_model','portfolio_model');
            $img = $this->portfolio_model->get($id);
            if($img['image']) {
                unlink("flayout/images/portfolio/" . $img['image']);
            }
            $this->portfolio_model->delete($id);
            $message = 1;
        }
        redirect('admin/portfolios/index/' . $message);
    }
}