<?php
session_start();

 $username = $_SESSION['username'];

require_once "../functions.php";

include 'welcome.php';


?>
<!doctype html>
<head>
	<title> Patient Dashboard </title>
</head>
<style type="text/css">
	body{
		background-image: url(../img/1233.jpg);
		background-size: cover;
	}
	html{
		scroll-behavior: smooth;
	}
</style>
<body>
<a href="bills.php"> Pay Bills</a>&nbsp|
<a href="appointments.php"> Book Appointment </a>
</body>
</html>