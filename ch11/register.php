<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Register</title>
	<style type="text/css" media="screen">.error { color:red; }</style>
</head>
<body>
<h1>Register</h2>
<?php // Script 11.6 - register.php
	$dir = '../users/';
	$file = $dir . 'users.txt';
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$problem = FALSE;
		if (empty($_POST['username'])) {
			$problem = TRUE;
			print '<p class="error">Please enter a username!</p>';
		}
		if (empty($_POST['password1'])) {
			$problem = TRUE;
			print '<p class="error">Please enter a password!</p>';
		}
		if ($_POST['password1'] != $_POST['password2']) {
			$problem = TRUE;
			print '<p class="error">Your password does not match your confirmed password!</p>';
		}
		
		if (!$problem) {
			if (is_writable($file)) {
				$subdir = time() . rand(0,4596);
				$data = $_POST['username'] . "\t" . md5(trim($_POST['password1'])) . "\t" . $subdir . PHP_EOL;
				file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
				mkdir ($dir . $subdir);
				print '<p>Your are now registered!</p>';
			} else { // file not writeable
				print '<p class="error">You could not be registered due to a system error.</p>';
			}
		} else { // Forgot a field
			print '<p class="error">Please go back and try again!</p>';
		}
	} else {
		?>
		<form action="register.php" method="post">
			<p>Username: <input type="text" name="username" size="20" /></p>
			<p>Password: <input type="password" name="password1" size="20" /></p>
			<p>Confirm Password: <input type="password" name="password2" size="20" /></p>
			<input type="submit" name="submit" value="register" />
		</form>	
<?php } // End of submission IF. ?>	
</body>
</html>