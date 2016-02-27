<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Converylikely extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
		$this->load->model('model_prospects');
        $this->load->model('model_prospectalls');
		$this->load->model('model_stages');
	
    }

    public function index() {
        $setting['set_menu'] = array('menu3' => 'active', 'submenu35' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Very Likely');

		$data['prospectalls'] = $this->model_prospectalls->viewallverylikely();
        $content = $this->load->view('vverylikely/vverylikely', $data, TRUE);
        $this->temp->load($setting, $content);
    }
	
	public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_prospects'] = $this->model_prospects->viewall();
            $data['data_stages'] = $this->model_stages->viewall();
            $data['data_prospectalls'] = $this->model_prospectalls->viewdetailorderonhand($id);
            echo $this->load->view('vverylikely/vverylikelyform', $data, TRUE);
        endif;
    }
	
	public function edit() {
        $post = $this->input->post();
		$data_save1 = array(
            'id' => $post['id'],
            'dpdate' => $post['dpdate'],
            'dpvalue' => $post['dpvalue'],
			'bankcash' => $post['bankcash'],
			'bankname' => $post['bankname'],
			'leasename' => $post['leasename'],
			'leasepono' => $post['leasepono'],
			'leasevalue' => $post['leasevalue'],
			'idstage' => $post['idstage']
        );

        $query1 = $this->model_prospectalls->edit($data_save1);
		
        if ($this->model_prospectalls->edit($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/converylikely/');
    }

    public function delete($id = '') {
        if ($this->model_prospectalls->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/converylikely/');
    }
	
	
}