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
        $this->load->library('pdf');
        $this->load->library('roman');
        define('FPDF_FONTPATH',$this->config->item('fonts_path'));
        $data['data_quotations'] = $this->model_quotations->viewdetail($idprospect);
        $data['data_prospectaccessories'] = $this->model_quotations->viewdetailprospectaccessories($idprospect);
        $data['data_customercp'] = $this->model_quotations->viewdetailcustomercp($idprospect);
        $data['data_productprices'] = $this->model_quotations->viewdetailproductprices($idprospect);
        $this->load->view('vquotations/vquotationspdf', $data);
    }

}
