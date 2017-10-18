<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_jadwal extends CI_Model {

	public function all(){
		//query semua record di table products
		$hasil = $this->db->get('jadwal');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}

	public function find($jadwalid){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('jadwalid', $jadwalid)
						  ->limit(1)
						  ->get('jadwal');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

	public function create($data_jadwal){
		//Query INSERT INTO
		
		$this->db->insert('jadwal', $data_jadwal);
	}
	
	public function delete($jadwalid){
		//Query DELETE ... WHERE id=...
		$this->db->where('jadwalid', $jadwalid);
                $this->db->delete('jadwal');
	}
	
	public function update($jadwalid, $data_jadwal){
		//Query UPDATE FROM ... WHERE id=...
		$this->db->where('jadwalid', $jadwalid)
				 ->update('jadwal', $data_jadwal);
	}

	public function getCurrentRow(){
		return $this->db->get('jadwal')->num_rows();
	}
        
        function getId($where){
 		$this->db->where('jadwalid', $where);
 		$data = $this->db->get('jadwal');
 		return $data->result_array();
 	}
}