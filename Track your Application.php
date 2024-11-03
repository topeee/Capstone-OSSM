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
    <title>OSSM Application</title>
    
    <style>
        /* Add smooth transition for the views */
        .view {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease;
        }

        .view.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>

    <main>
        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">APPLICATION LIST</h3>

                    <br><br>

                    <!-- Buttons for Applicant and Representative -->
                    <div class="d-flex mb-3">
                        <button id="applicant-btn" class="btn btn-primary me-2">APPLICANT</button>
                        <button id="representative-btn" class="btn btn-outline-primary">REPRESENTATIVE</button>
                    </div>

                    <!-- Applicant View -->
                    <div id="applicant-view" class="view active">
                         <!-- Filters -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="applicationType" class="form-label">Application Type:</label>
                            <select id="applicationType" class="form-select">
                                <option value="all">ALL</option>
                                <option value="new">NEW OCCUPATIONAL PERMIT</option>
                                <option value="renewal">OCCUPATIONAL PERMIT RENEWAL</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="applicationStatus" class="form-label">Application Status:</label>
                            <select id="applicationStatus" class="form-select">
                                <option value="all">ALL</option>
                                <option value="denied_by_bpld">DENIED BY BPLD</option>
                                <option value="denied_by_chd">DENIED BY CHD</option>
                                <option value="denied_by_peso">DENIED BY PESO</option>
                                <option value="for_bpld_validation">FOR BPLD VALIDATION</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>

                    <!-- Search bar -->
                    <div class="input-group mb-3">
                        <select class="form-select w-25">
                            <option selected>Application No.</option>
                            <option value="occupational">Occupational Permit No.</option>
                            <option value="applicant">Applicant Name</option>
                            <option value="company">Company Name</option>
                            <option value="occupation">Occupation</option>
                        </select>
                        <input type="text" class="form-control" placeholder="Search...">
                        <button class="btn btn-primary" type="button">
                            <i class="bi bi-search"></i> <!-- Search icon -->
                        </button>
                    </div>

                        <!-- Table for Applicant -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">OCCUPATIONAL PERMIT NO.</th>
                                        <th scope="col">APPLICANT NO.</th>
                                        <th scope="col">APPLICATION TYPE</th>
                                        <th scope="col">APPLICANT NAME</th>
                                        <th scope="col">COMPANY NAME</th>
                                        <th scope="col">OCCUPATION</th>
                                        <th scope="col">APPLICATION DATE</th>
                                        <th scope="col">PAYMENT TYPE</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>NEW</td>
                                        <td>MANUEL, MICO SAGAT</td>
                                        <td></td>
                                        <td></td>
                                        <td>2024-05-20</td>
                                        <td></td>
                                        <td>SAVED AS DRAFT</td>
                                        <td><button class="btn btn-primary btn-sm">EDIT</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Representative View -->
                    <div id="representative-view" class="view" style="display:none;">
                         <!-- Filters -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="applicationType" class="form-label">Application Type:</label>
                            <select id="applicationType" class="form-select">
                                <option value="all">ALL</option>
                                <option value="new">NEW OCCUPATIONAL PERMIT</option>
                                <option value="renewal">OCCUPATIONAL PERMIT RENEWAL</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="applicationStatus" class="form-label">Application Status:</label>
                            <select id="applicationStatus" class="form-select">
                                <option value="all">ALL</option>
                                <option value="denied_by_bpld">DENIED BY BPLD</option>
                                <option value="denied_by_chd">DENIED BY CHD</option>
                                <option value="denied_by_peso">DENIED BY PESO</option>
                                <option value="for_bpld_validation">FOR BPLD VALIDATION</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>

                    <!-- Search bar -->
                    <div class="input-group mb-3">
                        <select class="form-select w-25">
                            <option selected>Application No.</option>
                            <option value="occupational">Occupational Permit No.</option>
                            <option value="applicant">Applicant Name</option>
                            <option value="company">Company Name</option>
                            <option value="occupation">Occupation</option>
                        </select>
                        <input type="text" class="form-control" placeholder="Search...">
                        <button class="btn btn-primary" type="button">
                            <i class="bi bi-search"></i> <!-- Search icon -->
                        </button>
                    </div>

                        <!-- Table for Representative -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">OCCUPATIONAL PERMIT NO.</th>
                                        <th scope="col">APPLICANT NO.</th>
                                        <th scope="col">APPLICATION TYPE</th>
                                        <th scope="col">APPLICANT NAME</th>
                                        <th scope="col">COMPANY NAME</th>
                                        <th scope="col">OCCUPATION</th>
                                        <th scope="col">APPLICATION DATE</th>
                                        <th scope="col">PAYMENT TYPE</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="10" class="text-center">No data available in table</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <!-- Pagination -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>

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
                        <li class="list-inline-item"><a class="link-secondary" href="#"><img class="logo" src="facebook logo.png" alt="Facebook Logo" width="50" height="50"></a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#"><img class="logo" src="linkedin logo.png" alt="LinkedIn Logo" width="50" height="50"></a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#"><img class="logo" src="twitter logo.png" alt="Twitter Logo" width="50" height="50"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function switchView(view) {
            // Hide both views
            document.getElementById("applicant-view").classList.remove("active");
            document.getElementById("representative-view").classList.remove("active");

            // Add active class to the selected view after a short delay to trigger the transition
            setTimeout(() => {
                document.getElementById(view + "-view").classList.add("active");
            }, 100);

            // Set display for each view based on selection
            if (view === "applicant") {
                document.getElementById("applicant-view").style.display = "block";
                document.getElementById("representative-view").style.display = "none";
            } else {
                document.getElementById("applicant-view").style.display = "none";
                document.getElementById("representative-view").style.display = "block";
            }
        }

        // Event listeners for buttons
        document.getElementById("applicant-btn").addEventListener("click", function () {
            switchView("applicant");
        });

        document.getElementById("representative-btn").addEventListener("click", function () {
            switchView("representative");
        });
    </script>
</body>
</html>
