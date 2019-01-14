<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comeaboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->data['title'] = 'Come Aboard | Serapio.ph';
		$this->data['active'] = '';
		
		$this->template_lib->set_view('index_view','comeaboard_view', $this->data);
	}
}