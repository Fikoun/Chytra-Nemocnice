<?php
session_start();// Zapneme session
session_destroy();// Smažeme všechna session 'login'
header("location: login_form.php"); // Přesměruje na přihlašovací stránku
?>