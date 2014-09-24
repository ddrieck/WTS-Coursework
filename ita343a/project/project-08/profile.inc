<div id="profileleft">
<img src="avatars/<?php print $_SESSION['UserData']['avatar']; ?>" alt="Your Avatar" width="200" height="200">
<a id="managetext" href="avatar.php" title="Manage Your Avatar" onclick="return openWindow(this, {width:800, height:800,center:true})">Manage Your Avatar</a>
</div>

<div id="profileright">
<h3 id="usernametitle"><?php print $_SESSION['UserData']['firstname'] . " " . $_SESSION['UserData']['lastname']; ?></h3>
<?php
print "Username: " . $_SESSION['UserData']['username'] . "<br />";
print "Email: " . $_SESSION['UserData']['email'] . "<br />";
print "Phone: " . $_SESSION['UserData']['phone'] . "<br />";
print "Password: " . $_SESSION['UserData']['password'] . "<br />";



?>
</div>
