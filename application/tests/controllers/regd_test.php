<?php

/**
* 
*/
class Regd_test extends TestCase
{
	
	public function setUp()
	{
		$this->resetInstance();
                $this->CI->load->model('M_account');
		$this->objek = $this->CI->M_account;
	}

        public function test_index()
        {
                $_SESSION['username'] = 'admin';
                $_SESSION['group'] = '99';
                $awal = $this->objek->getNumRow('Doni', 'don3', '12345', 1);
                $output = $this->request(
			'POST',
			['regd', 'index'],
			[
			'nama' => 'Doni',
			'username' => 'don3',
			'password' => '12345',
			'role' => 1,
			]
			);
                $akhir = $this->objek->getNumRow('Doni', 'don3', '12345', 1);
                $this->assertEquals($akhir,$awal+1);
                $this->objek->delete('Doni', 'don3', '12345', 1);
        }

	public function test_method_404()
	{
		$this->request('GET', 'admin/regd/method_not_exist');
		$this->assertResponseCode(404);
	}
}