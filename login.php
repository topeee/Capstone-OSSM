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
}


if (isset($_POST['submit_btn'])) {
    
    // Storing name in $name variable
    $name = $_POST['name'];
  
    // Storing google recaptcha response
    // in $recaptcha variable
    $recaptcha = $_POST['g-recaptcha-response'];

    // Put secret key here, which we get
    // from google console
    $secret_key = '6LdSsC8qAAAAAALv4qGXAlg-_krUe2lT2nsayFs8';

    // Hitting request to the URL, Google will
    // respond with success or error scenario
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
          . $secret_key . '&response=' . $recaptcha;

    // Making request to verify captcha
    $response = file_get_contents($url);

    // Response return by google is in
    // JSON format, so we have to parse
    // that json
    $response = json_decode($response);

    // Checking, if response is true or not
    if ($response->success == true) {
        echo '<script>alert("Google reCAPTACHA verified")</script>';
    } else {
        echo '<script>alert("Error in Google reCAPTACHA")</script>';
    }
}
    ?>    // Removed closing PHP tag