<?php

class Model_leads extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT  a.id AS leads_id,
                        a.idsource AS leads_idsource,
			a.projectno AS leads_projectno,
                        a.createddate AS leads_createddate,
                        a.createdby AS leads_createdby,
                        a.idstage AS leads_idstage,
                        a.idcompany AS leads_idcompany,
                        a.idbranch AS leads_idbranch,
                        a.projectname AS leads_projectname,
                        a.projectdescription AS leads_projectdescription,
                        a.projectstatus AS leads_projectstatus,
                        a.constdate AS leads_constdate,
                        a.constenddate AS leads_constenddate,
                        a.projectprovince AS leads_projectprovince,
                        a.projecttown AS leads_projecttown,
                        a.projectaddress AS leads_projectaddress,
                        a.projectcategory AS leads_projectcategory,
                        a.projectstage AS leads_projectstage,
                        a.architechdesigner AS leads_architechdesigner,
                        a.projectpublishdate AS leads_projectpublishdate,
                        a.devpropmanager AS leads_devpropmanager,
                        a.engineerconsultant AS leads_engineerconsultant,
                        a.maincontractor AS leads_maincontractor,
                        a.subcontractor AS leads_subcontractor,
                        a.projectvalue AS leads_projectvalue,
                        a.addressablevalue AS leads_addressablevalue,
                        a.quality AS leads_quality,
                        a.assigntype AS leads_assigntype,
                        b.id AS sources_id,
                        b.code AS sources_code,
                        b.name AS sources_name,
                        b.description AS sources_description,
                        c.id AS stages_id,
                        c.code AS stages_code,
                        c.name AS stages_name,
                        c.description AS stages_description,
                        d.id AS users_id,
                        d.nik AS users_nik,
                        d.firstname AS users_firstname,
                        d.lastname AS users_lastname
                FROM tdat_leads a
                LEFT JOIN tdat_sources b ON a.idsource = b.id
                LEFT JOIN tdat_stages c ON a.idstage = c.id
                LEFT JOIN tdat_users d ON a.createdby = d.id
                ORDER BY a.id DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function openbidding() {
        $sql = "SELECT  a.id AS leads_id,
                        a.id AS createdby,
                        a.idsource AS leads_idsource,
			a.projectno AS leads_projectno,
                        a.createddate AS leads_createddate,
                        a.createdby AS leads_createdby,
                        a.idstage AS leads_idstage,
                        a.idcompany AS leads_idcompany,
                        a.idbranch AS leads_idbranch,
                        a.projectname AS leads_projectname,
                        a.projectdescription AS leads_projectdescription,
                        a.projectstatus AS leads_projectstatus,
                        a.constdate AS leads_constdate,
                        a.constenddate AS leads_constenddate,
                        a.projectprovince AS leads_projectprovince,
                        a.projecttown AS leads_projecttown,
                        a.projectaddress AS leads_projectaddress,
                        a.projectcategory AS leads_projectcategory,
                        a.projectstage AS leads_projectstage,
                        a.architechdesigner AS leads_architechdesigner,
                        a.projectpublishdate AS leads_projectpublishdate,
                        a.devpropmanager AS leads_devpropmanager,
                        a.engineerconsultant AS leads_engineerconsultant,
                        a.maincontractor AS leads_maincontractor,
                        a.subcontractor AS leads_subcontractor,
                        a.projectvalue AS leads_projectvalue,
                        a.addressablevalue AS leads_addressablevalue,
                        a.quality AS leads_quality,
                        a.assigntype AS leads_assigntype,
                        b.id AS sources_id,
                        b.code AS sources_code,
                        b.name AS sources_name,
                        b.description AS sources_description,
                        c.id AS stages_id,
                        c.code AS stages_code,
                        c.name AS stages_name,
                        c.description AS stages_description,
                        d.id AS users_id,
                        d.nik AS users_nik,
                        d.firstname AS users_firstname,
                        d.lastname AS users_lastname
                FROM tdat_leads a
                LEFT JOIN tdat_sources b ON a.idsource = b.id
                LEFT JOIN tdat_stages c ON a.idstage = c.id
                LEFT JOIN tdat_users d ON a.createdby = d.id
                ORDER BY a.id DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function viewdetail($id = '') {
        $sql = "SELECT  a.id AS leads_id,
                        a.idsource AS leads_idsource,
			a.projectno AS leads_projectno,
                        a.createddate AS leads_createddate,
                        a.createdby AS leads_createdby,
                        a.idstage AS leads_idstage,
                        a.idcompany AS leads_idcompany,
                        a.idbranch AS leads_idbranch,
                        a.projectname AS leads_projectname,
                        a.projectdescription AS leads_projectdescription,
                        a.projectstatus AS leads_projectstatus,
                        a.constdate AS leads_constdate,
                        a.constenddate AS leads_constenddate,
                        a.projectprovince AS leads_projectprovince,
                        a.projecttown AS leads_projecttown,
                        a.projectaddress AS leads_projectaddress,
                        a.projectcategory AS leads_projectcategory,
                        a.projectstage AS leads_projectstage,
                        a.architechdesigner AS leads_architechdesigner,
                        a.projectpublishdate AS leads_projectpublishdate,
                        a.devpropmanager AS leads_devpropmanager,
                        a.engineerconsultant AS leads_engineerconsultant,
                        a.maincontractor AS leads_maincontractor,
                        a.subcontractor AS leads_subcontractor,
                        a.projectvalue AS leads_projectvalue,
                        a.addressablevalue AS leads_addressablevalue,
                        a.quality AS leads_quality,
                        a.assigntype AS leads_assigntype,
                        b.id AS sources_id,
                        b.code AS sources_code,
                        b.name AS sources_name,
                        b.description AS sources_description,
                        c.id AS stages_id,
                        c.code AS stages_code,
                        c.name AS stages_name,
                        c.description AS stages_description,
                        d.id AS users_id,
                        d.nik AS users_nik,
                        d.firstname AS users_firstname,
                        d.lastname AS users_lastname
                FROM tdat_leads a
                LEFT JOIN tdat_sources b ON a.idsource = b.id
                LEFT JOIN tdat_stages c ON a.idstage = c.id
                LEFT JOIN tdat_users d ON a.createdby = d.id
                WHERE a.id = " . $id . "
                ORDER BY a.createddate ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewexport($datestart, $dateend) {
        $sql = "SELECT  a.id AS leads_id,
                        a.idsource AS leads_idsource,
			a.projectno AS leads_projectno,
                        a.createddate AS leads_createddate,
                        a.createdby AS leads_createdby,
                        a.idstage AS leads_idstage,
                        a.idcompany AS leads_idcompany,
                        a.idbranch AS leads_idbranch,
                        a.projectname AS leads_projectname,
                        a.projectdescription AS leads_projectdescription,
                        a.projectstatus AS leads_projectstatus,
                        a.constdate AS leads_constdate,
                        a.constenddate AS leads_constenddate,
                        a.projectprovince AS leads_projectprovince,
                        a.projecttown AS leads_projecttown,
                        a.projectaddress AS leads_projectaddress,
                        a.projectcategory AS leads_projectcategory,
                        a.projectstage AS leads_projectstage,
                        a.architechdesigner AS leads_architechdesigner,
                        a.projectpublishdate AS leads_projectpublishdate,
                        a.devpropmanager AS leads_devpropmanager,
                        a.engineerconsultant AS leads_engineerconsultant,
                        a.maincontractor AS leads_maincontractor,
                        a.subcontractor AS leads_subcontractor,
                        a.projectvalue AS leads_projectvalue,
                        a.addressablevalue AS leads_addressablevalue,
                        a.quality AS leads_quality,
                        a.assigntype AS leads_assigntype,
                        b.id AS sources_id,
                        b.code AS sources_code,
                        b.name AS sources_name,
                        b.description AS sources_description,
                        c.id AS stages_id,
                        c.code AS stages_code,
                        c.name AS stages_name,
                        c.description AS stages_description,
                        d.id AS users_id,
                        d.nik AS users_nik,
                        d.firstname AS users_firstname,
                        d.lastname AS users_lastname
                FROM tdat_leads a
                LEFT JOIN tdat_sources b ON a.idsource = b.id
                LEFT JOIN tdat_stages c ON a.idstage = c.id
                LEFT JOIN tdat_users d ON a.createdby = d.id
                WHERE a.createddate between '".$datestart."' and '".$dateend."'
                ORDER BY a.createddate DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function insert($data) {
       
        $query = $this->db->insert('tdat_leads', $data);
        $id = $this->db->insert_id();
        if ($query):
            return $id;
        else:
            return FALSE;
        endif;
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->update('tdat_leads', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_leads")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>