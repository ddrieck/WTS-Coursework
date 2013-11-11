<?php
include('credentials.php');
function is_administrator($cookiename = 'Samuel', $cookievalue = 'Clemens'){
	//if (isset($_COOKIE[$cookiename])&&($_COOKIE[$cookiename] == $cookievalue)){
	if (isset($_SESSION[$cookiename]) && ($_SESSION[$cookiename] == $cookievalue)){
		return true;
	} else {
		return false;
		}
	}
?>