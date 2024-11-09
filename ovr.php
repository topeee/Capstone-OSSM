<?php session_start(); // Start the session
include 'header.php';
include 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <link rel="stylesheet" href="pwd app.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" type="img/png" href="logo.png">
    <title>OVR TICKET SEARCH</title>
    
    <style>
        body {
            background-image: url('ovrTryc.jpg'); /* Replace with your image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center; /* Centered title */
        }

        label {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 16px;
            background-color: #f1f1f1;
        }

        input:focus {
            outline: none;
            border: 1px solid #0044ff;
            background-color: #fff;
        }

        .note {
            font-size: 15px;
            color: #e74c3c;
            margin-bottom: 25px;
            text-align: center;
        }

        .btn-container {
            display: flex;
            justify-content: space-between; /* Ensure the buttons are spaced out */
        }

        button {
            width: 48%; /* Adjust width so buttons fit side by side */
            padding: 10px;
            background-color: #0044ff;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0033cc;
        }

        button[type="reset"]:hover {
            background-color: #e74c3c;
        }

        .btn-container {
            display: flex;
            gap: 10px; /* Space between buttons */
            justify-content: center; /* Center the buttons horizontally */
        }

        .form-text {
            font-size: 14px;
            color: #888;
        }

        footer {
            position: relative;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            padding: 10px 0;
        }

        @media (max-width: 767px) {
            button {
                width: 100%; /* Full width buttons for smaller screens */
                margin-bottom: 10px;
            }

            .btn-container {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
<div class="container">
    <h1>OVR Ticket Search</h1>
    <form method="POST" action="">
        <input type="text" name="search" placeholder="Search by Ticket Number or Last Name">
        <div class="btn-container">
            <button type="submit" class="btn btn-primary">Search</button>
            <button type="reset" class="btn btn-secondary" onclick="window.location.href=window.location.href">Reset</button>
        </div>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['search'])): ?>
    <table id="ticketsTable" class="table table-striped table-bordered mt-4">
        <thead>
            <tr>
                <th scope="col">Ticket ID</th>
                <th scope="col">Ticket Number</th>
                <th scope="col">Last Name</th>
                <th scope="col">Violation Date</th>
                <th scope="col">Violation Type</th>
                <th scope="col">Fine Amount</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $search = $_POST['search'];
            $sql = "SELECT `ticket_id`, `ticket_no`, `last_name`, `violation_date`, `violation_type`, `fine_amount`, `status` FROM `OVR_Tickets` WHERE `ticket_no` LIKE '%$search%' OR `last_name` LIKE '%$search%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $row["ticket_id"] . "</th>";
                    echo "<td>" . $row["ticket_no"] . "</td>";
                    echo "<td>" . $row["last_name"] . "</td>";
                    echo "<td>" . $row["violation_date"] . "</td>";
                    echo "<td>" . $row["violation_type"] . "</td>";
                    echo "<td>" . $row["fine_amount"] . "</td>";
                    echo "<td>" . $row["status"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No tickets found</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <?php endif; ?>
</div>

</body>
</html>
