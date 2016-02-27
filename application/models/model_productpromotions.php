<?php

class Model_productpromotions extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT	a.id AS productpromotions_id,
                        a.idproduct AS productpromotions_idproduct,
                        a.name AS productpromotions_name,
                        a.description AS productpromotions_description,
                        a.validdatestart AS productpromotions_validdatestart,
                        a.validdateend AS productpromotions_validdateend,
                        a.active AS productpromotions_active,
                        b.id AS products_id,
                        b.name AS products_name,
                        b.uom AS products_uom,
                        b.specification AS products_specification,
                        b.idmodel AS products_idmodel
                FROM tdat_productpromotions a
                LEFT JOIN tdat_products b
                ON a.idproduct = b.id ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS productpromotions_id,
                        a.idproduct AS productpromotions_idproduct,
                        a.name AS productpromotions_name,
                        a.description AS productpromotions_description,
                        a.validdatestart AS productpromotions_validdatestart,
                        a.validdateend AS productpromotions_validdateend,
                        a.active AS productpromotions_active,
                        b.id AS products_id,
                        b.name AS products_name,
                        b.uom AS products_uom,
                        b.specification AS products_specification,
                        b.idmodel AS products_idmodel
                FROM tdat_productpromotions a
                LEFT JOIN tdat_products b
                ON a.idproduct = b.id 
				WHERE a.id = " . $id . "
				ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'idproduct' => $post['idproduct'],
            'name' => $post['name'],
            'description' => $post['description'],
            'validdatestart' => $post['validdatestart'],
            'validdateend' => $post['validdateend'],
            'active' => $post['active']
        );
        $query = $this->db->insert('tdat_productpromotions', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'idproduct' => $post['idproduct'],
            'name' => $post['name'],
            'description' => $post['description'],
            'validdatestart' => $post['validdatestart'],
            'validdateend' => $post['validdateend'],
            'active' => $post['active']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_productpromotions', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_productpromotions")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
