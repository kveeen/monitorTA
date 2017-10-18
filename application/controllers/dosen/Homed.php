<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homed extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('loginu');
		}
	}
	
	public function index()
	{
		$this->load->view('backend/view_home');
	}
	
}