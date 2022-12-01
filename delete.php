<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookings";

//create connection
$mysqli = new mysqli ($servername, $username, $password, $dbname) or die (mysqli_error($mysqli));

if (isset($_GET['delete'])){
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM book_ride WHERE id=$id")or die($mysqli->error);
	
}
?>