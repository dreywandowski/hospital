<?php
session_start();


require_once "connect.php";

$login = $_SESSION['login'];

?>

<form action="pwd_success.php" method="POST" >
	New Password: <input type="password" id="pwd1" name="pwd"><br>
	Confirm Password: <input type="password" id="pwd2" name="pwd2">
	
<button type="submit"> Change Password</button>
</form>

<script type="text/javascript" src="jquery-3.2.1.js"></script>
<script type="text/javascript">
	// verifies that passwords match
$("#pwd2").blur(function () {
	
	var pwd1 = $("#pwd1").val();
	var pwd2 = $("#pwd2").val();
	console.log(pwd1);
	 console.log(pwd2);



	if (pwd1 == pwd2) {
	}
	else {
		alert("Passwords do not match!!");
		event.preventDefault();
	}
	});
</script>
