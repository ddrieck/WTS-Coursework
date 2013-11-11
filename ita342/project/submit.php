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

$activity_name = $_POST['activity_name'];
$description = $_POST['description'];
$start_time = $_POST['start'];
$end_time = $_POST['end'];
$billable = $_POST['billable'];
$project = $_POST['project'];
$category = $_POST['category'];

$activity_name = mysql_real_escape_string($activity_name);
$description = mysql_real_escape_string($description);

$start_time = date("Y-m-d H:i:s", strtotime($start_time));
$end_time = date("Y-m-d H:i:s", strtotime($end_time));

$query = "INSERT INTO ProjectActivity (activity_name, description, start_time, end_time, PROJECT_ID, CATEGORY_ID, billable) VALUES ('$activity_name', '$description', '$start_time', '$end_time', '$project', '$category', '$billable')";

$result = mysql_query($query);

print "Your activity records have been updated with the information below. <br />
	$activity_name, $description <br />
	$start_time, $end_time, Billable? $billable";
	
?>
</div>

<div id="footer">
<p>Time Tracker | Copyright 2013 | By Dean Rieck | <a href="mailto:ddrieck@gmail.com">ddrieck@gmail.com</a> | <a href="http://www.ddrieck.com">ddrieck.com</a></p>
</div>


</body>
</html>




