<?php
/*odhlášení*/
session_start();
session_destroy();
header("location: ../prihlaseni.php"); 
?>