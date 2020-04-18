<?php
session_start();

if(isset($_POST['user_mail']) &&
 isset($_POST['pwd']) &&
 isset($_POST['token'])){

$token = $_POST['token'];
$username = $_SESSION['user'];
$pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

$allUserTokens = scandir("tokens/");
 $countAlluserTokens = count($allUserTokens);


//Check if email exists
for ($counter=0; $counter < $countAlluserTokens ; $counter++) { 
  $currentToken = $allUserTokens[$counter];
 
if($currentToken == $username.".json"){
  $tokenUser = file_get_contents("tokens/".$currentToken);
  $tokenObject =json_decode($tokenUser);

  $tokenFromDB = $tokenObject -> token;

if ($tokenFromDB == $token){
	// auto increase the ID of each user
$allUsers = scandir("dashboard/users/");

$countAllusers = count($allUsers);


//Check if user already exists
for ($counter=0; $counter < $countAllusers ; $counter++) { 
  $currentUser = $allUsers[$counter];
 
if($currentUser == $username.".json"){
  $user = file_get_contents("dashboard/users/".$currentUser);
  $userObj = json_decode($user,true);

$userObj['password']='1';   
$data  = json_encode($userObj);

 //$db_save = file_put_contents("dashboard/users/".$username.".json", json_encode($userObj));

  $_SESSION['message'] ="<p style='color:green'; 'text-decoration:bold'>"."Password reset successful, login with your new details"."</p>";
  header("Location:index.php");

}







}


//else{
//echo "e no show";
//}
}
}

}
}


?>
