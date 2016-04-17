<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("knightwatch", $connection); // Selecting Database
//Fetching Values from URL
$ridewalk2=$_POST['ridewalk1'];
$pickuploc2=$_POST['pickuploc1'];
$otherpickuploc2=$_POST['otherpickuploc1'];
$dropoffloc2=$_POST['dropoffloc1'];
$otherdroploc2=$_POST['otherdroploc1'];
$numPeople2=$_POST['numPeople1'];
//Insert query
$query = mysql_query("insert into user_requests(service_type, pickup_location, other_pickup_location, drop_off_location, other_drop_off, num_people) values ('$ridewalk2', '$pickuploc2', '$otherpickuploc2', '$dropoffloc2', '$otherdroploc2', '$numPeople2')");
echo "Form Submitted Succesfully";
mysql_close($connection); // Connection Closed
?>