<?php
include 'db_connection.php';
session_start();

include 'header.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $civilstatus = $_POST['civilstatus'];
    $dob = $_POST['dob'];
    $tele = $_POST['tele'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $workPhone = $_POST['workPhone'];
    $SSS = $_POST['SSS'];
    $GSIS = $_POST['GSIS'];
    $PhilHealth = $_POST['PhilHealth'];
    $PAGIBIG = $_POST['PAGIBIG'];
    $guardianFname = $_POST['guardianFname'] ?? null;
    $guardianLname = $_POST['guardianLname'] ?? null;
    $guardianMname = $_POST['guardianMname'] ?? null;
    $guardianNumber = $_POST['guardianNumber'] ?? null;
    $careFname = $_POST['careFname'] ?? null;
    $careLname = $_POST['careLname'] ?? null;
    $careMname = $_POST['careMname'] ?? null;
    $careNumber = $_POST['careNumber'] ?? null;
    $ngoOrgAff = $_POST['ngoOrgAff'];
    $ngoContact = $_POST['ngoContact'];
    $ngoOfficeAddress = $_POST['ngoOfficeAddress'];
    $ngoTelNo = $_POST['ngoTelNo'];
    $pwdOrgAff = $_POST['pwdOrgAff'];
    $pwdOrgContact = $_POST['pwdOrgContact'];
    $pwdOrgOffice = $_POST['pwdOrgOffice'];
    $pwdOrgTelNo = $_POST['pwdOrgTelNo'];
    $civpolAff = $_POST['civpolAff'];
    $civpolContact = $_POST['civpolContact'];
    $civpolOfficeAddress = $_POST['civpolOfficeAddress'];
    $civpolTelNo = $_POST['civpolTelNo'];
    // Validate required fields
    $requiredFields = [
        'firstName', 'middleName', 'lastName', 'gender', 'civilstatus', 'dob', 'tele', 'phone', 'email', 'workPhone', 
        'PWDId', 'SSS', 'GSIS', 'PhilHealth', 'PAGIBIG', 'ngoOrgAff', 'ngoContact', 'ngoOfficeAddress', 'ngoTelNo', 
        'pwdOrgAff', 'pwdOrgContact', 'pwdOrgOffice', 'pwdOrgTelNo', 'civpolAff', 'civpolContact', 'civpolOfficeAddress', 'civpolTelNo'
    ];

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            die("Error: The field $field is required.");
        }
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO pwd_applications (first_name, middle_name, last_name, gender, civil_status, dob, tele, phone, email, work_phone, PWDId, PWDIdNumber, PWDethnicGroup, pwdDiagnosis, education, refNo, SSS, GSIS, PhilHealth, PAGIBIG, guardian_fname, guardian_lname, guardian_mname, guardian_number, care_fname, care_lname, care_mname, care_number, ngo_org_aff, ngo_contact, ngo_office_address, ngo_tel_no, pwd_org_aff, pwd_org_contact, pwd_org_office, pwd_org_tel_no, civpol_aff, civpol_contact, civpol_office_address, civpol_tel_no) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssssssssssssssssssssssssssssss", $firstName, $middleName, $lastName, $gender, $civilstatus, $dob, $tele, $phone, $email, $workPhone, $PWDId, $PWDIdNumber, $PWDethnicGroup, $pwdDiagnosis, $education, $refNo, $SSS, $GSIS, $PhilHealth, $PAGIBIG, $guardianFname, $guardianLname, $guardianMname, $guardianNumber, $careFname, $careLname, $careMname, $careNumber, $ngoOrgAff, $ngoContact, $ngoOfficeAddress, $ngoTelNo, $pwdOrgAff, $pwdOrgContact, $pwdOrgOffice, $pwdOrgTelNo, $civpolAff, $civpolContact, $civpolOfficeAddress, $civpolTelNo);
    $stmt->execute();
    $stmt->close();
}

