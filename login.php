<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // reCAPTCHA secret key
    $secretKey = '6LdSsC8qAAAAAALv4qGXAlg-_krUe2lT2nsayFs8';

    // Verify the reCAPTCHA response
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];

    // Google API verification URL
    $googleUrl = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

    // Get the response from Google API
    $response = file_get_contents($googleUrl);
    $responseData = json_decode($response);

    if ($responseData->success) {
        if (empty($email) || empty($password)) {
            $_SESSION['error'] = "Please enter both email and password.";
            header('Location: login.html');
            exit();
        } else {
            $stmt = $conn->prepare("SELECT password_hash FROM users WHERE email = ?");
            if ($stmt) {
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($hashed_password);
                    $stmt->fetch();

                    if (password_verify($password, $hashed_password)) {
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

                $stmt->close();
            } else {
                $_SESSION['error'] = "Database error: Unable to prepare statement.";
                header('Location: login.html');
                exit();
            }
        }
    } else {
        // reCAPTCHA failed
        $_SESSION['error'] = "reCAPTCHA verification failed. Please try again.";
        header('Location: login.html');
        exit();
    }
} else {
    $_SESSION['error'] = "Invalid request method.";
    header('Location: login.html');
    exit();
}
?>
