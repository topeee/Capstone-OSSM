

<?php
session_start(); // Start the session
include 'header.html';
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
    <title>VENDOR ACCOUNT</title>

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
                    <h3 class="card-title text-center">VENDOR ACCOUNT</h3>

                    <!-- Added Search Fields and Button -->
                    <div class="row mb-3 align-items-end">
                        <div class="col-md-4">
                            <label for="bpNo" class="form-label">Business Permit No.</label>
                            <input type="text" class="form-control" id="bpNo" placeholder="Enter Business Permit No.">
                        </div>
                        <div class="col-md-4">
                            <label for="marketName" class="form-label">Name of Market:</label>
                            <input type="text" class="form-control" id="marketName" placeholder="Enter Name of Market">
                        </div>
                        <div class="col-md-4">
                            <button id="searchButton" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table id="vendor-table" class="table table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Business Permit No.</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Name of Market</th>
                                    <th scope="col">Market Type</th>
                                    <th scope="col">Stall Number</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="vendor-table-body">
                                <tr>
                                    <td>654321</td>
                                    <td>Emily</td>
                                    <td>Johnson</td>
                                    <td>City Market</td>
                                    <td>Open</td>
                                    <td>01</td>
                                    <td>A</td>
                                    <td>
                                        <button class="btn btn-info btn-sm detail-view-btn" data-bs-toggle="modal" data-bs-target="#vendorDetailsModal" data-permit="654321" data-firstname="Emily" data-surname="Johnson" data-market="City Market" data-market-type="Open" data-stall="01" data-section="A">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>777777</td>
                                    <td>Michael</td>
                                    <td>Brown</td>
                                    <td>Downtown Market</td>
                                    <td>Open</td>
                                    <td>02</td>
                                    <td>B</td>
                                    <td>
                                        <button class="btn btn-info btn-sm detail-view-btn" data-bs-toggle="modal" data-bs-target="#vendorDetailsModal" data-permit="777777" data-firstname="Michael" data-surname="Brown" data-market="Downtown Market" data-market-type="Open" data-stall="02" data-section="B">View</button>
                                    </td>
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

        <!-- Modal for Viewing Vendor Details -->
        <div class="modal fade" id="vendorDetailsModal" tabindex="-1" aria-labelledby="vendorDetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="vendorDetailsModalLabel">View Application Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Business Permit No.:</strong> <span id="modalVendorPermitNo"></span></p>
                        <p><strong>First Name:</strong> <span id="modalVendorFirstNameDetail"></span></p>
                        <p><strong>Last Name:</strong> <span id="modalVendorSurnameDetail"></span></p>
                        <p><strong>Market Name:</strong> <span id="modalVendorMarketNameDetail"></span></p>
                        <p><strong>Market Type:</strong> <span id="modalVendorMarketType"></span></p>
                        <p><strong>Stall Number:</strong> <span id="modalVendorStallNumber"></span></p>
                        <p><strong>Section:</strong> <span id="modalVendorSection"></span></p>
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
                        <li class="list-inline-item"><a class="link-secondary" href="#"><img class="logo" src="facebook_logo.png" alt="Facebook Logo" width="36" height="36"></a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#"><img class="logo" src="Twitter_Logo.png" alt="Twitter Logo" width="36" height="36"></a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#"><img class="logo" src="Instagram_logo.png" alt="Instagram Logo" width="36" height="36"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function () {
            $('.detail-view-btn').click(function () {
                const permitNo = $(this).data('permit');
                const firstName = $(this).data('firstname');
                const surname = $(this).data('surname');
                const marketName = $(this).data('market');
                const marketType = $(this).data('market-type');
                const stallNumber = $(this).data('stall');
                const section = $(this).data('section');
               

                $('#modalVendorPermitNo').text(permitNo);
                $('#modalVendorFirstNameDetail').text(firstName);
                $('#modalVendorSurnameDetail').text(surname);
                $('#modalVendorMarketNameDetail').text(marketName);
                $('#modalVendorMarketType').text(marketType);
                $('#modalVendorStallNumber').text(stallNumber);
                $('#modalVendorSection').text(section);
          
            });
        });
    </script>

</body>

</html>
