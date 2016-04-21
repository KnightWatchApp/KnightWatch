<?php
//error_reporting(E_ALL ^ E_DEPRECATED);
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("knightwatchtest", $connection); // Selecting Database

//Fetching Values from URL
$username2=$_POST['username'];
$password2=$_POST['password'];
$FName2=$_POST['FName'];
$LName2=$_POST['LName'];

//Insert query
$query = mysql_query("insert into login(Username, Password, First_Name, Last_Name) values ('$username2', '$password2', '$FName2', '$LName2')");
echo "Form Submitted Succesfully";
mysql_close($connection); // Connection Closed

//Redirecting back to login
header('Location: knightWatchLogIn.html');
exit;
?>