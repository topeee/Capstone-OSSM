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
    <link rel="stylesheet" href="footer.css">
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
        <img src="PUBLIC EMPLOYMENT SERVICES.jpg" class="minibanner" alt="Social And General Welfare">
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





