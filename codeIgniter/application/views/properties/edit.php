<div>
	<h3>Edit Detail</h3>
	
	<!-- <form method="post" enctype="multipart/form-data"> -->
	<?php echo form_open_multipart('') ?>
		<label>Name: </label>
		<input type="text" name="name" value="<?= $names["name"]; ?>">
		<?php if( form_error('name') ) { ?>
			<div style="color:red;"><?= form_error('name'); ?></div>
		<?php } ?>
		<br>
		<label>Meaning: </label>
		<input type="text" name="meaning" value="<?= $names["meaning"]; ?>">
		<?php if( form_error('meaning') ) { ?>
			<div style="color:red;"><?= form_error('meaning'); ?></div>
		<?php } ?>
		<br>
		<label>Gender: </label>
		<input type="text" name="gender" value="<?= $names["gender"]; ?>">
		<?php if( form_error('gender') ) { ?>
			<div style="color:red;"><?= form_error('gender'); ?></div>
		<?php } ?>
		<br>
		<label>Photo: </label>
		<input type="file" name="photo_image">
		<br>
		<input type="submit" value="Save!" name="save">
	</form>
</div>