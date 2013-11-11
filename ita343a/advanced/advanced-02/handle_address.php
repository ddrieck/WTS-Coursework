<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Address Feedback</title>
</head>
<body>
<?php

if ( !empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['zip'])) {
	print "<p>Here is the address that we receive from you. <br /></p>
			<p>Name: {$_POST['name']}<br />
			Address: {$_POST['address']}<br />
			City: {$_POST['city']}<br />
			State: {$_POST['state']}<br />
			Zip: {$_POST['zip']}<br/></p>";
			} else {
			print "<p>I'm sorry you forgot to fill in a field. Please go back and try again.</p>";
			}
?>
</body>
</html>