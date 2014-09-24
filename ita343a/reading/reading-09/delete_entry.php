<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Delete a Blog Entry</title>
</head>
<body>
<h1>Delete a Blog Entry</h1>
<?php

$dbc = mysql_connect ('ddrieck.ovid.u.washington.edu:32347', 'root', 'Dutchm4n');
mysql_select_db('myblog', $dbc);

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
	$query = "SELECT title, entry FROM entries WHERE entry_id={$_GET['id']}";
		if ($r = mysql_query($query, $dbc)){
			$row = mysql_fetch_array($r);
			print '<form action="delete_entry.php" method="post">
			<p>Are you sure you want to delete this entry?</p>
			<p><h3>' . $row['title'] . '</h3>' . $row['entry'] . '<br />
			<input type="hidden" name="id" value="' . $_GET['id'] . '" />
			<input type="submit" name="submit" value="Delete this Entry!" /></p>
			</form>'; } else {
				print '<p style="color: red;">Could not retrieve the blog entry because:<br />' . mysql_error($dbc) . '.</p> <p>The query being run was: ' . $query . '</p>';
				} } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {$query = "DELETE FROM entries WHERE entry_id={$_POST['id']} LIMIT 1";
				$r = mysql_query($query, $dbc);
				if (mysql_affected_rows($dbc) == 1) {
					print '<p>The blog entry has been deleted.</p>';
					} else {
						print '<p style="color: red;">Could not delete the blog entry because:<br />' . mysql_error($dbc) . '.</p> <p>The query being run was: ' . $query . '</p>';
						} } else {
							print '<p style="color: red;">This page has been accessed in error.</p>';
							}
mysql_close($dbc);
?>

</body>
</html>					