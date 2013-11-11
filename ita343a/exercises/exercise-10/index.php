<?php
include('templates/header.html');
include('includes/mysql_connect.php');

if(isset($_GET['random'])){
	$query = 'SELECT quote_id, quote, source, favorite FROM quotes ORDER BY RAND() DESC LIMIT 1';
	} else if (isset($_GET['favorite'])){
		$query = 'SELECT quote_id, quote, source, favorite FROM quotes WHERE favorite=1 ORDER BY RAND() DESC LIMIT 1';
		} else {
			$query = 'SELECT quote_id, quote, source, favorite FROM quotes ORDER BY date_entered DESC LIMIT 1';
			}

if ($r = @mysql_query($query, $dbc)){
	$row = @mysql_fetch_array($r);
	print "<div><blockquote>{$row['quote']}</blockquote>- {$row['source']} ";
		
	if ($row['favorite'] == 1) {
		print ' <strong>Favorite!</strong>';
		}
		
	print '</div>';

	if (is_administrator()){
		print "<p><b>Quote Admin:</b><a href=\"edit_quote.php?id={$row['quote_id']}\">Edit </a> - + | + - <a href=\"delete_quote.php?id={$row['quote_id']}\">Delete</a></p>\n";
		}
} else { print '<p class="error">Could not retrieve the data because:<br />' . mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
}

@mysql_close($dbc);

print '<p><a href="index.php">Latest</a><-><a href="index.php?random=true">Random</a><-><a href="index.php?favorite=true">Favorite</a><p>';

include('templates/footer.html');
?>
	