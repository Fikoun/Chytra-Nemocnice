<?php
/*vložení dat o pacientovi při jeho hospitalizaci*/
include 'connect.php';

if (!isset($_POST))
{
	$stmt = $conn->prepare("INSERT INTO patients (first_name, last_name, birth, vzp, unit_id, reason, treatment, diet, comment, room_number)
							VALUES (?,?,?,?,?,?,?,?,?,?)");

	$stmt->bind_param("sssiissssi", $_POST['first'], $_POST['last'], $_POST['birth'], $_POST['vzp'], $_POST['unit_id'], $_POST['reason'],$_POST['treatment'], $_POST['diet'], $_POST['comment'], $_POST['room_number'],);

	$stmt->execute();

	$conn->close();
}else
	header("location: ../../")