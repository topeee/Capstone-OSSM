<?php
session_start();
include 'header.php';



?>
<!DOCTYPE html>
<html lang="en">
    

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="Footer.Clean.icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="img/png" href="logo.png">
    <title>Homepage</title>

    <style>
        .economic-wide-modal {
        max-width: 90%; /* Adjust percentage to fit your screen size */
        margin: auto;
    }


/* Start Fixed Appointment Button */
#fixedAppointment a {
    position: fixed;
    bottom: 130px; /* Position near the bottom */
    right: 0px; /* Icon visible on screen */
    transition: 0.3s;
    padding: 15px;
    width: 55px; /* Width to show only the icon */
    text-decoration: none;
    font-size: 20px;
    color: white;
    background-color: #002B5C; /* Customize background color */
    border-radius: 5px 0 0 5px;
    overflow: hidden; /* Hide text initially */
    white-space: nowrap; /* Prevent text wrapping */

}

#fixedAppointment a:hover {
    width: 270px; /* Expand to show text on hover */
}

#fixedAppointment a i {
    font-size: 27px; /* Icon size */
    margin-right: 10px; /* Space between icon and text */
}

#fixedAppointment a .text {
    opacity: 0; /* Hide text initially */
    transition: opacity 0.3s ease; /* Smooth fade-in for text */
}

#fixedAppointment a:hover .text {
    opacity: 1; /* Show text on hover */
}


/* Hide fixed button on smaller screens */
@media (max-width: 768px) {
  #fixedAppointment {
    display: none;
  }
}



    </style>
</head>

<body>
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
        <div class="modal-dialog violation-wide-modal" style="padding-left: 30px;"> 
        <div class="modal-content" style="margin-top: 150px; width: 400px;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="violationModalLabel">Violation Management</h1>
                </div>
                <div class="modal-body" style="margin-top: 20px;">
                    <a href="ovr.php">
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
            <div class="modal-content" style="margin-top: 150px;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="socialModalLabel">Social Services</h1>
                </div>
                <div class="modal-body" style="margin-top: 20px;">
                    <a href="Senior Citizen Application Form.php">
                        <div class="inside-card mb-4">
                            <img src="Senior.png" class="card-img-top" alt="Senior Icon">
                            <h5 class="card-title">Senior Citizen Application</h5>
                        </div>
                    </a>
                    <a href="PWD-landing-page.php">
                        <div class="inside-card mb-4">
                            <img src="PWD.png" class="card-img-top" alt="PWD Icon">
                            <h5 class="card-title">PWD Application</h5>
                        </div>
                    </a>
                    <a href="Solo Parent Landing Page.php">
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
            <div class="modal-content" style="margin-top: 150px;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="educationalModalLabel">Educational Support</h1>
                </div>
                <div class="modal-body" style="margin-top: 20px;">
                    <a href="Scholarship Application Landing Page.php">
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
<!-- Economic & Investment Support Modal -->
<div class="modal fade" id="econModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="econModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="econModalLabel">Economic & Investment Support</h1>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-wrap justify-content-around">
                    <div class="p-3">
                        <a href="Occupational permit.php" class="text-decoration-none">
                            <div class="inside-card text-center">
                                <img src="Occupational.png" class="card-img-top img-fluid" alt="Occupational Icon">
                                <h5 class="card-title">Occupational Permit</h5>
                            </div>
                        </a>
                    </div>
                    <div class="p-3">
                        <a href="businessPermitType.php" class="text-decoration-none">
                            <div class="inside-card text-center">
                                <img src="Business.png" class="card-img-top img-fluid" alt="Business Icon">
                                <h5 class="card-title">Business Permit</h5>
                            </div>
                        </a>
                    </div>
                    <div class="p-3">
                        <a href="Tricycle Permit application.php" class="text-decoration-none">
                            <div class="inside-card text-center">
                                <img src="Tricycle.png" class="card-img-top img-fluid" alt="Tricycle Icon">
                                <h5 class="card-title">Tricycle Permit</h5>
                            </div>
                        </a>
                    </div>
                    <div class="p-3">
                        <a href="RPT.html" class="text-decoration-none">
                            <div class="inside-card text-center">
                                <img src="RPT.png" class="card-img-top img-fluid" alt="RPT Icon">
                                <h5 class="card-title">Real Property</h5>
                            </div>
                        </a>
                    </div>
                    <div class="p-3">
                        <a href="MOSS.php" class="text-decoration-none">
                            <div class="inside-card text-center">
                                <img src="Market.png" class="card-img-top img-fluid" alt="Market Icon">
                                <h5 class="card-title">Market One-Stop Shop</h5>
                            </div>
                        </a>
                    </div>
                </div>
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
            <div class="modal-content" style="margin-top: 150px;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="healthModalLabel">Health Services</h1>
                </div>
                <div class="modal-body" style="margin-top: 20px;">
                <a href="Medical Record Form.php">
                    <div class="inside-card mb-4">
                        <img src="_Medical.png" class="card-img-top" alt="Medical Icon">
                        <h5 class="card-title">Medical Records</h5>
                    </div>
                </a>
                <a href="Death Certificate.php">
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
                <div class="modal-content" style="margin-top: 150px;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="citizenModalLabel">Citizen ID</h1>
                    </div>
                    <div class="modal-body" style="margin-top: 20px;">
                    <a href="Citizen-ID-Landing-Page.php">
                        <div class="inside-card mb-4">
                            <img src="ID.png" class="card-img-top" alt="Citizen Icon">
                            <h5 class="card-title">Citizen ID</h5>
                        </div>
                    </a>
                    <a href="Query.php">
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

            
    <!-- Fixed Menu for Book an Appointment -->
        <div id="fixedAppointment">
            <a href="Appointment_form.php" class="appointment">
            <i class="bi bi-calendar-week"></i> <span class="text"> Book an Appointment</span>
            </a>
        </div>
            

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
</body>

</html>
