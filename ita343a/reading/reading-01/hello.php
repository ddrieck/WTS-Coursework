<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text-html; charset=utf-8"/>
	<title>Greetings</title>
</head>
<body>
<?php
$name = $_GET['name']; 
print "<p>Hello, <span style =\"font-weight: bold;\"> $name </span >! </p>";
?>
</body>
</html>