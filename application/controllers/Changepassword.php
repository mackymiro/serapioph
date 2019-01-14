<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		
		$this->data['status'] = $this->um->getStatus($this->data['id']);
		$this->data['getStatus'] = $this->data['status']->status;
	}
	
		
	//change password
	public function change(){
		$this->form_validation->set_rules('currentPassword', 'Change Password', 'required', TRUE);
		$this->form_validation->set_rules('newPassword', 'New Password', 'required|matches[confPassword]', TRUE);
		$this->form_validation->set_rules('confPassword', 'Confirm New Password', 'required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->index();	
		}else{
			 $this->data['title'] = 'Change Password | Serapio.ph';
			 
			$currentPassword = $this->input->post('currentPassword');
			$pwdSha1 = sha1($currentPassword);
			
			//query the current password in the database
			$this->data['getUserInfo'] = $this->um->getUserInfo($this->data['id']);
			foreach($this->data['getUserInfo'] as $user){
				$getCurrentPassword = $user->password;
			}
			
			//match if the current password is not the same in the database
			if($pwdSha1 != $getCurrentPassword){
				
				$this->data['errorCurrentPassword'] = '<div class="alert alert-danger">Your password does not match the current password</div>';
				
				$this->template_lib->set_view('index_view','changepassword_view', $this->data);
			}else{
				$newPassword = $this->input->post('newPassword');
				$pwdSha1 = sha1($newPassword);
				
				$update = array(
						'password'=>$pwdSha1
						);
				$this->db->where('id', $this->data['id'])->update('serapioph_users', $update);
				$this->session->set_flashdata('successPassword', 1);
				redirect('changepassword/change');
			}
			
		}
	}
	
	public function index(){
		
		$this->data['title'] = 'Change Password | Serapio.ph';
		
		$this->template_lib->set_view('index_view','changepassword_view', $this->data);
	}
}