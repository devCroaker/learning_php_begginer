<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Date Menus</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<?php //Script 10.1 - menus.php
	
	function make_date_menus() {
		$months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		print '<select name="month">';
			foreach ($months as $key => $value) {
				print "\n<option value=\"$key\">$value</option>";
			}
		print '</select>';
			print '<select name="day">';
			for ($day = 1; $day <= 31; $day++) {
				print "\n<option value=\"$day\">$day</option>";
			}
		print '</select>';
		print '<select name="year">';
			$start_year = date('Y');
			for ($y = $start_year; $y <= ($start_year + 10); $y++) {
				print "\n<option value=\"$y\">$y</option>";
			}
		print '</select>';
	} // end of function

	print '<form action="" method="post">';
	make_date_menus();
	print '</form>';
	
?>
</body>
</html>