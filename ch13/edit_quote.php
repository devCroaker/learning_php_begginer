<?php // Script 13.9 - edit_wuaote.php
define('TITLE', 'Edit a Quote');
include('templates/header.html');
print '<h2>Edit a Quotation</h2>';

if (!is_administrator()) {
	print '<h2>Access Denied!</h2>
		<p class="error">You do not have permission to access this page.</p>';
	include('templates/footer.html');
	exit();
}

include('../mysql_connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] >0) ) {
	$query = "SELECT
		quote, source, favorite
		FROM
		quotes
		WHERE
		quote_id={$_GET['id']}";
	if ($r = mysql_query($query, $dbc)) {
		$row = mysql_fetch_array($r);
		print '<form action="edit_quote.php" method="post">
			<p><label>Quote <textarea name="quote" rows="5" cols="30">' . htmlentities($row['quote']) . '</textarea></label></p>
			<p><label>Source <textarea name="source" rows="3" cols="25">' . htmlentities($row['source']) . '</textarea></label</p>
			<p><label>Is this a favorite? <input type="checkbox" name="favorite" value="yes"';
			if ($row['favorite'] == 1) {
			print ' checkbox="checked"';
			}
		print ' /></label></p>
			<input type="hidden" name="id" value="' . $_GET['id'] . '" />
			<p><input type="submit" name="submit" value="Update This Quote!" /></p>
			</for>';
	} else { // couldnt get the information
		print '<p class="error">Could not retrieve the quotation because:<br />' . mysql_error($dbc) . '</p><p>The querry being run was: ' . $query . '</p>';
	}
} elseif ( isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0) )  {
	$problem = FALSE;
	if ( !empty($_POST['quote']) && !empty($_POST['source']) ) {
		$quote = mysql_real_escape_string(trim(strip_tags($_POST['quote'])), $dbc);
		$source = mysql_real_escape_string(trim(strip_tags($_POST['source'])), $dbc);
		if (isset($_POST['favorite'])) {
			$favorite= 1;
		} else {
			$favorite = 0;
		}
	} else {
		print '<p class="error>Please submit both a quotation and a source.</p>';
		$problem = TRUE;
	}
	if (!$problem) {
		$query = "UPDATE quotes
			SET quote='$quote', source='$source', favorite='$favorite'
			WHERE quote_id={$_POST['id']}";
		if ($r = mysql_query($query, $dbc)) {
			print '<p>The quotation has been updated.</p>';
		} else {
			print '<p class="error">Could not update the quotation because:<br />' . mysql_error($dbc) . '</p><p>The querry being run was: ' . $query . '</p>';
		}
	}  // no problem
} else { // no id set
	print '<p class="error">This page has been accessed in error.</p>';
} // end of main if

mysql_close($dbc);
include('templates/footer.html');
?>