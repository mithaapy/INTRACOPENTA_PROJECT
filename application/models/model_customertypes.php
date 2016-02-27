<?php

class Model_customertypes extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT * FROM tdat_customertypes ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT * FROM tdat_customertypes WHERE id = " . $id . " ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'level1' => $post['level1'],
            'level2' => $post['level2'],
            'level3' => $post['level3'],
            'description' => $post['description']
        );
        $query = $this->db->insert('tdat_customertypes', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'level1' => $post['level1'],
            'level2' => $post['level2'],
            'level3' => $post['level3'],
            'description' => $post['description']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_customertypes', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_customertypes")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
