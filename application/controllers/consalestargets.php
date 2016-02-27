<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Consalestargets extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->model('model_salestargets');
        $this->load->model('model_users');
        $this->load->model('model_companies');
        $this->load->model('model_branches');
        $this->load->model('model_roles');
    }

    public function index() {
        $setting['set_menu'] = array('menu8' => 'active', 'submenu83' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Sales Targets');
        $data['salestargets'] = $this->model_salestargets->viewall();
        $content = $this->load->view('vsalestargets/vsalestargets', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'insert'):
            $data['data_users'] = $this->model_users->viewallsalesman();
            echo $this->load->view('vsalestargets/vsalestargetsform', $data, TRUE);
        elseif ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_users'] = $this->model_users->viewallsalesman();
            $data['data_salestargets'] = $this->model_salestargets->viewdetail($id);
            echo $this->load->view('vsalestargets/vsalestargetsform', $data, TRUE);
        endif;
    }

    public function insert() {
        $post = $this->input->post();

        if ($this->model_salestargets->insert($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/consalestargets/');
    }

    public function edit() {
        $post = $this->input->post();
        if ($this->model_salestargets->edit($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/consalestargets/');
    }

    public function delete($id = '') {
        if ($this->model_salestargets->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/consalestargets/');
    }

}
