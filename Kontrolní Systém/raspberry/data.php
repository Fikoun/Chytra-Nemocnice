<?php
include '../php/connect.php';
include 'RpiHandler.php';


if (!isset($_POST))
	header("location: ../");
	

$pi = new Handler($conn ,$_POST, $_SERVER['REMOTE_ADDR']);
$pi->save($conn);

$conn->close();

?>