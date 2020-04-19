<!doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Book an Appointment </title>
		<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	
</head>


<?php
session_start();

	if(isset($_SESSION['message'])){
$message = $_SESSION['message'];
echo "$message";
//session_destroy();	
}

require_once "../functions.php";

//$_SESSION['usermame'] = $username;
/**
 $id = $_SESSION['ID'];
 $currTime = $_SESSION['log'];
$role = $_SESSION['role'];
$reg_time = $_SESSION['reg_time'];
$currTime = $_SESSION['login'];
$fullName = $_SESSION['fullName']; **/
//$designation = $_SESSION['designation'];



?>

<!doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Book Appointments </title>
	<link href="https://fonts.googleapis.com/css?family=Cabin+Condensed|Chivo" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	

</head>

<body>


<form action="create_appointments.php" id="book" enctype="multipart/form-data" method="POST">
		
		<h3><u> Fill in the details</u></h3>
	</div>
	<label>Appointment Date</label><br>
		<input type="date" name="date" id="date" required><br><br>
		
	
<label> Time Frame</label>
		<input type="time" id="time" name="time" required>

	<br><br>

<label for="nature">Nature of Appointment:</label>

		<select name="nature" id="nature">
  <option>Scan</option>
  <option>Consultation</option>
  <option>Routine check</option>
  <option>Others</option>

</select>
		<br>
		<br>

<label for="complaint">Briefly describe your complaint:</label><br>

<textarea name="complain" id="complain" rows="4" cols="20">
</textarea><br><br>

	<label for="Designation">Department:</label>
			<select name="department" id="dept">
  <option>Laboratory</option>
  <option>Chemotherapy</option>
  <option>X-Ray</option>
  <option>Ante-natal</option>

</select><br><br>

<button id="submit" name= "book" type="submit"> Book Appointment </button>

</form>


<br><br>
<span id="ajax"></span>

<a href="patient.php">Back</a>&nbsp|
<a href="../index.php">Home</a>&nbsp


<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript"></script>


</body>
</html>

