
<!doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Register</title>
	<link href="https://fonts.googleapis.com/css?family=Cabin+Condensed|Chivo" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	

</head>


<body>

<form action="redirect.php" enctype="multipart/form-data" method="POST">
		
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
			<select name="designation">
  <option>Laboratory</option>
  <option>Chemotherapy</option>
  <option>X-Ray</option>
  <option>Ante-natal</option>

</select>

<br>
<br>
	
<button id="submit" name= "register" type="submit"> Sign Up</button>
</form>


<br><br>
<a href="index.php">Home</a>&nbsp


<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/index.js"></script>


</body>
</html>