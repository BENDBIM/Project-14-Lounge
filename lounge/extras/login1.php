<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">

	
</head>
<body background="lite.jpg">

	<?php
	echo <<<html
	function displayLogin(){
		
	
	<form class='log'   name='login' method ='post' action="user.php">
		
		<div class="login-box">
		<h1>Login</h1>
		<div class="textbox">
			
			<input type="text" placeholder="Username" >
	</div>

		<div class="textbox">
						<input type="password" placeholder="Password">
	</div>
	<input type='hidden' value='1' name='check1'>
	<button class="btn btn-success btn-lg" type="submit">Login</button>
	
	
html;
	

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
					echo '<meta http-equiv="refresh" content="0;url=sec.php" />';
				}
				else{
					echo"<div id='info'>Invalid Username or password</div>";
					displayLogin();
				}
			}
		
		?>

</body>
</html>