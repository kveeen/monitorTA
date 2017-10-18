<?php

/**
* 
*/
class Regm_test extends TestCase
{
	
	public function setUp()
	{
		$this->resetInstance();
	}

	public function test_index()
	{
		$output = $this->request('GET', '/admin/regm');
		$this->assertContains('Pendaftaran Akun', $output);
	}
        
        public function test_register()
        {
                $_SESSION['username'] = 'admin';
                $_SESSION['group'] = '99';
                $output = $this->request(
			'POST',
			['regm', 'index'],
			[
			'nama' => 'Kevin',
			'username' => 'kevin',
			'password' => '12345',
			'role' => '2',
			]
			);
                $this->assertContains('<title>Notifikasi</title>', $output);
        }

        public function test_method_404()
	{
		$this->request('GET', 'admin/regm/method_not_exist');
		$this->assertResponseCode(404);
	}
}