<?php
session_start();
$username = $_SESSION['username'];

require_once "../functions.php";

if(isset($_POST['date']) &&
 isset($_POST['time']) &&
  isset($_POST['nature']) 
 && isset($_POST['complain']) 
&& isset($_POST['department'])){

// data gotten from user
$date = $_POST['date'];
$time = $_POST['time'];
$nature = $_POST['nature'];
$complain = $_POST['complain'];
$department = $_POST['department'];


// get the timestamp
date_default_timezone_set("Africa/Lagos");
$date = new DateTime('now');
$date_r = $date->format("Y-m-d h:i:s");

$currTime = $date_r;


$allBookings = scandir("appointments/");

$countAllBookings = count($allBookings);
$newBookID = ($countAllBookings -1);

// save user inputs in object
$bookDetails = [
  'ID' => $newBookID,
  'date' => $date,
  'time' => $time,
  'nature' => $nature,
  'complain' => $complain,
  'department' => $department,
  'username' => $username
];





//Check if booking already exists
for ($counter=0; $counter < $countAllBookings ; $counter++) { 
 $currentBooking = $allBookings[$counter];
 

 if($currentBooking == $username.".json"){
 alreadyExistsBooking(); 
}


  $db_save = file_put_contents("appointments/".$username.".json", json_encode($bookDetails));


if ($db_save){
bookSuccess();
}


else{

bookFail();
    
}
  


}
}




?>