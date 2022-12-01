<html>
<head>
<title></title>
</head>
<body bgcolor="00ffff">
<h4>Bookings</h4>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookings";

//create connection
$mysqli = new mysqli ($servername, $username, $password, $dbname) or die (mysqli_error($mysqli));

$result = $mysqli->query("SELECT * FROM book_ride") or die($mysqli->error);
//pre_r($result);
//pre_r($result->fetch_assoc());
//pre_r($result->fetch_assoc());

?>

<div class = "row justify-content-center">
<table class="table" cellpadding="0" rules="all" border="1" id="search" style="border-colapse: collapse;">
	<thead>
		<tr>
			<th>Driver_First_Name</th>
			<th>Driver_Last_Name</th>
			<th>FROM_Destination</th>
			<th>TO_Destination</th>
			<th>Car_Make</th>
			<th>Car_Model</th>
			<th>Car_Color</th>
			<th>Date</th>
			<th>Time</th>
			<th colspan "2">Action</th>
		</tr>
	</thead>
<?php
	while ($row = $result->fetch_assoc()):?>
	<tr>
		<td><?php echo $row['Driver_First_Name']; ?></td>
		<td><?php echo $row['Driver_Last_Name']; ?></td>
		<td><?php echo $row['FROM_Destination']; ?></td>
		<td><?php echo $row['TO_Destination']; ?></td>
		<td><?php echo $row['Car_Make']; ?></td>
		<td><?php echo $row['Car_Model']; ?></td>
		<td><?php echo $row['Car_Color']; ?></td>
		<td><?php echo $row['Date']; ?></td>
		<td><?php echo $row['Time']; ?></td>
		<td>
			<a href = "confirm.html" class = "btn btn-info" >CONFIRM</a>
			<a href = "delete.php? delete= <?php echo $row['id'];?> "class = "btn btn-danger">CANCEL</a>
		</td>
	</tr>
<?php endwhile; ?>
</table>

</div>
<?php

function pre_r($array)
{
	echo '<pre>';
	print_r($array);
	echo '<pre>';
} 
?>
</body>
</html>