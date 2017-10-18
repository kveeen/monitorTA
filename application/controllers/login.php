<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form', 'simple_login');
		$this->load->database();
	}

	public function index() {

		$valid = $this->form_validation;
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $valid->set_rules('username','Username','required');
        $valid->set_rules('password','Password','required');

		if($valid->run()) {$this->simple_login->login($username,$password);}$this->load->view('account/v_login');
	}

	public function logout(){
		$this->simple_login->logout();}
}