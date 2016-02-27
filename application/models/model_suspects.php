<?php

class Model_suspects extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT  a.id AS suspects_id,
                        a.createddate AS suspects_createddate,
                        a.createdby AS suspects_createdby,
                        a.idcompany AS suspects_idcompany,
                        a.idbranch AS suspects_idbranch,
                        a.idlead AS suspects_idlead,
                        a.idleaddetail AS suspects_idleaddetail,
                        a.iduser AS suspects_iduser,
                        a.description AS suspects_description,
                        a.idstage AS suspects_idstage,
                        a.customerplanned AS suspects_customerplanned,
                        a.idcustomer AS suspects_idcustomer,
                        b.id AS users_id,
                        b.nik AS users_nik,
                        b.firstname AS users_firstname,
                        b.lastname AS users_lastname,
                        c.id AS companies_id,
                        c.code AS companies_code,
                        c.name AS companies_name,
                        d.id AS branches_id,
                        d.code AS branches_code,
                        d.name AS branches_name,
                        e.id AS users2_id,
                        e.nik AS users2_nik,
                        e.firstname AS users2_firstname,
                        e.lastname AS users2_lastname,
                        f.id AS leads_id,
                        f.projectname AS leads_projectname,
						f.projectdescription AS leads_projectdescription,
                        g.id AS leaddetails_id,
                        h.id AS stages_id,
                        h.code AS stages_code,
                        h.name AS stages_name,
                        i.id AS customers_id,
                        i.name AS customers_name 
                FROM tdat_suspects a
                LEFT JOIN tdat_users b ON a.createdby = b.id
                LEFT JOIN tdat_companies c ON a.idcompany = c.id
                LEFT JOIN tdat_branches d ON a.idbranch = d.id
                LEFT JOIN tdat_users e ON a.iduser = e.id
                LEFT JOIN tdat_leads f ON a.idlead = f.id
                LEFT JOIN tdat_leaddetails g ON a.idleaddetail = g.id
                LEFT JOIN tdat_stages h ON a.idstage = h.id
                LEFT JOIN tdat_customers i ON a.idcustomer = i.id
                ORDER BY a.id DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT  a.id AS suspects_id,
                        a.createddate AS suspects_createddate,
                        a.createdby AS suspects_createdby,
                        a.idcompany AS suspects_idcompany,
                        a.idbranch AS suspects_idbranch,
                        a.idlead AS suspects_idlead,
                        a.idleaddetail AS suspects_idleaddetail,
                        a.iduser AS suspects_iduser,
                        a.description AS suspects_description,
                        a.idstage AS suspects_idstage,
                        a.customerplanned AS suspects_customerplanned,
                        a.idcustomer AS suspects_idcustomer,
                        b.id AS users_id,
                        b.nik AS users_nik,
                        b.firstname AS users_firstname,
                        b.lastname AS users_lastname,
                        c.id AS companies_id,
                        c.code AS companies_code,
                        c.name AS companies_name,
                        d.id AS branches_id,
                        d.code AS branches_code,
                        d.name AS branches_name,
                        e.id AS users2_id,
                        e.nik AS users2_nik,
                        e.firstname AS users2_firstname,
                        e.lastname AS users2_lastname,
                        f.id AS leads_id,
                        f.projectname AS leads_projectname,
						f.projectdescription AS leads_projectdescription,
                        g.id AS leaddetails_id,
                        h.id AS stages_id,
                        h.code AS stages_code,
                        h.name AS stages_name,
                        i.id AS customers_id,
                        i.name AS customers_name 
                FROM tdat_suspects a
                LEFT JOIN tdat_users b ON a.createdby = b.id
                LEFT JOIN tdat_companies c ON a.idcompany = c.id
                LEFT JOIN tdat_branches d ON a.idbranch = d.id
                LEFT JOIN tdat_users e ON a.iduser = e.id
                LEFT JOIN tdat_leads f ON a.idlead = f.id
                LEFT JOIN tdat_leaddetails g ON a.idleaddetail = g.id
                LEFT JOIN tdat_stages h ON a.idstage = h.id
                LEFT JOIN tdat_customers i ON a.idcustomer = i.id
                WHERE a.id = " . $id . "
                ORDER BY a.id DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($data) {
        $query = $this->db->insert('tdat_suspects', $data);
        $id = $this->db->insert_id();
        if ($query):
            return $id;
        else:
            return FALSE;
        endif;
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->update('tdat_suspects', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit2($data) {
        $this->db->where('idleaddetail', $data['idleaddetail']);
        $query = $this->db->update('tdat_suspects', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_suspects")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>