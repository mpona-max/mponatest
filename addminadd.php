<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$Admin_ID=$_POST ['adminid'];
$Admin_User_Name=$_POST ['username'];
$Password=$_POST ['password'];
$Confirm=$_POST ['confirm'];

//create connection to database
$con = new mysqli ($servername, $username, $password, $dbname);

//check the connection
if ($con->connect_error)
{
	die ("connection failed:" . $con->connect_error);
}

$sql = "INSERT INTO add_admin VALUES('".$Admin_ID."', '".$Admin_User_name."', '".$Password."', '".$Confirm."')";
if ($con->query($sql)===TRUE)
{
	echo "A new admin has been added to the system!!";
}
else
{
	echo "Error: ". $sql . "<br>" . $con->error;
}
$con->close();
?>
