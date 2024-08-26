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

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $recaptchaSecret = "6LdSsC8qAAAAAALv4qGXAlg-_krUe2lT2nsayFs8";
        $recaptchaResponse = $_POST['g-recaptcha-response'];
        
        // Make a POST request to the reCAPTCHA API to verify the response
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
        $responseKeys = json_decode($response, true);
        
        // Check if the reCAPTCHA verification was successful
        if (intval($responseKeys["success"]) === 1) {
            // Verification successful
            echo "reCAPTCHA verification successful.";
            // Continue with your form processing
        } else {
            // Verification failed
            echo "reCAPTCHA verification failed. Please try again.";
        }
    }


    $stmt->close();
    $conn->close();
}

?>
