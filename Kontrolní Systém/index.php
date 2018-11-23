<?php 
    session_start();

    if (isset($_SESSION['id'])) {
         header("Location: ./panel/");
    } else header("Location: prihlaseni.php");
?>