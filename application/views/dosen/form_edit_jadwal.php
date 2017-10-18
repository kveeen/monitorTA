<?php
	$jadwalid 			= $jadwal->jadwalid;
if($this->input->post('is_submitted')){
	$nama			= $this->input->post('nama');
	$tanggal	    = $this->input->post('tanggal');
	$hari 		    = $this->input->post('hari');
	$jam			= $this->input->post('jam');
} else {
	$nama			= $jadwal->namaj;
	$tanggal		= $jadwal->tanggalj;
	$hari			= $jadwal->harij;
	$jam			= $jadwal->jamj;
}
?>
<!doctype html>
<html>
	<head>
		<title>dosen Page | Edit jadwal</title>
		<!-- Load JQuery dari CDN -->
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		
		<!-- Load DataTables dan Bootstrap dari CDN -->
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
	</head>
	<body>
		<!-- dalam div row harus ada col yang maksimum nilainya 12 -->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<h1>Edit Jadwal</h1>
				<div><?= validation_errors() ?></div>
				<?= form_open_multipart('dosen/jadwal/update/' . $jadwalid, ['class'=>'form-horizontal']) ?>
					
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="nama" placeholder="" value="<?= $nama ?>">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">tanggal</label>
						<div class="col-sm-10">
						   <input type="date" class="form-control" name="tanggal" placeholder="" value="<?= $tanggal ?>">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">hari</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="hari" placeholder="" value="<?= $hari ?>">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">jam</label>
						<div class="col-sm-10">
						  <input type="time" class="form-control" name="jam" placeholder="" value="<?= $jam ?>">
						</div>
					  </div>
					  
		
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <input type="hidden" name="is_submitted" value="1" />
						  <button type="submit" class="btn btn-default">Save</button>
						</div>
					  </div>
					
				<?= form_close() ?>
			</div>
			<div class="col-md-1"></div>
		</div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>