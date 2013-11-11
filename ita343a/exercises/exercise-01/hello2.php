<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text-html; charset=utf-8"/>
	<title>Greetings</title>
</head>
<body>
<?php
error_reporting(E_ALL | E_STRICT);
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
print "<p>Well hello, <span style =\"font-weight: bold;\"> $first_name $last_name</span >! Aren't you famous?</p>";
?>
</body>
</html>