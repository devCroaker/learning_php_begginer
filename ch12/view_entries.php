<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>View My Blog</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<h1>My Blog</h1>
<?php // Script 12.7 - view_entries.php

	$dbc = mysql_connect('localhost', 'root', 'Passw0rd');
	mysql_select_db('myblog', $dbc);
	
	$query = 'SELECT * FROM entries ORDER BY date_entered DESC';
	
	if ($r = mysql_query($query, $dbc)) {
		while ($row = mysql_fetch_array($r)) {
			print "<p><h3>{$row['title']}</h3>{$row['entry']}<br /><a href=\"edit_entry.php?id={$row['entry_id']}\">Edit</a>
				<a href=\"delete_entry.php?id={$row['entry_id']}\">Delete</a></p><hr />\n";
		}
	} else { // Query did not run
		print '<p style="color: red;">Could not retrieve the data because:<br />' . mysql_error($dbc) . '</p><p>The query being run was: ' . $query . '</p>';
	} // End if
	
	mysql_close($dbc);
	
?>
</body>
</html>