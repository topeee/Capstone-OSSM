<?php
session_start();
include 'db_connection.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // reCAPTCHA verification
    $recaptcha_secret = 'YOUR_SECRET_KEY';
    $recaptcha_response = $_POST['g-recaptcha-response'];
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
    $response_keys = json_decode($response, true);

    if (intval($response_keys["success"]) !== 1) {
        $_SESSION['error'] = "reCAPTCHA verification failed. Please try again.";
        header('Location: login.html');
        exit();
    }

    // Validate email and password
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?")) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                // Password is correct, set session variables
                $_SESSION['user_id'] = $id;
                $_SESSION['email'] = $email;
                header('Location: index.php');
                exit();
            } else {
                $_SESSION['error'] = "Invalid password.";
                header('Location: login.html');
                exit();
            }
        } else {
            $_SESSION['error'] = "No user found with that email.";
            header('Location: login.html');
            exit();
        }
    } else {
        $_SESSION['error'] = "Database error: Unable to prepare statement.";
        header('Location: login.html');
        exit();
    }
} else {
    $_SESSION['error'] = "Invalid request method.";
    header('Location: login.html');
    exit();
}
?>
<!DOCTYPE html>