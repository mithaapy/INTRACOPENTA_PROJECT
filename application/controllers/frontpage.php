<?php

if (!defined('BASEPATH'))
    die();

class Frontpage extends Main_Controller {

    public function index() {
        $name = $this->session->userdata('name');
        if ($name != "") {
            redirect('frontpage/menu');
        } else {
            $this->load->view('include/header');
            $this->load->view('templates/login');
            $this->load->view('include/footer');
        }
    }

    public function ekunbardoresetpassword() {
        $post = $this->input->post('pass');
        if ($post == "ekunbar") {
            $this->load->view('ekunbardoresetpassword');
        } else {
            echo "<script>var r=confirm('Please Contact Your Administrator!');
			if (r==true)
			  {
			  window.location.href = '/';
			  }
			else
			  {
			  window.location.href = '/';
			  }</script>";
        }
    }

    public function error_login() {
        $this->load->view('include/header');
        $this->load->view('error_login');
        $this->load->view('include/footer');
    }

    public function contactperson() {

        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $superuser = $this->session->userdata('superuser');
        $admin = $this->session->userdata('admin');
        $kode_negara = $this->session->userdata('kode_negara');
        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        if ($name != "" & $from == "EID/OIY/A") {
            $data['name'] = $name;
            $data['user'] = $user;
            $data['from'] = $from;
            $data['superuser'] = $superuser;
            $data['kode_negara'] = $kode_negara;
            $this->load->model('unit_model');
            $data['userlengkap'] = $this->unit_model->getUserDetail($user);
            $data['notif'] = $this->unit_model->getNotification();
            $data['countnotif'] = $this->unit_model->getCountNotification();
            $data['list'] = $this->unit_model->getAkses($user);
            $data['pict'] = $this->session->userdata('pict');
            $data['admin'] = $this->session->userdata('admin');
            $data['contactcard'] = $this->unit_model->getAllContactCard();
            setcookie("user", $user, time() + 5400, "/", ".eidwhd.com");
            setcookie("namenya", $name, time() + 5400, "/", ".eidwhd.com");
            setcookie("fromnya", $from, time() + 5400, "/", ".eidwhd.com");
            setcookie("superuser", $superuser, time() + 5400, "/", ".eidwhd.com");
            setcookie("admin", $admin, time() + 5400, "/", ".eidwhd.com");
            setcookie("kode_negara", $kode_negara, time() + 5400, "/", ".eidwhd.com");

            setcookie("email", $email, time() + 5400, "/", ".eidwhd.com");

            //$this->load->view('menu', $data);
            $this->load->view('contactperson', $data);
            ini_set('session.cookie_domain', '.eidhwhd.com');
        } else {
            redirect('frontpage/iboard');
        }
    }

    public function maintenance() {

        $this->load->view('include/header');
        $this->load->view('maintenance');
        $this->load->view('include/footer');
    }

    public function login() {
        $this->load->model('unit_model');
        $user = $this->input->post('user');
        $pass = $this->input->post('password');
        $this->load->helper('security');
        $str = do_hash($pass); // MD5
        $hasil = $this->unit_model->login($user, $str);
        if ($hasil) {
            $this->unit_model->log_aktifitas($user);
            redirect('frontpage/menu');
        } else {
            redirect('frontpage/error_login');
        }
    }

    public function log_aktifitas() {
        $user = $this->session->userdata('userid');

        $this->load->model('unit_model');
        $this->unit_model->log_aktifitas($user);
    }

    public function updatePassword() {
        $name = $this->session->userdata('name');
        if ($name != "") {
            $new = $this->input->post('new');
            $old = $this->input->post('old');
            $user = $this->session->userdata('userid');
            $this->load->helper('security');
            $strold = do_hash($old); // MD5
            $strnew = do_hash($new); // MD5
            $this->load->model('unit_model');
            $hasil = $this->unit_model->updatePassword($strnew, $strold, $user);
            if ($hasil == "success") {
                echo "<script>var r=confirm('Update Done!');
			if (r==true)
			  {
			  window.location.href = 'menu';
			  }
			else
			  {
			  window.location.href = 'menu';
			  }</script>";
            } else {
                echo "<script>var r=confirm('Update Failed!');
			if (r==true)
			  {
			  window.location.href = 'menu';
			  }
			else
			  {
			  window.location.href = 'menu';
			  }</script>";
            }
            //redirect('frontpage/menu/');
        } else {
            redirect(base_url());
        }
    }

    public function updateAccount() {
        $name = $this->session->userdata('name');
        $user = $this->session->userdata('userid');
        if ($name != "") {
            $post = $this->input->post();
            $this->load->model('unit_model');
            $hasil = $this->unit_model->updateAccount($post, $user);
            if ($hasil == "success") {
                echo "<script>var r=confirm('Update Information Done!');
			if (r==true)
			  {
			  window.location.href = 'myprofile';
			  }
			else
			  {
			  window.location.href = 'myprofile';
			  }</script>";
            } else {
                echo "<script>var r=confirm('Update Failed! - Please Contact Administrator');
			if (r==true)
			  {
			  window.location.href = 'myprofile';
			  }
			else
			  {
			  window.location.href = 'myprofile';
			  }</script>";
            }
            //redirect('frontpage/menu/');
        } else {
            redirect(base_url());
        }
    }

