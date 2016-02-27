<?php

class Model_models extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT	a.id AS models_id,
                        a.name AS models_name,
                        a.code AS models_code,
                        a.description AS models_description,
                        a.idcategory AS models_idcategory,
                        b.id AS categories_id,
                        b.brand AS categories_brand,
                        b.name AS categories_name,
                        b.description AS categories_description
                FROM tdat_models a
                LEFT JOIN tdat_categories b
                ON a.idcategory = b.id ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS models_id,
                        a.name AS models_name,
                        a.code AS models_code,
                        a.description AS models_description,
                        a.idcategory AS models_idcategory,
                        b.id AS categories_id,
                        b.brand AS categories_brand,
                        b.name AS categories_name,
                        b.description AS categories_description
                FROM tdat_models a
                LEFT JOIN tdat_categories b
                ON a.idcategory = b.id 
				WHERE a.id = " . $id . "
				ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'code' => $post['code'],
            'name' => $post['name'],
            'description' => $post['description'],
            'idcategory' => $post['idcategory'],
        );
        $query = $this->db->insert('tdat_models', $data);
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
            'idcategory' => $post['idcategory'],
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_models', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_models")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
