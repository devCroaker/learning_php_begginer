<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Cost Calculator</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<?php // Script 10.4 - calculator.php

	function calculate_total ($quantity, $price) {
		$total = $quantity * $price;
		$total = number_format ($total, 2);
		return $total;
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (is_numeric($_POST['quantity']) AND is_numeric($_POST['price'])) {
			$total = calculate_total($_POST['quantity'], $_POST['price']);
			print "<p>Your total comes to $<span style=\"font-weight: bold;\">$total</span>.</p>";
		} else {
			print '<p style="color: red;">Please enater a valid quantity and price!</p>';
		}
	}
	
?>

<form action="calculator.php" method="post">
	<p>Quantity: <input type="text" name="quantity" size="3" /></p>
	<p>Price: <input type="text" name="price" size="5" /></p>
	<input type="submit" name="submit" value="Calculate!" />
	
</form>
</body>
</html>