    public function resetPassword() {
        $name = $this->session->userdata('name');
        if ($name != "") {
            $new = $this->input->post('new');
            $user = $this->input->post('user');
            $this->load->helper('security');
            $strnew = do_hash($new); // MD5
            $this->load->model('unit_model');
            $hasil = $this->unit_model->resetPassword($strnew, $user);
            if ($hasil == "success") {
                echo "<script>var r=confirm('Reset Done!');
			if (r==true)
			  {
			  window.location.href = 'menu';
			  }
			else
			  {
			  window.location.href = 'menu';
			  }</script>";
            } else {
                echo "<script>var r=confirm('Reset Failed!');
			if (r==true)
			  {
			  window.location.href = 'menu';
			  }
			else
			  {
			  window.location.href = 'menu';
			  }</script>";
            }
            //redirect('frontpage/menu/');
        } else {
            redirect(base_url());
        }
    }

    public function resetpicture() {
        $name = $this->session->userdata('name');
        if ($name != "") {
            $user = $this->session->userdata('userid');
            $this->load->model('unit_model');
            $hasil = $this->unit_model->resetpicture($user);
            if ($hasil == "success") {
                echo "<script>var r=confirm('Reset Picture Done!');
			if (r==true)
			  {
			  window.location.href = 'menu';
			  }
			else
			  {
			  window.location.href = 'menu';
			  }</script>";
            } else {
                echo "<script>var r=confirm('Reset Picture Failed!');
			if (r==true)
			  {
			  window.location.href = 'menu';
			  }
			else
			  {
			  window.location.href = 'menu';
			  }</script>";
            }
            //redirect('frontpage/menu/');
        } else {
            redirect(base_url());
        }
    }

    public function changepicture() {
        $name = $this->session->userdata('name');
        if ($name != "") {
            $filename = $_FILES['userfile']['name'];
            $file = explode(".", $filename);
            $userfile = $file[0];
            $extensiontype = array_pop(explode(".", $filename));
            $old = $this->input->post('old');
            $user = $this->session->userdata('userid');
            $this->load->helper('security');
            $strold = do_hash($old); // MD5
            $this->load->model('unit_model');
            $hasil = $this->unit_model->changepicture($userfile, $strold, $user);
            if ($hasil == "success" && $extensiontype == "jpg") {

                $config['upload_path'] = './assets/img/cover/';
                $config['allowed_types'] = 'jpg';
                $config['overwrite'] = TRUE;
                $upload_path = 'assets/img/cover/';
                move_uploaded_file($userfile, $upload_path);
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->set_allowed_types('*');
                if (!$this->upload->do_upload('userfile')) {
                    echo "file upload failed! File Type Must be .jpg!";
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $zfile = $data['upload_data']['full_path']; // get file path
                    chmod($zfile, 0644);
                    echo "<script>var r=confirm('Profile Picture Updated!');
			if (r==true)
			  {
			  window.location.href = 'menu';
			  }
			else
			  {
			  window.location.href = 'menu';
			  }</script>";
                }
            } else {
                echo "<script>var r=confirm('Update Failed! Please Check Again If Your Photo or Your Password Have a Wrong Input!');
			if (r==true)
			  {
			  window.location.href = 'menu';
			  }
			else
			  {
			  window.location.href = 'menu';
			  }</script>";
            }
        } else {
            redirect(base_url());
        }
    }

    public function addUser() {
        $name = $this->session->userdata('name');
        if ($name != "") {
            $post = $this->input->post();
            $this->load->model('unit_model');
            $hasil = $this->unit_model->addUser($post);
            if ($hasil == "success") {
                echo "<script>var r=confirm('Insert Done!');
			if (r==true)
			  {
			  window.location.href = 'adminekunbar/0';
			  }
			else
			  {
			  window.location.href = 'adminekunbar/0';
			  }</script>";
            } else {
                echo "<script>var r=confirm('Insert Failed!');
			if (r==true)
			  {
			  window.location.href = 'adminekunbar/0';
			  }
			else
			  {
			  window.location.href = 'adminekunbar/0';
			  }</script>";
            }
        } else {
            redirect(base_url());
        }
    }

    public function deleteUser() {
        $name = $this->session->userdata('name');
        if ($name != "") {
            $this->load->model('unit_model');
            $user = $this->input->post('user');
            $this->unit_model->deleteUser($user);
            echo "<script>var r=confirm('Delete Done!');
			if (r==true)
			  {
			  window.location.href = 'adminekunbar/0';
			  }
			else
			  {
			  window.location.href = 'adminekunbar/0';
			  }</script>";
        } else {
            redirect(base_url());
        }
    }

    public function setAdmin() {
        $name = $this->session->userdata('name');
        if ($name != "") {
            $this->load->model('unit_model');
            $user = $_GET['admin'];
            $this->unit_model->setAdmin($user);
            echo "<script>var r=confirm('Update Done!');
			if (r==true)
			  {
			  window.location.href = 'admin/0';
			  }
			else
			  {
			  window.location.href = 'admin/0';
			  }</script>";
        } else {
            redirect(base_url());
        }
    }

