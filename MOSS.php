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
        <div class="container-footer">
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

</body>

</html>
