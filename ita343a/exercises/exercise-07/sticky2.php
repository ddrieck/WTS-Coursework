<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Sticky Text Input</title>
</head>
<body>
<?php

function make_text_input ($method, $name, $label, $size = 20, $type) {
	print '<p><label>' . $label . ': ';
	print '<input type="' . $type . '" name="' . $name .'" size="' . $size . '"';
	
	if (($method == 'post')||(isset($_POST[$name]))) {
		print ' value="' . htmlspecialchars($_POST [$name]) . '"';
		} else if (($method == 'get')||(isset($_GET[$name]))) {
			print ' value="' . htmlspecialchars($_GET[$name]). '"';
			}
		
	print '/></label></p>';
	}
	
print '<form action="" method="post">';
make_text_input('get', 'first_name', 'First Name', NULL, 'text');
make_text_input('get', 'last_name', 'Last Name', 30, 'text');
make_text_input('post', 'email', 'Email Address', 50, 'text');
make_text_input('post', 'password', 'Password', NULL, 'password');
print '<input type="submit" name="submit" value="Register!"/></form>';

?>
</body>
</html>