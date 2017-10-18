<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Register extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('m_account');
	}

	public function index(){
		$this->form_validation->set_rules('nama', 'NAMA','required');
		$this->form_validation->set_rules('username', 'USERNAME','required');
		$this->form_validation->set_rules('password', 'PASSWORD','required');
		$this->form_validation->set_rules('role','ROLE','required');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('account/v_register');
		}else{

			$data['nama'] = $this->input->post('nama');
			$data['username'] = $this->input->post('username');
			$data['password'] = sha1($this->input->post('password'));
			$data['role'] = $this->input->post('role');

			$this->m_account->daftar($data);

			$pesan['message'] = "Pendaftaran berhasil";

			$this->load->view('account/v_success',$pesan);
		}
	}
}