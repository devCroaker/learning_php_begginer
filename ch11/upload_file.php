<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Upload A File</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<?php // Script 11.4 - upload_file.php

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (move_uploaded_file($_FILES['the_file']['tmp_name'],"../uploads/{$_FILES['the_file']['name']}")) {
			print '<p>Your file has been uploaded.</p>';
		} else {
			print '<p style="color: red;">Your file could not be uploaded because: ';
			switch ($_FILES['the_file']['error']) {
				case 1:
					print 'The file exceeds the upload_max_filesize setting in php.ini';
					break;
				case 2:
					print 'The file exceeds the MAX_FILE_SIZE setting in the HTML form';
					break;
				case 3:
					print 'The file was only partially uploaded';
					break;
				case 4:
					print 'No file was uploaded';
					break;
				case 6:
					print 'The temporary folder does not exist.';
					break;
				default:
					print 'Something unforseen has happened';
					break;
			}
			print '</p>';
		} // end the move_upload_file if
	} // end submission if

?>

<form action="upload_file.php" enctype="multipart/form-data" method="post">
	<p>Upload a file using this form:</p>
	<input type="hidden" name="MAX_FILE_SIZE" valuse="300000" />
	<p><input type="file" name="the_file" /></p>
	<p><input type="submit" name="submit" value="Upload This File" /></p>
</form>

</body>
</html>