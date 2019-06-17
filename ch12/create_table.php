<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Create a Table</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<?php // Script 12.4 - create_table.php

	if ($dbc = @mysql_connect('localhost', 'root', 'Passw0rd')) {
		if (!@mysql_select_db('myblog', $dbc)) {
			print '<p style="color: red;">Could not select the database because:<br />' . mysql_error($dbc) . '</p>';
			mysql_close($dbc);
			$dbc = FALSE;
		}
	} else {
		print '<p style="color: red;">Could not connect to MySQL because:<br />' . mysql_error($dbc) . '</p>';
	}
	
	if ($dbc) {
		$query = 'CREATE TABLE entries(';
		$query = $query . 'entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, ';
		$query = $query . 'title VARCHAR(100) NOT NULL, ';
		$query = $query . 'entry TEXT NOT NULL, ';
		$query = $query . 'date_entered DATETIME NOT NULL)';
	
		if (@mysql_query($query, $dbc)) {
			print '<p>The table has been created.</p>';
		} else {
			print '<p style="color: red;">Could not create the table because:<br />' . mysql_error($dbc) . '</p><p>The query being run was: ' . $query . '</p>';
		}
	mysql_close($dbc);
	}
	
?>
</body>
</html>