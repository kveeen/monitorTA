<!doctype html>
<html>
	<head>
		<title>Sistem Monitoring Tugas Akhir | Jadwal</title>
		 <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/mhs/css/bootstrap.min.css" >

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/mhs/css/metisMenu.min.css" >

    <!-- Timeline CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/mhs/css/timeline.css" >

    <!-- Custom CSS -->
   <link rel="stylesheet" href="<?php echo base_url()?>assets/mhs/css/startmin.css" >

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/mhs/css/morris.css" >

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/mhs/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Load JQuery dari CDN -->
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		
		<!-- Load DataTables dan Bootstrap dari CDN -->
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
	</head>
	<body>
	 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Sistem Informasi Monitoring TA</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <!--<ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>-->

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <a style="float: right;" href="<?php echo base_url(); ?>loginu/logout">Logout</a>
                </ul>
            </li>
        </ul>
	<!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo site_url('dosen/homed')?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('dosen/jadwal')?>" class=""><i class="fa fa-dashboard fa-fw"></i> Jadwal</a>
                    </li>
                    <li>
                        <a href="#"  class=""><i class="fa fa-dashboard fa-fw"></i> Timeline</a>
                    </li>
                    <li>
                        <a href="#"  class=""><i class="fa fa-dashboard fa-fw"></i> Pesan</a>
                    </li>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
	<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">JADWAL</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->

		<!-- dalam div row harus ada col yang maksimum nilainya 12 -->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
			
				<table id="myTable" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							
							<th>Nama Mahasiswa</th>
							<th>Tanggal Bimbingan</th>
							<th>Hari Bimbingan</th>
							<th>Jam Bimbingan</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($jadwal as $jadwalj) : ?>
						<tr>
			
							<td><?=$jadwalj->namaj?></td>
							<td><?=$jadwalj->tanggalj?></td>
							<td><?=$jadwalj->harij?></td>
							<td><?=$jadwalj->jamj?></td>
							<td><?=anchor(	'dosen/jadwal/formupdate/' . $jadwalj->jadwalid, 
											'Edit',
											['class'=>'btn btn-default btn-sm'])
								?> 
								<?=anchor(	'dosen/jadwal/delete/' . $jadwalj->jadwalid, 
											'Delete',
											['class'=>'btn btn-danger btn-sm',
											 'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'
											])
								?> 
							</td>
						</tr>
						<?php endforeach; ?>
						
				</table>
			</div>
			<div class="col-md-1"></div>
		</div>
		<table id="myTable" class="table table-striped table-bordered table-hover">
		<?= form_open_multipart('dosen/jadwal/create') ?>
						<td><label for="penerima"> Tambah Jadwal </label>
  <select id="cmbMake" name="penerima"     onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
  <option value="0">Mahasiswa</option>
 <?php
    foreach($users as $user) { ?>
      <option value="<?=$user->id_user?>"><?=$user->username?></option>
  <?php
    } ?>
</select>
<input type="hidden" name="selected_text" id="selected_text" value="selected_text" /></td>
						<td><input type="date" name="tanggal"></textarea></td>
						<td><input type="text" name="hari"></textarea></td>
						<td><input type="time" name="jam"></textarea></td>
						
					</tbody>
				</table>
			<button type="submit" class="btn btn-default">Save</button>
						<?= form_close() ?>
    </div>

</div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>