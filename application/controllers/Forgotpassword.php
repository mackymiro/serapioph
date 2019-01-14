<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpassword extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model', 'lm');
		$this->load->model('users_model', 'um');
		
		$this->load->library('email');
		
	}
	
	//success
	public function success(){
		$this->data['title'] = 'Success | Serapio.ph';
		$this->data['active'] = '';
		
		$this->template_lib->set_view('index_view','forgotpasswordsuccess_view', $this->data);
	}
	
	//update new password
	public function update(){
		$this->form_validation->set_rules('password', 'New Password', 'required');
		$this->form_validation->set_rules('confNewPassword', 'Confirm New Password', 'required|matches[password]');
		if($this->form_validation->run() == FALSE){
			$this->data['uri'] = $this->uri->segment(3);
			$uri = $this->data['uri'];
			$this->change();
			
		}else{
			$this->data['uri'] = $this->uri->segment(3);
			$uri = $this->data['uri'];
			
			//update password
			$updatedAt = date('Y-m-d H:i:s');
			$pwd = $this->input->post('password');
			$pwdSha1 = sha1($pwd);
			$update = array(
					'password'=>$pwdSha1,
					'updated_at'=>$updatedAt
					);
			$this->db->where('random_code', $uri)->update('serapioph_users', $update);
				
			$this->data['getRandomCode'] = $this->um->getRandomCode($uri);
			$email = $this->data['getRandomCode']->email_address;
			
			//update random code to NULL
			$rNull = NULL;
			$newUpdate = array(
					'random_code'=>$rNull
					);
			$this->db->where('email_address', $email)->update('serapioph_users', $newUpdate);
			
			$this->session->set_flashdata('success', 1);
			redirect('forgotpassword/success');
			
			
		}
		
	}
	
	//change password
	public function change(){
		$this->data['title'] = 'Change Password | Serapio.ph';
		$this->data['uri'] = $this->uri->segment(3);
		$uri = $this->data['uri'];
		
		$this->data['active'] = '';
	
		$this->template_lib->set_view('index_view','requestchangepassword_view', $this->data);
	}

	//request password
	public function request(){
		$this->form_validation->set_rules('email', 'Email Address', 'required');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$email = $this->input->post('email');
			$result = $this->lm->email($email);
			if($result){
				$randomCode = substr(hash('sha512',rand()),0,12);
				
				//save the random code in the database
				$array = array(
						'random_code'=>$randomCode
						);
				$this->db->where('email_address', $email)->update('serapioph_users', $array);
				$this->email->from('no-reply@serapio.ph', 'Serapio.ph');
				$this->email->to($email);
				$this->email->subject("Change Password | Serapio.ph");
				$this->email->message("
                           <!DOCTYPE html>
                            <html>
                            <head>
                            <title>Serapio.ph</title>
                            </head>
                            <body>
                            <div style='width:500px; >
                                    <div style='width:500px;'>
                                        <a href='https://serapio.ph' target='_blank' rel='nofollow' >
                                          <img alt='Serapio.ph' src='https://searpio.ph/assets/images/serapio-seal4.png' />
                                        </a>                           
                                      </div>
                                    <div style='margin-top:60px;'>
                                            <p style='font-size:13px; font-weight:bold'>
                                                 Hello! youv'e requested to change your password. Open this link below<br />
                                                <a href=https://serapio.ph/forgotpassword/change/$randomCode target='_blank' rel='nofollow'>
                                                  https://serapio.ph/forgotpassword/change/$randomCode
            
                                                </a>
                                                <br>
                                                <br>
                                                
                                            </p>
                                            <br />
                                            <p style='font-size:13px; font-weight:bold'>
                                                Serapio.ph Team
                                            </p>
                                        </div>
                                    </div>
                            </body>
                            </html>
                        ");
				$this->email->send();
				$this->session->set_flashdata('succ_send', 1);
				redirect('forgotpassword/request');
				
			}else{
				$this->session->set_flashdata('succ_failed', 1);
                redirect('forgotpassword/request');
			}
		}
	}
	
	public function index(){
		$this->data['title'] = 'Forgot Password | Swerapio.ph';
		$this->data['active'] = '';
		
		$this->template_lib->set_view('index_view','forgotpassword_view', $this->data);
	}

}