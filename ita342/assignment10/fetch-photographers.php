<head>
<title>HomeworkPhotographers Through GET</title>
</head>

<body>
<?php
$connection = mysql_connect("parshall.ovid.u.washington.edu:3131","ddrieck","kpz598vv");

if(!$connection){
die("Connection to database failed." . mysql_error());
}

mysql_select_db("ddrieck");

$result = mysql_query("select name from Donor where name LIKE '%{$_GET["name"]}%'");

while($row = mysql_fetch_array($result)){
	print "{$row['name']}<br />";
	}
?>
</body>