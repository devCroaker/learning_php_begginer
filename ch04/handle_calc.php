<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>Product Cost Calculator</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<?php //Script 4.2 - handle_calc.php

// pulling the post data
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];

// begin the calculations
$total = (($price * $quantity) + $shipping) - $discount;

// the tax rate
$taxrate = ($tax/100);
$taxrate++;
$total = $total * $taxrate;

// monthly?
$monthly = $total / $payments;

// rounding
$total = number_format ($total, 2);
$monthly = number_format ($monthly, 2);

// printing the results
print "<p>You have selected to purchase:<br /> <span class=\"number\">$quantity</span> widget(s) at <br />
	$<span class=\"number\">$price</span> price each plus a <br />
	$<span class=\"number\">$shipping</span> shipping cost and a <br />
	<span class=\"number\">$tax</span> percent tax rate.<br />
	After your $<span class=\"number\">$discount</span> discount, the total cost is 
	$<span class=\"number\">$total</span>.<br />
	Divided over <span class=\"number\">$payments</span> monthly payments, that would be 
	$<span class=\"number\">$monthly</span> each.</p>";
?>
</body>
</html>