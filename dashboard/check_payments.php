<!doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Transaction History </title>
		<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	
</head>

<style type="text/css">
	 #table{
    	background-color: white;
        width: 70%;
         border-collapse: collapse;
}
th{
	background-color:#4CAF50;
}
th, td {
  padding: 15px;
  text-align: left;
  border-bottom: 3px solid #ddd;
}
  
tr:hover {
	background-color: #f5f5f5;

}
</style>
<center><p><u> Transaction History </u></p></center>


<?php
session_start();
error_reporting(E_ERROR | E_PARSE);

$username = $_SESSION['username'];
$username;

require_once "../functions.php";
checkUser();
patientCheck();

//get list of all payments

$allPayments = scandir("payments/");
$countAllPayments = count($allPayments);

echo  "<center>"."<table id='table' border cellpadding=3>" . "<h4>".
       "<tr><th width=100>Username</th><th width=80>Date</th><th width=80>Amount</th><th width=80>Email</th>".
      "&nbsp";

for ($counter=0; $counter < $countAllPayments ; $counter++) { 
  $currentPayment = $allPayments[$counter];


$pay = file_get_contents("payments/".$currentPayment);
  $payDetails = json_decode($pay, true);


  $id = $payDetails['ID'];
  $user = $payDetails['username'];
  $amt = $payDetails['amount'];
  $date = $payDetails['date'];
  $email = $payDetails['email'];	
 

if ($user == $username){	
 	echo "<tr>"."<td>".$user."</td>".
    "<td>".$date. "</td>".
      "<td>"."#".$amt."</td>".
       "<td>".$email."</td>";

}
}
echo "</tr>" ."</table>"."</center>";
 ?>