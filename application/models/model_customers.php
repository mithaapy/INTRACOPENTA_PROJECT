<?php

class Model_customers extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT	a.id AS customers_id,
                        a.name AS customers_name,
                        a.idindustry AS customers_idindustry,
                        a.idsegment AS customers_idsegment,
                        a.idcustomergroup AS customers_idcustomergroup,
                        a.idcustomertype AS customers_idcustomertype,
                        a.cust_wid AS customers_custwid,
                        a.address AS customers_address,
                        a.idcity AS customers_idcity,
                        a.idcountry AS customers_idcountry,
                        a.postalcode AS customers_postalcode,
                        a.phone AS customers_phone,
                        a.fax AS customers_fax,
                        a.email AS customers_email,
                        a.locationsite AS customers_locationsite,
                        b.id AS industries_id,
                        b.code AS industries_code,
                        b.name AS industries_name,
                        b.description AS industries_description,
                        c.id AS segments_id,
                        c.segment AS segments_segment,
                        c.subsegment AS segments_subsegment,
                        c.description AS segments_description,
                        d.id AS customergroups_id,
                        d.name AS customergroups_name,
                        d.description AS customergroups_description,
                        e.id AS customertypes_id,
                        e.level1 AS customertypes_level1,
                        e.level2 AS customertypes_level2,
                        e.level3 AS customertypes_level3,
                        e.description AS customertypes_description,
                        f.id AS cities_id,
                        f.code AS cities_code,
                        f.name AS cities_name,
                        f.description AS cities_description,
                        f.idcountry AS countries_id,
                        g.id AS countries_id,
                        g.code AS countries_code,
                        g.name AS countries_name,
                        g.description AS countries_description
                FROM tdat_customers a 
                LEFT JOIN tdat_industries b ON a.idindustry = b.id
                LEFT JOIN tdat_segments c ON a.idsegment = c.id
                LEFT JOIN tdat_customergroups d ON a.idcustomergroup = d.id
                LEFT JOIN tdat_customertypes e ON a.idcustomertype = e.id
                LEFT JOIN tdat_cities f ON a.idcity = f.id
                LEFT JOIN tdat_countries g ON a.idcountry = g.id
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS customers_id,
                        a.name AS customers_name,
                        a.idindustry AS customers_idindustry,
                        a.idsegment AS customers_idsegment,
                        a.idcustomergroup AS customers_idcustomergroup,
                        a.idcustomertype AS customers_idcustomertype,
                        a.cust_wid AS customers_custwid,
                        a.address AS customers_address,
                        a.idcity AS customers_idcity,
                        a.idcountry AS customers_idcountry,
                        a.postalcode AS customers_postalcode,
                        a.phone AS customers_phone,
                        a.fax AS customers_fax,
                        a.email AS customers_email,
                        a.locationsite AS customers_locationsite,
                        b.id AS industries_id,
                        b.code AS industries_code,
                        b.name AS industries_name,
                        b.description AS industries_description,
                        c.id AS segments_id,
                        c.segment AS segments_segment,
                        c.subsegment AS segments_subsegment,
                        c.description AS segments_description,
                        d.id AS customergroups_id,
                        d.name AS customergroups_name,
                        d.description AS customergroups_description,
                        e.id AS customertypes_id,
                        e.level1 AS customertypes_level1,
                        e.level2 AS customertypes_level2,
                        e.level3 AS customertypes_level3,
                        e.description AS customertypes_description,
                        f.id AS cities_id,
                        f.code AS cities_code,
                        f.name AS cities_name,
                        f.description AS cities_description,
                        f.idcountry AS countries_id,
                        g.id AS countries_id,
                        g.code AS countries_code,
                        g.name AS countries_name,
                        g.description AS countries_description
                FROM tdat_customers a 
                LEFT JOIN tdat_industries b ON a.idindustry = b.id
                LEFT JOIN tdat_segments c ON a.idsegment = c.id
                LEFT JOIN tdat_customergroups d ON a.idcustomergroup = d.id
                LEFT JOIN tdat_customertypes e ON a.idcustomertype = e.id
                LEFT JOIN tdat_cities f ON a.idcity = f.id
                LEFT JOIN tdat_countries g ON a.idcountry = g.id
		WHERE a.id = " . $id . "
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function checkcustomer($customers_name = '') {
        $sql = "SELECT	a.id AS customers_id,
                        a.name AS customers_name,
                        a.idindustry AS customers_idindustry,
                        a.idsegment AS customers_idsegment,
                        a.idcustomergroup AS customers_idcustomergroup,
                        a.idcustomertype AS customers_idcustomertype,
                        a.cust_wid AS customers_custwid,
                        a.address AS customers_address,
                        a.idcity AS customers_idcity,
                        a.idcountry AS customers_idcountry,
                        a.postalcode AS customers_postalcode,
                        a.phone AS customers_phone,
                        a.fax AS customers_fax,
                        a.email AS customers_email,
                        a.locationsite AS customers_locationsite,
                        b.id AS industries_id,
                        b.code AS industries_code,
                        b.name AS industries_name,
                        b.description AS industries_description,
                        c.id AS segments_id,
                        c.segment AS segments_segment,
                        c.subsegment AS segments_subsegment,
                        c.description AS segments_description,
                        d.id AS customergroups_id,
                        d.name AS customergroups_name,
                        d.description AS customergroups_description,
                        e.id AS customertypes_id,
                        e.level1 AS customertypes_level1,
                        e.level2 AS customertypes_level2,
                        e.level3 AS customertypes_level3,
                        e.description AS customertypes_description,
                        f.id AS cities_id,
                        f.code AS cities_code,
                        f.name AS cities_name,
                        f.description AS cities_description,
                        f.idcountry AS countries_id,
                        g.id AS countries_id,
                        g.code AS countries_code,
                        g.name AS countries_name,
                        g.description AS countries_description
                FROM tdat_customers a 
                LEFT JOIN tdat_industries b ON a.idindustry = b.id
                LEFT JOIN tdat_segments c ON a.idsegment = c.id
                LEFT JOIN tdat_customergroups d ON a.idcustomergroup = d.id
                LEFT JOIN tdat_customertypes e ON a.idcustomertype = e.id
                LEFT JOIN tdat_cities f ON a.idcity = f.id
                LEFT JOIN tdat_countries g ON a.idcountry = g.id
		WHERE a.name = '" . $customers_name . "'
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function insert($data) {
        $query = $this->db->insert('tdat_customers', $data);
        $id = $this->db->insert_id();
        if ($query):
            return $id;
        else:
            return FALSE;
        endif;
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->update('tdat_customers', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_customers")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>