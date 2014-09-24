<?php

if (isset($_POST['font_size'], $_POST['font_color'])) {
	setcookie('font_size', $_POST['font_size'], time()+10000000, '/', '', 0);
	setcookie('font_color', $_POST['font_color'], time()+10000000, '/','', 0);
	
	$msg = '<p>Your settings have been entered! Click <a href="view_settings.php">here</a> to see them in action.</p>';
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Customize Your Settings</title>
	<style type="text/css">
	body {
		font-size: medium;
		color: #000;
		
<?php
	if (isset($_POST['font_size'])&&(isset($_POST['font_color']))){
		print "\t\tfont-size: " . htmlentities($_POST['font_size']) . ";\n";
		print "\t\tcolor: #" . htmlentities($_POST['font_color']) . ";\n"; } else {if (isset($_COOKIE['font_size'])&&(isset($_COOKIE['font_color']))) {
		print "\t\tfont-size: " . htmlentities($_COOKIE['font_size']) . ";\n";
		print "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n"; } else {
			print "\t\tfont-size: medium;";
			print "\t\tcolor: #000;";
			}} 
		
?>
	}
	</style>
	
</head>
<body>
<?php
if (isset($msg)) {
	print $msg;
}
?>

<p>Use this form to set your preferences:</p>
<form action="customize.php" method="post">
<select name="font_size">
<option value="">Font Size</option>
<option value="xx-small" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == 'xx-small') { print 'selected= "selected"' ; } ?>>xx-small</option>
<option value="x-small" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == 'x-small') { print 'selected= "selected"' ; } ?>>x-small</option>
<option value="small" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == 'small') { print 'selected= "selected"' ; } ?>>small</option>
<option value="medium" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == 'medium') { print 'selected= "selected"' ; } ?>>medium</option>
<option value="large" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == 'large') { print 'selected= "selected"' ; } ?>>large</option>
<option value="x-large" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == 'x-large') { print 'selected= "selected"' ; } ?>>x-large</option>
<option value="xx-large" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == 'xx-large') { print 'selected= "selected"' ; } ?>>xx-large</option>
</select>

<select name="font_color">
<option value="">Font Color</option>
<option value="999" <?php if (isset($_POST['font_color']) && $_POST['font_color'] == '999') { print 'selected= "selected"' ; } ?>>Gray</option>
<option value="0c0" <?php if (isset($_POST['font_color']) && $_POST['font_color'] == '0c0') { print 'selected= "selected"' ; } ?>>Green</option>
<option value="00f" <?php if (isset($_POST['font_color']) && $_POST['font_color'] == '00f') { print 'selected= "selected"' ; } ?>>Blue</option>
<option value="c00" <?php if (isset($_POST['font_color']) && $_POST['font_color'] == 'c00') { print 'selected= "selected"' ; } ?>>Red</option>
<option value="000" <?php if (isset($_POST['font_color']) && $_POST['font_color'] == '000') { print 'selected= "selected"' ; } ?>>Black</option>
</select>
<input type="submit" name="submit" value="Set My Preferences" />
</form>

</body>
</html>