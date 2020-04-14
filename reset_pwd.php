<?php
session_start();


if (!isset($_SESSION['mail'])){
	header("Location:dashboard/error.php");
}

session_destroy();	

$mail = $_SESSION['mail'];

?>
<p> Enter the new password for the email associated with your account:

<form action="pwd_success.php" method="POST" >
	Email: <input type="email" name="email" value="<?php echo $mail ?>" readonly>
	New Password: <input type="password" id="pwd" name="pwd"><br>

	
<button type="submit"> Change Password</button>
</form>

