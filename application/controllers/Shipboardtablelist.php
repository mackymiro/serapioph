<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shipboardtablelist extends CI_Controller {
	
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
				'shipboard_training_course'=>$this->input->post('shipboardTraining'),
				'company_id'=>$this->input->post('companyName'),
				'minimum_requirements'=>$this->input->post('minimunReq'),
				'slot'=>$this->input->post('slot'),
				'amount'=>$this->input->post('amount'),
				'branch_address'=>$this->input->post('branchAddress'),
				'province'=>$this->input->post('province'),
				'schedule'=>$this->input->post('schedule'),
				'updated_at'=>$updatedAt
				);
		$this->db->where('id', $this->input->post('updateId'))->update(' serapioph_training_review_registration_form', $update);
		$this->session->set_flashdata('update', 1);
		redirect('shipboardtablelist/edit/id/'.$this->input->post('updateId'));
	}
	
	//edit
	public function edit(){
		$this->data['title'] = 'Edit Shipboard Training | Serapio.ph';
		$uri = $this->uri->segment(4);
		
		//getShipboardId
		$this->data['getShipboardId'] = $this->tm->getShipboardId($uri);
		
		$this->template_lib->set_view('index_view','edit_shipboardtablelist_view', $this->data);
	}
	
	public function index(){
		$this->data['title'] = 'Shipboard Traning Table List | Serapio.ph';
	
		//getShipboard
		$this->data['getShipboard'] = $this->tm->getShipboard();
		
		$this->template_lib->set_view('index_view','shipboardtablelist_view', $this->data);
 	}

}