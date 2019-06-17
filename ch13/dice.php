<?php

if (($_SERVER['REQUEST_METHOD'] == 'POST') AND (isset($_POST['num'])) AND (is_numeric($_POST['num']))) {
	$num = $_POST['num'];
	echo rand(1,$num);
} else {
	echo "Choose a number of sides!";
}

?>

<form action="dice.php" method="post">
	<p><label>Sides? <input type="text" name="num" size="3" /></p>
	<p><input type="submit" name="submit" value="Roll the Die!" /></p>
</form>

