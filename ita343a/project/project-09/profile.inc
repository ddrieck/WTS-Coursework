<div id="profileleft">
<img src="avatars/<?php print $_SESSION['UserData']['avatar']; ?>" alt="Your Avatar" width="200" height="200">
<a id="managetext" href="avatar.php" title="Manage Your Avatar" onclick="return openWindow(this, {width:950, height:800,center:true})">Manage Your Avatar</a>
</div>

<div id="profileright">
<h3 id="usernametitle"><?php print $_SESSION['UserData']['firstname'] . " " . $_SESSION['UserData']['lastname']; ?></h3>
<?php
print "Username: " . $_SESSION['UserData']['username'] . "<br />";
print "Email: " . $_SESSION['UserData']['email'] . "<br />";
print "Phone: " . $_SESSION['UserData']['phone'] . "<br />";
print "Password: " . $_SESSION['UserData']['password'] . "<br />";


		/*$users_table = mysql_query("SELECT * from Users");
		$profiles_table = mysql_query("SELECT * from Profiles");
		
		$username = $_SESSION['UserData']['username'];

		$joined_query = mysql_query("SELECT * from Users INNER JOIN Profiles ON Users.UserId=Profiles.UserId WHERE Users.UserName = '$username'");
		$joined_array = mysql_fetch_assoc($joined_query);
		for($i = 0; $users_array[$i] = mysql_fetch_assoc($users_table); $i++) ;		
		for($i = 0; $profiles_array[$i] = mysql_fetch_assoc($profiles_table); $i++) ;

		$username_query = mysql_query("SELECT * FROM Users where UserName = '$username'");
		$username_array = mysql_fetch_assoc($username_query);
		
		print $username_array['UserName'];
		print '<br />';
		print_r($username_array);
		print '<br />';
		print_r ($joined_array)	;*/
		
?>
</div>
