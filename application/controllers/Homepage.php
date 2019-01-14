<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Homepage extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model', 'um');
		$this->load->model('enrollmentform_model', 'em');
		$this->load->model('homepage_model', 'hm');
		$this->load->model('data_model', 'dm');
		
		if($this->session->userdata('loggedIn')){
			$sessionData = $this->session->userdata('loggedIn');
			$this->data['id'] = $sessionData['id'];
			$this->data['username'] = $sessionData['username'];
			
			$this->data['status'] = $this->um->getStatus($this->data['id']);
			$this->data['getStatus'] = $this->data['status']->status;
			if($this->data['getStatus'] == "admin"){
				redirect('companyregistrationform');
			}
		}
	
		//getCategory
		$this->data['getCategory'] = $this->um->getCategory();
		$getCategory = $this->data['getCategory'];
		
		//getProvince
		$this->data['getProvince'] = $this->dm->getProvince();
		
		if(!$this->session->userdata('loggedIn')){
			//$this->data['status'] = $this->um->getStatus($this->data['id']);
			//$this->data['getStatus'] = $this->data['status']->status;
			//redirect('homepage');
			//redirect('login');
		}
	}
	
	//search
	public function search(){
		$this->data['title'] = 'Search | Serapio.ph';
		$this->data['active'] = '';
		
		$category = $this->input->post('category');
		$this->data['category'] = $this->input->post('category');
		$this->data['tCourse'] = $this->input->post('trainingCourse');
		$tCourse = $this->data['tCourse'];
		
		$this->data['rCourse'] = $this->input->post('reviewCourse');
		$rCourse = $this->data['rCourse'];
		
		$this->data['sTraining'] = $this->input->post('shipboardTraining');
		$sTraining = $this->data['sTraining'];
		
		$this->data['manning'] = $this->input->post('manning');
		$manning = $this->data['manning'];
		
		$this->data['province'] =  $this->input->post('province');
		$province = $this->input->post('province');
		
		$this->data['practicalAssesment'] = $this->input->post('practicalAssesment');
		$practicalAssesment = $this->data['practicalAssesment'];
		//echo $category;
		//echo "<br>";
		//echo $this->data['tCourse'];
		//echo "<br>";
		//echo $this->data['rCourse'];
		//echo "<br>";
		//echo $province; 
		//echo "<br>";
		//echo $manning;
		//echo "<br>";
		//echo $sTraining;
		
		
	
		//category condition in search
		if($category == 1){
			//search
			$this->data['getSearch1'] = $this->hm->getSearch1($category, $tCourse, $province);
			//echo "<pre>";
			//print_r($this->data['getSearch1'] );
			//echo "</pre>"; 
			//exit;
			
			//category condition and province is ALL
			/*if($tCourse == 0 && $province == "ALL"){
				$this->data['getSearch1Prov'] = $this->hm->getSearch1Prov($category);
				//echo "<pre>";
				//print_r($this->data['getSearch1Prov'] );
				//echo "</pre>"; 
				//exit;		
			}*/
			

			//category condition, course and province is ALL
			if($province == "ALL"){
				$this->data['getSearch1CourseProv'] = $this->hm->getSearch1CourseProv($category, $tCourse);
				//echo "<pre>";
				//print_r($this->data['getSearch1CourseProv'] );
				//echo "</pre>"; 
				//exit;	
				
			}
			
			$this->template_lib->set_view('index_view','search_view', $this->data);
		}else if($category == 2){
			//search
			$this->data['getSearch2'] = $this->hm->getSearch2($category, $rCourse, $province);
			
			//echo "<pre>";
			//print_r($this->data['getSearch2'] );
			//echo "</pre>"; 
			//exit;
			
			//category condition and province is ALL
			/*if($rCourse == 0 && $province == "ALL"){
				$this->data['getSearch2Prov'] = $this->hm->getSearch2Prov($category);
				echo "<pre>";
				print_r($this->data['getSearch2Prov'] );
				echo "</pre>"; 
				//exit;		
			}*/
			
			if($province == "ALL"){
				//category condition, course and province is ALL
				
				$this->data['getSearch2CourseProv'] = $this->hm->getSearch2CourseProv($category, $rCourse);
				//echo "<pre>";
				//print_r($this->data['getSearch2CourseProv'] );
				//echo "</pre>"; 
				//exit;	
			}
			
			
		
			$this->template_lib->set_view('index_view','search2_view', $this->data);
		}else if($category == 3){
			//search
			$this->data['getSearch3'] = $this->hm->getSearch3($category, $manning, $province);
			
			//echo "<pre>";
			//print_r($this->data['getSearch3'] );
			//echo "</pre>"; 
			//exit;
			
			//category condition and province is ALL
			/*if($province == "ALL"){
				$this->data['getSearch3Prov'] = $this->hm->getSearch3Prov($category, $manning);
				//echo "<pre>";
				//print_r($this->data['getSearch3Prov'] );
				//echo "</pre>"; 
				//exit;		
			}*/
			
			//category condition, course and province is ALL
			
			if($province == "ALL"){
				$this->data['getSearch3CourseProv'] = $this->hm->getSearch2CourseProv($category, $manning);
				//echo "<pre>";
				//print_r($this->data['getSearch3CourseProv'] );
				//echo "</pre>"; 
				//exit;		
			}
			
			$this->template_lib->set_view('index_view','search3_view', $this->data);
		}else if($category == 4){
			//search
			$this->data['getSearch4'] = $this->hm->getSearch4($category, $sTraining, $province);
				
			//echo "<pre>";
			//print_r($this->data['getSearch4'] );
			//echo "</pre>"; 
			//exit;
			
			//category condition and province is ALL
			/*if($province == "ALL"){
				$this->data['getSearch4Prov'] = $this->hm->getSearch4Prov($category, $sTraining);
				//echo "<pre>";
				//print_r($this->data['getSearch4Prov'] );
				//echo "</pre>"; 
				//exit;		
			}*/
			
			//category condition, course and province is ALL
			
			if($province == "ALL"){
				$this->data['getSearch4CourseProv'] = $this->hm->getSearch4CourseProv($category, $sTraining);
				//echo "<pre>";
				//print_r($this->data['getSearch4CourseProv'] );
				//echo "</pre>"; 
				//exit;		
			}
			
			$this->template_lib->set_view('index_view','search4_view', $this->data);
		}else if($category == 5){
			$this->data['getSearch5'] = $this->hm->getSearch5($category, $practicalAssesment, $province);
			
			if($province == "ALL"){
				
			}
			
			$this->template_lib->set_view('index_view','search5_view', $this->data);
		}
		
	
	}
	
	
	public function index(){
		$this->data['title'] = 'Homepage | Serapio.ph';
		
		
		$this->template_lib->set_view('index_view','homepage_view', $this->data);
		
	}
	
	
}