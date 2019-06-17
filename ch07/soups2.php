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
<?php // Script 7.2 - soups2.php

$soups = array (
'Monday' => 'Clam Chowder',
'Tuesday' => 'White Chicken Chili',
'Wednesday' => 'Vegetarian');

$count1 = count ($soups);
print "<p>The soups array origionally had $count1 elements.</p>";

$soups['Thursday'] = 'Chicken Noodle';
$soups['Friday'] = 'Tomato';
$soups['Saturday'] = 'Cream of Broccoli';

$count2 = count ($soups);
print "<p>After adding three more soups, the array now has $count2 elements.</p>";

print_r ($soups);

?>
</body>
</html>