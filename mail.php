
<!DOCTYPE html>
<html>
<head>
    <title> Mail</title>
        <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
</head>
<style type="text/css">
    body{
    background: url(img/28521.jpg);
    background-size: cover;
    font-family: 'Zilla Slab', serif;
    font-size: 22px;
}

img {
  border-radius: 8px;
}

a:link, a:visited {
  background-color: green;
  color: white;
  padding: 14px 25px;
  text-align: center; 
  text-decoration: none;
  display: inline-block;
  border-radius: 8px;
}

a:hover, a:active {
  background-color: red;
}

button{
  background-color: orange; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
   border-radius: 8px;
}
<?php


    require "C:\wamp64\www\StartNG\health\PHPMailer\src\PHPMailer.php";
    require "C:\wamp64\www\StartNG\health\PHPMailer\src\SMTP.php";
    require "C:\wamp64\www\StartNG\health\PHPMailer\src\Exception.php";
 
    require_once "functions.php";
    
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 1; 
    $mail->Port = 465 ; //465 or 587

     $mail->SMTPSecure = 'ssl';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);

    //Authentication
    $mail->Username = "aduramimo@gmail.com";
    $mail->Password = "!@#qaz123adura";

    //Set Params

//Generate a random string.
$token = openssl_random_pseudo_bytes(16);
 
//Convert the binary data into hexadecimal representation.
$token = bin2hex($token);

    $mail->SetFrom("aduramimo@gmail.com");
    $mail->AddAddress("$emaildb");
    $mail->Subject = "Your Password Reset Link";
    $mail->Body = "Hey, you requested to reset your password, here is the link to do that: !". " localhost/StartNG/health/reset_pwd.php?token=".$token."\n".
"Kindly ignore if you did not initiate this request";

file_put_contents("tokens/".$username.".json", json_encode(['token' => $token]));

$_SESSION['token'] = $token;

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } 



     else {
     mailSent();
     }

?>

<br><br>
<a href="index.php">Home</a>