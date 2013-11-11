<?php

session_start();

//Find the end path for the URL and pull the page base without extension
$url = basename($_SERVER['REQUEST_URI']);
$extension = pathinfo($url);
$page_base = $extension['filename'];

$users = 'data/users.txt';
$profiles = 'data/profiles.txt';
$avatars = 'avatars/';		

//If the user goes to any page besides registration without logging on then kick him to the login page. If the user goes to registration page do not perform any action.
if ($page_base == 'registration') {$page_base = 'registration';} else if (($page_base != ('login')) && ($_SESSION['loggedin'] != 1)) {$page_base = 'login'; header("Location: $page_base.php");} 

//For the login page do a login check. If username and password equal variables then set session variables and kick user to home page. If user enters wrong information spit out error.
if (($page_base == 'login' && ($_SERVER['REQUEST_METHOD'] == 'POST'))) {
		//Opens user and profile information files
		$usersfile = fopen($users, 'rb');
		$profilefile = fopen($profiles, 'rb');
		while ($userline = fgetcsv($usersfile, 2000, ";")) {
			//While running through the user file see if the username and password match what has been submitted. If so set loggein to 1.
			if (($userline[1] == $_POST['username']) AND ($userline[2] == trim($_POST['password'])) ) {
				//$_SESSION['email'] = $_POST['username'];
				$_SESSION['loggedin'] = 1;
				//Loop through profile file and pull line containing logged in user information
				while ($profileline = fgetcsv($profilefile, 2000, ";")){
					//If the user ids match then create the userdata session array to pipe into the profiles page
					if ($userline[0] == $profileline[0]){
						$keyarray = array("userid1","firstname","lastname","email","phone","avatar","userid2","username","password"); //create keyarray based on columns in both profiles and users text file
						$dataarray = array_merge($profileline, $userline); //merge the two files together into one array
						$_SESSION['UserData'] = array_combine($keyarray, $dataarray); //combine keyarray with merged dataarray to get an associative array attached to the $_SESSSION['Userdata']
						}
						}
					break;
				}
			
			}
		
		fclose($profilefile);
		fclose ($usersfile);
		
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
		session_destroy(); } else {
			$page_base == 'home';
			}

//Moved all the field checks into javascript. This checks for form submission and puts registration data into appropriate files. Also uploads avatar to avatars folder.
if (($page_base == 'registration')&&($_SERVER['REQUEST_METHOD'] == 'POST')&&(is_writable($users) && is_writable($profiles) && is_writable($avatars)))
	{if (move_uploaded_file ($_FILES['avatar']['tmp_name'], $avatars."/".$_FILES['avatar']['name'])) {
		
			$userid = time() . rand(0, 4596); //Create userid from epoch + random number
			$datausers = $userid . ";" . $_POST['username'] . ";" . trim($_POST['password']) . PHP_EOL; //Create data set for users file

			file_put_contents($users, $datausers, FILE_APPEND | LOCK_EX); //Upload user data to users.txt file
			
			$dataprofiles = $userid . ";" . $_POST['firstname'] . ";" . $_POST['lastname'] . ";" . $_POST['email'] . ";" . $_POST['phone'] . ";" . $_FILES['avatar']['name'] . PHP_EOL; //Create data set for profiles file
	
			file_put_contents($profiles, $dataprofiles, FILE_APPEND | LOCK_EX); //Upload profile data to profiles.txt file
			
			$status = '<p id="success"> You have successfully registered. Please log in <a href="login.php">here.</a></p>';
			
			//Upload avatar image to avatars folder
			
				} else {
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
		move_uploaded_file ($_FILES['newavatar']['tmp_name'], $avatars."/".$_FILES['newavatar']['name']);
		
		$profile_string = file_get_contents($profiles);
	
		$newstring = str_replace($_SESSION['UserData']['avatar'], $_FILES['newavatar']['name'], $profile_string);
		
		file_put_contents($profiles, $newstring, LOCK_EX);
		
		unlink($avatars."/".$_SESSION['UserData']['avatar']);
		
		if (strpos($profile_string, $_FILES['newavatar']['name']) === false){
				$_SESSION['UserData']['avatar'] = $_FILES['newavatar']['name'];
			}
	}
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


