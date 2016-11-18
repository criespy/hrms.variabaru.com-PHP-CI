<?php
class Barcode_model extends CI_Model{

  public function __construct(){
    $this->load->database('default');
  }

  public function get_all_barcode($jml_barcode, $page){
    $query = $this->db->get('barcode', $jml_barcode, $page);//query("SELECT * from barcode");
    return $query->result_array();
  }

  public function get_barcode($id){
    $query = $this->db->query("SELECT * from barcode where id = $id");
    return $query->result_array();
  }
}