?>
<!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <link rel="stylesheet" href="bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap.min.js">
      <link rel="stylesheet" href="Footer.Clean.icons.css">
      <link rel="stylesheet" href="pwd app.css">
      <link rel="icon" type="img/png" href="logo.png">
      <title>PWD Application Form</title>

    </head>
    <body>
      <nav class="navbar navbar-dark navbar-expand-lg " style="display: none;" >
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img class="navbar-brand-logo" alt="Logo" src="logo.png" width="110" height="110">
            <span class="brand-name">OSSM</span>
          </a>
          <div class="d-flex align-items-center ms-auto">
            <span class="username">Hello, Username</span>
            <div class="dropdown-center ms-3">
              <a class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="Hamburger-Icon" src="Burger icon.png" alt="Burger Icon" width="36" height="36">
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="account_profile.html">Profile</a></li>
                <li><a class="dropdown-item" href="#">History Transaction</a></li>
                <li><a class="dropdown-item logout-item" href="login.html">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

    <main class="p-4 mx-auto" style="width: 70%; height: auto; background-color: rgb(227, 249, 255);">
      <div class="container">
        <div class="row">
            <!-- Button to toggle progress sidebar -->
            <button id="progress-button" class="btn btn-primary mb-3 d-md-none">Toggle Progress</button>
    
            <!-- Sidebar -->
            <div id="progress-menu" class="col-md-3 progress-sidebar hidden-xs" style="background-color: rgb(227, 249, 255);">
                <h4 class="text-center">Progress</h4>
                <ul>
                    <li class="progress-item active" data-target="basic-information-section">
                        <a href="#">
                            Basic Information
                            <i class="bi bi-check-square-fill"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="sectoral-section">
                        <a href="#">
                            Sectoral Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="government-numbers">
                        <a href="#">
                            Government Numbers
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="contact-information">
                        <a href="#">
                            Contact Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="affiliation">
                        <a href="#">
                            Affiliation
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="summarySection">
                        <a href="#">
                            Summary of Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                </ul>
            </div>
    
            <!-- Main form -->
            <div class="col-md-9">
                <!-- Basic Information Section -->
                <div class="form-section" id="basic-information-section">
                    <h4>Basic Information</h4>
                    <p class="alert alert-info">
                        A separate application must be filed for each person seeking assistance. This is for PWD Assistance Only.
                    </p>
    
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" >
                            </div>
                            <div class="col-md-2">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" placeholder="Middle Name" >
                            </div>
                            <div class="col-md-4">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" >
                            </div>
                            <div class="col-md-2">
                                <label for="middleName" class="form-label">Suffix</label>
                                <select class="form-select" id="suffix" >
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="Jr">Jr</option>
                                    <option value="Sr">Sr</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" onchange="genderChange()">
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="civilstatus" class="form-label">Civil Status</label>
                                <select class="form-select" id="civilstatus" onchange="civilStatusChange()">
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="Single">Single</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Cohabitation">Cohabitation (Live-In)</option>
                                    <option value="Married">Married</option>
                                    <option value="Widow/er">Widow/er</option>
                                </select>
                            </div>                            
                            <div class="col-md-4">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" >
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tele" class="form-label">Landline Number</label>
                                <input type="tel" class="form-control" id="tele" placeholder="(916) 345-6783" >
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="(+63) 0923-345-6783" >
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" >
                            </div>
                        </div>
    
                        <div class="col-lg-offset-0 col-lg-12 col-xs-12"> 
                            <br><br>
                              <i class="bi bi-info-circle-fill"></i>       
                                If you are also PWD, you may also apply here: <a href="*">PWD Application</a>. If not, Continue to Sectoral Information.
                          </div>
                    </form>
                </div>
    
                <!-- Sectoral Information Section -->
                <div class="form-section" id="sectoral-section" style="display: none;">
                    <form>
                        <h4>Sectoral Information</h4>
                        <p class="fs-4">Do you have an existing <strong> PWD ID number? </strong></p>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="PWDId" id="yesOption" value="yes" >
                                    <label class="form-check-label" for="yesOption">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="PWDId" id="noOption" value="no" >
                                    <label class="form-check-label" for="noOption">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
    
                        <div id="yesFields" style="display: none;">

                            <div class="row mb-3">  
                                <div class="col-md-6">
                                    <label for="PWDIdNumber" class="form-label">PERSON WITH DISABILITY NUMBER</label>
                                    <input type="text" class="form-control" id="PWDIdNumber" placeholder="(RR-PPMM-BBB-NNNNNNN)" >
                                </div>
                                <div class="col-md-6">
                                    <label for="idImageUpload" class="form-label">DATE APPLIED</label>
                                    <input type="date" class="form-control" id="PWDidImageUpload" >
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="idImageUpload" class="form-label">Upload PWD ID</label>
                                <input type="file" class="form-control" id="PWDidImageUpload" >
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="disabilityType" class="form-label">Type of Disability</label>
                                    <select class="form-select" id="disabilityType" onchange="disabilityTypeChange()">
                                        <option value="" disabled selected>Choose...</option>
                                        <option value="Deaf or Hard of Hearing Disability">Deaf or Hard of Hearing Disability</option>
                                        <option value="Psychosocial Disability">Psychosocial Disability</option>
                                        <option value="Intellectual Disability">Intellectual Disability</option>
                                        <option value="Speech and Language Impairment">Speech and Language Impairment</option>
                                        <option value="Learning Disability">Learning Disability</option>
                                        <option value="Visual Disability">Visual Disability</option>
                                        <option value="Mental Disability">Mental Disability</option>
                                        <option value="Cancer (RA 11215)">Cancer (RA 11215)</option>
                                        <option value="Physical Disability (Orthopedic)">Physical Disability (Orthopedic)</option>
                                        <option value="Rare Disease (RA 10747)">Rare Disease (RA 10747)</option>
                                    </select>
                                </div>
        
                                <br>
        
                                <div class="col-md-6">
                                    <label for="needs" class="form-label">Cause Of Disabilty</label>
                                    <select class="form-select" id="causeOfDisability" onchange="causeOfDisabilityChange()">
                                        <option value="" disabled selected>Choose...</option>
                                        <option value="Congenital/Inborn">Congenital/Inborn</option>
                                        <option value="Autism">Autism</option>
                                        <option value="ADHD">ADHD</option>
                                        <option value="Cerebral Palsy">Cerebral Palsy</option>
                                        <option value="Down Syndrome">Down Syndrome</option>
                                        <option value="Others, Specify (Congenital)">Others, Specify (Congenital)</option>
                                        <option value="Acquired">Acquired</option>
                                        <option value="Chronic Illness">Chronic Illness</option>
                                        <option value="Cerebral Palsy (Acquired)">Cerebral Palsy (Acquired)</option>
                                        <option value="Injury">Injury</option>
                                        <option value="Others, Specify (Acquired)">Others, Specify (Acquired)</option>
                                    </select>
                                </div>  
                                
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="houseNoStreet" class="form-label">House No. and Street</label>
                                        <input type="text" class="form-control" id="houseNoStreet" placeholder="House No. and Street" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="barangay" class="form-label">Barangay</label>
                                        <input type="text" class="form-control" id="barangay" placeholder="Barangay" >
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div id="noFields" style="display: none;">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="pwdDiagnosis" class="form-label">Diagnosis</label>
                                    <input type="text" class="form-control" id="pwdDiagnosis" placeholder="Describe Diagnosis" >
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="houseNoStreet" class="form-label">House No. and Street</label>
                                    <input type="text" class="form-control" id="houseNoStreet" placeholder="House No. and Street" >
                                </div>
                                <div class="col-md-6">
                                    <label for="barangay" class="form-label">Barangay</label>
                                    <input type="text" class="form-control" id="barangay" placeholder="Barangay" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="problems" class="form-label">Type of Disabilty</label>
                                    <select class="form-select" id="disabilityType" onchange="disabilityTypeChange()">
                                        <option value="" disabled selected>Choose...</option>
                                        <option value="Deaf or Hard of Hearing Disability">Deaf or Hard of Hearing Disability</option>
                                        <option value="Psychosocial Disability">Psychosocial Disability</option>
                                        <option value="Intellectual Disability">Intellectual Disability</option>
                                        <option value="Speech and Language Impairment">Speech and Language Impairment</option>
                                        <option value="Learning Disability">Learning Disability</option>
                                        <option value="Visual Disability">Visual Disability</option>
                                        <option value="Mental Disability">Mental Disability</option>
                                        <option value="Cancer (RA 11215)">Cancer (RA 11215)</option>
                                        <option value="Physical Disability (Orthopedic)">Physical Disability (Orthopedic)</option>
                                        <option value="Rare Disease (RA 10747)">Rare Disease (RA 10747)</option>
                                    </select>
                                </div>
        
                                <br>
        
                                <div class="col-md-6">
                                    <label for="needs" class="form-label">Cause Of Disabilty</label>
                                    <select class="form-select" id="causeOfDisability" onchange="causeOfDisabilityChange()">
                                        <option value="" disabled selected>Choose...</option>
                                        <option value="Congenital/Inborn">Congenital/Inborn</option>
                                        <option value="Autism">Autism</option>
                                        <option value="ADHD">ADHD</option>
                                        <option value="Cerebral Palsy">Cerebral Palsy</option>
                                        <option value="Down Syndrome">Down Syndrome</option>
                                        <option value="Others, Specify (Congenital)">Others, Specify (Congenital)</option>
                                        <option value="Acquired">Acquired</option>
                                        <option value="Chronic Illness">Chronic Illness</option>
                                        <option value="Cerebral Palsy (Acquired)">Cerebral Palsy (Acquired)</option>
                                        <option value="Injury">Injury</option>
                                        <option value="Others, Specify (Acquired)">Others, Specify (Acquired)</option>
                                    </select>
                                </div>    
                            </div>
                        </div>
                    </form>
                </div>
    
                    <div>
                        <!-- Family Composition Section -->
                        <div class="form-section" id="government-numbers" style="display: none;">
                            <form>    
                                <h4>Government Numbers</h4>

                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="educationAttainment" class="form-label">Educational Attainment</label>
                                        <select class="form-select" id="educationAttainment" onchange="educationAttainmentChange()">
                                            <option value="" disabled selected>Choose...</option>
                                            <option value="None">None</option>
                                            <option value="Kindergarten">Kindergarten</option>
                                            <option value="Elementary">Elementary</option>
                                            <option value="Junior High School">Junior High School</option>
                                            <option value="Senior High School">Senior High School</option>
                                            <option value="College">College</option>
                                            <option value="Vocational">Vocational</option>
                                            <option value="Post Graduate">Post Graduate</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                            <label for="employmentStatus" class="form-label">Status of Employment</label>
                                            <select class="form-select" id="employmentStatus" onchange="statusOfEmploymentChange()">
                                                <option value="" disabled selected>Choose...</option>
                                                <option value="employed">Employed</option>
                                                <option value="unemployed">Unemployed</option>
                                                <option value="selfEmployed">Self-Employed</option>
                                            </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="employmentType" class="form-label">Types of Employment</label>
                                        <select class="form-select" id="employmentType" onchange="typesOfEmploymentChange()">
                                            <option value="" disabled selected>Choose...</option>
                                            <option value="permanent">Permanent/Regular</option>
                                            <option value="seasonal">Seasonal</option>
                                            <option value="casual">Casual</option>
                                            <option value="emergency">Emergency</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="employmentCategory" class="form-label">Category of Employment</label>
                                        <select class="form-select" id="employmentCategory" onchange="categoryOfEmploymentChange()">
                                            <option value="" disabled selected>Choose...</option>
                                            <option value="government">Government</option>
                                            <option value="private">Private</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <select class="form-select" id="occupation" onchange="occupationChange()">
                                            <option value="" disabled selected>Choose...</option>
                                            <option value="managers">Managers</option>
                                            <option value="professionals">Professionals</option>
                                            <option value="technicians">Technicians And Associate Professionals</option>
                                            <option value="clerical">Clerical Support Workers</option>
                                            <option value="service">Service And Sales Workers</option>
                                            <option value="agricultural">Skilled Agricultural, Forestry And Fishery Workers</option>
                                            <option value="craft">Craft And Related Trade Workers</option>
                                            <option value="machine">Plant And Machine Operators And Assemblers</option>
                                            <option value="elementary">Elementary Occupations</option>
                                            <option value="armedForces">Armed Forces Occupations</option>
                                            <option value="others">Others, Specify:</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="occupation" class="form-label">Others</label>
                                        <input type="text" class="form-control" id="occupation" placeholder="Specify" >
                                    </div>
                                </div>

