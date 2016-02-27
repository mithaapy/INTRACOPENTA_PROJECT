<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conproductprices extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');
        $this->load->library('upload_file');
        $this->load->model('model_products');
        $this->load->model('model_countries');
        $this->load->model('model_cities');
        $this->load->model('model_productprices');
    }

    public function index() {
        $setting['set_menu'] = array('menu6' => 'active', 'submenu64' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Product Prices');

        $data['productprices'] = $this->model_productprices->viewall();
        $content = $this->load->view('vproductprices/vproductprices', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'insert'):
            $data['data_products'] = $this->model_products->viewall();
            $data['data_countries'] = $this->model_countries->viewall();
            $data['data_cities'] = $this->model_cities->viewall();
            echo $this->load->view('vproductprices/vproductpricesform', $data, TRUE);
        elseif ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_products'] = $this->model_products->viewall();
            $data['data_countries'] = $this->model_countries->viewall();
            $data['data_cities'] = $this->model_cities->viewall();
            $data['data_productprices'] = $this->model_productprices->viewdetail($id);
            echo $this->load->view('vproductprices/vproductpricesform', $data, TRUE);
        elseif ($tipe == 'import'):
            echo $this->load->view('vproductprices/vproductpricesimport', $data, TRUE);
        endif;
    }

    public function insert() {
        $post = $this->input->post();

        if ($this->model_productprices->insert($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conproductprices/');
    }

    public function edit() {
        $post = $this->input->post();

        if ($this->model_productprices->edit($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conproductprices/');
    }

    public function delete($id = '') {
        if ($this->model_productprices->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conproductprices/');
    }

    public function import() {
        $post = $this->input->post();
        $url = 'assets/files/import/';
        $nama = $_FILES['importfile']['name'];
        $media = $this->upload_file->upload_xls('./' . $url, $nama, 'importfile');
        $inputFileName = './' . $url . $media['file_name'];

        try {
            $inputFileType = IOFactory::identify($inputFileName);
            $objReader = IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch (Exception $e) {
            die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }
        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();
        for ($row = 2; $row <= $highestRow; $row++):
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
            $post = array(
                'idproduct' => $rowData[0][0],
                'listprice' => $rowData[0][1],
                'netprice' => $rowData[0][2],
                'idcountry' => $rowData[0][3],
                'idcity' => $rowData[0][4],
                'validdatestart' => $rowData[0][5],
                'validdateend' => $rowData[0][6],
                'currency' => $rowData[0][7],
                'active' => $rowData[0][8]
            );
            if ($this->model_productprices->insert($post)):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
            else:
                $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
            endif;
        endfor;
        redirect(base_url() . 'index.php/conproductprices/');
    }

}
