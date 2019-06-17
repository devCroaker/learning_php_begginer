<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Registration</title>
	<style type="text/css" media="screen"> .error { color: red; } </style>
</head>
<body>
<h1>Registration Results</h1>
<?php //Script 6.2 - handle_reg.php
$okay= TRUE; //Flag variable

//Validate the email
if (empty($_POST['email'])) {
	print '<p class="error">Please enter your email address.</p>';
	$okay = FALSE;
}

//Validate password
if (empty($_POST['password'])) {
	print '<p class="error">Please enter your password.</p>';
	$okay = FALSE;
}
if (trim($_POST['password']) != trim($_POST['confirm'])) {
	print '<p class="error">Your confirmed password does not match the origional password.</p>';
	$okay = FALSE;
}

//Validate year
if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {
	if ($_POST['year'] < 2016) {
		$age = 2016 - $_POST['year'];
	} else {
		print '<p class="error">Either you entered the wrong birth year or you are from the future.</p>';
		$okay = FALSE;
	}
} else {
	print '<p class="error">Please enter the year you were born as four digits.</p>';
	$okay = FALSE;
}

if ( !isset($_POST['terms'])) {
	print '<p class="error">You must accept the terms.</p>';
	$okay = FALSE;
}

switch ($_POST['color']) {
	case 'red':
		$color_type = 'primary';
		break;
	case 'yello':
		$color_type = 'primary';
		break;
	case 'green':
		$color_type = 'secondary';
		break;
	case 'yellow':
		$color_type = 'primary';
		break;
	default:
		print '<p class="error">Please select a favorite color.</p>';
		$okay = FALSE;
		break;
}

//Reg complete?
if ($okay) {
	print '<p>You have been successfully registered (but not really).</p>';
	print "<p>You will turn $age this year.</p>";
	print "<p>Your favorite color is a $color_type color.</p>";
}

?>
</body>
</html>