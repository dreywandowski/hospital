<?php
/**
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();


$mail -> isSMTP();
$mail-> SMTPAuth = true;
$mail -> SMTP ='ssl';
$mail -> Host ='smtp.gmail.com';
$mail -> Port ='465';
$mail -> isHTML();
$mail -> Username = 'aduramimo@gmail.com';
$mail -> Password = '!@#qaz123adura';
$mail -> SetFrom('adura@test.com');
$mail -> Body = 'A test mail';
$mail -> AddAddress('drey@adura.gq');


$mail -> Send();

**/

    require "C:\wamp64\www\StartNG\health\PHPMailer\src\PHPMailer.php";
    require "C:\wamp64\www\StartNG\health\PHPMailer\src\SMTP.php";
    require "C:\wamp64\www\StartNG\health\PHPMailer\src\Exception.php";


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
    $mail->SetFrom("aduramimo@gmail.com");
    $mail->AddAddress("$emaildb");
    $mail->Subject = "Your Password Reset Link";
    $mail->Body = "Hey, you requested to reset your password, here is the link to do that: !". " localhost/StartNG/health/reset_pwd.php"."\n".
"Kindly ignore if you did not initiate this request";


     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "<script>"."alert('A reset token has been sent to your email, open it to check')"."</script>";
    echo "<p style='color:green'; 'text-decoration:bold'>"."Check your email at ".$emaildb."</p>";
     }

?>