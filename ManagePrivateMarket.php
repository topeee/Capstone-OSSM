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
    <title>MARKET OPERATOR ACCOUNT</title>

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
        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">MARKET OPERATOR ACCOUNT</h3>

                    <br><br>

                    <div class="table-responsive">
                        <table id="market-table" class="table table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Business Permit No.</th>
                                    <th scope="col">Name of Market</th>
                                    <th scope="col">Type of Market</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Surname</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="market-table-body">
                                <tr>
                                    <td>654321</td>
                                    <td>City Market</td>
                                    <td>Open</td>
                                    <td>Emily</td>
                                    <td>Johnson</td>
                                    <td>PENDING</td>
                                    <td>
                                        <button class="btn btn-info btn-sm detail-view-btn" data-bs-toggle="modal" data-bs-target="#detailsModal" data-permit="654321" data-market="City Market" data-market-type="Open" data-firstname="Emily" data-surname="Johnson" data-status="PENDING">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>777777</td>
                                    <td>Downtown Market</td>
                                    <td>Open</td>
                                    <td>Michael</td>
                                    <td>Brown</td>
                                    <td>COMPLETED</td>
                                    <td>
                                        <button class="btn btn-info btn-sm detail-view-btn" data-bs-toggle="modal" data-bs-target="#detailsModal" data-permit="777777" data-market="Downtown Market" data-market-type="Open" data-firstname="Michael" data-surname="Brown" data-status="COMPLETED">View</button>
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

        <!-- Modal for Viewing Details -->
        <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailsModalLabel">View Application Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Business Permit No.:</strong> <span id="modalPermitNo"></span></p>
                        <p><strong>Name of Market:</strong> <span id="modalMarketNameDetail"></span></p>
                        <p><strong>Type of Market:</strong> <span id="modalMarketType"></span></p>
                        <p><strong>First Name:</strong> <span id="modalFirstNameDetail"></span></p>
                        <p><strong>Surname:</strong> <span id="modalSurnameDetail"></span></p>
                        <p><strong>Status:</strong> <span id="modalStatusDetail"></span></p>
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
            $('.detail-view-btn').on('click', function () {
                $('#modalPermitNo').text($(this).data('permit'));
                $('#modalMarketNameDetail').text($(this).data('market'));
                $('#modalMarketType').text($(this).data('market-type'));
                $('#modalFirstNameDetail').text($(this).data('firstname'));
                $('#modalSurnameDetail').text($(this).data('surname'));
                $('#modalStatusDetail').text($(this).data('status'));
            });
        });
    </script>
</body>

</html>