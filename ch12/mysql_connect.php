<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Connect to MySQL</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<?php // Script 12.1 - mysql_connect.php

	if ($dbc = @mysql_connect('localhost', 'root', 'Passw0rd')) {
		print '<p>Connected to MySQL!</p>';
		mysql_close($dbc);
	} else {
		print '<p style="color: red;">Could not connect to MySQL:<br />' . mysql_error() . '</p>';
	}

?>
</body>
</html>