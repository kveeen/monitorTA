<?php

class List_mhs extends CI_Model {

    public function toto() {
        $datasiswa = $this->db->get('mahasiswa');
        return $datasiswa;
    }

    public function ambil_jadwal(){
    	$datajadwal = $this->db->get('jadwal');
    	return $datajadwal;
    }

}
?>

