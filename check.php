<?php
session_start();


// auto increase the ID of each user
$allUsers = scandir("dashboard/users/");

$countAllusers = count($allUsers);

$username = $_POST['username'];
$allUsers = scandir("dashboard/users/");


//Check if email exists
for ($counter=0; $counter < $countAllusers ; $counter++) { 
  $currentUser = $allUsers[$counter];
 
if($currentUser == $username.".json"){
  $user = file_get_contents("dashboard/users/".$currentUser);
  $userObj = json_decode($user);

 $emaildb = $userObj -> email;
 $userdb = $userObj -> username;
 $pwd = $userObj -> password;

  $_SESSION['mail'] = $emaildb;
  $_SESSION['user'] = $userdb;
  //$_SESSION['pwd'] = $pwd;

  include 'mail.php';


 }





else{
//echo "<p style='color:red'; 'text-decoration:bold'>"."This user doesn't exist"."</p>";;
}



}



?>

<a href="index.php">Home</a>&nbsp