<?php

class Model_competitors extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT * FROM tdat_competitors ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT * FROM tdat_competitors WHERE id = " . $id . " ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'name' => $post['name'],
            'description' => $post['description'],
            'strength' => $post['strength']
        );
        $query = $this->db->insert('tdat_competitors', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'name' => $post['name'],
            'description' => $post['description'],
            'strength' => $post['strength']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_competitors', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_competitors")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
