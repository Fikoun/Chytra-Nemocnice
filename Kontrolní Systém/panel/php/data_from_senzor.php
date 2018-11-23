<?php
include 'connect.php';

if (!isset($_POST))
{
	$stmt = $conn->prepare("INSERT INTO data_patient (patient_id, pressure, temperature, humidity, ekg, room_number, pi_asset)
							VALUES (?,?,?,?,?,?,?)");

	$stmt->bind_param("iiiiiii",$_POST['patient_id'], $_POST['pressure'], $_POST['temperature'], $_POST['humidity'], $_POST['ekg'], $_POST['room_number'], $_POST['pi_asset']);

	$stmt->execute();

	$conn->close();
}else
	header("location: ../../")

	