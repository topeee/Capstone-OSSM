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
    <title>VIEW APPLICATION LIST</title>

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

        .modal-body strong {
            color: #007bff; /* Emphasize the labels */
        }
    </style>
</head>

<body>

    <main>
        <div class="container mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">VIEW APPLICATION LIST</h3>

                    <br><br>

                  
                    <div id="table-content2" class="view active">
                        <!-- Filters and Application ID Field -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="appTypeSelect" class="form-label">Application Type:</label>
                                <select id="appTypeSelect" class="form-select">
                                    <option value="selectType">SELECT TYPE</option>
                                    <option value="newStall">New Stall</option>
                                    <option value="renewalStall">Renewal of Stall</option>
                                    <option value="transferStall">Transfer Stall</option>
                                    <option value="stallExtension">Stall Extension</option>
                                    <option value="removalOfStall">Removal of Stall</option>
                                    <option value="repairPermit">Repair Permit</option>
                                    <option value="amendment">AMENDMENT</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="appStatusSelect" class="form-label">Application Status:</label>
                                <select id="appStatusSelect" class="form-select">
                                    <option value="selectType">SELECT TYPE</option>
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
                                <label for="appIDInput" class="form-label">Application ID:</label>
                                <input type="text" id="appIDInput" class="form-control" placeholder="Enter Application ID...">
                            </div>
                            <!-- Search Button -->
                             <div class="col-md-4">
                                <button id="searchButton" class="btn btn-primary">Search</button>
                             </div>
                        </div>

                        <div class="table-responsive">
                            <table id="table-content2" class="table table-bordered table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">FORM ID</th>
                                        <th scope="col">MARKET NAME</th>
                                        <th scope="col">SECTION</th>
                                        <th scope="col">STALL NUMBER</th>
                                        <th scope="col">APPLICATION TYPE</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">DATE SUBMITTED</th>
                                        <th scope="col">ACTION</th> <!-- New ACTION column -->
                                    </tr>
                                </thead>
                                <tbody id="table-content2Body">
                                    <tr>
                                        <td>123456</td>
                                        <td></td>
                                        <td>Main Market</td>
                                        <td>001</td>
                                        <td>NEW BUSINESS PERMIT</td>
                                        <td>SAVED AS DRAFT</td>
                                        <td>2024-05-20</td>
                                        <td>
                                            <button class="btn btn-info btn-sm view-btn" data-bs-toggle="modal" data-bs-target="#viewModal" data-tracking="123456" data-business="" data-owner="Main Market" data-type="NEW BUSINESS PERMIT" data-status="SAVED AS DRAFT" data-ancillary="---" data-date="2024-05-20">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>222222</td>
                                        <td></td>
                                        <td>East Wing</td>
                                        <td>002</td>
                                        <td>BUSINESS PERMIT RENEWAL</td>
                                        <td>COMPLETED</td>
                                        <td>2024-06-01</td>
                                        <td>
                                            <button class="btn btn-info btn-sm view-btn" data-bs-toggle="modal" data-bs-target="#viewModal" data-tracking="654321" data-business="" data-owner="DOE, JOHN" data-type="BUSINESS PERMIT RENEWAL" data-status="COMPLETED" data-ancillary="APPROVED" data-date="2024-06-01">View</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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

        <!-- Modal for Viewing Details -->
        <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewModalLabel">View Application Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Form ID:</strong> <span id="modalTrackingNo"></span></p>
                        <p><strong>Market Name:</strong> <span id="modalMarketName"></span></p>
                        <p><strong>Section:</strong> <span id="modalSection"></span></p>
                        <p><strong>Stall Number:</strong> <span id="modalStallNo"></span></p>
                        <p><strong>Application Type:</strong> <span id="modalAppType"></span></p>
                        <p><strong>Status</strong> <span id="modalStatus"></span></p>
                        <p><strong>Date Submitted:</strong> <span id="modalDateSubmitted"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
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
        $(document).ready(function () {
            $('.view-btn').on('click', function () {
                $('#modalTrackingNo').text($(this).data('tracking'));
                $('#modalMarketName').text($(this).data('business'));
                $('#modalSection').text($(this).data('owner'));
                $('#modalStallNo').text($(this).data('type'));
                $('#modalAppType').text($(this).data('status'));
                $('#modalStatus').text($(this).data('ancillary'));
                $('#modalDateSubmitted').text($(this).data('date'));
            });
        });
    </script>
</body>

</html>