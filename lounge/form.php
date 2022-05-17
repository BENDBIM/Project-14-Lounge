<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <script src="jquery-1.10.2.min.js"></script>
        <script src="datedropper.js"></script>
        <link href="datedropper.css" rel="stylesheet"/>
        <link href="Main.css" rel="stylesheet"/>
        
        <link href="my-style.css" rel="stylesheet"/>
        
</head>
<body>
	<div class="nav-bar">
		
	</div>
	<table border="1" cellpadding="5" width="800">
	<tr>
	<td valign="top">
	<form action="book.php" method="post">
		<div class="h1">
			<h3>Book a table</h3>
		</div>
		<div class="i1">
			<input style="text-align: left" type="text" data-large-mode="true" data-large-default="true" data-lock="from" data-translate-mode="true" data-theme="my-style"/>
        </div>
        <script>
            $('input').dateDropper();
        </script><br><br>
			<select name="time">
				<option>Booking Time</option>
				<option>1:00</option>
				<option>2:00</option>
				<option>3:00</option>
				<option>4:00</option>
				<option>5:00</option>
				<option>6:00</option>
			</select><br><br><br>


			<select name="size">
				<option>Party Size</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
			</select><br><br><br>


			
			<input style="text-align: left;" class="btn" type="button" value="Book Now">	
	</form>
	</td>
	
		<td valign="top">
		<h3>Cancel booking</h3>
		<form action="cancel.php" method="post">
			<p></p>
			ID: <input name="id" required="" type="text" /><br />
			<p><input name="cancel" type="submit" value="Cancel" /></p>
		</form>
		</td>
	</tr>
</table>
</body>
</html>