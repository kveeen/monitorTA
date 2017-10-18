<?php

/**
* 
*/
class Login_test extends TestCase
{
	
	public function setUp()
	{
		$this->resetInstance();
	}
        
        public function test_valid()
        {
            $_SESSION['username'] = 'admin';
            $_SESSION['group'] = '99';
            $output = $this->request('GET', '/admin/dashboard');
            $this->assertContains('<title>Dashboard Admin</title>', $output);
        }

        public function test_index()
	{
		$output = $this->request('GET', '/login');
		$this->assertContains('Form Login', $output);
	}

	public function test_logout()
	{
		$output = $this->request('GET', 'login/logout');
		$this->assertRedirect('login', $output);
	}

	public function test_method_404()
	{
		$this->request('GET', 'login/method_not_exist');
		$this->assertResponseCode(404);
	}
}
