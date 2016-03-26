<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Consuspects extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->model('model_companies');
        $this->load->model('model_branches');
        $this->load->model('model_leads');
        $this->load->model('model_leaddetails');
        $this->load->model('model_leadhistories');
        $this->load->model('model_users');
        $this->load->model('model_stages');
        $this->load->model('model_customers');
        $this->load->model('model_suspects');
        $this->load->model('model_suspectdetails');
        $this->load->model('model_suspecthistories');
        $this->load->model('model_products');
        $this->load->model('model_statuses');
        $this->load->model('model_segments');
        $this->load->model('model_prospects');
        $this->load->model('model_quotations');
    }

    public function index() {
        $setting['set_menu'] = array('menu3' => 'active', 'submenu32' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Suspects');
        $data['suspects'] = $this->model_suspects->viewall();
        $content = $this->load->view('vsuspects/vsuspects', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_segments'] = $this->model_segments->viewall();
            $data['data_products'] = $this->model_products->viewall();
            $data['data_suspects'] = $this->model_suspects->viewdetail($id);
            $data['data_suspectdetails'] = $this->model_suspectdetails->viewall($id);
            echo $this->load->view('vsuspects/vsuspectsform', $data, TRUE);
        elseif ($tipe == 'histories'):
            $data = '';
            echo $this->load->view('temp/under_construction', $data, TRUE);
        endif;
    }

    public function edit() {
        $post = $this->input->post();
        $data_save1 = array(
            'id' => $post['id'],
            'description' => $post['description'],
            'customerplanned' => $post['customerplanned']
        );

        $query1 = $this->model_suspects->edit($data_save1);
        $query2 = TRUE;
        $query3 = TRUE;
        $query4 = TRUE;
        $query5 = TRUE;
        $query6 = TRUE;
        $query7 = TRUE;
        if ($query1 != FALSE):
            for ($i = 1; $i <= $post['countrows']; $i++):
                switch ($post['idstagehide']) {
                    case 2 : $post['odds' . $i] = '25'; break;
                    case 3 : $post['odds' . $i] = '50'; break;
                    case 4 : $post['odds' . $i] = '75'; break;
                    case 5 : $post['odds' . $i] = '90'; break;
                    case 6 : $post['odds' . $i] = '99'; break;
                    case 7 : $post['odds' . $i] = '100'; break;
                    default: $post['odds' . $i] = '0'; break;
                }
                $stage = '';
                if ($post['action' . $i] != 'delete') :
                    if (!empty($post['idstatus2' . $i])):
                        $idstatussp = $post['action' . $i];
                        if ($post['action' . $i] == '') :
                            $idstatussp = $post['idstatus2' . $i];
                            $stage = $post['stagesd' . $i];
                        endif;
                        if ($post['action' . $i] == 'createquotation') :
                            $stage = 'prospect';
                            $idstatussp = $post['idstatus2' . $i];
                        endif;

                        $data_save2 = array(
                            'id' => $post['id' . $i],
                            'idproduct' => $post['idproduct' . $i],
                            'quantity' => $post['quantity' . $i],
                            'uom' => $post['uom' . $i],
                            'transactionmodel' => $post['transactionmodel' . $i],
                            'idsegment' => $post['idsegment' . $i],
                            'odds' => $post['odds' . $i],
                            'idstatus' => $idstatussp,
                            'stage' => $stage
                        );
                        $query2 = $this->model_suspectdetails->edit($data_save2);
                        if ($post['stagesd' . $i] == 'prospect') :
                            $data_save3 = array(
                                'idsuspectdetail' => $post['id' . $i],
                                'idproduct' => $post['idproduct' . $i],
                                'quantity' => $post['quantity' . $i],
                                'transactionmodel' => $post['transactionmodel' . $i],
                                'odds' => $post['odds' . $i],
                                'idsegment' => $post['idsegment' . $i],
                            );
                            $query3 = $this->model_prospects->edit2($data_save3);
                        endif;
                    else :
                        $idstatussp = '6';
                        $data_save4 = array(
                            'idsuspect' => $post['id'],
                            'idproduct' => $post['idproduct' . $i],
                            'quantity' => $post['quantity' . $i],
                            'uom' => $post['uom' . $i],
                            'transactionmodel' => $post['transactionmodel' . $i],
                            'idsegment' => $post['idsegment' . $i],
                            'odds' => $post['odds' . $i],
                            'idstatus' => $idstatussp,
                            'stage' => $stage
                        );
                        $query4 = $this->model_suspectdetails->insert($data_save4);
                    endif;
                    if ($post['action' . $i] == 'createquotation') :
                        /*
                         *aaa/bbb/ccc-ddd/eee-fff
                         *  aaa :quotation number (automatically generated, according to each company)
                         */
                        $this->db->select('id');
                        $this->db->from('tdat_prospects');
                        $this->db->where('idcompany',$post['idcompany']);
                        $qc=  $this->db->get();
                        $countr=$qc->num_rows();
                        $qno=$countr+1;
                        $len=strlen($qno);
                        if($len=1):
                          $qno='00'.$qno;  
                        
                        elseif($len=2):
                          $qno='0'.$qno;  
                        else:
                          $qno=$qno;  
                        endif;
                        //$qno=$post['idcompany'].'CC';
                    /*
                     * bbb: Company code
                     */
                    $compcode=$post['idcompany2'];
                    $compcodear=  explode('-', $compcode);
                    $comp_code=$compcodear[0];
                    
                    /*
                     * ccc: Branch code
                     */
                    $branchcode=$post['idbranch2'];
                    $branchcodear=  explode('-', $branchcode);
                    $branch_code=$branchcodear[0];
                   /*
                    * ddd: Salesman’s name initial
                    */
                    $salesman=  $post['iduser2'];
                    $salesmanar=  explode('-', $salesman);
                    $words = explode(" ", $salesmanar[1]);
                    $salesman_code = "";

                    foreach ($words as $w) {
                      $salesman_code .= $w[0];
                    }
                   // $salesman_code=$salesmanar[0];
                    /*
                     * eee: Month (roman format numbering
                     * fff: Year
                     */
                    $datef=date('m-Y');
                    $datear=  explode('-', $datef);
                    $datemnth=$datear[0];
                     $dateYr=$datear[1];
                    switch ($datemnth):
                        case 1 : $mnthroman='I';
                            break;
                        case 2 : $mnthroman='II';
                            break;
                        case 3 : $mnthroman='III';
                            break;
                        case 4 : $mnthroman='IV';
                            break;
                        case 5 : $mnthroman='V';
                            break;
                        case 6 : $mnthroman='VI';
                            break;
                        case 7 : $mnthroman='VII';
                            break;
                        case 8 : $mnthroman='VIII';
                            break;
                        case 9 : $mnthroman='IX';
                            break;
                        case 10 : $mnthroman='X';
                            break;
                        case 11 : $mnthroman='XI';
                            break;
                        case 12 : $mnthroman='XII';
                            break;
                    endswitch;
                    
                    $quotionno=$qno.'/'.$comp_code.'/'.$branch_code.'-'.$salesman_code.'/'.$mnthroman.'-'.$dateYr;
                        $data_save5 = array(
                            'idsuspect' => $post['id'],
                            'idsuspectdetail' => $post['id' . $i],
                            'quotationno'=>$quotionno,
                            'createddate' => date('Y-m-d'),
                            'createdby' => $this->session->userdata['users_id'],
                            'idcompany' => $post['idcompany'],
                            'idbranch' => $post['idbranch'],
                            'iduser' => $post['iduser'],
                            'idcustomer' => $post['idcustomer'],
                            'idstage' => '3',
                            'idstatus' => '15',
                            'idproduct' => $post['idproduct' . $i],
                            'quantity' => $post['quantity' . $i],
                            'transactionmodel' => $post['transactionmodel' . $i],
                            'idsegment' => $post['idsegment' . $i],
                            'odds' => $post['odds' . $i]
                        );
                        $query5 = $this->model_prospects->insert($data_save5);

                        $data_save6 = array(
                            'id' => $post['id'],
                            'idstage' => '3'
                        );
                        $query6 = $this->model_suspects->edit($data_save6);

                        $data_save7 = array(
                            'id' => $post['idlead'],
                            'idstage' => '3'
                        );
                        $query7 = $this->model_leads->edit($data_save7);

                        $data_save8 = array(
                            'idprospect' => $query5
                        );
                        $query8 = $this->model_quotations->insert($data_save8);
                    endif;
                else :
                    $this->model_suspectdetails->delete($post['id' . $i]);
                endif;

            endfor;

            if ($query2 != FALSE):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
            elseif ($query3 != FALSE):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
            elseif ($query4 != FALSE):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
            elseif ($query5 != FALSE):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
            elseif ($query6 != FALSE):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
            elseif ($query7 != FALSE):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
            elseif ($query8 != FALSE):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
            elseif ($query2 == FALSE || $query3 == FALSE || $query4 == FALSE || $query5 == FALSE || $query6 == FALSE || $query7 == FALSE || $query8 == FALSE) :
                $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
            endif;
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/consuspects/');
    }

    public function delete($id = '') {
        if ($this->model_suspects->delete($id) && $this->model_suspectdetails->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/consuspects/');
    }

}
