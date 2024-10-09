<?php
require 'vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// Initialize Firebase
$serviceAccount = ServiceAccount::fromJsonFile('path/to/your/firebase_credentials.json');
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

$database = $firebase->getDatabase();

// Get the ID token sent from the client
$id_token = $_POST['idtoken'];

// Verify the ID token
$client = new Google_Client(['client_id' => 'YOUR_GOOGLE_CLIENT_ID']);
$payload = $client->verifyIdToken($id_token);
if ($payload) {
    $userid = $payload['sub'];
    $first_name = $payload['given_name'];
    $last_name = $payload['family_name'];
    $email = $payload['email'];

    // Database connection
    $servername = "your_servername";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "An account with this email already exists. Please use a different email.";
    } else {
        // Insert user data into the database
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, google_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $first_name, $last_name, $email, $userid);

        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();
} else {
    // Invalid ID token
    echo "Invalid ID token";
}
?>