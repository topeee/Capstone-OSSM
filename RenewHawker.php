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
    <title>RENEW OF HAWKER PERMIT</title>

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
    </style>
</head>

<body>

    <main>
        <div class="container mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">RENEW OF HAWKER PERMIT</h3>

                    <br><br>

                    <div id="application-table" class="view active">
                        <!-- Filters with First Name and Last Name Fields -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="hawkerPermitInput" class="form-label">Hawker Permit No.</label>
                                <input type="text" id="hawkerPermitInput" class="form-control" placeholder="Enter Hawker Permit...">
                            </div>
                            <div class="col-md-4">
                                <label for="firstNameInput" class="form-label">First Name:</label>
                                <input type="text" id="firstNameInput" class="form-control" placeholder="Enter First Name...">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="lastNameInput" class="form-label">Last Name:</label>
                                <input type="text" id="lastNameInput" class="form-control" placeholder="Enter Last Name...">
                            </div>
                            <!-- Search Button -->
                            <div class="col-md-4">
                                <button id="searchApplicationButton" class="btn btn-primary">Search</button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="applicationTable" class="table table-bordered table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">HAWKER PERMIT NO.</th>
                                        <th scope="col">FIRST NAME</th>
                                        <th scope="col">SURNAME</th>
                                        <th scope="col">PLACE OF STALL</th>
                                        <th scope="col">LEASE DUE DATE</th> <!-- New Column for Lease Due Date -->
                                        <th scope="col">ACTION</th> <!-- Updated ACTION column -->
                                    </tr>
                                </thead>
                                <tbody id="applicationTableBody">
                                    <tr>
                                        <td>HP123456</td>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>Central Market</td>
                                        <td>2024-12-31</td> <!-- Example Lease Due Date -->
                                        <td>
                                            <button class="btn btn-info btn-sm view-application-btn" data-bs-toggle="modal" data-bs-target="#applicationViewModal" data-tracking="HP123456" data-firstname="John" data-surname="Doe" data-place="Central Market" data-leasedue="2024-12-31">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HP222222</td>
                                        <td>Jane</td>
                                        <td>Smith</td>
                                        <td>East Wing</td>
                                        <td>2025-05-15</td> <!-- Example Lease Due Date -->
                                        <td>
                                            <button class="btn btn-info btn-sm view-application-btn" data-bs-toggle="modal" data-bs-target="#applicationViewModal" data-tracking="HP222222" data-firstname="Jane" data-surname="Smith" data-place="East Wing" data-leasedue="2025-05-15">View</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Modal for viewing application -->
                <div class="modal fade" id="applicationViewModal" tabindex="-1" aria-labelledby="applicationViewModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="applicationViewModalLabel">Application Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Hawker Permit No.</strong> <span id="trackingNumber"></span></p>
                                <p><strong>First Name:</strong> <span id="modalFirstName"></span></p>
                                <p><strong>Surname:</strong> <span id="modalSurname"></span></p>
                                <p><strong>Place of Stall:</strong> <span id="modalPlace"></span></p>
                                <p><strong>Lease Due Date:</strong> <span id="modalLeaseDue"></span></p> <!-- Updated Lease Due Date field -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
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

    <script>
        // Update modal with dynamic values from table
        $(document).on('click', '.view-application-btn', function () {
            $('#trackingNumber').text($(this).data('tracking'));
            $('#modalFirstName').text($(this).data('firstname'));
            $('#modalSurname').text($(this).data('surname'));
            $('#modalPlace').text($(this).data('place'));
            $('#modalLeaseDue').text($(this).data('leasedue'));
        });
    </script>
</body>

</html>
