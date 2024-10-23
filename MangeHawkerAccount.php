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
    <title>HAWKER</title>

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

    </style>
</head>

<body>
   

    <main>
        <div class="container mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">VIEW HAWKER ACCOUNT LIST</h3>

                    <br><br>

                    <form id="hawkerLeaseForm">
                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <label for="hawkerLeaseID" class="form-label">Hawker Permit No.</label>
                                <input type="text" class="form-control" id="hawkerLeaseID">
                            </div>

                            <div class="col-md-4">
                                <label for="hawkerFirstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="hawkerFirstName">
                            </div>

                            <div class="col-md-4">
                                <label for="hawkerLastName" class="form-label">Surname</label>
                                <input type="text" class="form-control" id="hawkerLastName">
                            </div>

                            <div class="col-md-4">
                                <label for="hawkerMarketName" class="form-label">Name of Market</label>
                                <select class="form-select" id="hawkerMarketName">
                                    <option value="Sample Market" selected>Sample Market</option>
                                    <option value="Market 1">Market 1</option>
                                    <option value="Market 2">Market 2</option>
                                    <option value="Market 3">Market 3</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="hawkerPlaceOfMarket" class="form-label">Place of Market</label>
                                <input type="text" class="form-control" id="hawkerPlaceOfMarket">
                            </div>

                            <div class="col-md-4">
                                <label for="hawkerLeaseStatus" class="form-label">Status of Lease</label>
                                <select class="form-select" id="hawkerLeaseStatus">
                                    <option value="Active" selected>Active</option>
                                    <option value="Expired">Expired</option>
                                    <option value="Terminated">Terminated</option>
                                </select>
                            </div>
                           
                            <div class="col-md-4">
                                <button id="hawkerSearchButton" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>

                    <div id="hawkerApplicantView" class="view active">
                        <div class="table-responsive">
                            <table id="hawkerApplicantTable" class="table table-bordered table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">HAWKER PERMIT NO.</th>
                                        <th scope="col">FIRST NAME</th>
                                        <th scope="col">LAST NAME</th>
                                        <th scope="col">MARKET NAME</th>
                                        <th scope="col">PLACE OF MARKET</th>
                                        <th scope="col">STATUS OF LEASE</th>
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
                                <tbody id="hawkerApplicantTableBody">
                                    <tr>
                                        <td>LEASE123</td>
                                        <td>Lele</td>
                                        <td>Doe</td>
                                        <td>Sample Market</td>
                                        <td>Main Street</td>
                                        <td>ACTIVE</td>
                                        <td>NOT PAID</td>
                                        <td>NOT PAID</td>
                                        <td><button class="btn btn-info view-button" data-id="LEASE123">View</button></td> <!-- Added View button -->
                                    </tr>

                                    <tr>
                                        <td>LEASE456</td>
                                        <td>John</td>
                                        <td>Smith</td>
                                        <td>Another Market</td>
                                        <td>East Avenue</td>
                                        <td>INACTIVE</td>
                                        <td>NOT PAID</td>
                                        <td>NOT PAID</td>
                                        <td><button class="btn btn-info view-button" data-id="LEASE456">View</button></td> <!-- Added View button -->
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
        </div>

        <!-- Modal -->
        <div class="modal fade" id="hawkerDetailsModal" tabindex="-1" aria-labelledby="hawkerDetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hawkerDetailsModalLabel">Hawker Application Summary</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Hawker Permit No:</strong> <span id="modalHawkerPermitNo"></span></p>
                        <p><strong>First Name:</strong> <span id="modalFirstName"></span></p>
                        <p><strong>Last Name:</strong> <span id="modalLastName"></span></p>
                        <p><strong>Market Name:</strong> <span id="modalMarketName"></span></p>
                        <p><strong>Place of Market:</strong> <span id="modalPlaceOfMarket"></span></p>
                        <p><strong>Status of Lease:</strong> <span id="modalLeaseStatus"></span></p>
                        <p><strong>Advance Payment Status:</strong> <span id="modalAdvancePaymentStatus"></span></p>
                        <p><strong>Payment Status:</strong> <span id="modalPaymentStatus"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Show modal with hawker details
        $(document).on('click', '.view-button', function() {
            var row = $(this).closest('tr');
            var hawkerPermitNo = row.find('td:nth-child(1)').text();
            var firstName = row.find('td:nth-child(2)').text();
            var lastName = row.find('td:nth-child(3)').text();
            var marketName = row.find('td:nth-child(4)').text();
            var placeOfMarket = row.find('td:nth-child(5)').text();
            var leaseStatus = row.find('td:nth-child(6)').text();
            var advancePaymentStatus = row.find('td:nth-child(7)').text();
            var paymentStatus = row.find('td:nth-child(8)').text();

            // Populate modal with data
            $('#modalHawkerPermitNo').text(hawkerPermitNo);
            $('#modalFirstName').text(firstName);
            $('#modalLastName').text(lastName);
            $('#modalMarketName').text(marketName);
            $('#modalPlaceOfMarket').text(placeOfMarket);
            $('#modalLeaseStatus').text(leaseStatus);
            $('#modalAdvancePaymentStatus').text(advancePaymentStatus);
            $('#modalPaymentStatus').text(paymentStatus);

            // Show modal
            $('#hawkerDetailsModal').modal('show');
        });
    </script>
</body>

</html>
