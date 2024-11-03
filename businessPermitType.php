<?php
session_start(); // Start the session
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="Footer.Clean.icons.css">
    <link rel="stylesheet" href="pwd app.css">
    <link rel="icon" type="img/png" href="logo.png">
    <title>Business Permit Types</title>

    <style>
        .custom-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        #top-bar {
        margin-top: 20px;  /* Adjust the top margin */
        margin-bottom: 20px;  /* Adjust the bottom margin */
        }

        .body {
            background-color: rgba(255, 255, 255, 0.651);  /* White with 50% transparency */
            margin-top: 30px;  /* Top margin */
            margin-bottom: 30px;  /* Bottom margin */
            padding-top: 50px;
            padding-bottom: 30px;
            border-radius: 10px;  /* Optional: Adds rounded corners */
            margin-left: 100px;
            margin-right: 100px;
        }
        .modal-body h5 {
        margin-bottom: 20px;
        }

        .modal-body hr {
            margin: 30px 0;
        }

        .modal-body .container {
            font-family: 'Arial', sans-serif;
            color: #6b6b6b;
        }

        .modal-body .container h3 {
            margin-bottom: 10px;
            font-weight: normal;
            font-size: 1rem;
        }

        .modal-body ul {
            list-style-type: disc; /* Ensure bullets (dots) are shown */
            padding-left: 20px; /* Indentation for the bullets */
        }

        .modal-body ul li {
            margin-bottom: 10px;
        }

        .modal-body .container .row {
            margin-bottom: 20px;
        }

        /* Button Styles */
        .apply-btn, .cancel-btn, .next-btn {
            padding: 12px 25px;
            font-size: 1.1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        
        .apply-btn {
            background-color: #007bff; /* Bootstrap primary color */
            border: none;
            color: white;
        }
        
        .apply-btn:hover {
            background-color: #0056b3; /* Darker shade on hover */
            transform: translateY(-2px);
        }
        
        .cancel-btn {
            background-color: #6c757d; /* Bootstrap secondary color */
            color: white;
        }
        
        .cancel-btn:hover {
            background-color: #5a6268; /* Darker shade on hover */
            transform: translateY(-2px);
        }
        
        .next-btn {
            background-color: #007bff; /* Same as apply button */
            color: white;
        }
        
        .next-btn:hover {
            background-color: #0056b3; /* Darker shade on hover */
            transform: translateY(-2px);
        }

          /* General Modal Styling */
    .modal-header {
        background-color: #007bff; /* Consistent header background */
        color: #fff; /* White text for headers */
        text-align: center;
        border-bottom: none; /* Remove default border */
    }
    .modal-title {
        font-weight: bold;
        font-size: 1.5rem;
        width: 100%; /* Center title */
    }
    .btn-close {
        color: #fff;
        opacity: 1;
    }

    /* Button Styling */
    .modal-footer .btn {
        width: 100px;
        border-radius: 5px;
    }
    .modal-footer .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .modal-footer .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    /* Modal Body Styling */
    .modal-body {
        padding: 1.5rem;
        font-size: 1rem;
        color: #333;
    }

    /* Form Fields Styling */
    .modal-body .form-label {
        font-weight: bold;
    }
    
      /* Centering Modals */
    .modal-dialog {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    
    /* Animation Effects */
    .modal.fade .modal-dialog {
        transform: translateY(-20px);
        opacity: 0;
    }

    .modal.show .modal-dialog {
        transform: translateY(0);
        opacity: 1;
    }

    /* Modal Header Styling */
    .modal-header {
        background-color: #007bff;
        color: #fff;
        text-align: center;
        border-bottom: none;
    }

    .modal-title {
        font-weight: bold;
        font-size: 2rem; /* Increase font size */
        width: 100%;
    }

    .btn-close {
        color: #fff;
        opacity: 1;
    }

    /* Modal Body and Text Styling */
    .modal-body {
        padding: 1.5rem;
        font-size: 1.2rem; /* Larger font size for body */
        color: #333;
        font-weight: bold; /* Bold text for body */
    }

    /* Form Labels */
    .modal-body .form-label {
        font-weight: bold;
        font-size: 1.2rem; /* Larger font size for labels */
    }

    /* Button Styling */
    .modal-footer .btn {
        width: 120px; /* Wider buttons */
        border-radius: 5px;
        font-size: 1rem; /* Larger button text */
        font-weight: bold; /* Bold button text */
    }
    .modal-footer .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .modal-footer .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }
    </style>
</head>
<body>
    <div id="top-bar" class="top-bar-image d-flex justify-content-center align-items-center">
        <img src="C:\Users\rexce\Desktop\ossm\Capstone-OSSM\PUBLIC EMPLOYMENT SERVICES.jpg" class="minibanner" alt="Social And General Welfare">
    </div>
    
<main class="body">
    <div class="card text-center w-75 mb-4 mx-auto custom-shadow">
        <h5 class="card-header">Option #1</h5>
        <div class="card-body">
          <h4 class="card-title">New Permit</h4>
          <p class="card-text">To formally register and begin operating your firm, apply for a new business permit. Make sure that your business operations are in accordance with local rules and obtain the required authorization.</p>
          <a href="business_permit.php" class="btn btn-primary w-25 h-25">Apply Now</a>
        </div>
    </div>

    <br>

        <div class="card text-center w-75 mb-4 mx-auto custom-shadow">
        <h5 class="card-header">Option #2</h5>
        <div class="card-body">
            <h4 class="card-title">Renewal</h4>
            <p class="card-text">Renew your business permit to guarantee continued adherence to local laws. Make sure you have the licenses you need and avoid penalties by renewing your license before it expires.</p>
            <a href="#" class="btn btn-primary w-25 h-25" data-bs-toggle="modal" data-bs-target="#taxCheckModal">Apply Now</a>
        </div>
    </div>

    <!-- Tax Check Modal -->
    <div class="modal fade" id="taxCheckModal" tabindex="-1" aria-labelledby="taxCheckModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="taxCheckModalLabel">Annual Business Tax</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Have you already paid your annual business tax?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary" id="yesTaxPaidBtn" data-bs-dismiss="modal">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tax Payment Prompt Modal -->
    <div class="modal fade" id="payTaxPromptModal" tabindex="-1" aria-labelledby="payTaxPromptModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="payTaxPromptModalLabel">Pay Business Tax</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Would you like to pay your business tax now?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="NewBusinessPermit Application.php" class="btn btn-primary" role="button">Pay Now!</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Applicant Input Modal -->
<div class="modal fade" id="applicantInputModal" tabindex="-1" aria-labelledby="applicantInputModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applicantInputModalLabel">Applicant Input</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="applicantForm">
                    <div class="mb-3">
                        <label for="mayorsPermitNumber" class="form-label">Mayor's Permit Number:</label>
                        <input type="text" id="mayorsPermitNumber" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="officialReceiptNo" class="form-label">Official Receipt No:</label>
                        <input type="text" id="officialReceiptNo" class="form-control">
                    </div>
                    <div class="alert alert-warning text-center" role="alert">
                    <strong>Important Notice:</strong> Please ensure that all input fields are filled out correctly to avoid any issues with your application.
                    </div>
                    <p class="text-center mt-3">
                        <a href="#" id="taxExemptionLink" class="text-decoration-underline text-primary">Does your business qualify for any tax exemptions? Go here.</a>
                    </p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Next</button>
            </div>
        </div>
    </div>
</div>

<!-- Validation Modal -->
<div class="modal fade" id="validationModal" tabindex="-1" aria-labelledby="validationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="validationModalLabel">Validation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="validationForm">
                    <div class="mb-3">
                        <label for="taxExemptionProgram" class="form-label">Tax Exemption Program:</label>
                        <select id="taxExemptionProgram" class="form-control">
                            <option value="program1">Cooperative</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mayorsPermitNumberValidation" class="form-label">Mayor's Permit Number:</label>
                        <input type="text" id="mayorsPermitNumberValidation" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="officialReceiptNoValidation" class="form-label">Official Receipt No:</label>
                        <input type="text" id="officialReceiptNoValidation" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Validate</button>
            </div>
        </div>
    </div>
</div>
    <!-- Permit Imae Modal -->
    <div class="modal fade" id="permitImageModal" tabindex="-1" aria-labelledby="permitImageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="permitImageModalLabel">Permit Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="permitImage" src="" alt="Permit" class="img-fluid" style="max-height: 400px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <br>

    <div class="card text-center w-75 mb-4 mx-auto custom-shadow">
        <h5 class="card-header">Option #3</h5>
        <div class="card-body">
        <h4 class="card-title">Special Permit</h4>
        <p class="card-text">A Special Permit is required for specific activities that may not fall under the standard Occupational Permit. It ensures that applicants meet all necessary regulations and guidelines for their intended operations.</p>

            <a href="busiiness_permit_special.php" class="btn btn-primary w-25 h-25">Apply Now</a>
        </div>
    </div>

    <br>

    <div class="card text-center w-75 mb-4 mx-auto custom-shadow">
        <h5 class="card-header">Option #4</h5>
        <div class="card-body">
        <h4 class="card-title">Amendment</h4>
        <p class="card-text">An Amendment allows applicants to make changes to their existing Occupational Permit. This could include updates to personal information, business details, or any other relevant changes necessary to maintain compliance with regulations.</p>
        </div>

        <div>
            <a href="#" class="btn btn-primary w-25 h-25 mb-3" data-bs-toggle="modal" data-bs-target="#renewalModal4">Apply Now</a>
        </div>
    </div>

                <!-- Renewal Modal -->
    <div class="modal fade" id="renewalModal4" tabindex="-1" aria-labelledby="renewalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center w-100" id="renewalModalLabel">Renewal Form</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="renewalForm">
                        <div class="mb-3">
                            <label for="permitNumberField" class="form-label">Mayor's Permit Number:</label>
                            <input type="text" id="permitNumberField" name="permitNumberField" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="receiptNumberField" class="form-label">Official Receipt No:</label>
                            <input type="text" id="receiptNumberField" name="receiptNumberField" class="form-control" placeholder="Input (current year) Official Receipt">
                        </div>
                    </form>
                </div>
                <div class="alert alert-warning text-center" role="alert">
                    <strong>Important Notice:</strong> Please ensure that all input fields are filled out correctly to avoid any issues with your application.
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="next-btn">Next</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Permit Image Modal -->
    <div class="modal fade" id="permitImageModal" tabindex="-1" aria-labelledby="permitImageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="permitImageModalLabel">Permit Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="permitImageField" name="permitImageField" src="" alt="Permit" class="img-fluid" style="max-height: 400px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="card text-center w-75 mb-4 mx-auto custom-shadow">
        <h5 class="card-header">Option #5</h5>
        <div class="card-body">
          <h4 class="card-title">Tack On-going Applications</h4>
          <p class="card-text">Provides you with up-to-date information on the status of your business permit in real time, allowing you to see every stage of the procedure. Keep yourself updated on deadlines for submission, necessary paperwork, and any outstanding tasks so you can monitor your progress and prevent setbacks.</p>
          <a href="TrackOngoingApplicationBP.php" class="btn btn-primary w-25 h-25">Apply Now</a>
        </div>
    </div>

    
</main>
    <br><br>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        // Permit images mapping (update this with actual permit numbers and corresponding images)
        const permitImages = {
            '12345': 'https://via.placeholder.com/300?text=Permit+12345', // Example image for permit number 12345
            '67890': 'https://via.placeholder.com/300?text=Permit+67890', // Example image for permit number 67890
            // Add more permit numbers and image URLs as needed
        };

        // Handle "Next" button click
        document.getElementById('next-btn').addEventListener('click', function () {
            const permitNumber = document.getElementById('field1').value;
            const permitImage = permitImages[permitNumber];

            if (permitImage) {
                // Set the image source and show the permit image modal
                document.getElementById('permitImage').src = permitImage;
                const permitImageModal = new bootstrap.Modal(document.getElementById('permitImageModal'));
                permitImageModal.show();
            } else {
                alert('Permit number not found. Please enter a valid permit number.');
            }
        });

        //for nummber 4
        const permitImages4 = {
        '12345': 'https://via.placeholder.com/300?text=Permit+12345', // Example image for permit number 12345
        '67890': 'https://via.placeholder.com/300?text=Permit+67890', // Example image for permit number 67890
        // Add more permit numbers and image URLs as needed
        };

        // Handle "Next" button click
        document.getElementById('next-btn').addEventListener('click', function () {
            const permitNumber = document.getElementById('permitNumberField').value; // Updated field id
            const permitImage = permitImages[permitNumber];

            if (permitImage) {
                // Set the image source and show the permit image modal
                document.getElementById('permitImageField').src = permitImage; // Updated image id
                const permitImageModal = new bootstrap.Modal(document.getElementById('permitImageModal'));
                permitImageModal.show();
            } else {
                alert('Permit number not found. Please enter a valid permit number.');
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const taxCheckModal = new bootstrap.Modal(document.getElementById('taxCheckModal'));
            const payTaxPromptModal = new bootstrap.Modal(document.getElementById('payTaxPromptModal'));
            const applicantInputModal = new bootstrap.Modal(document.getElementById('applicantInputModal'));
            const validationModal = new bootstrap.Modal(document.getElementById('validationModal'));

            // Show Applicant Input Modal when clicking "Yes" on Tax Check Modal
            document.getElementById('yesTaxPaidBtn').addEventListener('click', function() {
                setTimeout(() => {
                    applicantInputModal.show();
                }, 300);
            });

            // Show Tax Payment Prompt Modal when clicking "No" on Tax Check Modal
            document.querySelector('#taxCheckModal .btn-secondary').addEventListener('click', function() {
                taxCheckModal.hide();
                setTimeout(() => {
                    payTaxPromptModal.show();
                }, 300);
            });

            // Show Validation Modal when clicking the tax exemption link in Applicant Input Modal
            document.getElementById('taxExemptionLink').addEventListener('click', function(event) {
                event.preventDefault();
                applicantInputModal.hide();
                setTimeout(() => {
                    validationModal.show();
                }, 300);
            });
        });

    

    </script>
</html>





