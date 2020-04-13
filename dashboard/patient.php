<?php
session_start();

if ($_SESSION['role'] != 'Patient'){
	header("Location:error.php");
}

include 'welcome.php';
?>

