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
      <link rel="stylesheet" href="Footer.Clean.icons.css">
      <link rel="stylesheet" href="solo parent app.css">
      <link rel="icon" type="img/png" href="logo.png">
      <title>Senior Citizen Application Form</title>

    </head>
    <body>
      <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php" style="display: none">
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
                    <div class="form-section" id="sectoral-section" style="display: none;">
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


        function updateProgress() {
            // Remove the active class from all progress items
            $(".progress-item").removeClass("active");

            // Add the active class to the current section's progress item
            $(".progress-item").eq(currentSection).addClass("active");
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