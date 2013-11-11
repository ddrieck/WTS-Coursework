<script> 

window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
</script>

<div id="profileleft">
<span id="avatartext">Current Avatar</span>
<img src="avatars/<?php print $_SESSION['UserData']['avatar']; ?>" alt="Your Avatar" width="200" height="200">
</div>

<div id="profileright">
<p><form id="changeavatar" enctype="multipart/form-data" method="post" action="">
<label id="avatartext" for="newavatar">Change Avatar</label><input type="file" name="newavatar" id="newavatar">
<input type="submit" value="Upload" id="avatarsubmit">
</form></p>
</div>

