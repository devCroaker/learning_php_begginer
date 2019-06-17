<?php // Script 9.4 - reset.php
	setcookie('font_size', '', time()-600, '/');
	setcookie('font_color', '', time()-600, '/');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type"content="text/html;charset=utf-8" />
		<title>Customize Your Settings</title>
	</head>
	<body>
		<p>Your settings have been reset! Click <a href="view_settings.php">here</a> to go back to the main page.</p>
	</body>
</html>