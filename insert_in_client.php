<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$First_Name=$_POST ['First_Name'];
$Last_Name=$_POST ['Last_Name'];
$E_mail =$_POST ['mail'];
$Phone_Number =$_POST ['Contacts'];
$Username=$_POST ['User_name'];
$Password=$_POST ['Password'];
$Confirm=$_POST ['Confirm'];

//create connection to database
$con = new mysqli ($servername, $username, $password, $dbname);

//check the connection
if ($con->connect_error)
{
	die ("connection failed:" . $con->connect_error);
}

$sql = "INSERT INTO client_account VALUES('".$First_Name."', '".$Last_Name."', '".$E_mail."', '".$Phone_Number."', '".$Username."', '".$Password."', '".$Confirm."')";
if ($con->query($sql)===TRUE)
{
	echo "Your account has been created successfully!!";
}
else
{
	echo "Error: ". $sql . "<br>" . $con->error;
}
$con->close();
?>
