<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainingcenterregistrationform extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('trainingcenterregistrationform_model', 'tm');
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
		
		$this->data['getAllTrainingRegistrationForm'] = $this->tm->getAllTrainingRegistrationForm();
		$getAllTrainingRegistrationForm = $this->data['getAllTrainingRegistrationForm'];
	
		
		//getCategory
		$this->data['getCategory'] = $this->um->getCategory();
		$getCategory = $this->data['getCategory'];
		
		//getProvince
		$this->data['getProvince'] = $this->tm->getProvince();
		$getProvince = $this->data['getProvince'];
		
		$config['upload_path'] = 'assets/uploads/logo/';
		// set the filter types
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '9000';
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->set_allowed_types($config['allowed_types']);
		
	}
	
	//list of data
	public function listofdata(){
		$this->data['title'] = 'Training Center Registration Form List | Serapio.ph';
	
		$this->template_lib->set_view('index_view','trainingcenterregistrationformlist_view', $this->data);
	}
	
	//update
	public function update(){
		$this->form_validation->set_rules('businessName', 'Business Name', 'required', TRUE);
		$this->form_validation->set_rules('brandName', 'Brand Name', 'required', TRUE);
		$this->form_validation->set_rules('address', 'Address', 'required', TRUE);
		$this->form_validation->set_rules('accountExec', 'Account Executive', 'required', TRUE);
		$this->form_validation->set_rules('dateStarted', 'Date Started', 'required', TRUE);
		$this->form_validation->set_rules('promo', 'Promo', 'required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->data['title'] = 'Edit Training Center Registration Form | Serapio.ph';
			
			$editId = $this->input->post('editId');
			
			$this->data['getTrainingCenterRegForm'] = $this->tm->getTrainingCenterRegForm($editId);
			$this->template_lib->set_view('index_view','edit_trainingcenterregform_view', $this->data);
		}else{
			if (!$this->upload->do_upload('photo')){
				//edit the page without uploading a photo
				if($_FILES['photo']['name'] == ""){	
					$updatedAt = date('Y-m-d H:i:s');
					$update = array(
							'business_name'=>$this->input->post('businessName'),
							'brand_name'=>$this->input->post('brandName'),
							'address'=>$this->input->post('address'),
							'province'=>$this->input->post('province'),
							'account_executive'=>$this->input->post('accountExec'),
							'year_started'=>$this->input->post('dateStarted'),
							'promo'=>$this->input->post('promo'),
							'updated_at'=>$updatedAt
							);
					$this->db->where('id', $this->input->post('editId'))->update('serapioph_training_center_registration_form', $update);
					$this->session->set_flashdata('update', 1);
					redirect('trainingcenterregistrationform/edit/id/'.$this->input->post('editId'));
				}
				
				//return error type when filetype is not an image
				$this->data['title'] = 'Edit Training Center Registration Form | Serapio.ph';
			
				$this->data['error'] = $this->upload->display_errors('<p>', '</p>');
				$editId = $this->input->post('editId');
			
				$this->data['getTrainingCenterRegForm'] = $this->tm->getTrainingCenterRegForm($editId);
				
				$this->template_lib->set_view('index_view','edit_trainingcenterregform_view', $this->data);
				
			}else{
				//updating the fields and updating an image
				//else, set the success message 
				$data['upload_data'] = $this->upload->data();
				$uploadSuccess = $data['upload_data'];
				$raw_name = $uploadSuccess['file_name'];
				$this->load->library('image_lib');
				$file_name = $raw_name;
				
				$image_path = 'assets/uploads/logo/' .$file_name;
				$config['image_library'] = 'gd2';
				$config['source_image'] =  $image_path;
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 450;
				$config['height'] = 450;
				$config['new_image'] = 'medium_size_'.$file_name;
				
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();
				
				$updatedAt = date('Y-m-d H:i:s');
				$update = array(
							'filename'=>$file_name,
							'business_name'=>$this->input->post('businessName'),
							'brand_name'=>$this->input->post('brandName'),
							'address'=>$this->input->post('address'),
							'province'=>$this->input->post('province'),
							'account_executive'=>$this->input->post('accountExec'),
							'year_started'=>$this->input->post('dateStarted'),
							'promo'=>$this->input->post('promo'),
							'updated_at'=>$updatedAt
							);
				$this->db->where('id', $this->input->post('editId'))->update('serapioph_training_center_registration_form', $update);
				$this->session->set_flashdata('update', 1);
				redirect('trainingcenterregistrationform/edit/id/'.$this->input->post('editId'));
				
			}
						
			
		}
	}
	
	//edit
	public function edit($id){
		$this->data['title'] = 'Edit Training Center Registration Form | Serapio.ph';
		$uri = $this->uri->segment(4);
		
		$this->data['getTrainingCenterRegForm'] = $this->tm->getTrainingCenterRegForm($uri);

		$this->template_lib->set_view('index_view','edit_trainingcenterregform_view', $this->data);
	}
	
	
	//check businessName exits
	public function check_businessName($businessName){
		$businessName = $this->input->post('businessName');
		$result = $this->tm->businessName($businessName);
		if($result){
			$this->form_validation->set_message('check_businessName', 'Business Name Exists.');
			return FALSE;
		}else{
			return TRUE;
		}	

	}
	
	//add
	public function add(){
		$this->form_validation->set_rules('category', 'Category', 'trim|required', TRUE);
		$this->form_validation->set_rules('businessName', 'Business Name', 'required|callback_check_businessName', TRUE);
		$this->form_validation->set_rules('brandName', 'Brand Name', 'required', TRUE);
		$this->form_validation->set_rules('address', 'Address', 'required', TRUE);
		$this->form_validation->set_rules('province', 'Province', 'required', TRUE);
		$this->form_validation->set_rules('accountExec', 'Account Executive', 'required', TRUE);
		$this->form_validation->set_rules('dateStarted', 'Date Started', 'required', TRUE);
		$this->form_validation->set_rules('slot', 'Slot', 'required', TRUE);
		$this->form_validation->set_rules('promo', 'Promo', 'required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			if(isset($_FILES['photo']['name']) == ""){
				$this->data['empty'] = 'Please upload a file';
				$this->index();
			}else{
				if(!$this->upload->do_upload('photo')){
					if(isset($_FILES['photo']['name'])){
						//set error if filetype is not an image
						$this->data['error'] = $this->upload->display_errors('<p>', '</p>');
						$this->index(); 
					}
					
				}else{
					//else, set the success message 
					$data['upload_data'] = $this->upload->data();
					$uploadSuccess = $data['upload_data'];
					$raw_name = $uploadSuccess['file_name'];
					$this->load->library('image_lib');
					$file_name = $raw_name;
					
					$image_path = 'assets/uploads/logo/' .$file_name;
					$config['image_library'] = 'gd2';
					$config['source_image'] =  $image_path;
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = TRUE;
					$config['width'] = 450;
					$config['height'] = 450;
					$config['new_image'] = 'medium_size_'.$file_name;
					
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
					$this->image_lib->clear();
					
					$createdAt = date('Y-m-d H:i:s');
					$admin = "admin";
					$array = array(
							'user_status'=>$admin,
							'category'=>$this->input->post('category'),
							'filename'=>$file_name,
							'business_name'=>$this->input->post('businessName'),
							'brand_name'=>$this->input->post('brandName'),
							'address'=>$this->input->post('address'),
							'province'=>$this->input->post('province'),
							'account_executive'=>$this->input->post('accountExec'),
							'year_started'=>$this->input->post('dateStarted'),
							'slot'=>$this->input->post('slot'),
							'promo'=>$this->input->post('promo'),
							'created_at'=>$createdAt
							);
					$this->tm->insert($array);
					$this->session->set_flashdata('success', 1);
					redirect('trainingcenterregistrationform');
				}
				
				
			}
			
			
		}
	}
	
	
	
	public function index(){
		$this->data['title'] = 'Training Center Registration Form | Serapio.ph';
		
	
		$this->template_lib->set_view('index_view','trainingcenterregistrationform_view', $this->data);
		
	}
}