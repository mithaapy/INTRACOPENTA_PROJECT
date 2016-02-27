<?php

class Model_cities extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT  a.id AS cities_id,
                        a.code AS cities_code,
                        a.name AS cities_name,
                        a.description AS cities_description,
                        a.idcountry AS cities_idcountry,
                        b.id AS countries_id,
                        b.code AS countries_code,
                        b.name AS countries_name,
                        b.description AS countries_description
                FROM tdat_cities a
                LEFT JOIN tdat_countries b ON a.idcountry = b.id 
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS cities_id,
                        a.code AS cities_code,
                        a.name AS cities_name,
                        a.description AS cities_description,
                        a.idcountry AS cities_idcountry,
                        b.id AS countries_id,
                        b.code AS countries_code,
                        b.name AS countries_name,
                        b.description AS countries_description
                FROM tdat_cities a
                LEFT JOIN tdat_countries b ON a.idcountry = b.id
                WHERE a.id = " . $id . "
                ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'code' => $post['code'],
            'name' => $post['name'],
            'description' => $post['description'],
            'idcountry' => $post['idcountry'],
        );
        $query = $this->db->insert('tdat_cities', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'idcountry' => $post['idcountry'],
            'code' => $post['code'],
            'name' => $post['name'],
            'description' => $post['description']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_cities', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_cities")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
