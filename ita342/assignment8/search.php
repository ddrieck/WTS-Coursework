<?php
// Get value from HTML form
$photographername = $_POST['photographername'];

// Connect using your username and password.
$connection = mysql_connect('parshall.ovid.u.washington.edu:3131', 'ddrieck', 'kpz598vv');
if (! $connection) {
die('Error connecting to database ' .
mysql_error());
}

// Secure the data before it is used
$photographername = mysql_real_escape_string($photographername);

// select the proper database (your username)
mysql_select_db('ddrieck');

// run the query with the properly escaped string
$result = mysql_query(
"SELECT * FROM HomeworkPhotographer WHERE name like '%$photographername%'"
);

// Check that there were results
if(!$result){
die('No results ' . mysql_error());
}

// Print number of matching photographers
echo 'There were ', mysql_num_rows($result), ' Matching Photographers';
// process results
echo "<form method='post' action='update.php'>";
while ($row = mysql_fetch_array($result)) {
echo "Photohrapher Info<br />\n";
echo "<input type='hidden' name='photographerid' value='$row[PHOTOGRAPHERID]' />\n";
echo "Photographer Name: <input type='text' name='photographername' value='$row[name]' /><br />\n";
echo "Photographer Email: <input type='text' name='photographeremail' value='$row[email]' /><br />\n";
echo "Company ID: <input type='text' name='companyid' value='$row[COMPANYID]' /><br />\n";
echo "<input type='submit' value='Save' />\n</form>";
}

/*while ($row = mysql_fetch_array($result)) {
echo "Photographer Info<br />";
echo "Photographer Name: $row[name]<br />";
echo "Photographer Email: $row[email]<br />";
echo "Company ID:: $row[COMPANYID]<br />";
echo "Photographer ID: $row[PHOTOGRAPHERID]<br />";
}*/

?>