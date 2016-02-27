<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Concompanies extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->model('model_companies');
        $this->load->library('upload_file');
    }

    public function index() {
        $setting['set_menu'] = array('menu9' => 'active', 'submenu92' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Companies');

        $data['companies'] = $this->model_companies->viewall();
        $content = $this->load->view('vcompanies/vcompanies', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_companies'] = $this->model_companies->viewdetail($id);
        endif;

        echo $this->load->view('vcompanies/vcompaniesform', $data, TRUE);
    }

    public function insert() {
        $post = $this->input->post();

        $urllogo = 'assets/pictures/companies/';
        $namalogo = $post['code'];
        $this->upload_file->upload_img('./' . $urllogo, $namalogo, 'uploadfile');

        $parts = pathinfo($_FILES['uploadfile']["name"]);
        $post['uploadfile'] = $urllogo . $namalogo . '.' . $parts['extension'];

        if ($this->model_companies->insert($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed</div>');
        endif;
        redirect(base_url() . 'index.php/concompanies/');
    }

    public function edit() {
        $post = $this->input->post();

        $urllogo = 'assets/pictures/companies/';
        $namalogo = $post['code'];
        $this->upload_file->upload_img('./' . $urllogo, $namalogo, 'uploadfile');

        $parts = pathinfo($_FILES['uploadfile']["name"]);
        if ($parts['extension'] != '') {
            $post['uploadfile'] = $urllogo . $namalogo . '.' . $parts['extension'];
        } else {
            $post['uploadfile'] = $post['pictureurl'];
        }

        if ($this->model_companies->edit($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed</div>');
        endif;
        redirect(base_url() . 'index.php/concompanies/');
    }

    public function delete($id = '') {
        if ($this->model_companies->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed</div>');
        endif;
        redirect(base_url() . 'index.php/concompanies/');
    }

}
