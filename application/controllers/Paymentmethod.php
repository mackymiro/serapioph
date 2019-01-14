<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Paymentmethod extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('enrollmentform_model', 'em');
		$this->load->model('join_model', 'jm');
		
		$this->load->model('trainingcenterregistrationform_model', 'tm');
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		$this->data['status'] = $sessionData['status'];
	
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
	}
	
	//success
	public function success(){
		$this->data['title'] = 'Success | Serapio.ph';
		
		$isPaid = 1;
		$createdAt = date('Y-m-d H:i:s');
		//generate ref number
		$refNumber = time() . rand(10*45, 100*98);
		//save enrollment form
		
		//get category 
		$category = $this->input->post('category');
		if($category == 1){
			$cat = $this->input->post('category');
		}else if($category == 2){
			$cat = $this->input->post('category');
		}else if($category == 3){
			$cat = $this->input->post('category');
		}else if($category == 4){
			$cat = $this->input->post('category');
		}else if($category == 5){
			$cat = $this->input->post('category');
		}
		
		//saving the data depends on what category
		if($category == 1){
			$array = array(
				'user_id'=>$this->data['id'],
				'first_name'=>$this->input->post('firstName'),
				'middle_name'=>$this->input->post('middleName'),
				'last_name'=>$this->input->post('lastName'),
				'user_address'=>$this->input->post('address'),
				'contact_number'=>$this->input->post('contactNumber'),
				'amount_from_form'=>$this->input->post('amount'),
				'preferred_month'=>$this->input->post('ymd'),
				'preferred_time'=>$this->input->post('preferredTime'),
				'category'=>$cat,
				'company_name'=>$this->input->post('companyName'),
				'address'=>$this->input->post('branchAddress'),
				'training_course'=>$this->input->post('trainingCourse'),
				'training_schedule'=>$this->input->post('trainingSchedule'),
				'promo'=>$this->input->post('promo'),
				'promo_period'=>$this->input->post('promoPeriod'),
				'is_paid'=>$isPaid,
				'reference_number'=>$refNumber,
				'created_at'=>$createdAt
				);
			$this->em->insertEnrollment($array);
			//get the customer id when save
			$ids = $this->db->insert_id();
			//update slot in serapioph_training_center_registration_form 
			$id = $this->input->post('id');
			
		
				
		}else if($category == 2){
			$array = array(
				'user_id'=>$this->data['id'],
				'first_name'=>$this->input->post('firstName'),
				'middle_name'=>$this->input->post('middleName'),
				'last_name'=>$this->input->post('lastName'),
				'user_address'=>$this->input->post('address'),
				'contact_number'=>$this->input->post('contactNumber'),
				'amount_from_form'=>$this->input->post('amount'),
				'preferred_month'=>$this->input->post('ymd'),
				'preferred_time'=>$this->input->post('preferredTime'),
				'category'=>$cat,
				'company_name'=>$this->input->post('companyName'),
				'address'=>$this->input->post('branchAddress'),
				'review_course'=>$this->input->post('reviewCourse'),
				'review_schedule'=>$this->input->post('reviewSchedule'),
				'promo'=>$this->input->post('promo'),
				'promo_period'=>$this->input->post('promoPeriod'),
				'is_paid'=>$isPaid,
				'reference_number'=>$refNumber,
				'created_at'=>$createdAt
				);
			$this->em->insertEnrollment($array);
			//get the customer id when save
			$ids = $this->db->insert_id();
			//update slot in serapioph_training_center_registration_form 
			$id = $this->input->post('id');
			
			
				
		}else if($category == 3){
			$array = array(
				'user_id'=>$this->data['id'],
				'first_name'=>$this->input->post('firstName'),
				'middle_name'=>$this->input->post('middleName'),
				'last_name'=>$this->input->post('lastName'),
				'user_address'=>$this->input->post('address'),
				'contact_number'=>$this->input->post('contactNumber'),
				'amount_from_form'=>$this->input->post('amount'),
				'preferred_month'=>$this->input->post('ymd'),
				'preferred_time'=>$this->input->post('preferredTime'),
				'category'=>$cat,
				'company_name'=>$this->input->post('companyName'),
				'address'=>$this->input->post('branchAddress'),
				'position'=>$this->input->post('position'),
				'starting_rate'=>$this->input->post('startingRate'),
				'minimum_qualifications'=>$this->input->post('minimumQual'),
				'date_needed'=>$this->input->post('dateNeeded'),
				'is_paid'=>$isPaid,
				'reference_number'=>$refNumber,
				'created_at'=>$createdAt
				);
			$this->em->insertEnrollment($array);
			//get the customer id when save
			$ids = $this->db->insert_id();
			//update slot in serapioph_training_center_registration_form 
			$id = $this->input->post('id');
			
			//getTrainingReviewTable
			$this->data['getTrainingReviewTable'] = $this->jm->getTrainingReviewTable($id);
			
			//get the number of slots
			$slots = $this->data['getTrainingReviewTable']->slot;
			$sum = $slots - 1;
			
			$update = array(
					'slot'=>$sum
					);
			$this->db->where('id', $this->input->post('id'))->update('serapioph_training_review_registration_form', $update);
			
			redirect('success/id/'.$ids);
				
		}else if($category == 4){
			$array = array(
				'user_id'=>$this->data['id'],
				'first_name'=>$this->input->post('firstName'),
				'middle_name'=>$this->input->post('middleName'),
				'last_name'=>$this->input->post('lastName'),
				'user_address'=>$this->input->post('address'),
				'contact_number'=>$this->input->post('contactNumber'),
				'amount_from_form'=>$this->input->post('amount'),
				'preferred_month'=>$this->input->post('ymd'),
				'preferred_time'=>$this->input->post('preferredTime'),
				'category'=>$cat,
				'company_name'=>$this->input->post('companyName'),
				'address'=>$this->input->post('branchAddress'),
				'shipboard_training_course'=>$this->input->post('shipboardTrainingCourse'),
				'minimum_requirements'=>$this->input->post('minReq'),
				'schedule'=>$this->input->post('schedule'),
				'is_paid'=>$isPaid,
				'reference_number'=>$refNumber,
				'created_at'=>$createdAt
				);
			$this->em->insertEnrollment($array);
			//get the customer id when save
			$ids = $this->db->insert_id();
			//update slot in serapioph_training_center_registration_form 
			$id = $this->input->post('id');
			
				
		}
		
		//getTrainingReviewTable
		$this->data['getTrainingReviewTable'] = $this->jm->getTrainingReviewTable($id);
		
		//get the number of slots
		$slots = $this->data['getTrainingReviewTable']->slot;
		$sum = $slots - 1;
		
		$update = array(
				'slot'=>$sum
				);
		$this->db->where('id', $this->input->post('id'))->update('serapioph_training_review_registration_form', $update);
		
		redirect('success/id/'.$ids);
				
		
	}
	
	
	public function index(){
		$this->data['title'] = 'Payment Method | Serapio.ph';
		
		$hiddenId = $this->input->post('hiddenId');
		
		$this->template_lib->set_view('index_view','payment_method_view', $this->data);
	}
}