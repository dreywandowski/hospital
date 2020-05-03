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
<center><p><u> View All Users</u></p></center>

<body>
  <?php
  session_start();

require_once "../functions.php";
adminCheck();

error_reporting(E_ERROR | E_PARSE);

//$username = $_POST["username"];

// auto increase the ID of each user
$allUsers = scandir("users/");

$countAllUsers = count($allUsers);

  echo  "<center>"."<table id='table' border cellpadding=3>" . "<h4>".
       "<tr><th width=100>Full Name</th><th width=80>Role</th><th width=80>Designation</th><th width=80>Email</th><th width=80>Reg Time</th>".
      "&nbsp";

for($counter=0; $counter < $countAllUsers ; $counter++) { 
  $currentUser = $allUsers[$counter];
  //print_r($currentBooking);


$user = file_get_contents("users/".$currentUser);

//if($user != " "){
  $userDetails = json_decode($user, true);

  
   $id = $userDetails['ID'];
  $role = $userDetails['role'];
  $reg_time = $userDetails['reg_time'];
  $designation = $userDetails['designation'];
  $email = $userDetails['email'];
  $fullname = $userDetails['first_name']." ".$userDetails['last_name'];

        

 
  echo "<tr>"."<td>".$fullname."</td>".
     "<td>".$role. "</td>".
      "<td>".$designation."</td>".
       "<td>".$email."</td>".
        "<td>".$reg_time."</td>";
         
     // "<td>"."<button class='dl' type='submit' value='$file'>". "Download"."</button>". "&nbsp";
 




/**else{
  noAppointments();
}
**/               


}

echo "</tr>" ."</table>"."</center>";

  ?>
  </body>
  </html>
