<?php
session_start();
include 'db_connection.php';
require_once 'vendor/autoload.php'; // Include the Google API PHP Client Library

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