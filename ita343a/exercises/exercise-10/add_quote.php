<?php

define('TITLE', 'Add a Quote');
include('templates/header.html');
print '<h2>Add a Quotation</h2>';

if (!is_administrator()) {
	print '<h2>Access Denied!</h2> <p class="error"> You do not have permission to access this page.</p>';
	include('templates/footer.html');
	exit();
	}
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (!empty($_POST['quote']) && !empty($_POST['source'])){
		include('includes/mysql_connect.php');
		$quote = mysql_real_escape_string(trim(strip_tags($_POST['quote'])), $dbc);
		$source = mysql_real_escape_string(trim(strip_tags($_POST['source'])), $dbc);
		
	if(isset($_POST['favorite'])){
		$favorite = 1;
		} else {
		$favorite = 0;
		}
		
	$query = "INSERT INTO quotes (quote, source, favorite) VALUES ('$quote', '$source', '$favorite')";
	$r = mysql_query($query, $dbc);
	
	if (mysql_affected_rows($dbc) == 1) {
		print '<p>Your quotation has been stored.</p>';
		} else {
		print '<p class="error">Coudl not store the quote because: <br />' . mysql_error($dbc) . '</p><p>The query being run was: ' . $query . '</p>';
		}
	} else { print '<p class="error">Please enter a quotation and a source!</p>';
	}
}
	
print '<form action="add_quote.php" method="post">
<p><label>Quote <textarea name="quote" rows="5" cols="30">' . $_POST['quote'] . '</textarea></label></p>
<p><label>Source <input type="text" name="source" value="'. $_POST['source'] .'"/></label></p>
<p><label>Is this a favorite?<input type="checkbox" name="favorite" /></label></p>
<p><input type="submit" name="submit" value="Add This Quote!" /></p>
</form>';

 include('templates/footer.html'); ?>

	