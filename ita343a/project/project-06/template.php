<?php

session_start();

//Find the end path for the URL and pull the page base without extension
$url = basename($_SERVER['REQUEST_URI']);
$extension = pathinfo($url);
$page_base = $extension['filename'];

//If the user goes to any page besides registration without logging on then kick him to the login page. If the user goes to registration page do not perform any action.
if ($page_base == 'registration') {$page_base = 'registration';} else if (($page_base != ('login')) && ($_SESSION['loggedin'] != 1)) {$page_base = 'login'; header("Location: $page_base.php");} 

//For the login page do a login check. If username and password equal variables then set session variables and kick user to home page. If user enters wrong information spit out error.
if ($page_base == 'login' && ($_SERVER['REQUEST_METHOD'] == 'POST')) {
		if ( (strtolower($_POST['username']) == 'ddrieck@gmail.com') && ($_POST['password'] == 'test1234') ) {
			$_SESSION['email'] = $_POST['username'];
			$_SESSION['loggedin'] = 1;
			$page_base = 'home';
			header("Location: $page_base.php");
			} else { $status = '<p id="error"> Your username or password are incorrect. Please try again.</p>'; } }

//If logout button is click the session is destroyed and the user kicked back to the login page.
if (($page_base == 'logout')&&($_SESSION['loggedin'] == 1)) {		
		$page_base = 'login';
		header("Location: $page_base.php");
		$_SESSION = array();
		session_destroy(); } else {
			$page_base == 'home';
			}

//This big convoluted mess checks to see if the registration fields have been populated once the form has been submitted. If all fields are set then print a successful message otherwise print out error.
if (($page_base == 'registration')&&($_SERVER['REQUEST_METHOD'] == 'POST')&&(empty($_POST['username'])||empty($_POST['password'])||empty($_POST['repeatpassword'])||empty($_POST['firstname'])||empty($_POST['lastname'])||empty($_POST['email'])||empty($_POST['phone'])||empty($_POST['avatar']))) { $status = '<p id="error">Please complete the registration form.</p>'; } else if (($page_base == 'registration')&&($_SERVER['REQUEST_METHOD'] == 'POST')&&(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['repeatpassword'])&&isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['avatar']))){
		$status = '<p id="success"> You have successfully registered. Please log in <a href="login.php">here.</a></p>'; } 
		
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
		require("formnav.inc"); } else {
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

</body>
</html>


