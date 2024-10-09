<?php
require_once 'vendor/autoload.php'; // Assuming you have installed the Google Client Library via Composer
include 'db_connection.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verify the ID token
$id_token = $_POST['idtoken'];
$client = new Google_Client(['client_id' => '64603179338-p984tmfnt1t548armn1ua3l7blvv0e67.apps.googleusercontent.com']);  // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($id_token);

if ($payload) {
    $google_id = $payload['sub'];
    $name = $payload['name'];
    $email = $payload['email'];
    $profile_pic = $payload['picture'];

    // Check if user already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE google_id = ?");
    $stmt->bind_param("s", $google_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // User exists, update information
        $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, profile_pic = ? WHERE google_id = ?");
        $stmt->bind_param("ssss", $name, $email, $profile_pic, $google_id);
    } else {
        // New user, insert information
        $stmt = $conn->prepare("INSERT INTO users (google_id, name, email, profile_pic) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $google_id, $name, $email, $profile_pic);
    }

    $stmt->execute();
    $stmt->close();

    echo "User information saved successfully.";
} else {
    echo "Invalid ID token.";
}

$conn->close();
?>