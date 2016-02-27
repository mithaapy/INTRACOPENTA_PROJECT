<?php

class Model_branches extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT	a.id AS branches_id,
                        a.code AS branches_code,
                        a.name AS branches_name,
                        a.address AS branches_address,
                        a.idcity AS branches_idcity,
                        a.idcountry AS branches_idcountry,
                        a.phone AS branches_phone,
                        a.fax AS branches_fax,
                        a.email AS branches_email,
                        a.idcompany AS branches_idcompany,
                        b.id AS cities_id,
                        b.code AS cities_code,
                        b.name AS cities_name,
                        b.description AS cities_description,
                        b.idcountry AS countries_id,
                        c.id AS countries_id,
                        c.code AS countries_code,
                        c.name AS countries_name,
                        c.description AS countries_description,
                        d.id AS companies_id,
                        d.code AS companies_code,
                        d.name AS companies_name,
                        d.description AS companies_description
                FROM tdat_branches a
                LEFT JOIN tdat_cities b ON a.idcity = b.id
                LEFT JOIN tdat_countries c ON a.idcountry = c.id
                LEFT JOIN tdat_companies d ON a.idcompany = d.id
                ORDER BY a.id ASC";


        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS branches_id,
                        a.code AS branches_code,
                        a.name AS branches_name,
                        a.address AS branches_address,
                        a.idcity AS branches_idcity,
                        a.idcountry AS branches_idcountry,
                        a.phone AS branches_phone,
                        a.fax AS branches_fax,
                        a.email AS branches_email,
                        a.idcompany AS branches_idcompany,
                        b.id AS cities_id,
                        b.code AS cities_code,
                        b.name AS cities_name,
                        b.description AS cities_description,
                        b.idcountry AS cities_idcountry,
                        c.id AS countries_id,
                        c.code AS countries_code,
                        c.name AS countries_name,
                        c.description AS countries_description,
                        d.id AS companies_id,
                        d.code AS companies_code,
                        d.name AS companies_name,
                        d.description AS companies_description
                FROM tdat_branches a
                LEFT JOIN tdat_cities b ON a.idcity = b.id
                LEFT JOIN tdat_countries c ON a.idcountry = c.id
                LEFT JOIN tdat_companies d ON a.idcompany = d.id
                WHERE a.id = ".$id." ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'code' => $post['code'],
            'name' => $post['name'],
            'address' => $post['address'],
            'idcity' => $post['idcity'],
            'idcountry' => $post['idcountry'],
            'phone' => $post['phone'],
            'fax' => $post['fax'],
            'email' => $post['email'],
            'idcompany' => $post['idcompany']
        );
        $query = $this->db->insert('tdat_branches', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'code' => $post['code'],
            'name' => $post['name'],
            'address' => $post['address'],
            'idcity' => $post['idcity'],
            'idcountry' => $post['idcountry'],
            'phone' => $post['phone'],
            'fax' => $post['fax'],
            'email' => $post['email'],
            'idcompany' => $post['idcompany']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_branches', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_branches")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>