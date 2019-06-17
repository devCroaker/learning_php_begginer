<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Greetings!</title>
</head>
<body>
<?php
// Script 3.7 - hello.php
ini_set ('diaplay_errors', 1);
error_reporting (E_ALL | E_STRICT);

$name = $_GET['name'];
print "<p>Hello, <span style=\"font-weight: bold;\">$name</span>!</p>";

?>
</body>
</html>