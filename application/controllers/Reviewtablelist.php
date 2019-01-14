<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviewtablelist extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('trainingreviewform_model', 'tm');
		$this->load->model('data_model', 'dm');
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
		
		//getCategory
		$this->data['getCategory'] = $this->um->getCategory();
		
		//getCompanyName
		$this->data['getCompanyName'] = $this->tm->getCompanyName();
		
		//getProvince
		$this->data['getProvince'] = $this->dm->getProvince();
		
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
	
	
	//update
	public function update(){
			
		//update
		$updatedAt = date('Y-m-d H:i:s');
		$update = array(
				'review_course'=>$this->input->post('reviewCourse'),
				'company_id'=>$this->input->post('companyName'),
				'review_fee'=>$this->input->post('reviewFee'),
				'slot'=>$this->input->post('slot'),
				'branch_address'=>$this->input->post('branchAddress'),
				'province'=>$this->input->post('province'),
				'review_schedule'=>$this->input->post('reviewSchedule'),
				'promo'=>$this->input->post('promo'),
				'promo_period'=>$this->input->post('promoPeriod'),
				'updated_at'=>$updatedAt
				);
		$this->db->where('id', $this->input->post('updateId'))->update(' serapioph_training_review_registration_form', $update);
		$this->session->set_flashdata('update', 1);
		redirect('reviewtablelist/edit/id/'.$this->input->post('updateId'));
	}
	
	//edit
	public function edit(){
		$this->data['title'] = 'Edit Review Table List | Serapio.ph';
		$uri = $this->uri->segment(4);
		
		//getReviewId
		$this->data['getReviewId'] = $this->tm->getReviewId($uri);
		echo "<pre>";
		print_r($this->data['getReviewId']);
		echo "</pre>";
	
		$this->template_lib->set_view('index_view','edit_reviewtablelist_view', $this->data);
	}
	
	public function index(){
		$this->data['title'] = 'Review Table List | Serapio.ph';
		
		//getReview
		$this->data['getReview'] = $this->tm->getReview();
		
		$this->template_lib->set_view('index_view','reviewtablelist_view', $this->data);
	}
}