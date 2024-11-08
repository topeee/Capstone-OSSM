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
 

    <main class="p-4 mx-auto" style="width: 70%; height: auto; background-color: rgb(227, 249, 255);">
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