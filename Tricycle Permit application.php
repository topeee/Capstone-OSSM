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
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="Footer.Clean.icons.css">
    <link rel="stylesheet" href="pwd app.css">
    <link rel="icon" type="img/png" href="logo.png">
    <title>Tricycle Permit Application</title>

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
          <h4 class="card-title">Submit Online Application</h4>
          <p class="card-text">Skip the queue. Steer clear of crowded places. <br> 
            Submit your Occupational Permit Application online. Once submitted, you just have to sit back and wait from the comfort of your homes while our team processes your application.</p>
            <a href="#" class="btn btn-primary w-25 h-25" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Apply Now</a>
        </div>
    </div>
            

<!-- Modal Structure -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Permit Application Options</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="list-group">
                <!-- Card for NEW -->
                <div class="card mb-2 shadow-sm">
                  <div class="card-body d-flex justify-content-between align-items-center">
                    <span>NEW</span>
                    <button class="btn btn-primary">PROCEED</button>
                  </div>
                </div>
  
                <!-- Card for RENEWAL -->
                <div class="card mb-2 shadow-sm">
                  <div class="card-body d-flex justify-content-between align-items-center">
                    <span>SHORT TERM/SPECIAL PERMIT</span>
                    <button class="btn btn-primary">PROCEED</button>
                  </div>
                </div>
  
                <!-- Card for AMENDMENT -->
              <div class="card mb-2 shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <span>AMENDMENT</span>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#amendmentSpecialPermitModal">PROCEED</button>
                </div>
              </div>

              <!-- Card for SPECIAL PERMIT -->
              <div class="card mb-2 shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <span>SPECIAL PERMIT</span>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#amendmentSpecialPermitModal">PROCEED</button>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  

  <div class="modal fade" id="amendmentSpecialPermitModal" tabindex="-1" aria-labelledby="amendmentSpecialPermitLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="amendmentSpecialPermitLabel">Applicant Input No.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- Content for Applicant Input No. -->
              <p>Please enter the Applicant Input Number associated with your application.</p>
              <input type="number" id="applicantInputNo" class="form-control" placeholder="Applicant Input No." />
            </div>
            <div class="modal-footer">
              <a href="Tricycle Permit application form(New).html" id="proceedButton" class="btn btn-primary disabled">Proceed</a>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
      </div>
  </div>
</div>

 <br>

<!-- Card for Track your Application -->
<div class="card text-center w-75 mb-4 mx-auto custom-shadow">
  <h5 class="card-header">Option #2</h5>
  <div class="card-body">
      <h4 class="card-title">View Application Status</h4>
      <p class="card-text">Already submitted your online Occupational Permit Application? <br>
          View the status of your application here:</p>
      <!-- Track Application Button with Modal Trigger -->
      <button class="btn btn-primary w-25 h-25" data-bs-toggle="modal" data-bs-target="#trackApplicationModal">Track your Application</button>
  </div>
</div>

<!-- Modal for Track Application -->
<div class="modal fade" id="trackApplicationModal" tabindex="-1" aria-labelledby="trackApplicationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="trackApplicationModalLabel">Provide Permit Number & Reference Number</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- Input Fields for Permit and Reference Number -->
              <div class="mb-3">
                  <label for="permitNumber" class="form-label">Permit Number</label>
                  <input type="text" id="permitNumber" class="form-control" placeholder="Enter Permit Number">
              </div>
              <div class="mb-3">
                  <label for="referenceNumber" class="form-label">Reference Number</label>
                  <input type="text" id="referenceNumber" class="form-control" placeholder="Enter Reference Number">
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" id="viewStatusButton" class="btn btn-primary" disabled>View Status</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
      </div>
  </div>
</div>

    <br>

    <div class="card text-center w-75 mb-4 mx-auto custom-shadow">
        <h5 class="card-header">Option #3</h5>
        <div class="card-body">
          <h4 class="card-title">Frequently Asked Question</h4>
          <p class="card-text">Having trouble doing things online? This might help answer your questions.</p>
        <a href="#" class="btn btn-primary w-25 h-25" data-bs-toggle="modal" data-bs-target="#faqModal">FAQs</a>

        <!-- FAQ Modal -->
        <div class="modal fade" id="faqModal" tabindex="-1" aria-labelledby="faqModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="faqModalLabel">Frequently Asked Questions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>Here are some common questions and answers:</h5>
                        <ul style="font-size: 20px;">
                            <li><strong>Question 1:</strong> Answer to question 1.</li>
                            <li><strong>Question 2:</strong> Answer to question 2.</li>
                            <li><strong>Question 3:</strong> Answer to question 3.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
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

    <script>
        // jQuery to trigger second modal when Proceed button is clicked
        $(document).ready(function() { 
            $('#proceedButton').click(function() {
                $('#staticBackdrop').modal('hide');  // Hide the first modal
                $('#newOrRenewalModal').modal('show');  // Show the second modal
            });
        });
        document.getElementById('applicantInputNo').addEventListener('input', function() {
                var proceedButton = document.getElementById('proceedButton');
                if (this.value.trim() === '') {
                  proceedButton.classList.add('disabled');
                } else {
                  proceedButton.classList.remove('disabled');
                }
        });
        // Function to check if both inputs are filled
        function validateInputs() {
            const permitNumber = document.getElementById('permitNumber').value.trim();
            const referenceNumber = document.getElementById('referenceNumber').value.trim();
            const viewStatusButton = document.getElementById('viewStatusButton');

            // Enable button if both fields are filled, otherwise disable
            viewStatusButton.disabled = !(permitNumber && referenceNumber);
        }

        // Add event listeners to inputs to check validation on input change
        document.getElementById('permitNumber').addEventListener('input', validateInputs);
        document.getElementById('referenceNumber').addEventListener('input', validateInputs);
    </script>
</html>