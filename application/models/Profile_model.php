<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model{

	public function getUser($id){
		return $this->db->get_where('serapioph_users', array('id'=>$id))->row_object();
	}
}