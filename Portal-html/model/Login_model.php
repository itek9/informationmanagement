

<!--Database Auth -->


<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Login_model extends CI_Model {
		
		
		function check_user($email, $password){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email', $email);
			$this->db->where('password', $password);
			$query = $this->db->get();
			return $query;

		}
		
		function user_info($email){
			
			#$sql = ("SELECT * FROM users WHERE email LIKE '$email'");

			#$query = $this->db->query($sql, array($email));
			$query = $this->db->get_where("users", array("email", $email));
			$res = $query->row_array();
			return $res;
	
			
			
			
		}
	
	}
?>