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