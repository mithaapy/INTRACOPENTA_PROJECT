
application/x-httpd-php conorderonhand.php 
PHP script text
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conorderonhand extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
		$this->load->model('model_leads');
		$this->load->model('model_suspects');
		$this->load->model('model_prospects');
        $this->load->model('model_prospectalls');
		$this->load->model('model_stages');
    }

    public function index() {
        $setting['set_menu'] = array('menu3' => 'active', 'submenu34' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Order On Hand');

        $data['prospectalls'] = $this->model_prospectalls->viewall();
        $content = $this->load->view('vorderonhand/vorderonhand', $data, TRUE);
        $this->temp->load($setting, $content);
    }
	
	public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_prospects'] = $this->model_prospects->viewall();
            $data['data_stages'] = $this->model_stages->viewall();
            $data['data_prospectalls'] = $this->model_prospectalls->viewdetail($id);
            echo $this->load->view('vorderonhand/vorderonhandform', $data, TRUE);
        endif;
    }

    public function edit() {
        $post = $this->input->post();
		
		if (!empty($post['dpdate']) || !empty($post['leasename']) ):
			$data_save2 = array(
                'id' => $post['id'],
                'idstage' => '5'
            );
             $query2 = $this->model_prospects->edit($data_save2);
				
			$data_save3 = array(
                'id' => $post['idsuspect'],
                'idstage' => '5'
            );
            $query3 = $this->model_suspects->edit($data_save3);
			 
			$data_save4 = array(
                'id' => $post['idlead'],
                'idstage' => '5'
            );
            $query4 = $this->model_leads->edit($data_save4);
			
			$data_save5 = array(
				'dpdate' => $post['dpdate'],
				'dpvalue' => $post['dpvalue'],
				'bankcash' => $post['bankcash'],
				'bankname' => $post['bankname']
            );
            $query5 = $this->model_prospectalls->edit($data_save5);
			
			$data_save6 = array(
			    'idstage' => '5'
			);
			 $query6 = $this->model_prospectalls->edit($data_save6);				
		endif;
		
		if (!empty($post['dpdate']) && !empty($post['leasename']) ):
			$data_save2 = array(
                'id' => $post['id'],
                'idstage' => '6'
            );
             $query2 = $this->model_prospects->edit($data_save2);
				
			$data_save3 = array(
                'id' => $post['idsuspect'],
                'idstage' => '6'
            );
            $query3 = $this->model_suspects->edit($data_save3);
			 
			$data_save4 = array(
                'id' => $post['idlead'],
                'idstage' => '6'
            );
            $query4 = $this->model_leads->edit($data_save4);
			
			$data_save5 = array(
				'dpdate' => $post['dpdate'],
				'dpvalue' => $post['dpvalue'],
				'bankcash' => $post['bankcash'],
				'bankname' => $post['bankname']
            );
            $query5 = $this->model_prospectalls->edit($data_save5);
			
			$data_save6 = array(
			    'idstage' => '6'
			);
			 $query6 = $this->model_prospectalls->edit($data_save6);				
		endif;
		
		
		
		
        if ($query1 != FALSE || $query2 != FALSE || $query3 != FALSE || $query4 != FALSE || $query5 != FALSE || $query6 != FALSE):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conorderonhand/');
    }

    public function delete($id = '') {
        if ($this->model_prospectalls->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conorderonhand/');
    }
	
	
}