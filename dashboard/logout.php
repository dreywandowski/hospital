<?php
session_start();
session_destroy();

echo "You have been logged out successfully,"."<a href='../index.php'>"."Click here to go home"."</a>";

?>