<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myenrollment extends CI_Controller{
	
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
	
	//view
	public function view(){
		$this->data['title'] = 'View Enrollment | Serapio.ph';
		$uri = $this->uri->segment(3);
		
		//getMyEnrollmentView
		$this->data['getMyEnrollmentView'] = $this->em->getMyEnrollmentView($uri);
		$getMyEnrollmentView = $this->data['getMyEnrollmentView'];
		
		$this->template_lib->set_view('index_view','viewenrollment_view', $this->data);
	}

	public function index(){
		$this->data['title'] = 'My Enrollment | Serapio.ph';
		
		//getMyEnrollment
		$this->data['getMyEnrollment'] = $this->em->getMyEnrollment($this->data['id']);
		$getMyEnrollment = $this->data['getMyEnrollment'];
		
		$this->template_lib->set_view('index_view','myenrollment_view', $this->data);
	}

}