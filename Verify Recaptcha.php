 <?php
function verify_recaptcha($recaptcha_response) {
    $secret_key = '6LdSsC8qAAAAAALv4qGXAlg-_krUe2lT2nsayFs8';
    $verify_url = 'https://www.google.com/recaptcha/api/siteverify';
    
    // Create a POST request to verify the reCAPTCHA response
    $response = file_get_contents($verify_url . '?secret=' . $secret_key . '&response=' . $recaptcha_response);
    $response_data = json_decode($response);
    
    return $response_data->success;
}

// Account creation example
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptcha_response = $_POST['g-recaptcha-response'];
    
    if (verify_recaptcha($recaptcha_response)) {
        // Proceed with account creation
        // Validate and save user data to the database
        echo "Account created successfully!";
    } else {
        echo "Please complete the CAPTCHA.";
    }
}

// Login example
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptcha_response = $_POST['g-recaptcha-response'];
    
    if (verify_recaptcha($recaptcha_response)) {
        // Proceed with login
        // Authenticate user credentials
        echo "Logged in successfully!";
    } else {
        echo "Please complete the CAPTCHA.";
    }
}
?>
