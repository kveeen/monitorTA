<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Account extends CI_Model{

	function daftar($data){
		$this->db->insert('users',$data);
	}

//	public function getUserInfo($id){
//		$a = $this->db->get_where('users', array('id_user' => $id), 1);
//		if ($this->db->affected_rows() > 0) {
//			$row = $a->row();
//			return $row;
//		}else{
//			error_log('No user found getUserInfo('.$id.')');
//			return false;
//		}
//	}

}