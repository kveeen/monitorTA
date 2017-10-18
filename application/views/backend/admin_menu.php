<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <?=anchor(base_url(), 'Sistem Monitoring Tugas Akhir', ['class'=>'navbar-brand'])?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	  
	<?php if($this->session->userdata('username')) : ?>
      <ul class="nav navbar-nav navbar-left">
		<li><a href="<?php echo site_url('dosen/homed')?>">Home</a></li>
		<li><a href="<?php echo site_url('dosen/jadwal')?>">Jadwal</a></li>
		<li><a href="#">Timeline</a></li>
    <li><a href="#">Pesan</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
			<span style="line-height:50px;">
				<?php echo 'You Are: ' . $this->session->userdata('username');?>
			</span>
		</li>
		<li>
      <a style="float: right;" href="<?php echo base_url(); ?>loginu/logout">Logout</a>
		</li>
      </ul>
	  <?php endif; ?>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
