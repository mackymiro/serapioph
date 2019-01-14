<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('companyreg_model', 'cm');
	}
	
	public function index(){
		$this->data['title'] = 'Services | Serapio.ph';
		$this->data['active'] = 'services';
		
		//getCompaniesLogo
		$this->data['getCompaniesLogo'] = $this->cm->getCompaniesLogo();
		$this->template_lib->set_view('index_view','services_view', $this->data);
	}
}