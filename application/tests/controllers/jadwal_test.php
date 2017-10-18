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
        public function test_form_update()
        {
        $_SESSION['nama'] = "ahmad1";
        $_SESSION['group'] = "1";
        $id = 0;
		$result = $this->objek->getId('momon');
		foreach ($result as $x){
			$id = $x['jadwalid'];
		}
        $url = 'dosen/jadwal/formupdate/'.$id;
        $output = $this->request('GET', $url);
        
        //$contain = "<input class='form-control' id='cname' value='".$nama."' type='text' name='produk_nama' required />";
        $this->assertContains('<title>dosen Page | Edit jadwal</title>' ,$output);
        }
        
        public function test_update()
        {
            $result = $this->objek->getId('momon');
    	foreach ($result as $x){
			$id = $x['jadwalid'];
		}
    	$this->request(
		'POST',
		['dosen/jadwal', 'update/'.$id],
		[ 
		'nama' => 'momon',
		'tanggal' => '19-10-2017',
		'hari' => 'Kamis',
		'jam' => '14:00:00',
		]
		);
		$_SESSION['username'] = "ahmad1";
                $_SESSION['group'] = "1";
		$output = $this->request('GET', 'dosen/jadwal');;
		$this->assertContains('<title>Sistem Monitoring Tugas Akhir | Jadwal</title>' ,$output);
        }
        
        public function test_delete(){
            $_SESSION['username'] = 'ahmad1';
            $_SESSION['group'] = '1';    
            $mula = $this->objek->getCurrentRow();
            $id = 0;
		$result = $this->objek->getId('momon');
		foreach ($result as $x){
			$id = $x['jadwalid'];
		}
		$url = 'dosen/jadwal/delete/'.$id;
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