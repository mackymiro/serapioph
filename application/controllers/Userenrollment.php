<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Userenrollment extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('enrollmentform_model', 'em');
		
		//load PDF library
		$this->load->library('Pdf');
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		$this->data['status'] = $sessionData['status'];
	
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
	
	//view
	public function view(){
		$this->data['title'] = 'View Enrolled Students | Serapio.ph';
		
		$uri = $this->uri->segment(4);
		
		//geUserEnrollment table
		$this->data['getUserEnrollmentForm'] = $this->em->getUserEnrollmentForm($uri);
		$getUserEnrollmentForm = $this->data['getUserEnrollmentForm'];
		
		
		$this->template_lib->set_view('index_view','userenrolledview_view', $this->data);
	}
	
	//generatepdf
	public function generatepdf(){
		$uri = $this->uri->segment(3);
		$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('https://www.serapio.ph');
		$pdf->SetTitle('Enrollment Form');
		$pdf->SetSubject('Report generated using Codeigniter and TCPDF');
		$pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');
		// set default header data
		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		
		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		
		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set font
		$pdf->SetFont('times', 'BI', 12);
		
		//geUserEnrollment table
		$getUserEnrollmentForm = $this->em->getUserEnrollmentForm($uri);
		
		//category condition
		if($getUserEnrollmentForm->category == 1){
			$category = "Training";
		}elseif($getUserEnrollmentForm->category == 2){
			$category = "Review";
		}elseif($getUserEnrollmentForm->category == 3){
			$category = "Manning";
		}elseif($getUserEnrollmentForm->category == 4){
			$category = "Others";
		}
		
		
		//time condition
		if($getUserEnrollmentForm->preferred_time == 1){
			$preferredTime = "6:00";
		}elseif($getUserEnrollmentForm->preferred_time == 2){
			$preferredTime = "7:00";
		}elseif($getUserEnrollmentForm->preferred_time == 3){
			$preferredTime = "8:00";
		}elseif($getUserEnrollmentForm->preferred_time == 4){
			$preferredTime = "9:00";
		}elseif($getUserEnrollmentForm->preferred_time == 5){
			$preferredTime = "10:00";
		}elseif($getUserEnrollmentForm->preferred_time == 6){
			$preferredTime = "11:00";
		}elseif($getUserEnrollmentForm->preferred_time == 7){
			$preferredTime = "12:00";
		}elseif($getUserEnrollmentForm->preferred_time == 8){
			$preferredTime = "13:00";
		}elseif($getUserEnrollmentForm->preferred_time == 9){
			$preferredTime = "14:00";
		}elseif($getUserEnrollmentForm->preferred_time == 10){
			$preferredTime = "15:00";
		}elseif($getUserEnrollmentForm->preferred_time == 11){
			$preferredTime = "16:00";
		}elseif($getUserEnrollmentForm->preferred_time == 12){
			$preferredTime = "17:00";
		}elseif($getUserEnrollmentForm->preferred_time == 13){
			$preferredTime = "18:00";
		}elseif($getUserEnrollmentForm->preferred_time == 14){
			$preferredTime = "19:00";
		}elseif($getUserEnrollmentForm->preferred_time == 15){
			$preferredTime = "20:00";
		}elseif($getUserEnrollmentForm->preferred_time == 16){
			$preferredTime = "21:00";
		}elseif($getUserEnrollmentForm->preferred_time == 17){
			$preferredTime = "22:00";
		}elseif($getUserEnrollmentForm->preferred_time == 18){
			$preferredTime = "23:00";
		}elseif($getUserEnrollmentForm->preferred_time == 19){
			$preferredTime = "00:00";
		}
				
		$html="
			<h2>Your Reference Number: # ".$getUserEnrollmentForm->reference_number."</h2>
			<p>
			Reference Number: #".$getUserEnrollmentForm->reference_number."
			<br>
			First Name: ".$getUserEnrollmentForm->first_name."
			<br>
			Middle Name: ".$getUserEnrollmentForm->middle_name."
			<br>
			Last Name: ".$getUserEnrollmentForm->last_name."
			<br>
			Address: ".$getUserEnrollmentForm->user_address."
			<br>
			Contact Number: ".$getUserEnrollmentForm->contact_number."
			<br>
			Amount Paid: ".$getUserEnrollmentForm->amount_from_form."
			<br>
			Category:  ".$category."
			
			<br>
			Company Name: ".$getUserEnrollmentForm->company_name."
			<br>
			Branch Address: ".$getUserEnrollmentForm->address."
			<br>
			Account Executive: ".$getUserEnrollmentForm->account_executive."
			<br>
			Date Started: ".$getUserEnrollmentForm->date_started."
			<br>
			Amount: ".$getUserEnrollmentForm->amount."
			<br>
			Promo: ".$getUserEnrollmentForm->promo."
			<br>
			Preferred Month: ".$getUserEnrollmentForm->preferred_month."
			<br>
			Preferred Time: ".$preferredTime."
			</p>"
			;
		//Generate HTML table data from MySQL - end
		
		// add a page
		$pdf->AddPage();
		
		// output the HTML content
		$pdf->writeHTML($html, true, false, true, false, '');
		
		// reset pointer to the last page
		$pdf->lastPage();

		//Close and output PDF document
		$pdf->Output(md5(time()).'.pdf', 'D');
	}
	
	public function index(){
		$this->data['title'] = 'User Enrollment | Serapio.ph';
		
		//getAllEnrollment
		$this->data['getAllEnrollment'] = $this->em->getAllEnrollment();
		$getAllEnrollment = $this->data['getAllEnrollment'];
	
		
		$this->template_lib->set_view('index_view','userenrollment_view', $this->data);
	}

}