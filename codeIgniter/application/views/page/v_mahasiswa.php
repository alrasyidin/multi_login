<?php  
	if(!$this->session->login){
		redirect('Login');
		exit;
	}
?>
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
	<div class="container-fluid">
		<h1 class="lead py-4">Data Mahasiswa Login</h1>
		<div class="row">
			<div class="col-md-12">
				<?php if ($this->session->akses === 1 || $this->session->akses === 2): ?>
					<a href="<?= site_url('Pages/add_data'); ?>" class="btn btn-dark mb-5">+ Add Data</a>
				<?php endif ?>
				<table class="table table-dark table-striped">
					<thead>
						<tr>
							<th>NPM</th>
							<th>Nama</th>
							<th>Kelas</th>
							<th>Prodi</th>
							<?php if ($this->session->akses === 1): ?>
							<th>Action</th>
							<?php endif ?>
						</tr>
					</thead>
					<tbody>
						<!-- <?php 
						echo "<pre>";
						print_r($hasil);
						?> -->

						<?php foreach ($hasil as $item) { ?>
							<tr>
								<td><?= $item['nim'] ?></td>
								<td><?= $item['nama'] ?></td>
								<td><?= $item['kelas'] ?></td>
								<td><?= $item['prodi'] ?></td>
								<?php if ($this->session->akses === 1): ?>
								<td>
									<a class="btn btn-danger" href="<?= site_url('Pages/delete/'.$item['nim']); ?>" onclick="return(confirm('Apakah anda yakin untuk menghapus field ini ?'));">Delete</a> | <a class="btn btn-warning" href="<?= site_url('Pages/update/'.$item['nim']); ?>">Edit</a>
								</td>
								<?php endif ?>
							</tr>
						<?php } ?>
					</tbody>
				</table>			
			</div>
		</div>
	</div>
	
</body>
</html>