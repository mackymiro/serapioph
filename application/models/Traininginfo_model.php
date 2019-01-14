<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Traininginfo_model extends CI_Model{
		
	//getTrainingInfo
	public function getTrainingInfo($id){
		return $this->db->get_where('serapioph_training_info', array('id'=>$id))->row_object();
	}
	
	
	
	//getAllTrainingInfo
	public function getAllTrainingInfo(){
		return $this->db->select('
								serapioph_training_info.id,
								serapioph_training_info.category,
								serapioph_training_info.institution,
								serapioph_training_info.amount
							')
							->from('serapioph_training_info')
							->get()->result_object();
	}
	
	//insert data
	public function insert($data){
		$this->db->insert('serapioph_training_info', $data);
		return $this->db->insert_id();
	}
	
	
	//check if institution exits
	public function institution($institution){
		$this->db->select('
						serapioph_training_info.institution
						')
				  ->from('serapioph_training_info')
				  ->where('institution', $institution);
		$q = $this->db->get();
		if($q->num_rows() == 1){
			return $q->result();
		}else{
			return false;
		}
	}

}