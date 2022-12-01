<?php
$con = mysql_connect("localhost","root","");

$db = mysql_select_db("registration", $con);

$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("SELECT username from login where username = '$user_check'", $con);
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['username'];

if(!isset($login_session))
{
	mysql_close($con);
}
?>