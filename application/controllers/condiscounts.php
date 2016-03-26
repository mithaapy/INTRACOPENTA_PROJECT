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
            $data_pros = $this->model_prospects->viewdetail($id);
            $salesmanid=$data_pros[0]->users1_id;
        $this->db->select('*');
        $this->db->from('tdat_users');
        $this->db->where('id',$salesmanid);
        $salesquer=  $this->db->get();
        $data['salesData']=$salesquer->result();
       
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
    public function askmanager() {
 
    $discount_price=$_POST['discount_price'];
    $total_price=$_POST['total_price'];
    $prospect_id=$_POST['prospect_id'];
    $project_name=$_POST['project_name'];
    $quotation_id=$_POST['quotation_id'];
    $s_name=$_POST['s_fname'].' '.$_POST['s_lname'];;
    $s_email=$_POST['s_email'];
    $s_phone=$_POST['s_phone'];
    $branch_id=$_POST['s_branch'];
    $this->db->select('email');
        $this->db->from('tdat_users');
        $this->db->where('idbranch',$branch_id);
         $this->db->where('idrole',3);
        $hoquer=  $this->db->get();
        $hodata=$hoquer->result();
        foreach($hodata as $ho):
            $email=$ho->email;
//        //load email helper
//    $this->load->helper('email');
//    //load email library
//    $this->load->library('email');
//     // compose email
//      $this->email->from($s_email , '$s_name');
//      $this->email->to($email); 
      $subject="A New Discount Request From $s_name";
      $message = "Project Name: ".$project_name."\n"; 
$message .= "Prospect Id: ".$prospect_id."\n"; 
$message .= "Quotation No: ".$quotation_id."\n"; 
$message .= "Total Price: ".$total_price."\n"; 
$message .= "Proposed Price: ".$discount_price."\n"; 
$message .= "Reqested By: ".$s_name.",".$s_email.",".$s_phone;
$recipient = $email;
//echo $recipient; die;
$sender_email='info@inta-x-sales.com';
  $config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
//$config['mailtype'] = 'html';
  // The mail sending protocol.
$config['protocol'] = 'smtp';
// SMTP Server Address for Gmail.
$config['smtp_host'] = 'mail.inta-x-sales.com';
// SMTP Port - the port that you is required
$config['smtp_port'] = 25;
// SMTP Username like. (abc@gmail.com)
$config['smtp_user'] = $sender_email;
// SMTP Password like (abc***##)
$config['smtp_pass'] = 'infointa123';
//$this->email->set_mailtype("html");
// Load email library and passing configured values to email library
$this->load->library('email', $config);
$this->email->to($recipient);
$this->email->from($sender_email, 'INTA');
$this->email->subject($subject);
$this->email->message($message);
//      $this->email->subject($subject);
//      $this->email->message($message);
      if ( $this->email->send()):
          echo 'Your query has been sent to Manager !';
      //echo $this->email->print_debugger();
      else:
          echo 'Error in email id';
      endif;
        endforeach;
    }

}
