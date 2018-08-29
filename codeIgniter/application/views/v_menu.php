<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	<div class="container-fluid">
	<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse">
		  <ul class="nav navbar-nav">
		  <!--Akses Menu Untuk Admin-->
		  <?php 
		  // echo "<pre>";
		  // print_r($this->session);
		  ?>
		  <?php if($this->session->akses === 1) { ?>
		      <li class="nav-item"><a class="nav-link" href="<?= base_url('Pages'); ?>">Dashboard</a></li>
		      <li class="nav-item"><a class="nav-link" href="<?= base_url('Pages/data_mahasiswa'); ?>">Data Mahasiswa</a></li>

		  <!--Akses Menu Untuk Dosen-->
		  <?php } elseif($this->session->akses === 2) { ?>
		      <li class="nav-item"><a class="nav-link" href="<?= base_url('Pages'); ?>">Dashboard</a></li>
		      <li class="nav-item"><a class="nav-link" href="<?= base_url('Pages/data_mahasiswa'); ?>">Data Mahasiswa</a></li>

		  <!--Akses Menu Untuk Mahasiswa-->
		  <?php } else { ?>
		      <li class="nav-item"><a class="nav-link" href="<?= base_url('Pages'); ?>">Dashboard</a></li>
		      <li class="nav-item"><a class="nav-link" href="<?= base_url('Pages/data_mahasiswa'); ?>">Data Mahasiswa</a></li>
		  <?php } ?>
		  </ul>

		  <ul class="nav navbar-nav navbar-right">
		    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Login/logout'); ?>">Sign Out</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav> 