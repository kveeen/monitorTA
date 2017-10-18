<?php

/**
* 
*/
class Regd_test extends TestCase
{
	
	public function setUp()
	{
		$this->resetInstance();
	}

	public function test_index()
	{
		$output = $this->request('GET', '/admin/regd');
		$this->assertContains('Pendaftaran Akun', $output);
	}
        
        public function test_register()
        {
                $_SESSION['username'] = 'admin';
                $_SESSION['group'] = '99';
                $output = $this->request(
			'POST',
			['regd', 'index'],
			[
			'nama' => 'Doni',
			'username' => 'don1',
			'password' => '12345',
			'role' => '1',
			]
			);
                $this->assertContains('<title>Notifikasi</title>', $output);
        }

	public function test_method_404()
	{
		$this->request('GET', 'admin/regd/method_not_exist');
		$this->assertResponseCode(404);
	}
}