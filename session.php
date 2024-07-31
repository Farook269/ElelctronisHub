<?php
session_start();
// remove all session variables
//include "login.php"

session_unset();

// destroy the session
session_destroy();

header("Location:login.html");
exit;
?>