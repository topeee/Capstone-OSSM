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
      <link rel="stylesheet" href="pwd app.css">
      <link rel="icon" type="img/png" href="logo.png">
      <title>Death Certificate Request</title>

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
                    <li class="progress-item active" data-target="request-information">
                        <a href="#">
                            Request Details
                            <i class="bi bi-check-square-fill"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="deceased-information">
                        <a href="#">
                            Deceased Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="informant-section">
                        <a href="#">
                            Informant Section
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
                <div class="form-section" id="request-information">
                    <h4>Request Details</h4>
                    <p class="alert alert-info">
                        A separate application must be filed for each person seeking assistance. This is for Death Certificate Request Only.
                    </p>
    
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="certificateType" class="form-label">Certificate type</label>
                                <input type="text" class="form-control" id="certificateType" placeholder="Certificate type" required>
                            </div>
                            <div class="col-md-4">
                                <label for="typeIssuance" class="form-label">Type of Issuance</label>
                                <input type="text" class="form-control" id="typeIssuance" placeholder="Type of Issuance" required>
                            </div>
                            <div class="col-md-4">
                                <label for="noCopies" class="form-label">Number of Copies</label>
                                <input type="number" class="form-control" id="noCopies" placeholder="Number of Copies" required>
                            </div>
                        </div>
                            <div class="col-lg-offset-0 col-lg-12 col-xs-12"> 
                                <br><br>
                                <i class="bi bi-info-circle-fill"></i>       
                                *Note: Please fill up the following required fields. Please fill out the following required * fields, put N/A if not applicable.
                            </div>
                    </form>
                </div>
    
                <!-- Sectoral Information Section -->
                <div class="form-section" id="deceased-information" style="display: none;">
                    <form>
                        <h4>Deceased Information</h4>
                        <br>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="lName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lName" placeholder="Last Name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="fName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fName" placeholder="First Name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="mInitial" class="form-label">Middle Initial</label>
                                <input type="text" class="form-control" id="mInitial" placeholder="Middle Initial" required>
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
                                <label for="cInfo" class="form-label">Corpse Disposal</label>
                                <select class="form-select" id="cInfo" required>
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="burial">Burial</option>
                                    <option value="directBurial">Direct Burial</option>
                                    <option value="cremation">Cremation</option>
                                    <option value="directCremation">Direct Cremation</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="col-md-4" id="othersField" style="display: none;"> 
                                <label for="others" class="form-label">Others</label>
                                <input type="text" class="form-control" id="others" placeholder="Specify">
                            </div>
                        </div>                        

