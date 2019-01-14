<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Join extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('enrollmentform_model', 'em');
		//$this->load->model('trainingcenterregistrationform_model', 'tm');
		$this->load->model('join_model', 'jm');
		
		//getYear
		$this->data['getYear'] = $this->em->getYear();
		
		//getDay()
		$this->data['getDay'] = $this->em->getDay(); 
		
		//getMonth
		$this->data['getMonth'] = $this->em->getMonth();
		
		//getTime
		$this->data['getTime'] = $this->em->getTime();
		
		if(!$this->session->userdata('loggedIn')){
			redirect('comeaboard');
		}
	}
	
	//check preferred year
	public function check_preferred_year(){
		if($this->input->post('preferredYear') === '0'){
			$this->form_validation->set_message('check_preferred_year', 'Please select preferred year.');
			return false;
		}else{
		  return true;
		}
	}
	
	
	//check preferred day
	public function check_preferred_day(){
		if($this->input->post('preferredDay') === '0'){
			$this->form_validation->set_message('check_preferred_day', 'Please select preferred day.');
			return false;
		}else{
		  return true;
		}
	}
	
	//check preferred time
	public function check_preferred_time(){
		if($this->input->post('preferredTime') === '0'){
			$this->form_validation->set_message('check_preferred_time', 'Please select preferred time.');
			return false;
		}else{
		  return true;
		}
	}
	
	//check preferred month
	
	public function check_preferred_month(){
		if($this->input->post('preferredMonth') === '0'){
			$this->form_validation->set_message('check_preferred_month', 'Please select preferred month.');
			return false;
		}else{
		  return true;
		}
	}
	
	//add enrollment form
	public function add(){
		$this->form_validation->set_rules('firstName', 'First Name', 'required',  TRUE);
		$this->form_validation->set_rules('middleName', 'Middle Name', 'required',  TRUE);
		$this->form_validation->set_rules('middleName', 'Middle Name', 'required',  TRUE);
		$this->form_validation->set_rules('lastName', 'Last Name', 'required',  TRUE);
		$this->form_validation->set_rules('address', 'Address', 'required',  TRUE);
		$this->form_validation->set_rules('contactNumber', 'Contact Number', 'required',  TRUE);
		$this->form_validation->set_rules('preferredDay', 'Preferred Day', 'required|callback_check_preferred_day', TRUE);
		$this->form_validation->set_rules('preferredMonth', 'Preferred Month', 'required|callback_check_preferred_month',  TRUE);
		$this->form_validation->set_rules('preferredYear', 'Preferred Year', 'required|callback_check_preferred_year',  TRUE);
		$this->form_validation->set_rules('preferredTime', 'Preferred Time', 'required|callback_check_preferred_time',  TRUE);
		if($this->form_validation->run() == FALSE){
			$this->data['title'] = 'Add | Serapio.ph';
			$uri = $this->uri->segment(3);
			
			$sessionData = $this->session->userdata('loggedIn');
			$this->data['id'] = $sessionData['id'];
			$this->data['username'] = $sessionData['username'];
			$this->data['status'] = $sessionData['status'];
		
			$this->data['status'] = $this->um->getStatus($this->data['id']);
			$this->data['getStatus'] = $this->data['status']->status;
			
			//getTrainingCenterRegForm table
			$this->data['getTrainingReviewTable'] = $this->jm->getTrainingReviewTable($uri);
		
			//getUserInfo
			$this->data['getUserInfo'] = $this->um->getUserInfo($this->data['id']);
			
			$this->template_lib->set_view('index_view','join_view', $this->data);
		}else{
			$this->data['title'] = 'Payment Method | Serapio.ph';
			$sessionData = $this->session->userdata('loggedIn');
			$this->data['id'] = $sessionData['id'];
			$this->data['username'] = $sessionData['username'];
			$this->data['status'] = $sessionData['status'];
		
			$this->data['status'] = $this->um->getStatus($this->data['id']);
			$this->data['getStatus'] = $this->data['status']->status;
			//get the id
			$hiddenId = $this->input->post('hiddenId');
			
			//getCategory based in training , review, manning, shipboard training and others
			$category = $this->input->post('categoryID');
			if($category == 1){
				$amount = $this->input->post('TrainingFee');
			}else if($category == 2){
				$amount = $this->input->post('reviewFee');
			}else if($category == 3){
				$amount = $this->input->post('startingRate');
			}else if($category == 4){
				$amount = $this->input->post('amount');
			}
			
			//day
			$day = $this->input->post('preferredDay');
			$month = $this->input->post('preferredMonth');
			$year = $this->input->post('preferredYear');
			$ymd = $year."-".$month."-" .$day;
			
			$this->data['firstName'] = $this->input->post('firstName');
			$this->data['middleName'] = $this->input->post('middleName');
			$this->data['lastName'] = $this->input->post('lastName');
			$this->data['address'] = $this->input->post('address');
			$this->data['contactNumber'] = $this->input->post('contactNumber');
			$this->data['companyName'] = $this->input->post('companyName');
			$this->data['amount'] = $amount;
			$this->data['preferredDay'] = $this->input->post('preferredDay');
			$this->data['preferredMonth'] = $this->input->post('preferredMonth');
			$this->data['preferredYear'] = $this->input->post('preferredYear');
			$this->data['preferredTime'] = $this->input->post('preferredTime');
			$this->data['ymd'] = $ymd;
			

			$this->data['getTrainingReviewTable'] = $this->jm->getTrainingReviewTable($hiddenId);
					
			
			$this->template_lib->set_view('index_view','payment_method_view', $this->data);
			
		}
		
	}
	
	
	public function id(){
		$this->data['title'] = 'Join | Serapio.ph';
		$uri = $this->uri->segment(3);

		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		$this->data['status'] = $sessionData['status'];
	
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
		
		//getTrainingReviewTable table
		$this->data['getTrainingReviewTable'] = $this->jm->getTrainingReviewTable($uri);
		
		//getUserInfo
		$this->data['getUserInfo'] = $this->um->getUserInfo($this->data['id']);
		
		$this->template_lib->set_view('index_view','join_view', $this->data);
	}
}