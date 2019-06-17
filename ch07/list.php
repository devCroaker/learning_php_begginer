<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Sorted!</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<?php // Script 7.7 - list.php

$words_array = explode(' ', $_POST['words']);
sort($words_array);
$string_words = implode('<br />', $words_array);

print "<p>An alphabetized version of your list is: <br />$string_words</p>";

?>
</body>
</html>