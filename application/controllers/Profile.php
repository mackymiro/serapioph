<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('profile_model', 'p');
		
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
		
		
	}
	
	//update
	public function update(){
		$updatedAt = date('Y-m-d H:i:s');
		$update = array(
				'first_name'=>$this->input->post('firstName'),
				'middle_name'=>$this->input->post('middleName'),
				'last_name'=>$this->input->post('lastName'),
				'address'=>$this->input->post('address'),
				'contact_number'=>$this->input->post('contactNumber'),
				'updated_at'=>$updatedAt
				);
		$this->db->where('id', $this->input->post('userId'))->update('serapioph_users', $update);
		$this->session->set_flashdata('success', 1);
		redirect('profile');
	}
	
	
	public function index(){
		$this->data['title'] = 'Profile | Serapio.ph';
		$this->data['getUser'] = $this->p->getUser($this->data['id']);
		$getUser = $this->data['getUser'];
	
		
		$this->template_lib->set_view('index_view','profile_view', $this->data);
	}
}