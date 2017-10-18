<?php

/**
* 
*/
class Home_dosen_test extends TestCase
{
	
	public function setUp()
	{
		$this->resetInstance();
	}

        public function test_masuk_homed_gagal()
        {
                $_SESSION['username'] = 'ahmad1';
                $_SESSION['group'] = '2';
                $output = $this->request('GET', 'dosen/homed');
		$this->assertRedirect('loginu', $output);
        }
	public function test_index()
	{
		$_SESSION['username'] = 'ahmad1';
                $_SESSION['group'] = '1';
                $output = $this->request('GET', 'dosen/homed');
		$this->assertContains('<title>Sistem Monitoring Tugas Akhir | Home</title>', $output);
	}

	public function test_method_404()
	{
		$this->request('GET', 'dosen/home/method_not_exist');
		$this->assertResponseCode(404);
	}
}