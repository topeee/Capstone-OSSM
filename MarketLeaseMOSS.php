
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
    <title>VIEW MARKET LEASE</title>

    <style>
        /* Existing styles... */

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

        /* Increase the size of the checkbox */
        input[type="checkbox"] {
            width: 15px;
            height: 15px;
            cursor: pointer;
        }

        /* Optional: Increase the font size for the label */
        label {
            font-size: 18px;
            margin-left: 10px;
            cursor: pointer;
        }

    </style>
</head>

<body>
   

    <main>
        <div class="container mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">VIEW MARKET LEASE</h3>

                    <br><br>
                    
                    <form id="leaseForm">
                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <label for="leaseID" class="form-label">Lease ID</label>
                                <input type="text" class="form-control" id="leaseID">
                            </div>
                    
                            <div class="col-md-4">
                                <label for="firstName" class="form-label">First Name of Stallholder</label>
                                <input type="text" class="form-control" id="firstName">
                            </div>
                    
                            <div class="col-md-4">
                                <label for="lastName" class="form-label">Surname of Stallholder</label>
                                <input type="text" class="form-control" id="lastName">
                            </div>
                    
                            <div class="col-md-4">
                                <label for="marketName" class="form-label">Name of Market</label>
                                <select class="form-select" id="marketName">
                                    <option value="Sample Market" selected>Sample Market</option>
                                    <option value="Market 1">Market 1</option>
                                    <option value="Market 2">Market 2</option>
                                    <option value="Market 3">Market 3</option>
                                </select>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="leaseStatus" class="form-label">Status of Lease</label>
                                <select class="form-select" id="leaseStatus">
                                    <option value="Active" selected>Active</option>
                                    <option value="Expired">Expired</option>
                                    <option value="Terminated">Terminated</option>
                                </select>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="paymentStatus" class="form-label">Payment Status</label>
                                <select class="form-select" id="paymentStatus">
                                    <option value="Paid" selected>Paid</option>
                                    <option value="Unpaid">Unpaid</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button id="searchButton2" class="btn btn-primary">Search</button>
                             </div>
                        </div>
                    </form>
                                                    
                    <!-- table column/header-->
                    <div id="applicantView" class="view active">
                        <!-- Table for Applicant -->
                        <div class="table-responsive">
                            <table id="applicantTable" class="table table-bordered table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">LEASE ID</th>
                                        <th scope="col">FIRST NAME</th>
                                        <th scope="col">LAST NAME</th>
                                        <th scope="col">MARKET NAME</th>
                                        <th scope="col">SECTION</th>
                                        <th scope="col">STALL NUMBER</th>
                                        <th scope="col">STATUS OF LEASE</th>
                                        <th scope="col">AMOUNT DUE</th>
                                        <th scope="col">HELP APPROVAL STATUS
                                            <select id="helpApprovalFilter" class="form-select form-select-sm">
                                                <option value="All">All</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Not Approved">Not Approved</option>
                                                <option value="Blank">Blank</option>
                                            </select>
                                        </th>
                                        <th scope="col">ADVANCE PAYMENT STATUS
                                            <select id="advancePaymentFilter" class="form-select form-select-sm">
                                                <option value="All">All</option>
                                                <option value="Paid">Paid</option>
                                                <option value="Unpaid">Unpaid</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                        </th>
                                        <th scope="col">PAYMENT STATUS</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody id="applicantTableBody">
                                    <tr>
                                        <td>LEASE123</td>
                                        <td>Lele</td>
                                        <td>Doe</td>
                                        <td>Sample Market</td>
                                        <td>Main Section</td>
                                        <td>001</td>
                                        <td>ACTIVE</td>
                                        <td>500</td>
                                        <td>APPROVED</td>
                                        <td>PAID</td>
                                        <td>
                                            <select>
                                                <option value="Paid">Paid</option>
                                                <option value="Unpaid">Unpaid</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>LEASE456</td>
                                        <td>John</td>
                                        <td>Smith</td>
                                        <td>Another Market</td>
                                        <td>East Section</td>
                                        <td>002</td>
                                        <td>INACTIVE</td>
                                        <td>700</td>
                                        <td>PENDING</td>
                                        <td>NOT PAID</td>
                                        <td>
                                            <select>
                                                <option value="Paid">Paid</option>
                                                <option value="Unpaid">Unpaid</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div>
                        <input type="checkbox" id="exampleCheckbox">
                        <label for="exampleCheckbox">Show inactive leases</label>
                    </div>

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
        $(document).ready(function() {
            // Function to filter the table based on the selected dropdown values
            function filterTable() {
                var helpApprovalValue = $('#helpApprovalFilter').val();
                var advancePaymentValue = $('#advancePaymentFilter').val();

                $('#applicantTable tbody tr').each(function() {
                    var helpStatus = $(this).find('td').eq(8).text().trim(); // Help Approval Status
                    var advancePaymentStatus = $(this).find('td').eq(9).text().trim(); // Advance Payment Status

                    var helpApprovalMatch = (helpApprovalValue === "All" || 
                        (helpApprovalValue === "Approved" && helpStatus === "APPROVED") ||
                        (helpApprovalValue === "Not Approved" && helpStatus === "NOT APPROVED") ||
                        (helpApprovalValue === "Blank" && helpStatus === ""));

                    var advancePaymentMatch = (advancePaymentValue === "All" || 
                        (advancePaymentValue === "Paid" && advancePaymentStatus === "PAID") ||
                        (advancePaymentValue === "Unpaid" && advancePaymentStatus === "UNPAID") ||
                        (advancePaymentValue === "Pending" && advancePaymentStatus === "PENDING"));

                    if (helpApprovalMatch && advancePaymentMatch) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }

            // Event listeners for dropdown changes
            $('#helpApprovalFilter, #advancePaymentFilter').change(filterTable);
        });
    </script>
</body>

</html>
