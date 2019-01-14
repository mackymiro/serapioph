<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manningtablelist extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('trainingreviewform_model', 'tm');
		$this->load->model('data_model', 'dm');
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
		
		//getCategory
		$this->data['getCategory'] = $this->um->getCategory();
		
		//getCompanyName
		$this->data['getCompanyName'] = $this->tm->getCompanyName();
	
		//getProvince
		$this->data['getProvince'] = $this->dm->getProvince();
		
		if(!$this->session->userdata('loggedIn')){
			redirect('login');
		}else{
			if($this->data['getStatus'] == "admin"){
				//this is okay
			}else{
				redirect('homepage');
			}
		}
	}
	
	
	//update
	public function update(){
		//update
		$updatedAt = date('Y-m-d H:i:s');
		$update = array(
				'position'=>$this->input->post('manning'),
				'company_id'=>$this->input->post('companyName'),
				'slot'=>$this->input->post('slot'),
				'amount'=>$this->input->post('amount'),
				'branch_address'=>$this->input->post('branchAddress'),
				'starting_rate'=>$this->input->post('startingRate'),
				'minimum_qualifications'=>$this->input->post('minQual'),
				'province'=>$this->input->post('province'),
				'date_needed'=>$this->input->post('dateNeeded'),
				'updated_at'=>$updatedAt
				);
		$this->db->where('id', $this->input->post('updateId'))->update(' serapioph_training_review_registration_form', $update);
		$this->session->set_flashdata('update', 1);
		redirect('manningtablelist/edit/id/'.$this->input->post('updateId'));
	}
	
	
	//edit
	public function edit(){
		$this->data['title'] = 'Edit Manning Table List | Serapio.ph';
		$uri = $this->uri->segment(4);
		
		//getManningId
		$this->data['getManningId'] = $this->tm->getManningId($uri);
		
		$this->template_lib->set_view('index_view','edit_manningtablelist_view', $this->data);
	}
	
	public function index(){
		$this->data['title'] = 'Manning Table List | Serapio.ph';
		
		//getManning
		$this->data['getManning'] = $this->tm->getManning();
		
		$this->template_lib->set_view('index_view','manningtablelist_view', $this->data);
 	}
}