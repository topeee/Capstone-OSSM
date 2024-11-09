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
    <title>Stall Application Form</title>

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

        .form-label {
            font-size: 0.9rem;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .info-container {
            display: none;
            margin-top: 20px;
        }

        .floor-plan-container {
            display: none;
            margin-top: 20px;
        }

        .map-container {
            margin-top: 20px;
            height: 400px;
            overflow: hidden;
            display: none;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .two-column {
            display: flex;
            flex-wrap: wrap;
        }

        .form-column {
            flex: 1;
            margin-right: 20px;
        }

        .map-column {
            flex: 1;
        }

        .market-image {
            width: 200%;
            max-width: 1000px;
            height: auto;
            display: none;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .preferred-spot {
            display: none; /* Hide the preferred spot initially */
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            justify-content: space-between;
        }

        .main-content {
            flex: 1; /* Ensures that the main content takes up the available space */
        }

        footer {
            padding: 20px 15px;
            width: 100%;
            text-align: center;

            position: relative;
            bottom: 0;
        }

        .container-footer {
            max-width: 100%;
        }

        .list-inline-item a {
            color: #6c757d; /* Adjust the link color */
            text-decoration: none;
        }

        .list-inline-item a:hover {
            text-decoration: underline; /* Add hover effect */
        }

        ul.list-inline {
            margin-bottom: 0;
        }


    </style>
</head>

<body>
   

    <div class="container mt-4 mb-5">
        <div class="form-container mt-4 mb-5">
            <h1 class="text-center">New Market Stall Application</h1>

            <div class="two-column">
                <!-- Left Column for Form and Information -->
                <div class="form-column">
                    <form>
                        <div class="mb-3">
                            <label for="marketSelect" class="form-label"><strong>Pumili ng Palengke:</strong></label>
                            <select class="form-select small-dropdown" id="marketSelect" aria-label="Public Market Select" required>
                                <option selected>Select a market</option>
                                <option value="1">San Mateo Public Market</option>
                                <option value="2">Sampaguita Market</option>
                                <option value="3">Bambang Market</option>
                                <option value="4">Nangka Market</option>
                                <option value="5">Poblacion Market</option>
                                <option value="6">Ampid Public Market</option>
                            </select>
                        </div>
                    </form>

                    <!-- Hidden information containers -->
                    <div class="info-container" id="info1">
                        <h5>San Mateo Public Market</h5><br>
                        <p><strong>Address:</strong> 123 Main St, San Mateo</p><br>
                        <p><strong>Contact Person:</strong> <br> Juan Dela Cruz <br> Market Manager <br> +63 912 345 6789</p><br>
                        <p><strong>Information:</strong> This is the largest market in the area.</p>
                        <button class="btn btn-secondary previous-btn">Previous</button>
                        <button class="btn btn-primary choose-btn" data-market="1">Choose Available Stall</button>
                        <div class="preferred-spot">
                            <h6 style="margin-top: 20px;">Choose Your Preferred Spot</h6>
                            <hr>
                            <img class="market-image" src="https://via.placeholder.com/300" alt="San Mateo Market" style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="info-container" id="info2">
                        <h5>Sampaguita Market</h5><br>
                        <p><strong>Address:</strong> 456 Sampaguita St</p><br>
                        <p><strong>Contact Person:</strong> <br> Juan Dela Cruz <br> Market Manager <br> +63 912 345 6789</p><br>
                        <p><strong>Information:</strong> Known for fresh vegetables and fruits.</p>
                        <button class="btn btn-secondary previous-btn">Previous</button>
                        <button class="btn btn-primary choose-btn" data-market="2">Choose Available Stall</button>
                        <div class="preferred-spot">
                            <h6 style="margin-top: 20px;">Choose Your Preferred Spot</h6>
                            <hr>
                            <img class="market-image" src="https://via.placeholder.com/300" alt="Sampaguita Market" style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="info-container" id="info3">
                        <h5>Bambang Market</h5><br>
                        <p><strong>Address:</strong> 789 Bambang St</p><br>
                        <p><strong>Contact Person:</strong> <br> Jose Garcia <br> Market Manager <br> +63 920 345 6789</p><br>
                        <p><strong>Information:</strong> Popular for its seafood selection.</p>
                        <button class="btn btn-secondary previous-btn">Previous</button>
                        <button class="btn btn-primary choose-btn" data-market="3">Choose Available Stall</button>
                        <div class="preferred-spot">
                            <h6 style="margin-top: 20px;">Choose Your Preferred Spot</h6>
                            <hr>
                            <img class="market-image" src="https://via.placeholder.com/300" alt="Bambang Market" style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="info-container" id="info4">
                        <h5>Nangka Market</h5><br>
                        <p><strong>Address:</strong> 123 Nangka St</p><br>
                        <p><strong>Contact Person:</strong> <br> Linda Cruz <br> Market Manager <br> +63 921 123 4567</p><br>
                        <p><strong>Information:</strong> Best place for local handicrafts.</p>
                        <button class="btn btn-secondary previous-btn">Previous</button>
                        <button class="btn btn-primary choose-btn" data-market="4">Choose Available Stall</button>
                        <div class="preferred-spot">
                            <h6 style="margin-top: 20px;">Choose Your Preferred Spot</h6>
                            <hr>
                            <img class="market-image" src="https://via.placeholder.com/300" alt="Nangka Market" style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="info-container" id="info5">
                        <h5>Poblacion Market</h5><br>
                        <p><strong>Address:</strong> 123 Poblacion St</p><br>
                        <p><strong>Contact Person:</strong> <br> Maria Dela Cruz <br> Market Manager <br> +63 914 567 8901</p><br>
                        <p><strong>Information:</strong> Offers a wide range of goods.</p>
                        <button class="btn btn-secondary previous-btn">Previous</button>
                        <button class="btn btn-primary choose-btn" data-market="5">Choose Available Stall</button>
                        <div class="preferred-spot">
                            <h6 style="margin-top: 20px;">Choose Your Preferred Spot</h6>
                            <hr>
                            <img class="market-image" src="https://via.placeholder.com/300" alt="Poblacion Market" style="margin-top: 10px;">
                        </div>
                    </div>

                    <div class="info-container" id="info6">
                        <h5>Ampid Public Market</h5><br>
                        <p><strong>Address:</strong> 123 Ampid St</p><br>
                        <p><strong>Contact Person:</strong> <br> Juan Dela Cruz <br> Market Manager <br> +63 912 345 6789</p><br>
                        <p><strong>Information:</strong> Famous for its street food.</p>
                        <button class="btn btn-secondary previous-btn">Previous</button>
                        <button class="btn btn-primary choose-btn" data-market="6">Choose Available Stall</button>
                        <div class="preferred-spot">
                            <h6 style="margin-top: 20px;">Choose Your Preferred Spot</h6>
                            <hr>
                            <img class="market-image" src="https://via.placeholder.com/300" alt="Ampid Market" style="margin-top: 10px;">
                        </div>
                    </div>
                </div>

                <!-- Updated Map for Manila -->
                <div class="map-column">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.787404117537!2d120.97974180940455!3d14.599512070446938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca0a134aa23b%3A0xa9a0053f6d6a9c1f!2sManila%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1678046403515!5m2!1sen!2sph" 
                        allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer>
            <div class="container">
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
    
    <script>
        $(document).ready(function () {
            // Show the relevant info when a market is selected
            $('#marketSelect').change(function () {
                var selectedMarket = $(this).val();
                $('.info-container').hide();
                $('#info' + selectedMarket).show();
                $('.map-container').show();
            });

            // Show the map and preferred spot when clicking 'Choose Available Stall'
            $('.choose-btn').click(function () {
                var marketId = $(this).data('market');
                $('.preferred-spot').hide(); // Hide all preferred spots initially
                $('#info' + marketId + ' .preferred-spot').show(); // Show the selected market's preferred spot
                $('.market-image').hide(); // Hide all images initially
                $('#info' + marketId + ' .market-image').show(); // Show the selected market's image
            });

            // Hide the preferred spot and reset selections when clicking 'Previous'
            $('.previous-btn').click(function () {
                $(this).closest('.info-container').hide();
                $('#marketSelect').val('Select a market'); // Reset the dropdown
                $('.map-container').hide(); // Hide the map
                $('.preferred-spot').hide(); // Hide all preferred spots
            });
        });
    </script>
</body>

</html>
