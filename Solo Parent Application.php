<?php
      session_start(); // Start the session
include 'db_connection.php';
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
    
        // Prepare a SQL query
        $stmt = $conn->prepare("INSERT INTO SoloParentApplication (first_name, middle_name, last_name, gender, civil_status, dob, tele, phone, email, work_phone) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssss", $firstName, $middleName, $lastName, $gender, $civilstatus, $dob, $tele, $phone, $email, $workPhone);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Execute the query
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    
        // Close the connection
        $conn->close();
    }

include 'header.php';
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
      <link rel="stylesheet" href="solo parent app.css">
      <link rel="icon" type="img/png" href="logo.png">
      <title>Solo Parent Application</title>
      

    </head>
    <body>

    
    <div class="container">
        <div class="row">
            <!-- Button to toggle progress sidebar -->
            <button id="progress-button" class="btn btn-primary mb-3 d-md-none">Toggle Progress</button>
    
            <!-- Sidebar -->
            <div class="container-fluid d-flex" style="min-height: 100vh;">
                <div class="col-md-3 progress-sidebar">
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
                        <li class="progress-item" data-target="other-information">
                            <a href="#">
                                Other Information
                                <i class="bi bi-check-square"></i>
                            </a>
                        </li>
                        <li class="progress-item" data-target="familyComposition">
                            <a href="#">
                                Family Composition
                                <i class="bi bi-check-square"></i>
                            </a>
                        </li>
                        <li class="progress-item" data-target="section4">
                            <a href="#">
                                Summary of Information
                                <i class="bi bi-check-square"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    
            <main class="p-4 mx-auto" style="width: 70%; height: 10%; background-color: rgb(227, 249, 255);">
                        <!-- Main form -->
                        <div class="col-md-9">
                            <!-- Basic Information Section -->
                            <div class="form-section" id="basic-information-section">
                                <h4>Basic Information</h4>
                                <p class="alert alert-info">
                                    A separate application must be filed for each person seeking assistance. This is for Solo Parent Assistance Only.
                                </p>
                
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <label for="precinct" class="form-label">Precinct #</label>
                                            <input type="text" class="form-control" id="precinct" placeholder="Precinct" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="middleName" class="form-label">Middle Name</label>
                                            <input type="text" class="form-control" id="middleName" placeholder="Middle Name" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                                        </div>
                                    </div>
                
                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <label for="gender" class="form-label">Gender</label>
                                            <select class="form-select" id="gender" required>
                                                <option value="" disabled selected>Choose...</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="civilstatus" class="form-label">Civil Status</label>
                                            <select class="form-select" id="civilstatus" required>
                                                <option value="" disabled selected>Choose...</option>
                                                <option value="self">Single</option>
                                                <option value="spouse">Married</option>
                                                <option value="spouse">Widowed</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="birthPlace" class="form-label">Birth Place</label>
                                            <input type="text" class="form-control" id="birthPlace" placeholder="Birth Place" required>
                                        </div>
                                    </div>
                
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="tele" class="form-label">Telephone Number</label>
                                            <input type="tel" class="form-control" id="tele" placeholder="(916) 345-6783" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" placeholder="(+63) 0923-345-6783" required>
                                        </div>
                                    </div>
                
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Email" required>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="bloodType" class="form-label">Blood Type</label>
                                            <select class="form-select" id="bloodType" required>
                                                <option value="" disabled selected>Choose...</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="religion" class="form-label">Religion</label>
                                            <input type="text" class="form-control" id="religion" placeholder="Religion" required>
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
                                    <p class="fs-4">Do you have an existing <strong> Solo Parent ID number? </strong></p>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="soloParentId" id="yesOption" value="yes" required>
                                                <label class="form-check-label" for="yesOption">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="soloParentId" id="noOption" value="no" required>
                                                <label class="form-check-label" for="noOption">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div id="yesFields" style="display: none;">
                                        <div class="mb-3">
                                            <label for="soloParentIdNumber" class="form-label">Solo Parent ID Number</label>
                                            <input type="text" class="form-control" id="soloParentIdNumber" placeholder="Enter ID Number" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="idImageUpload" class="form-label">Upload Solo Parent ID</label>
                                            <input type="file" class="form-control" id="idImageUpload" required>
                                        </div>
                                    </div>
                
                                    <div id="noFields" style="display: none;">
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="soloParentClassification" class="form-label">Solo Parent Classification</label>
                                                <input type="text" class="form-control" id="soloParentClassification" placeholder="Classification" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="monthlyIncome" class="form-label">Monthly Income</label>
                                                <input type="number" class="form-control" id="monthlyIncome" placeholder="Enter Monthly Income" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="totalIncome" class="form-label">Total Income</label>
                                                <input type="number" class="form-control" id="totalIncome" placeholder="Enter Total Income" required>
                                            </div>
                                        </div>
                
                                        <div class="col-md-6">
                                            <label for="problems" class="form-label">Problems/Needs of Solo Parent</label>
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="input-group control-group after-add-more">
                                                        <select class="form-select" id="probneeds" required>
                                                            <option value="" disabled selected>Select Problem/Need</option>
                                                            <option value="leaveBenefits">Leave Benefits</option>
                                                            <option value="flexiTime">Flexi-Time at Work</option>
                                                            <option value="medicalCare">Medical Care</option>
                                                            <option value="employment">Employment</option>
                                                            <option value="additionalIncome">Additional Income</option>
                                                            <option value="housingShelter">Housing and Shelter</option>
                                                            <option value="educationChildren">Education of Children/Child</option>
                                                            <option value="educationChildren">Others:</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                
                                        <br>
                
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="familyResources" class="form-label">Family Resources</label>
                                                <select class="form-select" id="familyResources" required>
                                                    <option value="" disabled selected>Choose...</option>
                                                    <option value="employed">Employed</option>
                                                    <option value="selfEmployed">Self-Employed</option>
                                                    <option value="others">Others</option>
                                                </select>
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
                                            <div class="col-md-4">
                                                <label for="company" class="form-label">Name Of Company/Agent</label>
                                                <input type="text" class="form-control" id="company" placeholder="Company Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                
                            <div class="form-section" id="other-information" style="display: none;">
                                <form>    
                                    <h4>Other Information</h4>
                                    <p style="font-size: 20px; font-weight: bold;">LENGTH OF STAY IN SAN MATEO RIZAL:</p>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="yearsOfStay" class="form-label">No. of Year/s</label>
                                            <input type="number" class="form-control" id="yearsOfStay" placeholder="Years" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="monthsOfStay" class="form-label">No. of Month/s</label>
                                            <input type="number" class="form-control" id="monthsOfStay" placeholder="Months" required>
                                        </div>
                                    </div>
                                    <p style="font-size: 20px; font-weight: bold;">Current Address:</p>

                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label for="lotNumber" class="form-label">LOT#</label>
                                            <input type="text" class="form-control" id="lotNumber" placeholder="LOT#" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="blkNumber" class="form-label">BLK#</label>
                                            <input type="text" class="form-control" id="blkNumber" placeholder="BLK#" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="street" class="form-label">STREET / SUBDIVISION</label>
                                            <input type="text" class="form-control" id="street" placeholder="STREET / SUBDIVISION" required>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="barangay" class="form-label">BARANGAY</label>
                                            <input type="text" class="form-control" id="barangay" placeholder="BARANGAY" required>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <label class="form-label">4 P's Member</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="fourPsMember" id="fourPsNo" value="no" required>
                                                <label class="form-check-label" for="fourPsNo">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="fourPsMember" id="fourPsYes" value="yes" required>
                                                <label class="form-check-label" for="fourPsYes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="fourPsId" class="form-label">ID#</label>
                                            <input type="text" class="form-control" id="fourPsId" placeholder="Enter ID Number" required>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">PhilHealth Member</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="philHealthMember" id="philHealthNo" value="no" required>
                                                <label class="form-check-label" for="philHealthNo">No</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="philHealthMember" id="philHealthYes" value="yes" required>
                                                <label class="form-check-label" for="philHealthYes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="philHealthId" class="form-label">ID#</label>
                                            <input type="text" class="form-control" id="philHealthId" placeholder="Enter ID Number" required>
                                        </div>
                                    </div>
                                    <p style="font-size: 20px; font-weight: bold;">In case of emergency, please notify:</p>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="emergencyFirstName" class="form-label">Emergency First Name</label>
                                            <input type="text" class="form-control" id="emergencyFirstName" placeholder="First Name" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="emergencyMiddleName" class="form-label">Emergency Middle Name</label>
                                            <input type="text" class="form-control" id="emergencyMiddleName" placeholder="Middle Name" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="emergencyLastName" class="form-label">Emergency Last Name</label>
                                            <input type="text" class="form-control" id="emergencyLastName" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="emergencyContactNumber" class="form-label">Contact Number/s</label>
                                            <input type="tel" class="form-control" id="emergencyContactNumber" placeholder="Contact Number/s" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="emergencyRelationship" class="form-label">Relationship</label>
                                            <input type="text" class="form-control" id="emergencyRelationship" placeholder="Relationship" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="emergencyAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="emergencyAddress" placeholder="Address" required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                                <!-- Family Composition Section -->
                                <div class="form-section" id="familyComposition" style="display: none;">
                                    <form>    
                                        <h4>Family Composition</h4>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="row input-group control-group after-add-more-family">
                                                    <!-- Family Member Name -->
                                                    <div class="col-md-3 mb-3">
                                                        <label for="familyResources" class="form-label">Name</label>
                                                        <input type="text" name="familyName[]" class="form-control" placeholder="Name" required>
                                                    </div>
                                
                                                    <!-- Birthdate -->
                                                    <div class="col-md-3 mb-3">
                                                        <label for="familyResources" class="form-label">Birthdate</label>
                                                        <input type="date" name="familyBirthdate[]" class="form-control" placeholder="Birthdate" required>
                                                    </div>
                                
                                                    <!-- Status -->
                                                    <div class="col-md-2 mb-3">
                                                        <label for="familyResources" class="form-label">Civil Status</label>
                                                        <select name="familyStatus[]" class="form-select" required>
                                                            <option value="" disabled selected>Status</option>
                                                            <option value="single">Single</option>
                                                            <option value="married">Married</option>
                                                            <option value="widowed">Widowed</option>
                                                        </select>
                                                    </div>
                                
                                                    <!-- PWD Status -->
                                                    <div class="col-md-2 mb-3">
                                                        <label for="familyResources" class="form-label">PWD</label>
                                                        <select name="familyPwdStatus[]" class="form-select" required>
                                                            <option value="" disabled selected>PWD</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                
                                                    <!-- Relationship -->
                                                    <div class="col-md-2 mb-3">
                                                        <label for="familyResources" class="form-label">Relationship</label>
                                                        <input type="text" name="familyRelationship[]" class="form-control" placeholder="Relationship" required>
                                                    </div>
                                                </div>
                                
                                                <!-- Studying or Employed -->
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label>Currently Studying?</label>
                                                        <select name="familyStudying[]" class="form-select currently-studying" required>
                                                            <option value="" disabled selected>Choose...</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                        <input type="text" name="gradeLevel[]" class="form-control grade-level mt-2" placeholder="Grade Level" style="display: none;" required>
                                                    </div>
                                
                                                    <div class="col-md-6 mb-3">
                                                        <label>Currently Employed?</label>
                                                        <select name="familyEmployed[]" class="form-select currently-employed" required>
                                                            <option value="" disabled selected>Choose...</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                        <input type="text" name="occupation[]" class="form-control occupation mt-2" placeholder="Occupation" style="display: none;" required>
                                                        <input type="number" name="monthlyIncome[]" class="form-control monthly-income mt-2" placeholder="Monthly Income" style="display: none;" required>
                                                    </div>
                                                </div>
                                
                                                <!-- Add/Remove Buttons -->
                                                <div class="input-group-btn mb-3">
                                                    <button class="btn btn-success add-more-family" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="duplicate-family hide">
                                            <div class="row control-group input-group" style="margin-top:10px">
                                                <!-- Family Member Name -->
                                                <div class="col-md-3 mb-3">
                                                    <label for="familyResources" class="form-label">Name</label>
                                                    <input type="text" name="familyName[]" class="form-control" placeholder="Name" required>
                                                </div>
                                
                                                <!-- Birthdate -->
                                                <div class="col-md-3 mb-3">
                                                    <label for="familyResources" class="form-label">Birthdate</label>
                                                    <input type="date" name="familyBirthdate[]" class="form-control" placeholder="Birthdate" required>
                                                </div>
                                
                                                <!-- Status -->
                                                <div class="col-md-2 mb-3">
                                                    <label for="familyResources" class="form-label">Civil Status</label>
                                                    <select name="familyStatus[]" class="form-select" required>
                                                        <option value="" disabled selected>Status</option>
                                                        <option value="single">Single</option>
                                                        <option value="married">Married</option>
                                                        <option value="widowed">Widowed</option>
                                                    </select>
                                                </div>
                                
                                                <!-- PWD Status -->
                                                <div class="col-md-2 mb-3">
                                                    <label for="familyResources" class="form-label">PWD</label>
                                                    <select name="familyPwdStatus[]" class="form-select" required>
                                                        <option value="" disabled selected>PWD</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                
                                                <!-- Relationship -->
                                                <div class="col-md-2 mb-3">
                                                    <label for="familyResources" class="form-label">Relationship</label>
                                                    <input type="text" name="familyRelationship[]" class="form-control" placeholder="Relationship" required>
                                                </div>
                                
                                                <!-- Studying or Employed -->
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label>Currently Studying?</label>
                                                        <select name="familyStudying[]" class="form-select currently-studying" required>
                                                            <option value="" disabled selected>Choose...</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                        <input type="text" name="gradeLevel[]" class="form-control grade-level mt-2" placeholder="Grade Level" style="display: none;" required>
                                                    </div>
                                
                                                    <div class="col-md-6 mb-3">
                                                        <label>Currently Employed?</label>
                                                        <select name="familyEmployed[]" class="form-select currently-employed" required>
                                                            <option value="" disabled selected>Choose...</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                        <input type="text" name="occupation[]" class="form-control occupation mt-2" placeholder="Occupation" style="display: none;" required>
                                                        <input type="number" name="monthlyIncome[]" class="form-control monthly-income mt-2" placeholder="Monthly Income" style="display: none;" required>
                                                    </div>
                                                </div>
                                
                                                <!-- Remove Button -->
                                                <div class="input-group-btn">
                                                    <button class="btn btn-danger remove-family" type="button">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>    
                                </div>
                            
                
                            <!-- Section 4: User Summary Section -->
                            <div class="form-section" id="section4" style="display: none;">
                                <h4>User Summary</h4>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Name:</strong></td>
                                            <td id="summaryName"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Gender:</strong></td>
                                            <td id="summaryGender"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Civil Status:</strong></td>
                                            <td id="summaryCivilStatus"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Date of Birth:</strong></td>
                                            <td id="summaryDob"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Telephone:</strong></td>
                                            <td id="summaryTele"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Phone:</strong></td>
                                            <td id="summaryPhone"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email:</strong></td>
                                            <td id="summaryEmail"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Work Phone:</strong></td>
                                            <td id="summaryWorkPhone"></td>
                                        </tr>
                                        <tr id="soloParentIdRow" style="display: none;">
                                            <td><strong>Solo Parent ID:</strong></td>
                                            <td id="summarySoloParentId"></td>
                                        </tr>
                                        <tr id="idImageRow" style="display: none;">
                                            <td><strong>ID Image:</strong></td>
                                            <td id="summaryIdImage"></td>
                                        </tr>
                                        <tr id="soloParentClassificationRow" style="display: none;">
                                            <td><strong>Solo Parent Classification:</strong></td>
                                            <td id="summarySoloParentClassification"></td>
                                        </tr>
                                        <tr id="monthlyIncomeRow" style="display: none;">
                                            <td><strong>Monthly Income:</strong></td>
                                            <td id="summaryMonthlyIncome"></td>
                                        </tr>
                                        <tr id="totalIncomeRow" style="display: none;">
                                            <td><strong>Total Income:</strong></td>
                                            <td id="summaryTotalIncome"></td>
                                        </tr>
                                        <tr id="problemsRow" style="display: none;">
                                            <td><strong>Problems:</strong></td>
                                            <td id="summaryProblems"></td>
                                        </tr>
                                        <tr id="needsRow" style="display: none;">
                                            <td><strong>Needs:</strong></td>
                                            <td id="summaryNeeds"></td>
                                        </tr>
                                        <tr id="familyResourcesRow" style="display: none;">
                                            <td><strong>Family Resources:</strong></td>
                                            <td id="summaryFamilyResources"></td>
                                        </tr>
                                        <tr id="educationRow" style="display: none;">
                                            <td><strong>Educational Attainment:</strong></td>
                                            <td id="summaryEducation"></td>
                                        </tr>
                                        <tr id="companyRow" style="display: none;">
                                            <td><strong>Company Name:</strong></td>
                                            <td id="summaryCompany"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Family Members:</strong></td>
                                            <td id="summaryFamilyMembers"></td>
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
        </div>
    </div>

        
    <br>
    <br>
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

