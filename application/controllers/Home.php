<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('companyreg_model', 'cm');
		$this->load->model('data_model', 'dm');
		
		
		if($this->session->userdata('loggedIn')){
			$sessionData = $this->session->userdata('loggedIn');
			$this->data['id'] = $sessionData['id'];
			$this->data['username'] = $sessionData['username'];
			
			$this->data['status'] = $this->um->getStatus($this->data['id']);
			$this->data['getStatus'] = $this->data['status']->status;
			
			//redirect if status is admin
			if($this->data['status'] == "admin"){
				redirect('companyregistrationform');
			}else{
				redirect('homepage');
			}
			
		}
	}
	
	public function index(){
		$this->data['title'] = "Serapio.ph";
		$this->data['active'] = 'home';
		
		//getCategory
		$this->data['getCategory'] = $this->um->getCategory();
		$getCategory = $this->data['getCategory'];
		
		//getProvince
		$this->data['getProvince'] = $this->dm->getProvince();
		
		//getCompaniesLogo
		$this->data['getCompaniesLogo'] = $this->cm->getCompaniesLogo();
		
		
		$this->template_lib->set_view('index_view','home_view', $this->data);
	}
}
