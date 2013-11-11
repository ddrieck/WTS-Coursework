<?php

session_start();


//Find the end path for the URL and pull the page base without extension
$url = basename($_SERVER['REQUEST_URI']);
$extension = pathinfo($url);
$page_base = $extension['filename'];
include("connection/mysql_connect.php");

$users = 'data/users.txt';
$profiles = 'data/profiles.txt';
$avatars = 'avatars/';		

//If the user goes to any page besides registration without logging on then kick him to the login page. If the user goes to registration page do not perform any action.
if ($page_base == 'registration') {$page_base = 'registration';} else if (($page_base != ('login')) && ($_SESSION['loggedin'] != 1)) {$page_base = 'login'; header("Location: $page_base.php");} 

//For the login page do a login check. If username and password equal variables then set session variables and kick user to home page. If user enters wrong information spit out error.
if (($page_base == 'login' && ($_SERVER['REQUEST_METHOD'] == 'POST'))) {
		$username = mysql_real_escape_string(trim(strip_tags ($_POST['username'])));
		$password = md5(mysql_real_escape_string(trim(strip_tags ($_POST['password']))));
		
		$username_query = mysql_query("SELECT * FROM Users where UserName = '$username'");
		$username_array = mysql_fetch_assoc($username_query);
		
		if (($username_array['UserName'] == $username) AND ($username_array['Password'] == $password)){
			//$_SESSION['email'] = $_POST['username'];
			$_SESSION['loggedin'] = 1;
			
			$joined_query = mysql_query("SELECT * from Users INNER JOIN Profiles ON Users.UserId=Profiles.UserId WHERE Users.UserName = '$username'");
			$joined_array = mysql_fetch_assoc($joined_query);
					$keyarray = array("userid","username","password","profileid","firstname","lastname","email","phone","avatar"); //create keyarray based on columns in both profiles and users text file
					$_SESSION['UserData'] = array_combine($keyarray, $joined_array); //combine keyarray with merged dataarray to get an associative array attached to the $_SESSSION['Userdata']
					}
					
		
	if ($_SESSION['loggedin'] == 1) {
		$page_base = 'home';
		header("Location: $page_base.php"); } else {
			$status = '<p id="error"> Your username or password are incorrect. Please try again.</p>'; }
	} 


	
//If logout button is click the session is destroyed and the user kicked back to the login page.
if (($page_base == 'logout')&&($_SESSION['loggedin'] == 1)) {		
		$page_base = 'login';
		header("Location: $page_base.php");
		$_SESSION = array();
		session_destroy();} else {
			$page_base == 'home';
			}

//Moved all the field checks into javascript. This checks for form submission and puts registration data into appropriate files. Also uploads avatar to avatars folder.
if (($page_base == 'registration')&&($_SERVER['REQUEST_METHOD'] == 'POST') && is_writable($avatars))
	{if (move_uploaded_file ($_FILES['avatar']['tmp_name'], $avatars."/".$_FILES['avatar']['name'])) {
		$username_query = mysql_query("SELECT UserName FROM Users");
		$usernameArray = Array();

		while($user_array = mysql_fetch_array($username_query, MYSQL_ASSOC)){
			$usernameArray[] = $user_array['UserName'];
			}

		if (in_array($_POST['username'], $usernameArray)){
			$status = '<p id="error"> This username has already been taken. Please try another.</p>';
			} else {
		
			$username = mysql_real_escape_string(trim(strip_tags ($_POST['username'])));
			$password = md5(mysql_real_escape_string(trim(strip_tags ($_POST['password']))));
			
			$newuser_query = "INSERT INTO Users (UserName, Password) VALUES ('$username', '$password')";
		
			$firstname = mysql_real_escape_string(trim(strip_tags ($_POST['firstname'])));
			$lastname = mysql_real_escape_string(trim(strip_tags ($_POST['lastname'])));
			$email = mysql_real_escape_string(trim(strip_tags ($_POST['email'])));
			$phone = mysql_real_escape_string($_POST['phone']);
			$avatar_file = mysql_real_escape_string(trim(strip_tags ($_FILES['avatar']['name'])));
		
			if (mysql_query($newuser_query, $dbc)){
				$userid_query = mysql_query("SELECT UserId FROM Users where UserName = '$username'");
				$userid = mysql_result($userid_query, 0);
				
				$newprofile_query = "INSERT INTO Profiles (UserId, FirstName, LastName, EmailAddress, PhoneNumber, AvatarImageName) VALUES ('$userid', '$firstname', '$lastname', '$email', '$phone', '$avatar_file')";				
				
				mysql_query($newprofile_query, $dbc);
								
				$status = '<p id="success"> You have successfully registered. Please log in <a href="login.php">here.</a></p>';
			} else { $status = '<p id="error">' . mysql_error($dbc) . '</p>'; }
		
			//Upload avatar image to avatars folder
			
				}} else if (move_uploaded_file ($_FILES['avatar']['tmp_name'], $avatars."/".$_FILES['avatar']['name']) == 0){
					//$status = '<p id="error">The file was too large. Please choose a file under 1MB.</p>';
					$fileerror = '<p id="error"> Your file could not be uploaded because: ';
					switch ($_FILES['avatar']['error']) {
						case 1:
							$fileerror += 'The file exceeds the upload_max_filesize setting in php.ini';
							break;
						case 2:
							$fileerror += 'The file exceeds the MAX_FILE_SIZE setting in the HTML form';
							break;	
						case 3:
							$fileerror += 'The file was only partially uploaded';
							break;
						case 4:
							$fileerror += 'The temporary folder does not exist.';
							break;
						case 6:
							$fileerror += 'Something unforeseen happened.';
							break;
						default:
							$fileerror += 'The file was too large. Please choose a file under 1MB.';
							break;
						}
					$fileerror += '.</p>';
					$status = $fileerror;
				}
		 } else if (!is_writable($avatars)){ $status = '<p id="error"> This directory is not writable.</p>';
			}
					

//Take first name and last name variables and concatenate them into one string. Return the string.
function fullname($firstname, $lastname) {
		$name = $firstname . " " . $lastname;
		return $name;
		}

if (($page_base == 'avatar' && ($_SERVER['REQUEST_METHOD'] == 'POST'))) {
		if (move_uploaded_file ($_FILES['newavatar']['tmp_name'], $avatars."/".$_FILES['newavatar']['name'])){
		
		unlink($avatars."/".$_SESSION['UserData']['avatar']);
		
		$newavatar_name = mysql_real_escape_string(trim(strip_tags ($_FILES['newavatar']['name'])));
		$profile_user = $_SESSION['UserData']['profileid'];
		
		$update_query = "UPDATE `project`.`Profiles` SET `AvatarImageName` = '$newavatar_name' WHERE `Profiles`.`ProfileId` ='$profile_user';";
		$r = mysql_query($update_query, $dbc);
		
		
		
		if (strpos($profile_string, $_FILES['newavatar']['name']) === false){
				$_SESSION['UserData']['avatar'] = $_FILES['newavatar']['name'];
			}
		}
	else if (move_uploaded_file ($_FILES['avatar']['tmp_name'], $avatars."/".$_FILES['avatar']['name']) == 0){
		$avatar_status = '<p id="error">The file was too large. Please choose a file under 1MB.</p>';
	}}
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


