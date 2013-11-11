<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Create a Table</title>
</head>
<body>
<?php

if ($dbc = @mysql_connect ('ddrieck.ovid.u.washington.edu:32347', 'root', 'Dutchm4n')) {
	if (!@mysql_select_db('myblog', $dbc)) {
		print '<p style="color: red;">Could not select the database because:<br />' . mysql_error($dbc) . '.</p>';
			mysql_close($dbc);
			$dbc = FALSE;
			}
		} else {
			print '<p style="color: red;">Could not connect to MySQL:<br />' . mysql_error() . '.</p>';
			}
			
if ($dbc) {
	$query = 'CREATE TABLE entries ( entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(100) NOT NULL,
	entry TEXT NOT NULL,
	date_entered DATETIME NOT NULL
	)';
	
	if (@mysql_query($query, $dbc)) {
		print '<p>The table has been created.</p>';
			} else {
				print '<p style="color: red;">Could not create the table because:<br />' . mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
				}
				
	mysql_close($dbc);
}

?>
</body>
</html>