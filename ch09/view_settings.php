<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type"content="text/html;charset=utf-8" />
		<title>View Your Settings</title>
		<style type="text/css">
		body {
			<?php //Script 9.2 - view_settings.php
				if (isset($_COOKIE['font_size'])) {
					print "\t\tfont-size: " . htmlentities($_COOKIE['font_size']) . ";\n";
				} else {
					print "\t\tfont-size: medium;";
				}
				if (isset($_COOKIE['font_color'])) {
					print "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n";
				} else {
					print "\t\tcolor: #000;";
				}
			?>
		}
		</style>
	</head>
	<body>
		<p><a href="customize.php">Customize your settings</a></p>
		<p><a href="reset.php">Reset your settings</a></p>
		<p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
	</body>
</html>