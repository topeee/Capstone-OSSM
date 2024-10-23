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
    <title>HAWKER VIEW APPLICATION LIST</title>

    <style>
        .modal-content {
            border-radius: 8px;
            border: 1px solid #007bff; /* Border color matching Bootstrap primary */
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
            color: #007bff; /* Emphasize the labels */
        }

        .modal-body {
            text-align: left; /* Align text to the left */
        }

        .modal-body p {
            margin: 0.5rem 0;
            display: flex;
            justify-content: space-between; /* Aligns label and value with space between */
        }
    </style>
</head>

<body>
   
    <main>
        <div class="container mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">HAWKER VIEW APPLICATION LIST</h3>

                    <br><br>

                    <div id="application-table" class="view active">
                        <!-- Filters and Application ID Field -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="hawkerPermitInput" class="form-label">Hawker Permit No.</label>
                                <input type="text" id="hawkerPermitInput" class="form-control" placeholder="Enter Hawker Permit...">
                            </div>
                            <div class="col-md-4">
                                <label for="applicationStatusSelect" class="form-label">Status:</label>
                                <select id="applicationStatusSelect" class="form-select">
                                    <option value="selectType">SELECT STATUS</option>
                                    <option value="additional_information_requested">Additional Information Requested</option>
                                    <option value="approved">Approved</option>
                                    <option value="cancelled">Cancelled</option>
                                    <option value="cleared">Cleared</option>
                                    <option value="closed">Closed</option>
                                    <option value="disapproved">Disapproved</option>
                                    <option value="expired">Expired</option>
                                    <option value="for_clearance">For Clearance</option>
                                    <option value="for_confirmation">For Confirmation</option>
                                    <option value="for_evaluation">For Evaluation</option>
                                    <option value="for_final_approval">For Final Approval</option>
                                    <option value="for_further_information">For Further Information</option>
                                    <option value="for_inspection">For Inspection</option>
                                    <option value="for_interview">For Interview</option>
                                    <option value="for_payment_verification">For Payment Verification</option>
                                    <option value="for_recommendary_approval">For Recommendary Approval</option>
                                    <option value="for_review">For Review</option>
                                    <option value="in_progress">In Progress</option>
                                    <option value="new">New</option>
                                    <option value="on_queue">On-queue</option>
                                    <option value="payment_confirmed">Payment Confirmed</option>
                                    <option value="payment_information_requested">Payment Information Requested</option>
                                    <option value="pending_payment">Pending Payment</option>
                                    <option value="rejected">Rejected</option>
                                    <option value="reviewed">Reviewed</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="applicationIDInput" class="form-label">Application ID:</label>
                                <input type="text" id="applicationIDInput" class="form-control" placeholder="Enter Application ID...">
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
                                        <th scope="col">NAME OF MARKET</th> <!-- New Column -->
                                        <th scope="col">TYPE OF APPLICATION</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">ACTION</th> <!-- Updated ACTION column -->
                                    </tr>
                                </thead>
                                <tbody id="applicationTableBody">
                                    <tr>
                                        <td>HP123456</td>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>Central Market</td> <!-- Updated Value for Place of Stall -->
                                        <td>Main Market 1</td> <!-- Initial Value -->
                                        <td>NEW BUSINESS PERMIT</td>
                                        <td>SAVED AS DRAFT</td>
                                        <td>
                                            <button class="btn btn-info btn-sm view-application-btn" data-bs-toggle="modal" data-bs-target="#applicationViewModal" data-tracking="HP123456" data-firstname="John" data-surname="Doe" data-place="Central Market" data-market="Main Market 1" data-type="NEW BUSINESS PERMIT" data-status="SAVED AS DRAFT">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HP222222</td>
                                        <td>Jane</td>
                                        <td>Smith</td>
                                        <td>East Wing</td>
                                        <td>East Market 2</td> <!-- Initial Value -->
                                        <td>BUSINESS PERMIT RENEWAL</td>
                                        <td>COMPLETED</td>
                                        <td>
                                            <button class="btn btn-info btn-sm view-application-btn" data-bs-toggle="modal" data-bs-target="#applicationViewModal" data-tracking="HP654321" data-firstname="Jane" data-surname="Smith" data-place="East Wing" data-market="East Market 2" data-type="BUSINESS PERMIT RENEWAL" data-status="COMPLETED">View</button>
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
                                <p><strong>Place of Stall:</strong> <span id="modalPlace"></span></p> <!-- Added Place of Stall -->
                                <p><strong>Name of Market:</strong> <span id="modalMarket"></span></p> <!-- Added Name of Market -->
                                <p><strong>Type of Application:</strong> <span id="modalType"></span></p>
                                <p><strong>Status:</strong> <span id="modalStatus"></span></p>
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

                <script>
                    $(document).ready(function () {
                        // Populate modal with application details
                        $('.view-application-btn').on('click', function () {
                            $('#trackingNumber').text($(this).data('tracking'));
                            $('#modalFirstName').text($(this).data('firstname'));
                            $('#modalSurname').text($(this).data('surname'));
                            $('#modalPlace').text($(this).data('place')); // Update for Place of Stall
                            $('#modalMarket').text($(this).data('market')); // Update for Name of Market
                            $('#modalType').text($(this).data('type'));
                            $('#modalStatus').text($(this).data('status'));
                        });
                    });
                </script>
            </div>
        </div>
    </main>

    <footer>
        <div class="container-footer">
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

</body>

</html>
