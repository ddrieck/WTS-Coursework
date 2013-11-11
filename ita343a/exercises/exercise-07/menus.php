<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Date Menu</title>
</head>
<body>
<?php

function make_date_menus($start_year, $number = 7) {
	$months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'August', 'September', 'October', 'November', 'December');
	print '<select name="month">';
	foreach ($months as $key => $value) {
		print "\n<option value=\"$key\">$value</option>";
	}
	print '</select>';
	
	print '<select name="day">';
	for ($day = 1; $day <= 31; $day++) {
		print "\n<option value=\"$day\">$day</option>";
		}
	print '</select>';
	
	print '<select name="year">';
	for ($y = $start_year; $y <= ($start_year + $number); $y++) {
		print "\n<option value=\"$y\">$y</option>";
		}
	print '</select>';
	
	}
	
	print '<form action="" method="post">';
	make_date_menus(1984, 20);
	print '</form>';
?>
</body>
</html>