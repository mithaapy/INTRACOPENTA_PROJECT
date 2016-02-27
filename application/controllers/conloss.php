<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conloss extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
		$this->load->model('model_prospects');
		$this->load->model('model_stages');
    }

    public function index() {
        $setting['set_menu'] = array('menu3' => 'active', 'submenu38' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Loss');

        $data['prospects'] = $this->model_prospects->viewloss();
        $content = $this->load->view('vloss/vloss', $data, TRUE);
        $this->temp->load($setting, $content);
    }
}