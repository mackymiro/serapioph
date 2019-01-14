<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enrollmentform extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('enrollmentform_model', 'em');
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
		
		//getMonth
		$this->data['getMonth'] = $this->em->getMonth();
		
		//getTime
		$this->data['getTime'] = $this->em->getTime();
		
		//getAllTrainingInfo from Training Info fields
		$this->data['getAllTrainingCategory'] = $this->em->getAllTrainingCategory();
		$getAllTrainingCategory = $this->data['getAllTrainingCategory'];
		
	
	}

	//update
	public function update(){
		$this->form_validation->set_rules('training', 'Training', 'trim|required', TRUE);
		$this->form_validation->set_rules('name', 'Name', 'trim|required', TRUE);
		$this->form_validation->set_rules('preferredMonth', 'Preferred Month', 'trim|required', TRUE);
		$this->form_validation->set_rules('preferredTime', 'Preferred Time', 'trim|required', TRUE);
		$this->form_validation->set_rules('details', 'Details', 'required', TRUE);
		$this->form_validation->set_rules('referenceNumber', 'Reference Number', 'trim|required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->data['title'] = 'Edit Enrollmentform | Serapio.ph';
			$editId = $this->input->post('editId');
			
			$this->data['getEnrollmentForm'] = $this->em->getEnrollmentForm($editId);
		
			$this->template_lib->set_view('index_view','edit_enrollmentform_view', $this->data);
		}else{
			$updatedAt = date('Y-m-d H:i:s');
			$update = array(
						'category'=>$this->input->post('category'),
						'training'=>$this->input->post('training'),
						'name'=>$this->input->post('name'),
						'preferred_month'=>$this->input->post('preferredMonth'),
						'preferred_time'=>$this->input->post('preferredTime'),
						'details'=>$this->input->post('details'),
						'reference_number'=>$this->input->post('referenceNumber'),
						'updated_at'=>$updatedAt
						);
			$this->db->where('id', $this->input->post('editId'))->update('serapioph_enrollment_form', $update);
			$this->session->set_flashdata('update', 1);
			redirect('enrollmentform/edit/id/'.$this->input->post('editId'));
		}
	}
	
	
	//edit
	public function edit($id){
		$this->data['title'] = 'Edit Enrollmentform | Serapio.ph';
		$uri = $this->uri->segment(4);
		
		$this->data['getEnrollmentForm'] = $this->em->getEnrollmentForm($uri);
	
		
		$this->template_lib->set_view('index_view','edit_enrollmentform_view', $this->data);
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
	
		
	//add enrollmentform data
	public function add(){
		$this->form_validation->set_rules('training', 'Training', 'required', TRUE);
		$this->form_validation->set_rules('name', 'Name', 'required', TRUE);
		$this->form_validation->set_rules('preferredMonth', 'Preferred Month', 'required|callback_check_preferred_month', TRUE);
		$this->form_validation->set_rules('preferredTime', 'Preferred Time', 'required|callback_check_preferred_time', TRUE);
		$this->form_validation->set_rules('details', 'Details', 'required', TRUE);
		$this->form_validation->set_rules('referenceNumber', 'Reference Number', 'required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$createdAt = date('Y-m-d H:i:s');
			$admin = "admin";
			$array = array(
					
					'user_status'=>$admin,
					'category'=>$this->input->post('category'),
					'training'=>$this->input->post('training'),
					'name'=>$this->input->post('name'),
					'preferred_month'=>$this->input->post('preferredMonth'),
					'preferred_time'=>$this->input->post('preferredTime'),
					'details'=>$this->input->post('details'),
					'reference_number'=>$this->input->post('referenceNumber'),
					'created_at'=>$createdAt
					);
			$this->em->insert($array);
			$this->session->set_flashdata('success', 1);
			redirect('enrollmentform');
			
		}
	}
	
	public function index(){
		$this->data['title'] = 'Enrollmentform | Serapio.ph';
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
		
		$this->data['getAllEnrollmentForm'] = $this->em->getAllEnrollmentForm();
		$getAllEnrollmentForm = $this->data['getAllEnrollmentForm'];
		
		$this->template_lib->set_view('index_view','enrollmentform_view', $this->data);
	}

}