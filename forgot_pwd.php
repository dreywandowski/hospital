<?php
session_start();

//if (($_SESSION['role'] != 'Patient' || $_SESSION['role'] != "Staff")){
//	header("Location:dashboard/error.php");
//}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Reset Password</title>
</head>
<body>
	<p>Answer the following:</p><br>
<form method="POST" action="check.php">
	 Username:<input type="text" name="username">
	<!--E-mail address<br><input type="email" name="email">--><br>
	 <button type="submit" id="change">Send the code to me</button>
</form>
</html>

