<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>View a Quotation</title>
</head>
<body>
<h1>Random Quotation</h1>
<?php

$data = file('quotes.txt');
$n = count($data);
$rand1 = rand(0, ($n - 1));


do {$rand2 = rand(0, ($n - 1));
		} while ($rand1 == $rand2);
		
print '<p>' . trim($data[$rand1]) . '</p>';
print '<p>' . trim($data[$rand2]) . '</p>'; 



?>
</body>
</html>