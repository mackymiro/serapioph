<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_model extends CI_Model{
	
	public function practicalTableList($id){
		$this->db->where('id', $id)->delete('serapioph_training_review_registration_form');
	}
	
	public function deleteShipboardTableList($id){
		$this->db->where('id', $id)->delete('serapioph_training_review_registration_form');
	}
	
	public function deleteManningTableList($id){
		$this->db->where('id', $id)->delete('serapioph_training_review_registration_form');
	}
	
	public function deleteReviewTableList($id){
		$this->db->where('id', $id)->delete('serapioph_training_review_registration_form');
	}
	
	public function deleteTrainingTableList($id){
		$this->db->where('id', $id)->delete('serapioph_training_review_registration_form');
	}
	
	public function deleteCompanyRegistrationForm($id){
		$this->db->where('id', $id)->delete('serapioph_company_registration_form');
	}
	
	public function deleteTrainingCenterRegForm($id){
		$this->db->where('id', $id)->delete('serapioph_training_center_registration_form');
	}
	
	public function deleteEnrollment($id){
		$this->db->where('id', $id)->delete('serapioph_enrollment_form');
	}
	
	public function deleteTraining($id){
		$this->db->where('id', $id)->delete('serapioph_training_info');
	}
}