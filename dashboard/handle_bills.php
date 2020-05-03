<?php
session_start();

$username = $_SESSION['username'];

//echo "yeahh";


$email = $_POST['email'];
$amount = $_POST['amount'];
$phone = $_POST['phone'];
$date = new DateTime('now');
$date_r = $date->format("Y-m-d h:i:s");


//echo $email. $amount . $phone. $username;

$allPayments = scandir("payments/");

$countAllPayments = count($allPayments);
$newBillID = ($countAllPayments -1);  

// save user inputs in object
$paymentDetails = [
  'ID' => $newBillID,
  'username' => $username,
  'date' => $date_r,
  'amount' => $amount,
  'email' => $email
];


//Check if the payment already exists
for ($counter=0; $counter < $countAllPayments ; $counter++) { 
 $currentPayment = $allPayments[$counter];
 

 if($currentPayment == $username.".json"){
 //echo "You have already made a payment. Please request for a reversal";
}


  $db_save = file_put_contents("payments/".$username.".json", json_encode($paymentDetails));


if ($db_save){
//echo "Payment registered sucessfully";
}


else{

echo "something went wrong";
    
}
  


}



?>