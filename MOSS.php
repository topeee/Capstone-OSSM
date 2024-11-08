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
    <title>Market One Stop Shop</title>

    <style>
        /* Existing styles... */
        .custom-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .body {
            background-color: rgba(255, 255, 255, 0.651);
            margin-top: 30px;
            margin-bottom: 30px;
            padding-top: 50px;
            padding-bottom: 30px;
            border-radius: 10px;
            margin-left: 100px;
            margin-right: 100px;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
        }

        .section {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid #ddd;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            height: 100%;
            text-align: center;
        }

        .section h3 {
            margin: 10px 0;
            color: #333;
        }

        .section p {
            margin: 10px 0;
            color: #666;
        }

        .section a,
        .section button {
            padding: 12px 0;
            font-size: 1.1rem;
            width: 100%;
            margin-bottom: 10px;
            border-radius: 15px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            background-color: #007bff;
            color: white;
            text-align: center;
            text-decoration: none; /* Remove underline for anchor */
        }

        .section a:hover,
        .section button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .row-equal {
            display: flex;
            flex-wrap: wrap;
        }

        .row-equal > [class*='col-'] {
            display: flex;
            flex: 1 0 auto;
        }

         /* Additional Styles for Modal */
        .modal-content {
            border-radius: 15px; /* Rounded corners for the modal */
            padding: 20px; /* Add padding for a cleaner look */
        }

        .modal-header {
            border-bottom: 2px solid #007bff; /* Blue bottom border for the header */
        }

        .modal-body {
            font-size: 1.1rem; /* Slightly larger font size */
        }

        .modal-title {
            font-weight: bold; /* Make the title bold */
            color: #333; /* Darker color for better contrast */
        }

        .btn-primary {
            background-color: #007bff; /* Primary button color */
            border-color: #007bff; /* Border color */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }

        .list-unstyled {
            padding-left: 20px; /* Indent list for better readability */
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

    </style>
</head>

<body>

   

    <!-- Horizontal Sections -->
    <div class="container my-5">
        <div class="row row-equal">
            <!-- Section 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="section custom-shadow">
                    <h3>Pamilihang Lungsod</h3>
                    <p>May-ari ka na ba ng stall sa palengke o naghahanap ka ba ng mauupahan sa isang pamilihan sa lungsod?</p>
                    <p>Pumili ng Transaksyon:</p>
                    <a class="btn" href="NewMarketStallApplication.php">Submit an Application (New)</a>
                    <a class="btn" href="ViewStatusMOSS.php">See the status of your Application</a>
                    <a class="btn" href="MarketLeaseMOSS.php">Manage Market Lease</a>
                    <a class="btn" href="MarketLeaseMOSS.php">Pay rent</a>
                    <a class="btn" href="MarketLeaseMOSS.php">See for Market Violation</a>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="section custom-shadow">
                    <h3>Mga Pribadong Pamilihan / Talipapa</h3>
                    <p>Ikaw ba ay isang pribadong merkado o Talipapa operator o isang kasalukuyang pribadong merkado o Talipapa vendor?</p>
                    <p>Pumili ng Transaksyon:</p>
                    <a class="btn" href="obtain_market_franchise.php" data-bs-toggle="modal" data-bs-target="#franchiseModal">Obtain a Market Franchise</a>
                    <a class="btn" href="Home.php">Get a Market Business Permit by Applying</a>
                    <a class="btn" href="ManagePrivateMarket.php">Manage the Talipapa/Private Market Operator</a>
                    <a class="btn" href="ManageTalipapaVendors.php">Manage Private Market/Talipapa Vendors</a>
                    <a class="btn" href="ManagePrivateMarket.php">Look for Market Violation</a>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="section custom-shadow">
                    <h3>Hawkers</h3>
                    <p>Ikaw ba ay isang itinerant o mobile vendor na nagbebenta ng mga kalakal sa labas ng mga pamilihan ng lungsod, sa mga bangketa, o sa iba pang mga lugar o bakuran na pag-aari ng gobyerno?</p>
                    <p>Pumili ng Transaksyon:</p>
                    <a class="btn" href="ObtainHawkerPermit.php">Obtain a Hawker Permit</a>
                    <a class="btn" href="HawkerViewStatus.php">See the status of your Application</a>
                    <a class="btn" href="HawkerRegisterAssociation.php">Sign up for the Hawker Association</a>
                    <a class="btn" href="MangeHawkerAccount.php">Manage Hawker Account</a>
                    <a class="btn" href="MangeHawkerAccount.php">Look for Market Violation</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Obtaining Market Franchise -->
    <div class="modal fade" id="franchiseModal" tabindex="-1" aria-labelledby="franchiseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> <!-- Use 'modal-lg' for larger size -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="franchiseModalLabel">How to Be a Market Operator</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Follow these steps to become a market operator:</h6>
                    <ol class="list-unstyled">
                        <li class="mb-3"><strong>Step 1:</strong> Your application for a business permit must be submitted: <a href="businessPermitType.php" class="text-primary" style="text-decoration: underline;">Click here for the application form</a>.</li>
                        
                        <li class="mb-3"><strong>Step 2:</strong> Upload the necessary files.</li>
                        <li class="mb-3"><strong>Step 3:</strong> Submit in the form.</li>
                        <li class="mb-3"><strong>Step 4:</strong> Following the completion of the MDAD's initial review, you will get an email. You might need to provide further documentation, depending on the type of market.</li>
                        <li class="mb-3"><strong>Step 5:</strong> Your costs will be determined following MDAD's first evaluation. To move forward with your application, you will have to pay the outstanding balance.</li>
                        <li class="mb-3"><strong>Step 6:</strong> Upon approval of your application, your business permit will be issued. Please be aware, though, that you still have to finish the necessary approvals.</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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

</body>

</html>