<hr style="margin-top: 20px; margin-bottom: 20px;">

                                <div class="row mb-3">
                                    <h5>Organization Information</h5>
                                    <div class="col-md-6">
                                        <label for="orgAffiliated" class="form-label">Organization Affiliated</label>
                                        <input type="text" class="form-control" id="orgAffiliated" placeholder="Organization Affiliated" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contactPerson" class="form-label">Contact Person</label>
                                        <input type="text" class="form-control" id="contactPerson" placeholder="Contact Person" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="officeAddress" class="form-label">Office Address</label>
                                        <input type="text" class="form-control" id="officeAddress" placeholder="Office Address" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telNos" class="form-label">Tel. Nos.</label>
                                        <input type="text" class="form-control" id="telNos" placeholder="Tel. Nos." >
                                    </div>
                                </div>
<hr style="margin-top: 20px; margin-bottom: 20px;">
                                
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="SSS" class="form-label">SSS Number/UMID Number</label>
                                        <input type="text" class="form-control" id="SSS" placeholder="SSS Number" >
                                    </div>
                                    <div class="col-md-2">
                                        <label for="GSIS" class="form-label">GSIS Number</label>
                                        <input type="text" class="form-control" id="GSIS" placeholder="GSIS Number" >
                                    </div>
                                    <div class="col-md-2">
                                        <label for="PhilHealth" class="form-label">PhilHealth Number</label>
                                        <input type="text" class="form-control" id="PhilHealth" placeholder="PhilHealth Number" >
                                    </div>
                                    <div class="col-md-2">
                                        <label for="PAGIBIG" class="form-label">PAGIBIG Number</label>
                                        <input type="text" class="form-control" id="PAGIBIG" placeholder="PAGIBIG Number" >
                                    </div>
                                    <div class="col-md-2">
                                        <label for="PSN" class="form-label">PSN Number</label>
                                        <input type="text" class="form-control" id="PSN" placeholder="PSN Number" >
                                    </div>
                                </div>
                                
                            </form>    
                        </div>
                    </div>

                    <div class="form-section" id="contact-information" style="display: none;">
                        <form>    
                            <h4>Contact Information</h4>
                            <!-- Father's Name Section -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="fatherLastName" class="form-label">Father's Last Name</label>
                                    <input type="text" class="form-control" id="fatherLastName" placeholder="Father's Last Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="fatherFirstName" class="form-label">Father's First Name</label>
                                    <input type="text" class="form-control" id="fatherFirstName" placeholder="Father's First Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="fatherMiddleName" class="form-label">Father's Middle Name</label>
                                    <input type="text" class="form-control" id="fatherMiddleName" placeholder="Father's Middle Name">
                                </div>
                            </div>

                            <!-- Mother's Name Section -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="motherLastName" class="form-label">Mother's Last Name</label>
                                    <input type="text" class="form-control" id="motherLastName" placeholder="Mother's Last Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="motherFirstName" class="form-label">Mother's First Name</label>
                                    <input type="text" class="form-control" id="motherFirstName" placeholder="Mother's First Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="motherMiddleName" class="form-label">Mother's Middle Name</label>
                                    <input type="text" class="form-control" id="motherMiddleName" placeholder="Mother's Middle Name">
                                </div>
                            </div>

                            <!-- Guardian (Emergency Contact) Section -->
                            <div class="row mb-3">
                                <h5>For in case of emergency: Guardian</h5>
                                <div class="col-md-4">
                                    <label for="guardianLastName" class="form-label">Guardian Last Name</label>
                                    <input type="text" class="form-control" id="guardianLastName" placeholder="Guardian Last Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="guardianFirstName" class="form-label">Guardian First Name</label>
                                    <input type="text" class="form-control" id="guardianFirstName" placeholder="Guardian First Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="guardianMiddleName" class="form-label">Guardian Middle Name</label>
                                    <input type="text" class="form-control" id="guardianMiddleName" placeholder="Guardian Middle Name">
                                </div>
                            </div>

                            <h5>Accomplished By:</h5>
                            <div class="row mb-3" style="margin-left: 20px ;">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="accomplishedBy" value="applicant" id="applicantOption" onchange="accomplishedByChange()">
                                    <label class="form-check-label" for="applicantOption">APPLICANT</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="accomplishedBy" value="guardian" id="guardianOption" onchange="accomplishedByChange()">
                                    <label class="form-check-label" for="guardianOption">GUARDIAN</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="accomplishedBy" value="representative" id="representativeOption" onchange="accomplishedByChange()">
                                    <label class="form-check-label" for="representativeOption">REPRESENTATIVE</label>
                                </div>
                            </div>
                            
                            <!-- Conditional Fields for Each Option -->
                            <div id="applicantFields" class="row mb-3" style="display: none;">
                                <div class="col-md-4">
                                    <label for="applicantLastName" class="form-label">Applicant Last Name</label>
                                    <input type="text" class="form-control" id="applicantLastName" placeholder="Applicant Last Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="applicantFirstName" class="form-label">Applicant First Name</label>
                                    <input type="text" class="form-control" id="applicantFirstName" placeholder="Applicant First Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="applicantMiddleName" class="form-label">Applicant Middle Name</label>
                                    <input type="text" class="form-control" id="applicantMiddleName" placeholder="Applicant Middle Name">
                                </div>
                            </div>
                            
                            <div id="guardianFields" class="row mb-3" style="display: none;">
                                <div class="col-md-4">
                                    <label for="guardiansLastName" class="form-label">Guardian Last Name</label>
                                    <input type="text" class="form-control" id="guardiansLastName" placeholder="Guardian Last Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="guardiansFirstName" class="form-label">Guardian First Name</label>
                                    <input type="text" class="form-control" id="guardiansFirstName" placeholder="Guardian First Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="guardiansMiddleName" class="form-label">Guardian Middle Name</label>
                                    <input type="text" class="form-control" id="guardiansMiddleName" placeholder="Guardian Middle Name">
                                </div>
                            </div>
                            
                            <div id="representativeFields" class="row mb-3" style="display: none;">
                                <div class="col-md-4">
                                    <label for="representativeLastName" class="form-label">Representative Last Name</label>
                                    <input type="text" class="form-control" id="representativeLastName" placeholder="Representative Last Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="representativeFirstName" class="form-label">Representative First Name</label>
                                    <input type="text" class="form-control" id="representativeFirstName" placeholder="Representative First Name">
                                </div>
                                <div class="col-md-4">
                                    <label for="representativeMiddleName" class="form-label">Representative Middle Name</label>
                                    <input type="text" class="form-control" id="representativeMiddleName" placeholder="Representative Middle Name">
                                </div>
                            </div>
                            

                            <div class="row mb-3">
                                    <h5>Name of Certifying Physician</h5>
                                        <div class="col-md-3">
                                            <label for="certifyingPhysicianFirstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="certifyingPhysicianFirstName" placeholder="First Name" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="certifyingPhysicianMiddleName" class="form-label">Middle Name</label>
                                            <input type="text" class="form-control" id="certifyingPhysicianMiddleName" placeholder="Middle Name" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="certifyingPhysicianLastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="certifyingPhysicianLastName" placeholder="Last Name" >
                                        </div>
                                        <div class="col-md-3">
                                            <label for="licenseNo" class="form-label">License No.</label>
                                            <input type="text" class="form-control" id="licenseNo" placeholder="License No." >
                                        </div>
                            </div>

                                                                               
                        </form>    
                    </div>
                

                    <div>
                        <div class="form-section" id="affiliation" style="display: none;">
                            <form>    
                                <h4>Affiliation</h4>
                                
                                <br>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="ngoOrgAff" class="form-label">NGO Organization Affiliation</label>
                                        <input type="text" class="form-control" id="ngoOrgAff" placeholder="NGO Organization Affiliation" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ngoContact" class="form-label">NGO Contact Person</label>
                                        <input type="text" class="form-control" id="ngoContact" placeholder="NGO Contact Person" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ngoOfficeAddress" class="form-label">NGO Office Address</label>
                                        <input type="text" class="form-control" id="ngoOfficeAddress" placeholder="NGO Office Address" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="ngoTelNo" class="form-label">NGO Telephone Number</label>
                                        <input type="text" class="form-control" id="ngoTelNo" placeholder="NGO Telephone Number" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pwdOrgAff" class="form-label">PWD Organization Affiliation</label>
                                        <input type="text" class="form-control" id="pwdOrgAff" placeholder="PWD Organization Affiliation" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pwdOrgContact" class="form-label">PWD Organization Contact Person</label>
                                        <input type="text" class="form-control" id="pwdOrgContact" placeholder="PWD Organization Contact Person" >
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="pwdOrgOffice" class="form-label">PWD Organization Office Address</label>
                                        <input type="text" class="form-control" id="pwdOrgOffice" placeholder="PWD Organization Office Address" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pwdOrgTelNo" class="form-label">PWD Organization Telephone Number</label>
                                        <input type="text" class="form-control" id="pwdOrgTelNo" placeholder="PWD Organization Telephone Number" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="civpolAff" class="form-label">Civic/Political Affiliation</label>
                                        <input type="text" class="form-control" id="civpolAff" placeholder="Civic/Political Affiliation" >
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="civpolContact" class="form-label">Civic/Political Contact Person</label>
                                        <input type="text" class="form-control" id="civpolContact" placeholder="Civic/Political Contact Person" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="civpolOfficeAddress" class="form-label">Civic/Political Office Address</label>
                                        <input type="text" class="form-control" id="civpolOfficeAddress" placeholder="Civic/Political Office Address" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="civpolTelNo" class="form-label">Civic/Political Telephone Number</label>
                                        <input type="text" class="form-control" id="civpolTelNo" placeholder="Civic/Political Telephone Number" >
                                    </div>
                                </div>
                                
                            </form>    
                        </div>
                    </div>

    
                <!-- Section 4: User Summary Section -->
                    <div class="form-section" id="summarySection" style="display: none;">
                        <h4>User Summary</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Basic Information -->
                                <tr>
                                    <td><strong>First Name:</strong></td>
                                    <td id="summaryFirstName"></td>
                                </tr>
                                <tr>
                                    <td><strong>Middle Name:</strong></td>
                                    <td id="summaryMiddleName"></td>
                                </tr>
                                <tr>
                                    <td><strong>Last Name:</strong></td>
                                    <td id="summaryLastName"></td>
                                </tr>
                                <tr>
                                    <td><strong>Suffix:</strong></td>
                                    <td id="summarySuffix"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Gender:</strong></td>
                                    <td class="detail-cell" id="summaryGender"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Civil Status:</strong></td>
                                    <td class="detail-cell" id="summaryCivilStatus"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Date of Birth:</strong></td>
                                    <td class="detail-cell" id="summaryDob"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Telephone:</strong></td>
                                    <td class="detail-cell" id="summaryTele"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Phone:</strong></td>
                                    <td class="detail-cell" id="summaryPhone"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Email:</strong></td>
                                    <td class="detail-cell" id="summaryEmail"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Work Phone:</strong></td>
                                    <td class="detail-cell" id="summaryWorkPhone"></td>
                                </tr>

                                <!-- PWD ID Information -->
                                <tr id="pwdIdRow" style="display: none;">
                                    <td class="category-cell"><strong>PWD ID Number:</strong></td>
                                    <td class="detail-cell" id="summaryPWDIdNumber"></td>
                                </tr>
                                <tr id="idImageRow" style="display: none;">
                                    <td class="category-cell"><strong>ID Image:</strong></td>
                                    <td class="detail-cell" id="summaryIdImage"></td>
                                </tr>
                                <tr id="dateAppliedRow" style="display: none;">
                                    <td class="category-cell"><strong>Date Applied:</strong></td>
                                    <td class="detail-cell" id="summaryDateApplied"></td>
                                </tr>
                                <tr id="typeRow" style="display: none;">
                                    <td class="category-cell"><strong>Type of Disability:</strong></td>
                                    <td class="detail-cell" id="summaryType"></td>
                                </tr>
                                <tr id="causeRow" style="display: none;">
                                    <td class="category-cell"><strong>Cause of Disability:</strong></td>
                                    <td class="detail-cell" id="summaryCause"></td>
                                </tr>
                                <tr id="houseNoStreetRow" style="display: none;">
                                    <td class="category-cell"><strong>House No. and Street:</strong></td>
                                    <td class="detail-cell" id="summaryHouseNoStreet"></td>
                                </tr>
                                <tr id="barangayRow" style="display: none;">
                                    <td class="category-cell"><strong>Barangay:</strong></td>
                                    <td class="detail-cell" id="summaryBarangay"></td>
                                </tr>

                                <!-- Alternative Fields if no PWD ID -->
                                <tr id="diagnosisRow" style="display: none;">
                                    <td class="category-cell"><strong>Diagnosis:</strong></td>
                                    <td class="detail-cell" id="summaryDiagnosis"></td>
                                </tr>

                                <!-- Government Numbers -->
                                <tr>
                                    <td class="category-cell"><strong>Education Attainment:</strong></td>
                                    <td class="detail-cell" id="summaryEducationAttainment"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Status of Employment:</strong></td>
                                    <td class="detail-cell" id="summaryEmploymentStatus"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Type of Employment:</strong></td>
                                    <td class="detail-cell" id="summaryEmploymentType"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Category of Employment:</strong></td>
                                    <td class="detail-cell" id="summaryEmploymentCategory"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Occupation:</strong></td>
                                    <td class="detail-cell" id="summaryOccupation"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>SSS Number:</strong></td>
                                    <td class="detail-cell" id="summarySSS"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>GSIS Number:</strong></td>
                                    <td class="detail-cell" id="summaryGSIS"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>PhilHealth Number:</strong></td>
                                    <td class="detail-cell" id="summaryPhilHealth"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>PAGIBIG Number:</strong></td>
                                    <td class="detail-cell" id="summaryPAGIBIG"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>PSN Number:</strong></td>
                                    <td class="detail-cell" id="summaryPSN"></td>
                                </tr>

                                <!-- Father's Name Summary -->
                                <tr>
                                    <td class="category-cell"><strong>Father's Last Name:</strong></td>
                                    <td class="detail-cell" id="summaryFatherLastName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Father's First Name:</strong></td>
                                    <td class="detail-cell" id="summaryFatherFirstName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Father's Middle Name:</strong></td>
                                    <td class="detail-cell" id="summaryFatherMiddleName"></td>
                                </tr>

                                <!-- Mother's Name Summary -->
                                <tr>
                                    <td class="category-cell"><strong>Mother's Last Name:</strong></td>
                                    <td class="detail-cell" id="summaryMotherLastName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Mother's First Name:</strong></td>
                                    <td class="detail-cell" id="summaryMotherFirstName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Mother's Middle Name:</strong></td>
                                    <td class="detail-cell" id="summaryMotherMiddleName"></td>
                                </tr>

                                <!-- Guardian's Name Summary (Emergency Contact) -->
                                <tr>
                                    <td class="category-cell"><strong>Guardian's Last Name:</strong></td>
                                    <td class="detail-cell" id="summaryGuardianLastName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Guardian's First Name:</strong></td>
                                    <td class="detail-cell" id="summaryGuardianFirstName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Guardian's Middle Name:</strong></td>
                                    <td class="detail-cell" id="summaryGuardianMiddleName"></td>
                                </tr>

                                <!-- Summary Row for Accomplished By -->
                                <tr>
                                    <td><strong>Accomplished By:</strong></td>
                                    <td id="summaryAccomplishedBy"></td>
                                </tr>

                                <!-- Applicant Summary Rows -->
                                <tr id="applicantFirstNameRow" style="display: none;">
                                    <td><strong>Applicant First Name:</strong></td>
                                    <td id="summaryApplicantFirstName"></td>
                                </tr>
                                <tr id="applicantMiddleNameRow" style="display: none;">
                                    <td><strong>Applicant Middle Name:</strong></td>
                                    <td id="summaryApplicantMiddleName"></td>
                                </tr>
                                <tr id="applicantLastNameRow" style="display: none;">
                                    <td><strong>Applicant Last Name:</strong></td>
                                    <td id="summaryApplicantLastName"></td>
                                </tr>

                                <!-- Guardian Summary Rows -->
                                <tr id="guardianFirstNameRow" style="display: none;">
                                    <td><strong>Guardian First Name:</strong></td>
                                    <td id="summaryGuardiansFirstName"></td>
                                </tr>
                                <tr id="guardianMiddleNameRow" style="display: none;">
                                    <td><strong>Guardian Middle Name:</strong></td>
                                    <td id="summaryGuardiansMiddleName"></td>
                                </tr>
                                <tr id="guardianLastNameRow" style="display: none;">
                                    <td><strong>Guardian Last Name:</strong></td>
                                    <td id="summaryGuardiansLastName"></td>
                                </tr>

                                <!-- Representative Summary Rows -->
                                <tr id="representativeFirstNameRow" style="display: none;">
                                    <td><strong>Representative First Name:</strong></td>
                                    <td id="summaryRepresentativeFirstName"></td>
                                </tr>
                                <tr id="representativeMiddleNameRow" style="display: none;">
                                    <td><strong>Representative Middle Name:</strong></td>
                                    <td id="summaryRepresentativeMiddleName"></td>
                                </tr>
                                <tr id="representativeLastNameRow" style="display: none;">
                                    <td><strong>Representative Last Name:</strong></td>
                                    <td id="summaryRepresentativeLastName"></td>
                                </tr>



                                <!-- Certifying Physician Information -->
                                    <tr id="physicianFirstNameRow" style="display: none;">
                                        <td class="category-cell"><strong>Physician First Name:</strong></td>
                                        <td class="detail-cell" id="summaryPhysicianFirstName"></td>
                                    </tr>
                                    <tr id="physicianMiddleNameRow" style="display: none;">
                                        <td class="category-cell"><strong>Physician Middle Name:</strong></td>
                                        <td class="detail-cell" id="summaryPhysicianMiddleName"></td>
                                    </tr>
                                    <tr id="physicianLastNameRow" style="display: none;">
                                        <td class="category-cell"><strong>Physician Last Name:</strong></td>
                                        <td class="detail-cell" id="summaryPhysicianLastName"></td>
                                    </tr>
                                    <tr id="licenseNoRow" style="display: none;">
                                        <td class="category-cell"><strong>License No.:</strong></td>
                                        <td class="detail-cell" id="summaryLicenseNo"></td>
                                    </tr>


                                <!-- Organization Information -->
                                <tr id="orgAffiliatedRow" style="display: none;">
                                    <td class="category-cell"><strong>Organization Affiliated:</strong></td>
                                    <td class="detail-cell" id="summaryOrgAffiliated"></td>
                                </tr>
                                <tr id="contactPersonRow" style="display: none;">
                                    <td class="category-cell"><strong>Contact Person:</strong></td>
                                    <td class="detail-cell" id="summaryContactPerson"></td>
                                </tr>
                                <tr id="officeAddressRow" style="display: none;">
                                    <td class="category-cell"><strong>Office Address:</strong></td>
                                    <td class="detail-cell" id="summaryOfficeAddress"></td>
                                </tr>
                                <tr id="telNosRow" style="display: none;">
                                    <td class="category-cell"><strong>Tel. Nos.:</strong></td>
                                    <td class="detail-cell" id="summaryTelNos"></td>
                                </tr>


                                <!-- Affiliation Information -->
                                <tr>
                                    <td class="category-cell"><strong>NGO Organization Affiliation:</strong></td>
                                    <td class="detail-cell" id="summaryngoOrgAff"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>NGO Contact Person:</strong></td>
                                    <td class="detail-cell" id="summaryngoContact"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>NGO Office Address:</strong></td>
                                    <td class="detail-cell" id="summaryngoOfficeAddress"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>NGO Telephone Number:</strong></td>
                                    <td class="detail-cell" id="summaryngoTelNo"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>PWD Organization Affiliation:</strong></td>
                                    <td class="detail-cell" id="summarypwdOrgAff"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>PWD Organization Contact Person:</strong></td>
                                    <td class="detail-cell" id="summarypwdOrgContact"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>PWD Organization Office Address:</strong></td>
                                    <td class="detail-cell" id="summarypwdOrgOffice"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>PWD Organization Telephone Number:</strong></td>
                                    <td class="detail-cell" id="summarypwdOrgTelNo"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Civic/Political Affiliation:</strong></td>
                                    <td class="detail-cell" id="summarycivpolAff"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Civic/Political Contact Person:</strong></td>
                                    <td class="detail-cell" id="summarycivpolContact"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Civic/Political Office Address:</strong></td>
                                    <td class="detail-cell" id="summarycivpolOfficeAddress"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Civic/Political Telephone Number:</strong></td>
                                    <td class="detail-cell" id="summarycivpolTelNo"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

    
    
                <!-- Navigation Buttons -->
                <div class="navigation-buttons">
                    <button type="button" id="prev-btn" class="btn btn-secondary" style="display: none;">Previous</button>
                    <button type="button" id="next-btn" class="btn btn-primary">Next</button>
                </div>
    
            </div>
        </div>
    </div>
    </main>

    <br>
    <br>
      <footer>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item"><a class="link-secondary" href="#">About us</a></li>
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

