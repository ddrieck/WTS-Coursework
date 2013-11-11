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
print "<pre>"; 
print_r( $_POST ); 
print "</pre>";

$okay = TRUE;
$year = date("Y");
$color = $_POST['color'];

if (strlen($_POST['month']) == 1 && strlen($_POST['day']) == 1 ) {
$bday = "0".$_POST['month']."/0".$_POST['day']."/".$_POST['year'];
	} elseif (strlen($_POST['month']) == 2 && strlen($_POST['day']) == 1 ) {
		$bday = $_POST['month']."/0".$_POST['day']."/".$_POST['year'];
		} elseif (strlen($_POST['month']) == 1 && strlen($_POST['day']) == 2 ) {
			$bday = "0".$_POST['month']."/".$_POST['day']."/".$_POST['year'];
			 } elseif (strlen($_POST['month']) == 2 && strlen($_POST['day']) == 2 ) { $bday = $_POST['month']."/".$_POST['day']."/".$_POST['year']; }
	
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
	if ($_POST['year'] < $year) {
		$age = $year - $_POST['year'];
	} else {
	print '<p class ="error">Either you entered your birth year wrong or you come from the future!</p>';
	$okay = FALSE;
	}
	} else {
	print '<p class="error">Please enter the year you were born as four digits.</p>';
	$okay = FALSE;
	}
	
if ( !is_numeric($_POST['month']) && $_POST['month'] == '.') {
	print '<p class="error">Please select a month from the drop down list.</p>';
	$okay = FALSE;
	}

if ( !is_numeric($_POST['day']) ) {
	print '<p class="error">Please select a day from the drop down list.</p>';
	$okay = FALSE;
	}
	
if (!isset($_POST['terms'])) {
	print '<p class="error">You must accept the terms.</p>';
	$okay = FALSE;
	}

switch ($_POST['color']) {
	case 'red':
		$color_type = 'primary';
		break;
	case 'yellow':
		$color_type = 'primary';
		break;
	case 'green':
		$color_type = 'secondary';
		break;
	case 'blue':
		$color_type = 'primary';
		break;
	default:
		print '<p class="error">Please select your favorite color.</p>';
		$okay = FALSE;
		break;
	}
	
if ($okay) {
	print '<p>You have been successfully registered (but not really).</p>';
	print "<p>Your birthday is $bday</p>";
	print "<p>You will turn $age this year.</p>";
	print "<p>Your favorite color, <span style=\"color:$color\">$color</span>, is a $color_type color.</p>";
	}

?>
</body>
</html>