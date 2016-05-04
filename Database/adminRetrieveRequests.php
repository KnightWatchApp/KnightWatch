<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("knightwatchtest", $connection); // Selecting D



$sql = "SELECT * FROM request";
	$result = mysql_query($sql)
          or die('Error querying database.');
// This SQL statement selects ALL from the table 'Locations'

while($row = mysql_fetch_assoc($result)){
     $json[] = $row;
}

echo json_encode($json);

		  mysql_close($connection); // Connection Closed
?>