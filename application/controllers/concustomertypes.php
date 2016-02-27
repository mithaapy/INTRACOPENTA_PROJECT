<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Concustomertypes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');
        $this->load->library('upload_file');
        $this->load->model('model_customertypes');
    }

    public function index() {
        $setting['set_menu'] = array('menu7' => 'active', 'submenu73' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Customer Types');

        $data['customertypes'] = $this->model_customertypes->viewall();
        $content = $this->load->view('vcustomertypes/vcustomertypes', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'insert'):
            echo $this->load->view('vcustomertypes/vcustomertypesform', $data, TRUE);
        elseif ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_customertypes'] = $this->model_customertypes->viewdetail($id);
            echo $this->load->view('vcustomertypes/vcustomertypesform', $data, TRUE);
        elseif ($tipe == 'import'):
            echo $this->load->view('vcustomertypes/vcustomertypesimport', $data, TRUE);
        endif;
    }

    public function insert() {
        $post = $this->input->post();

        if ($this->model_customertypes->insert($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/concustomertypes/');
    }

    public function edit() {
        $post = $this->input->post();
        if ($this->model_customertypes->edit($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/concustomertypes/');
    }

    public function delete($id = '') {
        if ($this->model_customertypes->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/concustomertypes/');
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
                'level1' => $rowData[0][0],
                'level2' => $rowData[0][1],
                'level3' => $rowData[0][2],
                'description' => $rowData[0][3]
            );
            if ($this->model_customertypes->insert($post)):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
            else:
                $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
            endif;
        endfor;
        redirect(base_url() . 'index.php/concustomertypes/');
    }

}
