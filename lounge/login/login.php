<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<style type="text/css">
		.col-md-3{
			margin-right: 0px;
			background-color: #37444c;
		}

		.log{
				padding-top:210px;
				padding-left: 50px;

		}
		.img{
			margin-left:-15px;
		}
	</style>
</head>
<body>
	<?php
	function displayLogin(){
		
		echo '<div class="row">';
			echo '<div class="col-md-3">';
				echo "<form class='log'   name='login' method ='post' action ='test.php'>";
		echo '<table>';
			echo "<tr><td>Username :</td><td> <input type='text' name='username' /></td></tr>";
		echo "<tr><td>Password :</td><td> <input type='password' name='password' /></td></tr>";
		echo "<tr><input type='hidden' name='check1' value='1' /><tr>";
		     echo '<tr><td><center><button class="btn btn-success btn-lg" type="submit"><i class="fa fa-home"></i>Login</button></center></td></tr>';

		echo"</table>";
	echo"</form>";
			echo "</div>";
			echo '<div class=" img col-md-9"><img src="sun.jpg"></div>';
		echo "</div>";
	echo "</div>";
	}


		function validateLogin($username,$password){
	$user = array();
	$con = mysqli_connect("localhost","root","","user");
	
	if(!$con){
		die("Cannot connect to server ".mysqli_connect_error());
	}
	$query = mysqli_query($con,"select * from raila where (username='$username' and password='$password')");
	
	if(!$query){
		die("cannot perform query".mysqli_error($con));
	}
	while($row = mysqli_fetch_assoc($query)){
		$user = $row;
	}
	return $user;	
}	
			if(isset($_POST['check1'])){
				if($user = validateLogin($_POST['username'],$_POST['password'])){
					$_SESSION['user'] = $user;
					echo '<meta http-equiv="refresh" content="0;url=second.php" />';
				}
				else{
					echo"<div id='info'>Invalid Username or password</div>";
					displayLogin();
				}
			}
			else{
				displayLogin();
			}
		?>

</body>
</html>