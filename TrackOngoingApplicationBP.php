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
    <title>OSSM On Going Application</title>

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
                    <h3 class="card-title text-center">APPLICATION LIST</h3>

                    <br><br>

                    <!-- Applicant View -->
                    <div id="table-content" class="view active">
                        <!-- Filters -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="applicationType" class="form-label">Application Type:</label>
                                <select id="applicationType" class="form-select">
                                    <option value="all">ALL</option>
                                    <option value="new">NEW BUSINESS PERMIT</option>
                                    <option value="renewal">BUSINESS PERMIT RENEWAL</option>
                                    <option value="special">SPECIAL BUSINESS PERMIT</option>
                                    <option value="amendment">AMENDMENT</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="applicationStatus" class="form-label">Application Status:</label>
                                <select id="applicationStatus" class="form-select">
                                    <option value="all">ALL</option>
                                    <option value="for_bpld_evaluator_verification">FOR BPLD EVALUATOR VERIFICATION</option>
                                    <option value="rejected_by_bpld_evaluator">REJECTED BY BPLD EVALUATOR</option>
                                    <option value="for_ancillary_verification">FOR ANCILLARY VERIFICATION</option>
                                    <option value="new_for_tax_assessment">NEW - FOR TAX ASSESSMENT / RENEWAL - FINAL REVIEW</option>
                                    <option value="for_owner_payment">FOR OWNER PAYMENT</option>
                                    <option value="for_bpld_evaluator_tax_payment_validation">FOR BPLD EVALUATOR TAX PAYMENT VALIDATION</option>
                                    <option value="for_cto_tax_payment_validation">FOR CTO TAX PAYMENT VALIDATION</option>
                                    <option value="for_bpd_chief_final_checking">FOR BPD CHIEF FINAL CHECKING</option>
                                    <option value="for_bpld_head_approval">FOR BPLD HEAD APPROVAL</option>
                                    <option value="completed">COMPLETED</option>
                                    <option value="saved_as_draft">SAVED AS DRAFT</option>
                                    <option value="for_final_processing">FOR FINAL PROCESSING</option>
                                    <option value="returned_to_business_owner">RETURNED TO BUSINESS OWNER</option>
                                    <option value="for_releasing_of_special_permit">FOR RELEASING OF SPECIAL PERMIT</option>
                                    <option value="for_cto_payment_list">FOR CTO PAYMENT LIST</option>
                                    <option value="for_tax_assessment_further_evaluation">FOR TAX ASSESSMENT - FOR FURTHER EVALUATION</option>
                                    <option value="cancelled_application">CANCELLED APPLICATION</option>
                                    <option value="rejected_by_final_evaluator">REJECTED BY FINAL EVALUATOR</option>
                                    <option value="for_owners_payment_motion_for_consideration">FOR OWNER'S PAYMENT (MOTION FOR CONSIDERATION)</option>
                                    <option value="for_zau_approval_head">FOR ZAU APPROVAL HEAD</option>
                                    <option value="rejected_by_zau_evaluator">REJECTED BY ZAU EVALUATOR</option>
                                    <option value="for_cto_tax_payment_validation_motion_for_consideration">FOR CTO TAX PAYMENT VALIDATION (MOTION FOR CONSIDERATION)</option>
                                    <option value="for_cto_payment_list_motion_for_consideration">FOR CTO PAYMENT LIST (MOTION FOR CONSIDERATION)</option>
                                    <option value="for_grac_secretariat_approval">FOR GRAC SECRETARIAT APPROVAL</option>
                                </select>
                            </div>                            
                        </div>

                        <!-- Search bar -->
                        <div class="input-group mb-3">
                            <input type="text" id="searchPermitNumber" class="form-control" placeholder="Enter Permit Number..." style="max-width: 590px;">
                            <button class="btn btn-primary btn-sm" type="button" id="searchButton">
                                <i class="bi bi-search"></i> <!-- Search icon -->
                            </button>
                        </div>

                        
                        <div class="table-responsive">
                            <table id="table-content" class="table table-bordered table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">TRACKING/MAYOR'S PERMIT NUMBER</th>
                                        <th scope="col">BUSINESS NAME</th>
                                        <th scope="col">BUSINESS OWNER</th>
                                        <th scope="col">APPLICATION TYPE</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">ANCILLARY STATUS</th>
                                        <th scope="col">DATE SUBMITTED</th>
                                        <th scope="col">ACTION</th> <!-- New ACTION column -->
                                    </tr>
                                </thead>
                                <tbody id="table-content-Body">
                                    <!-- Initial Table Data (can be loaded dynamically) -->
                                    <tr>
                                        <td>123456</td>
                                        <td>Sample Business</td>
                                        <td>lolo</td>
                                        <td>NEW BUSINESS PERMIT</td>
                                        <td>SAVED AS DRAFT</td>
                                        <td>---</td>
                                        <td>2024-05-20</td>
                                        <td>
                                            <button class="btn btn-info btn-sm view-btn" data-bs-toggle="modal" data-bs-target="#viewModal" data-tracking="123456" data-business="Sample Business" data-owner="lolo" data-type="NEW BUSINESS PERMIT" data-status="SAVED AS DRAFT" data-ancillary="---" data-date="2024-05-20">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>654321</td>
                                        <td>Another Business</td>
                                        <td>DOE, JOHN</td>
                                        <td>BUSINESS PERMIT RENEWAL</td>
                                        <td>FOR OWNER PAYMENT</td>
                                        <td>---</td>
                                        <td>2024-06-15</td>
                                        <td>
                                            <button class="btn btn-info btn-sm view-btn" data-bs-toggle="modal" data-bs-target="#viewModal" data-tracking="654321" data-business="Another Business" data-owner="DOE, JOHN" data-type="BUSINESS PERMIT RENEWAL" data-status="FOR OWNER PAYMENT" data-ancillary="---" data-date="2024-06-15">View</button>
                                        </td>
                                    </tr>
                                    <!-- More initial data as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" onclick="location.href='businessPermitType.html'">
                            APPLY FOR BUSINESS PERMIT
                        </button>
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

            <!-- Modal -->
            <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewModalLabel">Application Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Tracking/Mayor's Permit Number:</strong> <span id="modalTracking"></span></p>
                            <p><strong>Business Name:</strong> <span id="modalBusiness"></span></p>
                            <p><strong>Business Owner:</strong> <span id="modalOwner"></span></p>
                            <p><strong>Application Type:</strong> <span id="modalType"></span></p>
                            <p><strong>Status:</strong> <span id="modalStatus"></span></p>
                            <p><strong>Ancillary Status:</strong> <span id="modalAncillary"></span></p>
                            <p><strong>Date Submitted:</strong> <span id="modalDate"></span></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
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
            // Sample initial data
            const initialData = [
                { trackingNumber: '123456', businessName: 'Sample Business', owner: 'MANUEL, MICO SAGAT', type: 'NEW BUSINESS PERMIT', status: 'SAVED AS DRAFT', ancillaryStatus: '---', dateSubmitted: '2024-05-20' },
                { trackingNumber: '789101', businessName: 'Another Business', owner: 'DOE, JOHN', type: 'BUSINESS PERMIT RENEWAL', status: 'FOR OWNER PAYMENT', ancillaryStatus: '---', dateSubmitted: '2024-05-21' },
                // Add more initial data as needed
                { trackingNumber: '111213', businessName: 'Business Three', owner: 'DOE, JANE', type: 'NEW BUSINESS PERMIT', status: 'FOR BPLD EVALUATOR VERIFICATION', ancillaryStatus: '---', dateSubmitted: '2024-06-10' },
                { trackingNumber: '141516', businessName: 'Business Four', owner: 'SMITH, JAMES', type: 'AMENDMENT', status: 'FOR OWNER PAYMENT', ancillaryStatus: '---', dateSubmitted: '2024-07-20' },
                { trackingNumber: '171819', businessName: 'Business Five', owner: 'JOHNSON, AMY', type: 'SPECIAL BUSINESS PERMIT', status: 'COMPLETED', ancillaryStatus: '---', dateSubmitted: '2024-08-15' },
                { trackingNumber: '202122', businessName: 'Business Six', owner: 'WILLIAMS, DAVID', type: 'NEW BUSINESS PERMIT', status: 'SAVED AS DRAFT', ancillaryStatus: '---', dateSubmitted: '2024-09-01' }
                // More initial data can be added here...
            ];
    
            const recordsPerPage = 5; // Number of records to show per page
            let currentPage = 0; // Current page index
    
            // Function to refresh the table based on selected filters
            function refreshTable() {
                const selectedType = $('#applicationType').val();
                const selectedStatus = $('#applicationStatus').val();
    
                const filteredData = initialData.filter(item => {
                    const typeMatch = (selectedType === 'all' || item.type === selectedType);
                    const statusMatch = (selectedStatus === 'all' || item.status === selectedStatus);
                    return typeMatch && statusMatch;
                });
    
                // Calculate the total number of pages
                const totalPages = Math.ceil(filteredData.length / recordsPerPage);
    
                // Update buttons based on current page
                $('#prevButton').prop('disabled', currentPage === 0);
                $('#nextButton').prop('disabled', currentPage === totalPages - 1);
    
                // Clear the table body
                $('#applicantTableBody').empty();
    
                // Get the data for the current page
                const start = currentPage * recordsPerPage;
                const end = start + recordsPerPage;
                const currentRecords = filteredData.slice(start, end);
    
                // Populate the table with the current page data
                currentRecords.forEach(item => {
                    $('#applicantTableBody').append(`
                        <tr>
                            <td>${item.trackingNumber}</td>
                            <td>${item.businessName}</td>
                            <td>${item.owner}</td>
                            <td>${item.type}</td>
                            <td>${item.status}</td>
                            <td>${item.ancillaryStatus}</td>
                            <td>${item.dateSubmitted}</td>
                            <td>
                                <button class="btn btn-info btn-sm view-btn" data-bs-toggle="modal" data-bs-target="#viewModal" 
                                    data-tracking="${item.trackingNumber}" data-business="${item.businessName}" 
                                    data-owner="${item.owner}" data-type="${item.type}" 
                                    data-status="${item.status}" data-ancillary="${item.ancillaryStatus}" 
                                    data-date="${item.dateSubmitted}">View</button>
                            </td>
                        </tr>
                    `);
                });
            }
    
            // Event listeners for dropdown changes
            $('#applicationType, #applicationStatus').change(function() {
                currentPage = 0; // Reset to the first page
                refreshTable(); // Refresh the table
            });
    
            // Pagination button functionality
            $('#prevButton').on('click', function () {
                if (currentPage > 0) {
                    currentPage--;
                    refreshTable();
                }
            });
    
            $('#nextButton').on('click', function () {
                const totalPages = Math.ceil(initialData.length / recordsPerPage);
                if (currentPage < totalPages - 1) {
                    currentPage++;
                    refreshTable();
                }
            });
    
            // Modal event listener to populate data
            $('#viewModal').on('show.bs.modal', function (event) {
                const button = $(event.relatedTarget); // Button that triggered the modal
                const tracking = button.data('tracking'); // Extract info from data-* attributes
                const business = button.data('business');
                const owner = button.data('owner');
                const type = button.data('type');
                const status = button.data('status');
                const ancillary = button.data('ancillary');
                const date = button.data('date');
    
                // Update the modal's content
                $('#modalTracking').text(tracking);
                $('#modalBusiness').text(business);
                $('#modalOwner').text(owner);
                $('#modalType').text(type);
                $('#modalStatus').text(status);
                $('#modalAncillary').text(ancillary);
                $('#modalDate').text(date);
            });
    
            // New JavaScript for filter search
            $('#searchButton').on('click', function() {
                const searchValue = $('#searchPermitNumber').val().toLowerCase();
                const rows = $('#applicantTableBody tr');
    
                rows.each(function() {
                    const permitNumber = $(this).find('td').eq(0).text().toLowerCase(); // Get the permit number from the first cell
                    if (permitNumber.includes(searchValue) || searchValue === '') {
                        $(this).show(); // Show row if it matches the search value
                    } else {
                        $(this).hide(); // Hide row if it doesn't match
                    }
                });
            });
        });
    </script>
    
</body>
</html>