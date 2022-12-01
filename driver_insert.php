<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$First_Name=$_POST ['First_Name'];
$Last_Name=$_POST ['Last_Name'];
$E_mail=$_POST ['mail'];
$Car_registration_Number =$_POST ['reg_number'];
$Driver_licence=$_POST ['licence'];
$Phone_Number =$_POST ['Contacts'];
$Make =$_POST ['make'];
$Model =$_POST ['model'];
$Number_of_Passengers=$_POST ['number_of_passenger'];
$VIN_Number =$_POST ['VIN_Number'];
$Color =$_POST ['color'];
$User_name=$_POST ['User_name'];
$Password=$_POST ['Password'];
$Confirm=$_POST ['Confirm'];

//create connection to database
$con = new mysqli ($servername, $username, $password, $dbname);

//check the connection
if ($con->connect_error)
{
	die ("connection failed:" . $con->connect_error);
}

$sql = "INSERT INTO driver_account VALUES('".$First_Name."', '".$Last_Name."', '".$E_mail."', '".$Car_registration_Number."', '".$Driver_licence."', '".$Phone_Number."', '".$Make."', '".$Model."',
'".$Number_of_Passengers."','".$VIN_Number."', '".$Color."', '".$User_name."', '".$Password."', '".$Confirm."')";
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