<script>
    // Section IDs
const sections = [
    "#basic-information-section", 
    "#sectoral-section", 
    "#government-numbers", 
    "#contact-information", 
    "#affiliation", 
    "#summarySection"
];

let currentSection = 0; // Track the current section

// Initialize - Show the first section and set buttons/progress
$(document).ready(function() {
    $(sections[currentSection]).show(); // Show first section
    updateButtons();
    updateProgress();

    // Next button click handler
    $("#next-btn").on('click', function() {
        // Check if we are on the Affiliation section
        if (sections[currentSection] === "#affiliation") {
            populateSummary(); // Populate the summary for the next section
        }
        
        if (currentSection < sections.length - 1) { // If not the last section
            $(sections[currentSection]).hide(); // Hide current section
            currentSection++; // Move to next section
            $(sections[currentSection]).show(); // Show next section
            updateButtons();
            updateProgress();
        } else {
            // If on the last section, submit or redirect as needed
            window.location.href = "PWD Form.html";
        }
    });

    // Previous button click handler
    $("#prev-btn").click(function() {
        if (currentSection > 0) { // Ensure we're not at the first section
            $(sections[currentSection]).hide(); // Hide current section
            currentSection--; // Move to previous section
            $(sections[currentSection]).show(); // Show previous section
            updateButtons();
            updateProgress();
        }
    });

    // Sidebar progress item click handler
    $(".progress-item").click(function() {
        const targetSection = $(this).data('target');
        
        // Find the index of the clicked section in the sections array
        const targetIndex = sections.indexOf(`#${targetSection}`);
        
        if (targetIndex !== -1) {
            // Hide current section, show target section
            $(sections[currentSection]).hide();
            currentSection = targetIndex;
            $(sections[currentSection]).show();
            updateButtons();
            updateProgress();
        }
    });
});

