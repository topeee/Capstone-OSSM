<?php
    error_reporting(E_ALL ^ E_WARNING);
    include('classes/staff.class.php');
    include('classes/resident.class.php');

    $userdetails = $bmis->get_userdata();
    $bmis->validate_admin();

    $rescount = $residentbmis->count_resident();
    $rescountm = $residentbmis->count_male_resident();
    $rescountf = $residentbmis->count_female_resident();
    $rescountfh = $residentbmis->count_head_resident();
    $rescountfm = $residentbmis->count_member_resident();
    $rescountvoter = $residentbmis->count_voters();
    $rescountsenior = $residentbmis->count_resident_senior();

    $staffcount = $staffbmis->count_staff();
    $staffcountm = $staffbmis->count_mstaff();
    $staffcountf = $staffbmis->count_fstaff();
    



?>

<style> 
.card-upper-space {
    margin-top: 35px;
}

.card-row-gap {
    margin-top: 3em;
}

h4 {
    font-weight: 400;
}

</style>


<?php 
    include('dashboard_sidebar_start.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->


<div class="row">
    <div class="col-md-4 mb-4">
        <h2 style="font-weight: 800;"> E-SERVICES </h2>
        <br>

        <!-- Violation Management Section -->
        <h4>Violation Management</h4>
        <div class="card border-left-primary shadow">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-10">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Ovr Search
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                        <br>
                        <a href="admn_table_totalres.php"> View Records </a>
                    </div>
                    <div class="col-md-2">
                        <span style="color: #4e73df;"> 
                            <i class="fas fa-search fa-2x text-dark"></i> <!-- Search Icon for Violation Management -->
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End of Violation Management Row -->

<!-- Add a New Row for Social Services -->
<div class="row">
    <div class="col-md-12 mb-4">
        <h4>Social Services</h4>
        <div class="row">
            <div class="col-md-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Senior Citizen Application
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-user-alt fa-2x text-dark"></i> <!-- Senior Citizen Icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    PWD Application
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-wheelchair fa-2x text-dark"></i> <!-- PWD Icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Solo Parent Application
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-users fa-2x text-dark"></i> <!-- Solo Parent Icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Social Services -->
    </div>
</div> <!-- End of Social Services Row -->

<!-- Add a New Row for Educational Support -->
<div class="row">
    <div class="col-md-12 mb-4">
        <h4>Educational Support</h4>
        <div class="row">
            <div class="col-md-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Scholarship Application
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-graduation-cap fa-2x text-dark"></i> <!-- Scholarship Icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Educational Support -->
    </div>
</div> <!-- End of Educational Support Row -->

<!-- Add a New Row for Economic & Investment Support -->
<div class="row">
    <div class="col-md-12 mb-4">
        <h4>Economic & Investment Support</h4>
        <div class="row">
            <div class="col-md-4 mb-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Occupational Permit
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-briefcase fa-2x text-dark"></i> <!-- Occupational Permit Icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Business Permit
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-store fa-2x text-dark"></i> <!-- Business Permit Icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Tricycle Permit
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-bicycle fa-2x text-dark"></i> <!-- Tricycle Permit Icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Real Property
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-home fa-2x text-dark"></i> <!-- Real Property Icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Market One Stop Shop
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-store fa-2x text-dark"></i> <!-- Store Icon for Market -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div> <!-- End Economic & Investment Support -->
    </div>
</div> <!-- End of Economic & Investment Support Row -->


<div class="row">
    <div class="col-md-12 mb-4">

        <h4>Health Services</h4>
        <div class="row">
            <div class="col-md-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Medical Records
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-file-medical fa-2x text-dark"></i> <!-- Medical Records Icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Death Certificate
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-file-medical-alt fa-2x text-dark"></i> <!-- Death Certificate Icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- End Health Services -->
    </div>
</div> <!-- End of Health Services Row -->


<div class="row">
    <div class="col-md-12">

        <h4>Citizen ID</h4>
        <div class="row">
            <div class="col-md-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Citizen ID
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-id-card fa-2x text-dark"></i> <!-- Citizen ID Icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">  
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-10">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    OSSM Query Portal
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark"><?= $rescount?></div>
                                <br>
                                <a href="admn_table_totalres.php"> View Records </a>
                            </div>
                            <div class="col-md-2">
                                <span style="color: #4e73df;"> 
                                    <i class="fas fa-search fa-2x text-dark"></i> <!-- OSSM Query Portal Icon -->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> <!-- End Citizen ID Section -->
    </div>
</div> <!-- End of Citizen ID Row -->





<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<br>
<br>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js" integrity="sha512-/HL24m2nmyI2+ccX+dSHphAHqLw60Oj5sK8jf59VWtFWZi9vx7jzoxbZmcBeeTeCUc7z1mTs3LfyXGuBU32t+w==" crossorigin="anonymous"></script>
<!-- responsive tags for screen compatibility -->
<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
<!-- custom css --> 
<link href="../BarangaySystem/customcss/regiformstyle.css" rel="stylesheet" type="text/css">
<!-- bootstrap css --> 
<link href="../BarangaySystem/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"> 
<!-- fontawesome icons -->
<script src="https://kit.fontawesome.com/67a9b7069e.js" crossorigin="anonymous"></script>
<script src="../BarangaySystem/bootstrap/js/bootstrap.bundle.js" type="text/javascript"> </script>
                
<?php 
    include('dashboard_sidebar_end.php');
?>