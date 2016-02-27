<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conproductpromotions extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');
        $this->load->library('upload_file');
        $this->load->model('model_products');
        $this->load->model('model_productpromotions');
    }

    public function index() {
        $setting['set_menu'] = array('menu6' => 'active', 'submenu66' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Product Promotions');

        $data['productpromotions'] = $this->model_productpromotions->viewall();
        $content = $this->load->view('vproductpromotions/vproductpromotions', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'insert'):
            $data['data_products'] = $this->model_products->viewall();
            echo $this->load->view('vproductpromotions/vproductpromotionsform', $data, TRUE);
        elseif ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_products'] = $this->model_products->viewall();
            $data['data_productpromotions'] = $this->model_productpromotions->viewdetail($id);
            echo $this->load->view('vproductpromotions/vproductpromotionsform', $data, TRUE);
        elseif ($tipe == 'import'):
            echo $this->load->view('vproductpromotions/vproductpromotionsimport', $data, TRUE);
        endif;
    }

    public function insert() {
        $post = $this->input->post();

        if ($this->model_productpromotions->insert($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conproductpromotions/');
    }

    public function edit() {
        $post = $this->input->post();

        if ($this->model_productpromotions->edit($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conproductpromotions/');
    }

    public function delete($id = '') {
        if ($this->model_productpromotions->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conproductpromotions/');
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
                'name' => $rowData[0][1],
                'description' => $rowData[0][2],
                'validdatestart' => $rowData[0][3],
                'validateend' => $rowData[0][4],
                'active' => $rowData[0][5]
            );
            if ($this->model_productpromotions->insert($post)):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
            else:
                $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
            endif;
        endfor;
        redirect(base_url() . 'index.php/conproductpromotions/');
    }

}

?>