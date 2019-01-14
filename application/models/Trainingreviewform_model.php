<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trainingreviewform_model extends CI_Model{
	
	//getPracticalId
	public function getPracticalId($id){
		return $this->db->select('
					c.id,
					c.company_name,
					t.id,
					t.category,
					t.company_id,
					t.review_course,
					t.review_fee,
					t.slot,
					t.branch_address,
					t.province,
					t.review_schedule,
					t.promo,
					t.promo_period
				 ')
				->from('serapioph_company_registration_form c')
				->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
				->where('t.category =', 5)
				->where('t.id', $id)
				->get()->row_object();
	}
	
	//getPracticalAssessment
	public function getPracticalAssessment(){
		return $this->db->select('
						c.id,
						c.company_name,
						t.id,
						t.category,
						t.company_id,
						t.review_course,
						t.review_fee,
						t.slot,
						t.branch_address,
						t.province,
						t.review_schedule,
						t.promo,
						t.promo_period
					 ')
				    ->from('serapioph_company_registration_form c')
					->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
					->where('t.category =', 5)
					->get()->result_object();
	}
	
	//getShipboardId
	public function getShipboardId($id){
		return $this->db->select('
					c.id,
					c.company_name,
					t.id,
					t.category,
					t.company_id,
					t.shipboard_training_course,
					t.slot,
					t.branch_address,
					t.province,
					t.amount,
					t.schedule,
					t.minimum_requirements
				 ')
				->from('serapioph_company_registration_form c')
				->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
				->where('t.category =', 4)
				->where('t.id', $id)
				->get()->row_object();
	}
	
	//getShipboard
	public function getShipboard(){
		return $this->db->select('
					c.id,
					c.company_name,
					t.id,
					t.category,
					t.company_id,
					t.shipboard_training_course,
					t.slot,
					t.branch_address,
					t.province,
					t.amount,
					t.schedule,
					t.minimum_requirements
				 ')
				->from('serapioph_company_registration_form c')
				->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
				->where('t.category =', 4)
				->get()->result_object();
	}
	
	//getManningId
	public function getManningId($id){
		return $this->db->select('
				c.id,
				c.company_name,
				t.id,
				t.category,
				t.company_id,
				t.position,
				t.slot,
				t.amount,
				t.starting_rate,
				t.minimum_qualifications,
				t.branch_address,
				t.province,
				t.review_schedule,
				t.date_needed
			 ')
			->from('serapioph_company_registration_form c')
			->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
			->where('t.category =', 3)
			->where('t.id', $id)
			->get()->row_object();
	}
	
	//getManning
	public function getManning(){
		return $this->db->select('
					c.id,
					c.company_name,
					t.id,
					t.category,
					t.company_id,
					t.position,
					t.slot,
					t.starting_rate,
					t.minimum_qualifications,
					t.branch_address,
					t.province,
					t.date_needed
				 ')
				->from('serapioph_company_registration_form c')
				->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
				->where('t.category =', 3)
				->get()->result_object();
	}
	
	//getReviewId
	public function getReviewId($id){
		return $this->db->select('
					c.id,
					c.company_name,
					t.id,
					t.category,
					t.company_id,
					t.review_course,
					t.review_fee,
					t.slot,
					t.branch_address,
					t.province,
					t.review_schedule,
					t.promo,
					t.promo_period
				 ')
				->from('serapioph_company_registration_form c')
				->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
				->where('t.category =', 2)
				->where('t.id', $id)
				->get()->row_object();
	}
	
	//getReview()
	public function getReview(){
		return $this->db->select('
						c.id,
						c.company_name,
						t.id,
						t.category,
						t.company_id,
						t.review_course,
						t.review_fee,
						t.slot,
						t.branch_address,
						t.province,
						t.review_schedule,
						t.promo,
						t.promo_period
					 ')
				    ->from('serapioph_company_registration_form c')
					->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
					->where('t.category =', 2)
					->get()->result_object();
	}
	
	//getTrainingId
	public function getTrainingId($id){
		return $this->db->select('
						c.id,
						c.company_name,
						t.id,
						t.category,
						t.company_id,
						t.training_course,
						t.training_fee,
						t.slot,
						t.branch_address,
						t.province,
						t.training_schedule,
						t.promo,
						t.promo_period
					 ')
				    ->from('serapioph_company_registration_form c')
					->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
					->where('t.category =', 1)
					->where('t.id', $id)
					->get()->row_object();
	}
	
	//getTraining
	public function getTraining(){
		return $this->db->select('
						c.id,
						c.company_name,
						t.id,
						t.category,
						t.company_id,
						t.training_course,
						t.training_fee,
						t.slot,
						t.branch_address,
						t.province,
						t.training_schedule,
						t.promo,
						t.promo_period
					 ')
				    ->from('serapioph_company_registration_form c')
					->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
					->where('t.category =', 1)
					->get()->result_object();
	}
	
	//insert data
	public function insert($data){
		$this->db->insert('serapioph_training_review_registration_form', $data);
		return $this->db->insert_id();
	}
	
	
	//getCompany
	public function getCompanyName(){
		return $this->db->select('
						serapioph_company_registration_form.id,
						serapioph_company_registration_form.company_name,
					 ')
				    ->from('serapioph_company_registration_form')
					->get()->result_object();
	}
}