<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Forum Posting</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<?php // Script 5.5 - handle_post.php

$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = $_POST['email'];
$posting = trim(nl2br($_POST['posting']));
$name = $first_name . ' ' . $last_name;

$words = str_word_count($posting);
$posting = str_ireplace('crap', '****', $posting);

print "<div>Thank you, $name, for your posting:<p>$posting</p><p>($words words)</p></div>";
?>
</body>
</html>