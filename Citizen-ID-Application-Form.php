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
      <title>Citizen ID Application Form</title>

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
                <li><a class="dropdown-item" href="account_profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="trasaac_history.php">History Transaction</a></li>
                <li><a class="dropdown-item logout-item" href="login.php">Logout</a></li>
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
                            Parent Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="government-numbers">
                        <a href="#">
                            Address
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="contact-information">
                        <a href="#">
                            Contact Information
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
    
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                            </div>
                            <div class="col-md-3">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" placeholder="Middle Name" required>
                            </div>
                            <div class="col-md-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                            </div>
                            <div class="col-md-2">
                                <label for="suffix" class="form-label">Suffix</label>
                                <input type="text" class="form-control" id="suffix" placeholder="Suffix">
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" required>
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>                        
                            <div class="col-md-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" required>
                            </div>
                            <div class="col-md-3">
                                <label for="PoB" class="form-label">Place of Birth</label>
                                <input type="text" class="form-control" id="PoB" placeholder="Place of Birth" required>
                            </div>
                            <div class="col-md-3">
                                <label for="nationality" class="form-label">Nationality</label>
                                <input type="text" class="form-control" id="nationality" placeholder="Nationality" required>
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="social-welfare" class="form-label">Social Welfare</label>
                                <select class="form-select" id="social-welfare" required>
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="PWD">Person with Disability</option>
                                    <option value="Solo">Solo Parent</option>
                                    <option value="Senior">Senior Citizen</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="occupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="occupation" placeholder="Occupation" required>
                            </div>
                            <div class="col-md-3">
                                <label for="religion" class="form-label">Religion</label>
                                <input type="text" class="form-control" id="religion" placeholder="Religion" required>
                            </div>
                            <div class="col-md-2">
                                <label for="civilstatus" class="form-label">Civil Status</label>
                                <select class="form-select" id="civilstatus" required>
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="self">Married</option>
                                    <option value="spouse">Widowed</option>
                                </select>
                            </div>  
                        </div>
                        <div class="col-lg-offset-0 col-lg-12 col-xs-12"> 
                            <br><br>
                              <i class="bi bi-info-circle-fill"></i>       
                                If you are also PWD, you may also apply here: <a href="*">PWD Application</a>. If not, Continue to Sectoral Information.
                          </div>
                    </form>
                </div>
    
                <!-- Parent Information Section -->
                <div class="form-section" id="sectoral-section" style="display: none;">
                    <form>
                        <h4>Parent Information</h4>
                        <p class="fs-4"><strong>Mother's Information</strong></p>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="motherfirstName" placeholder="First Name" required>
                            </div>
                            <div class="col-md-3">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="mothermiddleName" placeholder="Middle Name" required>
                            </div>
                            <div class="col-md-3">
                                <label for="maiden-name" class="form-label">Mother's Maiden Name</label>
                                <input type="text" class="form-control" id="motherlastName" placeholder="Mother's Maiden Name" required>
                            </div>
                            <div class="col-md-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="motherphone" placeholder="(+63) 0923-345-6783" required>
                            </div>
                        </div>

                        <p class="fs-4"><strong>Father's Information</strong></p>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fatherfirstName" placeholder="First Name" required>
                            </div>
                            <div class="col-md-3">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="fathermiddleName" placeholder="Middle Name" required>
                            </div>
                            <div class="col-md-3">
                                <label for="father-last-name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="fatherlastName" placeholder="Mother's Maiden Name" required>
                            </div>
                            <div class="col-md-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="fatherphone" placeholder="(+63) 0923-345-6783" required>
                            </div>
                        </div>
                    </form>
                </div>
    
                    <div>
                        <!-- Address Section -->
                        <div class="form-section" id="government-numbers" style="display: none;">
                            <form>    
                                <h4>Address</h4>
                                
                                <br>

                                <p class="fs-4"><strong>Present Address</strong></p>
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <label for="house-num" class="form-label">House Number</label>
                                        <input type="text" class="form-control" id="house-num" placeholder="House Number" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="street" class="form-label">Street</label>
                                        <input type="text" class="form-control" id="street" placeholder="Street" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="vill-or-subd" class="form-label">Village or Subdivision</label>
                                        <input type="text" class="form-control" id="vill-or-subd" placeholder="Village or Subdivision" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="barangay-dropdown" class="form-label">Barangay</label>
                                        <select class="form-select" id="barangay-dropdown" name="barangay-dropdown" required>
                                            <option value="" disabled selected>Select a barangay</option>
                                            <option value="Ampid I">Ampid I</option>
                                            <option value="Ampid II">Ampid II</option>
                                            <option value="Banaba">Banaba</option>
                                            <option value="Dulong Bayan I">Dulong Bayan I</option>
                                            <option value="Dulong Bayan II">Dulong Bayan II</option>
                                            <option value="Guinayang">Guinayang</option>
                                            <option value="Guitnangbayan I">Guitnangbayan I</option>
                                            <option value="Guitnangbayan II">Guitnangbayan II</option>
                                            <option value="Gulod Malaya">Gulod Malaya</option>
                                            <option value="Malanday">Malanday</option>
                                            <option value="Maly">Maly</option>
                                            <option value="Pintong Bukawe">Pintong Bukawe</option>
                                            <option value="Sto. Nino">Sto. Niño</option>
                                            <option value="Sta. Ana">Sta. Ana</option>
                                            <option value="Silangan">Silangan</option>
                                        </select>
                                    </div>
                                </div>

                                <p class="fs-4"><strong>Permanent Address</strong></p>

                                <input type="checkbox" class="form-check-input" id="same-as-present-add">
                                <label class="form-check-label" for="same-as-present-add"> Same as Present Address</label>

                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <label for="house-num" class="form-label">House Number</label>
                                        <input type="text" class="form-control" id="house-num" placeholder="House Number" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="street" class="form-label">Street</label>
                                        <input type="text" class="form-control" id="street" placeholder="Street" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="vill-or-subd" class="form-label">Village or Subdivision</label>
                                        <input type="text" class="form-control" id="vill-or-subd" placeholder="Village or Subdivision" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="barangay-dropdown" class="form-label">Barangay</label>
                                        <select class="form-select" id="barangay-dropdown" name="barangay-dropdown" required>
                                            <option value="" disabled selected>Select a barangay</option>
                                            <option value="Ampid I">Ampid I</option>
                                            <option value="Ampid II">Ampid II</option>
                                            <option value="Banaba">Banaba</option>
                                            <option value="Dulong Bayan I">Dulong Bayan I</option>
                                            <option value="Dulong Bayan II">Dulong Bayan II</option>
                                            <option value="Guinayang">Guinayang</option>
                                            <option value="Guitnangbayan I">Guitnangbayan I</option>
                                            <option value="Guitnangbayan II">Guitnangbayan II</option>
                                            <option value="Gulod Malaya">Gulod Malaya</option>
                                            <option value="Malanday">Malanday</option>
                                            <option value="Maly">Maly</option>
                                            <option value="Pintong Bukawe">Pintong Bukawe</option>
                                            <option value="Sto. Nino">Sto. Niño</option>
                                            <option value="Sta. Ana">Sta. Ana</option>
                                            <option value="Silangan">Silangan</option>
                                        </select>
                                    </div>
                            </form>    
                        </div>
                    </div>

                    <div class="form-section" id="contact-information" style="display: none;">
                        <form>    
                            <h4>Contact Information</h4>
                            
                            <br>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="tele" class="form-label">Telephone Number</label>
                                    <input type="tel" class="form-control" id="tele" placeholder="(916) 345-6783" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="(+63) 0923-345-6783">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="workPhone" class="form-label">Work Phone</label>
                                    <input type="tel" class="form-control" id="workPhone" placeholder="(916) 345-0000 x123">
                                </div>
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
                            </tbody>
                        </table>

                        <h4>Parent Information</h4>
                        <table class="table table-bordered">
                            <!--Parent Information-->
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Mother Information -->
                                <tr>
                                    <td class="category-cell"><strong>Mother's Name:</strong></td>
                                    <td class="detail-cell" id="summaryMotherName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Mother's Middle Name:</strong></td>
                                    <td class="detail-cell" id="summaryMotherMiddleName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Mother's Maiden Name:</strong></td>
                                    <td class="detail-cell" id="summaryMotherMaidenName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Mother's Contact Number:</strong></td>
                                    <td class="detail-cell" id="summaryMotherContactNum"></td>
                                </tr>

                                <!-- Father Information -->
                                <tr>
                                    <td class="category-cell"><strong>Father's Name:</strong></td>
                                    <td class="detail-cell" id="summaryFatherName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Father's Middle Name:</strong></td>
                                    <td class="detail-cell" id="summaryFatherMiddleName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Father's Last Name:</strong></td>
                                    <td class="detail-cell" id="summaryFatherLastName"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Father's Contact Number:</strong></td>
                                    <td class="detail-cell" id="summaryFatherContactNum"></td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Address -->
                        <h4>Address</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="category-cell"><strong>Current Address:</strong></td>
                                    <td class="category-cell" id="currentAdd"></td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Contact Information -->
                        <h4>Contact Information</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="category-cell"><strong>Telephone Number:</strong></td>
                                    <td class="detail-cell" id="telNum"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Phone Number:</strong></td>
                                    <td class="detail-cell" id="phoneNum"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Email:</strong></td>
                                    <td class="detail-cell" id="Email"></td>
                                </tr>
                                <tr>
                                    <td class="category-cell"><strong>Work Phone:</strong></td>
                                    <td class="detail-cell" id="wrkPhone"></td>
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

   //Parent Information
    //Mother Information
    document.getElementById('summaryMotherName').innerText = document.getElementById('motherfirstName').value || 'Not Provided';
    document.getElementById('summaryMotherMiddleName').innerText = document.getElementById('mothermiddleName').value || 'Not Provided';
    document.getElementById('summaryMotherMaidenName').innerText = document.getElementById('motherlastName').value || 'Not Provided';
    document.getElementById('summaryMotherContactNum').innerText = document.getElementById('motherphone').value || 'Not Provided';

    //Father Information
    document.getElementById('summaryFatherName').innerText = document.getElementById('fatherfirstName').value || 'Not Provided';
    document.getElementById('summaryFatherMiddleName').innerText = document.getElementById('fathermiddleName').value || 'Not Provided';
    document.getElementById('summaryFatherLastName').innerText = document.getElementById('fatherlastName').value || 'Not Provided';
    document.getElementById('summaryFatherContactNum').innerText = document.getElementById('fatherphone').value || 'Not Provided';

    //Address

    //Contact Information
    document.getElementById('telNum').innerText = document.getElementById('tele').value || 'Not Provided';
    document.getElementById('phoneNum').innerText = document.getElementById('phone').value || 'Not Provided';
    document.getElementById('Email').innerText = document.getElementById('email').value || 'Not Provided';
    document.getElementById('wrkPhone').innerText = document.getElementById('workPhone').value || 'Not Provided';
}



  
      // Navigation button logic
      let currentSection = 0;
     
      const sections = [
            "#basic-information-section", 
            "#sectoral-section", 
            "#government-numbers", 
            "#contact-information",  
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