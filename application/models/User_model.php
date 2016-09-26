<?php
class User_model extends CI_Model{
  public function __construct(){
    $this->DB1 = $this->load->database('default', TRUE);
  }

  public function get_all_user(){
    $query = $this->DB1->query("SELECT firstname,lastname,email from user inner join user_details");
    return $query->result_array();
  }

  public function get_user_details($id){
    $query = $this->DB1->query("SELECT * FROM user inner join user_details where user.id = $id");
    return $query->result_array();
  }
}
