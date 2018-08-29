<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bootstrap with codeigniter</title>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container">
		<h1>Learn CodeIgniter with Linkedin Learning</h1>
		<h3>Welcome, <?= $username; ?></h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat impedit, quidem dolore.</p>
		<?php if(empty($selected_filter)){ ?>
		<form method="get" action="<?= site_url("properties/set_filter"); ?>">
			Filter: <select name="filter">
				<?php foreach ($genders as $gender) { ?>
					<option value="<?= ucfirst($gender); ?>"><?= $gender; ?></option>
				<?php } ?>
			</select>
			<input type="submit" value="Filter">
		</form>
		<br>
		<?php } else { ?>
			<h4>Filter Result: <?= $selected_filter; ?></h4>
		<?php } ?>

		<table class="table table-dark">
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Mening</th>
				<th>Gender</th>
				<th>Photo</th>
				<th>Action</th>
			</tr>
			
			<?php foreach ($names as $name) { ?>
				<tr>
					<td><?= $name["id"]; ?></td>
					<td><?= $name["name"]; ?></td>
					<td><?= $name["meaning"]; ?></td>
					<td><?= $name["gender"]; ?></td>
					<td><img src="<?= site_url("upload/".$name["photo"]); ?>" width="150" height="200"></td>
					<td><a href="<?= site_url("properties/edit/".$name["id"]); ?>">Update</a></td>
				</tr>
			<?php	} ?>
		</table>

		<button class="btn btn-dark">Learn More</button>
		<button class="btn btn-primary">Excited</button>
	</div>
	<script src="<?= base_url('assets/bootstrap/js/jquery.slim.js'); ?>"></script>
	<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.js'); ?>"></script>
</body>
</html>

