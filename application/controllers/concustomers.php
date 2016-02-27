<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Concustomers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');
        $this->load->model('model_customers');
        $this->load->model('model_customercp');
        $this->load->model('model_industries');
        $this->load->model('model_segments');
        $this->load->model('model_customergroups');
        $this->load->model('model_customertypes');
        $this->load->model('model_cities');
        $this->load->model('model_countries');
        $this->load->model('model_salescustomers');
        $this->load->model('model_users');
    }

    public function index() {
        $setting['set_menu'] = array('menu7' => 'active', 'submenu71' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Customers');

        $data['customers'] = $this->model_customers->viewall();
        $content = $this->load->view('vcustomers/vcustomers', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'insert'):
            $data['data_industries'] = $this->model_industries->viewall();
            $data['data_segments'] = $this->model_segments->viewall();
            $data['data_customergroups'] = $this->model_customergroups->viewall();
            $data['data_customertypes'] = $this->model_customertypes->viewall();
            $data['data_cities'] = $this->model_cities->viewall();
            $data['data_countries'] = $this->model_countries->viewall();
            $data['data_users'] = $this->model_users->viewallsalesman();
            echo $this->load->view('vcustomers/vcustomersform', $data, TRUE);
        elseif ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_customers'] = $this->model_customers->viewdetail($id);
            $data['data_customercp'] = $this->model_customercp->viewall($id);
            $data['data_industries'] = $this->model_industries->viewall();
            $data['data_segments'] = $this->model_segments->viewall();
            $data['data_customergroups'] = $this->model_customergroups->viewall();
            $data['data_customertypes'] = $this->model_customertypes->viewall();
            $data['data_cities'] = $this->model_cities->viewall();
            $data['data_countries'] = $this->model_countries->viewall();
            $data['data_users'] = $this->model_users->viewallsalesman();
            $data['data_salescustomers'] = $this->model_salescustomers->viewall($id);
            echo $this->load->view('vcustomers/vcustomersform', $data, TRUE);
        elseif ($tipe == 'import'):
            echo $this->load->view('vcustomers/vcustomersimport', $data, TRUE);
        endif;
    }

    public function insert() {
        $post = $this->input->post();
        $data_save = array(
            'name' => $post['name'],
            'idindustry' => $post['idindustry'],
            'idsegment' => $post['idsegment'],
            'idcustomergroup' => $post['idcustomergroup'],
            'idcustomertype' => $post['idcustomertype'],
            'CUST_WID' => $post['CUST_WID'],
            'address' => $post['address'],
            'idcity' => $post['idcity'],
            'idcountry' => $post['idcountry'],
            'postalcode' => $post['postalcode'],
            'phone' => $post['phone'],
            'fax' => $post['fax'],
            'email' => $post['email'],
            'locationsite' => $post['locationsite']
        );

        $query1 = $this->model_customers->insert($data_save);

        if ($query1 != FALSE):
            for ($i = 1; $i <= $post['countrows']; $i++):
                $data_save = array(
                    'firstname' => $post['firstname' . $i],
                    'lastname' => $post['lastname' . $i],
                    'gender' => $post['gender' . $i],
                    'birthdate' => $post['birthdate' . $i],
                    'phone' => $post['phone' . $i],
                    'ext' => $post['ext' . $i],
                    'mobile' => $post['mobile' . $i],
                    'email' => $post['email' . $i],
                    'position' => $post['position' . $i],
                    'hobby' => $post['hobby' . $i],
                    'idcustomer' => $query1
                );
                $query2 = $this->model_customercp->insert($data_save, 'tdat_customercp');
            endfor;
            for ($i = 1; $i <= $post['countrows2']; $i++):
                $data_save3 = array(
                    'idcustomer' => $query1,
                    'iduser' => $post['idusersc' . $i],
                    'assigndate' => date('Y-m-d'),
                    'active' => $post['active' . $i]
                );
                $query3 = $this->model_salescustomers->insert($data_save3);
            endfor;
            if ($query2 || $query3):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
            endif;
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/concustomers/');
    }

    public function edit() {
        $post = $this->input->post();
        $data_save = array(
            'id' => $post['id'],
            'name' => $post['name'],
            'idindustry' => $post['idindustry'],
            'idsegment' => $post['idsegment'],
            'idcustomergroup' => $post['idcustomergroup'],
            'idcustomertype' => $post['idcustomertype'],
            'CUST_WID' => $post['CUST_WID'],
            'address' => $post['address'],
            'idcity' => $post['idcity'],
            'idcountry' => $post['idcountry'],
            'postalcode' => $post['postalcode'],
            'phone' => $post['phone'],
            'fax' => $post['fax'],
            'email' => $post['email'],
            'locationsite' => $post['locationsite']
        );

        $query1 = $this->model_customers->edit($data_save);

        if ($query1 != FALSE):
            for ($i = 1; $i <= $post['countrows']; $i++):
                if ($post['actioncp' . $i] != 'delete') :
                    if (empty($post['idcp' . $i])) :
                        $data_save2 = array(
                            'firstname' => $post['firstname' . $i],
                            'lastname' => $post['lastname' . $i],
                            'gender' => $post['gender' . $i],
                            'birthdate' => $post['birthdate' . $i],
                            'phone' => $post['phone' . $i],
                            'ext' => $post['ext' . $i],
                            'mobile' => $post['mobile' . $i],
                            'email' => $post['email' . $i],
                            'position' => $post['position' . $i],
                            'hobby' => $post['hobby' . $i],
                            'idcustomer' => $post['id']
                        );
                        $query2 = $this->model_customercp->insert($data_save2);
                    else:
                        $data_save2 = array(
                            'id' => $post['idcp' . $i],
                            'firstname' => $post['firstname' . $i],
                            'lastname' => $post['lastname' . $i],
                            'gender' => $post['gender' . $i],
                            'birthdate' => $post['birthdate' . $i],
                            'phone' => $post['phone' . $i],
                            'ext' => $post['ext' . $i],
                            'mobile' => $post['mobile' . $i],
                            'email' => $post['email' . $i],
                            'position' => $post['position' . $i],
                            'hobby' => $post['hobby' . $i],
                            'idcustomer' => $post['id']
                        );
                        $query2 = $this->model_customercp->edit($data_save2);
                    endif;
                else:
                    $this->model_customercp->delete($post['idcp' . $i]);
                endif;
            endfor;
            for ($i = 1; $i <= $post['countrows2']; $i++):
                if ($post['actionsc' . $i] != 'delete') :
                    if (empty($post['idsc' . $i])) :
                        $data_save3 = array(
                            'idcustomer' => $post['id'],
                            'iduser' => $post['idusersc' . $i],
                            'assigndate' => date('Y-m-d'),
                            'active' => $post['active' . $i]
                        );
                        $query3 = $this->model_salescustomers->insert($data_save3);
                    else:
                        $data_save3 = array(
                            'id' => $post['idsc' . $i],
                            'iduser' => $post['idusersc' . $i],
                            'active' => $post['active' . $i]
                        );
                        $query3 = $this->model_salescustomers->edit($data_save3);
                    endif;
                else:
                    $this->model_salescustomers->delete($post['idsc' . $i]);
                endif;
            endfor;
            if ($query2 || $query3):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Edit data is success.</div>');
            else :
                $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
            endif;
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/concustomers/');
    }

    public function delete($id = '') {
        if ($this->model_customers->delete($id) && $this->model_customercp->delete($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/concustomers/');
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
                'name' => $rowData[0][0],
                'idindustry' => $rowData[0][1],
                'idsegment' => $rowData[0][2],
                'idcustomergroup' => $rowData[0][3],
                'idcustomertype' => $rowData[0][4],
                'CUST_WID' => $rowData[0][5],
                'address' => $rowData[0][6],
                'idcountry' => $rowData[0][6],
                'idcity' => $rowData[0][6],
                'postalcode' => $rowData[0][7],
                'phone' => $rowData[0][8],
                'fax' => $rowData[0][9],
                'email' => $rowData[0][10],
                'locationsite' => $rowData[0][11]
            );
            if ($this->model_customers->insert($post)):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
            else:
                $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
            endif;
        endfor;
        redirect(base_url() . 'index.php/concustomers/');
    }

}
