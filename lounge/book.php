<?php
session_start();
require('config.php');

	if(isset($_POST["submit"]) && $_POST['submit']==1){
		$trn_date = date("Y-m-d H:i:s");
		$time = $_POST["time"];
		$size = $_POST["size"];
		$sql = "insert into booking
		('trn_date','time','size')values
		('$trn_date','$time','$size')";
		$result = mysqli_query($con, $sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		else{
			echo "Booking Done Successfully.";
		}
		
	}
	echo "</br></br><h1><a href='view.php'>View Bookings</a></h1>";
	  
?>