<?php

class Model_segments extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT * FROM tdat_segments ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT * FROM tdat_segments WHERE id = " . $id . " ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'segment' => $post['segment'],
            'subsegment' => $post['subsegment'],
            'description' => $post['description']
        );
        $query = $this->db->insert('tdat_segments', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'segment' => $post['segment'],
            'subsegment' => $post['subsegment'],
            'description' => $post['description']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_segments', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_segments")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
