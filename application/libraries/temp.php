<?php

class temp {

    function load($setting = '', $konten = '') {
        $ci = & get_instance();

        $setting['head'] = $setting['inc_file'];
        $setting['footer'] = $setting['inc_file'];

        $temp['head'] = $ci->load->view('temp/head', $setting['head'], TRUE);
        $temp['footer'] = $ci->load->view('temp/footer', $setting['footer'], TRUE);
        $temp['navbar'] = $ci->load->view('temp/navbar', $setting['set_menu'], TRUE);
        $temp['sidebar'] = $ci->load->view('temp/sidebar', $setting['set_menu'], TRUE);
        $temp['content'] = $konten;

        $ci->load->view('temp/container', $temp);
    }

    function check_login() {
        $ci = & get_instance();
        $user_session = $ci->session->userdata['users_username'];
        if (empty($user_session)) :
            $ci->session->sess_destroy();
            redirect(base_url() . 'index.php/conmain/logout');
        endif;
    }

}
