<?php

class Model_statuses extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT	a.id AS statuses_id,
                                a.idstage AS statuses_idstage,
                                a.code AS statuses_code,
                                a.name AS statuses_name,
                                a.description AS statuses_description,
                                b.id AS stages_id,
                                b.code AS stages_code,
                                b.name AS stages_name,
                                b.description AS stages_description
                        FROM tdat_statuses a
                        LEFT JOIN tdat_stages b
                        ON a.idstage = b.id ORDER BY a.id ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS statuses_id,
                                a.idstage AS statuses_idstage,
                                a.code AS statuses_code,
                                a.name AS statuses_name,
                                a.description AS statuses_description,
                                b.id AS stages_id,
                                b.code AS stages_code,
                                b.name AS stages_name,
                                b.description AS stages_description
                        FROM tdat_statuses a
                        LEFT JOIN tdat_stages b ON a.idstage = b.id 
						WHERE a.id = " . $id . "
						ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($post) {
        $data = array(
            'idstage' => $post['idstage'],
            'code' => $post['code'],
            'name' => $post['name'],
            'description' => $post['description']
        );
        $query = $this->db->insert('tdat_statuses', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'idstage' => $post['idstage'],
            'code' => $post['code'],
            'name' => $post['name'],
            'description' => $post['description']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_statuses', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_statuses")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function join() {
        $sql = "SELECT	a.idstage, 
						b.name AS stage_name,
						b.id
			 FROM tdat_statuses a
			 INNER JOIN tdat_stages b
			 ON  a.idstage = b.id";

        $this->db->where('id', $post['id']);
        $query = $this->db->join('tdat_statuses', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

}

?>