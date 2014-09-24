<?php

$connection = mysql_connect("parshall.ovid.u.washington.edu:3131","ddrieck","kpz598vv");

if(!$connection){
die("Connection to database failed." . mysql_error());
}

mysql_select_db("ddrieck");

$result = mysql_query("select * from Donor");

while($row = mysql_fetch_array($result)){
	print "DonorID: {$row['DONORID']}<br />";
	print "Phone: {$row['phone']}<br />";
	print "Name: {$row['name']}<br />";
	print "Address: {$row['address']}<br />";
	print "Email: {$row['email']}<br />";
	}
	

?>