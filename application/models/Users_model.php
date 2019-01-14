<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model{
	//getRandomCode
	public function getRandomCode($randomCode){
		return $this->db->get_where('serapioph_users', array('random_code'=>$randomCode))->row_object();
	}
	
	
	//getCategory
	public function getCategory(){
		return array(
			1 =>'Trainings',
			2 =>'Review',
			3 =>'Manning',
			4 =>'Shipboard Training',
			5 =>'Practical Assesment',
			6 =>'Others'
		);
	}
	
	//getAllUser
	public function getAllUser(){
		return $this->db->select('
							serapioph_users.id,
							serapioph_users.members_number,
							serapioph_users.first_name,
							serapioph_users.middle_name,
							serapioph_users.last_name,
							serapioph_users.address,
							serapioph_users.contact_number,
							serapioph_users.reference_person,
							serapioph_users.email_address,
							serapioph_users.filename,
							serapioph_users.is_approved
							')
					->from('serapioph_users')
					->where('is_approved =', 0)
					->get()->result_object();
	}
	
	//getUserInfo
	public function getUserInfo($id){
		return $this->db->get_where('serapioph_users', array('id'=>$id))->row_object();
	}
	
	
	//getStauts
	public function getStatus($id){
		return $this->db->get_where('serapioph_users', array('id'=> $id))->row_object();
	}
	
	//check email
	public function email($email){
		$this->db->select('
						serapioph_users.email_address
						')
				  ->from('serapioph_users')
			      ->where('email_address', $email);
		$q = $this->db->get();
		if($q->num_rows() == 1){
			return $q->result();
		}else{
			return false;
		}
				  
	}
	
	//inset to serapioph_users table
	public function insert($data){
		$this->db->insert('serapioph_users', $data);
		return $this->db->insert_id();
	}
	
}