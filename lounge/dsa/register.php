<html>
	<title></title>
	<body>
		 <div class="bg1">
  <div class="container text-center">
  <div class="register" id="reg" >
  <h3>Please register first to be a part of this library!</h3>
  <div class="section-register-padding">
  <div id="col-md-12">
  	<?php
	function insertData($username,$fname,$lname,$password,$address,$age,$phone){
		$con = mysqli_connect("localhost","root","","lounge");
		if(!$con){
			die("Cannot connect to the database ".mysqli_error($con));
		}
		$sql = "insert into raila (username,fname,lname,password,address,age,phone) values ('$username','$fname','$lname','$password','$address','$age','$phone')";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die("Cannot perform the query ".mysqli_error($con));
		}
		echo "<div id='lolol'>You have been registered.</div>";
	}
	function showForm(){
		echo<<<__HTML__
			<form name='f1' method='post' action="$_SERVER[PHP_SELF]">
			<table>
				<tr><td>Username :</td><td> <input type='text' name='username' /></td></tr>
				<tr><td>First Name :</td><td> <input type='text' name='fname' /></td></tr>
				<tr><td>Last Name :</td><td> <input type='text' name='lname' /></td></tr>
				<tr><td>Password :</td><td> <input type='text' name='password' /></td></tr>
				<tr><td>Address :</td><td> <input type='text' name='address' /></td></tr>
				<tr><td>Age :</td><td> <input type='text' name='age' /></td></tr>
				<tr><td>Phone :</td><td> <input type='text' name='phone' /></td></tr>
				<input type='hidden' name='check' value='1' />
          <tr><td><center><button class="btn btn-warning btn-lg" type="submit">Register</button></center></td></tr>
				</table>
			</form>
__HTML__;
	}
function validateForm(){
		global $username,$fname,$lname,$password,$address,$age,$phone;
		$errors = array();
		$_POST['username'] = trim($_POST['username']);
		$_POST['fname'] = trim($_POST['fname']);
		$_POST['lname'] = trim($_POST['lname']);
		$_POST['password'] = trim($_POST['password']);
		$_POST['address'] = trim($_POST['address']);
		$_POST['phone'] = trim($_POST['phone']);
		$_POST['age'] = trim($_POST['age']);
		
		//validating the inputs 
		if(strlen($_POST['username'])==0||strlen($_POST['fname'])==0
			||strlen($_POST['lname'])==0||strlen($_POST['age'])==0||strlen($_POST['address'])==0||strlen($_POST['password'])==0||strlen($_POST['phone'])==0){
			$errors[] = "Insert all fields please!";
		}
		if($_POST['age'] != strval(intval($_POST['age']))){
			$errors[] = "Age should be a number";
		}		
		return $errors;
	}
	
	function showErrors($errors){
		echo "<ul>";
		foreach($errors as $e){
			echo "<li>$e</li>";
		}
		echo "</ul>";
	}

			if(isset($_POST['check']))
			{if($e = validateForm()){
						showErrors($e);showForm();
					}else{
						insertData($_POST['username'],$_POST['fname'],$_POST['lname'],$_POST['password'],$_POST['address'],$_POST['age'],$_POST['phone']);
				
				showForm();
					}
				
			}else
			{
				showForm();
	}

		?>

</div>
</div>
</div>
</div>
</div>
<!-- <div class="footer"><p> hamrolibray@co.ltd</p></div> -->
</body>
</html>