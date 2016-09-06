<?php
class User extends CI_Model{
  function login($nama, $password){
    $this->db->select('id, username, userpass');
    $this->db->from('users');
    $this->db->where('username', $nama);
    $this->db->where('userpass', md5($password));
    $this->db->limit(1);

    $query = $this->db->get();
    if($query->num_rows() == 1){
      return $query->result();
    }
    else false;
  }
}
?>
