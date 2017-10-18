<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('loginu');
		}
		
		//load model -> model_products
		$this->load->model('model_jadwal');
		$this->load->model('model_users');
	}
	
	public function index()
	{
		$data['jadwal'] = $this->model_jadwal->all();
		$data['users'] = $this->model_users->all();
		$this->load->view('backend/view_jadwal', $data);
	}
	
    
	public function create(){
	
			if($this->input->post('selected_text') != 'admin'){
				$nama = $this->input->post('selected_text');
				$tanggal = $this->input->post('tanggal');
				$hari = $this->input->post('hari');
				$jam = $this->input->post('jam');
				$data_jadwal =	array(
					'namaj'			=> $nama,
					'tanggalj'		=> $tanggal,
					'harij'			=> $hari,
					'jamj'			=> $jam,
				);
				$this->model_jadwal->create($data_jadwal);
			redirect('dosen/jadwal');}
			else {
                        redirect('dosen/jadwal');}}
                        
	public function delete($jadwalid){
		$this->model_jadwal->delete($jadwalid);
		redirect('dosen/jadwal');
	}
	
	public function update($jadwalid){
				$nama = $this->input->post('nama');
				$tanggal = $this->input->post('tanggal');
				$hari = $this->input->post('hari');
				$jam = $this->input->post('jam');
				$data_jadwal =	array(
					'namaj'			=> $nama,
					'tanggalj'		=> $tanggal,
					'harij'			=> $hari,
					'jamj'			=> $jam,
				);
				$this->model_jadwal->update($jadwalid, $data_jadwal);
				redirect('dosen/jadwal');
			
	}
	public function formupdate($jadwalid){
;
			$data['jadwal'] = $this->model_jadwal->find($jadwalid);
			$this->load->view('dosen/form_edit_jadwal', $data);
			
	}
		}
	

