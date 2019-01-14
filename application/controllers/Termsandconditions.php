<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Termsandconditions extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->data['title'] = 'Terms and Conditions | Serapio.ph';
		$this->data['active'] = '';
		
		$this->template_lib->set_view('index_view','termsandconditions_view', $this->data);
	}


}