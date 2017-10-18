<!doctype html>
<html>
	<head>
		<title>Sistem Monitoring Tugas Akhir | Home</title>
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
                    <h1 class="page-header">Home</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->

		
		
    </div>

</div>
		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
	</body>
</html>