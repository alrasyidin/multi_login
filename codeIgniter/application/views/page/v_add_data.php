<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Hafidh Pradipta">
	<meta name="description" content="This website is Multiple Login Project Task">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
	<?php $this->load->view('v_menu'); ?>
	<div class="container">
		<div class="row justify-content-center pt-5">
			<div class="col-md-8">
				<h1 class="text-center">Add Data</h1>
				<p class="text-center">Tambah data berdasarkan data kelas</p>

				<form method="post">
					<div class="form-group">
						<label for="nama" class="sr-only">Nama</label>
						<input type="text" name="nama" class="form-control form-control-lg" placeholder="Nama">
						<?php if( form_error('nama') ) { ?>
							<small class="form-text text-danger"><?= form_error('nama') ?></small>
						<?php } ?>
					</div>
					<div class="form-group">
						<label for="prodi" class="sr-only">Prodi</label>
						<input type="text" name="prodi" class="form-control form-control-lg" placeholder="Prodi">
						<?php if( form_error('prodi') ) { ?>
							<small class="form-text text-danger"><?= form_error('prodi') ?></small>
						<?php } ?>
					</div>
					<div class="form-group">
						<label for="kelas" class="sr-only">Kelas</label>
						<input type="text" name="kelas" class="form-control form-control-lg" placeholder="Kelas">
						<?php if( form_error('kelas') ) { ?>
							<small class="form-text text-danger"><?= form_error('kelas') ?></small>
						<?php } ?>
					</div>
				
					<button type="submit" name="add" class="btn btn-lg btn-dark"> + Add Data</button>
				</form>
			</div>
		</div>
	</div>
	</body>
</html>