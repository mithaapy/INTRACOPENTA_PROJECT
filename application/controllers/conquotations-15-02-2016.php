<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conquotations extends CI_Controller {

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
        $setting['set_menu'] = array('menu4' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Quotations');
        $data['quotations'] = $this->model_quotations->viewall();
        $content = $this->load->view('vquotations/vquotations', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_quotationtext'] = $this->model_quotationtext->viewall();
            $data['data_quotations'] = $this->model_quotations->viewdetail($id);
            /*
             * quotaion associated with prospect
             */
            $this->db->select('*');
            $this->db->from('tdat_quotationnotes');
            $this->db->where('prospect_id',$id);
            $query1=  $this->db->get();
            $data['qutnotes']=  $query1->result_array();
            /*
             * accessory associated with prospect
             */
            $this->db->select('*');
            $this->db->from('tdat_prospectaccessories');
            $this->db->where('idprospect',$id);
            $query2=  $this->db->get();
            $data['accessories']=  $query2->result_array();
            
            $data['data_prospects'] = $this->model_prospects->viewdetail($id);
            $this->db->select('*');
            $this->db->from('tdat_accessories');
            $query=  $this->db->get();
            $data['data_accessories']=  $query->result();
            echo $this->load->view('vquotations/vquotationsform', $data, TRUE);
        elseif ($tipe == 'pdf'):
            $data['data_quotations'] = $this->model_quotations->viewdetail($id);
            echo $this->load->view('vquotations/vquotationspdf', $data, TRUE);
        endif;
    }

    public function edit() {
        
        $post = $this->input->post();
        $quotaions=$this->input->post('quotaions');
        $accessories=$this->input->post('accessories');
        
        foreach ($quotaions as $quotaion):
            $this->db->select('quotation_id');
            $this->db->from('tdat_quotationnotes');
            $this->db->where('quotation_id',$quotaion);
            $this->db->where('prospect_id',$post['id']);
            $query2=  $this->db->get();
            $count=  $query2->num_rows();
            if($count!=1):
            $insert_data=array(
                'prospect_id'=>$post['id'],
                'quotation_id'=>$quotaion
            );
     $this->db->insert('tdat_quotationnotes', $insert_data);
       endif;
        endforeach;
       foreach ($accessories as $accessory):
            $this->db->select('idaccessories');
            $this->db->from('tdat_prospectaccessories');
            $this->db->where('idaccessories',$accessory);
            $this->db->where('idprospect',$post['id']);
            $query3=  $this->db->get();
            $count1=  $query3->num_rows();
            if($count1!=1):
            $insert_data1=array(
                'idprospect'=>$post['id'],
                'idaccessories'=>$accessory
            );
     $this->db->insert('tdat_prospectaccessories', $insert_data1);
       endif;
        endforeach;
        
        $data_save = array(
            'id' => $post['id'],
            'description' => $post['description']
        );

        if ($this->model_quotations->edit($data_save)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conquotations/');
    }

    public function delete($id = '') {
        if ($this->model_quotations->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conquotations/');
    }

    public function exportpdf($idprospect) {
        //$this->load->library('pdf');
        $this->load->library('roman');
        define('FPDF_FONTPATH',$this->config->item('fonts_path'));
        //$data_pros = $this->model_prospects->viewdetail($idprospect);
        //var_dump($data_pros); die;
        $data_quotations = $this->model_quotations->viewdetail($idprospect);
        $data_prospectaccessories = $this->model_quotations->viewdetailprospectaccessories($idprospect);
        $data_customercp = $this->model_quotations->viewdetailcustomercp($idprospect);
        $data_productprices = $this->model_quotations->viewdetailproductprices($idprospect);
        //$this->load->view('vquotations/vquotationspdf', $data);
        //load the view and saved it into $html variable
		//$html=$this->load->view('vquotations/vquotationspdf', $data);
                $html='<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Inta pdf </title>
  </head>
  <body>
          <table class="wrap" style="width:650px; margin:0px auto; padding-bottom:20px;">
              <tr> 
              <td class="logo" style="float:left;">
                <img src="http://inta-x-sales.com/assets/pictures/companies/INTA.jpg" alt="" />
            </td>
           </tr> 
	</table>
      <table class="wrap" style="width:650px; margin:0px auto; padding-bottom:30px;">
          <tr>
              <th style="text-align:left; font-size:26px;">Quotation</th>
          </tr>
          <tr> 
           <td>
              To:<br />
              Perusahaan A <br />
              Jl. Test Perusahaan 1<br />
              Attn: CONTACT NAME 1 (TEST)
          </td>
          <td style="text-align:right;">
              Test tempat nomor surat<br />
              26/10/2015
          </td>
         </tr> 
      </table>
      <div class="table-header" style="width:650px; background-color:#aaa; border-left:1px solid #333; border-right:1px solid #333; border-top:1px solid #333; overflow:hidden; margin:auto;">
          <div class="left-col" style="float:left; width:350px; text-align:center; padding:10px 0 10px 0;">
              C&C 266 HP 6X2
          </div>
          <div class="right-col" style="float:right; width:300px; text-align:center; padding:10px 0 10px 0;">
              Price
          </div>
      </div>
      <table style="width:650px; margin:0px auto; border:1px solid #333;" cellspacing="0" cellpadding="0">
          <tr style="background-color:#aaa;">
              <th style="padding:14px 0 14px 0; width:120px; border-bottom:1px solid #333; border-right:1px solid #333;">No</th>
              <th style="padding:14px 0 14px 0; border-bottom:1px solid #333; border-right:1px solid #333;">Description</th>
              <th style="padding:14px 0 14px 0; border-bottom:1px solid #333; border-right:1px solid #333;">Quantity</th>
              <th style="padding:14px 0 14px 0; border-bottom:1px solid #333; border-right:1px solid #333;">Unit Price</th>
              <th style="padding:14px 0 14px 0; border-bottom:1px solid #333; border-right:1px solid #333;">Total Price</th>
          </tr>
          <tr>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">1</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">DriveType:6x2<br />
                    Model : 2213257M3M1 Turbo Charging & lntercooling<br />
                    Engine : Sinotruk WD615.62 Euro ll Emission Standard<br />
                    Horse Power : 266 HP @220O rqm<br />
                    Stroke & Cylinder : 4 Stroke Direct lnjection, 6 Cylinder in Line<br />
                    Transmission : HW 19710T, Syncromesh 10 F / 2 R<br />
                    Steering : 2F8098<br />
                    Frontaile:HF9/9Ton<br />
                    Rear axle : HC16 Ratio 5.73 / 16 Ton<br />
                    Tyre: 11.00-R 20 tube<br />
                    With : Safety belt, A/C<br />
                    Rear a*e cooling system<br />
                    Engine Protector<br />
                    Standard Cabin, Without Sheeper Bed<br />
                    Colour : White
              </td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">2</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">34,000,500 / Un</td>
              <td style="border-bottom:1px solid #333;">68,001,000</td>
          </tr>
          <tr>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">2</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">Rotary Light / Bracket</td>
              <td>1</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">34,000,000</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">34,000,000</td>
          </tr>
          <tr>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">3</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">Fast Fuel</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">1</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">200,000,000</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">200,000,000</td>
          </tr>
           <tr>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">4</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">Strobo Light Led</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">1</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">20,000,000</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">20,000,000</td>
          </tr>
          <tr>
              <td colspan="3" style="border-bottom:1px solid #333; border-right:1px solid #333;">Total</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;">205,003,000</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333;"></td>
          </tr>
      </table>
    
      <table style="width:650px; margin:0px auto;">
          <tr>
              <td>Price Per unit</td>
              <td>Test Price Note</td>
          </tr>
          <tr>
              <td>Delivery</td>
              <td>Test Delivery Note</td>
          </tr>
          <tr>
              <td>Payment</td>
              <td>Test Payment Note</td>
          </tr>
      </table>
      <div class="faithfully-quote" style="width:650px; text-align: right; margin:auto;">
          Very truly yours,<br />
PT. INTRACO PENTA, Tbk
      </div>
      
  </body>
</html>
';
                
        //this the the PDF filename that user will get to download
		$pdfFilePath = "output_pdf_name.pdf";

        //load mPDF library
		$this->load->library('m_pdf');

       //generate the PDF from the given html
		$this->m_pdf->pdf->WriteHTML($html);

        //download it.
		$this->m_pdf->pdf->Output($pdfFilePath, "D");
    }
    public function qdelete() {
       $post = $this->input->post();
       $id=$post['id'];
       $this->db->where('id',$id);
       $this->db->delete('tdat_quotationnotes');
       echo 'success';
    }
     public function adelete() {
       $post = $this->input->post();
       $id=$post['id'];
       $this->db->where('id',$id);
       $this->db->delete('tdat_prospectaccessories');
       echo 'success';
    }

}
