<?php
session_start();

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    // If not, redirect to the login page or an error page
    header('Location: login.php');
    exit();
}

// Your admin page content goes here
?>