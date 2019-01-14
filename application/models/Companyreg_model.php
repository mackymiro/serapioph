<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Companyreg_model extends CI_Model{
	//getCompaniesLogo
	public function getCompaniesLogo(){
		return $this->db->select('
						serapioph_company_registration_form.company_photo,
						serapioph_company_registration_form.company_name
					 ')
				    ->from('serapioph_company_registration_form')
					->get()->result_object();
	}

	//getCompanyRegistrationId
	public function getCompanyRegistrationId($id){
		return $this->db->get_where('serapioph_company_registration_form', array('id'=>$id))->row_object();
	}
	
	//getCompanyRegistration
	public function getCompanyRegistration(){
		return $this->db->select('
						serapioph_company_registration_form.id,
						serapioph_company_registration_form.company_photo,
						serapioph_company_registration_form.company_name,
						serapioph_company_registration_form.company_address,
						serapioph_company_registration_form.province,
						serapioph_company_registration_form.account_executive,
						serapioph_company_registration_form.year_started
					 ')
				    ->from('serapioph_company_registration_form')
					->get()->result_object();
	}
	
	//insert data
	public function insert($data){
		$this->db->insert('serapioph_company_registration_form', $data);
		return $this->db->insert_id();
	}

	//check if company name exists
	public function companyName($companyName){
		$this->db->select('
						serapioph_company_registration_form.company_name
						')
				  ->from('serapioph_company_registration_form')
				  ->where('company_name', $companyName);
		$q = $this->db->get();
		if($q->num_rows() == 1){
			return $q->result();
		}else{
			return false;
		}
	}
}