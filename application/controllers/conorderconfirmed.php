<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conorderconfirmed extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
		$this->load->model('model_leads');
		$this->load->model('model_suspects');
		$this->load->model('model_prospects');
        $this->load->model('model_prospectalls');
		$this->load->model('model_stages');
		$this->load->model('model_incentives');
    }

    public function index() {
        $setting['set_menu'] = array('menu3' => 'active', 'submenu36' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Order Confirmed');

        $data['prospectalls'] = $this->model_prospectalls->viewallorderconfirmed();
        $content = $this->load->view('vorderconfirmed/vorderconfirmed', $data, TRUE);
        $this->temp->load($setting, $content);
    }
	
	public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_prospects'] = $this->model_prospects->viewall();
            $data['data_stages'] = $this->model_stages->viewall();
            $data['data_prospectalls'] = $this->model_prospectalls->viewdetailorderconfirmed($id);
            echo $this->load->view('vorderconfirmed/vorderconfirmedform', $data, TRUE);
        endif;
    }
	
	public function edit() {
        $post = $this->input->post();
        
        //print_r($post); die;
		$query1 = TRUE; $query2 = TRUE; $query3 = TRUE; $query4 = TRUE; $query5 = TRUE;
		
		//if (!empty($post['confirmdate']) && !empty($post['incentiveno']) ):
			$data_save1 = array(
                'id' => $post['idprospect'],
                'idstage' => '7'
            );
             $query1 = $this->model_prospects->edit($data_save1);
				
			$data_save2 = array(
                'id' => $post['idsuspect'],
                'idstage' => '7'
            );
            $query2 = $this->model_suspects->edit($data_save2);
			 
			$data_save3 = array(
                'id' => $post['idlead'],
                'idstage' => '7'
            );
            $query3 = $this->model_leads->edit($data_save3);
			
			$data_save4 = array(
				'id' => $post['id'],
				'idstage' => '7',
				'confirmdate' => $post['confirmdate'],
				'deliverydate' => $post['deliverydate'],
				'deliveryby' => $post['deliveryby'],
				'deliveryno' => $post['deliveryno'],
				'bastno' => $post['bastno'],
				'incentiveno' => $post['incentiveno']
            );
            $query4 = $this->model_prospectalls->edit($data_save4);	
                 
             $idprospect=$post['idprospect'];
                   $iduser=$post['iduser'];
                   //getting lead id
                   $leadsql="SELECT a.idlead AS inc_leadid 
                                    FROM tdat_suspects as a 
                                    INNER JOIN tdat_prospects as b
                                    ON a.id=b.idsuspect
                                     WHERE b.id=$idprospect";
                   $ressql=  $this->db->query($leadsql);
                   $leadres=$ressql->result();
                   $idlead=$leadres[0]->inc_leadid;
//                   getting currency
                   $sqlcur = "SELECT	
                        c.currency AS productprices_currency
                FROM tdat_prospects a	
                LEFT JOIN tdat_products b ON a.idproduct = b.id
                LEFT JOIN tdat_productprices c ON b.id = c.idproduct
                WHERE a.id = " . $idprospect . "
                ORDER BY a.id ASC";
        $querycur = $this->db->query($sqlcur);
          $currencyres=$querycur->result();
          $currency=$currencyres[0]->productprices_currency;
                   //getting value
                   $this->db->select('total_price,discount_price');
                   $this->db->from('tdat_discounts');
                   $this->db->where('prospect_id',$idprospect);
                   $queryvalue=  $this->db->get();
                   $valueres=$queryvalue->result();
                   $value=($valueres[0]->discount_price)?$valueres[0]->discount_price:$valueres[0]->total_price;
                  
            
            
			$data_save5 = array(
                'idlead' => $idlead,
                'iduser' => $iduser,
                'value'=>$value,
                 'currency'=>$currency,
                   'idprospect'=>$idprospect        
            );
            $query5 = $this->db->insert('tdat_incentives',$data_save5);
			
		//endif;
	
        if ($query1 != FALSE || $query2 != FALSE || $query3 != FALSE || $query4 != FALSE || $query5 != FALSE):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conorderconfirmed/');
    }

    public function delete($id = '') {
        if ($this->model_prospectalls->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conorderconfirmed/');
    }
}