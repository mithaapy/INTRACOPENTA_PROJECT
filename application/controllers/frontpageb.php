<?php

if (!defined('BASEPATH'))
    die();

class Frontpage extends Main_Controller {

    public function index() {
        $name = $this->session->userdata('name');
        if ($name != "") {
            setcookie("logged", "True", time() + 5400, "/", ".eidwhd.com");
            redirect('frontpage/menu');
        } else {
            $this->load->view('include/header');
            //$this->load->view('templates/login');
            $this->load->view('templates/loginedited');
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
            setcookie("logged", "True", time() + 5400, "/", ".eidwhd.com");
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
			  window.location.href = 'admin/0';
			  }
			else
			  {
			  window.location.href = 'admin/0';
			  }</script>";
            } else {
                echo "<script>var r=confirm('Insert Failed!');
			if (r==true)
			  {
			  window.location.href = 'admin/0';
			  }
			else
			  {
			  window.location.href = 'admin/0';
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

        $msie = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') ? true : false;
        $firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
        $safari = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
        $chrome = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;

        // Safari or Chrome. Both use the same engine - webkit - go to iboardnew()
        //firefox same, nothing error    
        if ($safari || $chrome || $firefox) {
            redirect('frontpage/iboardnew');
        }

        // IE or another that both of 3 above
        else {
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
                $data['list'] = $this->unit_model->getAkses($user);
                $data['pict'] = $this->session->userdata('pict');
                $data['admin'] = $this->session->userdata('admin');
                setcookie("user", $user, time() + 5400, "/", ".eidwhd.com");
                setcookie("namenya", $name, time() + 5400, "/", ".eidwhd.com");
                setcookie("fromnya", $from, time() + 5400, "/", ".eidwhd.com");


                setcookie("email", $email, time() + 5400, "/", ".eidwhd.com");
                //$this->load->view('menu', $data);
                $this->load->view('dashboard', $data);
                ini_set('session.cookie_domain', '.eidhwhd.com');
            } else {
                redirect(base_url());
            }
        }
    }

    public function iboardnew() {
        $name = $this->session->userdata('name');
        $from = $this->session->userdata('from');
        $user = $this->session->userdata('userid');
        $emailnya = $this->session->userdata('email');
        if (isset($emailnya)) {
            $email = $emailnya;
        } else {
            $email = '-';
        }

        if ($name != "" & $from == "EID/OIY/A") {
            $data['name'] = $name;
            $data['from'] = $from;
            $this->load->model('unit_model');
            $data['userlengkap'] = $this->unit_model->getUserDetail($user);
            $data['notif'] = $this->unit_model->getNotification();
            $data['countnotif'] = $this->unit_model->getCountNotification();
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
            $this->load->view('iboard', $data);
            ini_set('session.cookie_domain', '.eidhwhd.com');
        } else {
            redirect('frontpage/iboard');
        }
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

    public function editMoM() {
        $this->load->model('unit_model');
        $input = $this->input->post();
        $this->unit_model->editmom($input);
        redirect('');
    }

    public function deletemom($id) {
        $this->load->model('unit_model');
        $this->unit_model->deletemom($id);
        redirect('');
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
            $this->load->view('myprofile', $data);
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

    public function dekrip() {
        $user = "warehouse";
        $this->load->model('unit_model');
        $this->unit_model->dekrip($user);
    }

}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */