

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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
      <link rel="stylesheet" href="bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap.min.js">
      <link rel="stylesheet" href="Footer.Clean.icons.css">
      <link rel="stylesheet" href="solo parent app.css">
      <link rel="icon" type="img/png" href="logo.png">
      <title>Solo Parent Application</title>

      <style>
        /* Custom Dropdown Styling */
.dropdown dt a {
  display: inline-block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ced4da;
  border-radius: 4px;
  color: #495057;
  background-color: #ffffff;
  text-align: left;
}

.dropdown dd ul {
  display: none;
  border: 1px solid #ced4da;
  border-radius: 4px;
  padding: 10px;
  background-color: #ffffff;
  position: absolute;
  z-index: 1000;
  width: 100%;
}

.mutliSelect ul {
  list-style-type: none;
  padding: 0;
}

.mutliSelect li {
  padding: 5px;
  border-bottom: 1px solid #e9ecef;
}

.mutliSelect li:last-child {
  border-bottom: none;
}

.hida {
  color: #6c757d;
}

      </style>
    </head>
    <body>
      <nav class="navbar navbar-dark navbar-expand-lg" >
        <div class="container-fluid" style="display: none;">
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
              <ul class="dropdown-menu dropdown-menu-end" s>
                <li><a class="dropdown-item" href="account_profile.html">Profile</a></li>
                <li><a class="dropdown-item" href="#">History Transaction</a></li>
                <li><a class="dropdown-item logout-item" href="login.html">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <main class="p-4 mx-auto" style="width: 70%; height: 100%; background-color: rgb(227, 249, 255);">
      <div class="container">
      <form action= "Solo Parent Application DB.php" method="POST" >

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
    
            <!-- Main form -->
            <div class="col-md-9">
                <!-- Basic Information Section -->
                <div class="form-section" id="basic-information-section">
                    <h4>Basic Information</h4>
                    <p class="alert alert-info">
                        A separate application must be filed for each person seeking assistance. This is for Solo Parent Assistance Only.
                    </p>
    
                   
                       
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <label for="precinct" class="form-label">Precinct #</label>
                                <input type="text" class="form-control" id="precinct" name="precinct" placeholder="Precinct" required>
                            </div>
                            <div class="col-md-4">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                            </div>
                            <div class="col-md-2">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender" onchange="genderChange()" required>
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="civilstatus" class="form-label">Civil Status</label>
                                <select class="form-select" id="civilstatus" name="civilstatus" onchange="civilChange()" required>
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                            <div class="col-md-4">
                                <label for="birthPlace" class="form-label">Birth Place</label>
                                <input type="text" class="form-control" id="birthPlace" name="birthPlace" placeholder="Birth Place" required>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="telephone" class="form-label">Telephone Number</label>
                                <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="(916) 345-6783" required>
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
                            <div class="col-md-2">
                                <label for="bloodType" class="form-label">Blood Type</label>
                                <select class="form-select" id="bloodType" name="bloodType" required>
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
                                <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion" required>
                            </div>
                        </div>

                        
    
                        <div class="col-lg-offset-0 col-lg-12 col-xs-12"> 
                            <br><br>
                              <i class="bi bi-info-circle-fill"></i>       
                                If you are also PWD, you may also apply here: <a href="*">PWD Application</a>. If not, Continue to Sectoral Information.
                          </div>
                   
                </div>
    
                <!-- Sectoral Information Section -->
                <div class="form-section" id="sectoral-section" style="display: none;">
               

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
                                    <select class="form-select" id="soloParentClassification" onchange="classificationChange()" required>
                                        <option value="" disabled selected>Choose...</option>
                                        <option value="Individually Paying">Individually Paying</option>
                                        <option value="Lifetime">Lifetime</option>
                                        <option value="OFW">OFW</option>
                                        <option value="Employed">Employed</option>
                                        <option value="Private">Private</option>
                                        <option value="Government">Government</option>
                                        <option value="Sponsored">Sponsored</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                <label for="familyResources" class="form-label">Family Resources</label>
                                    <select class="form-select" id="familyResources" onchange="familyResourcesChange()" required>
                                        <option value="" disabled selected>Choose...</option>
                                        <option value="Employeds">Employed</option>
                                        <option value="Self-Employed">Self-Employed</option>
                                        <option value="Others">Others</option>
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
                            </div>
    
                            
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    <label for="probneeds" class="form-label">Problems/Needs of Solo Parent</label>
                                    <dl class="dropdown" style="width: 350px;">
                                        <dt>
                                            <a href="#">
                                                <span class="hida">Select Problem/Need</span>
                                                <p class="multiSel"></p>
                                            </a>
                                        </dt>
                                        <dd>
                                            <div class="mutliSelect">
                                                <ul>
                                                    <li><input id="leaveBenefits" type="checkbox" value="Leave Benefits" /><label for="leaveBenefits">Leave Benefits</label></li>
                                                    <li><input id="flexiTime" type="checkbox" value="Flexi-Time at Work" /><label for="flexiTime">Flexi-Time at Work</label></li>
                                                    <li><input id="medicalCare" type="checkbox" value="Medical Care" /><label for="medicalCare">Medical Care</label></li>
                                                    <li><input id="employment" type="checkbox" value="Employment" /><label for="employment">Employment</label></li>
                                                    <li><input id="additionalIncome" type="checkbox" value="Additional Income" /><label for="additionalIncome">Additional Income</label></li>
                                                    <li><input id="housingShelter" type="checkbox" value="Housing and Shelter" /><label for="housingShelter">Housing and Shelter</label></li>
                                                    <li><input id="educationChildren" type="checkbox" value="Education of Children/Child" /><label for="educationChildren">Education of Children/Child</label></li>
                                                    <li><input id="others" type="checkbox" value="Others" /><label for="others">Others</label></li>
                                                    </select>
                                                </ul>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <input type="text" id="otherProblem" class="form-control mt-2" 
                                 placeholder="Please specify..." style="display: none;" required>
                            </div>
    
                            <br>
    
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="company" class="form-label">Name Of Company/Agent</label>
                                    <input type="text" class="form-control" id="company" placeholder="Company Name" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="officeAddress" class="form-label">Office Address</label>
                                    <input type="text" class="form-control" id="officeAddress" placeholder="Office Address" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="occupation" class="form-label">Occupation</label>
                                    <input type="text" class="form-control" id="occupation" placeholder="Occupation" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="monthlyIncome" class="form-label">Monthly Income</label>
                                    <input type="number" class="form-control" id="monthlyIncome" placeholder="Enter Monthly Income" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="tinNumber" class="form-label">TIN Number</label>
                                    <input type="number" class="form-control" id="tinNumber" placeholder="TIN Number" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="sssNumber" class="form-label">SSS Number</label>
                                    <input type="number" class="form-control" id="sssNumber" placeholder="SSS Number" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="gsisNumber" class="form-label">GSIS Number</label>
                                    <input type="number" class="form-control" id="gsisNumber" placeholder="GSIS Number" required>
                                </div>
                            </div>
                        </div>
                
                </div>
    
                <div class="form-section" id="other-information" style="display: none;">
             
    
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
                            <div class="col-md-3">
                                <label class="form-label">4 P's Member</label>
                                <div class="form-check">
                                    <input type="radio" name="fourPsMember" id="fourPsNo" value="No" onclick="fourPsStatusChange()">
                                    <label for="fourPsNo">No</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="fourPsMember" id="fourPsYes" value="Yes" onclick="fourPsStatusChange()">
                                    <label for="fourPsYes">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="fourPsId" class="form-label">ID#</label>
                                <input type="text" class="form-control" id="fourPsId" placeholder="Enter ID Number" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">PhilHealth Member</label>
                                <div class="form-check">
                                    <input type="radio" name="philHealthMember" id="philHealthNo" value="No" onclick="philHealthStatusChange()">
                                    <label for="philHealthNo">No</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="philHealthMember" id="philHealthYes" value="Yes" onclick="philHealthStatusChange()">
                                    <label for="philHealthYes">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-3">
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
                  
                </div>
                
                    <!-- Family Composition Section -->
                    <div class="form-section" id="familyComposition" style="display: none;">
                   
  
                            <h4>Family Composition</h4>
                                <!-- Input fields for a new family member -->
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <input type="text" id="familyRelationship" class="form-control" placeholder="Relationship">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <input type="text" id="familyFullName" class="form-control" placeholder="Full Name (Last, First, Middle)">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <input type="date" id="familyBirthDate" class="form-control">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <select id="familyCivilStatus" class="form-select">
                                            <option value="" disabled selected>Civil Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <select id="familyEducAttainment" class="form-select">
                                            <option value="" disabled selected>Educ. Attainment</option>
                                            <option value="na">N/A</option>
                                            <option value="elementarys">Elementary</option>
                                            <option value="High School">High School</option>
                                            <option value="Colleges">College</option>
                                            <option value="Bachelor's Degree">Bachelor's Degree</option>
                                            <option value="Master's Degree">Master's Degree</option>
                                            <option value="Doctorate">Doctorate</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" id="familyOccupation" class="form-control" placeholder="Occupation">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <button type="button" class="btn btn-success" onclick="addFamilyRow()">Add Family</button>
                                    </div>
                                </div>
                
                            
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
                            <!-- Basic Information -->
                            <tr><td><strong>Precinct</strong></td><td id="summaryPrecinct"></td></tr>
                            <tr><td><strong>First Name:</strong></td><td id="summaryFirstName"></td></tr>
                            <tr><td><strong>Middle Name:</strong></td><td id="summaryMiddleName"></td></tr>
                            <tr><td><strong>Last Name:</strong></td><td id="summaryLastName"></td></tr>
                            <tr><td><strong>Gender:</strong></td><td id="summaryGender"></td></tr>
                            <tr><td><strong>Civil Status:</strong></td><td id="summaryCivilStatus"></td></tr>
                            <tr><td><strong>Date of Birth:</strong></td><td id="summaryDob"></td></tr>
                            <tr><td><strong>Birth Place:</strong></td><td id="summaryBirthPlace"></td></tr>
                            <tr><td><strong>Religion:</strong></td><td id="summaryReligion"></td></tr>
                            <tr><td><strong>Blood Type:</strong></td><td id="summaryBloodType"></td></tr>

                            <!-- Contact Information -->
                            <tr><td><strong>Telephone:</strong></td><td id="summaryTele"></td></tr>
                            <tr><td><strong>Phone:</strong></td><td id="summaryPhone"></td></tr>
                            <tr><td><strong>Email:</strong></td><td id="summaryEmail"></td></tr>

                            <!-- Solo Parent Information -->
                            <tr><td><strong>Solo Parent ID:</strong></td><td id="summarySoloParentId"></td></tr>
                            <tr><td><strong>ID Image:</strong></td><td id="summaryIdImage"></td></tr>
                            <tr><td><strong>Solo Parent Classification:</strong></td><td id="summarySoloParentClassification"></td></tr>
                            <tr><td><strong>Monthly Income:</strong></td><td id="summaryMonthlyIncome"></td></tr>
                            <tr><td><strong>Problem/Needs:</strong></td><td id="summaryProbNeeds"></td></tr>

                            <!-- Company and Employment Information -->
                            <tr><td><strong>Source Of Income:</strong></td><td id="summaryFamilyResources"></td></tr>
                            <tr><td><strong>Company Name/Employer Name:</strong></td><td id="summaryCompany"></td></tr>
                            <tr><td><strong>Office Address:</strong></td><td id="summaryOfficeAddress"></td></tr>
                            <tr><td><strong>Occupation:</strong></td><td id="summaryOccupation"></td></tr>
                            <tr><td><strong>TIN Number:</strong></td><td id="summaryTinNumber"></td></tr>
                            <tr><td><strong>SSS Number:</strong></td><td id="summarySssNumber"></td></tr>
                            <tr><td><strong>GSIS Number:</strong></td><td id="summaryGsisNumber"></td></tr>

                            <!-- Address and Residency -->
                            <tr><td><strong>Years of Stay:</strong></td><td id="summaryYearsOfStay"></td></tr>
                            <tr><td><strong>Months of Stay:</strong></td><td id="summaryMonthsOfStay"></td></tr>
                            <tr><td><strong>Lot Number:</strong></td><td id="summaryLotNumber"></td></tr>
                            <tr><td><strong>Block Number:</strong></td><td id="summaryBlkNumber"></td></tr>
                            <tr><td><strong>Street / Subdivision:</strong></td><td id="summaryStreet"></td></tr>
                            <tr><td><strong>Barangay:</strong></td><td id="summaryBarangay"></td></tr>


                            <!-- 4Ps and PhilHealth Membership -->
                            <tr><td><strong>4 P's Member:</strong></td><td id="summaryFourPsMember"></td></tr>
                            <tr><td><strong>4 P's ID:</strong></td><td id="summaryFourPsId"></td></tr>
                            <tr><td><strong>PhilHealth Member:</strong></td><td id="summaryPhilHealthMember"></td></tr>
                            <tr><td><strong>PhilHealth ID:</strong></td><td id="summaryPhilHealthId"></td></tr>

                            <!-- Emergency Contact Information -->
                            <tr><td><strong>Emergency Contact Name:</strong></td><td id="summaryEmergencyName"></td></tr>
                            <tr><td style="display: none;"></td><td id="summaryemergencyFirstName" style="display: none;"></td></tr>
                            <tr><td style="display: none;"></td><td id="summaryemergencyMiddleName" style="display: none;"></td></tr>
                            <tr><td style="display: none;"></td><td id="summaryemergencyLastName" style="display: none;"></td></tr>
                            <tr><td><strong>Emergency Contact Number:</strong></td><td id="summaryEmergencyContact"></td></tr>
                            <tr><td><strong>Relationship:</strong></td><td id="summaryEmergencyRelationship"></td></tr>
                            <tr><td><strong>Emergency Address:</strong></td><td id="summaryEmergencyAddress"></td></tr>

                            <!-- Family Composition -->
                            <table class="table table-bordered" id="familyTable">
                                <thead>
                                    <tr>
                                        <th>Relationship</th>
                                        <th>Full Name</th>
                                        <th>Birth Date</th>
                                        <th>Civil Status</th>
                                        <th>Educ. Attainment</th>
                                        <th>Occupation</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Rows will be added here -->
                                </tbody>                         
                        </tbody>
                    </table>
                </div>


    
    
                <!-- Navigation Buttons -->
                <div class="navigation-buttons">
                    <button type="button" id="prev-btn" class="btn btn-secondary" style="display: none;">Previous</button>
                    <button type="submit" id="next-btn" class="btn btn-primary">Next</button>
                </div>
    
            </div>
        </div>
    </div>
    </form>
    </main>
 

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
        // Helper function to retrieve the value of an input or show "N/A" if empty
        const getValue = (id) => {
            const element = document.getElementById(id);
            return element ? element.value : 'N/A';
        };

        // Populate the summary section with the values from the form
        function populateSummary() {
            // Basic Information
                document.getElementById('summaryFirstName').innerText = getValue('firstName');
                document.getElementById('summaryMiddleName').innerText = getValue('middleName');
                document.getElementById('summaryLastName').innerText = getValue('lastName');
                localStorage.setItem('summaryFirstName', document.getElementById('summaryFirstName').innerText);
                localStorage.setItem('summaryMiddleName', document.getElementById('summaryMiddleName').innerText);
                localStorage.setItem('summaryLastName', document.getElementById('summaryLastName').innerText);    

            document.getElementById('summaryCivilStatus').innerText = getValue('civilstatus');
            document.getElementById('summaryGender').innerText = getValue('gender');

            document.getElementById('summaryDob').innerText = getValue('dob');
            localStorage.setItem('summaryDob', document.getElementById('summaryDob').innerText);

            document.getElementById('summaryBirthPlace').innerText = getValue('birthPlace');
            localStorage.setItem('summaryBirthPlace', document.getElementById('summaryBirthPlace').innerText);

            document.getElementById('summaryReligion').innerText = getValue('religion');
            localStorage.setItem('summaryReligion', document.getElementById('summaryReligion').innerText);

            document.getElementById('summaryBloodType').innerText = getValue('bloodType');
            localStorage.setItem('summaryBloodType', document.getElementById('summaryBloodType').innerText);

            document.getElementById('summaryPrecinct').innerText = getValue('precinct'); // Display precinct in the summary
            localStorage.setItem('summaryPrecinct', document.getElementById('summaryPrecinct').innerText); // Store precinct in localStorage


    
            // Contact Information
            document.getElementById('summaryTele').innerText = getValue('telephone');
            localStorage.setItem('summaryTele', document.getElementById('summaryTele').innerText); // Store precinct in localStorage

            document.getElementById('summaryPhone').innerText = getValue('phone');
            localStorage.setItem('summaryPhone', document.getElementById('summaryPhone').innerText); // Store precinct in localStorage

            document.getElementById('summaryEmail').innerText = getValue('email');
            localStorage.setItem('summaryEmail', document.getElementById('summaryEmail').innerText); // Store precinct in localStorage

    
            // Solo Parent Information
            document.getElementById('summarySoloParentId').innerText = getValue('soloParentIdNumber');
            document.getElementById('summaryIdImage').innerText = getValue('idImageUpload');
    
            document.getElementById('summarySoloParentClassification').innerText = getValue('soloParentClassification');
            localStorage.setItem('summarySoloParentClassification', document.getElementById('summarySoloParentClassification').innerText);

            document.getElementById('summaryFamilyResources').innerText = getValue('familyResources');
            localStorage.setItem('summaryFamilyResources', document.getElementById('summaryFamilyResources').innerText);

            document.getElementById('summaryMonthlyIncome').innerText = getValue('monthlyIncome');
            localStorage.setItem('summaryMonthlyIncome', document.getElementById('summaryMonthlyIncome').innerText);

            

            // Employment Information
            document.getElementById('summaryCompany').innerText = getValue('company');
            localStorage.setItem('summaryCompany', document.getElementById('summaryCompany').innerText); // Store precinct in localStorage

            document.getElementById('summaryOfficeAddress').innerText = getValue('officeAddress');
            localStorage.setItem('summaryOfficeAddress', document.getElementById('summaryOfficeAddress').innerText); // Store precinct in localStorage

            document.getElementById('summaryOccupation').innerText = getValue('occupation');
            localStorage.setItem('summaryOccupation', document.getElementById('summaryOccupation').innerText); // Store precinct in localStorage

            document.getElementById('summaryTinNumber').innerText = getValue('tinNumber');
            localStorage.setItem('summaryTinNumber', document.getElementById('summaryTinNumber').innerText); // Store precinct in localStorage

            document.getElementById('summarySssNumber').innerText = getValue('sssNumber');
            localStorage.setItem('summarySssNumber', document.getElementById('summarySssNumber').innerText); // Store precinct in localStorage

            document.getElementById('summaryGsisNumber').innerText = getValue('gsisNumber');
            localStorage.setItem('summaryGsisNumber', document.getElementById('summaryGsisNumber').innerText); // Store precinct in localStorage

    
            // Address and Residency
            document.getElementById('summaryLotNumber').innerText = getValue('lotNumber');
            localStorage.setItem('summaryLotNumber', document.getElementById('summaryLotNumber').innerText); // Store precinct in localStorage

            document.getElementById('summaryBlkNumber').innerText = getValue('blkNumber');
            localStorage.setItem('summaryBlkNumber', document.getElementById('summaryBlkNumber').innerText); // Store precinct in localStorage

            document.getElementById('summaryStreet').innerText = getValue('street');
            localStorage.setItem('summaryStreet', document.getElementById('summaryStreet').innerText); // Store precinct in localStorage

            document.getElementById('summaryBarangay').innerText = getValue('barangay');
            localStorage.setItem('summaryBarangay', document.getElementById('summaryBarangay').innerText); // Store precinct in localStorage

            document.getElementById('summaryYearsOfStay').innerText = getValue('yearsOfStay');
            localStorage.setItem('summaryYearsOfStay', document.getElementById('summaryYearsOfStay').innerText); // Store precinct in localStorage

            document.getElementById('summaryMonthsOfStay').innerText = getValue('monthsOfStay');
            localStorage.setItem('summaryMonthsOfStay', document.getElementById('summaryMonthsOfStay').innerText); // Store precinct in localStorage

    
            // 4Ps and PhilHealth Membership
            const fourPsMember = document.querySelector('input[name="fourPsMember"]:checked')?.value || 'N/A';
            document.getElementById('summaryFourPsMember').innerText = fourPsMember;
            if (fourPsMember === 'yes') {
                document.getElementById('summaryFourPsId').innerText = getValue('fourPsId');
                localStorage.setItem('selectedFourPs', selectedFourPs);  // Store PhilHealth membership status

            }
    
            const philHealthMember = document.querySelector('input[name="philHealthMember"]:checked')?.value || 'N/A';
            document.getElementById('summaryPhilHealthMember').innerText = philHealthMember;
            if (philHealthMember === 'yes') {
                document.getElementById('summaryPhilHealthId').innerText = getValue('philHealthId');
                localStorage.setItem('selectedPhilHealth', selectedPhilHealth);  // Store PhilHealth membership status
            }
    
            // Emergency Contact Full Name (combined in one step)
        document.getElementById('summaryemergencyFirstName').innerText = getValue('emergencyFirstName');
        localStorage.setItem('summaryemergencyFirstName', document.getElementById('summaryemergencyFirstName').innerText);

        document.getElementById('summaryemergencyMiddleName').innerText = getValue('emergencyMiddleName');
        localStorage.setItem('summaryemergencyMiddleName', document.getElementById('summaryemergencyMiddleName').innerText);

        document.getElementById('summaryemergencyLastName').innerText = getValue('emergencyLastName');
        localStorage.setItem('summaryemergencyLastName', document.getElementById('summaryemergencyLastName').innerText);

        // Display the full name in summaryEmergencyName
        const fullName = `${document.getElementById('summaryemergencyFirstName').innerText} ${document.getElementById('summaryemergencyMiddleName').innerText} ${document.getElementById('summaryemergencyLastName').innerText}`.trim();
        document.getElementById('summaryEmergencyName').innerText = fullName;
        localStorage.setItem('summaryEmergencyName', fullName);

        // Emergency Contact Number, Relationship, and Address
        document.getElementById('summaryEmergencyContact').innerText = getValue('emergencyContactNumber');
        localStorage.setItem('summaryEmergencyContact', document.getElementById('summaryEmergencyContact').innerText);

        document.getElementById('summaryEmergencyRelationship').innerText = getValue('emergencyRelationship');
        localStorage.setItem('summaryEmergencyRelationship', document.getElementById('summaryEmergencyRelationship').innerText);

        document.getElementById('summaryEmergencyAddress').innerText = getValue('emergencyAddress');
        localStorage.setItem('summaryEmergencyAddress', document.getElementById('summaryEmergencyAddress').innerText);
        };

                // Function to update the summary of selected checkboxes
        function updateSelectedNeeds() {
            // Select all checkboxes in the "Problems/Needs" section
            const checkboxes = document.querySelectorAll('.mutliSelect input[type="checkbox"]');
            const selectedNeeds = [];

            // Loop through checkboxes and add checked values to the array
            checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                selectedNeeds.push(checkbox.value);
            }
            });

            // Update the summary field with the selected values
            document.getElementById('summaryProbNeeds').innerText = selectedNeeds.join(', ') || "None selected";
        }

        // Add change event listeners to each checkbox
        document.querySelectorAll('.mutliSelect input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', updateSelectedNeeds);
        });

        // Initialize the summary on page load
        document.addEventListener('DOMContentLoaded', updateSelectedNeeds);

        function civilChange() {
            const selectedStatus = document.getElementById('civilstatus').value;
            localStorage.setItem('selectedStatus', selectedStatus);  // Store civil status in localStorage
        }

        function genderChange() {
            const selectedGender = document.getElementById('gender').value;
            localStorage.setItem('selectedGender', selectedGender);  // Store the gender in localStorage
        }

        function classificationChange() {
            const selectedClassification = document.getElementById('soloParentClassification').value;
            localStorage.setItem('selectedFamilyClassification', selectedClassification);  // Store the classification in localStorage
        }

        function familyResourcesChange() {
            const selectedResource = document.getElementById('familyResources').value;
            localStorage.setItem('selectedFamilyResource', selectedResource);  // Store the family resource in localStorage
        }

        function fourPsStatusChange() {
            const selectedFourPs = document.querySelector('input[name="fourPsMember"]:checked').value;
            localStorage.setItem('selectedFourPs', selectedFourPs);  // Store 4Ps membership status
        }

        function philHealthStatusChange() {
            const selectedPhilHealth = document.querySelector('input[name="philHealthMember"]:checked').value;
            localStorage.setItem('selectedPhilHealth', selectedPhilHealth);  // Store PhilHealth membership status
        }

        function storeProblemNeeds() {
            const selectedProblem = document.getElementById('probneeds').value;
            // Get existing problems from localStorage or initialize an empty array
            const storedProblems = JSON.parse(localStorage.getItem('selectedProblems')) || [];
            
            if (!storedProblems.includes(selectedProblem)) {
                storedProblems.push(selectedProblem);  // Add new problem if not already stored
            }

            localStorage.setItem('selectedProblems', JSON.stringify(storedProblems));  // Store in localStorage
        }

        // Solo Parent Application.html script
        document.querySelectorAll('.mutliSelect input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                let selectedNeeds = [];
                document.querySelectorAll('.mutliSelect input[type="checkbox"]:checked').forEach(checkedBox => {
                    selectedNeeds.push(checkedBox.id);
                });
                localStorage.setItem('selectedNeeds', JSON.stringify(selectedNeeds));
            });
        });

                

        function addFamilyRow() {
    // Get values from input fields
    const relationship = document.getElementById("familyRelationship").value;
    const fullName = document.getElementById("familyFullName").value;
    const birthDate = document.getElementById("familyBirthDate").value;
    const civilStatus = document.getElementById("familyCivilStatus").value;
    const educAttainment = document.getElementById("familyEducAttainment").value;
    const occupation = document.getElementById("familyOccupation").value;

    // Check if all fields are filled
    if (!relationship || !fullName || !birthDate || !civilStatus || !educAttainment || !occupation) {
        alert("Please fill in all fields before adding.");
        return;
    }

    // Create a new row in the familyTable
    const table = document.getElementById("familyTable").getElementsByTagName("tbody")[0];
    const newRow = table.insertRow();

    // Insert cells in the new row
    newRow.insertCell(0).textContent = relationship;
    newRow.insertCell(1).textContent = fullName;
    newRow.insertCell(2).textContent = birthDate;
    newRow.insertCell(3).textContent = civilStatus;
    newRow.insertCell(4).textContent = educAttainment;
    newRow.insertCell(5).textContent = occupation;

    // Add a remove button to the row
    const removeCell = newRow.insertCell(6);
    const removeButton = document.createElement("button");
    removeButton.className = "btn btn-danger";
    removeButton.textContent = "Remove";
    removeButton.onclick = function() {
        table.deleteRow(newRow.rowIndex - 1); // Adjust index due to header row
        saveFamilyData(); // Save changes to localStorage
    };
    removeCell.appendChild(removeButton);

    // Save data to localStorage
    saveFamilyData();

    // Clear input fields after adding
    document.getElementById("familyRelationship").value = "";
    document.getElementById("familyFullName").value = "";
    document.getElementById("familyBirthDate").value = "";
    document.getElementById("familyCivilStatus").value = "";
    document.getElementById("familyEducAttainment").value = "";
    document.getElementById("familyOccupation").value = "";
}

