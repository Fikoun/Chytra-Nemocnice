<?php
   session_start();
   include("connect.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($conn,$_POST['user']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM staff WHERE login = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
         
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         $_SESSION['id'] = $myusername;
         
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }else header("Location: prihlaseni.php");
?>