// Function to update the Next/Previous buttons
function updateButtons() {
    $("#prev-btn").toggle(currentSection > 0); // Show/Hide Previous button
    $("#next-btn").text(currentSection === sections.length - 1 ? "Submit" : "Next"); // Change Next to Submit on the last section
}

    // Function to update the progress bar
    function updateProgress() {
    $(".progress-item").removeClass("active");
    $(".progress-item").eq(currentSection).addClass("active");

    // Update icons
    $(".progress-item i").removeClass("bi-check-square-fill").addClass("bi-check-square"); // Reset icons
    $(".progress-item:lt(" + (currentSection + 1) + ") i")
        .removeClass("bi-check-square")
        .addClass("bi-check-square-fill"); // Set filled icons up to the current section
}


// Populate summary function to fill summary section with form data
function populateSummary() {
    // Basic Information
    document.getElementById('summaryFirstName').innerText = getValue('firstName');
    localStorage.setItem('summaryFirstName', document.getElementById('summaryFirstName').innerText);

    document.getElementById('summaryMiddleName').innerText = getValue('middleName');
    localStorage.setItem('summaryMiddleName', document.getElementById('summaryMiddleName').innerText);

    document.getElementById('summaryLastName').innerText = getValue('lastName');
    localStorage.setItem('summaryLastName', document.getElementById('summaryLastName').innerText);

    document.getElementById('summarySuffix').innerText = getValue('suffix');
    localStorage.setItem('summarySuffix', document.getElementById('summarySuffix').innerText);

    document.getElementById('summaryGender').innerText = getValue('gender');
    localStorage.setItem('summaryGender', document.getElementById('summaryGender').innerText);

    document.getElementById('summaryCivilStatus').innerText = getValue('civilstatus');
    localStorage.setItem('summaryCivilStatus', document.getElementById('summaryCivilStatus').innerText);

    document.getElementById('summaryDob').innerText = getValue('dob');
    localStorage.setItem('summaryDob', document.getElementById('summaryDob').innerText);

    document.getElementById('summaryTele').innerText = getValue('tele');
    localStorage.setItem('summaryTele', document.getElementById('summaryTele').innerText);

    document.getElementById('summaryPhone').innerText = getValue('phone');
    localStorage.setItem('summaryPhone', document.getElementById('summaryPhone').innerText);

    document.getElementById('summaryEmail').innerText = getValue('email');
    localStorage.setItem('summaryEmail', document.getElementById('summaryEmail').innerText);

    // PWD ID Information
    const pwdIdOption = document.querySelector('input[name="PWDId"]:checked');
    if (pwdIdOption && pwdIdOption.value === 'yes') {
        document.getElementById('pwdIdRow').style.display = 'table-row';
        document.getElementById('summaryPWDIdNumber').innerText = getValue('PWDIdNumber');
        localStorage.setItem('summaryPWDIdNumber', document.getElementById('summaryPWDIdNumber').innerText);

        // Display date applied
        document.getElementById('dateAppliedRow').style.display = 'table-row';
        document.getElementById('summaryDateApplied').innerText = getValue('PWDidImageUpload');
        localStorage.setItem('summaryDateApplied', document.getElementById('summaryDateApplied').innerText);

        // Display ID image name
        const idImageUpload = getValue('PWDidImageUpload').split('\\').pop();
        document.getElementById('idImageRow').style.display = 'table-row';
        document.getElementById('summaryIdImage').innerText = idImageUpload || 'No file uploaded';

        // Display Type and Cause of Disability
        document.getElementById('typeRow').style.display = 'table-row';
        document.getElementById('summaryType').innerText = getValue('disabilityType');
        localStorage.setItem('summaryType', document.getElementById('summaryType').innerText);

        document.getElementById('causeRow').style.display = 'table-row';
        document.getElementById('summaryCause').innerText = getValue('causeOfDisability');
        localStorage.setItem('summaryCause', document.getElementById('summaryCause').innerText);
    } else {
        document.getElementById('diagnosisRow').style.display = 'table-row';
        document.getElementById('summaryDiagnosis').innerText = getValue('pwdDiagnosis');
        localStorage.setItem('summaryDiagnosis', document.getElementById('summaryDiagnosis').innerText);
    }

    // Address Information
    document.getElementById('houseNoStreetRow').style.display = 'table-row';
    document.getElementById('summaryHouseNoStreet').innerText = getValue('houseNoStreet');
    localStorage.setItem('summaryHouseNoStreet', document.getElementById('summaryHouseNoStreet').innerText);

    document.getElementById('barangayRow').style.display = 'table-row';
    document.getElementById('summaryBarangay').innerText = getValue('barangay');
    localStorage.setItem('summaryBarangay', document.getElementById('summaryBarangay').innerText);

    // Education and Employment Information
    document.getElementById('summaryEducationAttainment').innerText = getValue('educationAttainment');
    localStorage.setItem('summaryEducationAttainment', document.getElementById('summaryEducationAttainment').innerText);

    document.getElementById('summaryEmploymentStatus').innerText = getValue('employmentStatus');
    localStorage.setItem('summaryEmploymentStatus', document.getElementById('summaryEmploymentStatus').innerText);

    document.getElementById('summaryEmploymentType').innerText = getValue('employmentType');
    localStorage.setItem('summaryEmploymentType', document.getElementById('summaryEmploymentType').innerText);

    document.getElementById('summaryEmploymentCategory').innerText = getValue('employmentCategory');
    localStorage.setItem('summaryEmploymentCategory', document.getElementById('summaryEmploymentCategory').innerText);

    document.getElementById('summaryOccupation').innerText = getValue('occupation');
    localStorage.setItem('summaryOccupation', document.getElementById('summaryOccupation').innerText);

    // Government Numbers
    document.getElementById('summarySSS').innerText = getValue('SSS');
    localStorage.setItem('summarySSS', document.getElementById('summarySSS').innerText);

    document.getElementById('summaryGSIS').innerText = getValue('GSIS');
    localStorage.setItem('summaryGSIS', document.getElementById('summaryGSIS').innerText);

    document.getElementById('summaryPhilHealth').innerText = getValue('PhilHealth');
    localStorage.setItem('summaryPhilHealth', document.getElementById('summaryPhilHealth').innerText);

    document.getElementById('summaryPAGIBIG').innerText = getValue('PAGIBIG');
    localStorage.setItem('summaryPAGIBIG', document.getElementById('summaryPAGIBIG').innerText);

    document.getElementById('summaryPSN').innerText = getValue('PSN');
    localStorage.setItem('summaryPSN', document.getElementById('summaryPSN').innerText);

    // Parent and Guardian Information
    document.getElementById('summaryFatherLastName').innerText = getValue('fatherLastName');
    localStorage.setItem('summaryFatherLastName', document.getElementById('summaryFatherLastName').innerText);

    document.getElementById('summaryFatherFirstName').innerText = getValue('fatherFirstName');
    localStorage.setItem('summaryFatherFirstName', document.getElementById('summaryFatherFirstName').innerText);

    document.getElementById('summaryFatherMiddleName').innerText = getValue('fatherMiddleName');
    localStorage.setItem('summaryFatherMiddleName', document.getElementById('summaryFatherMiddleName').innerText);

    document.getElementById('summaryMotherLastName').innerText = getValue('motherLastName');
    localStorage.setItem('summaryMotherLastName', document.getElementById('summaryMotherLastName').innerText);

    document.getElementById('summaryMotherFirstName').innerText = getValue('motherFirstName');
    localStorage.setItem('summaryMotherFirstName', document.getElementById('summaryMotherFirstName').innerText);

    document.getElementById('summaryMotherMiddleName').innerText = getValue('motherMiddleName');
    localStorage.setItem('summaryMotherMiddleName', document.getElementById('summaryMotherMiddleName').innerText);

    document.getElementById('summaryGuardianLastName').innerText = getValue('guardianLastName');
    localStorage.setItem('summaryGuardianLastName', document.getElementById('summaryGuardianLastName').innerText);

    document.getElementById('summaryGuardianFirstName').innerText = getValue('guardianFirstName');
    localStorage.setItem('summaryGuardianFirstName', document.getElementById('summaryGuardianFirstName').innerText);

    document.getElementById('summaryGuardianMiddleName').innerText = getValue('guardianMiddleName');
    localStorage.setItem('summaryGuardianMiddleName', document.getElementById('summaryGuardianMiddleName').innerText);

    // Organization Information
    document.getElementById('summaryOrgAffiliated').innerText = getValue('orgAffiliated');
    document.getElementById('summaryContactPerson').innerText = getValue('contactPerson');
    document.getElementById('summaryOfficeAddress').innerText = getValue('officeAddress');
    document.getElementById('summaryTelNos').innerText = getValue('telNos');

    // Display these rows in the summary table
    document.getElementById('orgAffiliatedRow').style.display = 'table-row';
    document.getElementById('contactPersonRow').style.display = 'table-row';
    document.getElementById('officeAddressRow').style.display = 'table-row';
    document.getElementById('telNosRow').style.display = 'table-row';

    // NGO and Affiliation Information
    document.getElementById('summaryngoOrgAff').innerText = getValue('ngoOrgAff');
    document.getElementById('summaryngoContact').innerText = getValue('ngoContact');
    document.getElementById('summaryngoOfficeAddress').innerText = getValue('ngoOfficeAddress');
    document.getElementById('summaryngoTelNo').innerText = getValue('ngoTelNo');

    document.getElementById('summarypwdOrgAff').innerText = getValue('pwdOrgAff');
    document.getElementById('summarypwdOrgContact').innerText = getValue('pwdOrgContact');
    document.getElementById('summarypwdOrgOffice').innerText = getValue('pwdOrgOffice');
    document.getElementById('summarypwdOrgTelNo').innerText = getValue('pwdOrgTelNo');

    document.getElementById('summarycivpolAff').innerText = getValue('civpolAff');
    document.getElementById('summarycivpolContact').innerText = getValue('civpolContact');
    document.getElementById('summarycivpolOfficeAddress').innerText = getValue('civpolOfficeAddress');
    document.getElementById('summarycivpolTelNo').innerText = getValue('civpolTelNo');

    // Certifying Physician Information
    document.getElementById('summaryPhysicianFirstName').innerText = getValue('certifyingPhysicianFirstName');
    document.getElementById('summaryPhysicianMiddleName').innerText = getValue('certifyingPhysicianMiddleName');
    document.getElementById('summaryPhysicianLastName').innerText = getValue('certifyingPhysicianLastName');
    document.getElementById('summaryLicenseNo').innerText = getValue('licenseNo');

    // Show these rows in the summary table
    document.getElementById('physicianFirstNameRow').style.display = 'table-row';
    document.getElementById('physicianMiddleNameRow').style.display = 'table-row';
    document.getElementById('physicianLastNameRow').style.display = 'table-row';
    document.getElementById('licenseNoRow').style.display = 'table-row';
    // Accomplished By Summary
    const selectedValue = document.querySelector('input[name="accomplishedBy"]:checked').value;
    document.getElementById('summaryAccomplishedBy').innerText = selectedValue.toUpperCase();
    localStorage.setItem('summaryAccomplishedBy', document.getElementById('summaryAccomplishedBy').innerText);

    // Reset and show specific sections based on selection
    document.getElementById('applicantFirstNameRow').style.display = 'none';
    document.getElementById('applicantMiddleNameRow').style.display = 'none';
    document.getElementById('applicantLastNameRow').style.display = 'none';
    document.getElementById('guardianFirstNameRow').style.display = 'none';
    document.getElementById('guardianMiddleNameRow').style.display = 'none';
    document.getElementById('guardianLastNameRow').style.display = 'none';
    document.getElementById('representativeFirstNameRow').style.display = 'none';
    document.getElementById('representativeMiddleNameRow').style.display = 'none';
    document.getElementById('representativeLastNameRow').style.display = 'none';

    if (selectedValue === 'applicant') {
        document.getElementById('applicantFirstNameRow').style.display = 'table-row';
        document.getElementById('summaryApplicantFirstName').innerText = getValue('applicantFirstName');
        localStorage.setItem('summaryApplicantFirstName', document.getElementById('summaryApplicantFirstName').innerText);

        document.getElementById('applicantMiddleNameRow').style.display = 'table-row';
        document.getElementById('summaryApplicantMiddleName').innerText = getValue('applicantMiddleName');
        localStorage.setItem('summaryApplicantMiddleName', document.getElementById('summaryApplicantMiddleName').innerText);


        document.getElementById('applicantLastNameRow').style.display = 'table-row';
        document.getElementById('summaryApplicantLastName').innerText = getValue('applicantLastName');
        localStorage.setItem('summaryApplicantLastName', document.getElementById('summaryApplicantLastName').innerText);


    } else if (selectedValue === 'guardian') {
        document.getElementById('guardianFirstNameRow').style.display = 'table-row';
        document.getElementById('summaryGuardiansFirstName').innerText = getValue('guardiansFirstName');
        localStorage.setItem('summaryGuardiansFirstName', document.getElementById('summaryGuardiansFirstName').innerText);


        document.getElementById('guardianMiddleNameRow').style.display = 'table-row';
        document.getElementById('summaryGuardiansMiddleName').innerText = getValue('guardiansMiddleName');
        localStorage.setItem('summaryGuardiansMiddleName', document.getElementById('summaryGuardiansMiddleName').innerText);


        document.getElementById('guardianLastNameRow').style.display = 'table-row';
        document.getElementById('summaryGuardiansLastName').innerText = getValue('guardiansLastName');
        localStorage.setItem('summaryGuardiansLastName', document.getElementById('summaryGuardiansLastName').innerText);


    } else if (selectedValue === 'representative') {
        document.getElementById('representativeFirstNameRow').style.display = 'table-row';
        document.getElementById('summaryRepresentativeFirstName').innerText = getValue('representativeFirstName');
        localStorage.setItem('summaryRepresentativeFirstName', document.getElementById('summaryRepresentativeFirstName').innerText);


        document.getElementById('representativeMiddleNameRow').style.display = 'table-row';
        document.getElementById('summaryRepresentativeMiddleName').innerText = getValue('representativeMiddleName');
        localStorage.setItem('summaryRepresentativeMiddleName', document.getElementById('summaryRepresentativeMiddleName').innerText);


        document.getElementById('representativeLastNameRow').style.display = 'table-row';
        document.getElementById('summaryRepresentativeLastName').innerText = getValue('representativeLastName');
        localStorage.setItem('summaryRepresentativeLastName', document.getElementById('summaryRepresentativeLastName').innerText);

    }
}
    
        function genderChange() {
            const selectedGender = document.getElementById('gender').value;
            localStorage.setItem('selectedGender', selectedGender);  // Store the gender in localStorage
        }

        function civilStatusChange() {
            const selectedCivilStatus = document.getElementById('civilstatus').value;
            localStorage.setItem('selectedCivilStatus', selectedCivilStatus);  // Store the civil status in localStorage
        }

        function disabilityTypeChange() {
            const selectedDisabilityType = document.getElementById('disabilityType').value;
            localStorage.setItem('selectedDisabilityType', selectedDisabilityType);  // Store the disability type in localStorage
        }
        function causeOfDisabilityChange() {
            const selectedCause = document.getElementById('causeOfDisability').value;
            localStorage.setItem('selectedCauseOfDisability', selectedCause);  // Store the cause of disability in localStorage
        }
        function educationAttainmentChange() {
            const selectedEducation = document.getElementById('educationAttainment').value;
            localStorage.setItem('selectedEducationAttainment', selectedEducation);  // Store the education attainment in localStorage
        }
        function statusOfEmploymentChange() {
        const selectedStatus = document.getElementById('employmentStatus').value;
        localStorage.setItem('selectedStatus', selectedStatus);
        }

        function typesOfEmploymentChange() {
            const selectedType = document.getElementById('employmentType').value;
            localStorage.setItem('selectedType', selectedType);
        }

        function categoryOfEmploymentChange() {
            const selectedCategory = document.getElementById('employmentCategory').value;
            localStorage.setItem('selectedCategory', selectedCategory);
        }

        function occupationChange() {
        const selectedOccupation = document.getElementById('occupation').value;
        localStorage.setItem('selectedOccupation', selectedOccupation);
        }

        function accomplishedByChange() {
        const selectedOption = document.querySelector('input[name="accomplishedBy"]:checked').value;
        localStorage.setItem('accomplishedBy', selectedOption);
        }
        
                

