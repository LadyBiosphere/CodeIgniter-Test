<h1>Registration</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<?php

	echo form_open('registration/doRegistration');

	// Prep settings for username
	$usernameSettings = ['name'=>'username', 'id'=>'username'];

	echo form_label('username:' , 'username' );
	echo form_input($usernameSettings);

	echo form_submit('Register', 'Sign up');



	echo form_close();

	echo validation_errors();

 ?>