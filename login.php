<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        echo "Please enter both email and password.";
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
                    echo "Invalid password.";
                }
            } else {
                echo "No user found with that email.";
            }

            $stmt->close();
        } else {
            echo "Database error: Unable to prepare statement.";
        }
    }

    function verify_recaptcha($recaptcha_response) {
        $secret_key = '6LdSsC8qAAAAAALv4qGXAlg-_krUe2lT2nsayFs8';
        $verify_url = 'https://www.google.com/recaptcha/api/siteverify';
        
        // Create a POST request to verify the reCAPTCHA response
        $response = file_get_contents("{$verify_url}?secret={$secret_key}&response={$recaptcha_response}");
        $response_data = json_decode($response);
        
        return $response_data->success;
    }

// Login example
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptcha_response = $_POST['g-recaptcha-response'];
    
    if (verify_recaptcha($recaptcha_response)) {
        // Proceed with login
        // Authenticate user credentials
        echo "CAPTCHA Correct!";
    } else {
        echo "Please complete the CAPTCHA.";
    }
}
    $conn->close();
}

