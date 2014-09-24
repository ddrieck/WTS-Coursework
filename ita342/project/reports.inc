<?php
$query = mysql_query("SELECT a.activity_Name AS 'Activity Name', a.description AS Description, a.start_time AS 'Start Time', a.end_time AS 'End Time', a.billable AS 'Billable?', p.project_name AS Project, c.category_name AS Category from ProjectActivity AS a INNER JOIN ProjectCategory AS c 
ON a.CATEGORY_ID = c.CATEGORY_ID 
INNER JOIN ProjectProjects AS p
ON a.PROJECT_ID = p.PROJECT_ID 
ORDER BY ACTIVITY_ID")
?>
<table border="1">
	<tr style="background: gray;">
		<th>Activity Name</th>
		<th>Description</th>
		<th>Start Time</th>
		<th>End Time</th>
		<th>Billable?</th>
		<th>Project</th>
		<th>Category</th>
	</tr>
<?php	
	while ($row = mysql_fetch_array($query)){
			print "<td>{$row['Activity Name']}</td>";
			print "<td>{$row['Description']}</td>";
			print "<td>{$row['Start Time']}</td>";
			print "<td>{$row['End Time']}</td>";
			if ($row['Billable?'] == 1) {print "<td>Yes</td>";} else {print "<td>No</td>";};
			print "<td>{$row['Project']}</td>";
			print "<td>{$row['Category']}</td>";
			print "</tr>";
			}
?>

</table>