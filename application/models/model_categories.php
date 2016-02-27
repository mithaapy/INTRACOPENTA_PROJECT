<?php

class Model_categories extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT	a.id AS categories_id,
                        a.name AS categories_name,
                        a.brand AS categories_brand,
                        a.idcompany AS categories_idcompany,
                        a.description AS categories_description,
                        b.id AS companies_id,
                        b.code AS companies_code,
                        b.name AS companies_name,
                        b.description AS companies_description
                FROM tdat_categories a
                LEFT JOIN tdat_companies b ON a.idcompany = b.id 
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS categories_id,
                        a.name AS categories_name,
                        a.brand AS categories_brand,
                        a.idcompany AS categories_idcompany,
                        a.description AS categories_description,
                        b.id AS companies_id,
                        b.code AS companies_code,
                        b.name AS companies_name,
                        b.description AS companies_description
                FROM tdat_categories a
                LEFT JOIN tdat_companies b ON a.idcompany = b.id 
                WHERE a.id = " . $id . "
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'name' => $post['name'],
            'brand' => $post['brand'],
            'idcompany' => $post['idcompany'],
            'description' => $post['description']
        );
        $query = $this->db->insert('tdat_categories', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'name' => $post['name'],
            'brand' => $post['brand'],
            'idcompany' => $post['idcompany'],
            'description' => $post['description']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_categories', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_categories")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>