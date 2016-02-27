<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Convisitschedules extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->model('model_users');
        $this->load->model('model_customers');
        $this->load->model('model_visitpurposes');
        $this->load->model('model_visitschedules');
        $this->load->model('model_stages');
    }

    public function index() {
        $setting['set_menu'] = array('menu8' => 'active', 'submenu85' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Visit Schedules');

        $data['visitschedules'] = $this->model_visitschedules->viewall();
        $content = $this->load->view('vvisitschedules/vvisitschedules', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_visitschedules'] = $this->model_visitschedules->viewdetail($id);
        endif;

        $data['data_users'] = $this->model_users->viewallsalesman();
        $data['data_customers'] = $this->model_customers->viewall();
        $data['data_visitpurposes'] = $this->model_visitpurposes->viewall();
        $data['data_stages'] = $this->model_stages->viewall();

        echo $this->load->view('vvisitschedules/vvisitschedulesform', $data, TRUE);
    }

    public function insert() {
        $post = $this->input->post();

        if ($this->model_visitschedules->insert($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/convisitschedules/');
    }

    public function edit() {
        $post = $this->input->post();
        if ($this->model_visitschedules->edit($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/convisitschedules/');
    }

    public function delete($id = '') {
        if ($this->model_visitschedules->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/convisitschedules/');
    }

}
