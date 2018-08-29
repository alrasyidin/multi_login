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
	<?php $this->load->view("v_menu"); ?>
	<div class="container-fluid" style="padding: 0 !important;">
		<div class="jumbotron jumbotron-fluid px-5 bg-dark text-light">
		  <h1>Welcome back, <?= $this->session->sess_nama; ?></h1>
		  <p class="lead">This is a simple multiple login with codeigniter framework</p>
		  <hr class="my-4">
		  <p>Aplikasi ini memiliki tiga tingkat hak akses</p>
		  <ul class="list-unstyled">
		  	<li class="font-weight-bold"> + Admin -> <span>All (Show, Add, Edit, Delete) data</span></li> 
		  	<li class="font-weight-bold"> + Dosen ->  <span>Show and Add data  </span></li> 
		  	<li class="font-weight-bold"> + Mahasiswa -> <span>Only Show data</span></li> 
		  </ul>
		</div>
	</div><!--  Container-fluid -->


</body>
</html>