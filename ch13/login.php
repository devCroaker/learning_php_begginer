<?php // Script 13.5 - login.php

$loggedin = FALSE;
$error = FALSE;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (!empty($_POST['email']) && !empty($_POST['password'])) {
		if ( (strtolower($_POST['email']) == 'flyingwarpig@gmail.com') && ($_POST['password'] == 'Passw0rd') ) {
			setcookie('Brandon', 'Sanderson', time()+3600);
			$loggedin = TRUE;
		} else { // incorrect!
			$error = 'The submitted email address and password do not match those we have on file';
		}
	} else { // Forgot a field
		$error = 'Please make sure you enter both an email address and password.';
	}
}

define('TITLE', 'Login');
include('templates/header.html');

if ($error) {
	print '<p class="error">' . $error . '<p>';
}

if ($loggedin) {
	print '<p>You are now logged in!</p>';
} else {
	print '<h2>Login Form</h2>
		<form action="login.php" method="post">
			<p><label>Email Address <input type="text" name="email" /></label></p>
			<p><label>Password <input type="password" name="password" /></label></p>
			<p><input type="submit" name="submit" value="Log in!" /></label></p>
		</form>';
}

include('templates/footer.html');
?>