<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Thanks</title>
</head>
<body>
<?php 

$name = $_GET['name'];
$email = $_GET['email'];

print "<p>Hello, <span style=\"font-weight: bold;\">$name</span>! Thank you for your post. An email will be sent to $email if anyone replies.</p>";

?>
</body>
</html>
