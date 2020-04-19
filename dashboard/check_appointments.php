<?php
session_start();
$username = $_SESSION['username'];

require_once "../functions.php";

//get list of all appointments

 $allBookings = scandir("appointments/");

$books = file_get_contents("appointments/"."dare.json");
$finalBook = json_decode($books, true);

for($counter=0; $counter < $finalBook ; $counter++){
   echo $finalBook[$counter];
}

//echo $countAllBookings = count($allBookings);


/**
//lists all bookings
for ($counter=0; $counter < $countAllBookings ; $counter++) { 
 echo  $currentBooking = $allBookings[$counter];

if($currentBooking == $username.".json"){
echo $booking = file_get_contents("appointments/".$currentBooking);

 $bookingDetails = json_decode($booking, true);
  echo $bookingDetails['time'];
 // parse the json object for the user
  $id = $bookingDetails -> ID;
  $date = $bookingDetails -> date;
  $time = $bookingDetails -> time;
  $nature = $bookingDetails -> nature;
  $complain = $bookingDetails -> complain;
  $dept = $bookingDetails -> department;

  echo $date. " " .$complain;
}

**/









?>