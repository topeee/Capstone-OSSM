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
        $secretKey = '6Lc1qi8qAAAAAHiE38axrmiw6SsbBTtZzbcwG5i5'; // Replace with your actual secret key
        $captcha = $_POST['g-recaptcha-response'];
    
        if (!$captcha) {
            echo 'Please check the the captcha form.';
            exit;
        }
    
        // Verify the reCAPTCHA response
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => $secretKey,
            'response' => $captcha
        ];
    
        $options = [
            'http' => [
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'method' => 'POST',
                'content' => http_build_query($data),
            ],
        ];
        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $result = json_decode($response, true);
    
        // Check if the verification was successful
        if ($result['success']) {
            // Proceed with form processing
            $name = $_POST['name'];
            $email = $_POST['email'];
    
            // You can now process the form data, e.g., save it to a database, send an email, etc.
            echo 'Form submitted successfully!';
        } else {
            echo 'Captcha verification failed. Please try again.';
        }
    } else {
        echo 'Invalid request method';
    }


    $stmt->close();
    $conn->close();
}

?>
