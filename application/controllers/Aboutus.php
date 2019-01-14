<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('companyreg_model', 'cm');
	}

	
	public function index(){
		$this->data['title'] = 'About Us | Serapio.ph';
		$this->data['active'] = 'about_us';
		
		
		//getCompaniesLogo
		$this->data['getCompaniesLogo'] = $this->cm->getCompaniesLogo();
		
		$this->template_lib->set_view('index_view','aboutus_view', $this->data);
	}
}