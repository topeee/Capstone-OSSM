<?php
session_start(); // Start the session
require_once 'config.php'; 

// Destroy the session and remove all session variables
session_unset();
session_destroy();

// Redirect to the login page
header("Location: login.php");
// Include configuration file 
 

 

exit(); 
?>
