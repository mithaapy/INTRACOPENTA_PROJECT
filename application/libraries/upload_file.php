<?php

class Upload_file {
    function upload_img($urllogo, $namalogo, $postname) {
        $ci = &get_instance();
        $config['upload_path'] = $urllogo;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['overwrite'] = 'TRUE';
        $config['remove_spaces'] = 'TRUE';
        $config['max_size'] = '5000000'; 
        $config['file_name'] = $namalogo;

        $ci->load->library('upload', $config);

        if ($ci->upload->do_upload($postname)):
            $data = $ci->upload->data();
            $result = array('err_no' => "0",
                'filename' => $data['file_name'],
                'filepath' => $data['file_path']);
        else:
            $result = array('err_no' => "206",
                'err_msg' => $ci->upload->display_errors('', ''));
        endif;

        return $result;
    }
    
    function upload_xls($url, $nama, $postname) {
        $ci = &get_instance();
        $config['upload_path'] = $url;
        $config['allowed_types'] = 'xls|xlsx';
        $config['overwrite'] = 'TRUE';
        $config['max_size'] = '5000000'; 
        $config['file_name'] = $nama;

        $ci->load->library('upload', $config);

        if ($ci->upload->do_upload($postname)):
            $data = $ci->upload->data();
            $result = array('file_name' => $data['file_name']);
            return $result;
        else:
            return FALSE;
        endif;
    }

    function upload_newsfeed() {
        $ci = &get_instance();
        $config['upload_path'] = "./uploads/newsfeed";
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = "TRUE";
        $config['file_name'] = date('YmdHis');

        $ci->load->library('upload', $config);

        if ($ci->upload->do_upload("file")):

            $data = $ci->upload->data();

            $result = array('err_no' => "0",
                'filename' => $data['file_name']);
        else:

            $result = array('err_no' => "206",
                'err_msg' => $ci->upload->display_errors('', ''));

        endif;

        return $result;
    }

    function upload_marketplace() {
        $ci = &get_instance();
        $config['upload_path'] = "./uploads/marketplace";
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|tiff';
        $config['max_size'] = '2048'; #1MB = 1024
        $config['encrypt_name'] = "TRUE";
        $config['file_name'] = date('YmdHis');

        $ci->load->library('upload', $config);

        if ($ci->upload->do_upload("photo")):

            $data = $ci->upload->data();
            $result = array('err_no' => "0",
                'filename' => $data['file_name']);
        else:

            $result = array('err_no' => "206",
                'err_msg' => $ci->upload->display_errors('', ''));

        endif;

        return $result;
    }

    function upload_article() {
        $ci = &get_instance();
        $config['upload_path'] = "./uploads/article";
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|tiff';
        $config['max_size'] = '2048'; #1MB = 1024
        $config['encrypt_name'] = "TRUE";
        $config['file_name'] = date('YmdHis');

        $ci->load->library('upload', $config);

        if ($ci->upload->do_upload("file")):

            $data = $ci->upload->data();

            $result = array('err_no' => "0",
                'filename' => $data['file_name']);
        else:

            $result = array('err_no' => "206",
                'err_msg' => $ci->upload->display_errors('', ''));

        endif;

        return $result;
    }

    function resize($file_asli, $path, $width, $height) {
        $ci = &get_instance();

        $config['image_library'] = 'gd2';
        $config['create_thumb'] = TRUE;
        $config['thumb_marker'] = "";
        $config['maintain_ratio'] = FALSE;
        $config['width'] = $width;
        $config['height'] = $height;
        $config['quality'] = "80%";
        $config['source_image'] = "$file_asli";
        $config['new_image'] = "$path";

        $ci->image_lib->initialize($config);
        $ci->image_lib->resize();
        $ci->image_lib->clear();
    }

}

?>