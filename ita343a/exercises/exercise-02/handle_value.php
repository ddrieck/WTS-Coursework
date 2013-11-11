<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text-html"; charset=utf-8/>
	<title>Compound Interest Calculator</title>
</head>
<body>
<?php 
$principal = $_POST['p'];
$rate = $_POST['r'];
$time = $_POST['t'];

$rate /= 100;
$amount = $principal * exp (($rate*$time));
$amount = round($amount, 2);

print "<p>Based upon an initial investment of \$$principal and a rate of $rate, you would receive \$$amount after $time years.</p>";

?>
</body>
</html>		