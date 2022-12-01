<?php
include ('client_login_request.php');
?>
<html>
<head>
<title>Login Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="viewbookings.html" method="post">
<label>UserName:</label>
<input id="name" required name="username" placeholder="username" type="text">
<label>Password:</label>
<input id="paswword" required name="password" placeholder="********" type="password">
<input name="submit" type="submit" value="Login">
<span><?php echo $error;?></span>
</body>
</html>