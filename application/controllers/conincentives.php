<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
error_reporting(E_ALL ^ E_NOTICE);

class Conincentives extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->temp->check_login();
		$this->load->model('model_leads');
        $this->load->model('model_users');
        $this->load->model('model_incentives');
    }

    public function index() {
        $setting['set_menu'] = array('menu8' => 'active', 'submenu84' => 'active');
        $setting['inc_file'] = array('page' => 'form_datatables', 'header_title' => 'Sales Incentives');
        $data['incentives'] = $this->model_incentives->viewall();
        $content = $this->load->view('vincentives/vincentives', $data, TRUE);
        $this->temp->load($setting, $content);
    }

}
