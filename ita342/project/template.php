<?php

//Find the end path for the URL and pull the page base without extension
$url = basename($_SERVER['REQUEST_URI']);
$extension = pathinfo($url);
$page_base = $extension['filename'];
include("connection/mysql_connect.php");

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
	//If the user lands on login or registration pages show them the form navigation (formnav) menu bar. Otherwise show regular navigation bar
	if ($page_base == ('login')||$page_base == ('registration')){
		require("formnav.inc"); } else if ($page_base == 'avatar'){} else {
			require("navigation.inc"); }
?>
</div>

<div id="header">
<h3><?php print ucwords($page_base) //Grab header from page base and capitalize first letters?></h3>
</div>

<div id="content">
<?php
			
//Add the page content based on the page base name.			
require("$page_base.inc");
print $status;
?>
</div>

<div id="footer">
<p>Time Tracker | Copyright 2013 | By Dean Rieck | <a href="mailto:ddrieck@gmail.com">ddrieck@gmail.com</a> | <a href="http://www.ddrieck.com">ddrieck.com</a></p>
</div>

<?php
	if ($page_base == ('login')){
		print '<script src="js/logincheck.js"></script>'; 
		} else if ($page_base == ('registration')){
			print '<script src="js/formcheck.js"></script>'; }
				else if ($page_base == ('profile')){
					print '<script src="js/webtoolkit.openwindow.js"></script>'; }
?>

</body>
</html>


