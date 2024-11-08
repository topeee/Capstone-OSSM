<?php
session_start(); // Start the session
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
      <link rel="stylesheet" href="solo parent app.css">
      <link rel="icon" type="img/png" href="logo.png">
      <title>Senior Citizen Application Form</title>

      <style>
        footer {
    background: #002B5C; /* example background color */
    color: white;
    padding: 10px 0; /* Adjust padding for footer height */
    text-align: center;
    bottom: 0;
    width: 100%; /* Ensure it spans the entire width */
    z-index: 9999; /* Keep it above other content if necessary */
  }
  
  footer .containers {
    padding-left: 15px;
    padding-right: 15px;
  }
  
  footer .row {
    display: flex;
    justify-content: center;
    align-items: center; /* Align vertically */
    flex-wrap: wrap; /* Ensures items wrap properly on smaller screens */
  }
  
  footer .col {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  footer .list-inline {
    margin: 0;
    align-items: center; /* Vertically center list items */
  }
  
  footer .list-inline-item {
    margin-right: 15px; /* Space between items */
  }
  
  footer .bs-icon-circle {
    padding: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  footer .bs-icon-circle a svg {
    width: 1.2em; /* Increased icon size */
    height: 1.2em; /* Increased icon size */
    fill: white;
  }
  
  footer .link-secondary {
    color: white;
    margin-left: 10px; /* Space between text and icons */
  }
  
  footer .link-secondary:hover {
    color: #ccc; /* lighter color for hover effect */
  }
  

  
  /* For responsive design on smaller screens */
  @media (max-width: 768px) {
    footer .row {
      flex-direction: column;
      align-items: center; /* Stack elements vertically on smaller screens */
    }
    footer .col {
      margin-bottom: 10px; /* Space between footer items */
    }
  }
      </style>


      </style>
    </head>
    <body>
      <nav class="navbar navbar-dark navbar-expand-lg" style="display: none;">
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
                    <li class="progress-item" data-target="familyComposition">
                        <a href="#">
                            Family Composition
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="identificationSection">
                        <a href="#">
                            Identification
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="section5">
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
                        A separate application must be filed for each person seeking assistance. This is for Senior Citizen Assistance Only.
                    </p>
    
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" >
                            </div>
                            <div class="col-md-4">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" placeholder="Middle Name" >
                            </div>
                            <div class="col-md-4">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" >
                            </div>
                        </div>
                      
                        <div class="row mb-3">
                          <div class="col-md-6">
                            <label for="birthPlace" class="form-label">Birth Place</label>
                                <input type="text" class="form-control" id="birthPlace" placeholder="Birth Place" >
                          </div>
                          <div class="col-md-6">
                            <label for="birthdate" class="form-label">Birthdate</label>
                                <input type="date" class="form-control" id="birthdate" placeholder="Birth date" >
                          </div>
                          
                        </div>

                        <div class="row mb-3">
                          <div class="col-md-4">
                              <label for="gender" class="form-label">Gender</label>
                              <select class="form-select" id="gender" >
                                  <option value="" disabled selected>Choose...</option>
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                              </select>
                          </div>
                          <div class="col-md-4">
                              <label for="civilstatus" class="form-label">Civil Status</label>
                              <select class="form-select" id="civilstatus" >
                                  <option value="" disabled selected>Choose...</option>
                                  <option value="self">Self</option>
                                  <option value="spouse">Spouse</option>
                              </select>
                          </div>
                          <div class="col-md-4">
                            <label for="age" class="form-label">Age</label>
                                <input type="text" class="form-control" id="age" placeholder="Age" >
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                              <label for="address" class="form-label">Address</label>
                              <input type="text" class="form-control" id="address" placeholder="Address" >
                            </div>
                            <div class="col-md-6">
                                <label for="occupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="occupation" placeholder="Address" >
                              </div>
                        </div>

                        <div class="row mb-3">
                          <div class="col-md-6">
                              <label for="tele" class="form-label">Telephone Number</label>
                              <input type="tel" class="form-control" id="tele" placeholder="(916) 345-6783" >
                          </div>
                          <div class="col-md-6">
                              <label for="phone" class="form-label">Phone Number</label>
                              <input type="tel" class="form-control" id="phone" placeholder="(+63) 0923-345-6783" >
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
                    <div class="form-section" id="sectoral-section">
                      <form>
                          <h4>Sectoral Information</h4>
                          
                            <h5>Answer Only if Replacement</h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="reasonReplacement" class="form-label"><h5>Reason for Replacement</h5></label>
                                    <input type="text" id="reasonReplacement" class="form-control" placeholder="Reason" >
                                </div>
                                <div class="col-md-6">
                                    <label for="lossDate" class="form-label"><h5>If loss, when</h5></label>
                                    <input type="date" id="lossDate"  class="form-control" placeholder="" >
                                </div>
                            </div>
                            
                            <h5>In Case of Emergency, Notify:</h5>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="emergencyFirstNames" class="form-label"><h5>First Name</h5></label>
                                    <input type="text" id="emergencyFirstNames" class="form-control" placeholder="First Name" >
                                </div>
                                <div class="col-md-3">
                                    <label for="emergencyMiddleName" class="form-label"><h5>Middle Name</h5></label>
                                    <input type="text" id="emergencyMiddleNames" class="form-control" placeholder="Middle Name" >
                                </div>
                                <div class="col-md-3">
                                    <label for="emergencyLastName" class="form-label"><h5>Last Name</h5></label>
                                    <input type="text" id="emergencyLastNames" class="form-control" placeholder="Last Name" >
                                </div>
                                <div class="col-md-6">
                                    <label for="emergencyContact" class="form-label"><h5>Contact No</h5></label>
                                    <input type="number" id="emergencyContact" class="form-control" placeholder="Contact" >
                                </div>
                            </div>
                            
                          
                  
                          <!-- Employment History -->
                          <h5>Employment History</h5>
                          <div class="employment-history-container">
                              <div class="row mb-3">
                                  <div class="col-md-4">
                                      <label for="companyName" class="form-label">Company Name</label>
                                      <input type="text" id="companyName[]" class="form-control" placeholder="Company Name" >
                                  </div>
                                  <div class="col-md-4">
                                      <label for="jobTitle" class="form-label">Job Title</label>
                                      <input type="text" id="jobTitle[]" class="form-control" placeholder="Job Title" >
                                  </div>
                                  <div class="col-md-4">
                                      <label for="yearsWorked" class="form-label">Years Worked</label>
                                      <input type="number" id="yearsWorked[]" class="form-control" placeholder="Years Worked" >
                                  </div>
                              </div>
                          </div>

                          <!-- Add Button for Employment History -->
                              <div class="input-group-btn mb-3">
                                  <button class="btn btn-success add-more-employment" type="button">
                                      <i class="bi bi-plus-circle"></i> Add Employment History
                                  </button>
                                </div>
                          </form>
                    </div>

                      <!-- Template for additional employment history fields -->
                      <div class="employment-history-template d-none">
                          <div class="row mb-3 align-items-end">
                              <div class="col-md-4">
                                  <label for="companyName" class="form-label">Company Name</label>
                                  <input type="text" id="companyName[]" class="form-control" placeholder="Company Name" >
                              </div>
                              <div class="col-md-4">
                                  <label for="jobTitle" class="form-label">Job Title</label>
                                  <input type="text" id="jobTitle[]" class="form-control" placeholder="Job Title" >
                              </div>
                              <div class="col-md-4">
                                  <label for="yearsWorked" class="form-label">Years Worked</label>
                                  <input type="number" id="yearsWorked[]" class="form-control" placeholder="Years Worked" >
                              </div>
                                <div class="col-md-3" style="margin-top: 10px;">
                                    <button class="btn btn-danger remove-employment" type="button">Remove</button>
                                </div>
                            </div>
                            
                      </div>
              
    
                
                    <!-- Family Composition Section -->
                    <div class="form-section" id="familyComposition" style="display: none;">
                        <form>    
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
                                        <input type="text" id="familyBirthDate" class="form-control" placeholder="Age">
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
                        </form>    
                        <div class="col-lg-offset-0 col-lg-12 col-xs-12"> 
                            <br><br>
                              <i class="bi bi-info-circle-fill"></i>       
                              "Please fill out all text fields. Once completed, click 'Add' to save the information you entered. <br> 
                              <strong>Note: If you have additional family members to include, simply click 'Add Family' to add each one."</strong>
                        </div> 
                    </div>
                
                    <!--Identification--> 
                    <div class="form-section" id="identificationSection" style="display: none;">
                      <form>    
                          <h4>Identification</h4>

                          <div class="mb-3">
                            <label for="idImageUpload" class="form-label">Digital Copy of Signature</label>
                            <input type="file" class="form-control" id="signatureImageUpload">
                          </div>
                          <div class="mb-3">
                            <label for="idImageUpload" class="form-label">Digital Copy of 1x1 Picture</label>
                            <input type="file" class="form-control" id="1x1pictureImageUpload" >
                          </div>
                          <div class="mb-3">
                            <label for="idImageUpload" class="form-label">Birth Certificate or Baptismal Certificate</label>
                            <input type="file" class="form-control" id="ltmImageUpload" >
                          </div>
                          <div class="mb-3">
                            <label for="idImageUpload" class="form-label">Barangay Certificate of Residency</label>
                            <input type="file" class="form-control" id="rtmImageUpload" >
                          </div>
                          <div class="mb-3">
                            <label for="idImageUpload" class="form-label">Any two (2) Valid Ids (SSS ID, Voter’s Id, Driver’s License, Passport ID, Postal ID)</label>
                            <input type="file" class="form-control" id="birthCertificateImageUpload" >
                          </div>
                          <div class="mb-3">
                            <label for="idImageUpload" class="form-label">Digital Copy of any valid ID to confirm Age and Residency  </label>
                            <input type="file" class="form-control" id="validDdImageUpload" >
                          </div>
                      </form>
                    </div>


                <!-- Section 5: User Summary Section -->
                <div class="form-section" id="section5" style="display: none;">
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
                            <tr><td><strong>First Name:</strong></td><td id="summaryFirstName"></td></tr>
                            <tr><td><strong>Middle Name:</strong></td><td id="summaryMiddleName"></td></tr>
                            <tr><td><strong>Last Name:</strong></td><td id="summaryLastName"></td></tr>
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
                              <td><strong>Birth Place:</strong></td>
                              <td id="summaryBirthPlace"></td>
                          </tr>
                          <tr>
                              <td><strong>Age:</strong></td>
                              <td id="summaryAge"></td>
                          </tr>
                          <tr>
                              <td><strong>Address:</strong></td>
                              <td id="summaryAddress"></td>
                          </tr>
                          <tr>
                            <td><strong>Occupation:</strong></td>
                            <td id="summaryOccupation"></td>
                          </tr>
                          <tr>
                              <td><strong>Telephone:</strong></td>
                              <td id="summaryTele"></td>
                          </tr>
                          <tr>
                              <td><strong>Phone:</strong></td>
                              <td id="summaryPhone"></td>
                          </tr>
                          

                        <!-- Sectoral Information -->
                        <tr>
                            <td><strong>Reason for Replacement</strong></td>
                            <td id="summaryReason"></td>
                        </tr>
                        <tr>
                            <td><strong>If loss, when</strong></td>
                            <td id="summaryLoss"></td>
                        </tr>
                        <tr>
                            <td><strong>First Name</strong></td>
                            <td id="summaryEmergencyFirstName"></td>
                        </tr>
                        <tr>
                            <td><strong>Middle Name</strong></td>
                            <td id="summaryEmergencyMiddleName"></td>
                        </tr>
                        <tr>
                            <td><strong>Last Name</strong></td>
                            <td id="summaryEmergencyLastName"></td>
                        </tr>
                        <tr>
                            <td><strong>Contact No.</strong></td>
                            <td id="summaryEmergencyContact"></td>
                        </tr>
                        
                        <tr id="educationRow">
                            <td><strong>Educational Attainment:</strong></td>
                            <td id="summaryEducation"></td>
                        </tr>
                        <tr id="companyRow">
                            <td><strong>Employment History:</strong></td>
                            <td id="summaryCompany"></td>
                        </tr>
                          <!-- Identification Section -->
                          <tr>
                              <td><strong>Digital Copy of Signature:</strong></td>
                              <td id="summarySignatureImage"></td>
                          </tr>
                          <tr>
                              <td><strong>Digital Copy of 1x1 Picture:</strong></td>
                              <td id="summaryPictureImage"></td>
                          </tr>
                          <tr>
                              <td><strong>Digital Copy of Left Thumb Mark:</strong></td>
                              <td id="summaryLtmImage"></td>
                          </tr>
                          <tr>
                              <td><strong>Digital Copy of Right Thumb Mark:</strong></td>
                              <td id="summaryRtmImage"></td>
                          </tr>
                          <tr>
                              <td><strong>Digital Copy of Birth Certificate:</strong></td>
                              <td id="summaryBirthCertImage"></td>
                          </tr>
                          <tr>
                              <td><strong>Digital Copy of Valid ID:</strong></td>
                              <td id="summaryValidIdImage"></td>
                          </tr>

                           <!-- Family Composition -->
                           <table class="table table-bordered" id="familyTable">
                            <thead>
                                <tr>
                                    <th>Relationship</th>
                                    <th>Full Name</th>
                                    <th>Birth Date</th>
                                    <th>Civil Status</th>
                                    <th>Occupation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Rows will be added here -->
                            </tbody>   
                        </table>
                        </table>    
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

    <script>
        $(document).ready(function() {
            showCurrentSection();
            updateButtons();
            updateProgress();
            });

        // Toggle the visibility of the progress sidebar
        $("#progress-button").click(function() {
            $("#progress-menu").toggleClass('hidden-xs');
        });
        
    function populateSummary() {
    const getValue = (id) => document.getElementById(id).value || 'Not Provided';

    // Basic Information
    document.getElementById('summaryFirstName').innerText = getValue('firstName');
    localStorage.setItem('summaryFirstName', document.getElementById('summaryFirstName').innerText);

    document.getElementById('summaryMiddleName').innerText = getValue('middleName');
    localStorage.setItem('summaryMiddleName', document.getElementById('summaryMiddleName').innerText);

    document.getElementById('summaryLastName').innerText = getValue('lastName');
    localStorage.setItem('summaryLastName', document.getElementById('summaryLastName').innerText);
    
    document.getElementById('summaryGender').innerText = getValue('gender');
    localStorage.setItem('summaryGender', document.getElementById('summaryGender').innerText);

    document.getElementById('summaryCivilStatus').innerText = getValue('civilstatus');
    localStorage.setItem('summaryCivilStatus', document.getElementById('summaryCivilStatus').innerText);

    document.getElementById('summaryDob').innerText = getValue('birthdate');
    localStorage.setItem('summaryDob', document.getElementById('summaryDob').innerText);

    document.getElementById('summaryBirthPlace').innerText = getValue('birthPlace');
    localStorage.setItem('summaryBirthPlace', document.getElementById('summaryBirthPlace').innerText);

    document.getElementById('summaryAge').innerText = getValue('age');
    localStorage.setItem('summaryAge', document.getElementById('summaryAge').innerText);
    
    document.getElementById('summaryAddress').innerText = getValue('address');
    localStorage.setItem('summaryAddress', document.getElementById('summaryAddress').innerText);

    document.getElementById('summaryOccupation').innerText = getValue('occupation');
    localStorage.setItem('summaryOccupation', document.getElementById('summaryOccupation').innerText);

    document.getElementById('summaryTele').innerText = getValue('tele');
    localStorage.setItem('summaryTele', document.getElementById('summaryTele').innerText);

    document.getElementById('summaryPhone').innerText = getValue('phone');
    localStorage.setItem('summaryPhone', document.getElementById('summaryPhone').innerText);

    // Sectoral Information
    document.getElementById('summaryReason').innerText = getValue('reasonReplacement');
    localStorage.setItem('summaryReason', document.getElementById('summaryReason').innerText);

    document.getElementById('summaryLoss').innerText = getValue('lossDate');
    localStorage.setItem('summaryLoss', document.getElementById('summaryLoss').innerText);

    // Emergency Contact Information
    document.getElementById('summaryEmergencyFirstName').innerText = getValue('emergencyFirstNames');
    localStorage.setItem('summaryEmergencyFirstName', document.getElementById('summaryEmergencyFirstName').innerText);

    document.getElementById('summaryEmergencyMiddleName').innerText = getValue('emergencyMiddleNames');
    localStorage.setItem('summaryEmergencyMiddleName', document.getElementById('summaryEmergencyMiddleName').innerText);

    document.getElementById('summaryEmergencyLastName').innerText = getValue('emergencyLastNames');
    localStorage.setItem('summaryEmergencyLastName', document.getElementById('summaryEmergencyLastName').innerText);

    document.getElementById('summaryEmergencyContact').innerText = getValue('emergencyContact');
    localStorage.setItem('summaryEmergencyContact', document.getElementById('summaryEmergencyContact').innerText);

    // Educational Attainment and Employment History
    document.getElementById('summaryEducation').innerText = getValue('educAttainment');
    document.getElementById('summaryCompany').innerText = "See employment history section"; // Placeholder text
  
          // Identification Section
          const getFileName = (id) => document.getElementById(id).value.split('\\').pop() || 'No file uploaded';
          document.getElementById('summarySignatureImage').innerText = getFileName('signatureImageUpload');
          localStorage.setItem('summaryPhone', document.getElementById('summaryPhone').innerText);

          document.getElementById('summaryPictureImage').innerText = getFileName('1x1pictureImageUpload');
          localStorage.setItem('summaryPhone', document.getElementById('summaryPhone').innerText);

          document.getElementById('summaryLtmImage').innerText = getFileName('ltmImageUpload');
          localStorage.setItem('summaryPhone', document.getElementById('summaryPhone').innerText);

          document.getElementById('summaryRtmImage').innerText = getFileName('rtmImageUpload');
          localStorage.setItem('summaryPhone', document.getElementById('summaryPhone').innerText);

          document.getElementById('summaryBirthCertImage').innerText = getFileName('birthCertificateImageUpload');
          localStorage.setItem('summaryPhone', document.getElementById('summaryPhone').innerText);

          document.getElementById('summaryValidIdImage').innerText = getFileName('validDdImageUpload');
          localStorage.setItem('summaryPhone', document.getElementById('summaryPhone').innerText);

        }
      
        function addFamilyRow() {
    // Get values from input fields
    const relationship = document.getElementById("familyRelationship").value;
    const fullName = document.getElementById("familyFullName").value;
    const birthDate = document.getElementById("familyBirthDate").value;
    const civilStatus = document.getElementById("familyCivilStatus").value;
    const occupation = document.getElementById("familyOccupation").value;

    // Check if all fields are filled
    if (!relationship || !fullName || !birthDate || !civilStatus || !occupation) {
        alert("Please fill in all fields before adding.");
        return;
    } else {
        alert("Family member added successfully!");
    }

    // Create a new row in the familyTable
    const table = document.getElementById("familyTable").getElementsByTagName("tbody")[0];
    const newRow = table.insertRow();

    // Insert cells in the new row
    newRow.insertCell(0).textContent = relationship;
    newRow.insertCell(1).textContent = fullName;
    newRow.insertCell(2).textContent = birthDate;
    newRow.insertCell(3).textContent = civilStatus;
    newRow.insertCell(4).textContent = occupation;

    // Add a remove button to the row
    const removeCell = newRow.insertCell(5);
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
    document.getElementById("familyOccupation").value = "";
}

// Function to save family table data to localStorage
function saveFamilyData() {
    const familyData = [];
    const rows = document.querySelectorAll("#familyTable tbody tr");

    rows.forEach(row => {
        const cells = row.getElementsByTagName("td");
        if (cells.length > 4) {
            familyData.push({
                relationship: cells[0].textContent,
                fullName: cells[1].textContent,
                birthDate: cells[2].textContent,
                civilStatus: cells[3].textContent,
                occupation: cells[4].textContent
            });
        }
    });

    localStorage.setItem("familyData", JSON.stringify(familyData));
}
      
        // Navigation logic
        let currentSection = 0;
        const sections = [
          "#basic-information-section",
          "#sectoral-section",
          "#familyComposition",
          "#identificationSection",
          "#section5"
        ];
      
        function showCurrentSection() {
          $(sections.join(',')).hide();
          $(sections[currentSection]).show();
        }
      
        function checkRequiredFields() {
          const $currentForm = $(sections[currentSection]).find('form');
          let allValid = true;
      
          $currentForm.find('input[required], select[required]').each(function() {
              if (!$(this).val()) {
                  $(this).addClass('error');
                  allValid = false;
              } else {
                  $(this).removeClass('error');
              }
          });
      
          return allValid;
        }
      
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
      
        
$("#next-btn").on('click', function () {
    // Check if all required fields are filled in the current section
    if (!checkRequiredFields()) {
        alert("Please fill in all required fields before proceeding.");
        return; // Stop if any required field is missing
    }

    if (currentSection === sections.length - 1) {
        // Redirect to SeniorForm.html if on the last section (Submit action)
        window.location.href = "Senior Form.html";
    } else {
        // Move to the next section
        $(sections[currentSection]).hide();
        currentSection++;
        $(sections[currentSection]).show();

        // If we've reached the Identification section, populate the summary
        if (sections[currentSection] === "#identificationSection") {
            populateSummary();
        }

        updateButtons();
        updateProgress();
    }
});


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

      
        $("#prev-btn").on('click', function () {
          if (currentSection > 0) {
            currentSection--;
            showCurrentSection();
            updateButtons();
            updateProgress();
          }
        });
      
        // Sidebar navigation
        $(".progress-item").click(function() {
            let targetSection = $(this).data('target');
            $(".form-section").hide();
            $("#" + targetSection).show();
            currentSection = sections.indexOf("#" + targetSection);
            window.scrollTo({ top: 0, behavior: 'smooth' });
            updateButtons();
            updateProgress();
        });
      

      </script>
      

</body>
</html>