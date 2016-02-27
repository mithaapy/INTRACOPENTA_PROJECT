<?php

class Model_visitschedules extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT	a.id AS visitschedules_id,
                        a.iduser AS visitschedules_iduser,
                        a.datetimestart AS visitschedules_datetimestart,
                        a.datetimeend AS visitschedules_datetimeend,
                        a.idcustomer AS visitschedules_idcustomer,
                        a.idvisitpurpose AS visitschedules_idvisitpurpose,
                        a.idstage AS visitschedules_idstage,
                        b.id AS users_id,
                        b.nik AS users_nik,
                        b.username AS users_username,
                        b.password AS users_password,
                        b.firstname AS users_firstname,
                        b.lastname AS users_lastname,
                        b.gender AS users_gender,
                        b.birthdate AS users_birthdate,
                        b.phone AS users_phone,
                        b.mobile AS users_mobile,
                        b.email AS users_email,
                        b.pinbbm AS users_pinbbm,
                        b.idcompany AS users_idcompany,
                        b.idbranch AS users_idbranch,
                        b.idrole AS users_idrole,
                        b.idcountry AS users_idcountry,
                        b.idcity AS users_idcity,
                        b.picture AS users_picture,
                        b.active AS users_active,	
                        c.id AS customers_id,
                        c.name AS customers_name,
                        c.idindustry AS customers_idindustry,
                        c.idsegment AS customers_idsegment,
                        c.idcustomergroup AS customers_idcustomergroup,
                        c.idcustomertype AS customers_idcustomertype,
                        c.cust_wid AS customers_custwid,
                        c.address AS customers_address,
                        c.idcity AS customers_idcity,
                        c.idcountry AS customers_idcountry,
                        c.postalcode AS customers_postalcode,
                        c.phone AS customers_phone,
                        c.fax AS customers_fax,
                        c.email AS customers_email,
                        c.locationsite AS customers_locationsite,
                        d.id AS visitpurposes_id,
                        d.name AS visitpurposes_name,
                        d.description AS visitpurposes_description,	
                        e.id AS stages_id,
                        e.code AS stages_code,
                        e.name AS stages_name,
                        e.description AS stages_description
                        FROM tdat_visitschedules a
                LEFT JOIN tdat_users b ON a.iduser = b.id	
                LEFT JOIN tdat_customers c ON a.idcustomer = c.id
                LEFT JOIN tdat_visitpurposes d ON a.idvisitpurpose = d.id
                LEFT JOIN tdat_stages e ON a.idstage = e.id
                ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS visitschedules_id,
                        a.iduser AS visitschedules_iduser,
                        a.datetimestart AS visitschedules_datetimestart,
                        a.datetimeend AS visitschedules_datetimeend,
                        a.idcustomer AS visitschedules_idcustomer,
                        a.idvisitpurpose AS visitschedules_idvisitpurpose,
                        a.idstage AS visitschedules_idstage,
                        b.id AS users_id,
                        b.nik AS users_nik,
                        b.username AS users_username,
                        b.password AS users_password,
                        b.firstname AS users_firstname,
                        b.lastname AS users_lastname,
                        b.gender AS users_gender,
                        b.birthdate AS users_birthdate,
                        b.phone AS users_phone,
                        b.mobile AS users_mobile,
                        b.email AS users_email,
                        b.pinbbm AS users_pinbbm,
                        b.idcompany AS users_idcompany,
                        b.idbranch AS users_idbranch,
                        b.idrole AS users_idrole,
                        b.idcountry AS users_idcountry,
                        b.idcity AS users_idcity,
                        b.picture AS users_picture,
                        b.active AS users_active,	
                        c.id AS customers_id,
                        c.name AS customers_name,
                        c.idindustry AS customers_idindustry,
                        c.idsegment AS customers_idsegment,
                        c.idcustomergroup AS customers_idcustomergroup,
                        c.idcustomertype AS customers_idcustomertype,
                        c.cust_wid AS customers_custwid,
                        c.address AS customers_address,
                        c.idcity AS customers_idcity,
                        c.idcountry AS customers_idcountry,
                        c.postalcode AS customers_postalcode,
                        c.phone AS customers_phone,
                        c.fax AS customers_fax,
                        c.email AS customers_email,
                        c.locationsite AS customers_locationsite,
                        d.id AS visitpurposes_id,
                        d.name AS visitpurposes_name,
                        d.description AS visitpurposes_description,	
                        e.id AS stages_id,
                        e.code AS stages_code,
                        e.name AS stages_name,
                        e.description AS stages_description
                        FROM tdat_visitschedules a
                LEFT JOIN tdat_users b ON a.iduser = b.id	
                LEFT JOIN tdat_customers c ON a.idcustomer = c.id
                LEFT JOIN tdat_visitpurposes d ON a.idvisitpurpose = d.id
                LEFT JOIN tdat_stages e ON a.idstage = e.id
		WHERE a.id = " . $id . "
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'iduser' => $post['iduser'],
            'datetimestart' => $post['datetimestart'],
            'datetimeend' => $post['datetimeend'],
            'idcustomer' => $post['idcustomer'],
            'idvisitpurpose' => $post['idvisitpurpose'],
            'idstage' => $post['idstage']
        );
        $query = $this->db->insert('tdat_visitschedules', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'iduser' => $post['iduser'],
            'datetimestart' => $post['datetimestart'],
            'datetimeend' => $post['datetimeend'],
            'idcustomer' => $post['idcustomer'],
            'idvisitpurpose' => $post['idvisitpurpose'],
            'idstage' => $post['idstage']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_visitschedules', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_visitschedules")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
