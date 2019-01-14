<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registeredusers extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
		
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
	
	//approved user
	public function approved(){
		$uri = $this->uri->segment(4);
		//update is_approved to 1
		$one = 1;
		$update = array(
				 'is_approved'=>$one
				);
		$this->db->where('id', $uri)->update('serapioph_users', $update);
		$this->session->set_flashdata('update', 1);
		redirect('registeredusers');
		
	}
	
	//view registered user
	public function view(){
		$this->data['title'] = 'View Registered Users | Serapio.ph';
		
		$uri = $this->uri->segment(4);
	
		//getUserInfo
		$this->data['getUserInfo'] = $this->um->getUserInfo($uri);
		$getUserInfo = $this->data['getUserInfo'];
		
		$this->template_lib->set_view('index_view','view_registered_users_view', $this->data);
	}
	
	public function index(){
		$this->data['title'] = 'Registered Users | Serapio.ph';
		
		//getAllUsers
		$this->data['getAllUser'] = $this->um->getAllUser();
		$getAllUser = $this->data['getAllUser'];
		
		$this->template_lib->set_view('index_view','registered_users_view', $this->data);
	}

}