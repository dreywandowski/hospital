<?php
session_start();

require_once "functions.php";

if(isset($_POST['first_name']) &&
 isset($_POST['last_name']) &&
  isset($_POST['username']) 
 && isset($_POST['email']) 
 && isset($_POST['password']) 
&& isset($_POST['role'])
&& isset($_POST['designation'])
&& isset($_POST['sex'])){

// data gotten from user
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$sex = $_POST['sex'];
$department = $_POST['designation'];

// get the timestamp
date_default_timezone_set("Africa/Lagos");
$date = new DateTime('now');
$date_r = $date->format("Y-m-d h:i:s");

$currTime = $date_r;


// auto increase the ID of each user
$allUsers = scandir("dashboard/users/");

$countAllusers = count($allUsers);
$newUserID = ($countAllusers -1);

//echo $newUserID;


// session variables for use throughout the program
$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['username']  = $username;
$_SESSION['email'] = $email;
$_SESSION['role'] = $role;
$_SESSION['sex'] = $sex;
$_SESSION['designation'] = $department;
$_SESSION['ID'] = $ID;


// secure password b4 storing in database
$hash = password_hash($password, PASSWORD_DEFAULT);

$_SESSION['password'] = $hash;



// save user inputs in object
$userDetails = [
  'ID' => $newUserID,
  'first_name' => $first_name,
  'last_name' => $last_name,
  'username' => $username,
  'email'    => $email,
  'password' => $hash,
  'role' => $role,
  'sex' => $sex,
  'reg_time' => $currTime,
  'designation' => $department
];

//Check if user already exists
for ($counter=0; $counter < $countAllusers ; $counter++) { 
 $currentUser = $allUsers[$counter];
 

 if($currentUser == $username.".json"){
 alreadyExists(); 
}


  $db_save = file_put_contents("dashboard/users/".$username.".json", json_encode($userDetails));


if ($db_save){
regSuccess();
}


else{

regFail();
    
}
  


}
}

?>