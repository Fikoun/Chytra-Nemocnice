<?php 
    session_start();

    if (isset($_SESSION['id'])) {
         header("Location: panel.php");
    } else header("Location: prihlaseni.php");
?>