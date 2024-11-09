<?php
session_start(); // Start the session
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my appoinment</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
 <style>
     
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Appointment History</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Service</th>
                <th>Date</th>
                <th>Time</th>
                <th>Document Type</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php                include 'db_connection.php';

            // Check if the user is logged in
            if (isset($_SESSION['email'])) {
                // Database connection
                // Fetch appointments for the logged-in user
                $user_id = $_SESSION['email'];
                $sql = "SELECT `id`, `full_name`, `email`, `service`, `date`, `time`, `document_type`, `status` FROM `appointments` WHERE `email` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['full_name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['service']}</td>
                                <td>{$row['date']}</td>
                                <td>{$row['time']}</td>
                                <td>{$row['document_type']}</td>
                                <td>{$row['status']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No appointments found</td></tr>";
                }

                // Close connection
                $stmt->close();
                $conn->close();
            } else {
                echo "<tr><td colspan='8'>Please log in to view your appointments</td></tr>";
            }
            ?>
         
        </tbody>
    </table>
</div>
  
</body>
</html>
