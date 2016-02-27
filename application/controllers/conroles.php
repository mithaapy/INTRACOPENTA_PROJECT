<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conroles extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->model('model_roles');
    }

    public function index() {
        $setting['set_menu'] = array('menu9' => 'active', 'submenu98' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Roles');

        $data['roles'] = $this->model_roles->viewall();
        $content = $this->load->view('vroles/vroles', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_roles'] = $this->model_roles->viewdetail($id);
        endif;
        echo $this->load->view('vroles/vrolesform', $data, TRUE);
    }

    public function insert() {
        $post = $this->input->post();

        if ($this->model_roles->insert($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conroles/');
    }

    public function edit() {
        $post = $this->input->post();
        if ($this->model_roles->edit($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conroles/');
    }

    public function delete($id = '') {
        if ($this->model_roles->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conroles/');
    }

}
