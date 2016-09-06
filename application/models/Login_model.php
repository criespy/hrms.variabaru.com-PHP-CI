<?php
class Login_model extends CI_Model{
  public function __construct(){
    parent::__construct();
    $this->DB1 = $this->load->database('default', TRUE); //konek database lokal
    //$this->DB2 = $this->load->database('acumatica', TRUE); //konek database acumatica, ini mau dipindah ke model sendiri
  }


  var $table = 'user';

  public function cek_user($username, $password){
    $query = $this->DB1->get_where($this->table, array('username' => $username, 'userpass' => md5($password)), 1, 0);
    if($query->num_rows() > 0){
      return TRUE;
    }
    else{
      return FALSE;
    }
  }
}
