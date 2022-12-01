<!DOCTYPE html>
<html>
<head>
<title>Displaying the booking status</title>
</head>
<body bgcolor="00ffff">
<table cellpadding="0" rules="all" border="1" id="search" style="border-colapse: collapse;">
	<tr>
		<th style="width:80px">Driver First_Name</th>
		<th style="width:80px">Driver Last_Name</th>
		<th style="width:80px">E_mail</th>
		<th style="width:80px">Phone_Number</th>
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

$sql = "SELECT * FROM client_account";
$result = $con->query($sql);

if ($result->num_rows > 0)
{
	while ($row = $result->fetch_array())
	{
			echo "<tr>";
	echo "<td>".$row['First_Name']."</td>";
	echo "<td>".$row['Last_Name']."</td>";
	echo "<td>".$row['E_mail']."</td>";
	echo "<td>".$row['Phone_Number']."</td>";
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