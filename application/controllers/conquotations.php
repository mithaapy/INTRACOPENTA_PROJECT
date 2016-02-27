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
        //print_r($quotaions); die;
        $quotaiondesc=$this->input->post('quotaiondesc');
       $ct= 0;
        $accessories=$this->input->post('accessories');
        if(!empty($quotaions)):
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
       $update_data=array(
         'quotation_desc'=>$quotaiondesc[$ct]
     );
     $this->db->where('quotation_id',$quotaion);
     $this->db->update('tdat_quotationnotes', $update_data);
       
       $ct++;
        endforeach;
//            for($i=0;$i<$ct;$i++):
//            $this->db->select('quotation_id');
//            $this->db->from('tdat_quotationnotes');
//            $this->db->where('quotation_id',$quotaions[$i]);
//            $this->db->where('prospect_id',$post['id']);
//            $query2=  $this->db->get();
//            $count=  $query2->num_rows();
//            if($count!=1):
//            $insert_data=array(
//                'prospect_id'=>$post['id'],
//                'quotation_id'=>$quotaions[$i]
//            );
//     $this->db->insert('tdat_quotationnotes', $insert_data);
//    
//       endif;
//        $update_data=array(
//         'quotation_desc'=>$quotaiondesc[$i]
//     );
//     $this->db->where('prospect_id',$post['id']);
//     $this->db->update('tdat_quotationnotes', $update_data);
//            endfor;

        endif;
       
        if(!empty($accessories)):
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
        endif;
            
       
        
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
        $data_pros = $this->model_prospects->viewdetail($idprospect);
        //var_dump($data_pros); die;
        $data_quotations = $this->model_quotations->viewdetail($idprospect);
        
        $data_prospectaccessories = $this->model_quotations->viewdetailprospectaccessories($idprospect);
        $data_customercp = $this->model_quotations->viewdetailcustomercp($idprospect);
        $data_productprices = $this->model_quotations->viewdetailproductprices($idprospect);
        $salesmanid=$data_pros[0]->users1_id;
        $this->db->select('*');
        $this->db->from('tdat_users');
        $this->db->where('id',$salesmanid);
        $salesquer=  $this->db->get();
        $salesData=$salesquer->result();
        $sFname=$salesData[0]->firstname;
        $sLname=$salesData[0]->	lastname;
        $sMobile=$salesData[0]->mobile;
        $sEmail=$salesData[0]->email;
        //echo $sFname; die;
     // $number = 1232305215;
      //echo number_format($number, 2, '.', ','); die;
