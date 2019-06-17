<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Soup of the Day!</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<h1>Soup of the Day!</h1>
<?php // Script 7.3 - soups3.php

$soups = array (
'Monday' => 'Clam Chowder',
'Tuesday' => 'White Chicken Chili',
'Wednesday' => 'Vegetarian',
'Thursday' => 'Chicken Noodle',
'Friday' => 'Tomato',
'Saturday' => 'Cream of Broccoli' );

foreach ($soups as $day => $soup) {
	print "<p>$day: $soup</p>\n";
}

?>
</body>
</html>