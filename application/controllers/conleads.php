<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conleads extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
        $this->load->library('PHPExcel');
        $this->load->library('PHPExcel/IOFactory');
        $this->load->library('upload_file');
        $this->load->model('model_sources');
        $this->load->model('model_statuses');
        $this->load->model('model_stages');
        $this->load->model('model_users');
        $this->load->model('model_companies');
        $this->load->model('model_branches');
        $this->load->model('model_customers');
        $this->load->model('model_leads');
        $this->load->model('model_leaddetails');
        $this->load->model('model_leadhistories');
        $this->load->model('model_suspects');
    }

    public function index() {
        $setting['set_menu'] = array('menu3' => 'active', 'submenu31' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Leads');

        $data['leads'] = $this->model_leads->viewall();
        $content = $this->load->view('vleads/vleads', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function openbidding() {
        $setting['set_menu'] = array('menu2' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Open Bidding');
//        $data['data_sources'] = $this->model_sources->viewall();
//        $data['data_companies'] = $this->model_companies->viewall();
//        $data['data_branches'] = $this->model_branches->viewall();
//        $data['data_customers'] = $this->model_customers->viewall();
      
                       
           $sql="     SELECT  a.id AS leads_id,
                        a.idsource AS leads_idsource,
			a.projectno AS leads_projectno,
                        a.createddate AS leads_createddate,
                        a.createdby AS leads_createdby,
                        a.idstage AS leads_idstage,
                        a.idcompany AS leads_idcompany,
                        a.idbranch AS leads_idbranch,
                        a.projectname AS leads_projectname,
                        a.projectdescription AS leads_projectdescription,
                        a.projectstatus AS leads_projectstatus,
                        a.constdate AS leads_constdate,
                        a.constenddate AS leads_constenddate,
                        a.projectprovince AS leads_projectprovince,
                        a.projecttown AS leads_projecttown,
                        a.projectaddress AS leads_projectaddress,
                        a.projectcategory AS leads_projectcategory,
                        a.projectstage AS leads_projectstage,
                        a.architechdesigner AS leads_architechdesigner,
                        a.projectpublishdate AS leads_projectpublishdate,
                        a.devpropmanager AS leads_devpropmanager,
                        a.engineerconsultant AS leads_engineerconsultant,
                        a.maincontractor AS leads_maincontractor,
                        a.subcontractor AS leads_subcontractor,
                        a.projectvalue AS leads_projectvalue,
                        a.addressablevalue AS leads_addressablevalue,
                        a.quality AS leads_quality,
                        a.assigntype AS leads_assigntype,
                       b.idstatus AS status
                FROM tdat_leads a
                INNER JOIN tdat_leaddetails b ON a.id = b.idlead
                WHERE b.idstatus = 1" ;
        $query = $this->db->query($sql);
        $data['leaddetails']=$query->result();
        //print_r($data);
       // die();
        $content = $this->load->view('vleads/vleadsopenbidding', $data, TRUE);
        $this->temp->load($setting, $content);
    }

    public function get_form() {
        $tipe = $this->input->post('tipe');
        $id = $this->input->post('id');

        $data['function'] = $tipe;
        if ($tipe == 'insert'):
            $data['data_sources'] = $this->model_sources->viewall();
            $data['data_statuses'] = $this->model_statuses->viewall();
            $data['data_stages'] = $this->model_stages->viewall();
            $data['data_users'] = $this->model_users->viewall();
            $data['data_companies'] = $this->model_companies->viewall();
            $data['data_branches'] = $this->model_branches->viewall();
            //$data['data_customers'] = $this->model_customers->viewall();
            echo $this->load->view('vleads/vleadsform', $data, TRUE);
        elseif ($tipe == 'edit' || $tipe == 'detail'):
            $data['data_sources'] = $this->model_sources->viewall();
            $data['data_statuses'] = $this->model_statuses->viewall();
            $data['data_stages'] = $this->model_stages->viewall();
            $data['data_users'] = $this->model_users->viewall();
            $data['data_companies'] = $this->model_companies->viewall();
            $data['data_branches'] = $this->model_branches->viewall();
            //$data['data_customers'] = $this->model_customers->viewall();
            $data['data_leads'] = $this->model_leads->viewdetail($id);
            $data['data_leaddetails'] = $this->model_leaddetails->viewall($id);
            echo $this->load->view('vleads/vleadsform', $data, TRUE);
        elseif ($tipe == 'import'):
            echo $this->load->view('vleads/vleadsimport', $data, TRUE);
        elseif ($tipe == 'histories'):
            echo $this->load->view('temp/under_construction', $data, TRUE);
        endif;
    }

    public function insert() {
        $post = $this->input->post();
        $data_save = array(
            'idsource' => $post['idsource'],
            'projectno' => $post['projectno'],
            'createddate' => date('Y-m-d'),
            'createdby' => $this->session->userdata['users_id'],
            'idstage' => '1',
            'idcompany' => '',
            'idbranch' => '',
            'projectname' => $post['projectname'],
            'projectdescription' => $post['projectdescription'],
            'projectstatus' => $post['projectstatus'],
            'constdate' => $post['constdate'],
            'constenddate' => $post['constenddate'],
            'projectprovince' => $post['projectprovince'],
            'projecttown' => $post['projecttown'],
            'projectaddress' => $post['projectaddress'],
            'projectcategory' => $post['projectcategory'],
            'projectstage' => $post['projectstage'],
            'architechdesigner' => $post['architechdesigner'],
            'projectpublishdate' => $post['projectpublishdate'],
            'devpropmanager' => $post['devpropmanager'],
            'engineerconsultant' => $post['engineerconsultant'],
            'maincontractor' => $post['maincontractor'],
            'subcontractor' => $post['subcontractor'],
            'projectvalue' => $post['projectvalue'],
            'addressablevalue' => $post['addressablevalue'],
            'quality' => $post['quality'],
            'assigntype' => $post['assigntype']
        );

        $query1 = $this->model_leads->insert($data_save);

        if ($query1 != FALSE):
            for ($i = 1; $i <= $post['countrows']; $i++):
                $customer = $this->model_customers->checkcustomer($post['idcustomer' . $i]);
                if (!$customer) :
                    $data_save2 = array(
                        'name' => $post['idcustomer' . $i]
                    );
                    $query2 = $this->model_customers->insert($data_save2);

                    $data_save3 = array(
                        'idlead' => $query1,
                        'idcompany' => $post['idcompany' . $i],
                        'idbranch' => $post['idbranch' . $i],
                        'idcustomer' => $query2,
                        'quality' => $post['quality' . $i],
                        'idstatus' => '1'
                    );
                    $query3 = $this->model_leaddetails->insert($data_save3);
                else :
                    $data_save3 = array(
                        'idlead' => $query1,
                        'idcompany' => $post['idcompany' . $i],
                        'idbranch' => $post['idbranch' . $i],
                        'idcustomer' => $customer[0]->customers_id,
                        'quality' => $post['quality' . $i],
                        'idstatus' => '1'
                    );
                    $query3 = $this->model_leaddetails->insert($data_save3);
                endif;

            endfor;

            if ($query2):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
            endif;
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conleads/');
    }

    public function edit() {
        $post = $this->input->post();
        $data_save = array(
            'id' => $post['id'],
            'idsource' => $post['idsource'],
            'projectno' => $post['projectno'],
            'projectname' => $post['projectname'],
            'projectdescription' => $post['projectdescription'],
            'projectstatus' => $post['projectstatus'],
            'constdate' => $post['constdate'],
            'constenddate' => $post['constenddate'],
            'projectprovince' => $post['projectprovince'],
            'projecttown' => $post['projecttown'],
            'projectaddress' => $post['projectaddress'],
            'projectcategory' => $post['projectcategory'],
            'projectstage' => $post['projectstage'],
            'architechdesigner' => $post['architechdesigner'],
            'projectpublishdate' => $post['projectpublishdate'],
            'devpropmanager' => $post['devpropmanager'],
            'engineerconsultant' => $post['engineerconsultant'],
            'maincontractor' => $post['maincontractor'],
            'subcontractor' => $post['subcontractor'],
            'projectvalue' => $post['projectvalue'],
            'addressablevalue' => $post['addressablevalue'],
            'quality' => $post['quality'],
            'assigntype' => $post['assigntype']
        );

        $query1 = $this->model_leads->edit($data_save);
        $query2 = TRUE;
        $query3 = TRUE;
        $query4 = TRUE;
        $query5 = TRUE;
        if ($query1 != FALSE):
            for ($i = 1; $i <= $post['countrows']; $i++):
                $customer = $this->model_customers->checkcustomer($post['idcustomer' . $i]);
                if (!$customer) :
                    $data_save2 = array(
                        'name' => $post['idcustomer' . $i]
                    );
                    $query2 = $this->model_customers->insert($data_save2);
                    $customer = $query2;
                else :
                    $customer = $customer[0]->customers_id;
                endif;
                if ($post['action' . $i] != 'delete') :
                    if (!empty($post['idstatus2' . $i])):
                        if ($post['action' . $i] == '1') :
                            $idstatusld = '1';
                            $pickupdateld = '';
                            $pickupbyld = ''; /* idusers */
                        elseif ($post['action' . $i] == '2') :
                            $idstatusld = '2';
                            $pickupdateld = date('Y-m-d');
                            $pickupbyld = $this->session->userdata['users_id']; /* idusers */
                        elseif ($post['action' . $i] == '3') :
                            $idstatusld = '3';
                            $pickupdateld = $post['pickupdate' . $i];
                            $pickupbyld = $post['pickupby2' . $i]; /* idusers */
                        elseif ($post['action' . $i] == '4') :
                            $idstatusld = '4';
                            $pickupdateld = $post['pickupdate' . $i];
                            $pickupbyld = $post['pickupby2' . $i]; /* idusers */
                        elseif ($post['action' . $i] == '5') :
                            $idstatusld = '5';
                            $pickupdateld = $post['pickupdate' . $i];
                            $pickupbyld = $post['pickupby2' . $i]; /* idusers */
                        elseif ($post['action' . $i] == '') :
                            $idstatusld = $post['idstatus2' . $i];
                            $pickupdateld = $post['pickupdate' . $i];
                            $pickupbyld = $post['pickupby2' . $i]; /* idusers */
                        endif;
                        $data_save2 = array(
                            'id' => $post['id' . $i],
                            'idlead' => $post['id'],
                            'idcompany' => $post['idcompany' . $i],
                            'idbranch' => $post['idbranch' . $i],
                            'idcustomer' => $customer,
                            'pickupdate' => $pickupdateld,
                            'pickupby' => $pickupbyld,
                            'quality' => $post['quality' . $i],
                            'idstatus' => $idstatusld
                        );
                        $query2 = $this->model_leaddetails->edit($data_save2);
                        if ($post['idstatus2' . $i] == '3') :
                            $data_save3 = array(
                                'idleaddetail' => $post['id' . $i],
                                'idcompany' => $post['idcompany' . $i],
                                'idbranch' => $post['idbranch' . $i],
                                'idcustomer' => $customer
                            );
                            $query3 = $this->model_suspects->edit2($data_save3);
                        endif;
                    else :
                        $idstatusld = '1';
                        $pickupdateld = '';
                        $pickupbyld = ''; /* idusers */
                        $data_save2 = array(
                            'id' => $post['id' . $i],
                            'idlead' => $post['id'],
                            'idcompany' => $post['idcompany' . $i],
                            'idbranch' => $post['idbranch' . $i],
                            'idcustomer' => $customer,
                            'pickupdate' => $pickupdateld,
                            'pickupby' => $pickupbyld,
                            'quality' => $post['quality' . $i],
                            'idstatus' => $idstatusld
                        );
                        $query2 = $this->model_leaddetails->insert($data_save2);
                    endif;
                    if ($post['action' . $i] == '3') :
                        $data_save4 = array(
                            'createddate' => $pickupdateld,
                            'createdby' => $pickupbyld,
                            'idcompany' => $post['idcompany' . $i],
                            'idbranch' => $post['idbranch' . $i],
                            'idlead' => $post['id'],
                            'idleaddetail' => $post['id' . $i],
                            'iduser' => $pickupbyld,
                            'description' => '',
                            'idstage' => '2',
                            'customerplanned' => '',
                            'idcustomer' => $customer,
                        );
                        $query4 = $this->model_suspects->insert($data_save4);

                        $data_save5 = array(
                            'id' => $post['id'],
                            'idstage' => '2'
                        );
                        $query5 = $this->model_leads->edit($data_save5);
                    endif;
                else:
                    $this->model_leaddetails->delete($post['id' . $i]);
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
            elseif ($query2 == FALSE || $query3 == FALSE || $query4 == FALSE || $query5 == FALSE) :
                $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
            endif;
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Edit data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conleads/');
    }

    public function delete($id = '') {
        if ($this->model_leads->delete($id) && $this->model_leaddetails->delete2($id)):
            $this->session->set_flashdata('err_msg', '<div class="alert alert-warning alert-notif" role="alert"><strong>Well Done!</strong> Delete data is success.</div>');
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Delete data is failed.</div>');
        endif;
        redirect(base_url() . 'index.php/conleads/');
    }

    public function export() {
        $post = $this->input->post();
        $dataleads = $this->model_leads->viewexport($post['datestart'], $post['dateend']);

//        $objPHPExcel = new PHPExcel();
//
////create column
//        $objPHPExcel->getActiveSheet()->setCellValue('A2', 'No');
//        $objPHPExcel->getActiveSheet()->setCellValue('B2', 'Nama');
//        $objPHPExcel->getActiveSheet()->setCellValue('C2', 'Alamat');
//        $objPHPExcel->getActiveSheet()->setCellValue('D2', 'Email');
//
////make a border column
//        $objPHPExcel->getActiveSheet()->getStyle('A2:D2')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
//
////create data per row
//        $objPHPExcel->getActiveSheet()->setCellValue('A3', '1');
//        $objPHPExcel->getActiveSheet()->setCellValue('B3', 'Ikhwan');
//        $objPHPExcel->getActiveSheet()->setCellValue('C3', 'Yogyakarta');
//        $objPHPExcel->getActiveSheet()->setCellValue('D3', 'ikhwan@mail.com');
//
////create data per row
//        $objPHPExcel->getActiveSheet()->setCellValue('A4', '2');
//        $objPHPExcel->getActiveSheet()->setCellValue('B4', 'Insan');
//        $objPHPExcel->getActiveSheet()->setCellValue('C4', '<a class="zem_slink" title="Lombok" href="http://maps.google.com/maps?ll=-8.565,116.351&spn=0.1,0.1&q=-8.565,116.351 (Lombok)&t=h" target="_blank" rel="geolocation">Lombok</a>');
//        $objPHPExcel->getActiveSheet()->setCellValue('D4', 'insan@mail.com');
//
////create data per row
//        $objPHPExcel->getActiveSheet()->setCellValue('A5', '3');
//        $objPHPExcel->getActiveSheet()->setCellValue('B5', 'Randa');
//        $objPHPExcel->getActiveSheet()->setCellValue('C5', '<a class="zem_slink" title="West Java" href="http://maps.google.com/maps?ll=-6.75,107.5&spn=1.0,1.0&q=-6.75,107.5 (West%20Java)&t=h" target="_blank" rel="geolocation">Jawa Barat</a>');
//        $objPHPExcel->getActiveSheet()->setCellValue('D5', 'Randa@mail.com');
//
////auto size column
//        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
//        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
//        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
//        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
//
//// Rename worksheet name
//        $objPHPExcel->getActiveSheet()->setTitle('Data Mahasiswa');
//
//// Set active sheet index to the first sheet, so <a class="zem_slink" title="Microsoft Excel" href="http://office.microsoft.com/en-us/excel" target="_blank" rel="homepage">Excel</a> opens this as the first sheet
//        $objPHPExcel->setActiveSheetIndex(0);
//
//// Redirect output to a client’s web browser (Excel2007)
//        header('<a class="zem_slink" title="Internet media type" href="http://en.wikipedia.org/wiki/Internet_media_type" target="_blank" rel="wikipedia">Content-Type</a>: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//        header('Content-Disposition: attachment;filename="Data_Mhs_' . date('dmy') . '.xlsx"');
//        //header('<a class="zem_slink" title="Web cache" href="http://en.wikipedia.org/wiki/Web_cache" target="_blank" rel="wikipedia">Cache-Control</a>: max-age=0');
//// If you're serving to <a class="zem_slink" title="Internet Explorer 9" href="http://windows.microsoft.com/ie" target="_blank" rel="homepage">IE 9</a>, then the following may be needed
//        //header('Cache-Control: max-age=1');
//
//// If you're serving to IE over SSL, then the following may be needed
//        //header('Expires: Mon, 26 Jul 1997 05:00:00 <a class="zem_slink" title="Greenwich Mean Time" href="http://en.wikipedia.org/wiki/Greenwich_Mean_Time" target="_blank" rel="wikipedia">GMT</a>'); // Date in the past
//        //header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
//        //header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
//        //header('Pragma: public'); // HTTP/1.0
//
//        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
//        $objWriter->save('php://output');
    }

    public function import() {
        $config = array(
            'upload_path' => "assets/files/import/",
            'allowed_types' => "*",
            'overwrite' => TRUE,
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload("importfile")) {
            echo $this->upload->display_errors();
            die();
            $this->data['error'] = array('error' => $this->upload->display_errors());
            die;
        }
        $data = $this->upload->data();
        $url = 'assets/files/import/';

        $inputFileName = './' . $url . $data['file_name'];

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
                'projectno' => $rowData[0][0],
                'idsource' => $rowData[0][1],
                'createddate' => date('Y-m-d'),
                'createdby' => $this->session->userdata['users_id'],
                'idstage' => '1',
                'projectname' => $rowData[0][2],
                'projectdescription' => $rowData[0][3],
                'projectstatus' => $rowData[0][4],
                'constdate' => $rowData[0][5],
                'constenddate' => $rowData[0][6],
                'projectprovince' => $rowData[0][7],
                'projecttown' => $rowData[0][8],
                'projectaddress' => $rowData[0][9],
                'projectcategory' => $rowData[0][10],
                'projectstage' => $rowData[0][11],
                'architechdesigner' => $rowData[0][12],
                'projectpublishdate' => $rowData[0][13],
                'devpropmanager' => $rowData[0][14],
                'engineerconsultant' => $rowData[0][15],
                'maincontractor' => $rowData[0][16],
                'subcontractor' => $rowData[0][17],
                'projectvalue' => $rowData[0][18],
                'addressablevalue' => $rowData[0][19],
                'quality' => $rowData[0][20],
                'assigntype' => $rowData[0][21]
            );
            /*
             * checking blank or not projectno
             */
            if($rowData[0][0]):
                $this->db->select('projectno');
        $this->db->from('tdat_leads');
        $this->db->where('projectno',$rowData[0][0]);
        
        $query=  $this->db->get();
        $count=$query->num_rows();  
        if($count==1):
            //update
            $this->db->where('projectno',$rowData[0][0]);
            $this->db->update('tdat_leads', $post);
            $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Update data is success.</div>');
            else:
            //insert
            $this->db->insert('tdat_leads', $post);
        $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
        endif;
            endif;
//            if ($this->model_leads->insert($post)):
//                $this->session->set_flashdata('err_msg', '<div class="alert alert-success alert-notif" role="alert"><strong>Well Done!</strong> Insert new data is success.</div>');
//            else:
//                $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Insert new data is failed.</div>');
//            endif;
           
        endfor;
        redirect(base_url() . 'index.php/conleads/');
      
    }

}
