<?php
define('TITLE', 'Register');
include('template/header.html');

print '<h2>Registration Form</h2>
<p>Register so that you can take advantage of certain features like this, that, and other thing.</p>';

print'<style type="text/css" media="screen"> .error { color:red;}
</style>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$problem = FALSE;
	if (empty($_POST['first_name'])) {
		$problem = TRUE;
		print '<p class="error">Please enter your first name!</p>';
		}
		
	if (empty($_POST['last_name'])) {
		$problem = TRUE;
		print '<p class="error">Please enter your last name!</p>';
		}
	
	if (empty($_POST['email']) || (substr_count($_POST['email'], '@') !=1)) {
		$problem = TRUE;
		print '<p class="error">Please enter your email address!</p>';
		}
	
	if (filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL) == false) {
		$problem = TRUE;
		print '<p class="error">This is not a value email address.';
		}
		
	if (empty($_POST['password1'])) {
		$problem = TRUE;
		print '<p class="error">Please enter a password!</p>';
		}
	
	if (empty($_POST['password1']) || empty($_POST['password2'])) {
		$problem = TRUE;
		print '<p class="error">One of your password fields is empty.</p>';
		} else if (($_POST['password1']) != ($_POST['password2'])) {
			$problem = TRUE;
			print '<p class="error">Your passwords do not match, please try again.</p>';
			}
		
	if (!$problem) {
		print '<p>You are now registered!<br />Okay, you are not really registered but...</p>';
		$body = "Thank you for registering with the J.D. Salinger fan club {$_POST['first_name']}! Your password is '{$_POST['password1']}'. You can log into the site by visiting https://staff.washington.edu/ddrieck/ita343a/exercises/exercise-05/login.php. Make sure you use {$_POST['email']} to log in. Hope to see you soon.";
		mail($_POST['email'], "Registration Confirmation for {$_POST['first_name']} {$_POST['last_name']}", $body, 'From: admin@example.com');
		
		$_POST = array();
		} else { //Forgot a field.
		print '<p class="error">Please try again!</p>';
	}
}

?>
<form action="register.php" method="post">
<p>First Name: <input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) { print htmlspecialchars($_POST['first_name']); } ?>" /></p>
<p>Last Name: <input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) { print htmlspecialchars($_POST['last_name']); } ?>" /></p>
<p>Email Address: <input type="text" name="email" size="20" value="<?php if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']); } ?>" /></p>
<p>Password: <input type="password" name="password1" size="20" value="<?php if (isset($_POST['password1'])) { print htmlspecialchars($_POST['password1']); } ?>" /></p>
<p>Confirm Password: <input type="password" name="password2" size="20" value="<?php if (isset($_POST['password2'])) { print htmlspecialchars($_POST['password2']); } ?>" /></p>
<p><input type="submit" name="submit" value="Register!" /></p>
</form>

<?php include ('template/footer.html'); ?>	