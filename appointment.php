<?php
session_start();

include 'db_connection.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $document_type = $_POST['document_type'];

    $sql = "INSERT INTO appointments (full_name, email, service, date, time, document_type) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssssss", $name, $email, $service, $date, $time, $document_type);
    if ($stmt->execute()) {
        $_SESSION['status'] = "Appointment booked successfully!";
    } else {
        $_SESSION['status'] = "Error: {$stmt->error}";
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com';
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.hostinger.com";
        $mail->Username = "contactus@onestopsanmateo.online";
        $mail->Password = "8#a8C;[y:GO";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;

        $mail->setFrom('contactus@onestopsanmateo.online', 'Mailer');
        $mail->addAddress($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Appointment Confirmation';
        $mail->Body    = "Dear $name,<br><br>Your appointment for $service on $date at $time has been successfully booked.<br><br>Thank you!";
        $mail->AltBody = "Dear $name,\n\nYour appointment for $service on $date at $time has been successfully booked.\n\nPlease ready your requirements.\n\nThank you!";

        $mail->send();
        $_SESSION['status'] .= " A confirmation email has been sent to $email.";
    } catch (Exception $e) {
        $_SESSION['status'] .= " However, we couldn't send a confirmation email. Mailer Error: {$mail->ErrorInfo}";
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #343a40;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e9ecef;
        }
        .appointment-form {
            background-color: #ffffff;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        .appointment-form h2 {
            margin-top: 0;
            color: #343a40;
            font-size: 32px;
            text-align: center;
            margin-bottom: 25px;
        }
        .appointment-form label {
            display: block;
            margin-bottom: 10px;
            color: #495057;
            font-weight: 500;
        }
        .appointment-form input,
        .appointment-form select,
        .appointment-form button {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            font-size: 18px;
        }
        .appointment-form input:focus,
        .appointment-form select:focus,
        .appointment-form button:focus {
            border-color: #80bdff;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
        }
        .appointment-form button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .appointment-form button:hover {
            background-color: #0056b3;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>


    <div class="appointment-form">
    
    <img src="logo.png" alt="Logo" style="display: block; margin: 0 auto 20px; max-width: 150px;">
        <h2>Book a New Appointment</h2>
        <form id="appointmentForm" method="post" action="">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>

            <label for="service">Choose a Service</label>
            <select name="service" id="service" required>
                <option value="" disabled selected>Choose a service</option>
                <option value="Violation Management">Violation Management</option>
                <option value="Social Services">Social Services</option>
                <option value="Educational Support">Educational Support</option>
                <option value="Economic & Investment Support">Economic & Investment Support</option>
                <option value="Health Services">Health Services</option>
                <option value="Citizen ID">Citizen ID</option>
            </select>
                
            <label for="document_type">Document Type</label>
            <input type="text" name="document_type" id="document_type" class="form-control" required>

            <label for="date">Choose Preferred Date</label>
            <input type="date" name="date" id="date" class="form-control" required>
            
            <label for="time">Choose Preferred Time</label>
            <input type="time" name="time" id="time" class="form-control" required>

            <?php if (isset($_SESSION['status'])): ?>
            <div class="alert alert-info">
                <h5><?= $_SESSION['status']; ?></h5>
            </div>
            <?php unset($_SESSION['status']); ?>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary">Book Appointment</button>
            <button type="button" class="btn btn-secondary" onclick="window.location.href='index.php'">BACK</button>
        </form>
    </div>
</body>
</html>
