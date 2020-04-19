<?php

// display on the index page
function message(){
	if(isset($_SESSION['message'])){
$message = $_SESSION['message'];
echo "$message";
session_destroy();	
}

else{

}

}


function alreadyExists(){
	 $_SESSION['message'] ="<p style='color:red'; 'text-decoration:bold'>"."User already exists!"."</p>";
    header("Location:index.php");
    die();
 }
   

function regSuccess(){
	$_SESSION['message'] ="<p style='color:green'; 'text-decoration:bold'>".$first_name.", "."Registration successful, you can now login"."</p>";
header("Location:index.php");
}


function regFail(){
	$_SESSION['message'] ="<p style='color:red'; 'text-decoration:bold'>"."We are unable to sign you up. Sorry"."</p>";
}


function loggedIn(){
	$_SESSION['message'] ="<p style='color:green'; 'text-decoration:bold'>"."User logged in ok"."</p>";
}


function logFail(){
  $_SESSION['message'] ="<p style='color:red'; 'text-decoration:bold'>"."User credentials incorrect"."</p>";
  header("Location:index.php");
}


function resetSuccess(){

  $_SESSION['message'] ="<p style='color:green'; 'text-decoration:bold'>"."Password reset successful, login with your new details"."</p>";
  header("Location:index.php");

}


function mailSent(){
	   echo "<script>"."alert('A reset token has been sent to your email, open it to check')"."</script>";
    echo "<p style='color:green'; 'text-decoration:bold'>"."Check your email"."</p>";
}


function adminCheck(){
	if ($_SESSION['role'] != 'admin'){
	header("Location:error.php");
}
}



function staffCheck(){
	if ($_SESSION['role'] != 'Staff'){
	header("Location:error.php");
}

}


function patientCheck(){
	if ($_SESSION['role'] != 'Patient'){
	header("Location:error.php");
}
}



function bookSuccess(){
	$_SESSION['message'] ="<p style='color:green'; 'text-decoration:bold'>"."Your appointment has been booked successfully"."</p>";
header("Location:appointments.php");
	//echo "<p style='color:green'; 'text-decoration:bold'>"."Your appointment has been booked successfully"."</p>";
}


function bookFail(){
	$_SESSION['message'] ="<p style='color:red'; 'text-decoration:bold'>"."Failure booking appointment"."</p>";
header("Location:appointments.php");

//echo "<p style='color:red'; 'text-decoration:bold'>"."Failure booking appointment"."</p>";
}



function alreadyExistsBooking(){
	$_SESSION['message'] ="<p style='color:red'; 'text-decoration:bold'>"."Booking already exists"."</p>";
header("Location:appointments.php");
	//echo "<p style='color:orange'; 'text-decoration:bold'>"."Booking exists already"."</p>";
 }

?>