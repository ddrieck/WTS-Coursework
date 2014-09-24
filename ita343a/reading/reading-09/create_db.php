<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Create the Database</title>
</head>
<body>
<?php

if ($dbc = @mysql_connect ('ddrieck.ovid.u.washington.edu:32347', 'root', 'Dutchm4n')) {
	print '<p>Successfully connected to MySQL!</p>';
	if (@mysql_query('CREATE DATABASE myblog', $dbc)){
		print '<p>The database has been created!</p>';
		} else {
			print '<p style="color: red;">Could not create the database because:<br />' . mysql_error($dbc) . '</p>'; }
	if (@mysql_select_db('myblog', $dbc)) {
		print '<p>The database has been selected!</p>';
		} else {
			print print '<p style="color: red;">Could not select the database because:<br />' . mysql_error($dbc) . '</p>'; }
	mysql_close($dbc);
	} else {
		print '<p style="color: red;">Could not connect to MySQL:<br />' . mysql_error() . '</p>';
		}
?>
</body>
</html>