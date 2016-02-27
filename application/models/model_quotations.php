<?php

class Model_quotations extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT	a.id AS quotations_id,
                        a.idprospect AS quotations_idprospect,
                        a.idquotationtext AS quotations_idquotationtext,
                        a.description AS quotations_description,
                        b.id AS prospects_id,
                        b.idsuspect AS prospects_idsuspect,
                        b.idsuspectdetail AS prospects_idsuspectdetail,
                        b.quotationno AS prospects_quotationno,
                        b.createddate AS prospects_createddate,
                        b.createdby AS prospects_createdby,
                        b.idcompany AS prospects_idcompany,
                        b.iduser AS prospects_iduser,
                        b.idbranch AS prospects_idbranch,
                        b.idcustomer AS prospects_idcustomer,
                        b.description AS prospects_description,
                        b.startdate AS prospects_startdate,
                        b.expireddate AS prospects_expireddate,
                        b.currency AS prospects_currency,
                        b.idstage AS prospects_idstage,
                        b.approveddate AS prospects_approveddate,
                        b.approvedby AS prospects_approvedby,
                        b.idstatus AS prospects_idstatus,
                        b.idproduct AS prospects_idproduct,
                        b.productname AS prospects_productname,
                        b.quantity AS prospects_quantity,
                        b.uom AS prospects_uom,
                        b.unitvalue AS prospects_unitvalue,
                        b.transactionmodel AS prospects_transactionmodel,
                        b.note1 AS prospects_note1,
                        b.note2 AS prospects_note2,
                        b.note3 AS prospects_note3,
                        b.note4 AS prospects_note4,
                        b.note5 AS prospects_note5,
                        b.decisiondate AS prospects_decisiondate,
                        b.expecteddeliverydate AS prospects_expecteddeliverydate,
                        b.customertype AS prospects_customertype,
                        b.level2 AS prospects_level2,
                        b.webpid AS prospects_webpid,
                        b.idsegment AS prospects_idsegment,
                        b.odds AS prospects_odds,
                        c.id AS quotationtext_id,
                        c.name AS quotationtext_name,
                        c.description AS quotationtext_description,
                        d.id AS suspects_id,
                        d.createddate AS suspects_createddate,
                        d.createdby AS suspects_createdby,
                        d.idcompany AS suspects_idcompany,
                        d.idbranch AS suspects_idbranch,
                        d.idlead AS suspects_idlead,
                        d.idleaddetail AS suspects_idleaddetail,
                        d.iduser AS suspects_iduser,
                        d.description AS suspects_description,
                        d.idstage AS suspects_idstage,
                        d.customerplanned AS suspects_customerplanned,
                        d.idcustomer AS suspects_idcustomer,
                        e.id AS suspectdetails_id,
                        e.idproduct AS suspectdetails_idproduct,
                        e.idsuspect AS suspectdetails_idsuspect,
                        e.quantity AS suspectdetails_quantity,
                        e.uom AS suspectdetails_uom,
                        e.transactionmodel AS suspectdetails_transactionmodel,
                        e.idstatus AS suspectdetails_idstatus,
                        e.odds AS suspectdetails_odds,
                        e.idsegment AS suspectdetails_idsegment,
                        f.id AS companies_id,
                        f.code AS companies_code,
                        f.name AS companies_name,
                        f.logo AS companies_logo,
                        g.id AS users_id,
                        g.nik AS users_nik,
                        g.firstname AS users_firstname,
                        g.lastname AS users_lastname,
                        g.mobile AS users_mobile,
                        g.email AS users_email,
                        h.id AS branches_id,
                        h.code AS branches_code,
                        h.name AS branches_name,
                        i.id AS customers_id,
                        i.name AS customers_name,
                        i.address AS customers_address,
                        i.idcity AS customers_idcity,
                        i.idcountry AS customers_idcountry,
                        i.postalcode AS customers_postalcode,
                        j.id AS stages_id,
                        j.code AS stages_code,
                        j.name AS stages_name,
                        k.id AS statuses_id,
                        k.idstage AS statuses_idstage,
                        k.code AS statuses_code,
                        k.name AS statuses_name,
                        l.id AS products_id,
                        l.name AS products_name,
                        l.uom AS products_uom,
                        l.specification AS products_specification,
                        m.id AS segments_id,
                        m.segment AS segments_segment,
                        m.subsegment AS segments_subsegment,
                        m.description AS segments_description,
                        n.id AS customertypes_id,
                        n.level1 AS customertypes_level1,
                        n.level2 AS customertypes_level2,
                        n.level3 AS customertypes_level3,
                        o.id AS leaddetails_id,
                        p.id AS leads_id,
						p.projectdescription AS leads_projectdescription,
                        p.projectname AS leads_projectname,
                        q.code AS cities_code,
                        q.name AS cities_name,
                        r.code AS countries_code,
                        r.name AS countries_name,
						s.id AS quotationtext_id,
						s.name AS quotationtext_name,
						s.description AS quotationtext_description
                FROM tdat_quotations a
                LEFT JOIN tdat_prospects b ON a.idprospect = b.id
                LEFT JOIN tdat_quotationtext c ON a.idquotationtext = c.id 
                LEFT JOIN tdat_suspects d ON b.idsuspect = d.id
                LEFT JOIN tdat_suspectdetails e ON b.idsuspectdetail = e.id
                LEFT JOIN tdat_companies f ON b.idcompany = f.id
                LEFT JOIN tdat_users g ON b.iduser = g.id
                LEFT JOIN tdat_branches h ON b.idbranch = h.id
                LEFT JOIN tdat_customers i ON b.idcustomer = i.id
                LEFT JOIN tdat_stages j ON b.idstage = j.id
                LEFT JOIN tdat_statuses k ON b.idstatus = k.id
                LEFT JOIN tdat_products l ON b.idproduct = l.id
                LEFT JOIN tdat_segments m ON b.idsegment = m.id
                LEFT JOIN tdat_customertypes n ON b.customertype = n.id
                LEFT JOIN tdat_leaddetails o ON d.idleaddetail = o.id
                LEFT JOIN tdat_leads p ON d.idlead = p.id
                LEFT JOIN tdat_cities q ON i.idcity = q.id
                LEFT JOIN tdat_countries r ON i.idcountry = r.id
				LEFT JOIN tdat_quotationtext s ON a.idquotationtext = s.id
                ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($idprospect) {
        $sql = "SELECT	a.id AS quotations_id,
                        a.idprospect AS quotations_idprospect,
                        a.idquotationtext AS quotations_idquotationtext,
                        a.description AS quotations_description,
                        b.id AS prospects_id,
                        b.idsuspect AS prospects_idsuspect,
                        b.idsuspectdetail AS prospects_idsuspectdetail,
                        b.quotationno AS prospects_quotationno,
                        b.createddate AS prospects_createddate,
                        b.createdby AS prospects_createdby,
                        b.idcompany AS prospects_idcompany,
                        b.iduser AS prospects_iduser,
                        b.idbranch AS prospects_idbranch,
                        b.idcustomer AS prospects_idcustomer,
                        b.description AS prospects_description,
                        b.startdate AS prospects_startdate,
                        b.expireddate AS prospects_expireddate,
                        b.currency AS prospects_currency,
                        b.idstage AS prospects_idstage,
                        b.approveddate AS prospects_approveddate,
                        b.approvedby AS prospects_approvedby,
                        b.idstatus AS prospects_idstatus,
                        b.idproduct AS prospects_idproduct,
                        b.productname AS prospects_productname,
                        b.quantity AS prospects_quantity,
                        b.uom AS prospects_uom,
                        b.unitvalue AS prospects_unitvalue,
                        b.transactionmodel AS prospects_transactionmodel,
                        b.note1 AS prospects_note1,
                        b.note2 AS prospects_note2,
                        b.note3 AS prospects_note3,
                        b.note4 AS prospects_note4,
                        b.note5 AS prospects_note5,
                        b.decisiondate AS prospects_decisiondate,
                        b.expecteddeliverydate AS prospects_expecteddeliverydate,
                        b.customertype AS prospects_customertype,
                        b.level2 AS prospects_level2,
                        b.webpid AS prospects_webpid,
                        b.idsegment AS prospects_idsegment,
                        b.odds AS prospects_odds,
                        c.id AS quotationtext_id,
                        c.name AS quotationtext_name,
                        c.description AS quotationtext_description,
                        d.id AS suspects_id,
                        d.createddate AS suspects_createddate,
                        d.createdby AS suspects_createdby,
                        d.idcompany AS suspects_idcompany,
                        d.idbranch AS suspects_idbranch,
                        d.idlead AS suspects_idlead,
                        d.idleaddetail AS suspects_idleaddetail,
                        d.iduser AS suspects_iduser,
                        d.description AS suspects_description,
                        d.idstage AS suspects_idstage,
                        d.customerplanned AS suspects_customerplanned,
                        d.idcustomer AS suspects_idcustomer,
                        e.id AS suspectdetails_id,
                        e.idproduct AS suspectdetails_idproduct,
                        e.idsuspect AS suspectdetails_idsuspect,
                        e.quantity AS suspectdetails_quantity,
                        e.uom AS suspectdetails_uom,
                        e.transactionmodel AS suspectdetails_transactionmodel,
                        e.idstatus AS suspectdetails_idstatus,
                        e.odds AS suspectdetails_odds,
                        e.idsegment AS suspectdetails_idsegment,
                        f.id AS companies_id,
                        f.code AS companies_code,
                        f.name AS companies_name,
                        f.logo AS companies_logo,
                        g.id AS users_id,
                        g.nik AS users_nik,
                        g.firstname AS users_firstname,
                        g.lastname AS users_lastname,
                        g.mobile AS users_mobile,
                        g.email AS users_email,
                        h.id AS branches_id,
                        h.code AS branches_code,
                        h.name AS branches_name,
                        i.id AS customers_id,
                        i.name AS customers_name,
                        i.address AS customers_address,
                        i.idcity AS customers_idcity,
                        i.idcountry AS customers_idcountry,
                        i.postalcode AS customers_postalcode,
                        j.id AS stages_id,
                        j.code AS stages_code,
                        j.name AS stages_name,
                        k.id AS statuses_id,
                        k.idstage AS statuses_idstage,
                        k.code AS statuses_code,
                        k.name AS statuses_name,
                        l.id AS products_id,
                        l.name AS products_name,
                        l.uom AS products_uom,
                        l.specification AS products_specification,
                        m.id AS segments_id,
                        m.segment AS segments_segment,
                        m.subsegment AS segments_subsegment,
                        m.description AS segments_description,
                        n.id AS customertypes_id,
                        n.level1 AS customertypes_level1,
                        n.level2 AS customertypes_level2,
                        n.level3 AS customertypes_level3,
                        o.id AS leaddetails_id,
                        p.id AS leads_id,
						p.projectdescription AS leads_projectdescription,
                        p.projectname AS leads_projectname,
                        q.code AS cities_code,
                        q.name AS cities_name,
                        r.code AS countries_code,
                        r.name AS countries_name,
						s.id AS quotationtext_id,
						s.name AS quotationtext_name,
						s.description AS quotationtext_description
                FROM tdat_quotations a
                LEFT JOIN tdat_prospects b ON a.idprospect = b.id
                LEFT JOIN tdat_quotationtext c ON a.idquotationtext = c.id 
                LEFT JOIN tdat_suspects d ON b.idsuspect = d.id
                LEFT JOIN tdat_suspectdetails e ON b.idsuspectdetail = e.id
                LEFT JOIN tdat_companies f ON b.idcompany = f.id
                LEFT JOIN tdat_users g ON b.iduser = g.id
                LEFT JOIN tdat_branches h ON b.idbranch = h.id
                LEFT JOIN tdat_customers i ON b.idcustomer = i.id
                LEFT JOIN tdat_stages j ON b.idstage = j.id
                LEFT JOIN tdat_statuses k ON b.idstatus = k.id
                LEFT JOIN tdat_products l ON b.idproduct = l.id
                LEFT JOIN tdat_segments m ON b.idsegment = m.id
                LEFT JOIN tdat_customertypes n ON b.customertype = n.id
                LEFT JOIN tdat_leaddetails o ON d.idleaddetail = o.id
                LEFT JOIN tdat_leads p ON d.idlead = p.id
                LEFT JOIN tdat_cities q ON i.idcity = q.id
                LEFT JOIN tdat_countries r ON i.idcountry = r.id
				LEFT JOIN tdat_quotationtext s ON a.idquotationtext = s.id
                WHERE a.idprospect = " . $idprospect . "
                ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetailprospectaccessories($idprospect) {
        $sql = "SELECT	a.id AS quotations_id,
                        a.idprospect AS quotations_idprospect,
                        a.idquotationtext AS quotations_idquotationtext,
                        b.id AS prospects_id,
                        c.id AS prospectaccessories_id,
                        c.idaccessories AS prospectaccessories_idaccessories,
                        c.idprospect AS prospectaccessories_idprospect,
                        d.id AS accessories_id,
                        d.name AS accessories_name,
                        d.price AS accessories_price,
                        d.currency AS accessories_currency
                FROM tdat_quotations a
                LEFT JOIN tdat_prospects b ON a.idprospect = b.id
                LEFT JOIN tdat_prospectaccessories c ON b.id = c.idprospect
                LEFT JOIN tdat_accessories d ON c.idaccessories = d.id
                WHERE a.idprospect = " . $idprospect . " 
                ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetailcustomercp($idprospect) {
        $sql = "SELECT	a.id AS quotations_id,
                        a.idprospect AS quotations_idprospect,
                        a.idquotationtext AS quotations_idquotationtext,
                        b.id AS prospects_id,
                        b.idcustomer AS prospects_idcustomer,
                        c.id AS customers_id,
                        c.name AS customers_name,
                        d.id AS customercp_id,
                        d.firstname AS customercp_firstname,
                        d.lastname AS customercp_lastname,
                        d.gender AS customercp_gender,
                        d.birthdate AS customercp_birthdate,
                        d.phone AS customercp_phone,
                        d.ext AS customercp_ext,
                        d.mobile AS customercp_mobile,
                        d.email AS customercp_email,
                        d.position AS customercp_position,
                        d.hobby AS customercp_hobby,
                        d.idcustomer AS customercp_idcustomer
                FROM tdat_quotations a
                LEFT JOIN tdat_prospects b ON a.idprospect = b.id 
                LEFT JOIN tdat_customers c ON b.idcustomer = c.id
                LEFT JOIN tdat_customercp d ON b.id = d.idcustomer
                WHERE a.idprospect = " . $idprospect . "
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetailproductprices($idprospect) {
        $sql = "SELECT	a.id AS quotations_id,
                        a.idprospect AS quotations_idprospect,
                        a.idquotationtext AS quotations_idquotationtext,
                        b.id AS prospects_id,
                        b.idproduct AS prospects_idproduct,
                        c.id AS products_id,
                        c.name AS products_name,
                        c.uom AS products_uom,
                        c.specification AS products_specification,
                        c.idmodel AS models_id,
                        d.id AS productprices_id,
                        d.idproduct AS productprices_idproduct,
                        d.listprice AS productprices_listprice,
                        d.netprice AS productprices_netprice
                FROM tdat_quotations a
                LEFT JOIN tdat_prospects b ON a.idprospect = b.id	
                LEFT JOIN tdat_products c ON b.idproduct = c.id
                LEFT JOIN tdat_productprices d ON c.id = d.idproduct
                WHERE a.idprospect = " . $idprospect . "
                ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($data) {
        $query = $this->db->insert('tdat_quotations', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->update('tdat_quotations', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit2($data) {
        $this->db->where('idprospect', $data['idprospect']);
        $query = $this->db->update('tdat_quotations', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where('id', $data['id']);
        if ($this->db->delete("tdat_quotations")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>