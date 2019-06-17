<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Larry Ulman's Books and Chapters</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<h1>Some of Larry Ulman's Books</h1>
<?php //Script 7.4 - books.php

$phpvqs = array ( 1 => 'Getting Started with PHP', 'Variables', 'HTML forsm and PHP', 'Using Numbers' );
$phpadv = array ( 1 => 'Advanced PHP Techniques', 'Developing Web Applications', 'Advanced Database Concepts', 'Security Techniques' );
$phpmysql = array ( 1 => 'Introduction to PHP', 'Programming with PHP', 'Creating Dynamic Web Sites', 'Introduction to MYSQL' );

$books = array ( 'PHP VQS' => $phpvqs, 'PHP Advanced VQP' => $phpadv, 'PHP and MYSQL VQP' => $phpmysql );

print "<p>The third chapter of my first book is <i>{$books['PHP VQS'][3]}</i>.</p>";
print "<p>The first chapter of my scond book is <i>{$books['PHP Advanced VQP'][1]}</i>.</p>";
print "<p>The fourth chapter of my third book is <i>{$books['PHP and MYSQL VQP'][4]}</i>.</p>";

foreach ($books as $k => $v) {
	print "<p>$k:"; 
		foreach ($v as $n => $c) {
			print "<br />Chapter $n is $c";
		}
	print "</p>";
}

?>
</body>
</html>