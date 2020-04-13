
<!doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Login </title>
	<link href="https://fonts.googleapis.com/css?family=Cabin+Condensed|Chivo" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>

<?php
// this keeps the user logged in
session_start(); 

if(isset($_SESSION['message'])){
$message = $_SESSION['message'];
echo "$message";
session_destroy();	
}

else{
	
}


?>

<form action="validate_login.php" class="hide" method="POST">

<h3><u>Login</u></h3>
	</div>
	<label>Username</label><br>
		<input type="text" name="username" required><br><br>
		<label>Password</label><br>
		<input type="password" name="password" required><br>
<button  name= "login" type="submit"> Login </button>
	</form>



<br><br>
<a href="index.php">Home</a>&nbsp

</body>
</html>