<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Traininginfo extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('traininginfo_model', 'tm');
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		$this->data['status'] = $sessionData['status'];
		
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
		
		//getCategory
		$this->data['getCategory'] = $this->um->getCategory();
		$getCategory = $this->data['getCategory'];
	}
	
	//training info list for users
	public function listofdata(){
		$this->data['title'] = 'Training Info List | Serapio.ph';
		
		$this->template_lib->set_view('index_view','traininginfolist_view', $this->data);
	}
	
	//update
	public function update(){
		$this->form_validation->set_rules('category', 'Category', 'trim|required', TRUE);
		$this->form_validation->set_rules('institution', 'Institution', 'trim|required', TRUE);
		$this->form_validation->set_rules('amount', 'Amount', 'trim|required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->data['title'] = 'Edit Traininginfo | Serapio.ph';
			
			$editId = $this->input->post('editId');
			
			$this->data['getTrainingInfo'] = $this->tm->getTrainingInfo($editId);
			
			$this->template_lib->set_view('index_view','edit_traininginfo_view', $this->data);
		}else{
			$updatedAt = date('Y-m-d H:i:s');
			
			$update = array(
					'category'=>$this->input->post('category'),
					'institution'=>$this->input->post('institution'),
					'amount'=>$this->input->post('amount'),
					'updated_at'=>$updatedAt
					);
			$this->db->where('id', $this->input->post('editId'))->update('serapioph_training_info', $update);
			$this->session->set_flashdata('update', 1);
			redirect('traininginfo/edit/id/'.$this->input->post('editId'));
		}
		
	}
	
	
	//edit
	public function edit($id){
		$this->data['title'] = 'Edit Traininginfo | Serapio.ph';
		$uri = $this->uri->segment(4);
		
		$this->data['getTrainingInfo'] = $this->tm->getTrainingInfo($uri);
		
		$this->template_lib->set_view('index_view','edit_traininginfo_view', $this->data);
	}
	
	//check school if already exits
	public function check_institution($institution){
		$institution = $this->input->post('institution');
		$result = $this->tm->institution($institution);
		if($result){
			$this->form_validation->set_message('check_institution', 'Institution Already Exists.');
			return FALSE;
		}else{
			return TRUE;
		}
	}
	
	
	//add training info data
	public function add(){
		$this->form_validation->set_rules('category', 'Category', 'required', TRUE);
		$this->form_validation->set_rules('institution', 'Institution', 'required|callback_check_institution', TRUE);
		$this->form_validation->set_rules('amount', 'Amount', 'required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$createdAt = date('Y-m-d H:i:s');
			$admin = "admin";
			$array = array(
					'user_status'=>$admin,
					'category'=>$this->input->post('category'),
					'institution'=>$this->input->post('institution'),
					'amount'=>$this->input->post('amount'),
					'created_at'=>$createdAt
					);
			$this->tm->insert($array);
			$this->session->set_flashdata('success', 1);
			redirect('traininginfo');
		}
	} 
	
	public function index(){
		$this->data['title'] = 'Traininginfo | Serapio.ph';
		
		$this->data['getAllTrainingInfo'] = $this->tm->getAllTrainingInfo();
		$getAllTrainingInfo = $this->data['getAllTrainingInfo'];
				
		if($this->data['getStatus']){
			$this->template_lib->set_view('index_view','traininginfo_view', $this->data);
		}else{
			redirect('traininginfo/listofdata');
		}
		
		
				
	}
	
}