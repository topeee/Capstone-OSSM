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
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="pwd app.css">
    <link rel="icon" type="img/png" href="logo.png">
    <title>Association Registration</title>

    <style>
        .modal-content {
            border-radius: 8px;
            border: 1px solid #007bff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-footer {
            border-top: none;
        }

        .modal-body p {
            margin: 0.5rem 0;
        }

        .modal-body strong {
            color: #007bff;
        }

        .modal-body {
            text-align: left;
        }

        .modal-body p {
            margin: 0.5rem 0;
            display: flex;
            justify-content: space-between;
        }

        #addNewButton {
            display: inline-flex;
            align-items: center;
        }

        #addNewButton i {
            margin-right: 5px;
        }

        .dropdown-menu-status {
            min-width: auto;
            padding: 0.5rem;
        }

        .status-filter {
            cursor: pointer;
        }

        .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle;
        }

        .status-header {
            cursor: pointer;
            text-decoration: underline;
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            left: 0;
            top: 100%;
            z-index: 1;
        }

        /* New styles for the form layout */
        .form-row {
            display: flex;
            flex-wrap: wrap;
        }

        .form-col {
            flex: 1;
            min-width: 250px; /* Adjust this for minimum width */
            padding: 10px;
        }

        /* Increase modal size */
        .modal-dialog {
            max-width: 1000px; /* Set maximum width */
        }

        /* Centered Information Label */
        .info-label {
            text-align: center;
            font-weight: bold;
            margin: 20px 0;
        }

        /* Line below initial fields */
        .divider {
            border-top: 1px solid #007bff;
            margin: 20px 0;
        }

        #addAssociationForm {
        border: 1px solid #dee2e6;
        padding: 15px;
        border-radius: 5px;
        }

        .btn-secondary:hover {
        background-color: #6c757d;
        color: white;
        }
        .btn-primary:hover {
            background-color: #007bff;
            color: white;
        }

        .btn-secondary:hover {
        background-color: #6c757d;
        color: white;
        }

        .btn-primary:hover {
            background-color: #007bff;
            color: white;
        }

        .modal-footer .btn {
            min-width: 150px; /* Set a minimum width for the buttons */
            font-size: 1rem; /* Adjust font size for better visibility */
            padding: 10px 20px; /* Increase padding for a more comfortable click area */
            border-radius: 5px; /* Round the corners slightly */
        }

        .btn-primary {
            background-color: #007bff; /* Bootstrap primary color */
        }

        .btn-secondary {
            background-color: #6c757d; /* Bootstrap secondary color */
        }

        .btn:hover {
            opacity: 0.8; /* Slightly reduce opacity on hover for effect */
        }


        .modal-title {
            margin: 0; /* Remove default margin */
        }

        .modal-subtitle {
            margin: 0; /* Remove default margin */
            color: #6c757d; /* Subtle color for the subtitle */
        }

        .neon-divider {
        border: 0;
        height: 1px;
        background: #00f7ff;
        background: linear-gradient(to right, #00f7ff, #0099ff, #00f7ff);
        box-shadow: 0 0 10px #00f7ff, 0 0 20px #0099ff, 0 0 30px #00f7ff;
        }

    </style>
</head>

<body>
   

    <main>
        <div class="container mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">Association Registration</h3>
                    <br><br>

                    <!-- Add New Button and Search Box (Aligned) -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-4">
                            <button id="addNewButton" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addAssociationModal">
                                <i class="bi bi-plus-lg"></i> Add New
                            </button>
                        </div>
                        <div class="col-md-4">
                            <label for="searchInputReg" class="form-label">Search:</label>
                            <input type="text" id="searchInputReg" class="form-control" placeholder="Search...">
                        </div>
                    </div>

                    <!-- Table with Updated Columns -->
                    <div class="table-responsive">
                        <table id="associationTable" class="table table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">ASSOCIATION NUMBER</th>
                                    <th scope="col">NAME OF ORGANIZATION</th>
                                    <th scope="col">DATE SUBMITTED</th>
                                    <th scope="col" class="status-header">STATUS</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody id="associationTableBody">
                                <tr>
                                    <td>AN123456</td>
                                    <td>Community Organization</td>
                                    <td>2024-10-01</td>
                                    <td class="status-filter">Approved</td>
                                    <td>
                                        <button class="btn btn-info btn-sm view-button" data-bs-toggle="modal" data-bs-target="#summaryModal" data-row="1">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AN654321</td>
                                    <td>Local Association</td>
                                    <td>2024-10-05</td>
                                    <td class="status-filter">Pending</td>
                                    <td>
                                        <button class="btn btn-info btn-sm view-button" data-bs-toggle="modal" data-bs-target="#summaryModal" data-row="2">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                    <!-- Dropdown to Filter Status -->
                    <div id="statusDropdown" class="dropdown">
                        <ul class="dropdown-menu dropdown-menu-status">
                            <li class="dropdown-item">Approved</li>
                            <li class="dropdown-item">Accept Recommendation</li>
                            <li class="dropdown-item">Cleared</li>
                            <li class="dropdown-item">Close</li>
                        </ul>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
            </div>
        </div>
    </main>

    <!-- Modal for Viewing Summary -->
    <div class="modal fade" id="summaryModal" tabindex="-1" aria-labelledby="summaryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="summaryModalLabel">Organization Summary</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Association Number:</strong> <span id="summaryAssociationNumber"></span></p>
                    <p><strong>Name of Organization:</strong> <span id="summaryOrgName"></span></p>
                    <p><strong>Date Submitted:</strong> <span id="summaryDateSubmitted"></span></p>
                    <p><strong>Status:</strong> <span id="summaryStatus"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Hawker Application Form -->
    <div class="modal fade" id="addAssociationModal" tabindex="-1" aria-labelledby="addAssociationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> <!-- Increased modal size -->
            <div class="modal-content">
                <div class="modal-header"> <!-- Center the header content -->
                    <div class="w-100 text-center"> <!-- Full width for centering -->
                        <img src="logo.png" alt="Logo" style="width: 120px; margin-bottom: 10px;"> <!-- Bigger Logo -->
                        <h3>MUNICIPALITY OF KINEME</h3> <!-- Subtitle -->
                        <h5 class="modal-title modal-subtitle" id="addAssociationModalLabel">Add New Association</h5> <!-- Title -->
                    </div>
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Top right-aligned close button -->
                </div>
                <div class="modal-body" style="padding: 40px;"> <!-- Increased padding for classier look -->
                    <div id="notification" class="alert alert-danger d-none" role="alert"></div> <!-- Notification area -->
                    <form id="addAssociationForm" style="border: 1px solid #dee2e6; padding: 30px; border-radius: 10px; background-color: #f9f9f9; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"> <!-- Classy form style -->
                        <div class="row mb-4"> <!-- Increased bottom margin -->
                            <div class="col-md-6">
                                <label for="applicationType">Application Type: <span style="color: green;">HAWKER ASSOCIATION APPLICATION</span></label>
                            </div>
                            <div class="col-md-6">
                                <label for="dateSubmitted">Date Submitted:</label>
                                <input type="date" id="dateSubmitted" class="form-control ms-5" required disabled> <!-- Make not clickable -->
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="applicationStatus">Application Status:</label>
                                <input type="text" id="applicationStatus" class="form-control ms-3" value="New" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="associationNumber">Association Number:</label>
                                <input type="text" id="associationNumber" class="form-control ms-3" required disabled> <!-- Make not clickable -->
                            </div>
                        </div>
                        <hr class="neon-divider"> <!-- Blue Neon Divider -->

                        <!-- Additional fields organized into 3 rows -->
                        <h5><b>Information</b></h5>
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <label for="nameOfOrganization">Name of Organization <span style="color: red;">*</span></label>
                                <input type="text" id="nameOfOrganization" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label for="secCount">SEC Count</label>
                                <input type="text" id="secCount" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label for="dateOfGrant">Date of Grant</label>
                                <input type="date" id="dateOfGrant" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label for="telephoneNo">Telephone No. <span style="color: red;">*</span></label>
                                <input type="text" id="telephoneNo" class="form-control" required>
                            </div>
                        </div>
                        <hr class="neon-divider"> <!-- Blue Neon Divider -->

                        <h5><b>Moderator</b></h5>
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <label for="firstName">First Name <span style="color: red;">*</span></label>
                                <input type="text" id="firstName" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label for="middleName">Middle Name</label>
                                <input type="text" id="middleName" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label for="lastName">Last Name <span style="color: red;">*</span></label>
                                <input type="text" id="lastName" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label for="emailAddress">Email Address <span style="color: red;">*</span></label>
                                <input type="email" id="emailAddress" class="form-control" required pattern=".+@gmail\.com">
                                <div class="invalid-feedback">Email must be a valid Gmail address.</div>
                            </div>
                        </div>
                        <hr class="neon-divider"> <!-- Blue Neon Divider -->

                        <h5><b>Submitted By</b></h5>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="submittedBy">Submitted By <span style="color: red;">*</span></label>
                                <input type="text" id="submittedBy" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="submitterEmail">Email Address</label>
                                <input type="email" id="submitterEmail" class="form-control" required pattern=".+@gmail\.com">
                                <div class="invalid-feedback">Email must be a valid Gmail address.</div>
                            </div>
                        </div>
                        <div class="info-label">Please ensure all fields are filled correctly.</div>
                    </form>
                </div>
                <div class="modal-footer justify-content-center"> <!-- Centering the footer buttons -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="transition: background-color 0.3s; width: 100px;">Close</button>
                    <button type="button" class="btn btn-primary" id="submitAssociationButton" style="transition: background-color 0.3s; width: 100px;">Submit</button>
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
        // Populate summary modal with selected row data
        $('.view-button').click(function () {
            var row = $(this).data('row');
            $('#summaryAssociationNumber').text($('#associationTableBody tr:eq(' + (row - 1) + ') td:eq(0)').text());
            $('#summaryOrgName').text($('#associationTableBody tr:eq(' + (row - 1) + ') td:eq(1)').text());
            $('#summaryDateSubmitted').text($('#associationTableBody tr:eq(' + (row - 1) + ') td:eq(2)').text());
            $('#summaryStatus').text($('#associationTableBody tr:eq(' + (row - 1) + ') td:eq(3)').text());
        });

        // Submit new association
        $('#submitAssociationButton').click(function () {
            var applicationType = $('#applicationType').val();
            var applicationStatus = $('#applicationStatus').val();
            var dateSubmitted = $('#dateSubmitted').val();
            var associationNumber = $('#associationNumber').val();

            // Code to handle submission (e.g., AJAX or form submission)
            console.log("Submitting: ", { applicationType, applicationStatus, dateSubmitted, associationNumber });
            $('#addAssociationModal').modal('hide'); // Hide modal after submission
        });

        // Toggle status dropdown
        $('.status-header').click(function () {
            $('#statusDropdown .dropdown-menu').toggle();
        });

        // Handle status filter selection
        $('#statusDropdown .dropdown-item').click(function () {
            $('.status-header').text($(this).text());
            $('#statusDropdown .dropdown-menu').hide();
        });

        // Handle form submission
        const form = document.getElementById('addAssociationForm');
        const submitButton = document.getElementById('submitAssociationButton');
        const notification = document.getElementById('notification');

        submitButton.addEventListener('click', function(event) {
            // Get email input values
            const emailAddress = document.getElementById('emailAddress').value;
            const submitterEmail = document.getElementById('submitterEmail').value;

            // Validate email formats
            const emailPattern = /.+@gmail\.com/;
            if (!emailPattern.test(emailAddress) || !emailPattern.test(submitterEmail)) {
                event.preventDefault(); // Prevent form submission
                notification.textContent = 'Please enter valid Gmail addresses for both email fields.'; // Set notification message
                notification.classList.remove('d-none'); // Show notification
            } else {
                notification.classList.add('d-none'); // Hide notification if inputs are valid
                // Proceed with form submission or next steps
                form.submit(); // Uncomment this if you're using a real form submission
                // Here, you can add additional actions (like AJAX requests) if needed
            }
        });

    </script>

</body>

</html>
