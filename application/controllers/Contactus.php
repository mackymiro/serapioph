<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->library('email');
	}
	
	//sendemail
	public function sendemail(){
		$this->form_validation->set_rules('name', 'Name', 'required', TRUE);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', TRUE);
		$this->form_validation->set_rules('subject', 'Subject', 'required', TRUE);
		$this->form_validation->set_rules('message', 'Message', 'required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
			
			$this->email->from('no-reply@serapio.ph','Serapio.ph');
			$list = array('hello@serapio.ph');
			$this->email->to($list);
			$this->email->subject('Contact us messages | Serapio.ph');
			$this->email->message("
					  <!DOCTYPE html>
						<html>
						<head>
						<title>Serapio.ph</title>
						</head>
						<body>
						<div style='width:500px; >
						  <div style='width:500px;'>
							<a href='https://springrainglobal.com/serapioph/assets/images/serapio-seal4.png' target='_blank' rel='nofollow' >
							  <img alt='Serapio.ph' src='https://springrainglobal.com/serapioph/assets/images/serapio-seal4.png' />
							</a>
						  
						  </div>
						  <div style='margin-left:40px; margin-top:80px;'>
						  <p style='font-family:arial; font-size:13px;'><strong>Name :</strong>".$name." </p> 
						  <p style='font-family:arial; font-size:13px;'><strong>Email :</strong>".$email." </p> 
						   <p style='font-family:arial; font-size:13px;'><strong>Subject :</strong>".$subject." </p> 
						  <p style='font-family:arial; font-size:13px;'><strong>Messages :</strong>".$message." </p> 
						  </div>
						</div>
						</body>
						</html>
						");
			$this->email->send();
			$this->session->set_flashdata('send', 1);
			redirect('contactus');
						
		}
	}
	
	
	
	public function index(){
		$this->data['title'] = 'Contact Us | Serapio.ph';
		$this->data['active'] = 'contact_us';
		
		$this->template_lib->set_view('index_view','contactus_view', $this->data);
	}
}