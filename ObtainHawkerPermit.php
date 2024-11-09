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
    <link rel="stylesheet" href="footer.css">

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
                        <a href="RenewHawker.php" class="btn btn-secondary">Renew Now</a>
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
                    <button class="btn btn-primary btn-lg transparent-btn" id="temporaryVendingSiteBtn" onclick="window.location.href='TemporaryVendingSite.php';">Temporary Vending Site</button>
                    <button class="btn btn-secondary btn-lg transparent-btn" id="specialEventSiteBtn" onclick="window.location.href='SpecialEventSite.php';">Special Event Site</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
            <div class="containers">
                <div class="row row-cols-1 row-cols-lg-3">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item"><a class="link-secondary" href="#">About us</a></li>
                    </ul>
                    <div class="col">
                        <ul class="list-inline my-2">
                            <li class="list-inline-item me-4">
                                <div class="bs-icon-circle bs-icon-primary bs-icon">
                                    <a href="https://www.facebook.com/sanmateorizalPIO" target="_blank">
                                        <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            <!-- Increased size for YouTube icon -->
                            <li class="list-inline-item me-4">
                                <div class="bs-icon-circle bs-icon-primary bs-icon" >
                                    <a href="https://www.youtube.com/@SanMateoRizal" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16" style="vertical-align: middle;">
                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="bs-icon-circle bs-icon-primary bs-icon">
                                    <a href="https://www.sanmateo.gov.ph/?fbclid=IwY2xjawGa8FxleHRuA2FlbQIxMAABHV7oEXf9A30xAMK0rZkUq2u79JjY-rg8Nx1htqvExUJJk_Bm0eYPp6P6RA_aem_EAarsNJrWise3DgKGtmDTg" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
                                          </svg>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-inline my-2">
                            <li class="list-inline-item"><a class="link-secondary" href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>            
        </footer>

</body>

</html>
