<?php

$category_qu = mysql_query("SELECT * from ProjectCategory");
$project_qu = mysql_query("SELECT * from ProjectProjects");
?>

<p> Please input your work data. </p>

<form name="input" action="submit.php" method="post" style="width: 250px;">
Activity Name: <input type="text" name="activity_name"><br />
Description: <textarea rows = "3" name="description"></textarea><br />
Start Time (yyyy-mm-dd hh:mm:ss): <input type="text" name="start"><br />
End Time (yyyy-mm-dd hh:mm:ss): <input type="text" name="end"> <br />
Billable?: <input type="radio" name="billable" value="1" style="display: inline;"> Yes <input type="radio" name="billable" value="0" style="display: inline;"> No <br /> <br />
Project: <select name="project">
<?php while ($row = mysql_fetch_assoc($project_qu)){
		print "<option value = \"{$row["PROJECT_ID"]}\">{$row["project_name"]}</option><br />";
		}	
?>
</select> <br />
Category: <select name="category">
<?php while ($row = mysql_fetch_assoc($category_qu)){
		print "<option value = \"{$row["CATEGORY_ID"]}\">{$row["category_name"]}</option><br />";
		} 
?>
</select>
<br />
<input type="submit" value="Submit">
</form>