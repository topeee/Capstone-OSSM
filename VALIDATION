<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
        // reCAPTCHA verification successful
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        // Process form data (e.g., save to database, send email, etc.)
        echo "Form successfully submitted. Thank you, $name!";
    } else {
        // reCAPTCHA failed
        echo "reCAPTCHA verification failed. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
