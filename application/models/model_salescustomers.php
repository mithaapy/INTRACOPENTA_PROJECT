<?php

class Model_salescustomers extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall($idcustomer) {
        $sql = "SELECT	a.id AS salescustomers_id,
                        a.idcustomer AS salescustomers_idcustomer,
			a.iduser AS salescustomers_iduser,
                        a.idcompany AS salescustomers_idcompany,
			a.idbranch AS salescustomers_idbranch,
			a.assigndate AS salescustomers_assigndate,
                        a.active AS salescustomers_active,
                        b.id AS customers_id,
                        b.name AS customers_name,
                        c.nik AS users_nik,
                        c.firstname AS users_firstname,
                        c.lastname AS users_lastname,
                        c.idcompany AS users_idcompany,
                        c.idbranch AS users_idbranch,
                        d.code AS companies_code,
                        d.name AS companies_name,
                        e.code AS branches_code,
                        e.name AS branches_name
                FROM tdat_salescustomers a
                LEFT JOIN tdat_customers b ON a.idcustomer = b.id 
                LEFT JOIN tdat_users c ON a.iduser = c.id 
                LEFT JOIN tdat_companies d ON c.idcompany = d.id 
                LEFT JOIN tdat_branches e ON c.idbranch = e.id 
		WHERE a.idcustomer = " . $idcustomer . "
		ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS salescustomers_id,
                        a.idcustomer AS salescustomers_idcustomer,
			a.iduser AS salescustomers_iduser,
                        a.idcompany AS salescustomers_idcompany,
			a.idbranch AS salescustomers_idbranch,
			a.assigndate AS salescustomers_assigndate,
                        a.active AS salescustomers_active,
                        b.id AS customers_id,
                        b.name AS customers_name,
                        c.nik AS users_nik,
                        c.firstname AS users_firstname,
                        c.lastname AS users_lastname,
                        c.idcompany AS users_idcompany,
                        c.idbranch AS users_idbranch,
                        d.code AS companies_code,
                        d.name AS companies_name,
                        e.code AS branches_code,
                        e.name AS branches_name
                FROM tdat_salescustomers a
                LEFT JOIN tdat_customers b ON a.idcustomer = b.id 
                LEFT JOIN tdat_users c ON a.iduser = c.id 
                LEFT JOIN tdat_companies d ON c.idcompany = d.id 
                LEFT JOIN tdat_branches e ON c.idbranch = e.id 
		WHERE a.id = " . $id . "
		ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($data) {
        $query = $this->db->insert('tdat_salescustomers', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->update('tdat_salescustomers', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_salescustomers")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
