<?php
/*odeslání a kontrola dat z formuláře na přihlášení*/
   session_start();
   include("php/connect.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      
      $id = $_GET['id'];


      $sql = "SELECT id FROM staff WHERE chip = '$id'";
      
      $result = mysqli_query($conn,$sql);
      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
         
      $count = mysqli_num_rows($result);
      
		
      if($count == 1) {
         $_SESSION['id'] = $id;
         
        header("location: ./panel/");
      }else {
        echo "Your Login Name or Password is invalid";
      }
   }else header("Location: prihlaseni.php");
?>