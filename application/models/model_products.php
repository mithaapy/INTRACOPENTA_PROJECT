<?php

class Model_products extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT	a.id AS products_id,
                        a.name AS products_name,
                        a.uom AS products_uom,
                        a.specification AS products_specification,
                        a.idmodel AS products_idmodel,
                        b.id AS models_id,
                        b.code AS models_code,
                        b.name AS models_name,
                        b.description AS models_description,
                        b.idcategory AS categories_id
                FROM tdat_products a
                LEFT JOIN tdat_models b ON a.idmodel = b.id
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS products_id,
                        a.name AS products_name,
                        a.uom AS products_uom,
                        a.specification AS products_specification,
                        a.idmodel AS products_idmodel,
                        b.id AS models_id,
                        b.code AS models_code,
                        b.name AS models_name,
                        b.description AS models_description,
                        b.idcategory AS categories_id
                FROM tdat_products a
                LEFT JOIN tdat_models b ON a.idmodel = b.id
				WHERE a.id = " . $id . " 
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'name' => $post['name'],
            'uom' => $post['uom'],
            'specification' => $post['specification'],
            'idmodel' => $post['idmodel']
        );
        $query = $this->db->insert('tdat_products', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'name' => $post['name'],
            'uom' => $post['uom'],
            'specification' => $post['specification'],
            'idmodel' => $post['idmodel']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_products', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_products")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>