<?php
$url = basename($_SERVER['REQUEST_URI']);
$extension = pathinfo($url);
$page_base = $extension['filename'];
?>
<!DOCTYPE html>
<html>
<head>

<title>Time Tracker</title> 

<link rel="stylesheet" type="text/css" href="css/main.css" />
<meta charset="UTF-8"> 
</head> 
 
<body>
<div id="titlediv">
<h1>Time Tracker</h1>
<p>Track how much time you are spending on each project throughout the week.</p>
</div>

<div id="navbar">
<?php
	if ($page_base == ('login')||$page_base == ('registration')){
		require("formnav.inc"); } else {
			require("navigation.inc"); }
?>
</div>

<div id="header">
<h3><?php print ucwords($page_base)?></h3>
</div>

<div id="content">
<?php
require("$page_base.inc");
?>
</div>

<div id="footer">
<p>Time Tracker | Copyright 2013 | By Dean Rieck | <a href="mailto:ddrieck@gmail.com">ddrieck@gmail.com</a> | <a href="http://www.ddrieck.com">ddrieck.com</a></p>
</div>

</body>
</html>


