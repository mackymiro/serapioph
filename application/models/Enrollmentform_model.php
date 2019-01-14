<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enrollmentform_model extends CI_Model{
	
	//getAllEnrollment
	public function getAllEnrollment(){
		return $this->db->select('
							serapioph_enrollment_form.id,
							serapioph_enrollment_form.first_name,
							serapioph_enrollment_form.middle_name,
							serapioph_enrollment_form.last_name,
							serapioph_enrollment_form.user_address,
							serapioph_enrollment_form.contact_number,
							serapioph_enrollment_form.amount_from_form,
							serapioph_enrollment_form.category,
							serapioph_enrollment_form.company_name,
							serapioph_enrollment_form.address,
							serapioph_enrollment_form.account_executive,
							serapioph_enrollment_form.date_started,
							serapioph_enrollment_form.amount,
							serapioph_enrollment_form.promo,
							serapioph_enrollment_form.preferred_month,
							serapioph_enrollment_form.preferred_time,
							serapioph_enrollment_form.reference_number,
							serapioph_enrollment_form.training_course,
							serapioph_enrollment_form.training_fee,
							serapioph_enrollment_form.review_course,
							serapioph_enrollment_form.review_fee,
							serapioph_enrollment_form.review_schedule,
							serapioph_enrollment_form.minimum_qualifications,
							serapioph_enrollment_form.minimum_requirements,
							serapioph_enrollment_form.schedule,
							serapioph_enrollment_form.position,
							serapioph_enrollment_form.shipboard_training_course,
							serapioph_enrollment_form.starting_rate,
							serapioph_enrollment_form.date_needed
							')
					->from('serapioph_enrollment_form')
					->get()->result_object();
	}
	
	//getMyEnrollmentView
	public function getMyEnrollmentView($id){
		return $this->db->get_where('serapioph_enrollment_form', array('id'=>$id))->row_object();
	}
	
	//getMyEnrollment
	public function getMyEnrollment($id){
		return $this->db->get_where('serapioph_enrollment_form', array('user_id'=>$id))->result_object();
	}
	
	//insert enrollement form
	public function insertEnrollment($data){
		$this->db->insert('serapioph_enrollment_form', $data);
	}
	
	
	//getUserEnrollmentForm
	public function getUserEnrollmentForm($id){
		return $this->db->get_where('serapioph_enrollment_form', array('id'=>$id))->row_object();
	}
	
	
	//getEnrollmentForm
	public function getEnrollmentForm($id){
		return $this->db->get_where('serapioph_enrollment_form', array('id'=>$id))->row_object();
	}
	
	//getAllEnrollmentForm join to training info table
	public function getAllEnrollmentForm(){
		return $this->db->select('
						 t.category,
						 t.school,
						 t.address,
						 t.amount,
						 t.slot,
						 e.id,
						 e.training,
						 e.name,
						 e.preferred_month,
						 e.preferred_time,
						 e.details,
						 e.reference_number
						')
					->from('serapioph_training_info t')
					->join('serapioph_enrollment_form e', 'e.category = t.id')
					->get()->result_object();
	

	}
	
	//insert data
	
	public function insert($data){
		$this->db->insert('serapioph_enrollment_form', $data);
		return $this->db->insert_id();
	}
	
	//check if school exits
	public function school($school){
		$this->db->select('
						serapioph_enrollment_form.school
						')
				  ->from('serapioph_enrollment_form')
				  ->where('school', $school);
		$q = $this->db->get();
		if($q->num_rows() == 1){
			return $q->result();
		}else{
			return false;
		}
	}
	
	//getYear
	public function getYear(){
		return array(
		  0000 => 'Year',
		  2021 => '2021',
		  2020 =>'2020',
		  2019 =>'2019',
		  2018 =>'2018'
    );
	}
	
	//getDay
	public function getDay(){
		 return array(
		  0 =>'Day',
		  1 =>'1',
		  2 =>'2',
		  3 =>'3',
		  4 =>'4',
		  5 =>'5',
		  6 =>'6',
		  7 =>'7',
		  8 =>'8',
		  9 =>'9',
		  10 =>'10',
		  11 =>'11',
		  12 =>'12',
		  13 =>'13',
		  14 =>'14',
		  15 =>'15',
		  16 =>'16',
		  17 =>'17',
		  18 =>'18',
		  19 =>'19',
		  20 =>'20',
		  21 =>'21',
		  22 =>'22',
		  23 =>'23',
		  24 =>'24',
		  25 =>'25',
		  26 =>'26',
		  27 =>'27',
		  28 =>'28',
		  29 =>'29',
		  30 =>'30',
		  31 =>'31'
      
    );
	}
	
	//getMonth
	public function getMonth(){
		 return array(
			  0 =>'Month',
			  1 =>'January',
			  2 =>'February',
			  3 =>'March',
			  4 =>'April',
			  5 =>'May',
			  6 =>'June',
			  7 =>'July',
			  8 =>'August',
			  9 =>'September',
			  10 =>'October',
			  11 =>'November',
			  12 =>'December'
			);
	}
	
	//getTime
	public function getTime(){
		return array(
			  0 =>'Time',
			  1 =>'6:00',
			  2 =>'7:00',
			  3 =>'8:00',
			  4 =>'9:00',
			  5 =>'10:00',
			  6 =>'11:00',
			  7 =>'12:00',
			  8 =>'13:00',
			  9 =>'14:00',
			  10 =>'15:00',
			  11 =>'16:00',
			  12 =>'17:00',
			  13 =>'18:00',
			  14 =>'19:00',
			  15 =>'20:00',
			  16 =>'21:00',
			  17 =>'22:00',
			  18 =>'23:00',
			  19 =>'0:00'
			);
	}
	
	
	
}