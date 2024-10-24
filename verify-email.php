<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('db_connection.php');
session_start();

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Use prepared statements to prevent SQL injection
    $verify_query = "SELECT verify_token, verify_status FROM users WHERE verify_token = ? LIMIT 1";
    $stmt = $conn->prepare($verify_query);
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['verify_status'] == 0) {
            $clicked_token = $row['verify_token'];

            // Update the verification status
            $update_query = "UPDATE users SET verify_status = 1 WHERE verify_token = ? LIMIT 1";
            $update_stmt = $conn->prepare($update_query);
            $update_stmt->bind_param("s", $clicked_token);
            $update_query_run = $update_stmt->execute();

            if ($update_query_run) {
                $_SESSION['status'] = "Your Account has been verified successfully!";
                header("Location: login.php");
                exit(0);
            } else {
                $_SESSION['status'] = "Verification Failed";
                header("Location: login.php");
                exit(0);
            }
        } else {
            $_SESSION['status'] = "Email Already Verified. Please Login";
            header("Location: login.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "Invalid Token or Not Registered";
        header("Location: login.php");
        exit(0);
    }
} else {
    $_SESSION['status'] = "No Token Provided";
    header("Location: login.php");
    exit(0);
}
?>