<?php

class Model_users extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT	a.id AS users_id,
                        a.nik AS users_nik,
                        a.username AS users_username,
                        a.password AS users_password,
                        a.firstname AS users_firstname,
                        a.lastname AS users_lastname,
                        a.gender AS users_gender,
                        a.birthdate AS users_birthdate,
                        a.phone AS users_phone,
                        a.mobile AS users_mobile,
                        a.email AS users_email,
                        a.pinbbm AS users_pinbbm,
                        a.idcompany AS users_idcompany,
                        a.idbranch AS users_idbranch,
                        a.idrole AS users_idrole,
                        a.idcountry AS users_idcountry,
                        a.idcity AS users_idcity,
                        a.picture AS users_picture,
                        a.active AS users_active,
                        b.id AS companies_id,
                        b.code AS companies_code,
                        b.name AS companies_name,
                        b.description AS companies_description,
                        c.id AS branches_id,
                        c.code AS branches_code,
                        c.name AS branches_name,
                        c.address AS branches_address,
                        c.idcity AS branches_idcity,
                        c.idcountry AS branches_idcountry,
                        c.phone AS branches_phone,
                        c.fax AS branches_fax,
                        c.email AS branches_email,
                        c.idcompany AS branches_idcompany,
                        d.id AS roles_id,
                        d.name AS roles_name,
                        d.description AS roles_description,
                        e.id AS countries_id,
                        e.code AS countries_code,
                        e.name AS countries_name,
                        e.description AS countries_description,
                        f.id AS cities_id,
                        f.code AS cities_code,
                        f.name AS cities_name,
                        f.description AS cities_description,
                        f.idcountry AS cities_id				
                FROM tdat_users a
                LEFT JOIN tdat_companies b ON a.idcompany = b.id
                LEFT JOIN tdat_branches c ON a.idbranch = c.id
                LEFT JOIN tdat_roles d ON a.idrole = d.id
                LEFT JOIN tdat_countries e ON a.idcountry = e.id
                LEFT JOIN tdat_cities f ON a.idcity = f.id
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS users_id,
                        a.nik AS users_nik,
                        a.username AS users_username,
                        a.password AS users_password,
                        a.firstname AS users_firstname,
                        a.lastname AS users_lastname,
                        a.gender AS users_gender,
                        a.birthdate AS users_birthdate,
                        a.phone AS users_phone,
                        a.mobile AS users_mobile,
                        a.email AS users_email,
                        a.pinbbm AS users_pinbbm,
                        a.idcompany AS users_idcompany,
                        a.idbranch AS users_idbranch,
                        a.idrole AS users_idrole,
                        a.idcountry AS users_idcountry,
                        a.idcity AS users_idcity,
                        a.picture AS users_picture,
                        a.active AS users_active,
                        b.id AS companies_id,
                        b.code AS companies_code,
                        b.name AS companies_name,
                        b.description AS companies_description,
                        c.id AS branches_id,
                        c.code AS branches_code,
                        c.name AS branches_name,
                        c.address AS branches_address,
                        c.idcity AS branches_idcity,
                        c.idcountry AS branches_idcountry,
                        c.phone AS branches_phone,
                        c.fax AS branches_fax,
                        c.email AS branches_email,
                        c.idcompany AS branches_idcompany,
                        d.id AS roles_id,
                        d.name AS roles_name,
                        d.description AS roles_description,
                        e.id AS countries_id,
                        e.code AS countries_code,
                        e.name AS countries_name,
                        e.description AS countries_description,
                        f.id AS cities_id,
                        f.code AS cities_code,
                        f.name AS cities_name,
                        f.description AS cities_description,
                        f.idcountry AS cities_id				
                FROM tdat_users a
                LEFT JOIN tdat_companies b ON a.idcompany = b.id
                LEFT JOIN tdat_branches c ON a.idbranch = c.id
                LEFT JOIN tdat_roles d ON a.idrole = d.id
                LEFT JOIN tdat_countries e ON a.idcountry = e.id
                LEFT JOIN tdat_cities f ON a.idcity = f.id
		WHERE a.id = '" . $id . "'
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewallsalesman() {
        $sql = "SELECT	a.id AS users_id,
                        a.nik AS users_nik,
                        a.username AS users_username,
                        a.password AS users_password,
                        a.firstname AS users_firstname,
                        a.lastname AS users_lastname,
                        a.gender AS users_gender,
                        a.birthdate AS users_birthdate,
                        a.phone AS users_phone,
                        a.mobile AS users_mobile,
                        a.email AS users_email,
                        a.pinbbm AS users_pinbbm,
                        a.idcompany AS users_idcompany,
                        a.idbranch AS users_idbranch,
                        a.idrole AS users_idrole,
                        a.idcountry AS users_idcountry,
                        a.idcity AS users_idcity,
                        a.picture AS users_picture,
                        a.active AS users_active,
                        b.id AS companies_id,
                        b.code AS companies_code,
                        b.name AS companies_name,
                        b.description AS companies_description,
                        c.id AS branches_id,
                        c.code AS branches_code,
                        c.name AS branches_name,
                        c.address AS branches_address,
                        c.idcity AS branches_idcity,
                        c.idcountry AS branches_idcountry,
                        c.phone AS branches_phone,
                        c.fax AS branches_fax,
                        c.email AS branches_email,
                        c.idcompany AS branches_idcompany,
                        d.id AS roles_id,
                        d.name AS roles_name,
                        d.description AS roles_description,
                        e.id AS countries_id,
                        e.code AS countries_code,
                        e.name AS countries_name,
                        e.description AS countries_description,
                        f.id AS cities_id,
                        f.code AS cities_code,
                        f.name AS cities_name,
                        f.description AS cities_description,
                        f.idcountry AS cities_id				
                FROM tdat_users a
                LEFT JOIN tdat_companies b ON a.idcompany = b.id
                LEFT JOIN tdat_branches c ON a.idbranch = c.id
                LEFT JOIN tdat_roles d ON a.idrole = d.id
                LEFT JOIN tdat_countries e ON a.idcountry = e.id
                LEFT JOIN tdat_cities f ON a.idcity = f.id
		WHERE a.idrole = 2
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'nik' => $post['nik'],
            'username' => $post['username'],
            'password' => $post['password'],
            'firstname' => $post['firstname'],
            'lastname' => $post['lastname'],
            'gender' => $post['gender'],
            'birthdate' => $post['birthdate'],
            'phone' => $post['phone'],
            'mobile' => $post['mobile'],
            'email' => $post['email'],
            'pinbbm' => $post['pinbbm'],
            'idcompany' => $post['idcompany'],
            'idbranch' => $post['idbranch'],
            'idrole' => $post['idrole'],
            'idcountry' => $post['idcountry'],
            'idcity' => $post['idcity'],
            'picture' => $post['picture'],
            'active' => $post['active']
        );
        $query = $this->db->insert('tdat_users', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'nik' => $post['nik'],
            'username' => $post['username'],
            'password' => $post['password'],
            'firstname' => $post['firstname'],
            'lastname' => $post['lastname'],
            'gender' => $post['gender'],
            'birthdate' => $post['birthdate'],
            'phone' => $post['phone'],
            'mobile' => $post['mobile'],
            'email' => $post['email'],
            'pinbbm' => $post['pinbbm'],
            'idcompany' => $post['idcompany'],
            'idbranch' => $post['idbranch'],
            'idrole' => $post['idrole'],
            'idcountry' => $post['idcountry'],
            'idcity' => $post['idcity'],
            'picture' => $post['picture'],
            'active' => $post['active']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_users', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_users")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function login($username, $password) {
        $sql = "SELECT	a.id AS users_id,
                        a.nik AS users_nik,
                        a.username AS users_username,
                        a.password AS users_password,
                        a.firstname AS users_firstname,
                        a.lastname AS users_lastname,
                        a.gender AS users_gender,
                        a.birthdate AS users_birthdate,
                        a.phone AS users_phone,
                        a.mobile AS users_mobile,
                        a.email AS users_email,
                        a.pinbbm AS users_pinbbm,
                        a.idcompany AS users_idcompany,
                        a.idbranch AS users_idbranch,
                        a.idrole AS users_idrole,
                        a.idcountry AS users_idcountry,
                        a.idcity AS users_idcity,
                        a.picture AS users_picture,
                        a.active AS users_active,
                        b.code AS companies_code,
                        b.name AS companies_name,
                        b.logo AS companies_logo,
                        c.code AS branches_code,
                        c.name AS branches_name,
                        d.name AS roles_name,
                        d.description AS roles_description,
                        e.code AS countries_code,
                        e.name AS countries_name,
                        f.code AS cities_code,
                        f.name AS cities_name			
                FROM tdat_users a
                LEFT JOIN tdat_companies b ON a.idcompany = b.id
                LEFT JOIN tdat_branches c ON a.idbranch = c.id
                LEFT JOIN tdat_roles d ON a.idrole = d.id
                LEFT JOIN tdat_countries e ON a.idcountry = e.id
                LEFT JOIN tdat_cities f ON a.idcity = f.id
		WHERE a.username = '" . $username . "' AND a.password = '" . $password . "'
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

}

?>