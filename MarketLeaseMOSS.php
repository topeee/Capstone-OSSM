
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