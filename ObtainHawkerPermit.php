<?php
session_start(); // Start the session
include 'header.html';
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
    <title>HAWKER PERMIT HOME</title>

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
            overflow-x: hidden;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Elegant font */
        }

        .body-content {
            flex: 1;
            padding: 20px;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 90%;
            margin: auto;
        }

        footer {
            padding: 20px 0;
            text-align: center;
        }

        .card {
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 90%;
            margin: 20px auto;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .card-icon {
            font-size: 2em;
            margin-bottom: 10px;
            color: #0d6efd; /* Primary color for the icon */
        }

        .modal-content {
            transform: scale(1.25); /* Increased scaling */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth scaling and shadow transition */
            border-radius: 20px; /* Rounded corners */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); /* Shadow for depth */
            background: linear-gradient(135deg, #ffffff 30%, #f1f1f1 100%); /* Soft gradient background */
        }

        .modal-dialog {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Full height */
        }

        .modal-body {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 40px; /* Increased padding */
        }

        .modal-lg {
            max-width: 800px; /* Set a max-width */
        }

        .transparent-btn {
            background-color: transparent !important;
            border: 2px solid;
            padding: 20px 0;
            font-size: 1.5rem;
            width: 220px; /* Slightly wider buttons */
            transition: background-color 0.3s, color 0.3s, transform 0.3s; /* Added transform for scaling */
            border-radius: 8px; /* Rounded button corners */
        }

        .transparent-btn.btn-primary {
            border-color: #0d6efd;
            color: #0d6efd;
        }

        .transparent-btn.btn-secondary {
            border-color: #6c757d;
            color: #6c757d;
        }

        .transparent-btn:hover {
            background-color: rgba(13, 110, 253, 0.1); /* Light blue on hover */
            color: #0d6efd;
            transform: scale(1.05); /* Slightly scale button on hover */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow on hover */
        }

        .modal-header {
            border-bottom: 2px solid #0d6efd; /* Stronger border at the bottom */
        }

        .modal-title {
            font-weight: bold;
            color: #0d6efd; /* Primary color */
            font-size: 1.5rem; /* Title font size */
        }

        .modal-header .btn-close {
            opacity: 0.8; /* Subtle close button */
        }

        .modal-header .btn-close:hover {
            opacity: 1; /* Fully visible on hover */
        }
    </style>

</head>

<body>


    <div class="container mt-4 mb-5 body-content">
        <h1 class="text-center">Welcome to Hawker Online Application</h1>
        <p class="text-center">Manage your permits and transactions easily.</p>

        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-plus-circle card-icon"></i>
                        <h5 class="card-title">New Hawker Permit</h5>
                        <p class="card-text">Apply for a new hawker permit to start your business.</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-arrow-clockwise card-icon"></i>
                        <h5 class="card-title">Renewal of Hawker Permit</h5>
                        <p class="card-text">Renew your existing hawker permit easily online.</p>
                        <a href="RenewHawker.html" class="btn btn-secondary">Renew Now</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Apply Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> <!-- Larger modal -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="applyModalLabel">Choose Application Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <button class="btn btn-primary btn-lg transparent-btn" id="temporaryVendingSiteBtn" onclick="window.location.href='TemporaryVendingSite.html';">Temporary Vending Site</button>
                    <button class="btn btn-secondary btn-lg transparent-btn" id="specialEventSiteBtn" onclick="window.location.href='SpecialEventSite.html';">Special Event Site</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 OSSM. All rights reserved.</p>
    </footer>

</body>

</html>
