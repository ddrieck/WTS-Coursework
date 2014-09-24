<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>No Soup For You!</title>
</head>
<body>
<h1>Mmm...soups</h1>
<?php
$soups = array (
'Monday' => 'Clam Chowder',
'Tuesday' => 'White Chicken Chili',
'Wednesday' => 'Vegetarian'
);

$count1 = count ($soups);

print "<p>The soups array orginally had $count1 elements.</p>";

$soups['Thursday'] = 'Chicken Noodle';
$soups['Friday'] = 'Tomato';
$soups['Saturday'] = 'Cream of Broccoli';

$count2 = count ($soups);
print "<p>After adding 3 more soups, the array now has $count2 elements</p>";

print "<p>$soups</p>";
print_r ($soups);

?>
</body>
</html>
