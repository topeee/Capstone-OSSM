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
    <title>Speical Event Site</title>

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
            <h1 class="text-center">Special Event Site</h1>

            <div class="two-column">
                <!-- Left Column for Form and Information -->
                <div class="form-column">
                    <form>
                        <div class="mb-3">
                            <label for="marketSelect" class="form-label"><strong>Pumili ng Vending Site:</strong></label>
                            <select class="form-select small-dropdown" id="marketSelect" aria-label="Vending Site Select" required>
                                <option selected>Select a vending site</option>
                                <option value="1">Vending Site A</option>
                                <option value="2">Vending Site B</option>
                                <option value="3">Vending Site C</option>
                                <option value="4">Vending Site D</option>
                                <option value="5">Vending Site E</option>
                                <option value="6">Vending Site F</option>
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

                <!-- Right Column for Map -->
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
