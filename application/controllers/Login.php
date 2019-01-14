<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model', 'lm');
		$this->load->model('users_model', 'um');
		
		$sessionData = $this->session->userdata('loggedIn');
		$this->data['id'] = $sessionData['id'];
		$this->data['username'] = $sessionData['username'];
		
		
		if($this->session->userdata('loggedIn')){
			$this->data['status'] = $this->um->getStatus($this->data['id']);
			$this->data['getStatus'] = $this->data['status']->status;
			redirect('homepage');
		}
	}
	
	
	//check database
	public function check_database($password){
		$username = $this->input->post('username');
		$result = $this->lm->login($username, $password);
		if($result){
			$sess_array = array();
			foreach($result as $row){
				$sess_array = array(
							'id'=>$row->id,
							'username'=>$row->username,
							'status'=>$row->status,
							'is_approved'=>$row->is_approved,
						);	
				print_r($this->session->set_userdata('loggedIn', $sess_array));
				
			}
			return true;
		}else{
			$this->form_validation->set_message('check_database', 'Invalid Username or Password');
			return false;
		}
	}


	//auth
	public function auth(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required', TRUE);
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$sessionData = $this->session->userdata('loggedIn');
			$this->data['status'] = $this->um->getStatus($this->data['id']);
			$this->data['getStatus'] = $this->data['status']->status;
			redirect('homepage');
		}
	}
	
	public function index(){
		$this->data['title'] = "Login | Serapio.ph";
		
		
		$this->template_lib->set_view('index_view','login_view', $this->data);
	}
}
