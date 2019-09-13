<?php
 class Main_model extends CI_Model
 {
      function can_login($username, $password)
      {
           $this->db->where('Username', $username);
           $this->db->where('Password', $password);
           $query = $this->db->get('users');
           //SELECT * FROM users WHERE Username = '$username' AND Password = '$password'
           if($query->num_rows() > 0)
           {
                return true;
           }
           else
           {
                return false;
           }
      }
 }
?>
