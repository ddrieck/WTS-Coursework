<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Registration</title>
	<style type="text/css" media="screen"> .error {color:red;}
	</style>
</head>
<body>
<h1>Registration Results</h1>
<?php
$okay = TRUE;
	
if (empty($_POST['email'])) {
	print '<p class="error">Please enter your email address</p>';
	$okay = FALSE;
	}

if (empty($_POST['password'])) {
	print '<p class="error">Please enter your password.</p>';
	$okay = FALSE;
	}

if ($_POST['password'] != $_POST['confirm']) {
	print '<p class="error">Your confirmed password does not match the original password.</p>';
		$okay = FALSE;
	}

if ( is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4)) {
	if ($_POST['year'] < 2011) {
		$age = 2011 - $_POST['year'];
	} else {
	print '<p class ="error">Either you entered your birth year wrong or you come from the future!</p>';
	$okay = FALSE;
	}
	} else {
	print '<p class="error">Please enter the year you were born as four digits.</p>';
	$okay = FALSE;
	}
	
if (!isset($_POST['terms']) AND $_POST['terms'] == 'Yes') {
	print '<p class="error">You must accept the terms.</p>';
	$okay = FALSE;
	}

switch ($_POST['color']) {
	case 'red':
		$color_type = 'primary'
		break;
	case 'yellow':
		$color_type = 'primary'
		break;
	case 'green':
		$color_type = 'secondary'
		break;
	case 'blue':
		$color_type = 'primary'
		break;
	default:
		print '>p class="errpr">Please select your favorite color.</p>';
		$okay = FALSE;
		break;
	}
	
if ($okay) {
	print '<p>You have been successfully registered (but not really).</p>';
	print "<p>You will turn $age this year.</p>";
	print "<p>Your favorite color is a $color_type color.</p>";
	}

?>
</body>
</html>