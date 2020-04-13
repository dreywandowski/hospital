<?php
session_start();

echo "<script>"."alert('You are seeing this page because you are not logged in or you are prohibited from viewing the requested page.')"."</script>";
echo "<a href='../login.php'>"."Click here to login"."</a>";

?>