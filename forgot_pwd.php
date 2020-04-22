<?php
session_start();

require_once "functions.php";
	if(isset($_SESSION['message'])){
$message = $_SESSION['message'];
echo "$message";
//session_destroy();	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Reset Password</title>
		<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	body{
	background: url(img/28521.jpg);
	background-size: cover;
	font-family: 'Zilla Slab', serif;
	font-size: 22px;
}

img {
  border-radius: 8px;
}

a:link, a:visited {
  background-color: green;
  color: white;
  padding: 14px 25px;
  text-align: center; 
  text-decoration: none;
  display: inline-block;
  border-radius: 8px;
}

a:hover, a:active {
  background-color: red;
}

button{
  background-color: orange; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
   border-radius: 8px;
}
	
</style>
<body>
<center>
	<p>Provide the following:</p><br>
<form method="POST" action="check.php">
	 Username:<input type="text" name="username">
	<!--E-mail address<br><input type="email" name="email">--><br><br>
	 <button type="submit" id="change">Send the code to me</button><br><br>

</form><br><br>
<a href="index.php">Back</a>&nbsp
</center>

	 
</html>

