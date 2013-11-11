<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Add a Quotation</title>
</head>
<body>
<?php

$file = 'quotes.txt';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ( !empty($_POST['quote']) && ($_POST['quote'] != 'Enter your quotation here.')) {
			if (is_writable($file) && file_exists($file)) {
				$quote_data = $_POST['quote'] . "\t" . $_POST['attr'] . PHP_EOL;
				file_put_contents($file, $quote_data, FILE_APPEND | LOCK_EX);
				print '<p>Your quotation has been stored.</p>';
				} else {
					print '<p style="color: red;">Your quotaton could not be stored due to a system error.</p>';
					} }else {
						print '<p style="color: red;">Please enter a quotation!</p>';
						}
				}
?>

<form action="add_quote.php" method="post">
<textarea name="quote" rows="5" cols="30"><?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { print htmlspecialchars($_POST ['quote']); } else { print 'Enter your quotation here.';} ?> </textarea><br />
<input type="text" name="attr" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { print htmlspecialchars($_POST ['attr']); } else { print 'Enter the attribution.';} ?>"><br />
<input type="submit" name="submit" value="Add This Quote!" />
</form>
</body>
</html>