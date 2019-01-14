<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage_model extends CI_Model{
	
	//getSearch5PracAsses
	public function getSearch5PracAsses($category, $practicalAssesment){
		return $this->db->select('
					c.id,
					c.company_name,
					t.id,
					t.category,
					t.company_id,
					t.review_course,
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
				->where('t.category', 5)
				->where('t.review_course', $practicalAssesment)
				//->where('t.slot !=', 0)
				->get()->result_object();
		
	}
	
	//getSearch4CourseProv
	public function getSearch4CourseProv($category, $sTraining){
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
				->where('t.category', 4)
				->where('t.shipboard_training_course', $sTraining)
				//->where('t.slot !=', 0)
				->get()->result_object();
	}
	
	//getSearch3CourseProv
	public function getSearch3CourseProv($category, $manning){
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
					t.review_schedule,
					t.date_needed
				 ')
				->from('serapioph_company_registration_form c')
				->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
				->where('t.category', 3)
				->where('t.position', $manning)
				//->where('t.slot !=', 0)
				->get()->result_object();
		
	}
	
	//getSearch2CourseProv
	public function getSearch2CourseProv($category, $rCourse){
			return $this->db->select('
					c.id,
					c.company_name,
					t.id,
					t.category,
					t.company_id,
					t.review_course,
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
				->where('t.category', 2)
				->where('t.review_course', $rCourse)
				//->where('t.slot !=', 0)
				->get()->result_object();
	}
	
	//getSearch1CourseProv
	public function getSearch1CourseProv($category, $tCourse){
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
				->where('t.category', 1)
				->where('t.training_course', $tCourse)
				//->where('t.slot !=', 0)
				->get()->result_object();
	}
	
	//getSearch4Prov
	public function getSearch4Prov($category, $sTraining){
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
				->where('t.category', 4)
				->where('t.shipboard_training_course', $sTraining)
				//->where('t.slot !=', 0)
				->get()->result_object();
	
	}	
	
	
	//getSearch3Prov
	public function getSearch3Prov($category, $manning){
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
					t.review_schedule,
					t.date_needed
				 ')
				->from('serapioph_company_registration_form c')
				->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
				->where('t.category', 3)
				->where('t.position', $manning)
				//->where('t.slot !=', 0)
				->get()->result_object();
	
	}	
	
	//getSearch2Prov
	public function getSearch2Prov($category){
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
				->where('t.category', 2)
				//->where('t.slot !=', 0)
				->get()->result_object();
	
	}	
	
	//getSearch1Prov
	public function getSearch1Prov($category){
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
				->where('t.category', 1)
				//->where('t.slot !=', 0)
				->get()->result_object();
	
	}	
	
	public function getSearch5($category, $province, $practicalAssesment){
		return $this->db->select('
					c.id,
					c.company_name,
					t.id,
					t.category,
					t.company_id,
					t.review_course,
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
				->where('t.category', 2)
				->where('t.review_course', $practicalAssesment)
				->where('t.province', $province)
				//->where('t.slot !=', 0)
				->get()->result_object();
		
	
	}	
	
	//getSearch4
	public function getSearch4($category, $sTraining, $province){
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
				->where('t.category', 4)
				->where('t.shipboard_training_course', $sTraining)
				->where('t.province', $province)
				//->where('t.slot !=', 0)
				->get()->result_object();
		
	
	}	
	
	//getSearch3
	public function getSearch3($category, $manning, $province){
		return $this->db->select('
					c.id,
					c.company_name,
					t.id,
					t.category,
					t.company_id,
					t.shipboard_training_course,
					t.position,
					t.slot,
					t.starting_rate,
					t.minimum_qualifications,
					t.branch_address,
					t.province,
					t.review_schedule,
					t.date_needed
				 ')
				->from('serapioph_company_registration_form c')
				->join('serapioph_training_review_registration_form t', 't.company_id = c.id')
				->where('t.category', 3)
				->where('t.position', $manning)
				->where('t.province', $province)
				//->where('t.slot !=', 0)
				->get()->result_object();
		
	
	}	
	
	//getSearch2
	public function getSearch2($category, $rCourse, $province){
		return $this->db->select('
					c.id,
					c.company_name,
					t.id,
					t.category,
					t.company_id,
					t.review_course,
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
				->where('t.category', 2)
				->where('t.review_course', $rCourse)
				->where('t.province', $province)
				//->where('t.slot !=', 0)
				->get()->result_object();
		
	
	}	

	//getSearch1
	public function getSearch1($category, $tCourse, $province){
		return $this->db->select('
					c.id,
					c.company_name,
					t.id,
					t.category,
					t.training_course,
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
				->where('t.category', 1)
				->where('t.training_course', $tCourse)
				->where('t.province', $province)
				//->where('t.slot !=', 0)
				->get()->result_object();
	
	}	
	
	/*public function getSearch($category, $training){
		return $this->db->select('
						 t.category,
						 t.school,
						 t.address,
						 t.amount,
						 t.slot,
						 e.id,
						 e.training,
						 e.name,
						 e.preferred_month,
						 e.preferred_time,
						 e.details,
						 e.reference_number
						')
					->from('serapioph_training_info t')
					->join('serapioph_enrollment_form e', 'e.category = t.id')
					->where('t.category', $category)
					->where('e.training !=', $training)
					->get()->result_object();
	}*/

}