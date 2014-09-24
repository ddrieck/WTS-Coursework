<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>My Little Gradebook</title>
</head>
<body>
<?php

$grades = array (
'Richard' => 95,
'Sherwood' => 82,
'Toni' => 98,
'Franz' => 87,
'Melissa' => 75,
'Roddy' => 85
);

print "<p>Orginally the array looks like this:<br />";
foreach ($grades as $student => $grade) {
	print "$student: $grade<br />\n";
	}
print '</p>';

arsort ($grades);
print "<p>After sorting the array by values using arsort(), looks like this:<br />";
foreach ($grades as $student => $grade) {
	print "$student: $grade<br />\n";
	}
print '</p>';

ksort($grades);
print "<p>After sorting the array by key using ksort(), looks like this:<br />";
foreach ($grades as $student => $grade) {
	print "$student: $grade<br />\n";
	}
print '</p>';

?>
</body>
</html>