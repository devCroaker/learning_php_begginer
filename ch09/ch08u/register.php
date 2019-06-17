<?php // script 8.9 - register.php
	
	define('TITLE', 'Register');
	include('templates/header.html');
	
	print '<h2>Registration Form</h2>
		<p>Register so that you can take advantage of certain features that unregistered users do not have access to.</p>';
	print '<style type="text/css" media="screen">.error{color: red;}</style>'; //Error color
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$problem = FALSE;
		if (empty($_POST['first_name'])) {
			$problem = TRUE;
			print '<p class="error">Please enter your first name!</p>';
		}
		if (empty($_POST['last_name'])) {
			$problem = TRUE;
			print '<p class="error">Please enter your last name!</p>';
		}
		if ( empty($_POST['email']) || (substr_count($_POST['email'], '@') != 1) ) {
			$problem = TRUE;
			print '<p class="error">Please enter your email address!</p>';
		}
		if (empty($_POST['password1'])) {
			$problem = TRUE;
			print '<p class="error">Please enter a password!</p>';
		}
		if ($_POST['password1'] != $_POST['password2']) {
			$problem = TRUE;
			print '<p class="error">Your password does not match the confirmed password!</p>';
		}
		
		if (!$problem) {
			print '<p>You are now registered!<br />Okay, not really but eventually...</p>';
			$body = "Thank you for registering with Brandon Sanderson fan club! Your password is '{$_POST['password1']}'.";
			mail($_POST['email'], 'Registration Confirmation', $body, 'From:admin@LOCALHOST.com');
			$_post = array();
		} else {
			print '<p class="error">Please try again!</p>';
		}
	}
	?>
	
	<form action="register.php" method="post">
		<p>First Name: <input type="text" name="first_name" size="20" value="
			<?php if (isset($_POST['first_name'])) { print htmlspecialchars($_POST['first_name']); } else { print ' ';} ?>" /></p>
		<p>Last Name: <input type="text" name="last_name" size="20" value="
			<?php if (isset($_POST['last_name'])) { print htmlspecialchars($_POST['last_name']); } else { print ' ';} ?>" /></p>
		<p>Email Address: <input type="text" name="email" size="20" value="
			<?php if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']); } else { print ' ';} ?>" /></p>
		<p>Password: <input type="password" name="password1" size="20" value="
			<?php if (isset($_POST['password1'])) { print htmlspecialchars($_POST['password1']); } else { print ' ';} ?>" /></p>
		<p>Confirm Password: <input type="password" name="password2" size="20" value="
			<?php if (isset($_POST['password2'])) { print htmlspecialchars($_POST['password2']); } else { print ' ';} ?>" /></p>
		<p><input type="submit" name="submit" value="Register!" /></p>
	</form>
	
<?php include('templates/footer.html');?>	