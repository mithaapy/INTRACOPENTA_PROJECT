<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conusers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');
        $this->load->library('upload_file');
        $this->load->model('model_companies');
        $this->load->model('model_branches');
        $this->load->model('model_roles');
        $this->load->model('model_countries');
        $this->load->model('model_cities');
        $this->load->model('model_users');
    }

    public function index() {
        $setting['set_menu'] = array('menu9' => 'active', 'submenu913' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Users');

        $data['users'] = $this->model_users->viewall();
        $content = $this->load->view('vusers/vusers', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function salesman() {
        $setting['set_menu'] = array('menu8' => 'active', 'submenu81' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Salesman');
        $data['users'] = $this->model_users->viewallsalesman();
        $content = $this->load->view('vsalesman/vsalesman', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'insert'):
            $data['data_companies'] = $this->model_companies->viewall();
            $data['data_branches'] = $this->model_branches->viewall();
            $data['data_roles'] = $this->model_roles->viewall();
            $data['data_countries'] = $this->model_countries->viewall();
            $data['data_cities'] = $this->model_cities->viewall();
            echo $this->load->view('vusers/vusersform', $data, TRUE);
        elseif ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_companies'] = $this->model_companies->viewall();
            $data['data_branches'] = $this->model_branches->viewall();
            $data['data_roles'] = $this->model_roles->viewall();
            $data['data_countries'] = $this->model_countries->viewall();
            $data['data_cities'] = $this->model_cities->viewall();
            $data['data_users'] = $this->model_users->viewdetail($id);
            echo $this->load->view('vusers/vusersform', $data, TRUE);
        elseif ($tipe == 'import'):
            echo $this->load->view('vusers/vusersimport', $data, TRUE);
        endif;
    }

    public function get_formsalesman() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'insert'):
            $data['data_companies'] = $this->model_companies->viewall();
            $data['data_branches'] = $this->model_branches->viewall();
            $data['data_roles'] = $this->model_roles->viewall();
            $data['data_countries'] = $this->model_countries->viewall();
            $data['data_cities'] = $this->model_cities->viewall();
            echo $this->load->view('vsalesman/vsalesmanform', $data, TRUE);
        elseif ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_companies'] = $this->model_companies->viewall();
            $data['data_branches'] = $this->model_branches->viewall();
            $data['data_roles'] = $this->model_roles->viewall();
            $data['data_countries'] = $this->model_countries->viewall();
            $data['data_cities'] = $this->model_cities->viewall();
            $data['data_users'] = $this->model_users->viewdetail($id);
            echo $this->load->view('vsalesman/vsalesmanform', $data, TRUE);
        endif;
    }

    public function insert() {
        $post = $this->input->post();

        $urlimg = 'assets/pictures/users/';
        $namaimg = strtolower($post['firstname'] . $post['nik']);
        $this->upload_file->upload_img('./' . $urlimg, $namaimg, 'picture');

        $parts = pathinfo($_FILES['picture']["name"]);
        $post['picture'] = $urlimg . $namaimg . '.' . $parts['extension'];
        $post['username'] = $namaimg;
        if ($this->model_users->insert($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conusers/');
    }

    public function edit() {
        $post = $this->input->post();

        $urlimg = 'assets/pictures/users/';
        $namaimg = strtolower($post['firstname'] . $post['nik']);
        $this->upload_file->upload_img('./' . $urlimg, $namaimg, 'picture');

        $parts = pathinfo($_FILES['picture']["name"]);
        if ($parts['extension'] != '') {
            $post['picture'] = $urlimg . $namaimg . '.' . $parts['extension'];
        } else {
            $post['picture'] = $post['pictureurl'];
        }
        $post['username'] = $namaimg;
        if ($this->model_users->edit($post)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conusers/');
    }

    public function delete($id = '') {
        if ($this->model_users->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conusers/');
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
                'nik' => $rowData[0][0],
                'username' => $rowData[0][1] . $rowData[0][0],
                'password' => $rowData[0][1] . $rowData[0][0],
                'firstname' => $rowData[0][1],
                'lastname' => $rowData[0][2],
                'gender' => $rowData[0][3],
                'birthdate' => $rowData[0][4],
                'phone' => $rowData[0][5],
                'mobile' => $rowData[0][6],
                'email' => $rowData[0][7],
                'pinbbm' => $rowData[0][8],
                'idcompany' => $rowData[0][0],
                'idbranch' => $rowData[0][10],
                'idrole' => $rowData[0][11],
                'idcountry' => $rowData[0][12],
                'idcity' => $rowData[0][13],
                'picture' => '',
                'active' => $rowData[0][14]
            );
            if ($this->model_users->insert($post)):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
            else:
                $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
            endif;
        endfor;
        redirect(base_url() . 'index.php/conusers/');
    }

    public function profile() {
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Profile');

        $data = '';
        $content = $this->load->view('temp/under_construction', $data, TRUE);
        $this->temp->load($setting, $content);
    }

}
