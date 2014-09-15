<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $Page_Title; ?></title>
	<meta name="description" content='<?php echo $Page_Meta;?>' >
</head>
<body>
	<nav>
		<ul>
		<!-- Anchor function is from URL helper -->
		<!-- Arguement 1 = controller to load -->
		<!-- Arguement 2 = text that will be clicked -->
			<li><?php echo anchor('home', 'Home'); ?></li>
			<li><?php echo anchor('about', 'About'); ?></li>
			<li><?php echo anchor('registration', 'Registration'); ?></li>
		</ul>
	</nav>

