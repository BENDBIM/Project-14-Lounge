<?php
session_start();
require('config.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="style.css" />
</head>

<body>
<div class="form">
<p><a href="index.php">Home</a> 
|
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.N</strong></th>
<th><strong>FName</strong></th>
<th><strong>LName</strong></th>
<th><strong>Address</strong></th>
<th><strong>Age</strong></th>
<th><strong>Phone</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select fname, lname, address, age, phone from raila where username='".$_POST['username']."'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["fname"]; ?></td>
<td align="center"><?php echo $row["lname"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["age"]; ?></td>
<td align="center"><?php echo $row["phone"]; ?></td>
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
</div>

</body>
</html>