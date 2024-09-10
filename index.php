<?php
session_start();
require_once 'db_connection.php';


?>


<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="Footer.Clean.icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="img/png" href="logo.png">
    <title>Homepage</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container-fluid"><a class="navbar-brand" href="index.php"><img class="navbar-brand-logo" alt="Logo" src="logo.png" width="110" height="110"><span class="brand-name">OSSM</span></a>
            <div class="d-flex align-items-center ms-auto">
                <?php
                // Check if user is logged in
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    echo '<span class="username">Hello, ' . $username . '</span>';
                }
                ?>
                <div class="dropdown-center ms-3"><a class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="Hamburger-Icon" src="Burger icon.png" alt="Burger Icon" width="36" height="36"></a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="account_profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="#">History Transaction</a></li>
                        <li><a class="dropdown-item logout-item" href="login.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
                </div>
            </div>
        </div>
    </nav>

    <div class="e-services col-xl-6 text-center mx-auto">
        <h2>E-SERVICES</h2>
    </div>

    <main>
        <main>
            <div class="services">
                <a href="#" data-bs-toggle="modal" data-bs-target="#violationModal">
                    <div class="service-card light odd">Violation Management</div>
                </a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#socialModal">
                    <div class="service-card dark even" >Social Services</div>
                </a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#educationalModal">
                    <div class="service-card light odd" >Educational Support</div>
                </a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#econModal">
                    <div class="service-card dark even" >Economic & Investment Support</div>
                </a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#healthModal">
                    <div class="service-card light odd" >Health Services</div>
                </a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#citizenModal">
                    <div class="service-card dark even" >Citizen ID</div>
                    
                </a>
            </div>
        </main>
    </main>

    <!-- Violation Management Modal -->
    <div class="modal fade" id="violationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="violationModalLabel" aria-hidden="true">
        <div class="modal-dialog violation-wide-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="violationModalLabel">Violation Management</h1>
                </div>
                <div class="modal-body">
                    <a href="ovr-payment.html">
                        <div class="inside-card mb-4">
                            <img src="VIOLATION.png" class="card-img-top" alt="OVR Icon">
                            <h5 class="card-title">OVR Payment</h5>
                        </div>
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Social Services Modal -->
    <div class="modal fade" id="socialModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="socialModalLabel" aria-hidden="true">
        <div class="modal-dialog social-wide-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="socialModalLabel">Social Services</h1>
                </div>
                <div class="modal-body">
                    <a href="senior-apply.html">
                        <div class="inside-card mb-4">
                            <img src="Senior.png" class="card-img-top" alt="Senior Icon">
                            <h5 class="card-title">Senior Citizen Application</h5>
                        </div>
                    </a>
                    <a href="pwd-apply.html">
                        <div class="inside-card mb-4">
                            <img src="PWD.png" class="card-img-top" alt="PWD Icon">
                            <h5 class="card-title">PWD Application</h5>
                        </div>
                    </a>
                    <a href="solo-apply.html">
                        <div class="inside-card mb-4">
                            <img src="Solo Parent.png" class="card-img-top" alt="Solo Parent Icon">
                            <h5 class="card-title">Solo Parent Application</h5>
                        </div>
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Educational Support Modal -->
    <div class="modal fade" id="educationalModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="educationalModalLabel" aria-hidden="true">
        <div class="modal-dialog educational-wide-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="educationalModalLabel">Educational Support</h1>
                </div>
                <div class="modal-body">
                    <a href="scholar-apply.html">
                        <div class="inside-card mb-4">
                            <img src="Scholar.png" class="card-img-top" alt="Scholar Icon">
                            <h5 class="card-title">Scholarship Application</h5>
                        </div>
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Economic & Investment Support Modal -->
    <div class="modal fade" id="econModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="econModalLabel" aria-hidden="true">
        <div class="modal-dialog economic-wide-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="econModalLabel">Economic & Investment Support</h1>
                </div>
                <div class="modal-body">
                    <a href="occupational-apply.html">
                        <div class="inside-card mb-4">
                            <img src="Occupational.png" class="card-img-top" alt="Occupational Icon">
                            <h5 class="card-title">Occupational Permit</h5>
                        </div>
                    </a>
                    <a href="business-apply.html">    
                        <div class="inside-card mb-4">
                            <img src="Business.png" class="card-img-top" alt="Business Icon">
                            <h5 class="card-title">Business Permit</h5>
                        </div>
                    </a>
                    <a href="tricpermit-apply.html">
                        <div class="inside-card mb-4">
                            <img src="Tricycle.png" class="card-img-top" alt="Tricycle Icon">
                            <h5 class="card-title">Tricycle Permit</h5>
                        </div>
                    </a>
                    <a href="rpt-apply.html">
                        <div class="inside-card mb-4">
                            <img src="RPT.png" class="card-img-top" alt="RPT Icon">
                            <h5 class="card-title">Real Property</h5>
                        </div>
                    </a>
                    <a href="market-apply.html">
                        <div class="inside-card mb-4">
                            <img src="Market.png" class="card-img-top" alt="Market Icon">
                            <h5 class="card-title">Market One-Stop Shop</h5>
                        </div>
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Health Services Modal -->
    <div class="modal fade" id="healthModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="healthModalLabel" aria-hidden="true">
        <div class="modal-dialog health-wide-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="healthModalLabel">Health Services</h1>
                </div>
                <div class="modal-body">
                <a href="medical.html">
                    <div class="inside-card mb-4">
                        <img src="_Medical.png" class="card-img-top" alt="Medical Icon">
                        <h5 class="card-title">Medical Records</h5>
                    </div>
                </a>
                <a href="death.html">
                    <div class="inside-card mb-4">
                        <img src="_death.png" class="card-img-top" alt="Death Icon">
                        <h5 class="card-title">Death Certificate</h5>
                    </div>
                </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Citizen ID Modal -->
        <div class="modal fade" id="citizenModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="citizenModalLabel" aria-hidden="true">
            <div class="modal-dialog citizen-wide-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="citizenModalLabel">Citizen ID</h1>
                    </div>
                    <div class="modal-body">
                    <a href="citizenID.html">
                        <div class="inside-card mb-4">
                            <img src="ID.png" class="card-img-top" alt="Citizen Icon">
                            <h5 class="card-title">Citizen ID</h5>
                        </div>
                    </a>
                    <a href="query.html">
                        <div class="inside-card mb-4">
                            <img src="Query.png" class="card-img-top" alt="Query Icon">
                            <h5 class="card-title">OSSM Query Portal</h5>
                        </div>
                    </a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
<br>
        <div class="Appoinment">
            <a href="Appointment_form.html"> <div class="appointment">Book an Appointment</div></a>
        </div>

<footer>
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3">
                <ul class="list-inline my-2">
                    <li class="list-inline-item"><a class="link-secondary" href="#">About usy</a></li>
                    <li class="list-inline-item"><a class="link-secondary" href="#">Services</a></li>
                    <li class="list-inline-item"><a class="link-secondary" href="#">Contact Us</a></li>
                </ul>
            <div class="col">
                <ul class="list-inline my-2">
                    <li class="list-inline-item me-4">
                        <div class="bs-icon-circle bs-icon-primary bs-icon"><svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                            </svg></div>
                    </li>
                    <li class="list-inline-item me-4">
                        <div class="bs-icon-circle bs-icon-primary bs-icon"><svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                            </svg></div>
                    </li>
                    <li class="list-inline-item">
                        <div class="bs-icon-circle bs-icon-primary bs-icon"><svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                            </svg></div>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul class="list-inline my-2">
                    <li class="list-inline-item"><a class="link-secondary" href="#">Privacy Policy</a></li>
                    <li class="list-inline-item"><a class="link-secondary" href="#">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
<?php
