<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trainingcenterregistrationform_model extends CI_Model{
	//getProvince
	public function getProvince(){
		return array(
			'Abra' =>'Abra',
			'Agusan del Norte'=>'Agusan del Norte',
			'Agusan del Sur'=>'Agusan del Sur',
			'Aklan'=>'Aklan',
			'Albay'=>'Albay',
			'Antique'=>'Antique',
			'Apayao'=>'Apayao',
			'Aurora'=>'Aurora',
			'Basilan'=>'Basilan',
			'Bataan'=>'Bataan',
			'Abra'=>'Abra',
			'Batanes'=>'Batanes',
			'Batangas'=>'Batangas',
			'Benguet'=>'Benguet',
			'Biliran'=>'Biliran',
			'Bohol'=>'Bohol',
			'Bukidnon'=>'Bukidnon',
			'Bulacan'=>'Bulacan',
			'Cagayan'=>'Cagayan',
			'Camarines Norte'=>'Camarines Norte',
			'Camarines Sur'=>'Camarines Sur',
			'Camiguin'=>'Camiguin',
			'Capiz'=>'Capiz',
			'Catanduanes'=>'Catanduanes',
			'Cavite'=>'Cavite',
			'Cebu'=>'Cebu',
			'Compostella Valley'=>'Compostella Valley',
			'Cotabato'=>'Cotabato',
			'Davao del Norte'=>'Davao del Norte',
			'Davao del Sur'=>'Davao del Sur',
			'Davao Occidental'=>'Davao Occidental',
			'Davao Oriental'=>'Davao Oriental',
			'Dinagat Islands'=>'Dinagat Islands',
			'Easter Samar'=>'Easter Samar',
			'Guimaras'=>'Guimaras',
			'Ifugao'=>'Ifugao',
			'Ilocos Norte'=>'Ilocos Norte',
			'Ilocos Sur'=>'Ilocos Sur',
			'Iloilo'=>'Iloilo',
			'Isabela'=>'Isabela',
			'Kalinga'=>'Kalinga',
			'La Union'=>'La Union',
			'Laguna'=>'Laguna',
			'Lanao del Norte'=>'Lanao del Norte',
			'Lanao del Sur'=>'Lanao del Sur',
			'Leyte'=>'Leyte',
			'Maguindanao'=>'Maguindanao',
			'Marinduque'=>'Marinduque',
			'Masbate'=>'Masbate',
			'Misamis Occidental'=>'Misamis Occidental',
			'Misamis Oriental'=>'Misamis Oriental',
			'Mountain Province'=>'Mountain Province',
			'Negros Occidental'=>'Negros Occidental',
			'Negros Oriental'=>'Negros Oriental',
			'Nothern Samar'=>'Nothern Samar',
			'Neuva Ecija'=>'Neuva Ecija',
			'Nueva Viscaya'=>'Nueva Viscaya',
			'Occidental Mindoro'=>'Occidental Mindoro',
			'Oriental Mindoro'=>'Oriental Mindoro',
			'Palawan'=>'Palawan',
			'Pampanga'=>'Pampanga',
			'Pangasinan'=>'Pangasinan',
			'Quezon'=>'Quezon',
			'Quirino'=>'Quirino',
			'Rizal'=>'Rizal',
			'Romblon'=>'Romblon',
			'Samar'=>'Samar',
			'Sarangani'=>'Sarangani',
			'Siquijor'=>'Siquijor',
			'Sorsogon'=>'Sorsogon',
			'South Cotabato'=>'South Cotabato',
			'Southern Leyte'=>'Southern Leyte',
			'Sultan Kudarat'=>'Sultan Kudarat',
			'Sulu'=>'Sulu',
			'Surigao del Norte'=>'Surigao del Norte',
			'Surigao del Sur'=>'Surigao del Sur',
			'Tarlac'=>'Tarlac',
			'Tawi-Tawi'=>'Tawi-Tawi',
			'Zambales'=>'Zambales',
			'Zamboanga del Norte'=>'Zamboanga del Norte',
			'Zamboanga del Sur'=>'Zamboanga del Sur',
			'Zamboanga Sibugay'=>'Zamboanga Sibugay',
			'Metro Manila'=>'Metro Manila'
			
		);
	}	
	
	//getTrainingCenterRegForm
	public function getTrainingCenterRegForm($id){
		//return $this->db->get_where('serapioph_training_center_registration_form', array('id'=>$id))->row_object();
		return $this->db->select('
						t.id,
						t.user_status,
						t.category,
						t.institution,
						t.amount,
						s.id,
						s.filename,
						s.business_name,
						s.brand_name,
						s.category,
						s.province,
						s.address,
						s.province,
						s.account_executive,
						s.year_started,
						s.slot,
						s.promo
					 ')
				    ->from('serapioph_training_info t')
					->join('serapioph_training_center_registration_form s', 's.category = t.category')
					->where('s.id', $id)
					->get()->row_object();
	}
	
	//getAllTrainingRegistrationForm
	public function getAllTrainingRegistrationForm(){
		return $this->db->select('
						t.category,
						t.institution,
						t.amount,
						s.id,
						s.business_name,
						s.brand_name,
						s.category,
						s.address,
						s.account_executive,
						s.year_started,
						s.slot,
						s.promo
					 ')
				    ->from('serapioph_training_info t')
					->join('serapioph_training_center_registration_form s', 's.category = t.category')
					->get()->result_object();
	}

	//insert data
	public function insert($data){
		$this->db->insert('serapioph_training_center_registration_form', $data);
		return $this->db->insert_id();
	}

	
	//check if businessName exits
	public function businessName($businessName){
		$this->db->select('
						serapioph_training_center_registration_form.business_name
						')
				  ->from('serapioph_training_center_registration_form')
				  ->where('business_name', $businessName);
		$q = $this->db->get();
		if($q->num_rows() == 1){
			return $q->result();
		}else{
			return false;
		}
	}
}