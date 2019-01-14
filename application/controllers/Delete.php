<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('delete_model', 'dm');
	}
	
	public function practicalTableList($id){
		$id = $this->input->post('id');
		$this->dm->practicalTableList($id);
	}
	
	public function shipboardTableList($id){
		$id = $this->input->post('id');
		$this->dm->deleteShipboardTableList($id);
	}
	
	public function mannningTableList($id){
		$id = $this->input->post('id');
		$this->dm->deleteManningTableList($id);
	}
	
	public function reviewTableList($id){
		$id = $this->input->post('id');
		$this->dm->deleteReviewTableList($id);
	}
	
	public function trainingTableList($id){
		$id = $this->input->post('id');
		$this->dm->deleteTrainingTableList($id);
	}
	
	public function companyRegistrationForm($id){
		$id = $this->input->post('id');
		$this->dm->deleteCompanyRegistrationForm($id);
	}
	
	public function trainingCenterRegForm($id){
		$id = $this->input->post('id');
		$this->dm->deleteTrainingCenterRegForm($id);
		
	}
	
	public function enrollmentform($id){
		$id = $this->input->post('id');
		$this->dm->deleteEnrollment($id);
		
	}
	
	
	public function trainingInfo($id){
		$id = $this->input->post('id');
		$this->dm->deleteTraining($id);
		
	}

}