<?php
session_start();

if ($_SESSION['role'] != 'Staff'){
	header("Location:error.php");
}


include 'welcome.php';
?>