// Helper function to get the value of an element by ID, or 'Not Provided' if empty
const getValue = (id) => {
    const element = document.getElementById(id);
    return element ? (element.value || 'Not Provided') : 'Not Provided';
};

// Additional form-specific logic, such as showing/hiding fields based on conditions
$('input[name="PWDId"]').on('change', function() {
    if ($(this).val() === 'yes') {
        $('#yesFields').show();
        $('#noFields').hide();
    } else {
        $('#yesFields').hide();
        $('#noFields').show();
    }
});
$('input[name="contactType"]').change(function() {
    if (this.value === 'guardian') {
        $('#guardianInfo').show();
        $('#caregiverInfo').hide();
    } else if (this.value === 'caregiver') {
        $('#guardianInfo').hide();
        $('#caregiverInfo').show();
    }
});
document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners to the radio buttons
    document.querySelectorAll('input[name="accomplishedBy"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            // Hide all fields initially
            document.getElementById('applicantFields').style.display = 'none';
            document.getElementById('guardianFields').style.display = 'none';
            document.getElementById('representativeFields').style.display = 'none';
            
            // Show the appropriate fields based on the selected option
            if (this.value === 'applicant') {
                document.getElementById('applicantFields').style.display = 'flex';
            } else if (this.value === 'guardian') {
                document.getElementById('guardianFields').style.display = 'flex';
            } else if (this.value === 'representative') {
                document.getElementById('representativeFields').style.display = 'flex';
            }
        });
    });
});


</script>


</body>
</html>