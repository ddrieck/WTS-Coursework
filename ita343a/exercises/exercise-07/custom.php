<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Create a Button</title>
</head>
<body>
<?php

function button_info ($text, $popup, $color) {
		print '<button type="button" style="background-color:' . $color . ';" onclick="alert(\'' . $popup . '\')">' . $text . '</button>'; 
		}
		
		
print '<h2>Enter button info</h2>';
print '<form action="" method="post">';
print 'Button text: <input type="text" name="text"><br />';
print 'Popup text: <input type="text" name="popup" size="50"><br />';
print 'Color: <input type="text" name="color"><br />';
print '<input type="submit" value="Submit">';
print '</form>';

$text = $_POST['text'];
$popup = $_POST['popup'];
$color = $_POST['color'];

print '<h2>Your Button</h2>';
button_info ($text, $popup, $color);
?>

</body>
</html>
	