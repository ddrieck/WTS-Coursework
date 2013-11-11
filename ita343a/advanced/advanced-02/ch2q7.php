<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Arrays - Ch. 2, Q 7</title>
</head>
<body>
<table border="0" cellspacing="3" cellpadding="3" align="center">
	<tr>
		<td><h2>Animals of the Sea</h2></td>
	</tr>

<?php
$array = array ("dolphin", "blue whale", "crab", "sharks", "octopus", "trout", "tuna");

echo '<tr><td colspan="2"><b>In their original order:</b></td></tr>';
foreach ($array as $fish) {
	echo "<tr><td>$fish</td>
	<td>$title</td></tr>\n";
}

sort($array);
echo '<tr><td colspan="2"><b>In their alphabetical order:</b></td></tr>';

foreach ($array as $fish) {
	echo "<tr><td>$fish</td>
	<td>$title</td></tr>\n";
	}

rsort($array);
echo '<tr><td colspan="2"><b>In their reverse alphabetical order:</b></td></tr>';

foreach ($array as $fish) {
	echo "<tr><td>$fish</td>
	<td>$title</td></tr>\n";
	}
	
?>
</body>
</html>