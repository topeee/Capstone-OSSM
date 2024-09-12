<?php
// Assuming you have already established a database connection

// Get the logged-in user's ID or username
$loggedInUserId = $_SESSION['user_id']; // Replace with your actual session variable

// Query the database to fetch the user credentials
$query = "SELECT * FROM users WHERE id = $loggedInUserId"; // Replace 'users' with your actual table name and 'id' with the appropriate column name
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result && mysqli_num_rows($result) > 0) {
    // Fetch the user credentials
    $user = mysqli_fetch_assoc($result);

    // Display the user credentials
    echo "Username: " . $user['username'] . "<br>";
    echo "Email: " . $user['email'] . "<br>";
    // Add more fields as needed
} else {
    echo "Failed to fetch user credentials.";
}

// Close the database connection
mysqli_close($connection);
?>