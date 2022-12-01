-<!DOCTYPE html>
<html>
<head>
<title>Displaying drivers details</title>
</head>
<body bgcolor="violet">
<h4>Detalis for all the registered drivers</h4>
<table cellpadding="0" rules="all" border="1" id="search" style="border-colapse: collapse;">
	<tr>
		<th style="width:80px">Driver_First_Name</th>
		<th style="width:80px">Driver_Last_Name</th>
		<th style="width:80px">E_mail</th>
		<th style="width:80px">Car_registration_number</th>
		<th style="width:80px">Driver_licencer</th>
		<th style="width:80px">Phone_number</th>
		<th style="width:80px">Car_Make</th>
		<th style="width:80px">Car_Model</th>
		<th style="width:80px">Number_of_passengers</th>
		<th style="width:80px">VIN_Number</th>
		<th style="width:80px">Car_color</th>
		<th style="width:80px">User_name</th>
		<th style="width:80px">Password</th>
		<th style="width:80px">Confirm</th>
	</tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

//create connection
$con = new mysqli ($servername, $username, $password, $dbname);

//check the connection
if ($con->connect_error)
{
	die ("connection failed:" . $con->connect_error);
}

$sql = "SELECT * FROM driver_account";
$result = $con->query($sql);

if ($result->num_rows > 0)
{
	while ($row = $result->fetch_array())
	{
			echo "<tr>";
	echo "<td>".$row['First_Name']."</td>";
	echo "<td>".$row['Last_Name']."</td>";
	echo "<td>".$row['E-mail']."</td>";
	echo "<td>".$row['Car_registration_Number']."</td>";
	echo "<td>".$row['Driver licence']."</td>";
	echo "<td>".$row['Phone_Number']."</td>";
	echo "<td>".$row['Make']."</td>";
	echo "<td>".$row['Model']."</td>";
	echo "<td>".$row['Number_of_Passengers']."</td>";
	echo "<td>".$row['VIN Number']."</td>";
	echo "<td>".$row['Color']."</td>";
	echo "<td>".$row['User_name']."</td>";
	echo "<td>".$row['Password']."</td>";
	echo "<td>".$row['Confirm']."</td>";
	}
}
else
{
	echo "No results";
}
$con->close();
?>
</body>
</html>