<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Condiscounts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->model('model_companies');
        $this->load->model('model_users');
        $this->load->model('model_branches');
        $this->load->model('model_customers');
        $this->load->model('model_customercp');
        $this->load->model('model_stages');
        $this->load->model('model_statuses');
        $this->load->model('model_products');
        $this->load->model('model_customertypes');
        $this->load->model('model_segments');
        $this->load->model('model_suspects');
        $this->load->model('model_suspectdetails');
        $this->load->model('model_prospects');
        $this->load->model('model_quotationtext');
        $this->load->model('model_quotations');
        $this->load->model('model_prospectaccessories');
		$this->load->model('model_productprices');
    }

    public function index() {
        $setting['set_menu'] = array('menu5' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Discount');
        $data['quotations'] = $this->model_quotations->viewall();
        $content = $this->load->view('vdiscounts/vdiscounts', $data, TRUE);
        $this->temp->load($setting, $content);
    }
	
	public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_quotations'] = $this->model_quotations->viewdetail($id);
        endif;
        echo $this->load->view('vdiscounts/vdiscountsform', $data, TRUE);
    }
    public function check(){
        //print_r($_POST);
        $maxdiscount=$_POST['maxdiscount'];
        $discountprice=$_POST['discountprice'];
        $totalprice=$_POST['totalprice'];
        $disPer=(($totalprice-$discountprice)*100)/$totalprice;
        if($disPer>$maxdiscount):
            echo 0;
        else:
            echo 1;
        endif;
    }
    public function edit() {
        $post=  $this->input->post();
        $prospect_id=$post['id'];
        $discountprice=$post['discountprice'];
        $totalprice=$_POST['totalprice'];
        $disPer=(($totalprice-$discountprice)*100)/$totalprice;
        $update_data=array(
           'discount_price'=>$discountprice,
            'discount_per'=>$disPer
       );
       $this->db->where('prospect_id',$prospect_id);
       $this->db->update('tdat_discounts',$update_data);
       $this->index();
    }

}
