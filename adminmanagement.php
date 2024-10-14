<?php
session_start();
include 'db_connection.php';

// Check if the current user is an admin
if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    echo "Access denied.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $is_admin = isset($_POST['is_admin']) ? 1 : 0;

    $stmt = $conn->prepare("UPDATE users SET is_admin = ? WHERE email = ?");
    if ($stmt) {
        $stmt->bind_param("is", $is_admin, $email);
        if ($stmt->execute()) {
            echo "User updated successfully.";
        } else {
            echo "Error updating user.";
        }
        $stmt->close();
    } else {
        echo "Error preparing statement.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Management</title>
</head>
<body>
    <h1>Admin Management</h1>
    <form method="POST" action="adminmanagement.php">
        <label for="email">User Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="is_admin">Make Admin:</label>
        <input type="checkbox" id="is_admin" name="is_admin">
        <br>
        <button type="submit">Update User</button>
    </form>
</body>
</html>