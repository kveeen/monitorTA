<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		
		$this->load->helper('url', 'form');
		$this->load->database();
	}

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required|alpha_numeric');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('dosen/form_login');
		} else {
			$this->load->model('model_users');
			$valid_user = $this->model_users->check_credential();
			
			if($valid_user == FALSE)
			{
				$this->session->set_flashdata('error','Wrong Username / Password!');
				redirect('loginu');
			} else {
				// if the username and password is a match
				$this->session->set_userdata('username', $valid_user->username);
				$this->session->set_userdata('group', $valid_user->role);
				
				switch($valid_user->role){
					case 1 : //dosen
								redirect('dosen/homed'); break;
					case 2 : //mahasiswa
								redirect('mahasiswa/teko');break; default: break; 
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');}
}