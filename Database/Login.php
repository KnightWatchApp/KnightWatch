<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['Username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']); 
      //$myAdmin = mysqli_real_escape_string($db, $_POST['Admin']);

      //Checking to see if the entry exists in the database
      
      $userSql = "SELECT Username FROM login WHERE Username = '$myusername' AND Password = '$mypassword' AND Admin = '0'";
      $adminSql = "SELECT Username FROM login WHERE Username = '$myusername' AND Password = '$mypassword' AND Admin = '1'";
      
      $result = mysqli_query($db,$userSql);
      $adminResult = mysqli_query($db, $adminSql);
      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $adminRow = mysqli_fetch_array($adminResult, MYSQLI_ASSOC);
      //$active = $row['active'];

      //Counts the number of rows to make sure only one exists
      $count = mysqli_num_rows($result);
      $adminCount = mysqli_num_rows($adminResult);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		echo $count;
      echo $adminCount;
      if($count == 1) {
         session_start();
         $_SESSION['login_user'] = $myusername;
         
         header("location: knightWatchMainPage3.html");
      }
      else if($adminCount == 1){
            session_start();
            $_SESSION['admin_user'] = $myusername;
            header("location: knightWatchAdminPage.html");
      }
      else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>