//setlocale(LC_MONETARY,"en_US");
//echo money_format("The price is %i", $number); die;
       //var_dump($data_customercp); die;
        //$this->load->view('vquotations/vquotationspdf', $data);
        //load the view and saved it into $html variable
		//$html=$this->load->view('vquotations/vquotationspdf', $data);
        $gender = '';
        if ($data_customercp[0]->customercp_gender == 'Male') : 
            $gender = 'Mr. ';
        else : 
            $gender = 'Mrs. ';
        endif;
        $pdt_net_price=$data_productprices[0]->productprices_netprice;
        $i=1;
        $html='<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Inta pdf </title>
  </head>
  <body>
          <table class="wrap" style="width:650px; margin:0px auto;">
              <tr> 
              <td class="logo" style="float:left; margin:0; padding:0;">
                <img src="'.$data_quotations[0]->companies_logo.'" alt="" height="65" width="150" />
            </td>
           </tr> 
	</table>
      <table class="wrap" style="width:650px; margin:0px auto;">
          <tr>
              <th style="text-align:left; font-size:16px;">Quotation</th>
          </tr>
          <tr> 
           <td>
              To:
              <br />'.
              $data_quotations[0]->customers_name.'<br />
              Attn : '.$gender.' '.$data_customercp[0]->customercp_firstname . ' ' . $data_customercp[0]->customercp_lastname.'<br />
              Phone : '.$data_customercp[0]->customercp_phone .'<br />
              Email : '.$data_customercp[0]->customercp_email .'<br />
          </td>
          <td style="text-align:right;">
              '.$data_quotations[0]->prospects_quotationno.'<br />
              '.$data_quotations[0]->prospects_createddate.'
          </td>
         </tr> 
      </table>
      <div class="table-header" style="width:650px; background-color:#aaa; border-left:1px solid #333; border-right:1px solid #333; border-top:1px solid #333; overflow:hidden; margin:auto;">
          <div class="left-col" style="float:left; width:418px; text-align:center; padding:0px 0 0px 0; border-right:1px solid #333;">
              '.$data_quotations[0]->products_name.'
          </div>
          <div class="right-col" style="float:right; width:220px; text-align:center; padding:0px 0 0px 0;">
              Price
          </div>
      </div>
      <table style="width:650px; margin:0px auto; border:1px solid #333;" cellspacing="0" cellpadding="0">
          <tr style="background-color:#aaa;">
              <th style="padding:14px 0 14px 0; width:60px; text-align:center; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333;">No</th>
              <th style="padding:14px 0 14px 0; border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333;">Description</th>
              <th style="padding:14px 0 14px 0; border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333;">Quantity</th>
              <th style="padding:14px 0 14px 0; border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333;">Unit Price</th>
              <th style="padding:14px 0 14px 0; border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333;">Total Price</th>
          </tr>
          <tr>
              <td style="border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333; text-align:center;">'.$i.'</td>
              <td style="border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333; padding:0 10px 0 10px;">'.$data_quotations[0]->products_specification.'</td>
              <td style="border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333; padding:0 10px 0 10px; ">'.$data_quotations[0]->prospects_quantity.'</td>
              <td style="border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333; padding:0 10px 0 10px; text-align:center;">$ '.number_format($data_productprices[0]->productprices_listprice, 2, '.', ',').' / Un</td>';
              $net_prise=$data_quotations[0]->prospects_quantity*$data_productprices[0]->productprices_listprice;
              $html.='<td style="border-bottom:1px solid #333; font-size:11px; text-align:right;">$ '.number_format($net_prise, 2, '.', ',').'</td>
          </tr>';
         /*
          * Accessories
          */
        $acc_total_price=0;
       if(!empty($data_prospectaccessories[0]->accessories_name)):
           $i++;
           foreach ($data_prospectaccessories as $data_prospectaccessori):
           $html.=' <tr>
              <td style="border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333; padding:0 10px 0 10px;">'.$i.'</td>
              <td style="border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333; padding:0 10px 0 10px;">'.$data_prospectaccessori->accessories_name.'</td>
              <td style="border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333; padding:0 10px 0 10px;">1</td>
              <td style="border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333; padding:0 10px 0 10px; text-align:right;">$ '.number_format($data_prospectaccessori->accessories_price, 2, '.', ',').'</td>
              <td style="border-bottom:1px solid #333; font-size:11px; border-right:1px solid #333; padding:0 10px 0 10px; text-align:right;">$ '.number_format($data_prospectaccessori->accessories_price, 2, '.', ',').'</td>
          </tr>';
           $acc_total_price+=$data_prospectaccessori->accessories_price;
           $i++;
        endforeach;
       endif;
        $total_price=$pdt_net_price+$acc_total_price;
         $html.=' <tr>
              <td></td>
              <td></td>
              <td style="border-right:1px solid #333; font-size:11px; padding:0 10px 0 10px;"></td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333; font-size:11px; padding:0 10px 0 10px;">Total</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333; font-size:11px; padding:0 10px 0 10px; text-align:right;">$ '.number_format($total_price, 2, '.', ',').'</td>
          </tr>';
        
          $p_id=$data_quotations[0]->quotations_idprospect;
       $this->db->select('*');
       $this->db->from('tdat_discounts');
       $this->db->where('prospect_id',$p_id);
       $disquery=  $this->db->get();
       $disRes=$disquery->result();
       if($disRes[0]->discount_price):
           $html.=' <tr>
              <td></td>
              <td></td>
              <td style=" border-right:1px solid #333; font-size:11px; padding:0 10px 0 10px;"></td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333; font-size:11px; padding:0 10px 0 10px;">Discount</td>
              <td style="border-bottom:1px solid #333; border-right:1px solid #333; font-size:11px; padding:0 10px 0 10px;">$ '.number_format($disRes[0]->discount_price, 2, '.', ',').'</td>
          </tr>';
       endif;
        $html.=' </table>';
         /*
          * Quotations
          */
         $idprospect;
          $this->db->select('*');
            $this->db->from('tdat_quotationnotes');
            $this->db->where('prospect_id',$idprospect);
            $query_ids=  $this->db->get();
            $q_ids=$query_ids->result_array();
            if($q_ids):
                foreach ($q_ids as $q_id):
                $this->db->select('*');
            $this->db->from('tdat_quotationtext');
            $this->db->where('id',$q_id['quotation_id']);
            $query_qtexts=  $this->db->get();
            $qtexts=$query_qtexts->result_array();
             $html.=' 
      <table style="width:420px; margin:0px auto;">';
            foreach ($qtexts as $qtext):
                
         $html.='  <tr>
              <td style="font-size:11px;">'.$qtext['name'].'</td>
              <td style="font-size:11px;">'.$q_id['quotation_desc'].'</td>
          </tr>';
            endforeach;
            $html.='</table>';
                endforeach;
            endif;
       
      $html.='  <div class="faithfully-quote" style="width:650px; text-align: right; margin:auto; font-size:11px;">
          Very truly yours,<br />
'.$data_quotations[0]->companies_name.'
      </div><br/>';
     
      $html.='  <div class="faithfully-quote" style="width:650px; text-align: right; margin:auto; font-size:11px;">'.
          $sFname.$sLname.',<br />
'.$sMobile.',<br />
    '.$sEmail.'
      </div>';
   $html.=' </body>
</html>
';
       /*
        * Check that quotaion no exists in tdat_discounts table
        * if not, Insert into tdat_discounts table.
        * else update table
        */         
    
       $countDis=$disquery->num_rows();
       if($countDis!=1):
//           $update_data=array(
//           'discount_price'=>$total_price
//       );
//       $this->db->where('prospect_id',$p_id);
//       $this->db->update('tdat_discounts',$update_data);
//           else:
           $insert_data=array(
            'prospect_id'=>$p_id,
           'quotation_no'=>$data_quotations[0]->prospects_quotationno,
           'total_price'=>$total_price
       );
       $this->db->insert('tdat_discounts',$insert_data);
       endif;
       
        //this the the PDF filename that user will get to download
		$pdfFilePath = 'Quotation-'.$data_quotations[0]->prospects_id.'.pdf';

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
