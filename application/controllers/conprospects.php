<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conprospects extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->model('model_companies');
        $this->load->model('model_users');
        $this->load->model('model_branches');
        $this->load->model('model_customers');
        $this->load->model('model_stages');
        $this->load->model('model_statuses');
        $this->load->model('model_products');
        $this->load->model('model_customertypes');
        $this->load->model('model_segments');
		$this->load->model('model_leads');
        $this->load->model('model_suspects');
        $this->load->model('model_suspectdetails');
        $this->load->model('model_prospects');
        $this->load->model('model_quotations');
        $this->load->model('model_quotationtext');
        $this->load->model('model_accessories');
        $this->load->model('model_prospectaccessories');
		$this->load->model('model_prospectalls');
		$this->load->model('model_competitions');
    }

    public function index() {
        $setting['set_menu'] = array('menu3' => 'active', 'submenu33' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Prospects');
        $data['prospects'] = $this->model_prospects->viewall();
        $content = $this->load->view('vprospects/vprospects', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'edit' || $tipe == 'detail'):
           $data['data_quotations'] = $this->model_quotations->viewall();
            $data['data_quotationtext'] = $this->model_quotationtext->viewall();
            $data['data_prospectaccessories'] = $this->model_prospectaccessories->viewall($id);
            $data['data_prospects'] = $this->model_prospects->viewdetail($id);
            $data['data_accessories'] = $this->model_accessories->viewall();
            echo $this->load->view('vprospects/vprospectsform', $data, TRUE);
        elseif ($tipe == 'histories'):
            $data = '';
            echo $this->load->view('temp/under_construction', $data, TRUE);
        endif;
    }

    public function edit() {
        $post = $this->input->post();
        $query1 = TRUE; $query2 = TRUE; $query3 = TRUE; $query4 = TRUE; $query5 = TRUE;
		
			$data_save1 = array(
				'id' => $post['id'],
				'quotationno' => $post['quotationno'],
				'startdate' => $post['startdate'],
				'expireddate' => $post['expireddate'],
				'currency' => $post['currency'],
				'unitvalue' => $post['unitvalue'],
				'idstatus' => $post['idstatus'],
				'decisiondate' => $post['decisiondate'],
				'expecteddeliverydate' => $post['expecteddeliverydate'],
				'customertype' => $post['customertype'],
				'level2' => $post['level2'],
				'webpid' => $post['webpid']
			);
			$query1 = $this->model_prospects->edit($data_save1);
		
		
		if (!empty($post['customerpono']) && !empty($post['podate'])): 
			$data_save2 = array(
                'id' => $post['id'],
                'idstage' => '4'
            );
             $query2 = $this->model_prospects->edit($data_save2);
				
			$data_save3 = array(
                'id' => $post['idsuspect'],
                'idstage' => '4'
            );
            $query3 = $this->model_suspects->edit($data_save3);
			 
			$data_save4 = array(
                'id' => $post['idlead'],
                'idstage' => '4'
            );
            $query4 = $this->model_leads->edit($data_save4);
			
			$data_save5 = array(
                'idprospect' => $post['id'],
                'idstage' => '4',
				'customerpono' => $post['customerpono'],
				'podate' => $post['podate']
            );
            $query5 = $this->model_prospectalls->insert($data_save5);
		endif;
		
		if (!empty($post['lossnotes']) ):
			$data_save6 = array(
                'id' => $post['id'],
                'idstage' => '8'
            );
             $query6 = $this->model_prospects->edit($data_save6);
				
			$data_save7 = array(
                'id' => $post['idsuspect'],
                'idstage' => '8'
            );
            $query7 = $this->model_suspects->edit($data_save7);
			 
			$data_save8 = array(
                'id' => $post['idlead'],
                'idstage' => '8'
            );
            $query8 = $this->model_leads->edit($data_save8);
			
			$data_save9 = array(
                'idprospect' => $post['id'],
				'lossnotes' => $post['lossnotes']
            );
            $query9 = $this->model_competitions->insert($data_save9);
		endif;
			 
        if ($query1 != FALSE || $query2 != FALSE || $query3 != FALSE || $query4 != FALSE || $query5 != FALSE || $query6 != FALSE || $query7 != FALSE || $query8 != FALSE || $query9 != FALSE):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conprospects/');
    }

    public function delete($id = '') {
        if ($this->model_prospects->delete($id) && $this->model_prospectaccessories->delete($id) ):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conprospects/');
    }

}
