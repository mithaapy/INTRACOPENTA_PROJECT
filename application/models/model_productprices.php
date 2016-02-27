<?php

class Model_productprices extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function viewall() {
        $sql = "SELECT	a.id AS productprices_id,
                        a.idproduct AS productprices_idproduct,
                        a.listprice AS productprices_listprice,
                        a.netprice AS productprices_netprice,
                        a.idcountry AS productprices_idcountry,
                        a.idcity AS productprices_idcity,
                        a.validdatestart AS productprices_validdatestart,
                        a.validdateend AS productprices_validdateend,
                        a.currency AS productprices_currency,
                        a.active AS productprices_active,
                        b.id AS products_id,
                        b.name AS products_name,
                        b.uom AS products_uom,
                        b.specification AS products_specification,
                        b.idmodel AS models_id,
                        c.id AS cities_id,
                        c.code AS cities_code,
                        c.name AS cities_name,
                        c.description AS cities_description,
                        c.idcountry AS countries_id,
                        d.id AS countries_id,
                        d.code AS countries_code,
                        d.name AS countries_name,
                        d.description AS countries_description
                        FROM tdat_productprices a
                LEFT JOIN tdat_products b ON a.idproduct = b.id	
                LEFT JOIN tdat_cities c ON a.idcity = c.id
                LEFT JOIN tdat_countries d ON a.idcountry = d.id
                ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function viewdetail($id = '') {
        $sql = "SELECT	a.id AS productprices_id,
                        a.idproduct AS productprices_idproduct,
                        a.listprice AS productprices_listprice,
                        a.netprice AS productprices_netprice,
                        a.idcountry AS productprices_idcountry,
                        a.idcity AS productprices_idcity,
                        a.validdatestart AS productprices_validdatestart,
                        a.validdateend AS productprices_validdateend,
                        a.currency AS productprices_currency,
                        a.active AS productprices_active,
                        b.id AS products_id,
                        b.name AS products_name,
                        b.uom AS products_uom,
                        b.specification AS products_specification,
                        b.idmodel AS models_id,
                        c.id AS cities_id,
                        c.code AS cities_code,
                        c.name AS cities_name,
                        c.description AS cities_description,
                        c.idcountry AS countries_id,
                        d.id AS countries_id,
                        d.code AS countries_code,
                        d.name AS countries_name,
                        d.description AS countries_description
                        FROM tdat_productprices a
                LEFT JOIN tdat_products b ON a.idproduct = b.id	
                LEFT JOIN tdat_cities c ON a.idcity = c.id
                LEFT JOIN tdat_countries d ON a.idcountry = d.id
                WHERE a.id = " . $id . "
				ORDER BY a.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

	 public function viewproductpricesforquotation($id = '') {
        $sql = "SELECT	a.id AS productprices_id,
                        a.idproduct AS productprices_idproduct,
                        a.listprice AS productprices_listprice,
                        a.netprice AS productprices_netprice,
                        a.idcountry AS productprices_idcountry,
                        a.idcity AS productprices_idcity,
                        a.validdatestart AS productprices_validdatestart,
                        a.validdateend AS productprices_validdateend,
                        a.currency AS productprices_currency,
                        a.active AS productprices_active,
                        b.id AS products_id,
                        b.name AS products_name,
                        b.uom AS products_uom,
                        b.specification AS products_specification,
                        b.idmodel AS models_id,
                        c.id AS prospects_id,
                        c.quotationno AS prospects_quotationno,
                        c.idproduct AS prospects_idproduct,
                        c.productname AS prospects_productname,
                        c.quantity AS prospects_quantity,
						d.id AS quotations_id,
                        d.idprospect AS quotations_idprospect,
                        d.idquotationtext AS quotations_idquotationtext,
                        d.description AS quotations_description
                        FROM tdat_productprices a
                LEFT JOIN tdat_products b ON a.idproduct = b.id	
                LEFT JOIN tdat_prospects c ON a.idproduct = c.idproduct
                LEFT JOIN tdat_quotations d ON c.id = d.idprospect
                WHERE c.id = " . $id . "
				ORDER BY c.id ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }
	
    public function insert($post) {
        $data = array(
            'idproduct' => $post['idproduct'],
            'listprice' => $post['listprice'],
            'netprice' => $post['netprice'],
            'idcountry' => $post['idcountry'],
            'idcity' => $post['idcity'],
            'validdatestart' => $post['validdatestart'],
            'validdateend' => $post['validdateend'],
            'currency' => $post['currency'],
            'active' => $post['active']
        );
        $query = $this->db->insert('tdat_productprices', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function edit($post) {
        $data = array(
            'idproduct' => $post['idproduct'],
            'listprice' => $post['listprice'],
            'netprice' => $post['netprice'],
            'idcountry' => $post['idcountry'],
            'idcity' => $post['idcity'],
            'validdatestart' => $post['validdatestart'],
            'validdateend' => $post['validdateend'],
            'currency' => $post['currency'],
            'active' => $post['active']
        );
        $this->db->where('id', $post['id']);
        $query = $this->db->update('tdat_productprices', $data);
        if ($query):
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    public function delete($id) {
        $this->db->where("id", $id);
        if ($this->db->delete("tdat_productprices")) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
