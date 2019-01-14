<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requestforquotation extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->library('email');
	}

	//send email
	public function send(){
		$this->form_validation->set_rules('companyName', 'Company Name', 'required', TRUE);
		$this->form_validation->set_rules('address', 'Address', 'required', TRUE);
		$this->form_validation->set_rules('contactNumber', 'Contact Number' , 'required', TRUE);
		$this->form_validation->set_rules('emailAddress', 'Email Address' , 'valid_email', TRUE);
		$this->form_validation->set_rules('quantity', 'Quantity' , 'required', TRUE);
		$this->form_validation->set_rules('price', 'Price' , 'required', TRUE);
		$this->form_validation->set_rules('promoPrice', 'Promo Price' , 'required', TRUE);
		$this->form_validation->set_rules('modeOfPayment', 'Mode Of Payment' , 'required', TRUE);
		$this->form_validation->set_rules('period', 'Period' , 'required', TRUE);
		$this->form_validation->set_rules('totalAmount', 'Total Amount' , 'required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$companyName = $this->input->post('companyName');
			$address = $this->input->post('address');
			$contactNumber = $this->input->post('contactNumber');
			$emailAddress = $this->input->post('emailAddress');
			$quantity = $this->input->post('quantity');
			$price = $this->input->post('price');
			$promoPrice = $this->input->post('promoPrice');
			$modeOfPayment = $this->input->post('modeOfPayment');
			$period = $this->input->post('period');
			$totalAmount = $this->input->post('totalAmount');
			
			$category = $this->input->post('category');
			if($category == 1){
				$cat = "Training";
				$course = $this->input->post('trainingCourse');
			}else if($category == 2){
				$cat = "Review";
				$course = $this->input->post('reviewCourse');
			}else if($category == 3){
				$cat = "Manning";
				$course = $this->input->post('manning');
			}else if($category == 4){
				$cat = "Shipboard Training";
				$course = $this->input->post('shipboardTraining');
			}
					
			
			$this->email->from('no-reply@serapio.ph','Serapio.ph');
			$list = array('hello@serapio.ph');
			$this->email->to($list);
			$this->email->subject('Request for Quotation | Serapio.ph');
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
						  <p style='font-family:arial; font-size:13px;'><strong>Company Name :</strong>".$companyName." </p> 
						  <p style='font-family:arial; font-size:13px;'><strong>Address :</strong>".$address." </p> 
						  <p style='font-family:arial; font-size:13px;'><strong>Contact Number :</strong>".$contactNumber." </p> 
						  <p style='font-family:arial; font-size:13px;'><strong>Email Address :</strong>".$emailAddress." </p> 
						  <p style='font-family:arial; font-size:13px;'><strong>Category :</strong>".$cat." </p> 
						  <p style='font-family:arial; font-size:13px;'><strong>Course :</strong>".$course." </p> 
						  <p style='font-family:arial; font-size:13px;'><strong>Quantity :</strong>".$quantity." </p> 
						  <p style='font-family:arial; font-size:13px;'><strong>Price :</strong>".$price." </p> 
						  <p style='font-family:arial; font-size:13px;'><strong>Promo Price :</strong>".$promoPrice." </p>
						  <p style='font-family:arial; font-size:13px;'><strong>Mode Of Payment :</strong>".$modeOfPayment." </p>						  
						  <p style='font-family:arial; font-size:13px;'><strong>Period :</strong>".$period." </p>	
						  <p style='font-family:arial; font-size:13px;'><strong>Total Amount :</strong>".$totalAmount." </p>	
						  </div>
						</div>
						</body>
						</html>
						");
			$this->email->send();
			$this->session->set_flashdata('send', 1);
			redirect('requestforquotation');
		}
	}
	
	public function index(){
		$this->data['title'] = 'Request For Quotation | Serapio.ph';
		$this->data['active'] = '';
		
			//getCategory
		$this->data['getCategory'] = $this->um->getCategory();
	
		$this->template_lib->set_view('index_view','requestquote_view', $this->data);
	}
}