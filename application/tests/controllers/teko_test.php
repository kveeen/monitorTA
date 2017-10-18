<?php

/**
* 
*/
class Teko_test extends TestCase
{
	
	public function setUp()
	{
		$this->resetInstance();
	}

	public function test_index()
	{
		$output = $this->request('GET', '/mahasiswa/teko');
		$this->assertContains('Halaman Mahasiswa', $output);
	}

	public function test_profile()
	{
		$output = $this->request('GET', '/mahasiswa/teko/profile');
		$this->assertContains('Halaman Mahasiswa', $output);
	}

	public function test_jadwal()
	{
		$output = $this->request('GET', '/mahasiswa/teko/jadwal');
		$this->assertContains('JADWAL', $output);
	}

	public function test_method_404()
	{
		$this->request('GET', 'admin/regd/method_not_exist');
		$this->assertResponseCode(404);
	}
} 