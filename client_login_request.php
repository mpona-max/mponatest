<?php
session_start();
$error="";
if(isset($_POST['submit']))
{
	if (empty($_POST['username']) OR empty($_POST['password']))
	{
		$error = "Username or password is invalid!!";
	}
	else
	$Username=$_POST['username'];
	$Password=$_POST['password'];
	
	$con = mysql_connect("localhost", "root","");
	
	$Username = stripslashes($Username);
	$Password = stripslashes($Password);
	
	$Username = mysql_real_escape_string($Username);
	$Password = mysql_real_escape_string($Password);
	
	$db = mysql_select_db("registration",$con);
	$query = mysql_query("SELECT * FROM client_account WHERE password = '$Password'AND username = '$Username'", $con);
	$rows = mysql_num_rows($query);
	
	if($rows == 1)
	{
		$_SESSION['login_user'] = $Username;
		header("location: profile.php");
	}
	else
	{
		$error = "Username or pasword in invalid";
	}
	mysql_close($con);
}
?>