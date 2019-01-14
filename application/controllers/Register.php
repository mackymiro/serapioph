<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		
		$config['upload_path'] = 'assets/uploads/';
		// set the filter types
		$config['allowed_types'] = 'pdf|gif|jpg|png|jpeg';
		$config['max_size'] = '0';
		$config['encrypt_name']  = TRUE;
		$this->load->library('upload', $config);
		
		$this->upload->initialize($config);
		$this->upload->set_allowed_types($config['allowed_types']);
		
		if($this->session->userdata('loggedIn')){
			redirect('homepage');
		}
	}
	
	
	//check email if already exists
	public function check_email($email){
		$email = $this->input->post('email');
		$result = $this->um->email($email);
		if($result){
			$this->form_validation->set_message('check_email', 'Email Already Exists.');
			return FALSE;
		}else{
			return TRUE;
		}
		
	}
	
	
	//add
	public function add(){
		$this->form_validation->set_rules('firstName', 'First Name', 'required');
		$this->form_validation->set_rules('middleName', 'Middle Name', 'required');
		$this->form_validation->set_rules('lastName', 'Last Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('contactNumber', 'Contact Number', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|callback_check_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Repeat Password', 'required|matches[password]');
		$this->form_validation->set_rules('checkbox', 'Terms and Condition', 'required');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			//print_r($_FILES['pdf']['name']); exit;
			if(isset($_FILES['pdf']['name']) == ""){
				$this->data['empty'] = 'Please upload a file';
				$this->index();
			}else{
				if(!$this->upload->do_upload('pdf')){
					if(isset($_FILES['pdf']['name'])){ 
						//set error if filetype is not an pdf
						$this->data['error'] = $this->upload->display_errors('<p>', '</p>');
						$this->index(); 
					}
				}else{
					//else, set the success message 
					$data['upload_data'] = $this->upload->data();
					$uploadSuccess = $data['upload_data'];
					
					$raw_name = $uploadSuccess['file_name'];
					
					$file_name = $raw_name;
					
					$file_path = 'assets/uploads/' .$file_name;
					
					$createdAt = date('Y-m-d H:i:s');
					$pwd = $this->input->post('password');
					$pwdSha1 = sha1($pwd);
					
					$membersNumber = time() . rand(10*45, 100*98);
							
					$array = array(
							 'members_number' => $membersNumber,
							 'first_name'=>$this->input->post('firstName'),
							 'middle_name'=>$this->input->post('middleName'),
							 'last_name'=>$this->input->post('lastName'),
							 'address'=>$this->input->post('address'),
							 'contact_number'=>$this->input->post('contactNumber'),
							 'username'=>$this->input->post('username'),
							 'email_address'=>$this->input->post('email'),
							 'password'=>$pwdSha1,
							 'reference_person'=>$this->input->post('referencePerson'),
							 'filename'=>$file_name,
							 'created_at'=>$createdAt
							);
					$this->um->insert($array);
					$this->session->set_flashdata('success', 1);
					redirect('register');
				}
				
				
			}		
		
		}
		
		
	}

	
	public function index(){
		$this->data['title'] = "Register | Serapio.ph";
		$this->data['active'] = '';
		
		$this->template_lib->set_view('index_view','register_view', $this->data);
	}
}
