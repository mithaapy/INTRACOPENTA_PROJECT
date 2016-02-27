<?php

class Model_prospectalls extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

   public function viewallorderonhand() {
        $sql = "SELECT	a.id AS prospectalls_id,
						a.idprospect AS prospectalls_idprospect,
						a.customerpono AS prospectalls_customerpono,
						a.podate AS prospectalls_podate,
						a.dpdate AS prospectalls_dpdate,
						a.dpvalue AS prospectalls_dpvalue,
						a.bankcash AS prospectalls_bankcash,
						a.bankname AS prospectalls_bankname,
						a.leasename AS prospectalls_leasename,
						a.leasepono AS prospectalls_leasepono,
						a.leasevalue AS prospectalls_leasevalue,
						a.confirmdate AS prospectalls_confirmdate,
						a.deliverydate AS prospectalls_deliverydate,
						a.deliveryby AS prospectalls_deliveryby,
						a.deliveryno AS prospectalls_deliveryno,
						a.bastno AS prospectalls_bastno,
						a.incentiveno AS prospectalls_incentiveno,
						a.idstage AS prospectalls_idstage,
						b.id AS prospects_id,
                        b.idsuspect AS prospects_idsuspect,
                        b.idsuspectdetail AS prospects_idsuspectdetail,
						c.id AS stages_id,
						c.code AS stages_code,
						c.name AS stages_name,
						d.id AS users_id,
						d.nik AS users_nik,
						d.firstname AS users_firstname,
                        d.lastname AS users_lastname
				FROM tdat_prospectalls a
				LEFT JOIN tdat_prospects b ON a.idprospect = b.id
				LEFT JOIN tdat_stages c ON a.idstage = c.id
				LEFT JOIN tdat_users d ON b.createdby = d.id
				WHERE a.idstage = 4 
				ORDER BY a.id DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetailorderonhand($id = '') {
     $sql = "SELECT	a.id AS prospectalls_id,
						a.idprospect AS prospectalls_idprospect,
						a.customerpono AS prospectalls_customerpono,
						a.podate AS prospectalls_podate,
						a.dpdate AS prospectalls_dpdate,
						a.dpvalue AS prospectalls_dpvalue,
						a.bankcash AS prospectalls_bankcash,
						a.bankname AS prospectalls_bankname,
						a.leasename AS prospectalls_leasename,
						a.leasepono AS prospectalls_leasepono,
						a.leasevalue AS prospectalls_leasevalue,
						a.confirmdate AS prospectalls_confirmdate,
						a.deliverydate AS prospectalls_deliverydate,
						a.deliveryby AS prospectalls_deliveryby,
						a.deliveryno AS prospectalls_deliveryno,
						a.bastno AS prospectalls_bastno,
						a.incentiveno AS prospectalls_incentiveno,
						a.idstage AS prospectalls_idstage,
						b.id AS prospects_id,
                        b.idsuspect AS prospects_idsuspect,
                        b.idsuspectdetail AS prospects_idsuspectdetail,
						b.createdby AS prospects_createdby,
						c.id AS stages_id,
						c.code AS stages_code,
						c.name AS stages_name,
						d.id AS users_id,
						d.nik AS users_nik,
						d.firstname AS users_firstname,
                        d.lastname AS users_lastname
				FROM tdat_prospectalls a
				LEFT JOIN tdat_prospects b ON a.idprospect = b.id
				LEFT JOIN tdat_stages c ON a.idstage = c.id
				LEFT JOIN tdat_users d ON b.createdby = d.id
				WHERE a.id = ".$id." 
				ORDER BY a.id DESC";

        $query = $this->db->query($sql);
        return $query->result();
    }
	
	public function viewallverylikely() {
     $sql = "SELECT	a.id AS prospectalls_id,
						a.idprospect AS prospectalls_idprospect,
						a.customerpono AS prospectalls_customerpono,
						a.podate AS prospectalls_podate,
						a.dpdate AS prospectalls_dpdate,
						a.dpvalue AS prospectalls_dpvalue,
						a.bankcash AS prospectalls_bankcash,
						a.bankname AS prospectalls_bankname,
						a.leasename AS prospectalls_leasename,
						a.leasepono AS prospectalls_leasepono,
						a.leasevalue AS prospectalls_leasevalue,
						a.confirmdate AS prospectalls_confirmdate,
						a.deliverydate AS prospectalls_deliverydate,
						a.deliveryby AS prospectalls_deliveryby,
						a.deliveryno AS prospectalls_deliveryno,
						a.bastno AS prospectalls_bastno,
						a.incentiveno AS prospectalls_incentiveno,
						a.idstage AS prospectalls_idstage,
						b.id AS prospects_id,
                        b.idsuspect AS prospects_idsuspect,
                        b.idsuspectdetail AS prospects_idsuspectdetail,
						b.createdby AS prospects_createdby,
						c.id AS stages_id,
						c.code AS stages_code,
						c.name AS stages_name,
						d.id AS users_id,
						d.nik AS users_nik,
						d.firstname AS users_firstname,
                        d.lastname AS users_lastname
				FROM tdat_prospectalls a
				LEFT JOIN tdat_prospects b ON a.idprospect = b.id
				LEFT JOIN tdat_stages c ON a.idstage = c.id
				LEFT JOIN tdat_users d ON b.createdby = d.id
				WHERE a.idstage = 5 
				ORDER BY a.id DESC";

        $query = $this->db->query($sql);
        return $query->result();
    }
	
	public function viewallorderconfirmed() {
     $sql = "SELECT	a.id AS prospectalls_id,
						a.idprospect AS prospectalls_idprospect,
						a.customerpono AS prospectalls_customerpono,
						a.podate AS prospectalls_podate,
						a.dpdate AS prospectalls_dpdate,
						a.dpvalue AS prospectalls_dpvalue,
						a.bankcash AS prospectalls_bankcash,
						a.bankname AS prospectalls_bankname,
						a.leasename AS prospectalls_leasename,
						a.leasepono AS prospectalls_leasepono,
						a.leasevalue AS prospectalls_leasevalue,
						a.confirmdate AS prospectalls_confirmdate,
						a.deliverydate AS prospectalls_deliverydate,
						a.deliveryby AS prospectalls_deliveryby,
						a.deliveryno AS prospectalls_deliveryno,
						a.bastno AS prospectalls_bastno,
						a.incentiveno AS prospectalls_incentiveno,
						a.idstage AS prospectalls_idstage,
						b.id AS prospects_id,
                        b.idsuspect AS prospects_idsuspect,
                        b.idsuspectdetail AS prospects_idsuspectdetail,
						b.createdby AS prospects_createdby,
						c.id AS stages_id,
						c.code AS stages_code,
						c.name AS stages_name,
						d.id AS users_id,
						d.nik AS users_nik,
						d.firstname AS users_firstname,
                        d.lastname AS users_lastname
				FROM tdat_prospectalls a
				LEFT JOIN tdat_prospects b ON a.idprospect = b.id
				LEFT JOIN tdat_stages c ON a.idstage = c.id
				LEFT JOIN tdat_users d ON b.createdby = d.id
				WHERE a.idstage = 6 
				ORDER BY a.id DESC";

        $query = $this->db->query($sql);
        return $query->result();
    }
	
	public function viewdetailorderconfirmed($id = '') {
     $sql = "SELECT	a.id AS prospectalls_id,
						a.idprospect AS prospectalls_idprospect,
						a.customerpono AS prospectalls_customerpono,
						a.podate AS prospectalls_podate,
						a.dpdate AS prospectalls_dpdate,
						a.dpvalue AS prospectalls_dpvalue,
						a.bankcash AS prospectalls_bankcash,
						a.bankname AS prospectalls_bankname,
						a.leasename AS prospectalls_leasename,
						a.leasepono AS prospectalls_leasepono,
						a.leasevalue AS prospectalls_leasevalue,
						a.confirmdate AS prospectalls_confirmdate,
						a.deliverydate AS prospectalls_deliverydate,
						a.deliveryby AS prospectalls_deliveryby,
						a.deliveryno AS prospectalls_deliveryno,
						a.bastno AS prospectalls_bastno,
						a.incentiveno AS prospectalls_incentiveno,
						a.idstage AS prospectalls_idstage,
						b.id AS prospects_id,
                        b.idsuspect AS prospects_idsuspect,
                        b.idsuspectdetail AS prospects_idsuspectdetail,
						b.createdby AS prospects_createdby,
						c.id AS stages_id,
						c.code AS stages_code,
						c.name AS stages_name,
						d.id AS users_id,
						d.nik AS users_nik,
						d.firstname AS users_firstname,
                        d.lastname AS users_lastname
				FROM tdat_prospectalls a
				LEFT JOIN tdat_prospects b ON a.idprospect = b.id
				LEFT JOIN tdat_stages c ON a.idstage = c.id
				LEFT JOIN tdat_users d ON b.createdby = d.id
				WHERE a.id = ".$id." 
				ORDER BY a.id DESC";

        $query = $this->db->query($sql);
        return $query->result();
    }
	
	public function viewalldelivery() {
     $sql = "SELECT	a.id AS prospectalls_id,
						a.idprospect AS prospectalls_idprospect,
						a.customerpono AS prospectalls_customerpono,
						a.podate AS prospectalls_podate,
						a.dpdate AS prospectalls_dpdate,
						a.dpvalue AS prospectalls_dpvalue,
						a.bankcash AS prospectalls_bankcash,
						a.bankname AS prospectalls_bankname,
						a.leasename AS prospectalls_leasename,
						a.leasepono AS prospectalls_leasepono,
						a.leasevalue AS prospectalls_leasevalue,
						a.confirmdate AS prospectalls_confirmdate,
						a.deliverydate AS prospectalls_deliverydate,
						a.deliveryby AS prospectalls_deliveryby,
						a.deliveryno AS prospectalls_deliveryno,
						a.bastno AS prospectalls_bastno,
						a.incentiveno AS prospectalls_incentiveno,
						a.idstage AS prospectalls_idstage,
						b.id AS prospects_id,
                        b.idsuspect AS prospects_idsuspect,
                        b.idsuspectdetail AS prospects_idsuspectdetail,
						b.createdby AS prospects_createdby,
						c.id AS stages_id,
						c.code AS stages_code,
						c.name AS stages_name,
						d.id AS users_id,
						d.nik AS users_nik,
						d.firstname AS users_firstname,
                        d.lastname AS users_lastname
				FROM tdat_prospectalls a
				LEFT JOIN tdat_prospects b ON a.idprospect = b.id
				LEFT JOIN tdat_stages c ON a.idstage = c.id
				LEFT JOIN tdat_users d ON b.createdby = d.id
				WHERE a.idstage = 7 
				ORDER BY a.id DESC";

        $query = $this->db->query($sql);
        return $query->result();
    }
	
	public function insert($data) {
        $query = $this->db->insert('tdat_prospectalls', $data);
        $id = $this->db->insert_id();
        if ($query):
            return $id;
        else:
            return FALSE;
        endif;
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->update('tdat_prospectalls', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }
	
	 public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_prospectalls")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
	
?>