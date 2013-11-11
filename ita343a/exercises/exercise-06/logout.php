<?php
session_name("fanregister");

session_start();

$_SESSION = array();

session_destroy();

define('TITLE', 'Logout');
include('template/header.html');
?>

<h2>Welcome to the J.D. Salinger Fan Club!</h2>
<p>You are now logged out.</p>
<p>Thank you for using this site. We hope you liked it.<br />
Blah, blah, blah...
Blah, blah, blah...</p>

<?php include('template/footer.html'); ?>
