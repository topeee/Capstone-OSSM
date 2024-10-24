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
        /* Your existing styles here */
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
        .hidden-field {
            display: none;
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
                        <select id="service" name="service" required onchange="showServiceOptions()">
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

                <!-- Hidden Fields for Each Service -->
                <div id="violation-management" class="hidden-field form-group">
                    <label for="ovr"><span class="req">*</span>OVR Payment</label>
                    <input type="text" id="ovr" name="ovr" placeholder="OVR Payment" disabled>
                </div>

                <div id="social-services" class="hidden-field form-group">
                    <label for="social-service-type"><span class="req">*</span>Select Social Service</label>
                    <select id="social-service-type" name="social-service-type">
                        <option value="senior-citizen">Senior Citizen Application</option>
                        <option value="pwd">PWD Application</option>
                        <option value="solo-parent">Solo Parent Application</option>
                    </select>
                </div>

                <div id="educational-support" class="hidden-field form-group">
                    <label for="scholarship"><span class="req">*</span>Scholarship Application</label>
                    <input type="text" id="education-input" name="education" placeholder="Scholarship Application" disabled>
                </div>

                <div id="economic-support" class="hidden-field form-group">
                    <label for="economic-support-type"><span class="req">*</span>Select Economic Support</label>
                    <select id="economic-support-type" name="economic-support-type">
                        <option value="occupational">Occupational Support</option>
                        <option value="business-permit">Business Permit</option>
                        <option value="tricycle-permit">Tricycle Permit</option>
                        <option value="real-property">Real Property</option>
                        <option value="market-one-stop">Market One Stop Shop</option>
                    </select>
                </div>

                <div id="health-services" class="hidden-field form-group">
                    <label for="health-service-type"><span class="req">*</span>Select Health Service</label>
                    <select id="health-service-type" name="health-service-type">
                        <option value="medical-records">Medical Records</option>
                        <option value="death-certificate">Death Certificate</option>
                    </select>
                </div>

                <div id="citizen-id" class="hidden-field form-group">
                    <label for="citizen-id-type"><span class="req">*</span>Select Citizen ID Service</label>
                    <select id="citizen-id-type" name="citizen-id-type">
                        <option value="citizen-id">Citizen ID</option>
                        <option value="ossm-query">OSSM Query Portal</option>
                    </select>
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
                    <ul class="list-inline my-2">
                        <li class="list-inline-item me-4">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                </svg></div>
                        </li>
                        <li class="list-inline-item me-4">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                </svg></div>
                        </li>
                        <li class="list-inline-item">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                </svg></div>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item"><a class="link-secondary" href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function showServiceOptions() {
            // Hide all hidden fields first
            document.querySelectorAll('.hidden-field').forEach(function (element) {
                element.style.display = 'none';
            });

            // Show the specific field based on the selected service
            var selectedService = document.getElementById('service').value;
            if (selectedService === 'violation management') {
                document.getElementById('violation-management').style.display = 'block';
            } else if (selectedService === 'social services') {
                document.getElementById('social-services').style.display = 'block';
            } else if (selectedService === 'educational support') {
                document.getElementById('educational-support').style.display = 'block';
            } else if (selectedService === 'economic & investment support') {
                document.getElementById('economic-support').style.display = 'block';
            } else if (selectedService === 'health services') {
                document.getElementById('health-services').style.display = 'block';
            } else if (selectedService === 'citizen id') {
                document.getElementById('citizen-id').style.display = 'block';
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+fskPFdYkzNfFNsM2Kn2LDztB0OjN" crossorigin="anonymous"></script>
</body>
</html>
