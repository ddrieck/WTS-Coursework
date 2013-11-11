<?php
// Get value from HTML form
$photographername = $_POST['photographername'];
$photographeremail = $_POST['photographeremail'];
$companyid = $_POST['companyid'];
$photographerid = $_POST['photographerid'];

// Connect using your username and password.
$connection = mysql_connect("parshall.ovid.u.washington.edu:3131","ddrieck", "kpz598vv");
if (!$connection) {
die("Error connecting to database " . mysql_error());
}
// Secure the data before it is used
$photographername = mysql_real_escape_string($photographername);
$photographeremail = mysql_real_escape_string($photographeremail);
$companyid = mysql_real_escape_string($companyid);
$photographerid = mysql_real_escape_string($photographerid);

// select the proper database
mysql_select_db("ddrieck");

// Create the query
if ($photographername == ''){
	echo "Please fill out a value for the Photographer name.";
	} else if ($photographeremail == ''){
		$query = "UPDATE HomeworkPhotographer set name = '$photographername', email = NULL, COMPANYID = '$companyid' WHERE PHOTOGRAPHERID = '$photographerid'";
		} else if ($companyid == ''){
			$query = "UPDATE HomeworkPhotographer set name = '$photographername', email = '$photographeremail', COMPANYID = NULL WHERE PHOTOGRAPHERID = '$photographerid'";
			} else if ($companyid == '' && $photographeremail == ''){
				$query = "UPDATE HomeworkPhotographer set name = '$photographername', email = NULL, COMPANYID = NULL WHERE PHOTOGRAPHERID = '$photographerid'";} else {$query = "UPDATE HomeworkPhotographer set name = '$photographername', email = '$photographeremail', COMPANYID = '$companyid' WHERE PHOTOGRAPHERID = '$photographerid'";}

$result = mysql_query($query);

// Find number of affected rows
echo mysql_affected_rows()," row was updated </ br>";


?> 