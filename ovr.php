<?php
session_start();
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="Footer.Clean.icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="img/png" href="logo.png">
    <title>OVR TICKET SEARCH</title>
    
    <style>
        body {
            background: linear-gradient(#00bfff, #87cefa);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: lightblue;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .note {
            color: red;
            margin-bottom: 10px;
        }

        label {
            margin-left: -5px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100px;
            padding: 8px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            background-color: #0044ff;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        button.clear {
            background-color: #ff4444;
        }

        @media (max-width: 767px) {
            .container h1 {
                font-size: 1.5rem;
            }

            form {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>OVR TICKET SEARCH</h1>
        <p class="note">Please enter OVR ticket number and last name to see your violation record. Fields marked with <span style="color: red;">*</span> are required.</p>
        <form>
            <label for="tickNo"><span style="color: red;">*</span> Ticket No</label>
            <input type="number" id="tickNo" name="tickNo" required>

            <label for="lastname"><span style="color: red;">*</span> Last Name</label>
            <input type="text" id="lastname" name="lastname" required>

            <button type="submit">Search</button>
            <button type="reset" class="clear">Clear</button>
        </form>
    </div>
</body>
</html>
