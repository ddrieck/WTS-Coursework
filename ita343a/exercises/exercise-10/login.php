<?php
define ('TITLE', 'Login');
include ('templates/header.html');
$loggedin = false;
$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (!empty($_POST['email']) && !empty($_POST['password'])) {
		if ((strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass')) {
			//setcookie($cookiename, $cookievalue, $cookietime);
			$_SESSION['Samuel'] = 'Clemens';
			$loggedin = true;
			} else {
				$error = 'The submitted email address and password do not match those on file!';
				} } else { $error = 'Please make sure you enter both an email address and a password!';
				}
			}
			


if ($error){
	print '<p class="error">' . $error . '</p>';
	}
	
if ($loggedin) {
	print '<p>You are now logged in!</p>';
	} else {
		print '<h2>Login Form</h2>
		<form action="login.php" method="post">
		<p><label>EMail Address<input type="text" name="email" value="' . $_POST['email'] . '" /></label></p>
		<p><label>Password<input type="password" name="password" /></label></p>
		<p><input type="submit" name-"submit" value="Log In!" /></p>
		</form>';
		}
		
include('templates/footer.html');
?>