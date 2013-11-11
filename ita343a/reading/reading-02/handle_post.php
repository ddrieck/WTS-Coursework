<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text-html"; charset=utf-8/>
	<title> Forum Posting </title>
</head>
<body>
<?php
//Set variables and add breaks for posting
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$posting = nl2br($_POST['posting']);

//Format entry to remove HTML tags
$html_post = htmlentities ($_POST['posting']);
$strip_post = strip_tags ($_POST['posting']);

//Set up name
$name = $first_name . ' ' . $last_name;

//Word count
$words = str_word_count($posting);

$posting = str_ireplace('badword', 'XXXXX', $posting);

//Print message
print "<div>Thank you, $name, for your posting: 
<p>$posting</p>
<p>($words words)</p>
</div>";
?>
</body>
</html>