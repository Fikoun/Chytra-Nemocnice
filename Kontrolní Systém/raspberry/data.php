<?php
include '../php/connect.php';
include 'RpiHandler.php';


if (!isset($_POST))
	header("location: ../");
	

$pi = new Handler($_POST, $_SERVER['REMOTE_ADDR']);





$conn->close();

?>