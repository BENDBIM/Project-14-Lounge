

<?php 
session_start();

// connects to the database
$mysqli = new mysqli("localhost", "root", "", "lounge");

$query = "SELECT fname, lname, address, age, phone FROM students WHERE fname = '".$_SESSION['username']."'";
if($result = $mysqli->query($query))
{
    while($row = $result->fetch_assoc())
    {
        echo "<div align=\"center\">";
        echo "<br />Your <b><i>Profile</i></b> is as follows:<br />";
        echo "<b>First name:</b> ". $row['fname'];
        echo "<br /><b>Last name:</b> ".$row['lname'];
        echo "<br /><b>Address:</b> ".$row['address'];
        echo "<br /><b>Age:</b> ".$row['age'];
        echo "<br /><b>Phone:</b> ".$row['phone'];
        echo "</div>"   
    }
    $result->free();
}
else
{
    echo "No results found";
}
?>