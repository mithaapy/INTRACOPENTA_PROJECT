<?php

class Model_roles extends CI_Model {
    /*
     * USER ROLES :
     * 1 = General
     * 2 = Salesman
     * 3 = Head of Branch
     * 4 = HO Sales Manager
     * 5 = HO Director / GM
     * 6 = Marketing
     * 7 = Administrator
     * 8 = Holding
     */

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT * FROM tdat_roles ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT * FROM tdat_roles WHERE id = " . $id . " ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'name' => $post['name'],
            'description' => $post['description'],
			'maxdiscount' => $post['maxdiscount']
        );
        $query = $this->db->insert('tdat_roles', $data);
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
			'maxdiscount' => $post['maxdiscount']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_roles', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_roles")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>