<?php

/**
* 
*/
class Register_test extends TestCase
{
	
	public function setUp()
	{
		$this->resetInstance();
		$this->CI->load->model('M_account');
		$this->obj = $this->CI->M_account;
	}

	public function test_index()
	{
		$output = $this->request('GET', '/register');
		$this->assertContains('Pendaftaran Akun', $output);
	}
        
        public function test_register()
        {
                $_SESSION['username'] = 'admin';
                $_SESSION['group'] = '99';
                $output = $this->request(
			'POST',
			['register', 'index'],
			[
			'nama' => 'admin1',
			'username' => 'admin1',
			'password' => '12345',
			'role' => '99',
			]
			);
                $this->assertContains('<title>Notifikasi</title>', $output);
        }

	public function test_method_404()
	{
		$this->request('GET', 'register/method_not_exist');
		$this->assertResponseCode(404);
	}
}