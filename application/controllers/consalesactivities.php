<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Consalesactivities extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
		$this->load->model('model_visitschedules');
        $this->load->model('model_leads');
        $this->load->model('model_suspects');
        $this->load->model('model_prospects');
        $this->load->model('model_users');
		$this->load->model('model_customers');
		$this->load->model('model_visitpurposes');
		$this->load->model('model_salesactivities');
		
    }

    public function index() {
        $setting['set_menu'] = array('menu8' => 'active', 'submenu82' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Sales Activities');
        $data['salesactivities'] = $this->model_salesactivities->viewall();
        $content = $this->load->view('vsalesactivities/vsalesactivities', $data, TRUE);
        $this->temp->load($setting, $content);
    }
	
	 public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'insert'):
            $data['data_visitschedules'] = $this->model_visitschedules->viewall();
            $data['data_leads'] = $this->model_leads->viewall();
            $data['data_suspects'] = $this->model_suspects->viewall();
            $data['data_prospects'] = $this->model_prospects->viewall();
            $data['data_users'] = $this->model_users->viewall();
			$data['data_customers'] = $this->model_customers->viewall();
			$data['data_visitpurposes'] = $this->model_visitpurposes->viewall();
            echo $this->load->view('vsalesactivities/vsalesactivitiesform', $data, TRUE);
        elseif ($tipe == 'edit' || $tipe == 'detail'):
             $data['data_visitschedules'] = $this->model_visitschedules->viewall();
            $data['data_leads'] = $this->model_leads->viewall();
            $data['data_suspects'] = $this->model_suspects->viewall();
            $data['data_prospects'] = $this->model_prospects->viewall();
            $data['data_users'] = $this->model_users->viewall();
			$data['data_customers'] = $this->model_customers->viewall();
			$data['data_visitpurposes'] = $this->model_visitpurposes->viewall();
            $data['data_salesactivities'] = $this->model_salesactivities->viewdetail($id);
            echo $this->load->view('vsalesactivities/vsalesactivitiesform', $data, TRUE);
        endif;
    }
	
	public function insert() {
        $post = $this->input->post();

        if ($this->model_salesactivities->insert($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/consalesactivities/');
    }

    public function edit() {
        $post = $this->input->post();
        if ($this->model_salesactivities->edit($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/consalesactivities/');
    }

    public function delete($id = '') {
        if ($this->model_salesactivities->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/consalesactivities/');
    }

}
