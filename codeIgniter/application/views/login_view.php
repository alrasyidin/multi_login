<?php  
	if(isset($this->session->login)){
		redirect("Pages");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Multiple Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>
	
</body>
</html>
<div class="container">		
	<div class="row justify-content-center">
		<div class="col-md-6">
			
			<div class="card py-5" id="login">
				<div class="card-body">
					<h1 class="card-title text-center pb-4">Multiple Login</h1>
					<form method="post" action="<?= site_url('Login/auth/'); ?>">
						<?= $this->session->msg; ?>
						<div class="form-group">
							<label class="sr-only">NIP</label>
							<input type="text" name="nip" placeholder="Username" class="form-control">
							<?php if( form_error('nip') ) { ?>
								<small class="form-text text-danger"><?php echo form_error('nip') ?></small>
							<?php  } ?>
						</div>
						<div class="form-group">
							<label class="sr-only">Password</label>
							<input type="password" name="password" placeholder="Password" class="form-control">
							<?php if( form_error('password') ) { ?>
								<small class="form-text text-danger"><?php echo form_error('password') ?></small>
							<?php  } ?>
						</div>
						<button type="submit" name="login" class="btn btn-dark">Login</button>
					</form>
				</div>

				<p class="text-center text-muted">Created by Hafidh Pradipta Arrasyid | Informatika A2 | <br /> 41155050160111</p>
			</div>

		</div>
	</div>
</div>
<script src="<?= base_url('assets/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/script.js'); ?>"></script>
</body>
</html>