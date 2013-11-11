<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Directory Contents</title>
</head>
<body>
<?php

date_default_timezone_set ('America/Los_Angeles');

$search_dir = '.';
$contents = scandir($search_dir);

print '<h2>Directories</h2>
	<ul>';
	foreach ($contents as $item) {
		if ((is_dir($search_dir . '/' . $item)) AND (substr($item, 0, 1) != '.')) {
			print "<li>$item</li>\n";
		}
	}
	
print '</ul>';

print '<hr /><h2>Files</h2>
<table cellpadding="2" cellspacing="2" align="left">
<tr>
<td>Name</td>
<td>Size</td>
<td>Last Modified</td>
</tr>';

foreach ($contents as $item) {
	if ((is_file($search_dir . '/' . $item)) AND (substr($item, 0, 1) != '.')) {
		$fs = filesize($search_dir . '/' . $item);
		$lm = date('F j, Y', filemtime ($search_dir . '/' . $item));
		print "<tr>
			<td>$item</td>
			<td>$fs bytes</td>
			<td>$lm</td>
			</tr>\n";
			}}
			
print '<table>';
?>
</body>
</html>