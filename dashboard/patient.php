<?php
session_start();

 $username = $_SESSION['username'];

require_once "../functions.php";

include 'welcome.php';


?>
<!doctype html>
<head>
	<title> Patient Dashboard </title>
	<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
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
<center><br><a href="bills.php"> Pay Bills</a>&nbsp|
<a href="appointments.php"> Book Appointment </a></center>
</body>
</html>