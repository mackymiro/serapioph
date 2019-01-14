<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Success extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('enrollmentform_model', 'em');
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		$this->data['status'] = $sessionData['status'];
	
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
	}
	
	public function id(){
		$this->data['title'] = 'You Enrollment Details | Serapio.ph';
		$uri = $this->uri->segment(3);
		
		$this->data['getUserEnrollmentForm'] = $this->em->getUserEnrollmentForm($uri);
	
		
		$this->template_lib->set_view('index_view','success_view', $this->data);
	}
}