<!doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Check Appointments </title>
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
<center><p><u> View your Appointments</u></p></center>

<?php
session_start();
$username = $_SESSION['username'];
$dept = $_SESSION['designation'];


require_once "../functions.php";

//get list of all appointments

 $allBookings = scandir("appointments/");
 $countAllBookings = count($allBookings);

 //print_r($allBookings);

for ($counter=0; $counter < $countAllBookings ; $counter++) { 
  $currentBooking = $allBookings[$counter];
  //print_r($currentBooking);


  $book = file_get_contents("appointments/".$currentBooking);
  $bookDetails = json_decode($book, true);

//if($bookDetails != ".."."json"){
	
   $id = $bookDetails['ID'];
  $date = $bookDetails['date'];
  $time = $bookDetails['time'];
  $nature = $bookDetails['nature'];
  $complain = $bookDetails['complain'];
  $username = $bookDetails['username'];
 $department =  $bookDetails['department'];



if ($department == $dept){				
	echo  "<center>"."<table id='table' border cellpadding=3>" . "<h4>".
       "<tr><th width=100>Username</th><th width=80>Date</th><th width=80>Time</th><th width=80>Nature of Appointment</th><th width=80>Initial complaint</th><th width=80>Department</th>".
      "&nbsp";

     //while($row = mysqli_fetch_assoc($success)) {
 
 	echo "<tr>"."<td>".$username."</td>".
    // "<td>".$dates. "</td>".
      "<td>".$time."</td>".
       "<td>".$nature."</td>".
        "<td>".$complain."</td>".
         "<td>".$department."</td>";
     // "<td>"."<button class='dl' type='submit' value='$file'>". "Download"."</button>". "&nbsp";
 
echo "</tr>" ."</table>"."</center>";
}


/**else{
	noAppointments();
}
**/								


}

?>