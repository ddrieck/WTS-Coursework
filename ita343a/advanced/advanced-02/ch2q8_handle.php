<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Continent Arrays</title>
</head>
<body>

<?php

$array = $_POST['continent'];

print "<h4><p>You Enjoy Visiting:</p></h4>";
foreach ($array as $value){
	echo "<p>$value</p>";
	}

sort($array);
print "<h4> Here they are in alphabetical order</h4>";
foreach ($array as $value){
	print "<p>$value</p>";
	}

?>
</body>
</html>
