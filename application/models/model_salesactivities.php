<?php

class Model_salesactivities extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT 	a.id AS salesactivities_id,
						a.idvisitschedule AS salesactivities_idvisitschedule,
						a.idlead AS salesactivities_idlead,
						a.idsuspect AS salesactivities_idsuspect,
						a.idprospect AS salesactivities_idprospect,
						a.iduser AS salesactivities_iduser,
						a.idcustomer AS salesactivities_idcustomer,
						a.datetimestart AS salesactivities_datetimestart,
						a.datetimeend AS salesactivities_datetimeend,
						a.idvisitpurpose AS salesactivities_idvisitpurpose,
						a.visitresult AS salesactivities_visitresult,
						a.nextaction AS salesactivities_nextaction,
						b.id AS visitschedules_id,
                        b.iduser AS visitschedules_iduser,
                        b.datetimestart AS visitschedules_datetimestart,
                        b.datetimeend AS visitschedules_datetimeend,
                        b.idcustomer AS visitschedules_idcustomer,
						c.id AS leads_id,
						c.projectno AS leads_projectno,
                        c.createddate AS leads_createddate,
                        c.createdby AS leads_createdby,
                        c.projectname AS leads_projectname,
						d.id AS suspects_id,
                        d.createddate AS suspects_createddate,
                        d.createdby AS suspects_createdby,
                        d.idcompany AS suspects_idcompany,
                        d.idbranch AS suspects_idbranch,
                        d.idlead AS suspects_idlead,
						e.id AS prospects_id,
                        e.idsuspect AS prospects_idsuspect,
                        e.idsuspectdetail AS prospects_idsuspectdetail,
						f.id AS users_id,
                        f.nik AS users_nik,
                        f.firstname AS users_firstname,
                        f.lastname AS users_lastname,
						g.id AS customers_id,
                        g.name AS customers_name,
						h.id AS visitpurposes_id,
                        h.name AS visitpurposes_name,
                        h.description AS visitpurposes_description
				FROM tdat_salesactivities a
				LEFT JOIN tdat_visitschedules b ON a.idvisitschedule = b.id
				LEFT JOIN tdat_leads c ON a.idlead = c.id
				LEFT JOIN tdat_suspects d ON a.idsuspect = d.id
				LEFT JOIN tdat_prospects e ON a.idprospect = e.id
				LEFT JOIN tdat_users f ON a.iduser = f.id
				LEFT JOIN tdat_customers g ON a.idcustomer = g.id
				LEFT JOIN tdat_visitpurposes h ON a.idvisitpurpose = h.id
				ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT 	a.id AS salesactivities_id,
						a.idvisitschedule AS salesactivities_idvisitschedule,
						a.idlead AS salesactivities_idlead,
						a.idsuspect AS salesactivities_idsuspect,
						a.idprospect AS salesactivities_idprospect,
						a.iduser AS salesactivities_iduser,
						a.idcustomer AS salesactivities_idcustomer,
						a.datetimestart AS salesactivities_datetimestart,
						a.datetimeend AS salesactivities_datetimeend,
						a.idvisitpurpose AS salesactivities_idvisitpurpose,
						a.visitresult AS salesactivities_visitresult,
						a.nextaction AS salesactivities_nextaction,
						b.id AS visitschedules_id,
                        b.iduser AS visitschedules_iduser,
                        b.datetimestart AS visitschedules_datetimestart,
                        b.datetimeend AS visitschedules_datetimeend,
                        b.idcustomer AS visitschedules_idcustomer,
						c.id AS leads_id,
						c.projectno AS leads_projectno,
                        c.createddate AS leads_createddate,
                        c.createdby AS leads_createdby,
                        c.projectname AS leads_projectname,
						d.id AS suspects_id,
                        d.createddate AS suspects_createddate,
                        d.createdby AS suspects_createdby,
                        d.idcompany AS suspects_idcompany,
                        d.idbranch AS suspects_idbranch,
                        d.idlead AS suspects_idlead,
						e.id AS prospects_id,
                        e.idsuspect AS prospects_idsuspect,
                        e.idsuspectdetail AS prospects_idsuspectdetail,
						f.id AS users_id,
                        f.nik AS users_nik,
                        f.firstname AS users_firstname,
                        f.lastname AS users_lastname,
						g.id AS customers_id,
                        g.name AS customers_name,
						h.id AS visitpurposes_id,
                        h.name AS visitpurposes_name,
                        h.description AS visitpurposes_description
				FROM tdat_salesactivities a
				LEFT JOIN tdat_visitschedules b ON a.idvisitschedule = b.id
				LEFT JOIN tdat_leads c ON a.idlead = c.id
				LEFT JOIN tdat_suspects d ON a.idsuspect = d.id
				LEFT JOIN tdat_prospects e ON a.idprospect = e.id
				LEFT JOIN tdat_users f ON a.iduser = f.id
				LEFT JOIN tdat_customers g ON a.idcustomer = g.id
				LEFT JOIN tdat_visitpurposes h ON a.idvisitpurpose = h.id
				WHERE a.id = " . $id . " 
				ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }
	
	public function insert($post) {
        $data = array(
            'idvisitschedule' => $post['idvisitschedule'],
            'idlead' => $post['idlead'],
            'idsuspect' => $post['idsuspect'],
            'idprospect' => $post['idprospect'],
            'iduser' => $post['iduser'],
            'idcustomer' => $post['idcustomer'],
			'datetimestart' => $post['datetimestart'],
			'datetimeend' => $post['datetimeend'],
			'idvisitpurpose' => $post['idvisitpurpose'],
			'visitresult' => $post['visitresult'],
			'nextaction' => $post['nextaction']
        );
        $query = $this->db->insert('tdat_salesactivities', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
             'idvisitschedule' => $post['idvisitschedule'],
            'idlead' => $post['idlead'],
            'idsuspect' => $post['idsuspect'],
            'idprospect' => $post['idprospect'],
            'iduser' => $post['iduser'],
            'idcustomer' => $post['idcustomer'],
			'datetimestart' => $post['datetimestart'],
			'datetimeend' => $post['datetimeend'],
			'idvisitpurpose' => $post['idvisitpurpose'],
			'visitresult' => $post['visitresult'],
			'nextaction' => $post['nextaction']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_salesactivities', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_salesactivities")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
