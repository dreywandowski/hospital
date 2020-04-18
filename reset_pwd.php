<?php
session_start();


if (!isset($_SESSION['mail']) && !isset($_SESSION['user']) && !isset($_SESSION['token'])){
header("Location:dashboard/error.php");
}

//session_destroy();	

$mail = $_SESSION['mail'];
$userdb = $_SESSION['user'];
$token = $_SESSION['token'];

?>

<p> Enter the new password for the email associated with your account:

<form action="pwd_success.php" method="POST" >
	<input type="text" name="token" value="<?php echo $token ?>" readonly>
	Email: <input type="email" name="user_mail" value="<?php echo $mail ?>" readonly>
	New Password: <input type="password" id="pwd" name="pwd"><br>

	
<button type="submit"> Change Password</button>
</form>

