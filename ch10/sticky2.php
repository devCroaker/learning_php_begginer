<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Sticky Text Inputs</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<?php // Script 10.2 - sticky1.php
	
	function make_text_input($name, $label, $size = 20) {
		print '<p><label>' . $label . ': ';
		print '<input type="text" name="' . $name . '" size="' . $size . '" ';
		if (isset($_POST[$name])) {
			print ' value="' . htmlspecialchars($_POST[$name]) . '"';
		}
		print ' /></label></p>';
	} // end of function
	
	print '<form action="" method="post">';
	make_text_input('first_name', 'First Name');
	make_text_input('least_name', 'Last Name', 30);
	make_text_input('email', 'Email', 50);
	print '<input type="submit" name="submit" value="Register!" /></form>';
		
?>
</body>
</html>