<?php
session_start();
//include('sess.php');
require('db.php');


$status = "";



if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $time =$_REQUEST['time'];
    $size = $_REQUEST['size'];
	//$submittedby = $_SESSION["username"];	
    $ins_query="insert into new_record
    (`trn_date`,`time`,`size`)values
    ('$trn_date','$time','$size')";
    mysqli_query($con,$ins_query)
    or die(mysqli_error($con));
    $status = "Booked Successfully.";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
	 <script src="jquery-1.10.2.min.js"></script>
        <script src="datedropper.js"></script>
        <link href="datedropper.css" rel="stylesheet"/>
        <link href="Main.css" rel="stylesheet"/>
        
        <link href="my-style.css" rel="stylesheet"/>
        
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="test.php">Dashboard</a> 
| <a href="view.php">View Booking</a> 
| <a href="logout.php">Logout</a></p>
<div>

<h2>Bookings</h2>
<div class="nav-bar">
</div>

	<table width="30%" border="1" style="border-collapse:collapse align:center;">
	<tr>
	<td valign="top">
	<form name="f2" action="" method="post">
		<div class="h1">
			<h3 >Book a table</h3>
		</div>
		<div class="i1">
			<input style="text-align: left" type="text" data-large-mode="true" data-large-default="true" data-lock="from" data-translate-mode="true" data-theme="my-style"/>
        </div>
        <script>
            $('input').dateDropper();
        </script><br>
        
        <input type="hidden" name="new" value="1" />
    
	        <h4>Booking Time</h4>
			<select name="time" align="center">
				<option value="1:00">1:00</option>
				<option value="2:00">2:00</option>
				<option value="3:00">3:00</option>
				<option value="4:00">4:00</option>
				<option value="5:00">5:00</option>
				<option value="6:00">6:00</option>
			</select><br/>
			<h4>Party  Size</h4>
		<select name="size" align="center">
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
			</select><br>


			<p><input name="submit" type="submit" value="Book Now" /></p>
			
	</form>
	
	
	</td>
	</tr>
	</table>

<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>