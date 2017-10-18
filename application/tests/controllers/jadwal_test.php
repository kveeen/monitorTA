<?php 

/**
* 
*/
class Jadwal_test extends TestCase
{
	
	public function setUp()
	{
		$this->resetInstance();
		$this->CI->load->model('Model_jadwal');
		$this->objek = $this->CI->Model_jadwal;
	}
        
        public function test_masuk_gagal()
	{
                $_SESSION ['username'] = 'adit12';
                $_SESSION ['group'] = '2';
		$output = $this->request('GET', '/dosen/jadwal');
		$this->assertRedirect('loginu', $output);
	}

	public function test_index()
	{
                $_SESSION ['username'] = 'ahmad1';
                $_SESSION ['group'] = '1';
		$output = $this->request('GET', '/dosen/jadwal');
		$this->assertContains('<title>Sistem Monitoring Tugas Akhir | Jadwal</title>', $output);
	}

	public function test_create()
        {
                $_SESSION['username'] = 'ahmad1';
                $_SESSION['group'] = '1';
                $output = $this->request(
			'POST',
			['jadwal', 'create'],
			[
			'selected_text' => 'momon',
			'tanggal' => '18-10-2017',
			'hari' => 'Rabu',
			'jam' => '14:00:00',
			]
			);
                $this->assertRedirect('dosen/jadwal', $output);
        }
        
        public function test_delete(){
                $mula = $this->objek->getCurrentRow();
		$id = 0;
		$result = $this->objek->getId('momon');
		foreach ($result as $x){
			$id = $x['jadwalid'];
		}
		$url = 'jadwal/delete/'.$id;
		$output = $this->request('GET', $url);
		$akhir = $this->objek->getCurrentRow();
	    $expected = $mula - $akhir;
	    $this->assertEquals(1, $expected);
        }
        
        public function test_cre_gagal()
        {
                $_SESSION['username'] = 'ahmad1';
                $_SESSION['group'] = '1';
                $output = $this->request(
			'POST',
			['jadwal', 'create'],
			[
			'selected_text' => 'admin',
			'tanggal' => '18-10-2017',
			'hari' => 'Rabu',
			'jam' => '14:00:00',
			]
			);
                $this->assertRedirect('dosen/jadwal', $output);
        }
        
        


}