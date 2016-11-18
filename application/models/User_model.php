<?php
class User_model extends CI_Model{
  public function __construct(){
    $this->DB1 = $this->load->database('default', TRUE);
  }

  public function get_all_user(){
    $query = $this->DB1->query(
    "SELECT user.id,firstname,lastname,email
    FROM user inner join user_details
    WHERE user.id = user_details.id"
    );
    return $query->result_array();
  }

  public function get_user_details($userid){
    $query = $this->DB1->query(
    "SELECT username, firstname, lastname, email, privilege, picture
     FROM user inner join user_details
     WHERE user.id = user_details.id AND user.id = '$userid'"
    );
    return $query->result_array();
  }

  public function get_user_status($data){
    $username = $data['username'];
    $query = $this->DB1->query(
    "SELECT firstname, lastname, picture
    FROM user inner join user_details
    WHERE  user.id = user_details.id AND user.username = '$username'"
    );
    return $query->result_array();
    }

  public function create_user(){
    //$query = $this->DB1->query(
    //"INSERT INTO user (username,userpass,email,privilege)
    //VALUES ($)
    //)
  }

}
