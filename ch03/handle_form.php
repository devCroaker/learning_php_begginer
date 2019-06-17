<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Your Feedback</title>
</head>
<body>
<?php //script 3.3 handle_form.php
// This page receives data from feedback.html
// It will receive: title, name, email, response, comments, and submit in $_POST
// create shorthand versions of the variables
ini_set ('display_errors', 1);
error_reporting (E_ALL | E_STRICT);

$title = $_POST['title'];
$name = $_POST['name'];
$response = $_POST['response'];
$comments = $_POST['comments'];

// Print the received data
print "<p>Thank you, $title $name, for your comments.</p>
<p>You stated that you found this example to be '$response' and added:<br />$comments</p>";
?>
</body>
</html>