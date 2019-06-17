<?php // Script 8.8 - login.php

	define('TITLE', 'Login');
	include('templates/header.html');
	
	print '<h2>Login Form</h2>	
		<p>Users who are logged in can take advantage of certain features others do not have access to.</p>';
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if ( (!empty($_POST['email'])) AND (!empty($_POST['password'])) ) {
			if ( (strtolower($_POST['email']) == 'flyingwarpig@gmail.com') AND ($_POST['password'] == '0xbl00db00ts') ) {
				ob_end_clean();
				header('Location: welcome.php');
				exit();
			} else {
				print '<p>Email address and password combination not on file.<br />Please try again.</p>';
			}
		} else {
			print '<p>Please make sure to enter both an email address and a password!<br />Go back and try again.</p>';
		}
	} else {
		print '<form action="login.php" method="post">
			<p>Email Address: <input type="text" name="email" size="20" /></p>
			<p>Password: <input type="password" name="password" size="20" /></p>
			<p><input type="submit" name="submit" value="Log In!" /></p>
			</form>';
	}
	
	include('templates/footer.html');
	
?>	