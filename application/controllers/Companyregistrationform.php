<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Companyregistrationform extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('data_model', 'dm');
		$this->load->model('companyreg_model', 'cm');
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
		
		//getProvince
		$this->data['getProvince'] = $this->dm->getProvince();
		
		$config['upload_path'] = 'assets/uploads/logo/';
		// set the filter types
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '9000';
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->set_allowed_types($config['allowed_types']);
		
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
	
	
	//check if company name exists
	public function check_company_name($companyName){
		$companyName = $this->input->post('companyName');
		$result = $this->cm->companyName($companyName);
		if($result){
			$this->form_validation->set_message('check_company_name', 'Company Name Exists.');
			return FALSE;
		}else{
			return TRUE;
		}	
	}
	
	
	//update
	public function update(){
		$this->form_validation->set_rules('companyName', 'Company Name', 'required', TRUE);
		$this->form_validation->set_rules('companyAddress', 'Company Address', 'required', TRUE);
		$this->form_validation->set_rules('province', 'Province', 'required', TRUE);
		$this->form_validation->set_rules('accountExecutive', 'Account Executive', 'required', TRUE);
		$this->form_validation->set_rules('dateStarted', 'Date Started', 'required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->data['title'] = 'Edit Company Registration Form | Serapio.ph';
			
			$editId = $this->input->post('editId');
			
			//getCompanyRegistrationId
			$this->data['getCompanyRegistrationId'] = $this->cm->getCompanyRegistrationId($editId);
			$this->template_lib->set_view('index_view','edit_companyregistration_view', $this->data);
		}else{
			if(!$this->upload->do_upload('photo')){
				//edit the page without uploading a photo
				if($_FILES['photo']['name'] == ""){	
					$updatedAt = date('Y-m-d H:i:s');
					$update = array(
							'company_name' =>$this->input->post('companyName'),
							'company_address'=>$this->input->post('companyAddress'),
							'province'=>$this->input->post('province'),
							'account_executive'=>$this->input->post('accountExecutive'),
							'year_started'=>$this->input->post('dateStarted')
						);
					$this->db->where('id', $this->input->post('editId'))->update('serapioph_company_registration_form', $update);
					$this->session->set_flashdata('update', 1);
					redirect('companyregistrationform/edit/id/'.$this->input->post('editId'));
				}
				
				//return error type when filetype is not an image
				$this->data['title'] = 'Edit Company Registration Form | Serapio.ph';
				
				$this->data['error'] = $this->upload->display_errors('<p>', '</p>');
				$editId = $this->input->post('editId');
				
				//getCompanyRegistrationId
				$this->data['getCompanyRegistrationId'] = $this->cm->getCompanyRegistrationId($editId);
				$this->template_lib->set_view('index_view','edit_companyregistration_view', $this->data);
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
					$config['width'] = 350;
					$config['height'] = 350;
					$config['new_image'] = 'medium_size_'.$file_name;
					
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
					$this->image_lib->clear();
					
					$image_path = 'assets/uploads/logo/' .$file_name;
					$config['image_library'] = 'gd2';
					$config['source_image'] =  $image_path;
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = TRUE;
					$config['width'] = 180;
					$config['height'] = 180;
					$config['new_image'] = 'thumb_size_'.$file_name;
					
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
					$this->image_lib->clear();
					
					$updatedAt = date('Y-m-d H:i:s');
					$update = array(
						'company_photo'=>$file_name,
						'company_name' =>$this->input->post('companyName'),
						'company_address'=>$this->input->post('companyAddress'),
						'province'=>$this->input->post('province'),
						'account_executive'=>$this->input->post('accountExecutive'),
						'year_started'=>$this->input->post('dateStarted')
					);
					
				$this->db->where('id', $this->input->post('editId'))->update('serapioph_company_registration_form', $update);
				$this->session->set_flashdata('update', 1);
				redirect('companyregistrationform/edit/id/'.$this->input->post('editId'));
			}
		}
	}
	
	//edit
	public function edit(){
		$this->data['title'] = 'Edit Company Registration Form | Serapio.ph';
		$this->data['uri'] = $this->uri->segment(4);
		
		//getCompanyRegistrationId
		$this->data['getCompanyRegistrationId'] = $this->cm->getCompanyRegistrationId($this->data['uri']);
		
		$this->template_lib->set_view('index_view','edit_companyregistration_view', $this->data);
		
	}
	
	//add
	public function add(){
		$this->form_validation->set_rules('companyName', 'Company Name', 'required|callback_check_company_name', TRUE);
		$this->form_validation->set_rules('companyAddress', 'Company Address', 'required', TRUE);
		$this->form_validation->set_rules('province', 'Province', 'required', TRUE);
		$this->form_validation->set_rules('accountExecutive', 'Account Executive', 'required', TRUE);
		$this->form_validation->set_rules('dateStarted', 'Date Started', 'required', TRUE);
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
					$config['width'] = 350;
					$config['height'] = 350;
					$config['new_image'] = 'medium_size_'.$file_name;
					
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
					$this->image_lib->clear();
					
					$image_path = 'assets/uploads/logo/' .$file_name;
					$config['image_library'] = 'gd2';
					$config['source_image'] =  $image_path;
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = TRUE;
					$config['width'] = 180;
					$config['height'] = 180;
					$config['new_image'] = 'thumb_size_'.$file_name;
					
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
					$this->image_lib->clear();
					
					$createdAt = date('Y-m-d H:i:s');
					$array = array(
						'company_photo'=>$file_name,
						'company_name'=>$this->input->post('companyName'),
						'company_address'=>$this->input->post('companyAddress'),
						'province'=>$this->input->post('province'),
						'account_executive'=>$this->input->post('accountExecutive'),
						'year_started'=>$this->input->post('dateStarted'),
						'created_at'=>$createdAt
						);
					$this->cm->insert($array);
					$this->session->set_flashdata('success', 1);
					redirect('companyregistrationform');
					
				}
			}
		}
	}
	
	
	public function index(){
		$this->data['title'] = 'Company Registration Form | Serapio.ph';
	
		//getCompanyRegistration
		$this->data['getCompanyRegistration'] = $this->cm->getCompanyRegistration();
		
		
		$this->template_lib->set_view('index_view','company_registration_form_view', $this->data);
	}
}