<!DOCTYPE html>
<html lang="en">
<head>
	<title>Test Form</title>
</head>
<body>
	<?php echo form_open('test/form_submit'); ?>
	
	<?php echo validation_errors('<p>','</p>'); ?>
	<p>
		Username : <?php echo form_input('username', set_value('username')); ?>
	</p>
	<p>
		Password : <?php echo form_password('password', set_value('password')); ?>
	</p>
	<p>
		<?php echo form_submit('submit', 'Create Account');?>
	</p>
	<?php echo form_close(); ?>
</body>
</html>