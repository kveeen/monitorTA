<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model {
	
	public function all(){
		//query semua record di table products
		$hasil = $this->db->get('users');
		if($hasil->num_rows() > 0){
			return $hasil->result();} }
//                else {
//			return array();
//		}
//	}

	
	public function check_credential()
	{
		$username = set_value('username');
		$password = set_value('password');
		
		$hasil = $this->db->where('username', $username)->where('password', sha1($password))->limit(1)->get('users');
		
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

}