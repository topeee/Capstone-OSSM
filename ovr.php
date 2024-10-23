<?php
session_start(); // Start the session
include 'header.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OVR TICKET SEARCH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('trycye.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .container {
            background-color: lightblue;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin-top: 150px;
            text-align: center;
        }
        .note {
            color: red;
        }
        
        .navbar {
        background-color: rgba(0, 0, 0, 0.5); 
        }
        
        .navbar-brand-logo {
        height: 40px; 
        margin-right: 10px;
        }

        .username {
        color: white;
        margin-right: 15px;
        font-weight: bold;
        }

        .Hamburger-Icon {
        height: 30px;
        }

        .toggle-header {
        cursor: pointer;
        color: #0044ff;
        font-weight: bold;
        margin-top: 20px;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
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
            margin-left: -10px;
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
        .header-content h1 {
            font-size: 1.5rem;
        }

        .form-floating {
            width: 100%;
        }

        .navbar-brand-logo {
            height: 30px;
        }
    }
    </style>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="C:\Users\rexce\Desktop\ossm\Capstone-OSSM\logo.png" alt="Logo" class="navbar-brand-logo">
                <span>OSSM</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <span class="username">Username</span> <!-- Replace 'Username' with the actual username -->
                    <a class="nav-link" href="#"><img src="" alt="Burger Icon" class="Hamburger-Icon"></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>OVR TICKET SEARCH</h1>
        <p class="note">Please enter OVR ticket number and last name to see your violation record.</p>
        <form>
            <label for="tickNo"><span style="color: red;">*</span>Ticket No</label>
            <input type="number" id="tickNo" name="tickNo" required>
            <label for="lastname"><span style="color: red;">*</span>Last Name</label>
            <input type="text" id="lastname" name="lastname" required>
            <button type="submit">Search</button>
            <button type="reset" class="clear">Clear</button>
            </div>        
        </form>
    </div>
</body>
</html>