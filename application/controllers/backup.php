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
}

?>
