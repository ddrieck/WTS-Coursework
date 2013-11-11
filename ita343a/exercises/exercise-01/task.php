<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text-html"; charset=utf-8/>
	<title>Quadratic Calculator</title>
</head>
<body>
<?php 
ini_set (' display_errors', 1);
error_reporting (E_ALL | E_STRICT);

$h = $_POST['h'];
$b1 = $_POST['b1'];
$b2 = $_POST['b2'];

$area = .5 * $h * ($b1 + $b2);

print "<p>The height of your trapezoid is $h. Base 1 is $b1, and base 2 is $b2.<br /> From the values you gave me the area of your trapezoid is $area.</p>";

?>
</body>
</html>		