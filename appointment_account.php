<?php
session_start(); // Start the session
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Appointment</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>

<style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(#00bfff, #87cefa);
            min-height: 100vh;
            padding: 20px;
        }

        .container {    
            max-width: 900px;
            margin-top: 50px;
            padding: 20px;
            background-color: #CADCFC;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 20px;
            color: #00246B;
            font-size: 28px;
        }

        .table-responsive {
            margin-bottom: 30px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 15px;
            text-align: center;
        }

        .table th {
            background-color: #00246B;
            color: white;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            background-color: #00246B;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0033cc;
        }

        .btn-clear {
            background-color: #ff4444;
        }

        .btn-clear:hover {
            background-color: #cc0000;
        }
    
       

        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }

            .btn {
                width: 100%;
                margin-bottom: 15px;
            }
        }
    </style>



<body >
    <div class="container">
        <h1>Appointments</h1>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Service</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Document Type</th>
                    <th>Reference Number</th>
                    <th>Status</th>
              
                </tr>
            </thead>
            <tbody>
                <?php
                include 'db_connection.php';
                
                try {
                    // Check if the user is logged in
                    if (isset($_SESSION['email'])) {
                        // Database connection
                        // Fetch appointments for the logged-in user
                        $user_id = $_SESSION['email'];
                        $sql = "SELECT `id`, `full_name`, `email`, `service`, `date`, `time`, `document_type`, `status`, `reference_number` FROM `appointments` WHERE `email` = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("s", $user_id);
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
                                        <td>{$row['reference_number']}</td>
                                        <td>{$row['status']}</td>
                                      
                                      </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='9'>No appointments found</td></tr>";
                        }
                
                        // Close connection
                        $stmt->close();
                        $conn->close();
                    } else {
                        echo "<tr><td colspan='9'>Please log in to view your appointments</td></tr>";
                    }
                } catch (Exception $e) {
                    echo "<tr><td colspan='9'>Error: " . $e->getMessage() . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
