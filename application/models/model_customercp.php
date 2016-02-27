<?php

class Model_customercp extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall($idcustomer) {
        $sql = "SELECT	a.id AS customercp_id,
                        a.firstname AS customercp_firstname,
						a.lastname AS customercp_lastname,
                        a.gender AS customercp_gender,
						a.birthdate AS customercp_birthdate,
						a.phone AS customercp_phone,
                        a.ext AS customercp_ext,
						a.mobile AS customercp_mobile,
						a.email AS customercp_email,
						a.position AS customercp_position,
						a.hobby AS customercp_hobby,
                        a.idcustomer AS customercp_idcustomer,
                        b.id AS customers_id,
                        b.name AS customers_name
                FROM tdat_customercp a
                LEFT JOIN tdat_customers b
                ON a.idcustomer = b.id 
		WHERE a.idcustomer = " . $idcustomer . "
		ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS customercp_id,
                        a.firstname AS customercp_firstname,
                        a.lastname AS customercp_lastname,
                        a.gender AS customercp_gender,
                        a.birthdate AS customercp_birthdate,
                        a.phone AS customercp_phone,
                        a.ext AS customercp_ext,
                        a.mobile AS customercp_mobile,
                        a.email AS customercp_email,
                        a.position AS customercp_position,
                        a.hobby AS customercp_hobby,
                        a.idcustomer AS customercp_idcustomer,
                        b.id AS customers_id,
                        b.name AS customers_name
                FROM tdat_customercp a
                LEFT JOIN tdat_customers b ON a.idcustomer = b.id 
                WHERE a.id = " . $id . "
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($data) {
        $query = $this->db->insert('tdat_customercp', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $query = $this->db->update('tdat_customercp', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_customercp")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
