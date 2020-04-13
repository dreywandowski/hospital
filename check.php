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




$to = $emaildb;
$subject = "Your Password Reset Link";
$txt = "Hey, you requested to reset your password, here is the link to do that:!". "localhhost/health/reset_pwd.php"."\n".
"Kindly ignore if you did not initiate this request";

$headers = "From: no_reply@adura.com" . "\r\n" .
"CC: drey@adura.gq";


$mailto = mail($to,$subject,$txt,$headers);

 if ($mailto){

 	echo "<script>"."alert('A reset token has been sent to your email, open it to check')"."</script>";
    echo "<p style='color:green'; 'text-decoration:bold'>"."Check your email at ".$emaildb."</p>";
 }
else{
	echo "e no go";
}

 }





else{
//echo "<p style='color:red'; 'text-decoration:bold'>"."This user doesn't exist"."</p>";;
}



}



?>

<a href="index.php">Home</a>&nbsp