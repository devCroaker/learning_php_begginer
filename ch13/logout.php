<?php // Script 13.6 - logout.php
if (isset($_COOKIE['Brandon'])) {
	setcookie('Brandon', FALSE, time()-300);
}

define('TITLE', 'Logout');
include('templates/header.html');

print '<p>You are now logged out.</p>';

include('templates/footer.html');
?>