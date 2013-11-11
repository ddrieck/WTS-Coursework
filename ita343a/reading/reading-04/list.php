<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>I Have This Sorted Out</title>
</head>
<body>
<?php
$words_array = explode(' ', $_POST['words']);

sort($words_array);

$string_words = implode('<br />', $words_array);

print "<p>An alphabetized version of your list is: <br />$string_words</p>";
?>
</body>
</html>