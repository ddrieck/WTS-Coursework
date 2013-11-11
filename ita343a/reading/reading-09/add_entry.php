<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Add a Blog Entry</title>
</head>
<body>
<h1>Add a Blog Entry</h1>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$dbc = @mysql_connect ('ddrieck.ovid.u.washington.edu:32347', 'root', 'Dutchm4n');
	mysql_select_db('myblog', $dbc);
	
	$problem = FALSE;
	if (!empty($_POST['title']) && !empty($_POST['entry'])) {
		$title = mysql_real_escape_string(trim(strip_tags ($_POST['title'])), $dbc);
		$entry = mysql_real_escape_string(trim(strip_tags ($_POST['entry'])), $dbc);
		} else {
			print '<p style="color: red;">Please submit both a title and an entry.</p>';
			$problem = TRUE;
		}

if (!$problem) {
	$query = "INSERT INTO entries (entry_id, title, entry, date_entered) VALUES (0, '$title', '$entry', NOW())";
	
	if (@mysql_query($query, $dbc)) {
		print '<p>The blog entry has been added!</p>'; } else {
			print '<p style="color: red;">Could not add the entry because:
				<br />' . mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
				}
	}
	mysql_close($dbc);
}
?>

<form action="add_entry.php" method="post">
<p> Entry Title: <input type="text" name="title" size="40" maxsize="100" /></p>
<p> Entry Text: <textarea name="entry" cols="40" rows="5"></textarea></p>
<input type="submit" name="submit" value="Post This Entry!" />
</form>
</body>
</html>
			
	