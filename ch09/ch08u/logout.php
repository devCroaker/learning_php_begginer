<?php // Script 9.8 - logout.php
	session_start();
	$_SESSION = array();
	session_destroy();
	define('TITLE', 'Logout');
	include('templates/header.html');
?>

<h2>Welcome to the Sanderson Fanclub!</h2>
<p>You are now logged out.</p>
<p>Thank you for coming to this site. We hope you liked it.</p>

<?php include('templates/footer.html'); ?>