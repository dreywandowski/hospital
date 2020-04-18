<?php
// this keeps the user logged in
session_start(); 

require_once "functions.php";
message();

?>

<!doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> StartNG Hospital </title>
		<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	
</head>

<body>
	<center>
		<br><br>
	<p> <h4>This is a specialist hospital to cure ignorance!<br> Come as you are, it is completely free!!</h4></p><br>



<div>
<a href="register.php">Sign Up</a>&nbsp|
<a href="login.php">Login</a>&nbsp|
<a href="forgot_pwd.php">Forgot Password?</a>
</div>
</center>

</body>

</html>