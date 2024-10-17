<?php
include 'db_connection.php';
session_start();
$email = $_SESSION['email'] ?? ''; // Assuming email is stored in session

$query = "SELECT first_name FROM users WHERE email = ?";
if ($stmt = $conn->prepare($query)) {
    $stmt->bind_param("s", $email); // Assuming email is a string
    $stmt->execute();
    $stmt->bind_result($first_name);
    $stmt->fetch();
    $stmt->close();
}
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
      <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="Home.php">
            <img class="navbar-brand-logo" alt="Logo" src="logo.png" width="110" height="110">
            <span class="brand-name">OSSM</span>
          </a>
          <div class="d-flex align-items-center ms-auto">
          <div class="d-flex align-items-center ms-auto"><span class="username">Hello, <?php echo htmlspecialchars($first_name); ?></span>
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

    <main class="p-4 mx-auto" style="width: 70%; height: 10%; background-color: rgb(227, 249, 255);">
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
                    <li class="progress-item" data-target="summary">
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
    
                    <form method="POST" action="">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="civilstatus" class="form-label">Civil Status</label>
                                <select class="form-select" id="civilstatus" name="civilstatus" required>
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="self">Married</option>
                                    <option value="spouse">Widowed</option>
                                </select>
                            </div>                            
                            <div class="col-md-4">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tele" class="form-label">Telephone Number</label>
                                <input type="tel" class="form-control" id="tele" name="tele" placeholder="(916) 345-6783" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="(+63) 0923-345-6783" required>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="workPhone" class="form-label">Work Phone</label>
                                <input type="tel" class="form-control" id="workPhone" name="workPhone" placeholder="(916) 345-0000 x123" required>
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
                                    <input class="form-check-input" type="radio" name="PWDId" id="yesOption" value="yes" required>
                                    <label class="form-check-label" for="yesOption">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="PWDId" id="noOption" value="no" required>
                                    <label class="form-check-label" for="noOption">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
    
                        <div id="yesFields" style="display: none;">
                            <div class="mb-3">
                                <label for="PWDIdNumber" class="form-label">PWD ID Number</label>
                                <input type="text" class="form-control" id="PWDIdNumber" placeholder="Enter ID Number" required>
                            </div>
                            <div class="mb-3">
                                <label for="idImageUpload" class="form-label">Upload PWD ID</label>
                                <input type="file" class="form-control" id="PWDidImageUpload" required>
                            </div>
                        </div>
    
                        <div id="noFields" style="display: none;">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="PWDethnicGroup" class="form-label">Ethnic Group</label>
                                    <input type="text" class="form-control" id="PWDethnicGroup" placeholder="Ethnic Group" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="pwdDiagnosis" class="form-label">Diagnosis</label>
                                    <input type="text" class="form-control" id="pwdDiagnosis" placeholder="Describe Diagnosis" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="education" class="form-label">Educational Attainment</label>
                                    <select class="form-select" id="education" required>
                                        <option value="" disabled selected>Choose...</option>
                                        <option value="elementary">Elementary</option>
                                        <option value="highSchool">High School</option>
                                        <option value="college">College</option>
                                        <option value="graduate">Graduate</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="refNo" class="form-label">ID Reference No.</label>
                                    <input type="text" class="form-control" id="refNo" placeholder="ID Reference No." required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="problems" class="form-label">Type of Disabilty</label>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="input-group control-group after-add-more">
                                                <input type="text" name="type[]" class="form-control" placeholder="Type of Disabilty" required>
                                                <div class="input-group-btn">
                                                    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="copy-fields hide">
                                        <div class="control-group input-group" style="margin-top:10px">
                                            <input type="text" name="type[]" class="form-control" placeholder="Type of Disabilty" required>
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <br>
        
                                <div class="col-md-6">
                                    <label for="needs" class="form-label">Cause Of Disabilty</label>
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="input-group control-group after-add-more">
                                                <input type="text" name="cause[]" class="form-control" placeholder="Cause Of Disabilty" required>
                                                <div class="input-group-btn">
                                                    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="copy-fields hide">
                                        <div class="control-group input-group" style="margin-top:10px">
                                            <input type="text" name="cause[]" class="form-control" placeholder="Cause Of Disabilty" required>
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
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
                                
                                <br>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="SSS" class="form-label">SSS Number/UMID Number</label>
                                        <input type="text" class="form-control" id="SSS" placeholder="SSS Number" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="GSIS" class="form-label">GSIS Number</label>
                                        <input type="text" class="form-control" id="GSIS" placeholder="GSIS Number" required>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="PhilHealth" class="form-label">PhilHealth Number</label>
                                        <input type="text" class="form-control" id="PhilHealth" placeholder="PhilHealth Number" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="PAGIBIG" class="form-label">PAGIBIG Number</label>
                                        <input type="text" class="form-control" id="PAGIBIG" placeholder="PAGIBIG Number" required>
                                    </div>
                                </div>
                                
                            </form>    
                        </div>
                    </div>

                    <div class="form-section" id="contact-information" style="display: none;">
                        <form>    
                            <h4>Contact Information of Guardian/Caregiver</h4>
                            
                            <br>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="contactType" id="guardianOption" value="guardian" required>
                                    <label class="form-check-label" for="guardianOption">
                                      Guardian
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="contactType" id="caregiverOption" value="caregiver" required>
                                    <label class="form-check-label" for="caregiverOption">
                                      Caregiver
                                    </label>
                                  </div>
                                </div>
                              </div>
                                <!-- Guardian Info -->
                                <div id="guardianInfo" style="display: none;">
                                    <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="guardianFname" class="form-label">Guardian First Name</label>
                                        <input type="text" class="form-control" id="guardianFname" placeholder="Guardian First Name">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="guardianLname" class="form-label">Guardian Last Name</label>
                                        <input type="text" class="form-control" id="guardianLname" placeholder="Guardian Last Name">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="guardianMname" class="form-label">Guardian Middle Name</label>
                                        <input type="text" class="form-control" id="guardianMname" placeholder="Guardian Middle Name">
                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="guardianNumber" class="form-label">Guardian Mobile Number</label>
                                        <input type="text" class="form-control" id="guardianNumber" placeholder="Guardian Mobile Number">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="guardianNumber" class="form-label">Landline</label>
                                        <input type="text" class="form-control" id="guardianNumber" placeholder="Landline">
                                    </div>
                                    </div>
                                </div>
                                
                                <!-- Caregiver Info -->
                                <div id="caregiverInfo" style="display: none;">
                                    <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="careFname" class="form-label">Caregiver First Name</label>
                                        <input type="text" class="form-control" id="careFname" placeholder="Caregiver First Name">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="careLname" class="form-label">Caregiver Last Name</label>
                                        <input type="text" class="form-control" id="careLname" placeholder="Caregiver Last Name">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="careMname" class="form-label">Caregiver Middle Name</label>
                                        <input type="text" class="form-control" id="careMname" placeholder="Caregiver Middle Name">
                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="careNumber" class="form-label">Caregiver Mobile Number</label>
                                        <input type="text" class="form-control" id="careNumber" placeholder="Caregiver Mobile Number">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="guardianNumber" class="form-label">Landline</label>
                                        <input type="text" class="form-control" id="guardianNumber" placeholder="Landline">
                                    </div>
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
                                        <input type="text" class="form-control" id="ngoOrgAff" placeholder="NGO Organization Affiliation" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ngoContact" class="form-label">NGO Contact Person</label>
                                        <input type="text" class="form-control" id="ngoContact" placeholder="NGO Contact Person" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="ngoOfficeAddress" class="form-label">NGO Office Address</label>
                                        <input type="text" class="form-control" id="ngoOfficeAddress" placeholder="NGO Office Address" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="ngoTelNo" class="form-label">NGO Telephone Number</label>
                                        <input type="text" class="form-control" id="ngoTelNo" placeholder="NGO Telephone Number" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pwdOrgAff" class="form-label">PWD Organization Affiliation</label>
                                        <input type="text" class="form-control" id="pwdOrgAff" placeholder="PWD Organization Affiliation" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pwdOrgContact" class="form-label">PWD Organization Contact Person</label>
                                        <input type="text" class="form-control" id="pwdOrgContact" placeholder="PWD Organization Contact Person" required>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="pwdOrgOffice" class="form-label">PWD Organization Office Address</label>
                                        <input type="text" class="form-control" id="pwdOrgOffice" placeholder="PWD Organization Office Address" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="pwdOrgTelNo" class="form-label">PWD Organization Telephone Number</label>
                                        <input type="text" class="form-control" id="pwdOrgTelNo" placeholder="PWD Organization Telephone Number" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="civpolAff" class="form-label">Civic/Political Affiliation</label>
                                        <input type="text" class="form-control" id="civpolAff" placeholder="Civic/Political Affiliation" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="civpolContact" class="form-label">Civic/Political Contact Person</label>
                                        <input type="text" class="form-control" id="civpolContact" placeholder="Civic/Political Contact Person" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="civpolOfficeAddress" class="form-label">Civic/Political Office Address</label>
                                        <input type="text" class="form-control" id="civpolOfficeAddress" placeholder="Civic/Political Office Address" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="civpolTelNo" class="form-label">Civic/Political Telephone Number</label>
                                        <input type="text" class="form-control" id="civpolTelNo" placeholder="Civic/Political Telephone Number" required>
                                    </div>
                                </div>
                                
                            </form>    
                        </div>
                    </div>

    
                <!-- Section 4: User Summary Section -->
                    <div class="form-section" id="summary" style="display: none;">
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
                                    <td class="category-cell"><strong>Name:</strong></td>
                                    <td class="detail-cell" id="summaryName"></td>
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

                                <!-- If no PWD ID, alternative fields -->
                                <tr id="ethnicGroupRow" style="display: none;">
                                    <td class="category-cell"><strong>Ethnic Group:</strong></td>
                                    <td class="detail-cell" id="summaryEthnicGroup"></td>
                                </tr>
                                <tr id="diagnosisRow" style="display: none;">
                                    <td class="category-cell"><strong>Diagnosis:</strong></td>
                                    <td class="detail-cell" id="summaryDiagnosis"></td>
                                </tr>
                                <tr id="educationRow" style="display: none;">
                                    <td class="category-cell"><strong>Educational Attainment:</strong></td>
                                    <td class="detail-cell" id="summaryEducation"></td>
                                </tr>
                                <tr id="refNoRow" style="display: none;">
                                    <td class="category-cell"><strong>Reference No:</strong></td>
                                    <td class="detail-cell" id="summaryReferene"></td>
                                </tr>
                                <tr id="typeRow" style="display: none;">
                                    <td class="category-cell"><strong>Type of Disability:</strong></td>
                                    <td class="detail-cell" id="summaryType"></td>
                                </tr>
                                <tr id="causeRow" style="display: none;">
                                    <td class="category-cell"><strong>Cause of Disability:</strong></td>
                                    <td class="detail-cell" id="summaryCause"></td>
                                </tr>

                                <!-- Government Numbers -->
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

                                <!-- Guardian/Caregiver Information -->
                                <tr>
                                    <td class="category-cell"><strong>Guardian First Name:</strong></td>
                                    <td class="detail-cell" id="summaryGuardianFname"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Guardian Last Name:</strong></td>
                                    <td class="detail-cell" id="summaryGuardianLname"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Guardian Middle Name:</strong></td>
                                    <td class="detail-cell" id="summaryGuardianMname"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Guardian Mobile Number:</strong></td>
                                    <td class="detail-cell" id="summaryGuardianNumber"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Caregiver First Name:</strong></td>
                                    <td class="detail-cell" id="summaryCaregiverFname"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Caregiver Last Name:</strong></td>
                                    <td class="detail-cell" id="summaryCaregiverLname"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Caregiver Middle Name:</strong></td>
                                    <td class="detail-cell" id="summaryCaregiverMname"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Caregiver Mobile Number:</strong></td>
                                    <td class="detail-cell" id="summaryCaregiverNumber"></td>
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
      // Toggle the visibility of the progress sidebar
      $("#progress-button").click(function() {
          $("#progress-menu").toggleClass('d-none');
      });
      
      function populateSummary() {
    // Basic Information
    document.getElementById('summaryName').innerText = 
        `${document.getElementById('firstName').value || 'Not Provided'} ${document.getElementById('middleName').value || ''} ${document.getElementById('lastName').value || 'Not Provided'}`.trim();
    document.getElementById('summaryGender').innerText = document.getElementById('gender').value || 'Not Provided';
    document.getElementById('summaryCivilStatus').innerText = document.getElementById('civilstatus').value || 'Not Provided';
    document.getElementById('summaryDob').innerText = document.getElementById('dob').value || 'Not Provided';
    document.getElementById('summaryTele').innerText = document.getElementById('tele').value || 'Not Provided';
    document.getElementById('summaryPhone').innerText = document.getElementById('phone').value || 'Not Provided';
    document.getElementById('summaryEmail').innerText = document.getElementById('email').value || 'Not Provided';
    document.getElementById('summaryWorkPhone').innerText = document.getElementById('workPhone').value || 'Not Provided';

    // PWD ID Information
    const pwdIdOption = document.querySelector('input[name="PWDId"]:checked');
    if (pwdIdOption && pwdIdOption.value === 'yes') {
        document.getElementById('pwdIdRow').style.display = 'table-row';
        document.getElementById('summaryPWDIdNumber').innerText = document.getElementById('PWDIdNumber').value || 'Not Provided';

        const idImageUpload = document.getElementById('PWDidImageUpload').value.split('\\').pop();  // Get file name
        document.getElementById('idImageRow').style.display = 'table-row';
        document.getElementById('summaryIdImage').innerText = idImageUpload || 'No file uploaded';
    } else {
        document.getElementById('ethnicGroupRow').style.display = 'table-row';
        document.getElementById('summaryEthnicGroup').innerText = document.getElementById('PWDethnicGroup').value || 'Not Provided';

        document.getElementById('diagnosisRow').style.display = 'table-row';
        document.getElementById('summaryDiagnosis').innerText = document.getElementById('pwdDiagnosis').value || 'Not Provided';

        document.getElementById('educationRow').style.display = 'table-row';
        document.getElementById('summaryEducation').innerText = document.getElementById('education').value || 'Not Provided';

        document.getElementById('refNoRow').style.display = 'table-row';
        document.getElementById('summaryReferene').innerText = document.getElementById('refNo').value || 'Not Provided';
    }

    // Government Numbers
    document.getElementById('summarySSS').innerText = document.getElementById('SSS').value || 'Not Provided';
    document.getElementById('summaryGSIS').innerText = document.getElementById('GSIS').value || 'Not Provided';
    document.getElementById('summaryPhilHealth').innerText = document.getElementById('PhilHealth').value || 'Not Provided';
    document.getElementById('summaryPAGIBIG').innerText = document.getElementById('PAGIBIG').value || 'Not Provided';

    // Guardian/Caregiver Information (Contact Information Section)
    document.getElementById('summaryGuardianFname').innerText = document.getElementById('guardianFname').value || 'Not Provided';
    document.getElementById('summaryGuardianLname').innerText = document.getElementById('guardianLname').value || 'Not Provided';
    document.getElementById('summaryGuardianMname').innerText = document.getElementById('guardianMname').value || 'Not Provided';
    document.getElementById('summaryGuardianNumber').innerText = document.getElementById('guardianNumber').value || 'Not Provided';

    document.getElementById('summaryCaregiverFname').innerText = document.getElementById('careFname').value || 'Not Provided';
    document.getElementById('summaryCaregiverLname').innerText = document.getElementById('careLname').value || 'Not Provided';
    document.getElementById('summaryCaregiverMname').innerText = document.getElementById('careMname').value || 'Not Provided';
    document.getElementById('summaryCaregiverNumber').innerText = document.getElementById('careNumber').value || 'Not Provided';

    // NGO and Affiliation Information (Affiliation Section)
    document.getElementById('summaryngoOrgAff').innerText = document.getElementById('ngoOrgAff').value || 'Not Provided';
    document.getElementById('summaryngoContact').innerText = document.getElementById('ngoContact').value || 'Not Provided';
    document.getElementById('summaryngoOfficeAddress').innerText = document.getElementById('ngoOfficeAddress').value || 'Not Provided';
    document.getElementById('summaryngoTelNo').innerText = document.getElementById('ngoTelNo').value || 'Not Provided';

    document.getElementById('summarypwdOrgAff').innerText = document.getElementById('pwdOrgAff').value || 'Not Provided';
    document.getElementById('summarypwdOrgContact').innerText = document.getElementById('pwdOrgContact').value || 'Not Provided';
    document.getElementById('summarypwdOrgOffice').innerText = document.getElementById('pwdOrgOffice').value || 'Not Provided';
    document.getElementById('summarypwdOrgTelNo').innerText = document.getElementById('pwdOrgTelNo').value || 'Not Provided';

    document.getElementById('summarycivpolAff').innerText = document.getElementById('civpolAff').value || 'Not Provided';
    document.getElementById('summarycivpolContact').innerText = document.getElementById('civpolContact').value || 'Not Provided';
    document.getElementById('summarycivpolOfficeAddress').innerText = document.getElementById('civpolOfficeAddress').value || 'Not Provided';
    document.getElementById('summarycivpolTelNo').innerText = document.getElementById('civpolTelNo').value || 'Not Provided';
}



  
      // Navigation button logic
      let currentSection = 0;
     
      const sections = [
            "#basic-information-section", 
            "#sectoral-section", 
            "#government-numbers", 
            "#contact-information", 
            "#affiliation", 
            "#summary"
        ];

        // Navigate to the previous section
        $("#prev-btn").click(function() {
            if (currentSection > 0) {
                $(sections[currentSection]).hide();
                currentSection--;
                $(sections[currentSection]).show();
                updateButtons();
                updateProgress();
            }
        });

                $(document).ready(function() {
        // Listen for changes to the radio buttons
        $('input[name="contactType"]').change(function() {
            if (this.value === 'guardian') {
            $('#guardianInfo').show();
            $('#caregiverInfo').hide();
            } else if (this.value === 'caregiver') {
            $('#guardianInfo').hide();
            $('#caregiverInfo').show();
            }
        });
        });


      // Progress sidebar click event handler
      $(".progress-item").click(function() {
          let targetSection = $(this).data('target');
      
          // Hide all sections
          $(".form-section").hide();
      
          // Show the clicked section
          $("#" + targetSection).show();
      
          // Update current section index based on the clicked section
          currentSection = sections.indexOf("#" + targetSection);
      
          // Scroll to top of the section
          window.scrollTo({ top: 0, behavior: 'smooth' });
      
          updateButtons();
          updateProgress();
      });
      
      // Function to update the active progress bar item
      function updateProgress() {
          $(".progress-item").removeClass("active");  // Remove active class from all items
          $(".progress-item").eq(currentSection).addClass("active");  // Add active class to current item
      }
      
      // Function to update the Next/Previous buttons
      function updateButtons() {
          if (currentSection === 0) {
              $("#prev-btn").hide();
          } else {
              $("#prev-btn").show();
              }
          
              if (currentSection === sections.length - 1) {
                  $("#next-btn").text("Submit");
              } else {
                  $("#next-btn").text("Next");
              }
          }
      
      
      // Function to update icons in the progress bar
      function updateIcon(index, state) {
          const icon = $(".progress-item").eq(index).find("i");
          if (state === "fill") {
              icon.removeClass("bi-check-square").addClass("bi-check-square-fill");  // Change to filled icon
          } else if (state === "empty") {
              icon.removeClass("bi-check-square-fill").addClass("bi-check-square");  // Change to empty icon
          }
      }
      
      // Show/Hide fields based on the radio button selection
      // Show/Hide fields based on the radio button selection
      // Show/Hide fields based on the radio button selection (PWD ID)
        $('input[name="PWDId"]').on('change', function() {
            if ($(this).val() === 'yes') {
                $('#yesFields').show();  // Show ID number and upload fields
                $('#noFields').hide();   // Hide additional fields
                // Add 'required' back to the visible fields
                $('#PWDIdNumber').attr('required', true);
                $('#PWDidImageUpload').attr('required', true);
                // Remove 'required' from hidden fields
                $('#PWDethnicGroup').removeAttr('required');
                $('#pwdDiagnosis').removeAttr('required');
                $('#refNo').removeAttr('required');
            } else if ($(this).val() === 'no') {
                $('#noFields').show();   // Show additional fields
                $('#yesFields').hide();  // Hide ID number and upload fields
                // Add 'required' to the visible fields
                $('#PWDethnicGroup').attr('required', true);
                $('#pwdDiagnosis').attr('required', true);
                $('#refNo').attr('required', true);
                // Remove 'required' from hidden fields
                $('#PWDIdNumber').removeAttr('required');
                $('#PWDidImageUpload').removeAttr('required');
            }
        });

      
      // Validate only the visible form elements when clicking next
      $("#next-btn").click(function() {
          const currentForm = $(sections[currentSection]).find('form')[0];
      
          // Only validate the visible form elements
          if (currentForm) {
              let formIsValid = true; // Flag to check form validity
              $(currentForm).find('input[required], select[required]').each(function() {
                  // Remove required for hidden fields
                  if (!$(this).is(':visible')) {
                      $(this).removeAttr('required');
                  }
      
                  // Check for invalid fields
                  if (!this.checkValidity()) {
                      formIsValid = false;
                  }
              });
      
              // If the form is not valid, prevent proceeding
              if (!formIsValid || !currentForm.checkValidity()) {
                  currentForm.reportValidity();  // Shows validation message
                  return; // Stops proceeding to the next section
              }
          }
      
          // If form is valid, proceed to the next section or submit the form
          if (currentSection < sections.length - 1) {
              $(sections[currentSection]).hide();
              updateIcon(currentSection, "fill");
              currentSection++;
              if (currentSection === 3) {
                  populateSummary();
              }
              $(sections[currentSection]).show();
              updateButtons();
              updateProgress();
          } else if (currentSection === sections.length - 1) {
              // Submit the form
              currentForm.submit();
          }
      });
      
      
      
      // Add/Remove dynamic text boxes for Problems and Needs
      $(document).ready(function() {
            // Add more functionality for Type of Disability
            $(".add-more").click(function() {
                var html = $(".copy-fields").html();
                $(this).closest(".after-add-more").after(html);
            });

            // Remove functionality for dynamically added fields
            $("body").on("click", ".remove", function() {
                $(this).closest(".control-group").remove();
            });
        });
      
          
          // Remove functionality for dynamically added fields
          $("body").on("click", ".remove-family", function() {
          if ($(this).closest(".row").length) {
              // Remove required from dynamically removed fields
              $(this).closest(".row").find('input, select').removeAttr('required');
              $(this).closest(".row").remove();
          } else {
              console.log("Error: No row found to remove.");
          }
      });
      
      </script>


</body>
</html>