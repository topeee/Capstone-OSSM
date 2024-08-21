<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password_hash FROM users WHERE email = ?");
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
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $recaptchaSecret = '6LfBFCwqAAAAAG48Ddaqq0WNsWCTmHWDoK2vdWy1';
        $recaptchaResponse = $_POST['g-recaptcha-response'];
        
        // Verify the reCAPTCHA response
        $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
        $responseData = json_decode($verifyResponse);
        
        if ($responseData->success) {
            // Process form data
            echo 'Form submission successful!';
        } else {
            echo 'reCAPTCHA verification failed. Please try again.';
        }
    }


    $stmt->close();
    $conn->close();
}

?>
