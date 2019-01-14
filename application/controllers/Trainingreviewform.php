<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainingreviewform extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('companyreg_model', 'cm');
		$this->load->model('trainingreviewform_model', 'tm');
		$this->load->model('data_model', 'dm');
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
		
		//getCategory
		$this->data['getCategory'] = $this->um->getCategory();
		
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
	
	//add
	public function add(){
		//save information
	
		$created_at = date('Y-m-d H:i:s');
		$array = array(
				'company_id'=>$this->input->post('companyName'),
				'category'=>$this->input->post('category'),
				'training_course'=>$this->input->post('trainingCourse'),
				'review_course'=>$this->input->post('reviewCourse'),
				'shipboard_training_course'=>$this->input->post('shipboardTraining'),
				'minimum_requirements'=>$this->input->post('minimunReq'),
				'position'=>$this->input->post('manning'),
				'training_fee'=>$this->input->post('trainingFee'),
				'review_fee'=>$this->input->post('reviewFee'),
				'slot'=>$this->input->post('slot'),
				'branch_address'=>$this->input->post('branchAddress'),
				'province'=>$this->input->post('province'),
				'training_schedule'=>$this->input->post('trainingSchedule'),
				'review_schedule'=>$this->input->post('reviewSchedule'),
				'date_needed'=>$this->input->post('dateNeeded'),
				'amount'=>$this->input->post('amount'),
				'promo'=>$this->input->post('promo'),
				'promo_period'=>$this->input->post('promoPeriod'),
				'starting_rate'=>$this->input->post('startingRate'),
				'minimum_qualifications'=>$this->input->post('minQual'),
				'created_at'=>$created_at
				);
		$this->tm->insert($array);
		$this->session->set_flashdata('success', 1);
		redirect('trainingreviewform');
	}
	
	public function index(){
		$this->data['title'] = 'Training/Review Registration Form | Serapio.ph';
		
		//getCompanyName
		$this->data['getCompanyName'] = $this->tm->getCompanyName();
		
		$this->template_lib->set_view('index_view','trainingreviewform_view', $this->data);
	}
}