<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Add an Event</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<?php // Script 7.9 - event.php

print "<p>You want to add an event called <b>{$_POST['name']}</b> which takes place on: <br />";

if (isset($_POST['days']) AND is_array($_POST['days'])) {
	foreach ($_POST['days'] as $day) {
		print "$day<br />\n";
	}
} else {
	print 'Please select at least one weekday for this event!';
}
print '</p>';

?>
</body>
</html>