// Function to save family table data to localStorage
function saveFamilyData() {
    const familyData = [];
    const rows = document.querySelectorAll("#familyTable tbody tr");

    rows.forEach(row => {
        const cells = row.getElementsByTagName("td");
        if (cells.length > 5) {
            familyData.push({
                relationship: cells[0].textContent,
                fullName: cells[1].textContent,
                birthDate: cells[2].textContent,
                civilStatus: cells[3].textContent,
                educAttainment: cells[4].textContent,
                occupation: cells[5].textContent
            });
        }
    });

    localStorage.setItem("familyData", JSON.stringify(familyData));
}


            // Toggle the visibility of the progress sidebar
            $("#progress-button").click(function() {
                $("#progress-menu").toggleClass('hidden-xs');
            });
        
            // Show or hide fields based on "Solo Parent ID" radio selection
            $('input[name="soloParentId"]').on('change', function() {
                if ($(this).val() === 'yes') {
                    $('#yesFields').show();
                    $('#noFields').hide();
                    $('#soloParentIdNumber').attr('required', true);
                    $('#idImageUpload').attr('required', true);
                    $('#soloParentClassification').removeAttr('required');
                    $('#monthlyIncome').removeAttr('required');
                } else {
                    $('#noFields').show();
                    $('#yesFields').hide();
                    $('#soloParentClassification').attr('required', true);
                    $('#monthlyIncome').attr('required', true);
                    $('#soloParentIdNumber').removeAttr('required');
                    $('#idImageUpload').removeAttr('required');
                }
            });
        
            $(document).ready(function () {
        // Section references
        const sections = [
        "#basic-information-section",
        "#sectoral-section",
        "#other-information",
        "#familyComposition",
        "#section4"
    ];
    let currentSection = 0; // Track the current section index

    // Initialize buttons and sections
    $(sections[currentSection]).show(); // Show the first section
    updateButtons();
    updateProgress();

    // Handle the Next button click
    $("#next-btn").on('click', function () {
    const isLastSection = currentSection === sections.length - 1;

    // Check if the current section is `#familyComposition`
    if (sections[currentSection] === "#familyComposition") {
        populateSummary(); // Populate the summary if on the family composition section
    }

    if (isLastSection) {
        populateSummary(); // Ensure it populates if this is the final submit
        window.location.href = "Solo Parent Form.php";
    } else {
        // Move to the next section
        $(sections[currentSection]).hide();
        currentSection++;
        $(sections[currentSection]).show();
        updateButtons();
        updateProgress();
    }
});


    // Handle the Previous button click
    $("#prev-btn").on('click', function () {
        if (currentSection > 0) {
            $(sections[currentSection]).hide();
            currentSection--;
            $(sections[currentSection]).show();
            updateButtons();
            updateProgress();
        }
    });

    // Function to update the button states
    function updateButtons() {
        // Toggle visibility of Previous button
        $("#prev-btn").toggle(currentSection > 0);

        // Change the Next button text to "Submit" on the last section
        const isLastSection = currentSection === sections.length - 1;
        $("#next-btn").text(isLastSection ? "Submit" : "Next");
    }

    // Function to update the progress bar
    function updateProgress() {
        $(".progress-item").removeClass("active");
        $(".progress-item").eq(currentSection).addClass("active");
    }

    // Add click functionality to progress items
    $(".progress-item").click(function () {
        const targetSection = $(this).data("target");
        const newIndex = sections.findIndex(section => section === `#${targetSection}`);

        if (newIndex !== -1) {
            // Hide the current section and show the target section
            $(sections[currentSection]).hide();
            currentSection = newIndex;
            $(sections[currentSection]).show();
            updateButtons();
            updateProgress();
        }
    });

    $("body").on("click", ".remove-family", function () {
        $(this).closest(".row").remove();
    });

    // Toggle other problem input based on selection
    $("#probneeds").change(function () {
        const otherInput = $("#otherProblem");
        otherInput.toggle($(this).val() === 'others');
        otherInput.attr('required', $(this).val() === 'others');
    });

    // Toggle employment fields based on family resources selection
    $("#familyResources").change(function () {
        toggleEmploymentFields(this.value === 'Employeds');
    });

    function toggleEmploymentFields(enabled) {
        const fields = ['company', 'officeAddress', 'occupation', 'monthlyIncome', 'tinNumber', 'sssNumber', 'gsisNumber'];
        fields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            field.disabled = !enabled;
            if (!enabled) field.value = '';
        });
    }

    // Handle Solo Parent ID logic
    $('input[name="soloParentId"]').on('change', function () {
        if ($(this).val() === 'yes') {
            $('#yesFields').show();
            $('#noFields').hide();
            $('#soloParentIdNumber').attr('required', true);
            $('#idImageUpload').attr('required', true);
            $('#soloParentClassification').removeAttr('required');
            $('#monthlyIncome').removeAttr('required');
        } else {
            $('#noFields').show();
            $('#yesFields').hide();
            $('#soloParentClassification').attr('required', true);
            $('#monthlyIncome').attr('required', true);
            $('#soloParentIdNumber').removeAttr('required');
            $('#idImageUpload').removeAttr('required');
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
  // References for "4 P's Member" section
  const fourPsYes = document.getElementById("fourPsYes");
  const fourPsNo = document.getElementById("fourPsNo");
  const fourPsId = document.getElementById("fourPsId");

  // References for "PhilHealth Member" section
  const philHealthYes = document.getElementById("philHealthYes");
  const philHealthNo = document.getElementById("philHealthNo");
  const philHealthId = document.getElementById("philHealthId");

  // Disable ID# fields initially if "No" is selected by default
  if (fourPsNo.checked) {
    fourPsId.disabled = true;
  }
  if (philHealthNo.checked) {
    philHealthId.disabled = true;
  }

  // Event listeners for "4 P's Member" radio buttons
  fourPsYes.addEventListener("change", function () {
    fourPsId.disabled = !fourPsYes.checked; // Enable if "Yes" is selected
  });
  fourPsNo.addEventListener("change", function () {
    if (fourPsNo.checked) {
      fourPsId.disabled = true;
      fourPsId.value = ""; // Optionally, clear the field
    }
  });

  // Event listeners for "PhilHealth Member" radio buttons
  philHealthYes.addEventListener("change", function () {
    philHealthId.disabled = !philHealthYes.checked; // Enable if "Yes" is selected
  });
  philHealthNo.addEventListener("change", function () {
    if (philHealthNo.checked) {
      philHealthId.disabled = true;
      philHealthId.value = ""; // Optionally, clear the field
    }
  });
});

$(document).ready(function() {
    $(".dropdown dt a").on('click', function() {
        $(".dropdown dd ul").slideToggle('fast');
    });

    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
    });

    $('.mutliSelect input[type="checkbox"]').on('click', function() {
        var title = $(this).val() + ",";
        if ($(this).is(':checked')) {
            var html = '<span title="' + title + '">' + title + '</span>';
            $('.multiSel').append(html);
            $(".hida").hide();
        } else {
            $('span[title="' + title + '"]').remove();
            if ($('.multiSel').children().length == 0) {
                $(".hida").show();
            }
        }
    });
});


    </script>

</body>
</html>