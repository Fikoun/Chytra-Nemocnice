<?php
include 'connect.php';

if (!isset($_POST))
{
	$stmt = $conn->prepare("INSERT INTO staff (first_name, last_name, login, password, position, rights)
							VALUES (?,?,?,?,?,?)");

	$stmt->bind_param("sssssi", $_POST['first'], $_POST['last'], $_POST['login'],password_hash($_POST['pass'], PASSWORD_DEFAULT), $_POST['position'], $_POST['rights']);

	$stmt->execute();

	$conn->close();
}else
	header("location: ../../") 