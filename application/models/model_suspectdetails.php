<?php

class Model_suspectdetails extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall($id) {
        $sql = "SELECT  a.id AS suspectdetails_id,
                        a.idproduct AS suspectdetails_idproduct,
                        a.idsuspect AS suspectdetails_idsuspect,
                        a.quantity AS suspectdetails_quantity,
                        a.uom AS suspectdetails_uom,
                        a.transactionmodel AS suspectdetails_transactionmodel,
                        a.idstatus AS suspectdetails_idstatus,
                        a.odds AS suspectdetails_odds,
                        a.idsegment AS suspectdetails_idsegment,
                        a.stage AS suspectdetails_stage,
                        b.id AS products_id,
                        b.name AS products_name,
                        b.uom AS products_uom,
                        b.specification AS products_specification,
                        c.id AS statuses_id,
                        c.idstage AS statuses_idstage,
                        c.code AS statuses_code,
                        c.name AS statuses_name,
                        c.description AS statuses_description,
                        d.id AS segments_id,
                        d.segment AS segments_segment,
                        d.subsegment AS segments_subsegment,
                        d.description AS segments_description
                FROM tdat_suspectdetails a 
                LEFT JOIN tdat_products b ON a.idproduct = b.id
                LEFT JOIN tdat_statuses c ON a.idstatus = c.id
                LEFT JOIN tdat_segments d ON a.idsegment = d.id
                WHERE a.idsuspect = " . $id . "
                ORDER BY a.id DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT  a.id AS suspectdetails_id,
                        a.idproduct AS suspectdetails_idproduct,
                        a.idsuspect AS suspectdetails_idsuspect,
                        a.quantity AS suspectdetails_quantity,
                        a.uom AS suspectdetails_uom,
                        a.transactionmodel AS suspectdetails_transactionmodel,
                        a.idstatus AS suspectdetails_idstatus,
                        a.odds AS suspectdetails_odds,
                        a.idsegment AS suspectdetails_idsegment,
                        a.stage AS suspectdetails_stage,
                        b.id AS products_id,
                        b.name AS products_name,
                        b.uom AS products_uom,
                        b.specification AS products_specification,
                        c.id AS statuses_id,
                        c.idstage AS statuses_idstage,
                        c.code AS statuses_code,
                        c.name AS statuses_name,
                        c.description AS statuses_description,
                        d.id AS segments_id,
                        d.segment AS segments_segment,
                        d.subsegment AS segments_subsegment,
                        d.description AS segments_description
                FROM tdat_suspectdetails a 
                LEFT JOIN tdat_products b ON a.idproduct = b.id
                LEFT JOIN tdat_statuses c ON a.idstatus = c.id
                LEFT JOIN tdat_segments d ON a.idsegment = d.id
                WHERE a.id = " . $id . "
                ORDER BY a.id DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($data) {
        $query = $this->db->insert('tdat_suspectdetails', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->update('tdat_suspectdetails', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("idsuspects", $id);
        if ($this->db->delete("tdat_suspectdetails")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>