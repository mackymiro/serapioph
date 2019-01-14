<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	//check username
	public function email($email){
		$this->db->select('
                serapioph_users.email_address
                ')
            ->from('serapioph_users')
            ->where('email_address', $email);
    $q = $this->db->get();
    if($q->num_rows() ==1){
      return $q->result();
    }else{
      return false;
    }
	}
	
	//check login
	public function login($username, $password){
		 $sha_password = sha1($password);
         $this->db->select('
							serapioph_users.id,
							serapioph_users.username,
							serapioph_users.password,
							serapioph_users.is_approved
						')
					->from('serapioph_users')
					->where('serapioph_users.username', $username)
					->where('serapioph_users.password', $sha_password)
					->where('serapioph_users.is_approved =', 1);
		$query = $this->db->get();
		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}
	}
	
}
