<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Account extends CI_Model{

	function daftar($data){
		$this->db->insert('users',$data);
	}

	function getNumRow($nama, $username, $password, $role)
	{
		$this->db->where('nama', $nama);
		$this->db->where('username', $username);
		$this->db->where('password', sha1($password));
		$this->db->where('role', $role);
		$query = $this->db->get('users');
		return $query->num_rows();
	}

	function delete($nama, $username, $password, $role)
	{
		$this->db->where('nama', $nama);
		$this->db->where('username', $username);
		$this->db->where('password', sha1($password));
		$this->db->where('role', $role);
		$query = $this->db->delete('users');
	}

	function cek_admin($table, $where){
		return $this->db->get_where($table, $where);
	}

	// public function getUserInfo($id){
	// 	$a = $this->db->get_where('users', array('id_user' => $id), 1);
	// 	if ($this->db->affected_rows() > 0) {
	// 		$row = $a->row();
	// 		return $row;
	// 	}else{
	// 		error_log('No user found getUserInfo('.$id.')');
	// 		return false;
	// 	}
	// }

}