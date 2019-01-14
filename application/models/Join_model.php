<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join_model extends CI_Model{
	
	//getTrainingReviewTable
	public function getTrainingReviewTable($id){
		return $this->db->select('
						c.id,
						c.company_name,
						c.company_photo,
						t.id,
						t.category,
						t.company_id,
						t.training_course,
						t.training_fee,
						t.review_course,
						t.review_fee,
						t.shipboard_training_course,
						t.slot,
						t.branch_address,
						t.province,
						t.training_schedule,
						t.review_schedule,
						t.position,
						t.starting_rate,
						t.minimum_qualifications,
						t.minimum_requirements,
						t.amount,
						t.schedule,
						t.date_needed,
						t.promo,
						t.promo_period
					 ')
				    ->from('serapioph_company_registration_form c')
					->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
					->where('t.id', $id)
					->get()->row_object();
	}

	//insert
	public function insert($data){
		$this->db->insert('serapioph_enrollment_form', $data);
		return $this->db->insert_id();
	}

}