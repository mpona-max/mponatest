<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookings";

$Driver_First_Name=$_POST ['fname'];
$Driver_Last_Name=$_POST ['lname'];
$FROM_Destination=$_POST ['fromdestination'];
$TO_Destination=$_POST ['todestination'];
$Car_Make=$_POST ['make'];
$Car_Model=$_POST ['model'];
$Car_Color=$_POST ['color'];
$Date=$_POST ['date'];
$Time=$_POST ['time'];

//create connection to database
$conn = mysqli_connect ($servername, $username, $password, $dbname);

if (!$conn)
{
	die('Could not connect:' . mysqli_error());
}

$sql = "INSERT INTO book_ride VALUES('".$Driver_First_Name."','".$Driver_Last_Name."','".$FROM_Destination."','".$TO_Destination."','".$Car_Make."','".$Car_Model."','".$Car_Color."','".$Date."','".$Time."')";
if ($conn->query($sql)===TRUE)
{
	echo "Your booking has been done successfully!!";
}
else
{
	echo "Error: ". $sql . "<br>" . $conn->error;
}
$conn->close();
?>

