<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text-html"; charset=utf-8/>
	<title> Chapter 1, Question 6 </title>
</head>
<body>
<?php
//Use script to find value of side b.

$c = 70;
$A = 19;

$radian = deg2rad($A);
$b = 70 * cos($radian);

$format_radian = round($radian, 3);
$format_b = round($b, 2);

print "<p>We are going to solve for side b. <br />
<img src=\"http://library.thinkquest.org/20991/media/alg2_forgot.gif\"><br />
Side c is $c and our angle is $A. In radians that is $format_radian. Our equation to solve is b = c * cos (A). The value of b then is $format_b.</p>"

?>
</body>
</html>