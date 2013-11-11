<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Photographer Information</title>
	<style type="text/css" media="screen">
		.number { font-weight: bold;}
	</style>
</head>
<body>
<?php

$connection = mysql_connect("parshall.ovid.u.washington.edu:3131","ddrieck","kpz598vv");

if(!$connection){
die("Connection to database failed." . mysql_error());
}

mysql_select_db("ddrieck");

$query = mysql_query("SELECT p.name AS Name, p.email AS Email, c.name AS Company from HomeworkPhotographer AS p INNER JOIN HomeworkCompany AS c ON p.companyid = c.companyid ORDER BY PHOTOGRAPHERID")

?>

<table border="1">
	<tr style="background: gray;">
		<th>Name</th>
		<th>Email</th>
		<th>Company</th>
	</tr>
	<?php
	$x = 0;
		while ($row = mysql_fetch_array($query)){
			print "<tr style=\"background: $rowcolor;\">";
			if ($x % 2 ==  0){
				$rowcolor = "#9BCDFF";} else {
				$rowcolor = "white";}
			$x++;
			print "<td>{$row['Name']}</td>";
			if ($row['Email'] == NULL){
				print "<td>N/A</td>";} else {
				print "<td>{$row['Email']}</td>";
				}
			print "<td>{$row['Company']}</td>";
			print "</tr>";
			}
	?>
</table>
</body>
</html>