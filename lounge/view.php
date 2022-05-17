<?php

?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>My Bookings</title>        
<link rel="stylesheet" href="style.css" />
</head>

<body>
<div class="form">
<p><a href="index.php">Home</a> ||
<a href="insert.php">Booking</a> 
|
| <a href="logout.php">Logout</a></p>
<h2>My Bookings</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.N</strong></th>
<th><strong>BOOKED DATE AND TIME</strong></th>
<th><strong>APPOINTED TIME</strong></th>
<th><strong>APPOINTED SIZE</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
session_start();
require('config.php');
require('db.php');
//include('sess.php');

$count=1;
$sel_query="Select * from new_record where id>=73";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["trn_date"]; ?></td>
<td align="center"><?php echo $row["time"]; ?></td>
<td align="center"><?php echo $row["size"]; ?></td>

<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
<br/>
<hr/>

</div>
</body>
</html>