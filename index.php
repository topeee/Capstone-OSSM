<?php
include 'db_connection.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

// Assuming you have stored the user's role in the session during login
if ($_SESSION['role'] === 'is_admin') {
    header('Location: dashboard.php');
    exit();
} else {
    header('Location: home.php');
    exit();
}
?>