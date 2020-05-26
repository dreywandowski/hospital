
<!doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Login </title>
	<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>

<?php
// this keeps the user logged in
session_start(); 
require_once "functions.php";

message();

?>
<center>
<form action="validate_login.php" class="hide" method="POST">

<h3><u>Login</u></h3>
	</div>
	<label>Username</label>
		<input type="text" name="username" required><br><br>
		<label>Password</label>
		<input type="password" name="password" required><br><br>
<button name= "login" type="submit" class="button"> Login </button>
	</form><br><br>

<a href="index.php">Home</a>&nbsp

</center>

<br><br>


</body>
</html>