<script>
      // Toggle the visibility of the progress sidebar
      $("#progress-button").click(function() {
          $("#progress-menu").toggleClass('hidden-xs');
      });
      
      function populateSummary() {
          // Basic Information
          const firstName = document.getElementById('firstName').value || 'Not Provided';
          const middleName = document.getElementById('middleName').value || '';
          const lastName = document.getElementById('lastName').value || 'Not Provided';
          document.getElementById('summaryName').innerText = `${firstName} ${middleName} ${lastName}`.trim();
      
          document.getElementById('summaryGender').innerText = document.getElementById('gender').value || 'Not Provided';
          document.getElementById('summaryCivilStatus').innerText = document.getElementById('civilstatus').value || 'Not Provided';
          document.getElementById('summaryDob').innerText = document.getElementById('dob').value || 'Not Provided';
      
          // Contact Information
          document.getElementById('summaryTele').innerText = document.getElementById('tele').value || 'Not Provided';
          document.getElementById('summaryPhone').innerText = document.getElementById('phone').value || 'Not Provided';
          document.getElementById('summaryEmail').innerText = document.getElementById('email').value || 'Not Provided';
          document.getElementById('summaryWorkPhone').innerText = document.getElementById('workPhone').value || 'Not Provided';
      
          // Hide all sectoral info rows by default
          document.getElementById('soloParentIdRow').style.display = 'none';
          document.getElementById('idImageRow').style.display = 'none';
          document.getElementById('soloParentClassificationRow').style.display = 'none';
          document.getElementById('monthlyIncomeRow').style.display = 'none';
          document.getElementById('totalIncomeRow').style.display = 'none';
          document.getElementById('problemsRow').style.display = 'none';
          document.getElementById('needsRow').style.display = 'none';
          document.getElementById('familyResourcesRow').style.display = 'none';
          document.getElementById('educationRow').style.display = 'none';
          document.getElementById('companyRow').style.display = 'none';
      
          const soloParentOption = document.querySelector('input[name="soloParentId"]:checked');
      
          if (soloParentOption && soloParentOption.value === 'yes') {
              // Show only Solo Parent ID and ID Image fields for "Yes" option
              document.getElementById('soloParentIdRow').style.display = 'table-row';
              document.getElementById('summarySoloParentId').innerText = document.getElementById('soloParentIdNumber').value || 'Not Provided';
              
              const idImageUpload = document.getElementById('idImageUpload').value.split('\\').pop();  // Get file name
              document.getElementById('idImageRow').style.display = 'table-row';
              document.getElementById('summaryIdImage').innerText = idImageUpload || 'No file uploaded';
              
          } else if (soloParentOption && soloParentOption.value === 'no') {
              // Show only additional fields for "No" option
              document.getElementById('soloParentClassificationRow').style.display = 'table-row';
              document.getElementById('summarySoloParentClassification').innerText = document.getElementById('soloParentClassification').value || 'Not Provided';
              
              document.getElementById('monthlyIncomeRow').style.display = 'table-row';
              document.getElementById('summaryMonthlyIncome').innerText = document.getElementById('monthlyIncome').value || 'Not Provided';
              
              document.getElementById('totalIncomeRow').style.display = 'table-row';
              document.getElementById('summaryTotalIncome').innerText = document.getElementById('totalIncome').value || 'Not Provided';
      
              const problems = [];
              document.querySelectorAll('input[name="problems[]"]').forEach((el) => {
                  if (el.value) {
                      problems.push(el.value);
                  }
              });
              document.getElementById('problemsRow').style.display = 'table-row';
              document.getElementById('summaryProblems').innerText = problems.length > 0 ? problems.join(', ') : 'No Problems Added';
      
              const needs = [];
              document.querySelectorAll('input[name="needs[]"]').forEach((el) => {
                  if (el.value) {
                      needs.push(el.value);
                  }
              });
              document.getElementById('needsRow').style.display = 'table-row';
              document.getElementById('summaryNeeds').innerText = needs.length > 0 ? needs.join(', ') : 'No Needs Added';
      
              document.getElementById('familyResourcesRow').style.display = 'table-row';
              document.getElementById('summaryFamilyResources').innerText = document.getElementById('familyResources').value || 'Not Provided';
      
              document.getElementById('educationRow').style.display = 'table-row';
              document.getElementById('summaryEducation').innerText = document.getElementById('education').value || 'Not Provided';
      
              document.getElementById('companyRow').style.display = 'table-row';
              document.getElementById('summaryCompany').innerText = document.getElementById('company').value || 'Not Provided';
          }
      
          // Family Composition (Optional Section)
          const familyNames = [];
          document.querySelectorAll('input[name="familyName[]"]').forEach((el) => {
              if (el.value) {
                  familyNames.push(el.value);
              }
          });
          document.getElementById('summaryFamilyMembers').innerText = familyNames.length > 0 ? familyNames.join(', ') : 'No Family Members Added';
      }
      
      
      
      // Navigation button logic
      let currentSection = 0;
      const sections = ["#basic-information-section", "#sectoral-section", "#other-information", "#familyComposition", "#section4"];

      $("#prev-btn").click(function() {
          if (currentSection > 0) {
              $(sections[currentSection]).hide();  // Hide current section
              currentSection--;  // Decrement section index
              $(sections[currentSection]).show();  // Show previous section
              updateIcon(currentSection + 1, "empty");  // Change icon to empty for the section ahead
              updateButtons();
              updateProgress();  // Update the progress bar
          }
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
      $('input[name="soloParentId"]').on('change', function() {
          if ($(this).val() === 'yes') {
              $('#yesFields').show();  // Show ID number and upload fields
              $('#noFields').hide();   // Hide additional textboxes
              // Add 'required' back to the visible fields
              $('#soloParentIdNumber').attr('required', true);
              $('#idImageUpload').attr('required', true);
              // Remove 'required' from hidden fields
              $('#soloParentClassification').removeAttr('required');
              $('#monthlyIncome').removeAttr('required');
              $('#totalIncome').removeAttr('required');
          } else if ($(this).val() === 'no') {
              $('#noFields').show();   // Show additional textboxes
              $('#yesFields').hide();  // Hide ID number and upload fields
              // Add 'required' to the visible fields
              $('#soloParentClassification').attr('required', true);
              $('#monthlyIncome').attr('required', true);
              $('#totalIncome').attr('required', true);
              // Remove 'required' from hidden fields
              $('#soloParentIdNumber').removeAttr('required');
              $('#idImageUpload').removeAttr('required');
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
      
          // If form is valid, proceed to the next section
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
            }});
      
      // Add/Remove dynamic text boxes for Problems and Needs
      $(document).ready(function() {
          // Add more functionality
          $(".add-more").click(function() {
              var html = $(".copy-fields").html();  // Clone the hidden input fields
              $(this).closest(".after-add-more").after(html);  // Append the cloned fields after the current set
          });
      
          // Remove functionality for dynamically added fields
          $("body").on("click", ".remove", function() {
              $(this).closest(".control-group").remove();  // Remove the input group that contains the clicked remove button
          });
      });
      
      // Show or hide the grade level field based on "Currently Studying" selection
      $("body").on("change", ".currently-studying", function() {
          var gradeLevelInput = $(this).closest(".row").find(".grade-level");
          if ($(this).val() === "yes") {
              gradeLevelInput.show();  // Show grade level field if currently studying
          } else {
              gradeLevelInput.hide();  // Hide grade level field if not studying
          }
      });
      
      // Show or hide the occupation and monthly income fields based on "Currently Employed" selection
      $("body").on("change", ".currently-employed", function() {
          var occupationInput = $(this).closest(".row").find(".occupation");
          var monthlyIncomeInput = $(this).closest(".row").find(".monthly-income");
          if ($(this).val() === "yes") {
              occupationInput.show();  // Show occupation field if employed
              monthlyIncomeInput.show();  // Show monthly income field if employed
          } else {
              occupationInput.hide();  // Hide occupation field if not employed
              monthlyIncomeInput.hide();  // Hide monthly income field if not employed
          }
      });
      
      
          $(document).ready(function() {
              // Add more functionality for family composition
              $(document).on("click", ".add-more-family", function() {
          var html = $(".duplicate-family").html();
          $(this).closest(".panel-body").append(html);
          $(this).closest(".panel-body").find('input, select').last().attr('required', true); // Ensure new fields are required
          });
      
          // Remove functionality for dynamically added fields
          $("body").on("click", ".remove-family", function() {
              var row = $(this).closest(".row");
              if (row.length) {
                  // Remove required from dynamically removed fields
                  row.find('input, select').removeAttr('required');
                  row.remove();
              } else {
                  console.log("Error: No row found to remove.");
              }
          });
      
          // Form submission validation
          $("form").on("submit", function(event) {
              var isValid = true;
              $(this).find('input[required], select[required]').each(function() {
                  if ($(this).val() === "") {
                      isValid = false;
                      $(this).addClass('error');  // Add error class for styling
                  } else {
                      $(this).removeClass('error');
                  }
              });
      
              if (!isValid) {
                  event.preventDefault();  // Prevent form submission
                  alert("Please fill out all required fields.");
              }
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