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
                    <li class="progress-item" data-target="identification">
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
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" placeholder="Middle Name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                            </div>
                        </div>
                      
                        <div class="row mb-3">
                          <div class="col-md-4">
                            <label for="birthPlace" class="form-label">Birth Place</label>
                                <input type="text" class="form-control" id="birthPlace" placeholder="Birth Place" required>
                          </div>
                          <div class="col-md-4">
                            <label for="birthdate" class="form-label">Birthdate</label>
                                <input type="date" class="form-control" id="birthdate" placeholder="Birth date" required>
                          </div>
                          <div class="col-md-4">
                            <label for="age" class="form-label">Age</label>
                                <input type="text" class="form-control" id="age" placeholder="Age" required>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <div class="col-md-4">
                              <label for="gender" class="form-label">Gender</label>
                              <select class="form-select" id="gender" required>
                                  <option value="" disabled selected>Choose...</option>
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                              </select>
                          </div>
                          <div class="col-md-4">
                              <label for="civilstatus" class="form-label">Civil Status</label>
                              <select class="form-select" id="civilstatus" required>
                                  <option value="" disabled selected>Choose...</option>
                                  <option value="self">Self</option>
                                  <option value="spouse">Spouse</option>
                              </select>
                          </div>
                          <div class="col-md-4">
                            <label for="bloodType" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" id="bloodType" placeholder="Blood Type" required>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-7">
                              <label for="address" class="form-label">Address</label>
                              <input type="text" class="form-control" id="address" placeholder="Address" required>
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
                          
                          <!-- Educational Attainment -->
                          <div class="row mb-3">
                              <div class="col-md-6">
                                  <label for="education" class="form-label"><h5>Educational Attainment</h5></label>
                                  <select class="form-select" id="education" required>
                                      <option value="" disabled selected>Choose...</option>
                                      <option value="elementary">Elementary</option>
                                      <option value="highSchool">High School</option>
                                      <option value="college">College</option>
                                      <option value="graduate">Graduate</option>
                                  </select>
                              </div>
                          </div>
                  
                          <!-- Employment History -->
                          <h5>Employment History</h5>
                          <div class="employment-history-container">
                              <div class="row mb-3">
                                  <div class="col-md-4">
                                      <label for="companyName" class="form-label">Company Name</label>
                                      <input type="text" name="companyName[]" class="form-control" placeholder="Company Name" required>
                                  </div>
                                  <div class="col-md-4">
                                      <label for="jobTitle" class="form-label">Job Title</label>
                                      <input type="text" name="jobTitle[]" class="form-control" placeholder="Job Title" required>
                                  </div>
                                  <div class="col-md-4">
                                      <label for="yearsWorked" class="form-label">Years Worked</label>
                                      <input type="number" name="yearsWorked[]" class="form-control" placeholder="Years Worked" required>
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
                                  <input type="text" name="companyName[]" class="form-control" placeholder="Company Name" required>
                              </div>
                              <div class="col-md-4">
                                  <label for="jobTitle" class="form-label">Job Title</label>
                                  <input type="text" name="jobTitle[]" class="form-control" placeholder="Job Title" required>
                              </div>
                              <div class="col-md-4">
                                  <label for="yearsWorked" class="form-label">Years Worked</label>
                                  <input type="number" name="yearsWorked[]" class="form-control" placeholder="Years Worked" required>
                              </div>
                                <div class="col-md-3">
                                    <button class="btn btn-danger remove-employment" type="button">Remove</button>
                                </div>
                            </div>
                            
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
                
                    <!--Identification--> 
                    <div class="form-section" id="identification" style="display: none;">
                      <form>    
                          <h4>Identification</h4>


                          <div class="mb-3">
                            <label for="idImageUpload" class="form-label">Digital Copy of Signature</label>
                            <input type="file" class="form-control" id="signatureImageUpload" required>
                          </div>
                          <div class="mb-3">
                            <label for="idImageUpload" class="form-label">Digital Copy of 1x1 Picture</label>
                            <input type="file" class="form-control" id="1x1pictureImageUpload" required>
                          </div>
                          <div class="mb-3">
                            <label for="idImageUpload" class="form-label">Digital Copy of Left Thumb Mark</label>
                            <input type="file" class="form-control" id="ltmImageUpload" required>
                          </div>
                          <div class="mb-3">
                            <label for="idImageUpload" class="form-label">Digital Copy of Right Thumb Mark</label>
                            <input type="file" class="form-control" id="rtmImageUpload" required>
                          </div>
                          <div class="mb-3">
                            <label for="idImageUpload" class="form-label">Digital Copy of Birth Certificate</label>
                            <input type="file" class="form-control" id="birthCertificateImageUpload" required>
                          </div>
                          <div class="mb-3">
                            <label for="idImageUpload" class="form-label">Digital Copy of any valid ID to confirm Age and Residency  </label>
                            <input type="file" class="form-control" id="validDdImageUpload" required>
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
                              <td><strong>Birth Place:</strong></td>
                              <td id="summaryBirthPlace"></td>
                          </tr>
                          <tr>
                              <td><strong>Age:</strong></td>
                              <td id="summaryAge"></td>
                          </tr>
                          <tr>
                              <td><strong>Blood Type:</strong></td>
                              <td id="summaryBloodType"></td>
                          </tr>
                          <tr>
                              <td><strong>Address:</strong></td>
                              <td id="summaryAddress"></td>
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
                        <tr id="educationRow">
                            <td><strong>Educational Attainment:</strong></td>
                            <td id="summaryEducation"></td>
                        </tr>
                        <tr id="companyRow">
                            <td><strong>Employment History:</strong></td>
                            <td id="summaryCompany"></td>
                        </tr>

                  
                          <!-- Family Composition -->
                          <tr>
                              <td><strong>Family Members:</strong></td>
                              <td id="summaryFamilyMembers"></td>
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
      // Toggle the visibility of the progress sidebar
      $("#progress-button").click(function() {
          $("#progress-menu").toggleClass('hidden-xs');
      });
      
      function populateSummary() {
    // Basic Information
    const firstName = document.getElementById('firstName').value || 'Not Provided';
    const middleName = document.getElementById('middleName').value || '';
    const lastName = document.getElementById('lastName').value || 'Not Provided';
    const birthPlace = document.getElementById('birthPlace').value || 'Not Provided';
    const birthdate = document.getElementById('birthdate').value || 'Not Provided';
    const age = document.getElementById('age').value || 'Not Provided';
    const gender = document.getElementById('gender').value || 'Not Provided';
    const civilStatus = document.getElementById('civilstatus').value || 'Not Provided';
    const bloodType = document.getElementById('bloodType').value || 'Not Provided';
    const address = document.getElementById('address').value || 'Not Provided';
    const tele = document.getElementById('tele').value || 'Not Provided';
    const phone = document.getElementById('phone').value || 'Not Provided';

    // Update Summary Table with Basic Information
    document.getElementById('summaryName').innerText = `${firstName} ${middleName} ${lastName}`;
    document.getElementById('summaryGender').innerText = gender;
    document.getElementById('summaryCivilStatus').innerText = civilStatus;
    document.getElementById('summaryDob').innerText = birthdate;
    document.getElementById('summaryTele').innerText = tele;
    document.getElementById('summaryPhone').innerText = phone;

    // Add new fields to the summary for Basic Information
    document.getElementById('summaryBirthPlace').innerText = birthPlace;
    document.getElementById('summaryAge').innerText = age;
    document.getElementById('summaryBloodType').innerText = bloodType;
    document.getElementById('summaryAddress').innerText = address;

    document.getElementById('educationRow').style.display = education ? '' : 'none';
    document.getElementById('companyRow').style.display = employmentHistory ? '' : 'none';


    // Identification Section
    const signatureImage = document.getElementById('signatureImageUpload').value.split('\\').pop();  // Get file name
    const pictureImage = document.getElementById('1x1pictureImageUpload').value.split('\\').pop();  // Get file name
    const ltmImage = document.getElementById('ltmImageUpload').value.split('\\').pop();  // Get file name
    const rtmImage = document.getElementById('rtmImageUpload').value.split('\\').pop();  // Get file name
    const birthCertImage = document.getElementById('birthCertificateImageUpload').value.split('\\').pop();  // Get file name
    const validIdImage = document.getElementById('validDdImageUpload').value.split('\\').pop();  // Get file name

    // Update Summary Table with Identification Information
    document.getElementById('summarySignatureImage').innerText = signatureImage || 'No file uploaded';
    document.getElementById('summaryPictureImage').innerText = pictureImage || 'No file uploaded';
    document.getElementById('summaryLtmImage').innerText = ltmImage || 'No file uploaded';
    document.getElementById('summaryRtmImage').innerText = rtmImage || 'No file uploaded';
    document.getElementById('summaryBirthCertImage').innerText = birthCertImage || 'No file uploaded';
    document.getElementById('summaryValidIdImage').innerText = validIdImage || 'No file uploaded';

    // Family Composition (Optional Section)
    const familyNames = [];
    document.querySelectorAll('input[name="familyName[]"]').forEach((el) => {
        if (el.value) {
            familyNames.push(el.value);
        }
    });
    document.getElementById('summaryFamilyMembers').innerText = familyNames.length > 0 ? familyNames.join(', ') : 'No Family Members Added';
        // Educational Attainment
    const education = document.getElementById('education').value || 'Not Provided';
    document.getElementById('summaryEducation').innerText = education;

    // Employment History
    let employmentHistory = '';
    document.querySelectorAll('input[name="companyName[]"]').forEach((el, index) => {
        const companyName = el.value || 'Not Provided';
        const jobTitle = document.querySelectorAll('input[name="jobTitle[]"]')[index].value || 'Not Provided';
        const yearsWorked = document.querySelectorAll('input[name="yearsWorked[]"]')[index].value || 'Not Provided';
        employmentHistory += `${companyName} - ${jobTitle} (${yearsWorked} years)<br>`;
    });
    document.getElementById('summaryCompany').innerHTML = employmentHistory || 'No Employment History Added';
}

            
      
      // Navigation button logic
      let currentSection = 0;
      const sections = ["#basic-information-section", "#sectoral-section", "#familyComposition", "#identification", "#section5"];
      
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
          }
      });
      
      // Add functionality for the "Add More" button
          $(document).ready(function() {
        // Add more employment history
        $(".add-more-employment").click(function() {
            var employmentHtml = $(".employment-history-template").html();
            $(".employment-history-container").append(employmentHtml);
        });

        // Remove employment history entry
        $("body").on("click", ".remove-employment", function() {
            $(this).closest(".row").remove();
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