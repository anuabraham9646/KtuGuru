<?php
session_start(); //to ensure you are using same session
session_unset();
session_destroy(); //destroy the session
echo "Successfully Logged Out";
header("location:home&afterlogin/home.html"); //to redirect back to "index.php" after logging out

exit();
?>