<?php

class Model_competitions extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT 	a.id AS competitions_id,
                        a.idprospect AS competitions_idprospect,
                        a.competee1 AS competitions_competee1,
                        a.competee2 AS competitions_competee2,
                        a.competee3 AS competitions_competee3,
                        a.competee4 AS competitions_competee4,
                        a.probability AS competitions_probability,
                        a.competeewin AS competitions_competeewin,
						a.lossnotes AS competitions_lossnotes,
                        b.id AS prospects_id,
                        c.id AS competitors1_id,
                        c.name AS competitors1_name,
                        c.description AS competitors1_description,
                        c.strength AS competitors1_strength,
                        d.id AS competitors2_id,
                        d.name AS competitors2_name,
                        d.description AS competitors2_description,
                        d.strength AS competitors2_strength,
                        e.id AS competitors3_id,
                        e.name AS competitors3_name,
                        e.description AS competitors3_description,
                        e.strength AS competitors3_strength,
                        f.id AS competitors4_id,
                        f.name AS competitors4_name,
                        f.description AS competitors4_description,
                        f.strength AS competitors4_strength,
                        g.id AS competitorswin_id,
                        g.name AS competitorswin_name,
                        g.description AS competitorswin_description,
                        g.strength AS competitorswin_strength
                FROM tdat_competitions a 
                LEFT JOIN tdat_prospects b ON a.idprospect = b.id
                LEFT JOIN tdat_competitors c ON a.competee1 = c.id
                LEFT JOIN tdat_competitors d ON a.competee2 = d.id
                LEFT JOIN tdat_competitors e ON a.competee3 = e.id
                LEFT JOIN tdat_competitors f ON a.competee4 = f.id
                LEFT JOIN tdat_competitors g ON a.competeewin = g.id
                ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT 	a.id AS competitions_id,
                        a.idprospect AS competitions_idprospect,
                        a.competee1 AS competitions_competee1,
                        a.competee2 AS competitions_competee2,
                        a.competee3 AS competitions_competee3,
                        a.competee4 AS competitions_competee4,
                        a.probability AS competitions_probability,
                        a.competeewin AS competitions_competeewin,
						a.lossnotes AS competitions_lossnotes,
                        b.id AS prospects_id,
                        c.id AS competitors1_id,
                        c.name AS competitors1_name,
                        c.description AS competitors1_description,
                        c.strength AS competitors1_strength,
                        d.id AS competitors2_id,
                        d.name AS competitors2_name,
                        d.description AS competitors2_description,
                        d.strength AS competitors2_strength,
                        e.id AS competitors3_id,
                        e.name AS competitors3_name,
                        e.description AS competitors3_description,
                        e.strength AS competitors3_strength,
                        f.id AS competitors4_id,
                        f.name AS competitors4_name,
                        f.description AS competitors4_description,
                        f.strength AS competitors4_strength,
                        g.id AS competitorswin_id,
                        g.name AS competitorswin_name,
                        g.description AS competitorswin_description,
                        g.strength AS competitorswin_strength
                FROM tdat_competitions a 
                LEFT JOIN tdat_prospects b ON a.idprospect = b.id
                LEFT JOIN tdat_competitors c ON a.competee1 = c.id
                LEFT JOIN tdat_competitors d ON a.competee2 = d.id
                LEFT JOIN tdat_competitors e ON a.competee3 = e.id
                LEFT JOIN tdat_competitors f ON a.competee4 = f.id
                LEFT JOIN tdat_competitors g ON a.competeewin = g.id
                WHERE a.id = " . $id . " 
                ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function insert($data) {
        $query = $this->db->insert('tdat_competitions', $data);
        $id = $this->db->insert_id();
        if ($query):
            return $id;
        else:
            return FALSE;
        endif;
    }

    public function edit($data) {
        $update_comp=array(
            'idprospect'=>$data['idprospect'],
            'competee1'=>$data['competee1'],
            'competee2'=>$data['competee2'],
            'competee3'=>$data['competee3'],
            'competee4'=>$data['competee4'],
            'probability'=>$data['probability'],
            'competeewin'=>$data['competeewin'],
            'lossnotes'=>$data['lossnotes'],
           
            
        );
        $this->db->where('id', $data['id']);
        $query = $this->db->update('tdat_competitions', $update_comp);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_competitions")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
