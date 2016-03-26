<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conincentives extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
		$this->load->model('model_leads');
        $this->load->model('model_users');
        $this->load->model('model_incentives');
    }

    public function index() {
        $setting['set_menu'] = array('menu8' => 'active', 'submenu84' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Sales Incentives');
        $data['incentives'] = $this->model_incentives->viewall();
        $content = $this->load->view('vincentives/vincentives', $data, TRUE);
        $this->temp->load($setting, $content);
    }
    public function exportpdf($idincentive) {
    
        $data_inc = $this->model_incentives->viewdetail($idincentive);
       $comp_id=$data_inc[0]->leads_idcompany;
       $branch_id=$data_inc[0]->leads_idbranch;
       $prospectid=$data_inc[0]->incentives_idprospect;
       $project_name=$data_inc[0]->leads_projectname;
       $currency=$data_inc[0]->incentives_currency;
       $value=$data_inc[0]->incentives_value;
       $this->db->select('name');
       $this->db->from('tdat_companies');
       $this->db->where('id',$comp_id);
       $cq=  $this->db->get();
       $cres=$cq->result();
       $cname=$cres[0]->name;
       
       $this->db->select('name');
       $this->db->from('tdat_branches');
        $this->db->where('idcompany',$comp_id);
       $this->db->where('id',$branch_id);
       $bq=  $this->db->get();
       $bres=$bq->result();
       $bname=$bres[0]->name;
       //Select incentive no from prospect id
       $this->db->select('incentiveno');
       $this->db->from('tdat_prospectalls');
        $this->db->where('idprospect',$prospectid);
      
       $iq=  $this->db->get();
       $ires=$iq->result();
       $ino=$ires[0]->incentiveno;
       
         $html='<!DOCTYPE html>
             <html >
            <head>
              <meta charset="UTF-8">
              <title>Incentive pdf </title>
            </head>
            <body>
             <table class="wrap" style="width:650px; margin:0px auto;">
              <tr>
              <td>Name : '.$data_inc[0]->users_firstname.' '. $data_inc[0]->users_lastname.'</td>
              <td>Date : '.date('Y-m-d').'</td>
              </tr>';
         $html.='<tr>
              <td>NIK : '.$data_inc[0]->users_nik.'</td>
              <td></td>
              </tr>';
          $html.='<tr>
              <td>Company : '.$cname.'</td>
              <td></td>
              </tr>';
           $html.='<tr>
              <td>Branch : '.$bname.'</td>
              <td></td>
              </tr>
              </table><br/><br/>';
           $html.='<table class="wrap" style="width:650px; margin:0px auto;" border="1">
                   <tr>
                    <th>Incentive No</th>
                    <th>Prospect ID</th>
                    <th>Project Name</th>
                    <th>Total Price(in quotation)</th>
                    </tr>';
           
          $html.='<tr>
                    <td style="text-align:center;">'.$ino.'</td>
                    <td style="text-align:center;">'.$prospectid.'</td>
                    <td style="text-align:center;">'.$project_name.'</td>
                    <td style="text-align:center;">'.$currency.' '.$value.'</td>
                    </tr>
                    </table>';
          
          //this the the PDF filename that user will get to download
		$pdfFilePath = 'Incentive-'.$ino.'.pdf';

        //load mPDF library
		$this->load->library('m_pdf');

       //generate the PDF from the given html
		$this->m_pdf->pdf->WriteHTML($html);

        //download it.
		$this->m_pdf->pdf->Output($pdfFilePath, "D");
    }

}
