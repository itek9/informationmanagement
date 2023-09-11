

<!--Getting Information of Users-->


<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Users_model extends CI_Model {
		
		
		public function getInfo(){
			$query = $this->db->get('users');
			return $query->result();
		}
		
		public function get_users_detail(){
            $sql = "SELECT serialNum, firstName, lastName, middleName,rank, afos ,gender, batchNo FROM users";
            $query = $this->db->query($sql);
			return $query->result_array();
        }

		function user_info($id){
			$this->db->select('*');
            $this->db->from('users');
            $this->db->where('id', $id);
            $objQuery = $this->db->get();
            return $objQuery->result_array();

		}
		
		public function updatePass($editData, $editID) {
            $this->db->where('id', $editID);
    
            if ($this->db->update('users', $editData)) {
                return true;
            } else {
                return false;
            }
        }

		public function check_pass($InpOldPass){
			if($this->db->where('password', $InpOldPass)){
				$bool=true;
			}
			return $bool;
		}
		
	
	}
?>