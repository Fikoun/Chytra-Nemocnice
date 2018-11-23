<?php 
    session_start();

    if (isset($_SESSION['id'])) {
         header("Location: panel.php");
    } else header("Location: prihlaseni.php");
?>

<!DOCTYPE html>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href=".\assets\css\bootstrap.min.css">
		<link rel="stylesheet" href=".\assets\fontawesome\css\all.css">
		<link rel="stylesheet" href=".\assets\css\style.css">
