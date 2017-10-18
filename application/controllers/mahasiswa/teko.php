<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teko extends CI_Controller {
	function __construct()
    {
        parent::__construct();
            $this->load->helper('url');
            //$this->load->library('url');

    }

	public function index()
	{
		//$this->load->helper('url');
		$this->load->model('list_mhs');
        $datasis['data'] = $this->list_mhs->toto()->result();
        $this->load->view('mhs/home', $datasis);
		//$this->load->view('home');
	}

	public function profile(){
		$this->load->model('list_mhs');
        $datasis['data'] = $this->list_mhs->toto()->result();
        $this->load->view('mhs/profile',$datasis);
		//$this->load->view('profile');
	}

	public function jadwal(){
		$this->load->model('list_mhs');
        $datajad['dataj'] = $this->list_mhs->ambil_jadwal()->result();
        $this->load->view('mhs/jadwal',$datajad);
		
	}
}
