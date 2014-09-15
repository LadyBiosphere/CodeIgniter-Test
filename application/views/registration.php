<h1>Registration</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<?php

	// Form settings
	$usernameSettings 			= ['name'=>'username', 'id'=>'username', 'value'=>set_value('username')];
	$passwordSettings 			= ['name'=>'password', 'id'=>'password'];
	$confirmPasswordSettings 	= ['name'=>'password2', 'id'=>'password2'];
	$emailSettings 				= ['name'=>'email', 'id'=>'email', 'value'=>set_value('email')];

	echo form_open('registration/doRegistration');
?>

<div>
	<?php echo form_label('Username:' , 'username' ); ?>
	<?php echo form_input($usernameSettings); ?>
</div>
<div>
	<?php echo form_label('Password:', 'password'); ?>
	<?php echo form_password($passwordSettings); ?>
</div>
<div>
	<?php echo form_label('Confirm Password:', 'password2'); ?>
	<?php echo form_password($confirmPasswordSettings); ?>
</div>
<div>
	<?php echo form_label('Email:' , 'email' ); ?>
	<?php echo form_input($emailSettings); ?>
</div>
<div>
	<?php echo form_submit('Register', 'Sign up');?>
</div>

<?php

	// Close the form
	echo form_close();

	echo validation_errors();

 ?>