<?php

class Home_test extends TestCase
{
	public function setUp()
	{
		$this->resetInstance();
	}

	public function test_index()
	{
		$output = $this->request('GET', '/home');
		$this->assertContains('Sistem Informasi Monitoring Tugas Akhir', $output);
	}

	public function test_method_404()
	{
		$this->request('GET', 'home/method_not_exist');
		$this->assertResponseCode(404);
	}
}