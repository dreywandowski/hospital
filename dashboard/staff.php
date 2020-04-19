<?php
session_start();
require_once "../functions.php";

staffCheck();

include 'welcome.php';
?>

<!doctype html>
<head>
	<title> Medical Staff Dashboard </title>
	<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<style type="text/css">
	body{
		background-image: url(../img/1.jpg);
		background-size: cover;
	}
</style>
<body>
<center><br><a href="check_appointments.php"> Check Appointments </a><br><br></center>
</body>
</html>