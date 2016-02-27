<?php

class Model_salestargets extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT  a.id AS salestargets_id,
                        a.iduser AS salestargets_iduser,
                        a.targetyear AS salestargets_targetyear,
                        a.yearplanvalue AS salestargets_yearplanvalue,
                        a.yearplanqty AS salestargets_yearplanqty,
                        a.monthplanvalue AS salestargets_monthplanvalue,
                        a.monthplanqty AS salestargets_monthplanqty,
		        a.actyear AS salestargets_actyear,
			a.yearactvalue AS salestargets_yearactvalue,
			a.yearactqty AS salestargets_yearactqty,
			a.monthactvalue AS salestargets_monthactvalue,
			a.monthactqty AS salestargets_monthactqty,
                        b.id AS users_id,
                        b.nik AS users_nik,
                        b.firstname AS users_firstname,
                        b.lastname AS users_lastname,
                        b.idcompany AS users_idcompany,
                        b.idbranch AS users_idbranch,
                        c.id AS companies_id,
                        c.code AS companies_code,
                        c.name AS companies_name,
                        d.id AS branches_id,
                        d.code AS branches_id,
                        d.name AS branches_name,
                        e.id AS roles_id,
                        e.name AS roles_name
                FROM tdat_salestargets a
                LEFT JOIN tdat_users b ON a.iduser = b.id
                LEFT JOIN tdat_companies c ON b.idcompany = c.id
                LEFT JOIN tdat_branches d ON b.idbranch = d.id
                LEFT JOIN tdat_roles e ON b.idrole = e.id
                ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT  a.id AS salestargets_id,
                        a.iduser AS salestargets_iduser,
                        a.targetyear AS salestargets_targetyear,
                        a.yearplanvalue AS salestargets_yearplanvalue,
                        a.yearplanqty AS salestargets_yearplanqty,
                        a.monthplanvalue AS salestargets_monthplanvalue,
                        a.monthplanqty AS salestargets_monthplanqty,
			a.actyear AS salestargets_actyear,
			a.yearactvalue AS salestargets_yearactvalue,
		        a.yearactqty AS salestargets_yearactqty,
			a.monthactvalue AS salestargets_monthactvalue,
			a.monthactqty AS salestargets_monthactqty,
                        b.id AS users_id,
                        b.nik AS users_nik,
                        b.firstname AS users_firstname,
                        b.lastname AS users_lastname,
                        b.idcompany AS users_idcompany,
                        b.idbranch AS users_idbranch,
                        c.id AS companies_id,
                        c.code AS companies_code,
                        c.name AS companies_name,
                        d.id AS branches_id,
                        d.code AS branches_id,
                        d.name AS branches_name,
                        e.id AS roles_id,
                        e.name AS roles_name
                FROM tdat_salestargets a
                LEFT JOIN tdat_users b ON a.iduser = b.id
                LEFT JOIN tdat_companies c ON b.idcompany = c.id
                LEFT JOIN tdat_branches d ON b.idbranch = d.id
                LEFT JOIN tdat_roles e ON b.idrole = e.id
                WHERE a.id = " . $id . " 
                ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'iduser' => $post['iduser'],
            'targetyear' => $post['targetyear'],
            'yearplanvalue' => $post['yearplanvalue'],
            'yearplanqty' => $post['yearplanqty'],
            'monthplanvalue' => $post['monthplanvalue'],
            'monthplanqty' => $post['monthplanqty'],
	    'actyear' => $post['actyear'],
            'yearactvalue' => $post['yearactvalue'],
            'yearactqty' => $post['yearactqty'],
            'monthactvalue' => $post['monthactvalue'],
            'monthactqty' => $post['monthactqty'],
			
        );
        $query = $this->db->insert('tdat_salestargets', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'iduser' => $post['iduser'],
            'targetyear' => $post['targetyear'],
            'yearplanvalue' => $post['yearplanvalue'],
            'yearplanqty' => $post['yearplanqty'],
            'monthplanvalue' => $post['monthplanvalue'],
            'monthplanqty' => $post['monthplanqty'],
	    'actyear' => $post['actyear'],
            'yearactvalue' => $post['yearactvalue'],
            'yearactqty' => $post['yearactqty'],
            'monthactvalue' => $post['monthactvalue'],
            'monthactqty' => $post['monthactqty'],
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_salestargets', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_salestargets")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>