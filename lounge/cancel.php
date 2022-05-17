<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Cancel booking</title>
</head>

<body>

<?php

$errors = "<h3><font color=\"red\">Wrong code!</font></h3>";
if($errors)
	{
			echo $errors;
	}
	
	if(empty($errors))
	{
		include 'config.php';

		// Create connection
		$conn = mysqli_connect("localhost", "root", "", "lounge");

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$id = intval(htmlspecialchars($_POST["id"]));

		$sql = "UPDATE booking SET canceled=1 WHERE id = $id";
		if (mysqli_query($conn, $sql)) {
			echo "<h3>Booking cancelled.</h3>";
		}
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
		mysqli_close($conn);
	}
?>

<a href="test.php"><p>Back to the booking calendar</p></a>

</body>

</html>
