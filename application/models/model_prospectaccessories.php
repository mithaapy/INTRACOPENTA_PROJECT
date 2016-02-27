<?php

class Model_prospectaccessories extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall($idprospect) {
        $sql = "SELECT	a.id AS prospectaccessories_id,
                        a.idaccessories AS prospectaccessories_idaccessories,
                        a.idprospect AS prospectaccessories_idprospect,
                        b.id AS accessories_id,
                        b.name AS accessories_name,
                        b.price AS accessories_price,
                        b.currency AS accessories_currency, 
                        c.id AS prospects_id
                FROM tdat_prospectaccessories a
                LEFT JOIN tdat_accessories b ON a.idaccessories = b.id
                LEFT JOIN tdat_prospects c ON a.idprospect = c.id
                WHERE a.idprospect = " . $idprospect . " 
                ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT 	a.id AS prospectaccessories_id,
                        a.idaccessories AS prospectaccessories_idaccessories,
                        a.idprospect AS prospectaccessories_idprospect,
                        b.id AS accessories_id,
                        b.name AS accessories_name,
                        b.price AS accessories_price,
                        b.currency AS accessories_currency, 
                        c.id AS prospects_id
                FROM tdat_prospectaccessories a
                LEFT JOIN tdat_accessories b ON a.idaccessories = b.id
                LEFT JOIN tdat_prospects c ON a.idprospect = c.id 
                WHERE a.id = " . $id . " 
                ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($data) {
        $query = $this->db->insert('tdat_prospectaccessories', $data);
        $id = $this->db->insert_id();
        if ($query):
            return $id;
        else:
            return FALSE;
        endif;
    }
    
    public function edit($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->update('tdat_prospectaccessories', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }
    
    public function edit2($data) {
        $this->db->where('idprospect', $data['idprospect']);
        $query = $this->db->update('tdat_prospectaccessories', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        if ($this->db->delete("tdat_prospectaccessories")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function delete2($id) {
        $this->db->where('idprospect', $id);
        if ($this->db->delete("tdat_prospectaccessories")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

?>