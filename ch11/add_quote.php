<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Add A Quotation</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
	<?php // Script 11.2 - add_quote.php
		
		$file = '../learning/quotes.txt';
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if ( !empty($_POST['quote']) && ($_POST['quote'] != 'Enter your quotation here!.') ) {
				if (is_writable($file)) {
					file_put_contents($file, $_POST['quote'] . PHP_EOL, FILE_APPEND | LOCK_EX);
					print '<p>Your quotation has been stored.</p>';
				} else {  //Can not Write
					print '<p style="color: red;">Your quotation could not be stored due to a system error.</p>';
				}
			} else { // Failed to enter a quote
				print '<p style="color: red;">Please enter a quotation!</p>';
			}
		}
		
	?>
	
	<form action="add_quote.php" method="post">
		<textarea name="quote" rows="5" cols="30">Enter your quotation here.</textarea><br />
		<input type="submit" name="submit" value="Add this quote!" />
		<input type="hidden" name="submitted" value="true" />
	</form>
	
</body>
</html>