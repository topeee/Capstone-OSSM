<?php
session_start();

include 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticket_id = $_POST['ticket_id'];
    $ticket_no = $_POST['ticket_no'];
    $last_name = $_POST['last_name'];
    $violation_date = $_POST['violation_date'];
    $violation_type = $_POST['violation_type'];
    $fine_amount = $_POST['fine_amount'];
    $status = $_POST['status'];

    $sql = "INSERT INTO OVR_Tickets (ticket_id, ticket_no, last_name, violation_date, violation_type, fine_amount, status) 
            VALUES ('$ticket_id', '$ticket_no', '$last_name', '$violation_date', '$violation_type', '$fine_amount', '$status')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>OVR Admin Input</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 30px 40px;
        background-color: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
    h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }
    .btn-update {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .btn-update:hover {
        background-color: #218838;
        transform: translateY(-3px);
    }
    .btn-cancel {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        background-color: red;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .btn-cancel:hover {
        background-color: #c82333;
        transform: translateY(-3px);
    }
</style>
<body>
    <div class="container">
        <h2>OVR Admin Input Form</h2>
        <form action="ovradmininput.php" method="POST">
            <div class="form-group">
                <label for="ticket_id">Ticket ID:</label>
                <input type="text" class="form-control" id="ticket_id" name="ticket_id">
            </div>
            <div class="form-group">
                <label for="ticket_no">Ticket Number:</label>
                <input type="text" class="form-control" id="ticket_no" name="ticket_no">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
            <div class="form-group">
                <label for="violation_date">Violation Date:</label>
                <input type="date" class="form-control" id="violation_date" name="violation_date">
            </div>
            <div class="form-group">
                <label for="violation_type">Violation Type:</label>
                <input type="text" class="form-control" id="violation_type" name="violation_type">
            </div>
            <div class="form-group">
                <label for="fine_amount">Fine Amount:</label>
                <input type="text" class="form-control" id="fine_amount" name="fine_amount">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn-update">Submit</button>
                <a href="ovradmin.php" class="btn btn-danger btn-cancel">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
