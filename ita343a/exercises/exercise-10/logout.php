<?php
define('TITLE', 'Logout');
include('templates/header.html');
include('includes/credentials.php');
/*if (isset($_COOKIE[$cookiename])){
	setcookie($cookiename, FALSE, time()-300);
	}*/
if (isset($_SESSION[$cookiename]) && ($_SESSION[$cookiename] == $cookievalue)){
		$_SESSION = array();
		session_destroy();
	}
	
print '<p>You are now logged out.</p>';

include('templates/footer.html');
?>