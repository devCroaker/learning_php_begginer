<?php // Script 13.2 - functions.php

function is_administrator($name = 'Brandon', $value = 'Sanderson') {
	if (isset($_COOKIE[$name]) && ($_COOKIE[$name] == $value)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

?>