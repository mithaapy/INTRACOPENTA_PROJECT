<?php

class Model_leaddetails extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall($id = '') {
        $sql = "SELECT  a.id AS leaddetails_id,
                        a.idlead AS leaddetails_idlead,
                        a.idcompany AS leaddetails_idcompany,
                        a.idbranch AS leaddetails_idbranch,
                        a.idcustomer AS leaddetails_idcustomer,
                        a.pickupdate AS leaddetails_pickupdate,
                        a.pickupby AS leaddetails_pickupby,
                        a.quality AS leaddetails_quality,
                        a.idstatus AS leaddetails_idstatus,
                        b.id AS companies_id,
                        b.code AS companies_code,
                        b.name AS companies_name,
                        b.description AS companies_description,
                        b.logo AS companies_logo,
                        c.id AS branches_id,
                        c.code AS branches_code,
                        c.name AS branches_name,
                        c.address AS branches_address,
                        c.idcity AS branches_idcity,
                        c.idcountry AS branches_idcountry,
                        c.phone AS branches_phone,
                        c.fax AS branches_fax,
                        c.email AS branches_email,
                        c.idcompany AS branches_idcompany,
                        d.id AS customers_id,
                        d.name AS customers_name,
                        d.idindustry AS customers_idindustry,
                        d.idsegment AS customers_idsegment,
                        d.idcustomergroup AS customers_idcustomergroup,
                        d.idcustomertype AS customers_idcustomertype,
                        d.CUST_WID AS customers_CUST_WID,
                        d.address AS customers_address,
                        d.idcity AS customers_idcity,
                        d.idcountry AS customers_idcountry,
                        d.postalcode AS customers_postalcode,
                        d.phone AS customers_phone,
                        d.fax AS customers_fax,
                        d.email AS customers_email,
                        d.locationsite AS customers_locationsite,
                        e.id AS statuses_id,
                        e.idstage AS statuses_idstage,
                        e.code AS statuses_code,
                        e.name AS statuses_name,
                        e.description AS statuses_description,
                        f.id AS users_id,
                        f.nik AS users_nik,
                        f.firstname AS users_firstname,
                        f.lastname AS users_lastname
                FROM tdat_leaddetails a
                LEFT JOIN tdat_companies b ON a.idcompany = b.id
                LEFT JOIN tdat_branches c ON a.idbranch = c.id
                LEFT JOIN tdat_customers d ON a.idcustomer = d.id
                LEFT JOIN tdat_statuses e ON a.idstatus = e.id
                LEFT JOIN tdat_users f ON a.pickupby = f.id
                WHERE a.idlead = " . $id . "
                ORDER BY a.id DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT  a.id AS leaddetails_id,
                        a.idlead AS leaddetails_idlead,
                        a.idcompany AS leaddetails_idcompany,
                        a.idbranch AS leaddetails_idbranch,
                        a.idcustomer AS leaddetails_idcustomer,
                        a.pickupdate AS leaddetails_pickupdate,
                        a.pickupby AS leaddetails_pickupby,
                        a.quality AS leaddetails_quality,
                        a.idstatus AS leaddetails_idstatus,
                        b.id AS companies_id,
                        b.code AS companies_code,
                        b.name AS companies_name,
                        b.description AS companies_description,
                        b.logo AS companies_logo,
                        c.id AS branches_id,
                        c.code AS branches_code,
                        c.name AS branches_name,
                        c.address AS branches_address,
                        c.idcity AS branches_idcity,
                        c.idcountry AS branches_idcountry,
                        c.phone AS branches_phone,
                        c.fax AS branches_fax,
                        c.email AS branches_email,
                        c.idcompany AS branches_idcompany,
                        d.id AS customers_id,
                        d.name AS customers_name,
                        d.idindustry AS customers_idindustry,
                        d.idsegment AS customers_idsegment,
                        d.idcustomergroup AS customers_idcustomergroup,
                        d.idcustomertype AS customers_idcustomertype,
                        d.CUST_WID AS customers_CUST_WID,
                        d.address AS customers_address,
                        d.idcity AS customers_idcity,
                        d.idcountry AS customers_idcountry,
                        d.postalcode AS customers_postalcode,
                        d.phone AS customers_phone,
                        d.fax AS customers_fax,
                        d.email AS customers_email,
                        d.locationsite AS customers_locationsite,
                        e.id AS statuses_id,
                        e.idstage AS statuses_idstage,
                        e.code AS statuses_code,
                        e.name AS statuses_name,
                        e.description AS statuses_description
                        f.id AS users_id,
                        f.nik AS users_nik,
                        f.firstname AS users_firstname,
                        f.lastname AS users_lastname
                FROM tdat_leaddetails a
                LEFT JOIN tdat_companies b ON a.idcompany = b.id
                LEFT JOIN tdat_branches c ON a.idbranch = c.id
                LEFT JOIN tdat_customers d ON a.idcustomer = d.id
                LEFT JOIN tdat_statuses e ON a.idstatus = e.id
                LEFT JOIN tdat_users f ON a.pickupby = f.id
                WHERE a.id = " . $id . "
                ORDER BY a.id DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($data) {
        $query = $this->db->insert('tdat_leaddetails', $data);
        $id = $this->db->insert_id();
        if ($query):
            return $id;
        else:
            return FALSE;
        endif;
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->update('tdat_leaddetails', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_leaddetails")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete2($id) {
        $this->db->where("idlead", $id);
        if ($this->db->delete("tdat_leaddetails")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

?>