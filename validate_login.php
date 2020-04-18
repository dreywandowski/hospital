<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];


// auto increase the ID of each user
$allUsers = scandir("dashboard/users/");

$countAllusers = count($allUsers);

// checks the password
$pwd = password_verify($password, $password);

// get the timestamp
//date_default_timezone_set("Africa/Lagos");

$date = new DateTime('now');
$date_r = $date->format("Y-m-d h:i:s");

$currTime = $date_r;


//Check if user already exists
for ($counter=0; $counter < $countAllusers ; $counter++) { 
  $currentUser = $allUsers[$counter];
 
if($currentUser == $username.".json"){
  $user = file_get_contents("dashboard/users/".$currentUser);
  $userObj = json_decode($user);

  // parse the json object for the user
  $id = $userObj -> ID;
  $pwd = $userObj -> password;
  $role = $userObj -> role;
  $reg_time = $userObj -> reg_time;
  $first_name = $userObj -> first_name;
  $last_name = $userObj -> last_name;
  $designation = $userObj -> designation;
  $email = $userObj -> email;

  $fullName = $first_name." ".$last_name;


//echo $pwd." ".$role;
    $_SESSION['ID'] = $id;
    $_SESSION['log'] = $currTime;
    $_SESSION['role'] = $role;
    $_SESSION['reg_time'] = $reg_time;
    $_SESSION['login'] = $currTime;
    $_SESSION['fullName'] = $fullName;
    $_SESSION['username'] = $username;
    
 $_SESSION['designation'] = $designation;

//echo $role.$designation;



// verify password
  if (password_verify($password, $pwd)){
  
    $_SESSION['message'] ="<p style='color:green'; 'text-decoration:bold'>"."User logged in ok"."</p>";


switch ($role) {
    case "Patient":
        header("Location:dashboard/Patient.php");
        break;
    case "Staff":
        header("Location:dashboard/Staff.php");
        break;
    case "admin":
        header("Location:dashboard/admin.php");
    
        break;
    default:
        echo "No roles selected";
}

/**
// redirect based on access type
    if ($role == "Patient"){
        header("Location:dashboard/Patient.php");
    }
    else if ($role = "staff"){
      header("Location:dashboard/Staff.php");
    }
  **/

 }


 // redirect to home page if login failed

 else{
  $_SESSION['message'] ="<p style='color:red'; 'text-decoration:bold'>"."User credentials incorrect"."</p>";
  header("Location:index.php");
 }



    }



}


 
?>
