<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Regd extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('group') != '99'){
		$this->session->set_flashdata('error','Sorry, you are not logged in!');
		redirect('home');
	}
	}

	public function index(){
		$this->form_validation->set_rules('nama', 'NAMA','required');
		$this->form_validation->set_rules('username', 'USERNAME','required');
		$this->form_validation->set_rules('password', 'PASSWORD','required');
		$this->form_validation->set_rules('role','ROLE','required');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('account/d_register');
		}else{
			$this->load->helper('security');
			$password = $this->input->post('password', TRUE);
			$data['nama'] = $this->input->post('nama', TRUE);
			$data['username'] = $this->input->post('username', TRUE);
			$data['password'] = sha1($password);
			$data['role'] = $this->input->post('role', TRUE);

                        $this->m_account->daftar($data);

			$pesan['message'] = "Pendaftaran berhasil";

			$this->load->view('account/v_success',$pesan);
		}
	}

	public function test(){
		$total = $this->m_account->getNumRow('Doni', 'don3', '12345', '1');
		echo "<script>alert('".$total."')</script>";
	}
}