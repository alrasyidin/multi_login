<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
	<?php $this->load->view('v_menu'); ?>
	<div class="container mb-5">
		<div class="row justify-content-center">
		<div class="col-md-6">
		<h3 class="py-5 text-center">Edit Data Mahasiswa</h3>
	
		<form method="post">
			<div class="form-group">
				<label class="">NPM: </label>
				<input disabled class="form-control" type="text" name="npm" placeholder="NPM" value="<?= $data["nim"]; ?>">
				<br>
			</div>
			<div class="form-group">
				<label class="">Name: </label>
				<input class="form-control" type="text" name="nama" placeholder="Nama" value="<?= $data["nama"]; ?>">
				<?php if( form_error('nama') ) { ?>
					<div style="color:red;"><?= form_error('nama'); ?></div>
				<?php } ?>
				<br>
			</div>
			<div class="form-group">
				<label class="">Kelas: </label>
				<input class="form-control" type="text" name="kelas" placeholder="Kelas" value="<?= $data["kelas"]; ?>">
				<?php if( form_error('kelas') ) { ?>
					<div style="color:red;"><?= form_error('kelas'); ?></div>
				<?php } ?>
				<br>
			</div>
			<div class="form-group">
				<label class="">Prodi: </label>
				<input class="form-control" type="text" name="prodi" placeholder="Prodi" value="<?= $data["prodi"]; ?>">
				<?php if( form_error('prodi') ) { ?>
					<div style="color:red;"><?= form_error('prodi'); ?></div>
				<?php } ?>
				<br>
			</div>			
			<button type="submit" name="save" class="btn btn-dark">Save!</button>
		</form>
		</div>
		</div>
	</div>
</body>
</html>