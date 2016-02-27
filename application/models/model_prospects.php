<?php

class Model_prospects extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT	a.id AS prospects_id,
                        a.idsuspect AS prospects_idsuspect,
                        a.idsuspectdetail AS prospects_idsuspectdetail,
                        a.quotationno AS prospects_quotationno,
                        a.createddate AS prospects_createddate,
                        a.createdby AS prospects_createdby,
                        a.idcompany AS prospects_idcompany,
                        a.iduser AS prospects_iduser,
                        a.idbranch AS prospects_idbranch,
                        a.idcustomer AS prospects_idcustomer,
                        a.description AS prospects_description,
                        a.startdate AS prospects_startdate,
                        a.expireddate AS prospects_expireddate,
                        a.currency AS prospects_currency,
                        a.idstage AS prospects_idstage,
                        a.approveddate AS prospects_approveddate,
                        a.approvedby AS prospects_approvedby,
                        a.idstatus AS prospects_idstatus,
                        a.idproduct AS prospects_idproduct,
                        a.productname AS prospects_productname,
                        a.quantity AS prospects_quantity,
                        a.uom AS prospects_uom,
                        a.unitvalue AS prospects_unitvalue,
                        a.transactionmodel AS prospects_transactionmodel,
                        a.decisiondate AS prospects_decisiondate,
                        a.expecteddeliverydate AS prospects_expecteddeliverydate,
                        a.customertype AS prospects_customertype,
                        a.level2 AS prospects_level2,
                        a.webpid AS prospects_webpid,
                        a.idsegment AS prospects_idsegment,
                        a.odds AS prospects_odds,
                        b.id AS suspects_id,
                        b.createddate AS suspects_createddate,
                        b.createdby AS suspects_createdby,
                        b.idcompany AS suspects_idcompany,
                        b.idbranch AS suspects_idbranch,
                        b.idlead AS suspects_idlead,
                        b.idleaddetail AS suspects_idleaddetail,
                        b.iduser AS suspects_iduser,
                        b.description AS suspects_description,
                        b.idstage AS suspects_idstage,
                        b.customerplanned AS suspects_customerplanned,
                        b.idcustomer AS suspects_idcustomer,
                        c.id AS suspectdetails_id,
                        c.idproduct AS suspectdetails_idproduct,
                        c.idsuspect AS suspectdetails_idsuspect,
                        c.quantity AS suspectdetails_quantity,
                        c.uom AS suspectdetails_uom,
                        c.transactionmodel AS suspectdetails_transactionmodel,
                        c.idstatus AS suspectdetails_idstatus,
                        c.odds AS suspectdetails_odds,
                        c.idsegment AS suspectdetails_idsegment,
                        d.id AS companies_id,
                        d.code AS companies_code,
                        d.name AS companies_name,
                        e.id AS users1_id,
                        e.nik AS users1_nik,
                        e.firstname AS users1_firstname,
                        e.lastname AS users1_lastname,
                        f.id AS branches_id,
                        f.code AS branches_code,
                        f.name AS branches_name,
                        g.id AS customers_id,
                        g.name AS customers_name,
                        h.id AS stages_id,
                        h.code AS stages_code,
                        h.name AS stages_name,
                        i.id AS statuses_id,
                        i.idstage AS statuses_idstage,
                        i.code AS statuses_code,
                        i.name AS statuses_name,
                        j.id AS products_id,
                        j.name AS products_name,
                        j.uom AS products_uom,
                        j.specification AS products_specification,
                        k.id AS segments_id,
                        k.segment AS segments_segment,
                        k.subsegment AS segments_subsegment,
                        k.description AS segments_description,
                        l.id AS customertypes_id,
                        l.level1 AS customertypes_level1,
                        l.level2 AS customertypes_level2,
                        l.level3 AS customertypes_level3,
                        m.id AS leaddetails_id,
                        n.id AS leads_id,
                        n.projectname AS leads_projectname,
						n.projectdescription AS leads_projectdescription,
                        o.id AS users2_id,
                        o.nik AS users2_nik,
                        o.firstname AS users2_firstname,
                        o.lastname AS users2_lastname,
                        p.id AS users3_id,
                        p.nik AS users3_nik,
                        p.firstname AS users3_firstname,
                        p.lastname AS users3_lastname,
                        q.id AS quotations_id,
                        q.idprospect AS quotations_idprospect,
                        q.idquotationtext AS quotations_idquotationtext,
                        q.description AS quotations_description,
						r.id AS prospectalls_id,
						r.idprospect AS prospectalls_idprospect,
						r.customerpono AS prospectalls_customerpono,
						r.podate AS prospectalls_podate,
						s.id AS competitions_id,
						s.idprospect AS competitions_idprospect,
						s.lossnotes AS competitions_lossnotes
		FROM tdat_prospects a
		LEFT JOIN tdat_suspects b ON a.idsuspect = b.id
                LEFT JOIN tdat_suspectdetails c ON a.idsuspectdetail = c.id
                LEFT JOIN tdat_companies d ON a.idcompany = d.id
                LEFT JOIN tdat_users e ON a.iduser = e.id
                LEFT JOIN tdat_branches f ON a.idbranch = f.id
                LEFT JOIN tdat_customers g ON a.idcustomer = g.id
                LEFT JOIN tdat_stages h ON a.idstage = h.id
                LEFT JOIN tdat_statuses i ON a.idstatus = i.id
                LEFT JOIN tdat_products j ON a.idproduct = j.id
                LEFT JOIN tdat_segments k ON a.idsegment = k.id
                LEFT JOIN tdat_customertypes l ON a.customertype = l.id
                LEFT JOIN tdat_leaddetails m ON b.idleaddetail = m.id
                LEFT JOIN tdat_leads n ON b.idlead = n.id
                LEFT JOIN tdat_users o ON a.createdby = o.id
                LEFT JOIN tdat_users p ON a.approvedby = p.id
                LEFT JOIN tdat_quotations q ON a.id = q.idprospect
				LEFT JOIN tdat_prospectalls r ON a.id = r.idprospect
				LEFT JOIN tdat_competitions s ON a.id = s.idprospect
                ORDER BY a.id DESC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS prospects_id,
                        a.idsuspect AS prospects_idsuspect,
                        a.idsuspectdetail AS prospects_idsuspectdetail,
                        a.quotationno AS prospects_quotationno,
                        a.createddate AS prospects_createddate,
                        a.createdby AS prospects_createdby,
                        a.idcompany AS prospects_idcompany,
                        a.iduser AS prospects_iduser,
                        a.idbranch AS prospects_idbranch,
                        a.idcustomer AS prospects_idcustomer,
                        a.description AS prospects_description,
                        a.startdate AS prospects_startdate,
                        a.expireddate AS prospects_expireddate,
                        a.currency AS prospects_currency,
                        a.idstage AS prospects_idstage,
                        a.approveddate AS prospects_approveddate,
                        a.approvedby AS prospects_approvedby,
                        a.idstatus AS prospects_idstatus,
                        a.idproduct AS prospects_idproduct,
                        a.productname AS prospects_productname,
                        a.quantity AS prospects_quantity,
                        a.uom AS prospects_uom,
                        a.unitvalue AS prospects_unitvalue,
                        a.transactionmodel AS prospects_transactionmodel,
                        a.decisiondate AS prospects_decisiondate,
                        a.expecteddeliverydate AS prospects_expecteddeliverydate,
                        a.customertype AS prospects_customertype,
                        a.level2 AS prospects_level2,
                        a.webpid AS prospects_webpid,
                        a.idsegment AS prospects_idsegment,
                        a.odds AS prospects_odds,
                        b.id AS suspects_id,
                        b.createddate AS suspects_createddate,
                        b.createdby AS suspects_createdby,
                        b.idcompany AS suspects_idcompany,
                        b.idbranch AS suspects_idbranch,
                        b.idlead AS suspects_idlead,
                        b.idleaddetail AS suspects_idleaddetail,
                        b.iduser AS suspects_iduser,
                        b.description AS suspects_description,
                        b.idstage AS suspects_idstage,
                        b.customerplanned AS suspects_customerplanned,
                        b.idcustomer AS suspects_idcustomer,
                        c.id AS suspectdetails_id,
                        c.idproduct AS suspectdetails_idproduct,
                        c.idsuspect AS suspectdetails_idsuspect,
                        c.quantity AS suspectdetails_quantity,
                        c.uom AS suspectdetails_uom,
                        c.transactionmodel AS suspectdetails_transactionmodel,
                        c.idstatus AS suspectdetails_idstatus,
                        c.odds AS suspectdetails_odds,
                        c.idsegment AS suspectdetails_idsegment,
                        d.id AS companies_id,
                        d.code AS companies_code,
                        d.name AS companies_name,
                        e.id AS users1_id,
                        e.nik AS users1_nik,
                        e.firstname AS users1_firstname,
                        e.lastname AS users1_lastname,
                        f.id AS branches_id,
                        f.code AS branches_code,
                        f.name AS branches_name,
                        g.id AS customers_id,
                        g.name AS customers_name,
                        h.id AS stages_id,
                        h.code AS stages_code,
                        h.name AS stages_name,
                        i.id AS statuses_id,
                        i.idstage AS statuses_idstage,
                        i.code AS statuses_code,
                        i.name AS statuses_name,
                        j.id AS products_id,
                        j.name AS products_name,
                        j.uom AS products_uom,
                        j.specification AS products_specification,
                        k.id AS segments_id,
                        k.segment AS segments_segment,
                        k.subsegment AS segments_subsegment,
                        k.description AS segments_description,
                        l.id AS customertypes_id,
                        l.level1 AS customertypes_level1,
                        l.level2 AS customertypes_level2,
                        l.level3 AS customertypes_level3,
                        m.id AS leaddetails_id,
                        n.id AS leads_id,
                        n.projectname AS leads_projectname,
						n.projectdescription AS leads_projectdescription,
                        o.id AS users2_id,
                        o.nik AS users2_nik,
                        o.firstname AS users2_firstname,
                        o.lastname AS users2_lastname,
                        p.id AS users3_id,
                        p.nik AS users3_nik,
                        p.firstname AS users3_firstname,
                        p.lastname AS users3_lastname,
                        q.id AS quotations_id,
                        q.idprospect AS quotations_idprospect,
                        q.idquotationtext AS quotations_idquotationtext,
                        q.description AS quotations_description,
						r.id AS prospectalls_id,
						r.idprospect AS prospectalls_idprospect,
						r.customerpono AS prospectalls_customerpono,
						r.podate AS prospectalls_podate,
						s.id AS competitions_id,
						s.idprospect AS competitions_idprospect,
						s.lossnotes AS competitions_lossnotes
		FROM tdat_prospects a
		LEFT JOIN tdat_suspects b ON a.idsuspect = b.id
                LEFT JOIN tdat_suspectdetails c ON a.idsuspectdetail = c.id
                LEFT JOIN tdat_companies d ON a.idcompany = d.id
                LEFT JOIN tdat_users e ON a.iduser = e.id
                LEFT JOIN tdat_branches f ON a.idbranch = f.id
                LEFT JOIN tdat_customers g ON a.idcustomer = g.id
                LEFT JOIN tdat_stages h ON a.idstage = h.id
                LEFT JOIN tdat_statuses i ON a.idstatus = i.id
                LEFT JOIN tdat_products j ON a.idproduct = j.id
                LEFT JOIN tdat_segments k ON a.idsegment = k.id
                LEFT JOIN tdat_customertypes l ON a.customertype = l.id
                LEFT JOIN tdat_leaddetails m ON b.idleaddetail = m.id
                LEFT JOIN tdat_leads n ON b.idlead = n.id
                LEFT JOIN tdat_users o ON a.createdby = o.id
                LEFT JOIN tdat_users p ON a.approvedby = p.id
                LEFT JOIN tdat_quotations q ON a.id = q.idprospect
				LEFT JOIN tdat_prospectalls r ON a.id = r.idprospect
				LEFT JOIN tdat_competitions s ON a.id = s.idprospect
		WHERE a.id = " . $id . "
                ORDER BY a.id DESC";

        $query = $this->db->query($sql);
        return $query->result();
    }
	
	public function viewloss() {
		 $sql = "SELECT	a.id AS prospects_id,
                        a.idsuspect AS prospects_idsuspect,
                        a.idsuspectdetail AS prospects_idsuspectdetail,
                        a.createdby AS prospects_createdby,
                        a.idcompany AS prospects_idcompany,
                        a.iduser AS prospects_iduser,
                        a.idbranch AS prospects_idbranch,
                        a.idstage AS prospects_idstage,
                        a.approveddate AS prospects_approveddate,
                        a.approvedby AS prospects_approvedby,
                        a.idstatus AS prospects_idstatus,
                        b.id AS suspects_id,
                        b.createddate AS suspects_createddate,
                        b.createdby AS suspects_createdby,
                        b.idcompany AS suspects_idcompany,
                        b.idbranch AS suspects_idbranch,
                        b.idlead AS suspects_idlead,
                        b.idleaddetail AS suspects_idleaddetail,
                        b.iduser AS suspects_iduser,
                        b.description AS suspects_description,
                        b.idstage AS suspects_idstage,
                        b.customerplanned AS suspects_customerplanned,
                        b.idcustomer AS suspects_idcustomer,
                        c.id AS suspectdetails_id,
                        c.idproduct AS suspectdetails_idproduct,
                        c.idsuspect AS suspectdetails_idsuspect,
                        c.quantity AS suspectdetails_quantity,
                        c.uom AS suspectdetails_uom,
                        c.transactionmodel AS suspectdetails_transactionmodel,
                        c.idstatus AS suspectdetails_idstatus,
                        c.odds AS suspectdetails_odds,
                        c.idsegment AS suspectdetails_idsegment,
                        d.id AS companies_id,
                        d.code AS companies_code,
                        d.name AS companies_name,
                        e.id AS users1_id,
                        e.nik AS users1_nik,
                        e.firstname AS users1_firstname,
                        e.lastname AS users1_lastname,
                        f.id AS branches_id,
                        f.code AS branches_code,
                        f.name AS branches_name,
                        g.id AS customers_id,
                        g.name AS customers_name,
                        h.id AS stages_id,
                        h.code AS stages_code,
                        h.name AS stages_name,
                        i.id AS statuses_id,
                        i.idstage AS statuses_idstage,
                        i.code AS statuses_code,
                        i.name AS statuses_name,
                        j.id AS products_id,
                        j.name AS products_name,
                        j.uom AS products_uom,
                        j.specification AS products_specification,
                        k.id AS segments_id,
                        k.segment AS segments_segment,
                        k.subsegment AS segments_subsegment,
                        k.description AS segments_description,
                        l.id AS customertypes_id,
                        l.level1 AS customertypes_level1,
                        l.level2 AS customertypes_level2,
                        l.level3 AS customertypes_level3,
                        m.id AS leaddetails_id,
                        n.id AS leads_id,
                        n.projectname AS leads_projectname,
						n.projectdescription AS leads_projectdescription,
                        o.id AS users2_id,
                        o.nik AS users2_nik,
                        o.firstname AS users2_firstname,
                        o.lastname AS users2_lastname,
                        p.id AS users3_id,
                        p.nik AS users3_nik,
                        p.firstname AS users3_firstname,
                        p.lastname AS users3_lastname,
                        q.id AS quotations_id,
                        q.idprospect AS quotations_idprospect,
                        q.idquotationtext AS quotations_idquotationtext,
                        q.description AS quotations_description,
						r.id AS prospectalls_id,
						r.idprospect AS prospectalls_idprospect,
						r.customerpono AS prospectalls_customerpono,
						r.podate AS prospectalls_podate,
						s.id AS competitions_id,
						s.idprospect AS competitions_idprospect,
						s.lossnotes AS competitions_lossnotes
		FROM tdat_prospects a
		LEFT JOIN tdat_suspects b ON a.idsuspect = b.id
                LEFT JOIN tdat_suspectdetails c ON a.idsuspectdetail = c.id
                LEFT JOIN tdat_companies d ON a.idcompany = d.id
                LEFT JOIN tdat_users e ON a.iduser = e.id
                LEFT JOIN tdat_branches f ON a.idbranch = f.id
                LEFT JOIN tdat_customers g ON a.idcustomer = g.id
                LEFT JOIN tdat_stages h ON a.idstage = h.id
                LEFT JOIN tdat_statuses i ON a.idstatus = i.id
                LEFT JOIN tdat_products j ON a.idproduct = j.id
                LEFT JOIN tdat_segments k ON a.idsegment = k.id
                LEFT JOIN tdat_customertypes l ON a.customertype = l.id
                LEFT JOIN tdat_leaddetails m ON b.idleaddetail = m.id
                LEFT JOIN tdat_leads n ON b.idlead = n.id
                LEFT JOIN tdat_users o ON a.createdby = o.id
                LEFT JOIN tdat_users p ON a.approvedby = p.id
                LEFT JOIN tdat_quotations q ON a.id = q.idprospect
				LEFT JOIN tdat_prospectalls r ON a.id = r.idprospect
				LEFT JOIN tdat_competitions s ON a.id = s.idprospect
				WHERE a.idstage = 8
                ORDER BY a.id DESC";
	}

    public function insert($data) {
        $query = $this->db->insert('tdat_prospects', $data);
        $id = $this->db->insert_id();
        if ($query):
            return $id;
        else:
            return FALSE;
        endif;
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->update('tdat_prospects', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit2($data) {
        $this->db->where('idsuspectdetail', $data['idsuspectdetail']);
        $query = $this->db->update('tdat_prospects', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where('id', $data['id']);
        if ($this->db->delete("tdat_prospects")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>