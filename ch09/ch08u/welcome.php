<?php // Script 9.7 - welcome.php

	session_start();
	define('TITLE', 'Welcome to the Sanderson Fan Club!');
	include('templates/header.html');
	
	print '<h2>Welcome to the Sanderson Fan Club!</h2>';
	print '<p>Hello, ' . $_SESSION['email'] . '!</p>';

	date_default_timezone_set ('America/Los_Angeles');
	print '<p>You have been logged in since: ' . date('g:1 a', $_SESSION['loggedin']) . '</p>';
	
	print '<p><a href="logout.php">Click here to logout.</a></p>';
	
	include('templates/footer.html'); 
	?>