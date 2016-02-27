<?php

class Model_incentives extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT 	a.id AS incentives_id,
						a.idlead AS incentives_idlead,
						a.iduser AS incentives_iduser,
						a.value AS incentives_value,
						a.currency AS incentives_currency,
						b.id AS leads_id,
                        b.idsource AS leads_idsource,
						b.projectno AS leads_projectno,
                        b.createddate AS leads_createddate,
                        b.createdby AS leads_createdby,
                        b.idstage AS leads_idstage,
                        b.idcompany AS leads_idcompany,
                        b.idbranch AS leads_idbranch,
                        b.projectname AS leads_projectname,
                        b.projectdescription AS leads_projectdescription,
						c.id AS users_id,
                        c.nik AS users_nik,
                        c.firstname AS users_firstname,
                        c.lastname AS users_lastname
				FROM tdat_incentives a
				LEFT JOIN tdat_leads b ON a.idlead = b.id
				LEFT JOIN tdat_users c ON b.createdby = c.id
				ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT 	a.id AS incentives_id,
						a.idlead AS incentives_idlead,
						a.iduser AS incentives_iduser,
						a.value AS incentives_value,
						a.currency AS incentives_currency,
						b.id AS leads_id,
                        b.idsource AS leads_idsource,
						b.projectno AS leads_projectno,
                        b.createddate AS leads_createddate,
                        b.createdby AS leads_createdby,
                        b.idstage AS leads_idstage,
                        b.idcompany AS leads_idcompany,
                        b.idbranch AS leads_idbranch,
                        b.projectname AS leads_projectname,
                        b.projectdescription AS leads_projectdescription,
						c.id AS users_id,
                        c.nik AS users_nik,
                        c.firstname AS users_firstname,
                        c.lastname AS users_lastname
				FROM tdat_incentives a
				LEFT JOIN tdat_leads b ON a.idlead = b.id
				LEFT JOIN tdat_users c ON b.createdby = c.id
				WHERE a.id = " . $id . " 
				ORDER BY id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

}

?>
