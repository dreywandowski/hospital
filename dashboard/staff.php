<?php
session_start();
require_once "../functions.php";

staffCheck();

include 'welcome.php';
?>

<!doctype html>
<head>
	<title> Medical Staff Dashboard </title>
</head>
<style type="text/css">
	body{
		background-image: url(../img/1.jpg);
		background-size: cover;
	}
</style>
<body>
<a href="appointments.php"> Check Appointments </a>
</body>
</html>