<br>

                        <div class="row mb-3">
                            <h4>Death Information</h4>
                            <h5>Place of Death</h5>
                            <div class="col-md-4">
                                <label for="nameDeath" class="form-label">Name of Cemetery or Crematory</label>
                                <input type="text" class="form-control" id="nameDeath" placeholder="Name of Cemetery or Crematory" required>
                            </div>
                            <div class="col-md-4">
                                <label for="address" class="form-label">Address of Cemetery or Crematory</label>
                                <input type="text" class="form-control" id="address" placeholder="Address of Cemetery or Crematory" required>
                            </div>
                            <div class="col-md-4">
                                <label for="dateDeath" class="form-label">Date of Death</label>
                                <input type="date" class="form-control" id="dateDeath" placeholder="Date of Death" required>
                            </div>
                        </div>
                            
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="timeDeath" class="form-label">Time of Death</label>
                                <input type="time" class="form-control" id="timeDeath" placeholder="Time of Death" required>
                            </div>
                        </div>

                            <div class="col-lg-offset-0 col-lg-12 col-xs-12"> 
                                <br><br>
                                <i class="bi bi-info-circle-fill"></i>       
                                *Note: Please fill up the following required fields. Please fill out the following required * fields, put N/A if not applicable.
                            </div>
                    </form>
                </div>
    


                <div class="form-section" id="informant-section" style="display: none;">
                    <form>
                        <h4>Informant Information</h4>
                        <p class="alert alert-info">
                            An Informant is the person who provides the information of the deceased and such other facts relevant to the circumstances of the deceased.
                            This portion is where the Informant certifies the truth and correctness of the information appearing on the death certificate.
                            It also contains information as to the identity of the Informant, and his/her signature.
                        </p>

                        <p class="alert alert-secondary">I hereby certify that all information supplied are true and correct to my own knowledge and belief:</p>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="Iname" class="form-label">Informant's Name</label>
                                <input type="text" class="form-control" id="Iname" placeholder="Informant's Name" required>
                            </div>
                            <div class=" col-md-6">
                                <label for="relationship" class="form-label">Relationship to the Deceased</label>
                                <input type="text" class="form-control" id="relationship" placeholder="Relationship to the Deceased" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                             <div class="col-md-6">
                                <label for="iAddress" class="form-label">Informant's Address</label>
                                <input type="text" class="form-control" id="iAddress" placeholder="Informant's Address" required>
                             </div>
                             <div class="col-md-6">
                                <label for="dateCert" class="form-label">Date Of Certification</label>
                                <input type="date" class="form-control" id="dateCert" placeholder="Date Of Certification" required>
                             </div>
                        </div>

                        <div class="col-lg-offset-0 col-lg-12 col-xs-12"> 
                            <br><br>
                            <i class="bi bi-info-circle-fill"></i>       
                            *Note: Please fill up the following required fields. Please fill out the following required * fields, put N/A if not applicable.
                        </div>
                    </form>
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
                                <!-- Request Details -->
                                <tr>
                                    <td class="category-cell">Certificate Type:</td>
                                    <td class="detail-cell" id="summaryCertificateType"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell">Type of Issuance:</td>
                                    <td class="detail-cell" id="summaryTypeIssuance"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell">Number of Copies:</td>
                                    <td class="detail-cell" id="summaryNoCopies"></td>
                                </tr>
                        
                                <!-- Deceased Information -->
                                <tr>
                                    <td class="category-cell">Full Name:</td>
                                    <td class="detail-cell" id="summaryName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell">Gender:</td>
                                    <td class="detail-cell" id="summaryGender"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell">Corpse Disposal:</td>
                                    <td class="detail-cell" id="summaryCorpseDisposal"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell">Cemetery Name:</td>
                                    <td class="detail-cell" id="summaryCemeteryName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell">Cemetery Address:</td>
                                    <td class="detail-cell" id="summaryCemeteryAddress"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell">Date of Death:</td>
                                    <td class="detail-cell" id="summaryDateDeath"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell">Time of Death:</td>
                                    <td class="detail-cell" id="summaryTimeDeath"></td>
                                </tr>
                        
                                <!-- Informant Information -->
                                <tr>
                                    <td class="category-cell">Informant Name:</td>
                                    <td class="detail-cell" id="summaryInformantName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell">Relationship to Deceased:</td>
                                    <td class="detail-cell" id="summaryRelationship"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell">Informant Address:</td>
                                    <td class="detail-cell" id="summaryInformantAddress"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell">Date of Certification:</td>
                                    <td class="detail-cell" id="summaryDateCert"></td>
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
    // Request Details
    document.getElementById('summaryCertificateType').innerText = document.getElementById('certificateType').value || 'Not Provided';
    document.getElementById('summaryTypeIssuance').innerText = document.getElementById('typeIssuance').value || 'Not Provided';
    document.getElementById('summaryNoCopies').innerText = document.getElementById('noCopies').value || 'Not Provided';

    // Deceased Information
    document.getElementById('summaryName').innerText = 
        `${document.getElementById('fName').value || 'Not Provided'} ${document.getElementById('mInitial').value || ''} ${document.getElementById('lName').value || 'Not Provided'}`.trim();
    document.getElementById('summaryGender').innerText = document.getElementById('gender').value || 'Not Provided';
    document.getElementById('summaryCorpseDisposal').innerText = document.getElementById('cInfo').value || 'Not Provided';
    document.getElementById('summaryCemeteryName').innerText = document.getElementById('nameDeath').value || 'Not Provided';
    document.getElementById('summaryCemeteryAddress').innerText = document.getElementById('address').value || 'Not Provided';
    document.getElementById('summaryDateDeath').innerText = document.getElementById('dateDeath').value || 'Not Provided';
    document.getElementById('summaryTimeDeath').innerText = document.getElementById('timeDeath').value || 'Not Provided';

    // Informant Information
    document.getElementById('summaryInformantName').innerText = document.getElementById('Iname').value || 'Not Provided';
    document.getElementById('summaryRelationship').innerText = document.getElementById('relationship').value || 'Not Provided';
    document.getElementById('summaryInformantAddress').innerText = document.getElementById('iAddress').value || 'Not Provided';
    document.getElementById('summaryDateCert').innerText = document.getElementById('dateCert').value || 'Not Provided';
}


  
      // Navigation button logic
      let currentSection = 0;
     
      const sections = [
            "#request-information", 
            "#deceased-information", 
            "#informant-section", 
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

        document.getElementById('cInfo').addEventListener('change', function() {
        const othersField = document.getElementById('othersField');
        
        // Show the 'Others' text field if the selected option is 'others'
        if (this.value === 'others') {
            othersField.style.display = 'block';
            document.getElementById('others').setAttribute('required', true);  // Make 'Others' input required when visible
        } else {
            othersField.style.display = 'none';
            document.getElementById('others').removeAttribute('required');  // Remove 'required' attribute when hidden
        }
        });
  
      
</script>


</body>
</html>