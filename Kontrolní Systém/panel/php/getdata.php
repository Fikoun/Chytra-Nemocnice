<?php

include 'connect.php';


if (!isset($_GET["id"]))
	die("none");

$id = $_GET['id'];


$sql = "SELECT * from data WHERE patient_id = '$id' ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);


echo $data["temperature"].",".$data["humidity"].",".$data["ekg"];

?>