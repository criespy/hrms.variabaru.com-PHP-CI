<?php
class Sales_billing_model extends CI_Model {
  public function __construct() {
    //parent::__construct;
    $this->DB2 = $this->load->database('acumatica', TRUE); //koneksi ke database acumatica
  }

  public function get_salesbilling() {
    //if (!DB2) { echo 'Database tidak terhubung';}
    $refnbr = $this->input->post('refnbr');
    //$refnbr = 'VB/16/V/07886';
    $query = $this->DB2->query("SELECT * FROM ttARCol where RefNbr = '$refnbr'");
    if ($query->result_array() != null) {
      return $query->result_array();
    }
    else {
      //return $query->result_array();
      return $refnbr;
    }
  }

  public function release_salesbilling($refnbr) {
    $this->DB2->query("UPDATE ttARCol set Status = '0' where RefNbr = '$refnbr'");
    $query = $this->DB2->query("SELECT * FROM ttARCol where RefNbr = '$refnbr'");
    return $query->result_array();
  }
}
