<?php

class Model_companies extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT * FROM tdat_companies ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT * FROM tdat_companies WHERE id = " . $id . " ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'code' => $post['code'],
            'name' => $post['name'],
            'description' => $post['description'],
            'logo' => $post['uploadfile']
        );
        $query = $this->db->insert('tdat_companies', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'code' => $post['code'],
            'name' => $post['name'],
            'description' => $post['description'],
            'logo' => $post['uploadfile']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_companies', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_companies")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>