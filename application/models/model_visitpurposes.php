<?php

class Model_visitpurposes extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT * FROM tdat_visitpurposes ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT * FROM tdat_visitpurposes WHERE id = " . $id . " ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'name' => $post['name'],
            'description' => $post['description']
        );
        $query = $this->db->insert('tdat_visitpurposes', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'name' => $post['name'],
            'description' => $post['description']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_visitpurposes', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_visitpurposes")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
