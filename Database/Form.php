<?php
session_start();
?>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("knightwatchtest", $connection); // Selecting Database
error_reporting(E_ALL ^ E_DEPRECATED);

//Fetching Values from URL
$session_id = $_SESSION['login_user'];
$ridewalk2=$_POST['ridewalk'];
$time2 = $_POST['time'];
$pickuploc2=$_POST['pickupLocation'];
//if(isset($_POST['otherpickupLocation'])){
//	$otherpickuploc2=$_POST['otherpickupLocation'];
//}
$dropoffloc2=$_POST['dropoffLocation'];
//if(isset($_POST['otherdropoffLocation'])){
//	$otherdroploc2=$_POST['otherdropoffLocation'];
//}
$numPeople2=$_POST['numPeople'];
$date = date('m/d/Y h:i:s a', time());
//Insert query
//$grabQuery = mysql_query("Select username FROM login WHERE username = $_SESSION['login_user']");
$query = mysql_query("insert into request(Username, Service_Type, Time_of_Pickup, Pickup_location, Drop_Off_Location, Number_of_People, Status, Time_of_Request) 
		values ('$session_id', '$ridewalk2', '$time2', '$pickuploc2', '$dropoffloc2', '$numPeople2', '0', (now()))");
//echo $_SESSION["login_user"];
//echo "Form Submitted Succesfully";
mysqli_close($connection); // Connection Closed

header('Location: knightWatchStatusPage.html');
exit;
?>