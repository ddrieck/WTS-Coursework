<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text-html"; charset=utf-8/>
	<title>Contact Information</title>
</head>
<body>
<?php 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$city = $_POST['city'];
$state = $_POST['state'];

$state_abr = substr($state, 0, 2);
$state_abr = strtoupper($state_abr);
$full_name = $first_name . ' ' . $last_name;
print "Thank you " .$full_name. ". I hear that $state_abr, especially $city, is wonderful this time of year.";
?>
</body>
</html>