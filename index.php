

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

<!doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> StartNG Hospital </title>
		<link href="https://fonts.googleapis.com/css?family=Cabin+Condensed|Chivo" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="/css/index.css">
</head>

<body>
	<p> <h4>This is a specialist hospital to cure ignorance!<br> Come as you are, it is completely free!!<h4></p><br>

<div>
<a href="register.php">Sign Up</a>&nbsp|
<a href="login.php">Login</a>&nbsp|
<a href="forgot_pwd.php">Forgot Password?</a>
</div>

</body>

</html>