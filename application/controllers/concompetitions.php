<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Concompetitions extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->model('model_suspects');
        $this->load->model('model_competitors');
        $this->load->model('model_competitions');
    }

    public function index() {
        $setting['set_menu'] = array('menu3' => 'active', 'submenu39' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Competitions');
        $data['competitions'] = $this->model_competitions->viewall();
        $content = $this->load->view('vcompetitions/vcompetitions', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'insert'):
            $data['data_suspects'] = $this->model_suspects->viewall();
            $data['data_competitors'] = $this->model_competitors->viewall();
            echo $this->load->view('vcompetitions/vcompetitionsform', $data, TRUE);
        elseif ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_suspects'] = $this->model_suspects->viewall();
            $data['data_competitors'] = $this->model_competitors->viewall();
            $data['data_competitions'] = $this->model_competitions->viewdetail($id);
            echo $this->load->view('vcompetitions/vcompetitionsform', $data, TRUE);
        endif;
    }

    public function insert() {
        $post = $this->input->post();
        if ($this->model_competitions->insert($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/concompetitions/');
    }

    public function edit() {
        $post = $this->input->post();
        if ($this->model_competitions->edit($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/concompetitions/');
    }

    public function delete($id = '') {
        if ($this->model_competitions->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/concompetitions/');
    }

}
