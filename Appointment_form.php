<?php
session_start(); // Start the session
include 'header.php';
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
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="pwd app.css">
    <link rel="icon" type="img/png" href="logo.png">
    <title>Appointment Form</title>
   
    <style>
        
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand,
        .navbar .username {
            color: #ffffff;
        }

        .custom-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        #top-bar {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .small-dropdown {
            width: 250px;
        }

        h1 {
            color: #343a40;
        }
        .form-container {
            background-color: lightblue;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        h2 {
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }
        .req {
            color: red;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: black;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: rgb(7, 7, 129);
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #0326af;
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
        @media (max-width: 767px) {
            body {
                padding: 20px;
            }
        }

        .navbar-brand,
        .navbar .username {
            color: #ffffff;
        }

        .custom-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        #top-bar {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .small-dropdown {
            width: 250px;
        }
        
    </style>
</head>
<body>

    
    <div class="container d-flex align-items-center justify-content-center">
        <div class="form-container">
            <h2>Book an Appointment</h2>
            <form>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name"><span class="req">*</span>Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email"><span class="req">*</span>Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="phone">Mobile Number</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date"><span class="req">*</span>Preferred Date</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="time"><span class="req">*</span>Preferred Time</label>
                        <input type="time" id="time" name="time" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="service"><span class="req">*</span>Service Required</label>
                        <select id="service" name="service" required>
                            <option value="">Select a Service</option>
                            <option value="violation management">Violation Management</option>
                            <option value="social services">Social Services</option>
                            <option value="educational support">Educational Support</option>
                            <option value="economic & investment support">Economic & Investment Support</option>
                            <option value="health services">Health Services</option>
                            <option value="citizen id">Citizen ID</option>
                        </select>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label for="message">Additional Information</label>
                    <textarea id="message" name="message" rows="4"></textarea>
                </div>
                <div class="form-group full-width">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
    <footer>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                <ul class="list-inline my-2">
                    <li class="list-inline-item"><a class="link-secondary" href="#">About us</a></li>
                    <li class="list-inline-item"><a class="link-secondary" href="#">Services</a></li>
                    <li class="list-inline-item"><a class="link-secondary" href="#">Contact Us</a></li>
                </ul>
                <div class="col">
                    <ul class="list-inline my-2 text-lg-end text-md-end">
                        <li class="list-inline-item"><a class="link-secondary" href="#"><img class="logo" src="facebook_logo.png" alt="Facebook Logo" width="36" height="36"></a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#"><img class="logo" src="Twitter_Logo.png" alt="Twitter Logo" width="36" height="36"></a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#"><img class="logo" src="Instagram_logo.png" alt="Instagram Logo" width="36" height="36"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+fskPFdYkzNfFNsM2Kn2LDztB0OjN" crossorigin="anonymous"></script>
</body>
</html>
