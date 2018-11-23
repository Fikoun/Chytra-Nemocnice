<?php
include 'php/connect.php';

if (isset($_POST['temp']))
{
	$temp = $_POST['temp'];


	$sql = "INSERT INTO data (temperature)
			VALUES 			 ('".$temp."')";


	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	    echo $temp;
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	    echo $temp;
	}

	$conn->close();

}else{
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="test.php" method="POST">
	<input type="number" name="temp">
	<input type="submit">
</form>
</body>
</html>



<?php
}
?>