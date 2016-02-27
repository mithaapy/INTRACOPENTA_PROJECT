<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Concompetitors extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->model('model_competitors');
    }

    public function index() {
        $setting['set_menu'] = array('menu9' => 'active', 'submenu93' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Competitors');

        $data['competitors'] = $this->model_competitors->viewall();
        $content = $this->load->view('vcompetitors/vcompetitors', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_competitors'] = $this->model_competitors->viewdetail($id);
        endif;

        echo $this->load->view('vcompetitors/vcompetitorsform', $data, TRUE);
    }

    public function insert() {
        $post = $this->input->post();

        if ($this->model_competitors->insert($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/concompetitors/');
    }

    public function edit() {
        $post = $this->input->post();
        if ($this->model_competitors->edit($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/concompetitors/');
    }

    public function delete($id = '') {
        if ($this->model_competitors->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/concompetitors/');
    }

}
