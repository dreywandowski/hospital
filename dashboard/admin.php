<?php
session_start();

if ($_SESSION['role'] != 'admin'){
	header("Location:error.php");
}
$username = $_SESSION['username'];
?>

<!doctype html>
<head>
	<title> Admin Panel</title>
</head>
<style type="text/css">
		body{
			font-family: 'Raleway', sans-serif;
			background-image: url('network-engineer-administrator-server-room-admin-technician-worker-data-center-69671306.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}
		h3{
			color:white;
		}
		.hidden{
display: none;
		}
.shown{
	display: block;
}
		.delete, .admin{
	
		 border-radius: 8px 8px;
         line-height: 22px;
         font-size: 16px;
         border: 2px solid black;
         width: 75%;
		}
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
.button.red{
  background-color: #ca3535;
  border-color: #c43c35;
  clear: both;
  float: right;
  padding: 6px 20px;
}
</style>
<body>
<p> <center> <?php echo "<p style='color:red'; 'text-decoration:bold' 'font-size: 20px';>"."Hey  ". $_SESSION['username'].", welcome!!"."</p>" ?></center></p>
<br><br>

<script src="jquery-3.2.1.js"></script>



  	<span id="ajax"></span><br><br><br>


  	<button id="create"> Create New User</button>

<form action="create_user.php" class="hidden" id="register" enctype="multipart/form-data" method="POST">
		
		<h3><u> Fill in your details</u></h3>
	</div>
	<label>Name</label><br>
		<input type="text" name="first_name" id="fname" placeholder="first name"  minlength="2" required><br>
		<input type="text" name="last_name" id="lname" placeholder="last name" minlength="2"  required>
		<br>
		<br>
	
<label> Email</label>
		<input type="email" id="email" name="email" minlength="5"  required>

		<br><br>

<label> Username</label>
		<input type="text" name="username" placeholder="username" required>

		<br><br>

		<label>Password</label>
		<input type="password" name="password"  required><br><br>

	<label for="Gender">Gender</label>
	<input type="radio"  name="sex"  value="Male" required /> Male
	<input type="radio"  name="sex"  value="Female"/>Female
	
<br><br>

<label for="Role">Your role:</label>

	<input type="radio"  name="role"  value="Patient" required/> Patient
	<input type="radio"  name="role"  value="Staff"/>Staff
		<br>
		<br>

		<label for="Designation">Department:</label>
			<select name="designation" id="dept">
  <option>Laboratory</option>
  <option>Chemotherapy</option>
  <option>X-Ray</option>
  <option>Ante-natal</option>

</select>

<br>
<br>
	
<button id="submit" name= "register" type="submit"> Sign Up</button>
</form>




<button id="logout" class="red button" style="float: right"> Log Out </button>

    <!--<script type="text/javascript" src="js/admin_ajax.js"></script>-->
  <script type="text/javascript" src="js/admin.js"></script>
  


	</body>
	</html>