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

    switch (true) {
        case !$responseData->success:
            $_SESSION['error'] = "reCAPTCHA verification failed. Please try again.";
            header('Location: login.html');
            exit();
    
        case empty($email) || empty($password):
            $_SESSION['error'] = "Please enter both email and password.";
            header('Location: login.html');
            exit();
    
        default:
            $stmt = $conn->prepare("SELECT password_hash, is_admin FROM users WHERE email = ?");
            if ($stmt) {
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->store_result();
    
                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($hashed_password, $is_admin);
                    $stmt->fetch();
    
                    if (password_verify($password, $hashed_password)) {
                        $_SESSION['email'] = $email;
                        $_SESSION['is_admin'] = $is_admin;
    
                        if ($is_admin) {
                            header('Location: dashboard.php');
                        } else {
                            header('Location: index.php');
                        }
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
    }
} else {
    $_SESSION['error'] = "Invalid request method.";
    header('Location: login.html');
    exit();
}

// Function to verify Google ID token
function verifyGoogleToken($id_token) {
    $client = new Google_Client(['client_id' => '64603179338-p984tmfnt1t548armn1ua3l7blvv0e67.apps.googleusercontent.com']);
    $payload = $client->verifyIdToken($id_token);
    return $payload;
}

// Handle Google login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idtoken'])) {
    $id_token = $_POST['idtoken'];
    $payload = verifyGoogleToken($id_token);

    if ($payload) {
        $email = $payload['email'];
        $first_name = $payload['given_name'];

        // Check if the user exists in the database
        $query = "SELECT * FROM users WHERE email = ?";
        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // User exists, update session
                $_SESSION['email'] = $email;
                $_SESSION['first_name'] = $first_name;
            } else {
                // User does not exist, insert into database
                $insert_query = "INSERT INTO users (email, first_name) VALUES (?, ?)";
                if ($insert_stmt = $conn->prepare($insert_query)) {
                    $insert_stmt->bind_param("ss", $email, $first_name);
                    $insert_stmt->execute();
                    $insert_stmt->close();

                    // Update session
                    $_SESSION['email'] = $email;
                    $_SESSION['first_name'] = $first_name;
                }
            }
            $stmt->close();
        }
        echo json_encode(['status' => 'success', 'message' => 'Login successful']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid ID token']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>