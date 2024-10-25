<?php
session_start(); // Start the session
require_once 'config.php'; 

// Destroy the session and remove all session variables
session_unset();
session_destroy();

// Redirect to the login page
header("Location: login.php");
// Include configuration file 
 
// Remove token and user data from the session 
unset($_SESSION['token']); 
unset($_SESSION['userData']); 
 
// Reset OAuth access token 
$gClient->revokeToken(); 
 
// Destroy entire session data 
session_destroy(); 
 
// Redirect to homepage 
header("Location: login.php"); 
exit(); 
?>
