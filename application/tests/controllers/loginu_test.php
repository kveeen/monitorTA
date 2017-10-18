<?php

/**
* 
*/
class Loginu_test extends TestCase
{
	
	public function setUp()
	{
		$this->resetInstance();
	}

        public function test_valid()
        {
            $_SESSION['username'] = 'ahmad1';
            $_SESSION['group'] = '1';
            $output = $this->request('GET', '/dosen/homed');
            $this->assertContains('<title>Sistem Monitoring Tugas Akhir | Home</title>', $output);
        }
        
        public function test_user()
        {
            $_SESSION['username'] = 'kevin';
            $_SESSION['group'] = '2';
            $output = $this->request(
			'POST',
			['loginu', 'index'],
			[
			'username' => 'kevin',
			'password' => '12345',
			]
			);
            $this->assertRedirect('mahasiswa/teko', $output);
        }
              
        public function test_dosen()
        {
            $_SESSION['username'] = 'ahmad1';
            $_SESSION['group'] = '1';
            $output = $this->request(
			'POST',
			['loginu', 'index'],
			[
			'username' => 'ahmad1',
			'password' => '12345',
			]
			);
            $this->assertRedirect('dosen/homed', $output);
        }
        
        public function test_gagal()
        {
            $_SESSION['username'] = 'ahmad1';
            $_SESSION['group'] = '1';
            $output = $this->request(
			'POST',
			['loginu', 'index'],
			[
			'username' => 'ahmad',
			'password' => '12345',
			]
			);
            $this->assertRedirect('loginu', $output);
        }
        
	public function test_index()
	{
		$output = $this->request('GET', '/loginu');
		$this->assertContains('Sistem Monitoring Tugas Akhir | Login', $output);
	}

	public function test_logout()
	{
		$output = $this->request('GET', 'loginu/logout');
		$this->assertRedirect('home', $output);
	}

	public function test_method_404()
	{
		$this->request('GET', 'login/method_not_exist');
		$this->assertResponseCode(404);
	}
}
