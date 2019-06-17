<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type"content="text/html;charset=utf-8" />
	<title>My Gradebook</title>
	<style type="text/css" media="screen"></style>
</head>
<body>
<?php // Script - sort.php

$grades = array ( 'Richard' => 95, 'Sherwood' => 82, 'Toni' => 98, 'Franz' => 87, 'Melissa' => 75, 'Roddy' => 85 );

print '<p>Originally the array looks like this: <br />';
foreach ($grades as $s => $g) {
	print "$s: $g<br />\n";
}
print '</p>';

arsort ($grades);

print '<p>After sorting the array by value using arsort(), the array looks like this: <br />';
foreach ($grades as $s => $g) {
	print "$s: $g<br />\n";
}
print '</p>';

ksort ($grades);

print '<p>After sorting the array by key using ksort(), the array looks like this: <br />';
foreach ($grades as $s => $g) {
	print "$s: $g<br />\n";
}
print '</p>';

?>
</body>
</html>