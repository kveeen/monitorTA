<?php

/**
* 
*/
class Dashboard_test extends TestCase
{
	
	public function setUp()
	{
		$this->resetInstance();
	}

	public function test_index()
	{
                $_SESSION['username'] = 'admin';
                $_SESSION['id_user'] = '1';
                $output = $this->request('GET', '/admin/dashboard');
		$this->assertContains('<title>Dashboard Admin</title>', $output);
	}

	public function test_method_404()
	{
		$this->request('GET', 'admin/dashboard/method_not_exist');
		$this->assertResponseCode(404);
	}
}