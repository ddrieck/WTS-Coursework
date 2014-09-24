<?php
session_name("fanregister");
session_start();

define('TITLE', 'Welcome to the J.D. Salinger Fan Club!');
include('template/header.html');

$email = $_SESSION['email'];

print '<h2>Welcome to the J.D. Salinger Fan Club!</h2>';
print "<p>Hello, $email!</p>";

$loggedin = date('g:i a', $_SESSION['loggedin']);
date_default_timezone_set('America/Los_Angeles');
print "<p>You have been logged in since: $loggedin</p>";

print '<p><a href="logout.php">Click here to logout.</a></p>';
include('template/footer.html');
?>

