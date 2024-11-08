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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="Footer.Clean.icons.css">
    <link rel="stylesheet" href="pwd app.css">
    <link rel="icon" type="img/png" href="logo.png">

        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>

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
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img class="navbar-brand-logo" alt="Logo" src="logo.png" width="110" height="110">
            <span class="brand-name">OSSM</span>
          </a>
          <div class="d-flex align-items-center ms-auto">
            <span class="username">Hello, Username</span>
            <div class="dropdown-center ms-3">
              <a class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="Hamburger-Icon" src="Burger icon.png" alt="Burger Icon" width="36" height="36">
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="account_profile.html">Profile</a></li>
                <li><a class="dropdown-item" href="#">History Transaction</a></li>
                <li><a class="dropdown-item logout-item" href="login.html">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
    </nav>

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
            <!-- Requirement List Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Use modal-lg for larger content display -->
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Requirement List</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Before proceeding in the Occupational Permit Application, please secure the following:</h5>
                <ul style="font-size: 20px;">
                    <li>VALID NBI CLEARANCE OR POLICE CLEARANCE</li>
                    <li>VALID CEDULA</li>
                    <li>HEALTH RECEIPT OR HEALTH CARD</li>
                </ul>
                <hr>
                <!-- Additional Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3><strong>If Security Positions</strong></h3>
                            <ul>
                                <li>DPOS Clearance (Department of Public Order and Safety)</li>
                            </ul>
                            <h3><strong>If PRC Licensed</strong></h3>
                            <ul>
                                <li>Photocopy of PRC ID</li>
                                <li>Waiver for Professionals</li>
                            </ul>
                            <h3><strong>If Entertainers, GRO Massage Therapist</strong></h3>
                            <ul>
                                <li>Yellow Card (Quezon City Health Department)</li>
                            </ul>
                            <h3><strong>If Foreign Applicant</strong></h3>
                            <ul>
                                <li>Alien Employment Permit (AEP, Department of Labor and Employment)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3><strong>If Minor Applicant</strong></h3>
                            <ul>
                                <li>Parental Consent</li>
                                <li>Valid ID of Legal Guardian</li>
                                <li>Birth Certificate of Applicant</li>
                            </ul>
                            <h3><strong>If Child Under 15 years old</strong></h3>
                            <ul>
                                <li>Working Child's Permit (Department of Labor and Employment)</li>
                                <li>Requirements for Minor</li>
                            </ul>
                        </div>
                    </div>
                    <h5 class="text-light-emphasis">Click <strong>PROCEED</strong> if all the scanned requirements above are ready for uploading. Also, please make sure to review all the details loaded in the form.</h5>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newOrRenewalModal">Proceed</button>
            </div>
        </div>
    </div>
</div>

<!-- New or Renewal Modal -->
<div class="modal fade" id="newOrRenewalModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="newOrRenewalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title mx-auto" id="newOrRenewalModalLabel"><strong>CHOOSE APPLICATION TYPE:</strong></h3>
            </div>
            <div class="modal-body">
                <a href="Occupational permit(New).html" class="btn btn-primary w-100 mb-2">New Application</a>
                <button type="button" class="btn btn-primary w-100 mb-2" data-bs-toggle="modal" data-bs-target="#renewalModal">Renewal Application</button>
            </div>
        </div>
    </div>
</div>

<!-- Renewal Application Modal -->
<div class="modal fade" id="renewalModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="renewalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="renewalModalLabel">Renewal Application</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>If you can access your old completed application with occupational permit number under your OSSM E-Services account, you can directly renew your occupational permit by following the steps below:</p>
                <UL>
                    <li>Go to Track Your Applications.</li>
                    <li>Find your old completed application.</li>
                    <li>Under the Action column, click the RENEW button to renew your previous application.</li>
                </UL>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#RenewalModal">Proceed</button>
            </div>
        </div>
    </div>
</div>

<!-- Final Renewal Modal -->
<div class="modal fade" id="RenewalModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="RenewalModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title mx-auto" id="newOrRenewalModalLabel"><strong>RENEWAL APPLICATION:</strong></h3>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="occupationalPermitNumber" class="form-label">OCCUPATIONAL PERMIT NUMBER*</label>
                        <input type="text" class="form-control" id="occupationalPermitNumber" placeholder="Occupational Permit Number" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="Fname" class="form-label">FIRST NAME:*</label>
                        <input type="text" class="form-control" id="Fname" placeholder="First Name" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="mName" class="form-label">MIDDLE NAME:</label>
                        <input type="text" class="form-control" id="mName" placeholder="Middle Name" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="lName" class="form-label">LAST NAME:*</label>
                        <input type="text" class="form-control" id="lName" placeholder="Last Name" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="sfx" class="form-label">SUFFIX:</label>
                        <input type="text" class="form-control" id="sfx" placeholder="Suffix" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="pagIbig" class="form-label">BIRTHDATE:*</label>
                        <input type="date" class="form-control" id="pagIbig">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#finalSubmitModal">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Final Submit Modal -->
<div class="modal fade" id="finalSubmitModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="finalSubmitModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="finalSubmitModalLabel">Final Submission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to submit the application? This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" id="submitBtn">Submit</button>
            </div>
        </div>
    </div>
</div>


            
      <br>

    <div class="card text-center w-75 mb-4 mx-auto custom-shadow">
        <h5 class="card-header">Option #2</h5>
        <div class="card-body">
          <h4 class="card-title">Apply as a Representative </h4>
          <p class="card-text">Applying on behalf of your company employees or for your Friend? <br>
            Submit your application here</p>
            <a href="#" class="btn btn-primary w-25 h-25" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Apply Now</a>
        </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <!-- Use modal-lg for larger content display -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Requirement List</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>For application that will be processed by an authorized representative, kindly download this form 
                            <a href="Authorization Letter.pdf" download="Authorization Letter.pdf">Authorization Form</a> and secure the following:
                        </h5>
                        <ul style="font-size: 20px;">
                            <li>Authorization Form</li>
                            <li>Valid ID of the Signatory</li>
                            <li>Valid ID of Authorized Representative</li>
                            <li>Valid Company ID</li>
                        </ul>
                        <br>
                        <div>
                            <h5 class="text-light-emphasis">Click <strong>PROCEED</strong> if all the scanned requirements above are ready for uploading. Also, please make sure to review all the details loaded in the form.</h5>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <a href="Occupational permit(Representative).html" class="btn btn-success" id="proceedButton">Proceed</a>
                    </div>
                </div>
            </div>
        </div>


    <br>

    <div class="card text-center w-75 mb-4 mx-auto custom-shadow">
        <h5 class="card-header">Option #3</h5>
        <div class="card-body">
          <h4 class="card-title">Track your Application</h4>
          <p class="card-text">Already submitted your online Occupational Permit Application? <br>
            View the status of your application here:</p>
            <a href="Track your Application.html" class="btn btn-primary w-25 h-25">Track your Application</a>
        </div>
    </div>

    <br>

    <div class="card text-center w-75 mb-4 mx-auto custom-shadow">
        <h5 class="card-header">Option #4</h5>
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

    <script>
document.getElementById("submitBtn").addEventListener("click", function() {
    // Show an alert
    alert("Your application has been successfully submitted!");

    // Reload the page
    location.reload();
});

    </script>
    
</html>