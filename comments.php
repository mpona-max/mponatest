<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$First_Name=$_POST ['fname'];
$Last_Name=$_POST ['lname'];
$E_mail_Address=$_POST ['mail'];
$Subject=$_POST ['subject'];

//create connection to database
$conn = mysqli_connect ($servername, $username, $password, $dbname);

if (!$conn)
{
	die('Could not connect:' . mysqli_error());
}

$sql = "INSERT INTO contacts VALUES('".$First_Name."','".$Last_Name."','".$E_mail_Address."','".$Subject."')";
if ($conn->query($sql)===TRUE)
{
	echo "Your comments are submitted succesful!!";
}
else
{
	echo "Error: ". $sql . "<br>" . $conn->error;
}
$conn->close();
?>