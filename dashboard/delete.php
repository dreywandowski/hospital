<?php
session_start();
require_once "connect.php";
//echo $_SESSION['username'];

//echo "hi";

$username = $_POST['username'];


$sql = "DELETE FROM users
WHERE username = '$username'";

if (mysqli_query($link, $sql)){
	echo "<p style='color:red'; 'text-decoration:bold'>"."Deleted Successfully!!"."</p>";
}

else {
	die("Deletion Error!! ".mysqli_error($link));
}



mysqli_close($link);




?>