    public function menu() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $company = $this->session->userdata('companyname');
        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['company'] = $company;
        $this->load->model('unit_model');
        $data['popupshow'] = $this->unit_model->getpopupshow($user);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['notif'] = $this->unit_model->getNotification();
        $data['countnotif'] = $this->unit_model->getCountNotification();
        //$data['idist'] = $this->unit_model->getidistsh();
        $data['yourlogin'] = $this->unit_model->getyourloginact($user);
        $data['mom'] = $this->unit_model->getmom($user);
        $data['widget'] = $this->unit_model->getAksesWidget($user);
        $data['lastlog'] = $this->unit_model->getyourloginlast($user);
        $data['listGroupUser'] = $this->unit_model->getAksesGroupEachUser($user);
        $data['list'] = $this->unit_model->getAkses($user);
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/iboard', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function openbiding() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $this->load->model('unit_model');
        $data['openbiding'] = $this->unit_model->getOpenBiding($company);
        $data['popupshow'] = $this->unit_model->getpopupshow($user);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['notif'] = $this->unit_model->getNotification();
        $data['countnotif'] = $this->unit_model->getCountNotification();
        //$data['idist'] = $this->unit_model->getidistsh();
        $data['yourlogin'] = $this->unit_model->getyourloginact($user);
        $data['mom'] = $this->unit_model->getmom($user);
        $data['widget'] = $this->unit_model->getAksesWidget($user);
        $data['lastlog'] = $this->unit_model->getyourloginlast($user);
        $data['listGroupUser'] = $this->unit_model->getAksesGroupEachUser($user);
        $data['list'] = $this->unit_model->getAkses($user);
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/openbiding', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function pslead() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $this->load->model('unit_model');
        //$data['lead'] = $this->unit_model->getLead($branchid);
        $data['lead'] = $this->unit_model->getLead($user);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/leadsregistration', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function pssuspect() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }


        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $this->load->model('unit_model');
        $data['suspect'] = $this->unit_model->getSuspect($name);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');
        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/suspectregistration', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function psprospect() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }


        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $this->load->model('unit_model');
        $data['prospect'] = $this->unit_model->getProspect($name);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');
        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/prospectregistration', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function leadsregister($leadid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $companyid = $this->session->userdata('companyid');
        $company = $this->session->userdata('companyname');
        $data['companyid'] = $companyid;
        $data['company'] = $company;



        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['branchid'] = $branchid;
        $data['leadid'] = $leadid;
        $this->load->model('unit_model');
        $data['monthlist'] = $this->unit_model->getMonth();
        $data['sourcelist'] = $this->unit_model->getSourceList();
        $data['stagelist'] = $this->unit_model->getStageList();
        $data['leadReg'] = $this->unit_model->getLeadRegistration($leadid);

        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['leadDetail'] = $this->unit_model->getLeadDetail($leadid);
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/leadsregister', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function uploadleadsregisterengine() {
        //$data['idbast'] = $id;
        $this->load->view('kuncoroless/uploadleadsregisterengine');
    }

    public function uploadleadsregister($leadid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $companyid = $this->session->userdata('companyid');
        $company = $this->session->userdata('companyname');
        $data['companyid'] = $companyid;
        $data['company'] = $company;



        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['branchid'] = $branchid;
        $data['leadid'] = $leadid;
        $this->load->model('unit_model');
        $data['sourcelist'] = $this->unit_model->getSourceList();
        $data['stagelist'] = $this->unit_model->getStageList();
        $data['leadReg'] = $this->unit_model->getLeadRegistration($leadid);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/uploadleadsregister', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function updateLead($leadid) {
        $user = $this->session->userdata('userid');
        $name = $this->session->userdata('name');
        $post = $this->input->post();
        $this->load->model('unit_model');
        $hasil = $this->unit_model->updateLead($leadid, $user, $post);

        $data['maxid'] = $this->unit_model->getupdateLeadDetail();
        $datamaxid = $data['maxid'][0]['LEADSID'];

        if ($hasil == "success" && $leadid != 0) {
            echo "<script>var r=confirm('Update Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../leadsregister/" . $leadid . "';
        }
      else
        {
        window.location.href = '../leadsregister/" . $leadid . "';
        }</script>";
        } elseif ($hasil == "success" && $leadid == 0) {
            echo "<script>var r=confirm('Insert New Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../leadsregister/" . $datamaxid . "';
        }
      else
        {
        window.location.href = '../leadsregister/" . $datamaxid . "';
        }</script>";
        } else {
            echo "<script>var r=confirm('Insert Failed!');
      if (r==true)
        {
        window.location.href = '../leadsregister/" . $leadid . "';
        }
      else
        {
        window.location.href = '../leadsregister/" . $leadid . "';
        }</script>";
        }
    }

    public function deleteLead($leadid) {
        $name = $this->session->userdata('name');
        $post = $this->input->post();
        $this->load->model('unit_model');
        $hasil = $this->unit_model->deleteLead($leadid);
        if ($hasil == "success") {
            echo "<script>var r=confirm('Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../pslead';
        }
      else
        {
        window.location.href = '../pslead';
        }</script>";
        } else {
            echo "<script>var r=confirm('Data Failed! Please contact your Administrator');
      if (r==true)
        {
        window.location.href = '../pslead';
        }
      else
        {
        window.location.href = '../pslead';
        }</script>";
        }
    }

    public function updateLeadDetail($leaddetailid) {
        $name = $this->session->userdata('name');
        $post = $this->input->post();
        $LEADSIS = $this->input->post('input-lead-id');
        $this->load->model('unit_model');
        $hasil = $this->unit_model->updateLeadDetail($leaddetailid, $post, $name);
        if ($hasil == "successadd") {
            echo "<script>var r=confirm('Insert Done!');
      if (r==true)
        {
        window.location.href = '../leadsdetail/" . $LEADSIS . "';
        }
      else
        {
        window.location.href = '../leadsdetail/" . $LEADSIS . "';
        }</script>";
        } elseif ($hasil == "successedit") {
            echo "<script>var r=confirm('Update Done!');
      if (r==true)
        {
        window.location.href = '../leadsdetailregister/" . $LEADSIS . "/" . $leaddetailid . "';
        }
      else
        {
        window.location.href = '../leadsdetailregister/" . $LEADSIS . "/" . $leaddetailid . "';
        }</script>";
        } elseif ($hasil == "successaddsuspect") {
            echo "<script>var r=confirm('Update Done!');
      if (r==true)
        {
        window.location.href = '../pssuspect';
        }
      else
        {
        window.location.href = '../leadsdetailregister/" . $LEADSIS . "/" . $leaddetailid . "';
        }</script>";
        } else {
            echo "<script>var r=confirm('Insert Failed!');
      if (r==true)
        {
        window.location.href = '../leadsdetailregister/" . $LEADSIS . "/" . $leaddetailid . "';
        }
      else
        {
        window.location.href = '../leadsdetailregister/" . $LEADSIS . "/" . $leaddetailid . "';
        }</script>";
        }
    }

    public function deleteLeadDetail($leaddetailid) {
        $name = $this->session->userdata('name');
        $LEADSIS = $this->input->post('input-lead-id');
        $post = $this->input->post();
        $this->load->model('unit_model');
        $hasil = $this->unit_model->deleteLeadDetail($leaddetailid);
        if ($hasil == "success") {
            echo "<script>var r=confirm('Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../leadsdetail/" . $LEADSIS . "';
        }
      else
        {
        window.location.href = '../leadsdetail/" . $LEADSIS . "';
        }</script>";
        } else {
            echo "<script>var r=confirm('Data Failed! Please contact your Administrator');
      if (r==true)
        {
        window.location.href = '../leadsdetail/" . $LEADSIS . "';
        }
      else
        {
        window.location.href = '../leadsdetail/" . $LEADSIS . "';
        }</script>";
        }
    }

    public function suspectregister($suspectid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['suspectid'] = $suspectid;
        $data['branchid'] = $branchid;
        $this->load->model('unit_model');
        $data['customer'] = $this->unit_model->getCustomer();
        $data['lead'] = $this->unit_model->getLead($branchid);
        $data['suspectDetail'] = $this->unit_model->getSuspectDetail($suspectid);
        $data['SalesMaster'] = $this->unit_model->getSalesMaster();
        $data['StageMaster'] = $this->unit_model->getStageMaster();
        $data['branchname'] = $this->unit_model->getBranch($branchid);
        $data['suspectReg'] = $this->unit_model->getSuspectRegistration($suspectid);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/suspectregister', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function updateSuspect($suspectid) {
        $name = $this->session->userdata('name');
        $user = $this->session->userdata('user');
        $post = $this->input->post();
        $this->load->model('unit_model');
        $hasil = $this->unit_model->updateSuspect($suspectid, $name, $post);
        if ($hasil == "success" && $suspectid != 0) {
            echo "<script>var r=confirm('Update Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../suspectregister/" . $suspectid . "';
        }
      else
        {
        window.location.href = '../suspectregister/" . $suspectid . "';
        }</script>";
        } elseif ($hasil == "success" && $suspectid == 0) {
            echo "<script>var r=confirm('Upload New Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../pssuspect';
        }
      else
        {
        window.location.href = '../pssuspect';
        }</script>";
        } elseif ($hasil == "successaddprospect") {
            echo "<script>var r=confirm('Upload New Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../psprospect';
        }
      else
        {
        window.location.href = '../psprospect';
        }</script>";
        } else {
            echo "<script>var r=confirm('Data Failed! Please contact your Administrator');
      if (r==true)
        {
        window.location.href = '../suspectregister/" . $suspectid . "';
        }
      else
        {
        window.location.href = '../suspectregister/" . $suspectid . "';
        }</script>";
        }
    }

    public function deleteSuspect($suspectid) {
        $name = $this->session->userdata('name');
        $post = $this->input->post();
        $this->load->model('unit_model');
        $hasil = $this->unit_model->deleteSuspect($suspectid);
        if ($hasil == "success") {
            echo "<script>var r=confirm('Delete Done!');
      if (r==true)
        {
        window.location.href = '../pssuspect';
        }
      else
        {
        window.location.href = '../pssuspect';
        }</script>";
        } else {
            echo "<script>var r=confirm('Delete Failed!');
      if (r==true)
        {
        window.location.href = '../pssuspect';
        }
      else
        {
        window.location.href = '../pssuspect';
        }</script>";
        }
    }

    public function prospectregister($mainid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['mainid'] = $mainid;
        $this->load->model('unit_model');
        $data['suspect'] = $this->unit_model->getSuspect($branchid);
        $data['prospectReg'] = $this->unit_model->getProspectRegistration($mainid);
        $data['prospectRegNotes'] = $this->unit_model->getProspectRegistrationNotes($mainid);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/prospectregister', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function updateProspect($prospectid) {
        $name = $this->session->userdata('name');
        $post = $this->input->post();
        $this->load->model('unit_model');
        $hasil = $this->unit_model->updateProspect($prospectid, $post);
        if ($hasil == "success" && $prospectid != 0) {
            echo "<script>var r=confirm('Update Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../prospectregister/" . $prospectid . "';
        }
      else
        {
        window.location.href = '../prospectregister/" . $prospectid . "';
        }</script>";
        } elseif ($hasil == "success" && $suspectid == 0) {
            echo "<script>var r=confirm('Insert New Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../psprospect';
        }
      else
        {
        window.location.href = '../psprospect';
        }</script>";
        } else {
            echo "<script>var r=confirm('Data Failed! Please contact your Administrator');
      if (r==true)
        {
        window.location.href = '../prospectregister/" . $prospectid . "';
        }
      else
        {
        window.location.href = '../prospectregister/" . $prospectid . "';
        }</script>";
        }
    }

    public function updateQuotation($prospectid) {
        $name = $this->session->userdata('name');
        $post = $this->input->post();
        $this->load->model('unit_model');
        $hasil = $this->unit_model->updateQuotation($prospectid, $post);

        if ($_POST) {
            $accessoriesid = $this->input->post('accessoriesid');
            $data = array(
                'ACCESORIESID' => $accessoriesid,
            );
            $this->unit_model->insertAccesoriesChoosed($data, $prospectid);
        }
        if ($hasil == "success" && $prospectid != 0) {
            echo "<script>var r=confirm('Update Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../editquotation/" . $prospectid . "';
        }
      else
        {
        window.location.href = '../editquotation/" . $prospectid . "';
        }</script>";
        } elseif ($hasil == "success" && $suspectid == 0) {
            echo "<script>var r=confirm('Insert New Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../QuotationCreation';
        }
      else
        {
        window.location.href = '../QuotationCreation';
        }</script>";
        } else {
            echo "<script>var r=confirm('Data Failed! Please contact your Administrator');
      if (r==true)
        {
        window.location.href = '../editquotation/" . $prospectid . "';
        }
      else
        {
        window.location.href = '../editquotation/" . $prospectid . "';
        }</script>";
        }
    }

    public function leadsdetail($leadid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['leadid'] = $leadid;
        $this->load->model('unit_model');
        $data['leadDetail'] = $this->unit_model->getLeadDetail($leadid);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/leadsdetail', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function leadsdetailregister($mainid, $leaddetailid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['mainid'] = $mainid;
        $data['leaddetailid'] = $leaddetailid;
        $this->load->model('unit_model');
        $data['monthlist'] = $this->unit_model->getMonth();
        $data['customerlist'] = $this->unit_model->getCustomer();
        $data['saleslist'] = $this->unit_model->getSalesMaster();
        $data['companylist'] = $this->unit_model->getCompany();
        $data['branchdetail'] = $this->unit_model->getBranch($branchid);
        $data['leadReg'] = $this->unit_model->getLeadDetailRegistration($leaddetailid);
        $data['leadRegNotes'] = $this->unit_model->getLeadDetailRegistrationNotes($mainid);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/leadsdetailregister', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function suspectdetail($leadid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');

        $company = $this->session->userdata('companyname');
        $data['company'] = $company;

        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['leadid'] = $leadid;
        $this->load->model('unit_model');
        $data['leadDetail'] = $this->unit_model->getSuspectDetail($leadid);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/suspectdetail', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function suspectdetailregister($mainid, $detailid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $company = $this->session->userdata('companyname');
        $branchid = $this->session->userdata('branchid');
        $data['branchid'] = $this->session->userdata('branchid');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['mainid'] = $mainid;
        $data['detailid'] = $detailid;
        $this->load->model('unit_model');
        $data['customer'] = $this->unit_model->getCustomer();
        $data['lead'] = $this->unit_model->getLead($branchid);
        $data['SalesMaster'] = $this->unit_model->getSalesMaster();
        $data['StageMaster'] = $this->unit_model->getStageMaster();
        $data['Segmentlist'] = $this->unit_model->getSegmentMaster();
        $data['branchname'] = $this->unit_model->getBranch($branchid);
        $data['suspectReg'] = $this->unit_model->getSuspectRegistration($mainid);
        $data['suspectdetailreg'] = $this->unit_model->getSuspectDetailRegistration($detailid);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['productlist'] = $this->unit_model->getProduct();
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/suspectdetailregister', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function updateSuspectDetail($mainid, $detailid) {
        $name = $this->session->userdata('name');
        $post = $this->input->post();
        $this->load->model('unit_model');

        //$hasil = $this->unit_model->getLastProspectRegistration();  //echo $hasil;
        $hasil = $this->unit_model->updateSuspectDetail($detailid, $post);

        if ($hasil == "success" && $detailid != 0) {
            echo "<script>var r=confirm('Update Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../../suspectdetailregister/" . $mainid . "/" . $detailid . "';
        }
      else
        {
        window.location.href = '../../suspectdetailregister/" . $mainid . "/" . $detailid . "';
        }</script>";
        } elseif ($hasil == "successaddprospect") {
            echo "<script>var r=confirm('Insert New Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../../QuotationCreation';
        }
      else
        {
        window.location.href = '../../QuotationCreation';
        }</script>";
        } elseif ($hasil == "success" && $detailid == 0) {
            echo "<script>var r=confirm('Insert New Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../../suspectdetail/" . $mainid . "';
        }
      else
        {
        window.location.href = '../../suspectdetail/" . $mainid . "';
        }</script>";
        } else {
            echo "<script>var r=confirm('Insert Failed!');
      if (r==true)
        {
        window.location.href = '../../suspectdetailregister/" . $mainid . "/" . $detailid . "';
        }
      else
        {
        window.location.href = '../../suspectdetailregister/" . $mainid . "/" . $detailid . "';
        }</script>";
        }
    }

    public function deleteSuspectDetail($detailid) {
        $name = $this->session->userdata('name');
        $LEADSIS = $this->input->post('input-lead-id');
        $post = $this->input->post();
        $this->load->model('unit_model');
        $hasil = $this->unit_model->deleteSuspectDetail($detailid);
        if ($hasil == "success") {
            echo "<script>var r=confirm('Data Has Been Saved!');
      if (r==true)
        {
        window.location.href = '../leadsdetail/" . $LEADSIS . "';
        }
      else
        {
        window.location.href = '../leadsdetail/" . $LEADSIS . "';
        }</script>";
        } else {
            echo "<script>var r=confirm('Data Failed! Please contact your Administrator');
      if (r==true)
        {
        window.location.href = '../leadsdetail/" . $LEADSIS . "';
        }
      else
        {
        window.location.href = '../leadsdetail/" . $LEADSIS . "';
        }</script>";
        }
    }

    public function prospectdetail($leadid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $this->load->model('unit_model');
        $data['leadDetail'] = $this->unit_model->getProspectDetail($leadid);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/prospectdetail', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function prospectdetailregister($mainid, $leaddetailid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['mainid'] = $mainid;
        $data['leaddetailid'] = $leaddetailid;
        $this->load->model('unit_model');
        $data['leadReg'] = $this->unit_model->getLeadDetailRegistration($leaddetailid);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/prospectdetailregister', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function editquotation($mainid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['mainid'] = $mainid;
        $this->load->model('unit_model');
        $data['productlist'] = $this->unit_model->getProduct();
        $data['accessorieslist'] = $this->unit_model->getAccessories();
        $data['accessorieschoosed'] = $this->unit_model->getAccessoriesChoosed($mainid);
        $data['suspect'] = $this->unit_model->getSuspect($branchid);
        $data['prospectReg'] = $this->unit_model->getProspectRegistration($mainid);
        $data['prospectRegNotes'] = $this->unit_model->getProspectRegistrationNotes($mainid);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/editquotation', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function editDiscount($mainid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['mainid'] = $mainid;
        $this->load->model('unit_model');
        $data['productlist'] = $this->unit_model->getProduct();
        $data['totalchoosed'] = $this->unit_model->getTotalChoosed($mainid);
        $data['accessorieslist'] = $this->unit_model->getAccessories();
        $data['accessorieschoosed'] = $this->unit_model->getAccessoriesChoosed($mainid);
        $data['suspect'] = $this->unit_model->getSuspect($branchid);
        $data['prospectReg'] = $this->unit_model->getProspectRegistration($mainid);
        $data['prospectRegNotes'] = $this->unit_model->getProspectRegistrationNotes($mainid);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/editDiscount', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function exportExcel($prospectid) {
        //$data['header'] = $this->unit_model->getMaterialExportHeader($prospectid);
        //$data['ekunbarEABgrouppst'] = $this->unit_model->getEkunbarEABGroupPlanspecTools($prospectid);
        //$data['ekunbarEABdatapst'] = $this->unit_model->getEkunbarEABDataPlanspecTools($prospectid);
        $this->load->model('unit_model');
        $data['quotation'] = $this->unit_model->getProspectDetail($prospectid);

        $this->load->view('kuncoroless/ekunbarlockscreen', $data);
        $this->load->view('kuncoroless/export_kuncoro', $data);
    }

    public function exportPDF($prospectid) {
        //$data['header'] = $this->unit_model->getMaterialExportHeader($prospectid);
        //$data['ekunbarEABgrouppst'] = $this->unit_model->getEkunbarEABGroupPlanspecTools($prospectid);
        //$data['ekunbarEABdatapst'] = $this->unit_model->getEkunbarEABDataPlanspecTools($prospectid);
        $this->load->model('unit_model');
        //$data['quotation'] = $this->unit_model->getProspectDetail($prospectid);
        $data['quotation'] = $this->unit_model->getProspectRegistrationDetail($prospectid);
        //$data['accesorieschoosed'] = $this->unit_model->getAccessoriesChoosed($prospectid);
        //$this->load->view('kuncoroless/ekunbarlockscreen', $data);
        $this->load->view('kuncoroless/exportpdf_kuncoro', $data);
    }

    public function source() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['saveopen'] = 1;
        $this->load->model('unit_model');
        $data['popupshow'] = $this->unit_model->getpopupshow($user);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['notif'] = $this->unit_model->getNotification();
        $data['countnotif'] = $this->unit_model->getCountNotification();
        //$data['idist'] = $this->unit_model->getidistsh();
        $data['yourlogin'] = $this->unit_model->getyourloginact($user);
        $data['widget'] = $this->unit_model->getAksesWidget($user);
        $data['lastlog'] = $this->unit_model->getyourloginlast($user);
        $data['listGroupUser'] = $this->unit_model->getAksesGroupEachUser($user);
        $data['list'] = $this->unit_model->getAkses($user);
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');
        /*
          setcookie("user",$user,time()+5400,"/",".eidwhd.com");
          setcookie("namenya",$name,time()+5400,"/",".eidwhd.com");
          setcookie("fromnya",$from,time()+5400,"/",".eidwhd.com");
          setcookie("adminnya",$adminnya,time()+5400,"/",".eidwhd.com");

          setcookie("email",$email,time()+5400,"/",".eidwhd.com");

          ini_set('session.cookie_domain','.eidhwhd.com');
         */
        //$this->load->view('menu', $data);
        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/source', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function QuotationCreation() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $company = $this->session->userdata('companyname');


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['company'] = $company;
        $this->load->model('unit_model');
        $data['prospect'] = $this->unit_model->getProspect($name);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['notif'] = $this->unit_model->getNotification();
        $data['countnotif'] = $this->unit_model->getCountNotification();
        //$data['idist'] = $this->unit_model->getidistsh();
        $data['yourlogin'] = $this->unit_model->getyourloginact($user);
        $data['mom'] = $this->unit_model->getmom($user);
        $data['widget'] = $this->unit_model->getAksesWidget($user);
        $data['lastlog'] = $this->unit_model->getyourloginlast($user);
        $data['listGroupUser'] = $this->unit_model->getAksesGroupEachUser($user);
        $data['list'] = $this->unit_model->getAkses($user);
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/QuotationCreation', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function DiscountApproval() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $company = $this->session->userdata('companyname');


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['company'] = $company;
        $this->load->model('unit_model');
        $data['prospect'] = $this->unit_model->getProspect($name);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['notif'] = $this->unit_model->getNotification();
        $data['countnotif'] = $this->unit_model->getCountNotification();
        //$data['idist'] = $this->unit_model->getidistsh();
        $data['yourlogin'] = $this->unit_model->getyourloginact($user);
        $data['mom'] = $this->unit_model->getmom($user);
        $data['widget'] = $this->unit_model->getAksesWidget($user);
        $data['lastlog'] = $this->unit_model->getyourloginlast($user);
        $data['listGroupUser'] = $this->unit_model->getAksesGroupEachUser($user);
        $data['list'] = $this->unit_model->getAkses($user);
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/DiscountApproval', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function iboard() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }
        if ($name != "") {
            $data['name'] = $name;
            $data['from'] = $from;
            $this->load->model('unit_model');
            $data['userlengkap'] = $this->unit_model->getUserDetail($user);
            $data['idist'] = $this->unit_model->getidist();
            $data['notif'] = $this->unit_model->getNotification();
            $data['countnotif'] = $this->unit_model->getCountNotification();
            $data['mom'] = $this->unit_model->getmom($name);
            $data['list'] = $this->unit_model->getAkses($user);
            $data['pict'] = $this->session->userdata('pict');
            $data['admin'] = $this->session->userdata('admin');
            setcookie("user", $user, time() + 5400, "/", ".eidwhd.com");
            setcookie("namenya", $name, time() + 5400, "/", ".eidwhd.com");
            setcookie("fromnya", $from, time() + 5400, "/", ".eidwhd.com");


            setcookie("email", $email, time() + 5400, "/", ".eidwhd.com");

            //$this->load->view('menu', $data);
            $this->load->view('iboardwelcome', $data);
            ini_set('session.cookie_domain', '.eidhwhd.com');
        } else {
            redirect(base_url());
        }
    }

    public function iboardfortutorial() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        if ($name != "") {
            $data['name'] = $name;
            $data['from'] = $from;
            $this->load->model('unit_model');
            $data['userlengkap'] = $this->unit_model->getUserDetail($user);
            $data['idist'] = $this->unit_model->getidist();
            $data['mom'] = $this->unit_model->getmom($name);
            $data['list'] = $this->unit_model->getAkses($user);
            $data['pict'] = $this->session->userdata('pict');
            $data['admin'] = $this->session->userdata('admin');
            setcookie("user", $user, time() + 5400, "/", ".eidwhd.com");
            setcookie("namenya", $name, time() + 5400, "/", ".eidwhd.com");
            setcookie("fromnya", $from, time() + 5400, "/", ".eidwhd.com");
            setcookie("email", $email, time() + 5400, "/", ".eidwhd.com");

            //$this->load->view('menu', $data);
            $this->load->view('iboardfortutorial', $data);
            ini_set('session.cookie_domain', '.eidhwhd.com');
        } else {
            redirect(base_url());
        }
    }

    public function myprofile() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('user');
        $user = $this->session->userdata('userid');

        if ($name != "") {
            $data['name'] = $name;
            $data['from'] = $from;
            $data['user'] = $user;

            $this->load->model('unit_model');
            $data['list'] = $this->unit_model->getAkses($user);
            $data['pict'] = $this->session->userdata('pict');
            $data['userlengkap'] = $this->unit_model->getUserDetail($user);
            $data['userSemualengkap'] = $this->unit_model->getAllUserDetail();
            $data['admin'] = $this->session->userdata('admin');
            //$this->load->view('menu', $data);
            $this->load->view('profileme', $data);
        } else {
            redirect(base_url());
        }
    }

    public function notification($id) {
        $data['notifdetail'] = $this->mwarehouse->getNotifDetail($id);
        $this->load->view('include/header');
        $this->load->view('notification');
        $this->load->view('include/footer');
    }

    public function testsession() {
        ini_set('session.cookie_domain', '.eidwhd.com');

        echo ini_get('session.cookie_domain');

        session_start();
        $_SESSION['variable'] = 1;
    }

    public function logout() {
        setcookie("logged", "True", time() - 5400, "/", ".eidwhd.com");
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function tempAdmin() {
        $name = $this->session->userdata('name');
        if ($name != "") {
            $user = $_GET['user'];
            redirect('frontpage/admin/' . $user);
        } else {
            redirect(base_url());
        }
    }

    public function tempAdminEkunbar() {
        $name = $this->session->userdata('name');
        if ($name != "") {
            $user = $_GET['user'];
            redirect('frontpage/adminekunbar/' . $user);
        } else {
            redirect(base_url());
        }
    }

    public function tempGroup() {
        $name = $this->session->userdata('name');
        if ($name != "") {
            $from = $_GET['from'];
            redirect('frontpage/group/' . $from);
        } else {
            redirect(base_url());
        }
    }

    public function group($from) {
        $name = $this->session->userdata('name');
        $data['from'] = $from;
        $admin = $this->session->userdata('admin');
        if ($name != "" && $admin == "1") {
            $this->load->model('unit_model');
            if ($from != "0" && !empty($_GET)) {
                $namefrom = $this->unit_model->getGroupFrom($from);
                foreach ($namefrom AS $key) {
                    if ($from != '') {
                        $user = $key['user'];
                        $aplikasi = $_GET['aplikasi'];
                        $this->unit_model->inputAkses($user, $aplikasi);
                    }
                    echo "error";
                }
                //echo "<script>alert('Update Access Done!');</script>";
            }
            $data['list'] = $this->unit_model->getAksesGroup($from);
            $data['user'] = $this->unit_model->getUser();
            $data['from'] = $this->unit_model->getGroup();
            $data['aplikasi'] = $this->unit_model->getAplikasi();
            $this->load->view('admin', $data);
        } else {
            redirect(base_url());
        }
    }

    public function admin($user) {
        $name = $this->session->userdata('name');
        $data['username'] = $user;
        $admin = $this->session->userdata('admin');
        if ($name != "" && $admin == "1") {
            $this->load->model('unit_model');
            if ($user != "0" && !empty($_GET)) {
                $aplikasi = $_GET['aplikasi'];
                $this->unit_model->inputAkses($user, $aplikasi);
                echo "<script>alert('Update Access Done!');</script>";
            }
            $data['list'] = $this->unit_model->getAkses($user);
            $data['user'] = $this->unit_model->getUser();
            $data['from'] = $this->unit_model->getGroup();
            $data['aplikasi'] = $this->unit_model->getAplikasi();
            $this->load->view('admin', $data);
        } else {
            redirect(base_url());
        }
    }

    public function adminekunbar($userfor) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');

        $data['name'] = $name;
        $data['from'] = $from;
        $this->load->model('unit_model');
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['notif'] = $this->unit_model->getNotification();
        $data['countnotif'] = $this->unit_model->getCountNotification();
        //$data['idist'] = $this->unit_model->getidist();
        $data['mom'] = $this->unit_model->getmom($name);
        $data['list'] = $this->unit_model->getAkses($user);
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');

        $data['username'] = $userfor;
        $admin = $this->session->userdata('admin');
        if ($name != "" && $admin == "1") {
            $this->load->model('unit_model');
            if ($user != "0" && !empty($_GET)) {
                $aplikasi = $_GET['aplikasi'];
                $this->unit_model->inputAkses($userfor, $aplikasi);
                echo "<script>alert('Update Access Done!');</script>";
            }
            $data['list'] = $this->unit_model->getAkses($userfor);
            $data['user'] = $this->unit_model->getUser();
            $data['from'] = $this->unit_model->getGroup();
            $data['aplikasi'] = $this->unit_model->getAplikasi();
            $this->load->view('adminekunbar', $data);
            //$this->load->view('admin', $data);
        } else {
            redirect(base_url());
        }
    }

    public function widget($userfor) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');

        $data['name'] = $name;
        $data['from'] = $from;
        $this->load->model('unit_model');
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['listwidget'] = $this->unit_model->getAksesWidget($userfor);
        $data['widget'] = $this->unit_model->getWidget();

        $data['username'] = $userfor;
        $admin = $this->session->userdata('admin');
        if ($name != "") {
            $this->load->model('unit_model');
            if ($user != "0" && !empty($_GET)) {
                $widget = $_GET['widget'];
                $this->unit_model->inputAksesWidget($userfor, $widget);
                echo "<script>alert('Update Access Done!');</script>";
            }
            $this->load->view('ekunwidget', $data);
        } else {
            redirect(base_url());
        }
    }

    public function dekrip() {
        $user = "warehouse";
        $this->load->model('unit_model');
        $this->unit_model->dekrip($user);
    }

    public function company() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $this->load->model('unit_model');
        $data['company'] = $this->unit_model->getCompany();
        $data['popupshow'] = $this->unit_model->getpopupshow($user);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['notif'] = $this->unit_model->getNotification();
        $data['countnotif'] = $this->unit_model->getCountNotification();
        //$data['idist'] = $this->unit_model->getidistsh();
        $data['yourlogin'] = $this->unit_model->getyourloginact($user);
        $data['mom'] = $this->unit_model->getmom($user);
        $data['widget'] = $this->unit_model->getAksesWidget($user);
        $data['lastlog'] = $this->unit_model->getyourloginlast($user);
        $data['listGroupUser'] = $this->unit_model->getAksesGroupEachUser($user);
        $data['list'] = $this->unit_model->getAkses($user);
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/company', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function user() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $company = $this->session->userdata('companyname');
        $data['company'] = $company;


        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $this->load->model('unit_model');
        $data['userinfo'] = $this->unit_model->getUserInformation();
        $data['popupshow'] = $this->unit_model->getpopupshow($user);
        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['notif'] = $this->unit_model->getNotification();
        $data['countnotif'] = $this->unit_model->getCountNotification();
        //$data['idist'] = $this->unit_model->getidistsh();
        $data['yourlogin'] = $this->unit_model->getyourloginact($user);
        $data['mom'] = $this->unit_model->getmom($user);
        $data['widget'] = $this->unit_model->getAksesWidget($user);
        $data['lastlog'] = $this->unit_model->getyourloginlast($user);
        $data['listGroupUser'] = $this->unit_model->getAksesGroupEachUser($user);
        $data['list'] = $this->unit_model->getAkses($user);
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/user', $data);
        $this->load->view('kuncoroless/footer', $data);
    }

    public function notes($leadid) {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $branchid = $this->session->userdata('branchid');
        $companyid = $this->session->userdata('companyid');
        $company = $this->session->userdata('companyname');
        $data['companyid'] = $companyid;
        $data['company'] = $company;



        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        $data['name'] = $name;
        $data['from'] = $from;
        $data['user'] = $user;
        $data['branchid'] = $branchid;
        $data['leadid'] = $leadid;
        $this->load->model('unit_model');
        $data['monthlist'] = $this->unit_model->getMonth();
        $data['sourcelist'] = $this->unit_model->getSourceList();
        $data['stagelist'] = $this->unit_model->getStageList();
        $data['leadReg'] = $this->unit_model->getLeadRegistration($leadid);

        $data['userlengkap'] = $this->unit_model->getUserDetail($user);
        $data['countnotif'] = $this->unit_model->getCountNotification();
        $data['leadDetail'] = $this->unit_model->getLeadDetail($leadid);
        $data['pict'] = $this->session->userdata('pict');
        $data['admin'] = $this->session->userdata('admin');
        $adminnya = $this->session->userdata('admin');

        $this->load->view('kuncoroless/header', $data);
        $this->load->view('kuncoro/notes', $data);
        $this->load->view('kuncoroless/footer', $data);
    }
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */