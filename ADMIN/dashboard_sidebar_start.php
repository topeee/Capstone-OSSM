<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barangay Services & Healthcare System</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admn_dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text">Administrator Dashboard </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="admn_dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Overview</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User Management
            </div>

            <!-- Barangay Staff CRUD -->
            <li class="nav-item">
                <a class="nav-link" href="userscontent.php">
                    <i class="fas fa-user-tie"></i>
                    <span>Users Overview</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading" data-toggle="collapse" data-target="#municipalServices" aria-expanded="false" aria-controls="municipalServices">
                <i class="fas fa-chevron-down" id="municipalServicesIcon"></i>
                Municipal Services
            </div>

            <!-- Collapsible Content for Municipal Services -->
            <div id="municipalServices" class="collapse">
                <li class="nav-item">
                    <a class="nav-link" href="admn_announcement_crud.php">
                    <i class="bi bi-calendar-date-fill"></i>
                        <span>Appointment</span>
                    </a>
                </li>

             

                <li class="nav-item">
                    <a class="nav-link" href="citizenID.php">
                    <i class="bi bi-person-vcard-fill"></i>
                        <span>Citizen ID eApplication</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="deathCertificate.php">
                    <i class="bi bi-file-earmark-diff"></i>
                        <span>Death Certificate</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="moss.php">
                    <i class="bi bi-shop-window"></i>
                        <span>Market One-Stop Shop</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="businesspermit.php">
                        <i class="bi bi-briefcase"></i>
                        <span>Business Permit Application</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="medicalrecords.php">
                    <i class="bi bi-prescription2"></i>
                        <span>Medical Records</span>
                    </a>
                </li>

                 <!-- Complain Blotter Report -->
            <li class="nav-item">
                <a class="nav-link" href="occupational.php">
                    <i class="bi bi-briefcase-fill"></i>
                    <span>Occupational Permit</span></a>
            </li>

            <!-- Complain Blotter Report -->
            <li class="nav-item">
                <a class="nav-link" href="ossm.php">
                <i class="bi bi-person-lines-fill"></i>
                    <span>OSSM Query Portal</span></a>
            </li>

            <!-- Complain Blotter Report -->
            <li class="nav-item">
                <a class="nav-link" href="ovrrr.php">
                <i class="bi bi-sign-stop-lights-fill"></i>
                    <span>OVR Payment</span></a>
            </li>

            <!-- Complain Blotter Report -->
            <li class="nav-item">
                <a class="nav-link" href="pwdbasic.php">
                <i class="bi bi-person-fill-down"></i>
                    <span>PWD Application</span></a>
            </li>

            <!-- Complain Blotter Report -->
            <li class="nav-item">
                <a class="nav-link" href="realproperty.php">
                <i class="bi bi-bank2"></i>
                    <span>Real Property Tax</span></a>
            </li>

            <!-- Complain Blotter Report -->
            <li class="nav-item">
                <a class="nav-link" href="scholarshipapp.php">
                <i class="bi bi-pencil-square"></i>
                    <span>Scholarship eApplication</span></a>
            </li>

            <!-- Complain Blotter Report -->
            <li class="nav-item">
                <a class="nav-link" href="seniorapp.php">
                <i class="bi bi-person-plus-fill"></i>
                    <span>Senior Citizen Application</span></a>
            </li>
            
            <!-- Complain Blotter Report -->
            <li class="nav-item">
                <a class="nav-link" href="soloparent.php">
                <i class="bi bi-people-fill"></i>
                    <span>Solo Parent Application</span></a>
            </li>

            <!-- Complain Blotter Report -->
            <li class="nav-item">
                <a class="nav-link" href="trycapp.php">
                <i class="bi bi-bicycle"></i>
                    <span>Tricycle Permit Application</span></a>
            </li>

                <!-- Other services as needed -->
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="index.php" id="userDropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                                </a>
                            </li>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                  <!-- jQuery and Bootstrap JS (required for collapse to work) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS to change the icon on collapse -->
    <script>
        $('#municipalServices').on('show.bs.collapse', function () {
            $('#municipalServicesIcon').removeClass('fa-chevron-down').addClass('fa-chevron-up');
        });

        $('#municipalServices').on('hide.bs.collapse', function () {
            $('#municipalServicesIcon').removeClass('fa-chevron-up').addClass('fa-chevron-down');
        });
    </script>  
     
                <!-- End of Topbar -->