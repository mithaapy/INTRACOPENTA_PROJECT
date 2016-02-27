<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conmain extends CI_Controller {

    public function __construct() {
        parent::__construct();

        /* PUT LOAD LIBLARIES / MODELS */
        $this->load->model('model_users');
    }

    public function index() {
        $id_user = $this->session->userdata['users_id'];
        if (empty($id_user)):
            $this->load->view('temp/login');
        else:
            $setting['set_menu'] = array('menu1' => 'active');
            $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Dashboard');

            $data = '';
            $content = $this->load->view('temp/under_construction', $data, TRUE);
            $this->temp->load($setting, $content);
        endif;
    }

    public function login_process() {
        $post = $this->input->post();
        $login = $this->model_users->login($post['username'], $post['password']);

        if (count($login) >= 1):
            $datasession = array(
                'users_id' => $login[0]->users_id,
                'users_nik' => $login[0]->users_nik,
                'users_username' => $login[0]->users_username,
                'users_password' => $login[0]->users_password,
                'users_firstname' => $login[0]->users_firstname,
                'users_lastname' => $login[0]->users_lastname,
                'users_gender' => $login[0]->users_gender,
                'users_birthdate' => $login[0]->users_birthdate,
                'users_phone' => $login[0]->users_phone,
                'users_mobile' => $login[0]->users_mobile,
                'users_email' => $login[0]->users_email,
                'users_pinbbm' => $login[0]->users_pinbbm,
                'users_idcompany' => $login[0]->users_idcompany,
                'users_idbranch' => $login[0]->users_idbranch,
                'users_idrole' => $login[0]->users_idrole,
                'users_idcountry' => $login[0]->users_idcountry,
                'users_idcity' => $login[0]->users_idcity,
                'users_picture' => $login[0]->users_picture,
                'users_active' => $login[0]->users_active,
                'companies_code' => $login[0]->companies_code,
                'companies_name' => $login[0]->companies_name,
                'companies_logo' => $login[0]->companies_logo,
                'branches_code' => $login[0]->branches_code,
                'branches_name' => $login[0]->branches_name,
                'roles_name' => $login[0]->roles_name,
                'roles_description' => $login[0]->roles_description,
                'countries_code' => $login[0]->countries_code,
                'countries_name' => $login[0]->countries_name,
                'cities_code' => $login[0]->cities_code,
                'cities_name' => $login[0]->cities_name
            );
            if ($datasession['users_active'] == 'Nonactive'):
                $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Your account is not active.</div>');
            elseif ($datasession['users_active'] == 'Active'):
                $this->session->unset_userdata();
                $this->session->set_userdata($datasession);
            endif;
        else:
            $this->session->set_flashdata('err_msg', '<div class="alert alert-danger alert-notif" role="alert"><strong>Sorry!</strong> Your username and password is not valid.</div>');
        endif;
        redirect(base_url() . 'index.php/conmain');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url() . 'index.php/conmain');
    }

    public function random_char() {
        $random_word = str_shuffle('123456789abcdefghjklmnopqrstuvwxyz');
        $token = substr($random_word, 0, 10);

        echo $token;
    }

}
