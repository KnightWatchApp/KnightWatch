<?php
session_start();
?>
<?php
//$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server..
$conn = mysqli_connect("localhost", "root", "", "knightwatchtest"); // making it like the tutorial
//$db = mysqli_select_db("knightwatchtest", $connection); // Selecting Database
$user = $_SESSION["login_user"];
$query = "SELECT * FROM request WHERE Username='$user'";
$result = mysqli_query($conn, $query);
//$num = mysql_numrows($result);
if (mysqli_num_rows($result) > 0)
{
	
	while($row = mysqli_fetch_assoc($result))
	{
		echo "username: " . $row["Username"] . " - Service_Type: " . $row["Service_Type"] . " - Pickup Time: " . $row["Time_of_Pickup"] . " - Pickup Location: " . $row["Pickup_Location"] . " - Drop Off Location: " . $row["Drop_Off_Location"] . " - Number of People: " . $row["Number_of_People"] . "<br>";
	} 
	
} else {
	echo "0 results";
}
//$grabQuery = mysql_query("Select username FROM login WHERE username = $_SESSION['login_user']");
//$query = mysql_query("insert into requests(Username, Service_Type, Time_of_Pickup, Pickup_location, Drop_Off_Location, Number_of_People) 
		//values (".$_SESSION[login_user], "'$ridewalk2', '$time2', '$pickuploc2', '$dropoffloc2', '$numPeople2')");

echo $user;

//echo "Form Submitted Succesfully";
mysqli_close($conn); // Connection Closed
?>