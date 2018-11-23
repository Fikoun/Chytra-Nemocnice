<?php 
    session_start();

    if (!isset($_SESSION['id'])) {
 		header("Location: ../prihlaseni.php");
	}
?>

<!DOCTYPE html>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href=".\..\assets\css\bootstrap.min.css">
		<link rel="stylesheet" href=".\..\assets\fontawesome\css\all.css">
		<style type="text/css">body, div, h2, h1, h3, table, td, label {font-family: Tahoma !important; }</style>