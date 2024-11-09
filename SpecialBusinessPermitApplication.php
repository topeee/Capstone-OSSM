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
      <link rel="icon" type="img/png" href="logo.png">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <title>Special Permit Application</title>
      <style>
body {
    background: linear-gradient(#00bfff, #87cefa); /* or your background image */
    background-size: cover; 
    background-position: center;
    background-attachment: fixed;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
main {
    flex-grow: 1;
}
.navbar-brand-logo {
    margin-right: 8px;
  }
  
  .brand-name {
    font-size: 22px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    padding-left: 6px;
  }
  
  .d-flex .username {
    font-size: 22px;
    margin-right: 16px;
  }
  
  .Hamburger-Icon {
    width: 36px;
    height: 36px;
  }
  
  .username {
    color: white;
    margin-left: 10px;
    font-size: 1.2rem;
  }
  
  .dropdown-menu-end {
    right: 0;
    left: auto;
  }
  footer {
    background: #002B5C;
    color: white;
    padding: 20px 0;
    text-align: center;
    width: 100%;
    position: relative;
    bottom: 0;
}
  
  footer .list-inline-item a {
    color: white;
  }
  
  .bs-icon-circle {
    border-radius: 50%;
    padding: 10px;
    display: inline-block;
    margin-right: 10px;
  }
  
  .bs-icon {
    display: inline-block;
    font-size: 1.5rem;
  }
  
  .list-inline-item a:hover {
    text-decoration: underline;
  }
  .progress-sidebar {
    background-color: #f8f9fa;
    border-right: 1px solid #dee2e6;
    position: relative;
}
.progress-sidebar ul {
    padding-left: 0;
}
.progress-sidebar ul li {
    list-style: none;
    padding: 10px;
    border-bottom: 1px solid #dee2e6;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}
.progress-sidebar ul li.active {
    background-color: #0d6efd;
    color: white;
}
.progress-sidebar ul li a {
    text-decoration: none;
    color: inherit;
    width: 100%;
    padding-right: 30px;
}
/* Icon alignment to right */
.progress-sidebar ul li i {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
}
.hidden-xs {
    display: none;
}
.hide {
    display: none;
}
.navigation-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}
.form-section {
    margin-bottom: 20px;
    clear: both; /* Prevents overlap between sections */
}

.readonly {
    background-color: #e0e0e0;
    color: #555;
    }
.custom-margin {
    margin-right: 20px;
}
@media (min-width: 576px) {
    .hidden-xs {
        display: block;
    }
}

      </style>
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
                    <li class="progress-item active" data-target="basic-information-section">
                        <a href="#">
                            Basic Documentary Requirements
                            <i class="bi bi-check-square-fill"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="business-information">
                        <a href="#">
                            Business Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="business-operation">
                        <a href="#">
                            Business Operation
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="business-activity">
                        <a href="#">
                            Business Activity
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="event-information">
                        <a href="#">
                            Event Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="summary-page">
                        <a href="#">
                            Summary Page of Business Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                   
                </ul>
            </div>
    
            <!-- Main form -->
            <div class="col-md-9">
                <!-- Basic Documentary Requirements section -->
            <div class="form-section" id="basic-information-section">
                <div class="row mb-3">
                    <h2>Basic Documentary Requirements</h2>     
                    <div class="col-md-6">
                        <h4>Application Type: <span style="color: lightgreen;">Short Term/Special Permit</span></h4>
                    </div>

                    <div class="col-md-6">
                        <h4>Application Date: <span style="color: black;" id="applicationDateSpecial"></span></h4>
                    </div>

                </div>
                <br>
                <form>
                    <div class="row">
                        <div class="col-md-12 align-items-center">
                            <p>Allowed file types: .jpeg, .jpg, .png, .pdf, .doc, and .docx</p>
                        </div>
                    </div>
                    <!-- File inputs for the business location photos with allowed file types -->
                    <div class="row ms-5 mb-3">
                        <div class="col-md-10 align-items-center">
                            <label for="file-upload1-special"><span style="color: red;">*</span> Request letter to the head of BPLD (has to contain required information about the period covered, venue capacity, number of attendees, health protocols, and ticket sales)</label>
                            <input type="file" id="file-upload1-special" name="file-upload1-special" class="form-control" accept=".jpeg, .jpg, .png, .pdf, .doc, .docx" onchange="showFileName()" required>
                        </div>
                    </div>
                    <div class="row ms-5 mb-3">
                        <div class="col-md-10 align-items-center">
                            <label for="file-upload2-special"><span style="color: red;">*</span> Evidence of Business Registration TCT / Tax Declaration (Required) / SEC for Corporations and Partnerships / CDA for Cooperatives / DTI for Sole Proprietorship</label>
                            <input type="file" id="file-upload2-special" name="file-upload2-special" class="form-control" accept=".jpeg, .jpg, .png, .pdf, .doc, .docx" onchange="showFileName()" required>
                        </div>
                    </div>
                    <div class="row ms-5 mb-3">
                        <div class="col-md-10 align-items-center">
                            <label for="file-upload3-special"><span style="color: red;">*</span> Tax Declaration (if owned) or Lease Agreement (if rented) (Required)</label>
                            <input type="file" id="file-upload3-special" name="file-upload3-special" class="form-control" accept=".jpeg, .jpg, .png, .pdf, .doc, .docx" onchange="showFileName()" required>
                        </div>
                    </div>
                    <div class="row ms-5 mb-3">
                        <div class="col-md-10 align-items-center">
                            <label for="file-upload4-special">If the applicant is a foreign national, the Bureau of Immigration may issue a Special Working Permit (SWP) (where appropriate)</label>
                            <input type="file" id="file-upload4-special" name="file-upload4-special" class="form-control" accept=".jpeg, .jpg, .png, .pdf, .doc, .docx" onchange="showFileName()">
                        </div>
                    </div>
                    <div class="row ms-5 mb-3">
                        <div class="col-md-10 align-items-center">
                            <label for="file-upload5-special">When necessary, a special permit for seasonal operations from the city councilor</label>
                            <input type="file" id="file-upload5-special" name="file-upload5-special" class="form-control" accept=".jpeg, .jpg, .png, .pdf, .doc, .docx" onchange="showFileName()">
                        </div>
                    </div>
                    <div class="row ms-5 mb-3">
                        <div class="col-md-10 align-items-center">
                            <label for="file-upload6-special">Permit for Occupancy (if applicable)</label>
                            <input type="file" id="file-upload6-special" name="file-upload6-special" class="form-control" accept=".jpeg, .jpg, .png, .pdf, .doc, .docx" onchange="showFileName()">
                        </div>
                    </div>
                    <div class="row ms-5 mb-3">
                        <div class="col-md-10 align-items-center">
                            <label for="file-upload7-special">Sketch and images (if any) of the business's location</label>
                            <input type="file" id="file-upload7-special" name="file-upload7-special" class="form-control" accept=".jpeg, .jpg, .png, .pdf, .doc, .docx" onchange="showFileName()">
                        </div>
                    </div>
                    <div class="row ms-5 mb-3">
                        <div class="col-md-10 align-items-center">
                            <label for="file-upload8-special">Other requirements as needed</label>
                            <input type="text" id="file-upload8-text-special" name="file-upload8-text-special" class="form-control" placeholder="Other documents"><br>
                            <input type="file" id="file-upload8-file-special" name="file-upload8-file-special" class="form-control" accept=".jpeg, .jpg, .png, .pdf, .doc, .docx" onchange="showFileName()">
                        </div>
                    </div>
                </form>
            </div>

    
                <!-- Business Information Section -->
                <div class="form-section" id="business-information" style="display: none;">
                    <form>
                        <div class="head mb-3">
                            <h2>Business Information and Registration</h2>
                        </div>
                        
                        <div class="business-type-section" style="padding: 20px; border-radius: 8px; margin: 10px;">
                            <div class="row mb-3 ms-3">
                                <h5 style="font-weight: 700;">Type of Business:</h5>
                                <div class="col-md-12 align-items-center">
                                    <p>Please choose one:</p>
                                </div>
                                <div class="col-md-4 form-check">
                                    <input type="radio" id="soleProprietorship-special" name="choice4" value="soleProprietorship" class="form-check-input" style="width: 20px; height: 20px;">
                                    <label for="soleProprietorship" class="form-check-label">Sole Proprietorship</label>
                                </div>
                                <div class="col-md-4 form-check">
                                    <input type="radio" id="partnership-special" name="choice4" value="partnership" class="form-check-input" style="width: 20px; height: 20px;">
                                    <label for="partnership" class="form-check-label">Partnership</label>
                                </div>
                                <div class="col-md-4 form-check">
                                    <input type="radio" id="corporation-special" name="choice4" value="corporation" class="form-check-input" style="width: 20px; height: 20px;">
                                    <label for="corporation" class="form-check-label">Corporation</label>
                                </div>          
                            </div>
                            <div class="row mb-3 ms-3">
                                <div class="col-md-4 form-check">
                                    <input type="radio" id="cooperative-special" name="choice4" value="cooperative" class="form-check-input" style="width: 20px; height: 20px;">
                                    <label for="cooperative" class="form-check-label">Cooperative</label>
                                </div>
                                <div class="col-md-6 form-check">
                                    <input type="radio" id="opc-special" name="choice4" value="opc" class="form-check-input" style="width: 20px; height: 20px;">
                                    <label for="opc" class="form-check-label">One-Person Corporation</label>
                                </div>
                            </div>
                        </div>                        

                        <br>
                        <!-- New Business-Related Fields -->
                        <div class="row mb-3">
                            <h5 style="font-weight: 700;">Business Information:</h5>
                            <div class="col-md-6">
                                <label for="dti-sec-cda">DTI/SEC/CDA Registration Number:</label>
                                <input type="text" id="dti-sec-cda-special" name="dti-sec-cda-special" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tin">Tax Identification Number (TIN):</label>
                                <input type="text" id="tin-special" name="tin-special" class="form-control" placeholder="XXX-XXX-XXX-XXX" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="sss">SSS Number:</label>
                                <input type="text" id="sss-special" name="sss-special" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="business-name">Business Name:</label>
                                <input type="text" id="business-name-special" name="business-name-special" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="trade-name">Trade Name / Franchise:</label>
                                <input type="text" id="trade-name-special" name="trade-name-special" class="form-control">
                            </div>
                            <div class="col-md-4 d-flex align-items-end">
                                <input type="checkbox" id="same-as-business-special" name="same-as-business-special">
                                <label for="same-as-business" style="margin-left: 10px; margin-top: 10px;">Same as Business Name</label>
                            </div>
                        </div>
                        <!-- Main address field -->
                        <div class="row mb-3">
                        <!-- Row 1 -->
                            <h5 style="font-weight: 700;">Main Address:</h5>
                            <div class="col-md-4">
                                <label for="house">House/Blding No.</label>
                                <input type="text" id="house-special" name="house-special" class="form-control" oninput="updateAddressPreview()">
                            </div>
                            <div class="col-md-4">
                                <label for="building-name">Name of Building</label>
                                <input type="text" id="building-name-special" name="building-name-special" class="form-control" oninput="updateAddressPreview()">
                            </div>
                            <div class="col-md-4">
                                <label for="block-no">Block No. / Street</label>
                                <input type="text" id="block-no-special" name="block-no-special" class="form-control" required oninput="updateAddressPreview()">
                            </div>
                        </div>
                        <!-- Row 2 -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="subdivision">Subdivision</label>
                                <input type="text" id="subdivision-special" name="subdivision-special" class="form-control" oninput="updateAddressPreview()">
                            </div>
                            <div class="col-md-4">
                                <label for="province">Province</label>
                                <input type="text" id="province-special" name="province-special" class="form-control" required oninput="updateAddressPreview()">
                            </div>
                            <div class="col-md-4">
                                <label for="city">City/Municipality</label>
                                <input type="text" id="city-special" name="city-special" class="form-control" required oninput="updateAddressPreview()">
                            </div>                
                        </div>
                        <!-- Row 3 -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="barangay">Barangay</label>
                                <input type="text" id="barangay-special" name="barangay-special" class="form-control" required oninput="updateAddressPreview()">
                            </div>
                            <div class="col-md-4">
                                <label for="zip-code">Zip Code</label>
                                <input type="text" id="zip-code-special" name="zip-code-special" class="form-control" required oninput="updateAddressPreview()">
                            </div>  
                            <div class="col-md-4">
                                <label for="district">District</label>
                                <input type="text" id="district-special" name="district-special" class="form-control" oninput="updateAddressPreview()">
                            </div>
                        </div>
                    </form>
                    <!-- Address Preview -->    
                    <div class="address-preview mt-4">
                        <h5><strong>Address Preview:</strong></h5>
                        <p id="address-preview" style="font-style: italic; color: gray;">Complete address will appear here...</p>
                    </div>
                    
                    
                    <!-- Contact Information Section -->
                    <h5 style="font-weight: 700;">Contact Information:</h5>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="telephone">Telephone Number</label>
                            <input type="text" id="telephone-special" name="telephone-special" class="form-control">
                        </div>
                    <div class="col-md-4">
                        <label for="email">Email Address</label>
                        <input type="email" id="email-special" name="email-special" class="form-control" placeholder="@gmail.com">
                    </div>
                    <div class="col-md-4">
                        <label for="mobile">Mobile No.</label>
                        <input type="text" id="mobile-special" name="mobile-special" class="form-control">
                    </div>
                </div>
                    <!-- Owner's Information Section -->
                    <h5 style="font-weight: 700;">Owner's Information:</h5>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="surname">Surname</label>
                            <input type="text" id="surname-special" name="surname-special" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="given-name">Given Name</label>
                            <input type="text" id="given-name-special" name="given-name-special" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="middle-name">Middle Name</label>
                            <input type="text" id="middle-name-special" name="middle-name-special" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="suffix">Suffix</label>
                            <input type="text" id="suffix-special" name="suffix-special" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="sex">Sex</label>
                            <select id="sex-special" name="sex-special" class="form-control">
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        </div>
                    <!-- For corporation section -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                                <label for="for-corporation">For Corporation:</label>
                            </div>
                        
                            <!-- First Input Field with Percentage Icon (Filipino) -->
                            <div class="col-md-4">
                                <label for="filipino" style="color: gray;">Filipino (Percentage):</label>
                                <div class="input-group">
                                    <input type="text" id="filipino" name="filipino" class="form-control" placeholder="Enter value" min="0" max="100">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Second Input Field with Percentage Icon (Foreign) -->
                            <div class="col-md-4">
                                <label for="foreign" style="color: gray;">Foreign (Percentage):</label>
                                <div class="input-group">
                                    <input type="text" id="foreign" name="foreign" class="form-control" placeholder="Enter value" min="0" max="100">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                
                    <!-- Business Operations -->
                    <div class="form-section" id="business-operation" style="display: none;">
                        <form>    
                            <h2>Business Operations</h2><br>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="business-area-special">Business Area (in sq. m.)</label>
                                    <input type="text" id="business-area-special" name="business-area-special" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="total-building-special">Total Floor/Building Area (in sq. m.)</label>
                                    <input type="text" id="total-building-special" name="total-building-special" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="from-time-special">Time Operation (From:)</label>
                                    <input type="time" id="from-time-special" name="from-time-special" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="time-to-special">To:</label>
                                    <input type="time" id="time-to-special" name="time-to-special" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <p>Total Number of Employees in the organization:</p>
                                <div class="col-md-6 d-flex align-items-center">
                                    <label for="male-special" class="custom-margin">Male:</label>
                                    <input type="text" id="male-special" name="male-special" class="form-control">
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <label for="female-special" class="custom-margin">Female:</label>
                                    <input type="text" id="female-special" name="female-special" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="num-emp-special">Number of Employees Living in San Mateo:</label>
                                    <input type="text" id="num-emp-special" name="num-emp-special" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <p>Number of Delivery Vehicle:</p>
                                <div class="col-md-6 d-flex align-items-center">
                                    <label for="van-truck-special" class="custom-margin">Van/Truck:</label>
                                    <input type="text" id="van-truck-special" name="van-truck-special" class="form-control">
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <label for="motor-special" class="custom-margin">Motor:</label>
                                    <input type="text" id="motor-special" name="motor-special" class="form-control">
                                </div>
                            </div>

                            <br><br>
                            <!-- New Address Field with Checkbox -->
                            <div class="row mb-3">
                                <h5 style="font-weight: 700;">Business Location Address:</h5>
                                <div class="col-md-12 mb-3">
                                    <input type="checkbox" id="same-as-main-special" name="same-as-main-special" onclick="copyMainAddress()">
                                    <label for="same-as-main-special">Same as Main Address</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="new-house-special">House/Blding No.</label>
                                    <input type="text" id="new-house-special" name="new-house-special" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="new-building-name-special">Name of Building</label>
                                    <input type="text" id="new-building-name-special" name="new-building-name-special" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="new-block-no-special">Block No. / Street</label>
                                    <input type="text" id="new-block-no-special" name="new-block-no-special" class="form-control">
                                </div>
                            </div>
                            <!-- Row 2 -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="new-subdivision-special">Subdivision</label>
                                    <input type="text" id="new-subdivision-special" name="new-subdivision-special" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="new-province-special">Province</label>
                                    <input type="text" id="new-province-special" name="new-province-special" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="new-city-special">City/Municipality</label>
                                    <input type="text" id="new-city-special" name="new-city-special" class="form-control">
                                </div>                
                            </div>
                            <!-- Row 3 -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="new-barangay-special">Barangay</label>
                                    <input type="text" id="new-barangay-special" name="new-barangay-special" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="new-zip-code-special">Zip Code</label>
                                    <input type="text" id="new-zip-code-special" name="new-zip-code-special" class="form-control">
                                </div>  
                                <div class="col-md-4">
                                    <label for="new-district-special">District</label>
                                    <input type="text" id="new-district-special" name="new-district-special" class="form-control">
                                </div>
                            </div>
                            <p style="color: red;">Reminder: Make sure your address is correct, because it will be reflected in the Mayor's Permit</p>
                            <br><br>

                            <p>Are you the Owner?</p>
                            <div class="row mb-3 ms-2">
                                <!-- Yes Option -->
                                <div class="col-md-2 form-check">
                                    <input type="radio" id="yes3-special" name="choice3-special" value="yes" class="form-check-input" onclick="toggleInfo3(true)">
                                    <label for="yes3-special" class="form-check-label">Yes</label>
                                </div>
                                <!-- No Option -->
                                <div class="col-md-2 form-check">
                                    <input type="radio" id="no3-special" name="choice3-special" value="no" class="form-check-input" onclick="toggleInfo3(false)">
                                    <label for="no3-special" class="form-check-label">No</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="tdn-special">Tax Declaration No.</label>
                                    <input type="text" id="tdn-special" name="tdn-special" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="pin-special">Property Identification No.</label>
                                    <input type="text" id="pin-special" name="pin-special" class="form-control">
                                </div>
                            </div>

                            <!-- Another hidden information -->
                            <div id="extra-info3" style="display: none;">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="authorized-person-special">Is this a government property?</label>
                                    </div>
                                    <!-- Yes Option -->
                                    <div class="col-md-2 form-check">
                                        <input type="radio" id="yes4-special" name="choice4-special" value="yes" class="form-check-input" onclick="toggleInfo4(true)">
                                        <label for="yes4-special" class="form-check-label">Yes</label>
                                    </div>
                                    <!-- No Option -->
                                    <div class="col-md-2 form-check">
                                        <input type="radio" id="no4-special" name="choice4-special" value="no" class="form-check-input" onclick="toggleInfo4(false)">
                                        <label for="no4-special" class="form-check-label">No</label>
                                    </div>
                                </div>
                                <!-- Another hidden information -->
                                <div id="hidden-info4" style="display: none;">
                                    <div class="row mb-3 ms-5">
                                        <div class="col-md-6">
                                            <p>*Affidavit of Undertaking of Government Owned Properties</p>
                                        </div>
                                        <div class="col-md-4">
                                        <input type="file" id="file-upload8-special" onchange="showFileName()">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="lessor-info" style="display: none;">
                                <div class="row mb-3">
                                    <h6>Name of Lessor:</h6>
                                    <!-- Surname Field -->
                                    <div class="col-md-3">
                                        <label for="lessor-surname-special" style="opacity: 0.6;">Last Name:</label>
                                        <input type="text" id="lessor-surname-special" name="lessor-surname-special" class="form-control">
                                    </div>
                                    <!-- First Name Field -->
                                    <div class="col-md-3">
                                        <label for="lessor-firstname-special" style="opacity: 0.6;">First Name:</label>
                                        <input type="text" id="lessor-firstname-special" name="lessor-firstname-special" class="form-control">
                                    </div>
                                    <!-- Middle Name Field -->
                                    <div class="col-md-3">
                                        <label for="lessor-middlename-special" style="opacity: 0.6;">Middle Name:</label>
                                        <input type="text" id="lessor-middlename-special" name="lessor-middlename-special" class="form-control">
                                    </div>
                                    <!-- Suffix Field -->
                                    <div class="col-md-3">
                                        <label for="lessor-suffix-special" style="opacity: 0.6;">Suffix:</label>
                                        <input type="text" id="lessor-suffix-special" name="lessor-suffix-special" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


    
                <!-- Business Activity -->
                <div class="form-section" id="business-activity" style="display: none;">
                    <h2>Business Activity</h2>
                    <p style="font-weight: 700;">Business Details:</p>

                    <div class="row mb-3">
                        <div class="col-md-10">
                            <label for="tci-special">Total Capital Investment (Paid up Capital + Lease Expenses + Equipments):</label>
                            <input type="text" id="tci-special" name="tci-special" class="form-control" required>
                        </div>
                    </div>

                        <p>Do you have tax incentives from any Goverment Entity?</p>
                        <div class="row mb-3 ms-2">
                            <div class="col-md-6 form-check">
                                <!-- Yes Option -->
                                <input type="radio" id="yesUpload-special" name="uploadChoice-special" value="yes" class="form-check-input" onclick="toggleFileInput(true)">
                                <label for="yesUpload" class="form-check-label">Yes</label>
                            </div>
                            <div class="col-md-6 form-check">
                                <!-- No Option -->
                                <input type="radio" id="noUpload-special" name="uploadChoice-special" value="no" class="form-check-input" onclick="toggleFileInput(false)">
                                <label for="noUpload" class="form-check-label">No</label>
                            </div>
                        </div>
                    
                        <!-- File Input (initially hidden) -->
                        <div id="fileInputContainer" style="display: none;" class="mb-3 col-md-6">
                            <label for="fileUpload" class="form-label">Choose a file:</label>
                            <input type="file" id="fileUpload" name="fileUpload" class="form-control">
                        </div>
                  
                    

                    <p style="opacity: 0.6;">Please choose one only:</p>
                    <div class="row mb-3 ms-2">
                        <div class="col-md-4 form-check">
                            <input type="radio" id="main-office-special" name="office-type" value="main-office-special" class="form-check-input">
                            <label for="main-office-special" class="form-check-label">Main Office</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="radio" id="branch-special" name="office-type" value="branch-special" class="form-check-input">
                            <label for="branch-special" class="form-check-label">Branch</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="radio" id="admin-office-special" name="office-type" value="admin-office-special" class="form-check-input">
                            <label for="admin-office-special" class="form-check-label">Admin Office Only</label>
                        </div>
                    </div>                    
                
                    <div class="row mb-3">
                        <!-- Line of Business (Dropdown) -->
                        <div class="col-md-6">
                            <label for="line-business">Line of Business</label>
                            <div class="input-group">
                                <select id="line-business-special" name="line-business-special" class="form-control" onchange="updateProductsServices()">
                                    <option value="retail">Retail</option> <!-- Initial value -->
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="wholesale">Wholesale</option>
                                    <option value="hospitality">Hospitality</option>
                                    <option value="finance">Finance</option>
                                </select>
                                <span class="input-group-text"><i class="fas fa-chevron-down"></i></span>
                            </div>
                        </div>
                
                        <!-- Products/Services (Dropdown) -->
                        <div class="col-md-6">
                            <label for="products-services">Products/Services</label>
                            <div class="input-group">
                                <select id="products-services-special" name="products-services-special" class="form-control">
                                    <option value="" selected disabled>Select Products/Services</option>
                                </select>
                                <span class="input-group-text"><i class="fas fa-chevron-down"></i></span>
                            </div>
                        </div>
                    </div>
                
                    <!-- Dynamic Group: No. of Units, Description, Size -->
                    <p style="font-weight: 700;">Equipment (If Applicable):</p>
                    <div id="dynamic-field-group">
                        <div class="row mb-3">
                            <!-- No. of Units -->
                            <div class="col-md-3">
                                <label for="no-of-units">No. of Units</label>
                                <input type="text" id="no-of-units-special" name="no-of-units-special" class="form-control" placeholder="Enter number of units">
                            </div>
                
                            <!-- Description Dropdown -->
                            <div class="col-md-3">
                                <label for="description">Description</label>
                                <select id="description-special" name="description-special" class="form-control" onchange="updateSizeOptions()">
                                    <option value="small-business">Small Business</option> <!-- Initial value -->
                                    <option value="large-business">Large Business</option>
                                    <option value="corporate">Corporate</option>
                                </select>
                            </div>
                
                            <!-- Size Dropdown (depends on description) -->
                            <div class="col-md-6">
                                <label for="size">Size</label>
                                <select id="size-special" name="size-special" class="form-control">
                                    <option value="">Select Size (e.g., sq. meters)</option>
                                </select>
                            </div>
                            
                            <!-- Description of Business -->
                            <div class="col-md-6">
                                <label for="description">Description of Business</label>
                                <textarea id="descriptions-special" name="descriptions-special" class="form-control" rows="3" placeholder="Provide a brief description of the business"></textarea>    
                            </div>

                            <!-- + and - Buttons -->
                            <div class="col-md-3 d-flex align-items-end">
                                <button type="button" class="btn btn-success" onclick="addFieldGroup()">+</button>
                                <button type="button" class="btn btn-danger ml-2" onclick="removeFieldGroup()">-</button>
                            </div>


                        </div>
                    </div>

                </div>

                <!-- Event infformation section -->
        <div class="form-section" id="event-information" style="display: none;">
            <div class="container">
                <form>

                    <div class="row mb-3">
                        <h2>Event Information</h2>
                    </div>
                        
                    <!-- Event Information Form -->
                    <div class="row mb-3" id="event-information">
                        <div class="col-md-4">
                            <label for="event-title" class="form-label">Event Title:</label>
                            <input type="text" id="event-title" name="event-title" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="event-description" class="form-label">Event Description:</label>
                            <input type="text" id="event-description" name="event-description" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="event-date-from" class="form-label">Event Date (From):</label>
                            <input type="date" id="event-date-from" name="event-date-from" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="event-date-to" class="form-label">Event Date (To):</label>
                            <input type="date" id="event-date-to" name="event-date-to" class="form-control">
                        </div>
                    </div>
                    
                    <!-- Buttons to Add or Remove Entries -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary" onclick="addEventEntry()">Add Entry</button>
                            <button type="button" class="btn btn-danger" onclick="deleteEventEntry()">Delete Entry</button>
                        </div>
                    </div>

                    <div id="error-message" style="color: red; display: none;">Please fill in all fields before adding an entry.</div>
                    
                    <!-- Event Entries Table -->
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <table class="table" id="event-entries-table">
                                <thead>
                                    <tr>
                                        <th>Event Title</th>
                                        <th>Event Description</th>
                                        <th>Date (From)</th>
                                        <th>Date (To)</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="event-entries-body">
                                    <!-- Event entries will be added dynamically here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <!-- Time/Duration 1 -->
                        <div class="col-md-6">
                            <p>Time/Duration:</p>
                        </div>
                        <div class="col-md-6">
                            <label for="time-duration-from2" class="form-label" style="opacity: 0.6;">(From):</label>
                            <input type="time" id="time-duration-from2" name="time-duration-from2" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="time-duration-to2" class="form-label" style="opacity: 0.6;">(To):</label>
                            <input type="time" id="time-duration-to2" name="time-duration-to2" class="form-control">
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <!-- Radio Buttons Yes/No -->
                        <div class="col-md-4">
                            <p>Are you selling Tickets?</p>
                        </div>
                        <div class="col-md-2 form-check">
                            <input type="radio" id="yes-option" name="yes-no-option" value="yes" class="form-check-input">
                            <label for="yes-option" class="form-check-label">Yes</label>
                        </div>
                        <div class="col-md-2 form-check">
                            <input type="radio" id="no-option" name="yes-no-option" value="no" class="form-check-input">
                            <label for="no-option" class="form-check-label">No</label>
                        </div>
                    </div>
                
            
                <h2>Applied By</h2>
                <!-- Applied by Section -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="application-type" class="form-label">Owner/Representative:</label>
                        <select id="application-type" name="application-type" class="form-select" onchange="toggleAuthorizedFields(this)">
                            <option value="" selected disabled>Choose application type</option>
                            <option value="business-owner">Business Owner</option>
                            <option value="authorized-representative">Authorized Representative</option>
                        </select>
                    </div>
                
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>
                
                <!-- Hidden section for Authorized Representative -->
                <div id="authorized-fields" class="row mb-3" style="display: none;">
                    <div class="col-md-6">
                        <label for="pos" class="form-label">Designation/Position</label>
                        <input type="text" id="pos" name="pos" class="form-control" placeholder="Designation/Position">
                    </div>
                    
                    <div class="col-md-6">
                        <label for="upload-auth-id" class="form-label">Authorization Form:</label>
                        <input type="file" id="upload-auth-id" name="upload-auth-id" class="form-control">
                        <a href="Authorization Letter.pdf" download="AuthorizationForm.pdf" class="text-decoration-none mt-2 d-block">
                            Doesn't have authorization form? Click here!
                        </a>
                    </div>
                    
                    <div class="col-md-6 mt-3">
                        <label for="upload-rep-id" class="form-label">Scanned ID of the Representative:</label>
                        <input type="file" id="upload-rep-id" name="upload-rep-id" class="form-control">
                    </div>
                </div>                

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="upload-id" class="form-label">Scanned ID of the Owner:</label>
                        <input type="file" id="upload-id" name="upload-id" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>

                <!-- Summary Section for Business Information -->
                <div class="form-section" id="summary-page" style="display: none;">
                    <h2>Summary of Your Inputs</h2>
                    <div class="summary-section mt-5">
                        <h5><strong>Summary of Business Information:</strong></h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody id="summary-table">
                                <!-- Summary rows will be populated here -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Summary Section for Business Operation -->
                <div class="form-section" id="sum-bus-op" style="display: none;">
                    <h2>Summary of Business Operation</h2>
                    <div class="summary-section mt-5">
                        <h5><strong>Business Operation Summary:</strong></h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody id="business-summary-table">
                                <!-- Summary rows will be populated here -->
                            </tbody>
                        </table>
                    </div>
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

function addEventEntry() {
            //Event information starts
            // Get form input values
            const eventTitle = document.getElementById('event-title').value;
            const eventDescription = document.getElementById('event-description').value;
            const eventDateFrom = document.getElementById('event-date-from').value;
            const eventDateTo = document.getElementById('event-date-to').value;
            
            // Get the error message element
            const errorMessage = document.getElementById('error-message');

            // Check if any field is empty
            if (!eventTitle || !eventDescription || !eventDateFrom || !eventDateTo) {
                errorMessage.style.display = 'block'; // Show the error message
                return;
            }

            // Hide the error message if fields are filled
            errorMessage.style.display = 'none';

            // Create a new row
            const tableBody = document.getElementById('event-entries-body');
            const newRow = document.createElement('tr');

            newRow.innerHTML = `
                <td>${eventTitle}</td>
                <td>${eventDescription}</td>
                <td>${eventDateFrom}</td>
                <td>${eventDateTo}</td>
                <td><button type="button" class="btn btn-danger" onclick="deleteEventRow(this)">Delete</button></td>
            `;

            // Append the new row to the table
            tableBody.appendChild(newRow);

            // Clear the form inputs
            document.getElementById('event-title').value = '';
            document.getElementById('event-description').value = '';
            document.getElementById('event-date-from').value = '';
            document.getElementById('event-date-to').value = '';
        }

        function deleteEventRow(button) {
            // Remove the specific row
            const row = button.closest('tr');
            row.remove();
        }

        function deleteEventEntry() {
            // Remove all rows in the table
            const tableBody = document.getElementById('event-entries-body');
            tableBody.innerHTML = ''; // Clear all event entries
        }
        //Event information ends

        //toggle business activity government entity
        function toggleFileInput(isVisible) {
        const fileInputContainer = document.getElementById('fileInputContainer');
        if (isVisible) {
            fileInputContainer.style.display = 'block'; // Show the file input if "Yes" is selected
        } else {
            fileInputContainer.style.display = 'none'; // Hide the file input if "No" is selected
        }
    }

    // Summarize Business Operation input - start
  
        function updateBusinessOperationSummary() {
            // Get form input values from the Business Operation section
            const businessArea = document.getElementById('business-area-special').value || "N/A";
            const totalBuilding = document.getElementById('total-building-special').value || "N/A";
            const fromTime = document.getElementById('from-time-special').value || "N/A";
            const toTime = document.getElementById('time-to-special').value || "N/A";
            const maleEmployees = document.getElementById('male-special').value || "N/A";
            const femaleEmployees = document.getElementById('female-special').value || "N/A";
            const numEmployeesInSanMateo = document.getElementById('num-emp-special').value || "N/A";
            const vanTruck = document.getElementById('van-truck-special').value || "N/A";
            const motor = document.getElementById('motor-special').value || "N/A";
            const tdn = document.getElementById('tdn-special').value || "N/A";
            const pin = document.getElementById('pin-special').value || "N/A";
            const lessorSurname = document.getElementById('lessor-surname-special').value || "N/A";
            const lessorGivenName = document.getElementById('lessor-given-name-special').value || "N/A";
            const lessorMiddleName = document.getElementById('lessor-middle-name-special').value || "N/A";
            const lessorSuffix = document.getElementById('lessor-suffix-special').value || "N/A";
    
            // Create the summary table rows
            const businessSummaryTable = document.getElementById('business-summary-table');
            businessSummaryTable.innerHTML = `
                <tr><td>Business Area (sq.m)</td><td>${businessArea}</td></tr>
                <tr><td>Total Floor/Building Area (sq.m)</td><td>${totalBuilding}</td></tr>
                <tr><td>Time Operation (From)</td><td>${fromTime}</td></tr>
                <tr><td>Time Operation (To)</td><td>${toTime}</td></tr>
                <tr><td>Male Employees</td><td>${maleEmployees}</td></tr>
                <tr><td>Female Employees</td><td>${femaleEmployees}</td></tr>
                <tr><td>Employees Living in San Mateo</td><td>${numEmployeesInSanMateo}</td></tr>
                <tr><td>Van/Truck</td><td>${vanTruck}</td></tr>
                <tr><td>Motor</td><td>${motor}</td></tr>
                <tr><td>Tax Declaration No.</td><td>${tdn}</td></tr>
                <tr><td>Property Identification No.</td><td>${pin}</td></tr>
                <tr><td>Lessor Surname</td><td>${lessorSurname}</td></tr>
                <tr><td>Lessor Given Name</td><td>${lessorGivenName}</td></tr>
                <tr><td>Lessor Middle Name</td><td>${lessorMiddleName}</td></tr>
                <tr><td>Lessor Suffix</td><td>${lessorSuffix}</td></tr>
            `;
        }
    
        // Attach 'oninput' event listeners to all form inputs
        document.querySelectorAll('#business-operation input').forEach(input => {
            input.addEventListener('input', updateBusinessOperationSummary);
        });
        // Summarize Business Operation input - end

                

        // Attach 'oninput' event listeners to all form inputs
        document.querySelectorAll('#business-operation-special input').forEach(input => {
            input.addEventListener('input', updateBusinessOperationSummary);
        });

    // Summarize Business Operation inputt - end

        // Summarizr the input for Business Information
        // Function to update the summary table in real-time
        function updateSummary() {
        // Get form input values
        const businessType = document.querySelector('input[name="choice4"]:checked')?.nextElementSibling.innerText || "Not Selected";
        const dtiSecCda = document.getElementById('dti-sec-cda-special').value || "Not Provided";
        const tin = document.getElementById('tin-special').value || "Not Provided";
        const sss = document.getElementById('sss-special').value || "Not Provided";
        const businessName = document.getElementById('business-name-special').value || "Not Provided";
        const tradeName = document.getElementById('trade-name-special').value || "Not Provided";
        const house = document.getElementById('house-special').value || "Not Provided";
        const buildingName = document.getElementById('building-name-special').value || "Not Provided";
        const blockNo = document.getElementById('block-no-special').value  || "Not Provided";
        const subdivision = document.getElementById('subdivision-special').value || "Not Provided";
        const province = document.getElementById('province-special').value || "Not Provided";
        const city = document.getElementById('city-special').value || "Not Provided";
        const barangay = document.getElementById('barangay-special').value || "Not Provided";
        const zipCode = document.getElementById('zip-code-special').value || "Not Provided";
        const district = document.getElementById('district-special').value || "Not Provided";
        const telephone = document.getElementById('telephone-special').value || "Not Provided";
        const email = document.getElementById('email-special').value || "Not Provided";
        const mobile = document.getElementById('mobile-special').value || "Not Provided";
        const surname = document.getElementById('surname-special').value || "Not Provided";
        const givenName = document.getElementById('given-name-special').value || "Not Provided";
        const middleName = document.getElementById('middle-name-special').value || "Not Provided";
        const suffix = document.getElementById('suffix-special').value || "Not Provided";
        const sex = document.getElementById('sex-special').value || "Not Provided";
        const filipinoPercentage = document.getElementById('filipino').value || "";
        const foreignPercentage = document.getElementById('foreign').value || "";

        // Create the summary table rows
        const summaryTable = document.getElementById('summary-table');
        summaryTable.innerHTML = `
            <tr><td>Type of Business</td><td>${businessType}</td></tr>
            <tr><td>DTI/SEC/CDA Registration Number</td><td>${dtiSecCda}</td></tr>
            <tr><td>TIN</td><td>${tin}</td></tr>
            <tr><td>SSS Number</td><td>${sss}</td></tr>
            <tr><td>Business Name</td><td>${businessName}</td></tr>
            <tr><td>Trade Name/Franchise</td><td>${tradeName}</td></tr>
            <tr><td>House/Bldg No.</td><td>${house}</td></tr>
            <tr><td>Name of Building</td><td>${buildingName}</td></tr>
            <tr><td>Block No. / Street</td><td>${blockNo}</td></tr>
            <tr><td>Subdivision</td><td>${subdivision}</td></tr>
            <tr><td>Province</td><td>${province}</td></tr>
            <tr><td>City/Municipality</td><td>${city}</td></tr>
            <tr><td>Barangay</td><td>${barangay}</td></tr>
            <tr><td>Zip Code</td><td>${zipCode}</td></tr>
            <tr><td>District</td><td>${district}</td></tr>
            <tr><td>Telephone Number</td><td>${telephone}</td></tr>
            <tr><td>Email Address</td><td>${email}</td></tr>
            <tr><td>Mobile No.</td><td>${mobile}</td></tr>
            <tr><td>Surname</td><td>${surname}</td></tr>
            <tr><td>Given Name</td><td>${givenName}</td></tr>
            <tr><td>Middle Name</td><td>${middleName}</td></tr>
            <tr><td>Suffix</td><td>${suffix}</td></tr>
            <tr><td>Sex</td><td>${sex}</td></tr>
            <tr><td>Filipino Percentage</td><td>${filipinoPercentage}%</td></tr>
            <tr><td>Foreign Percentage</td><td>${foreignPercentage}%</td></tr>
        `;
    }

    // Attach 'oninput' event listeners to all form inputs
    document.querySelectorAll('input, select').forEach(input => {
        input.addEventListener('input', updateSummary);
    });

    // Also attach an event listener for radio buttons (type of business)
    document.querySelectorAll('input[name="choice4"]').forEach(radio => {
        radio.addEventListener('change', updateSummary);
    });
    //Summary For Business Information Ends here

    function toggleInfo(show) {
        document.getElementById('hidden-info').style.display = show ? 'block' : 'none';
    }

    function showSummary() {
        // Collect data from the form
        const surname = document.getElementById('surname').value;
        const idNumber = document.getElementById('id-number').value;

        // Prepare summary data
        const summaryData = [
            { field: 'Surname', details: surname },
            { field: 'ID Number', details: idNumber }
            // Add other fields here as necessary
        ];

        const summaryTableBody = document.getElementById('summary-table-body');
        summaryTableBody.innerHTML = ''; // Clear previous data

        summaryData.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `<td style="border-right: 2px solid black;">${item.field}</td><td>${item.details}</td>`;
            summaryTableBody.appendChild(row);
        });

        // Show the summary page
        document.getElementById('summary-page').style.display = 'block';
        document.getElementById('basic-information-section').style.display = 'none'; // Hide form section
    }

    function goBack() {
        document.getElementById('summary-page').style.display = 'none';
        document.getElementById('basic-information-section').style.display = 'block'; // Show form section again
    }
    
    function toggleAuthorizedFields(select) {
        var authorizedFields = document.getElementById('authorized-fields');
            if (select.value === 'authorized-representative') {
        authorizedFields.style.display = 'flex';
    }       else {
        authorizedFields.style.display = 'none';
    }

    }

    function showYesFields() {
        document.getElementById('yes-fields').style.display = 'block';
        document.getElementById('no-fields').style.display = 'none';
    }

    function showNoFields() {
        document.getElementById('yes-fields').style.display = 'none';
        document.getElementById('no-fields').style.display = 'block';
    }
    function toggleHiddenMessage5(isVisible) {
        const hiddenMessage = document.getElementById('hidden-message-q5');
        hiddenMessage.style.display = isVisible ? 'block' : 'none';
    }


    function toggleHiddenMessage(isVisible) {
        const hiddenMessage = document.getElementById('hidden-message-q4');
        hiddenMessage.style.display = isVisible ? 'block' : 'none';
    }
    
    function updateSizeOptions() {
        const description = document.getElementById('description-special').value;
        const sizeSelect = document.getElementById('size-special');
        sizeSelect.innerHTML = ''; // Clear previous options

        if (description === 'small-business') {
            sizeSelect.innerHTML = '<option value="50-100">50-100 sq. meters</option><option value="101-200">101-200 sq. meters</option>';
        } else if (description === 'large-business') {
            sizeSelect.innerHTML = '<option value="201-500">201-500 sq. meters</option><option value="501-1000">501-1000 sq. meters</option>';
        } else if (description === 'corporate') {
            sizeSelect.innerHTML = '<option value="1000+">1000+ sq. meters</option>';
        }
    }

    function addFieldGroup() {
        const fieldGroup = document.getElementById('dynamic-field-group');
        const newGroup = fieldGroup.children[0].cloneNode(true);
        fieldGroup.appendChild(newGroup);
    }

    function removeFieldGroup() {
        const fieldGroup = document.getElementById('dynamic-field-group');
        if (fieldGroup.children.length > 1) {
            fieldGroup.removeChild(fieldGroup.lastElementChild);
        }
    }

    function updateProductsServices() {
        const lineBusiness = document.getElementById('line-business-special').value;
        const productsServices = document.getElementById('products-services-special');

        // Clear existing options
        productsServices.innerHTML = '<option value="">Select Products/Services</option>';

        // Define options based on line of business
        let options = [];
        switch (lineBusiness) {
            case 'retail':
                options = ['Clothing', 'Electronics', 'Groceries'];
                break;
            case 'manufacturing':
                options = ['Machinery', 'Components', 'Materials'];
                break;
            case 'wholesale':
                options = ['Bulk Goods', 'Raw Materials'];
                break;
            case 'hospitality':
                options = ['Food & Beverages', 'Room Service'];
                break;
            case 'finance':
                options = ['Consulting', 'Investment Services'];
                break;
        }

        // Add new options to the dropdown
        options.forEach(option => {
            const newOption = document.createElement('option');
            newOption.value = option.toLowerCase().replace(/\s+/g, '-');
            newOption.textContent = option;
            productsServices.appendChild(newOption);
        });
    }

    // Initialize products/services on page load
        document.addEventListener('DOMContentLoaded', updateProductsServices);
    // Basic Documentary Requirements 
    function toggleInfo(show) {
        var hiddenInfo = document.getElementById('hidden-info');
        if (show) {
            hiddenInfo.style.display = 'block';
        } else {
            hiddenInfo.style.display = 'none';
        }
    }

    function toggleInfo2(show) {
        var hiddenInfo2 = document.getElementById('hidden-info2');
        if (show) {
            hiddenInfo2.style.display = 'block';
        } else {
            hiddenInfo2.style.display = 'none';
        }
    }

    function toggleInfo3(isOwner) {
    const extraInfo = document.getElementById('extra-info3');
    const lessorInfo = document.getElementById('lessor-info');
    
    if (isOwner) {
        extraInfo.style.display = 'none'; // Hide the extra information if "Yes" is selected
        lessorInfo.style.display = 'none'; // Hide lessor fields when "Yes" is selected
    } else {
        extraInfo.style.display = 'block'; // Show the extra information if "No" is selected
        lessorInfo.style.display = 'block'; // Show lessor fields when "No" is selected
    }
}


    function toggleInfo4(isYes) {
        const hiddenInfo4 = document.getElementById('hidden-info4');
        if (isYes) {
            hiddenInfo4.style.display = 'block'; // Show the extra information if "Yes" is selected
        } else {
            hiddenInfo4.style.display = 'none'; // Hide the extra information if "No" is selected
        }
    }

    function toggleInfo5(isYes) {
        if (isYes) {
            // Show hidden info for "Yes"
            document.getElementById('hidden-info-yes').style.display = 'block';
            document.getElementById('hidden-info-no').style.display = 'none';
        } else {
            // Show hidden info for "No"
            document.getElementById('hidden-info-no').style.display = 'block';
            document.getElementById('hidden-info-yes').style.display = 'none';
        }
    }


    // Basic Documentary Requirements
    
    //Function to copy Main Address
    function copyMainAddress() {
        if (document.getElementById('same-as-main').checked) {
            // Copy values from Main Address to New Address
            document.getElementById('new-house').value = document.getElementById('house-special').value;
            document.getElementById('new-building-name').value = document.getElementById('building-name-special').value;
            document.getElementById('new-block-no').value = document.getElementById('block-no-special').value;
            document.getElementById('new-subdivision').value = document.getElementById('subdivision-special').value;
            document.getElementById('new-province').value = document.getElementById('province-special').value;
            document.getElementById('new-city').value = document.getElementById('city-special').value;
            document.getElementById('new-barangay').value = document.getElementById('barangay-special').value;
            document.getElementById('new-zip-code').value = document.getElementById('zip-code-special').value;
            document.getElementById('new-district').value = document.getElementById('district-special').value;
        } else {
            // Clear the new address fields if checkbox is unchecked
            document.getElementById('new-house').value = '';
            document.getElementById('new-building-name').value = '';
            document.getElementById('new-block-no').value = '';
            document.getElementById('new-subdivision').value = '';
            document.getElementById('new-province').value = '';
            document.getElementById('new-city').value = '';
            document.getElementById('new-barangay').value = '';
            document.getElementById('new-zip-code').value = '';
            document.getElementById('new-district').value = '';
        }
    }
        
     // Function to update the address preview
     function updateAddressPreview() {
        const house = document.getElementById('house-special').value;
        const buildingName = document.getElementById('building-name-special').value;
        const blockNo = document.getElementById('block-no-special').value;
        const subdivision = document.getElementById('subdivision-special').value;
        const province = document.getElementById('province-special').value;
        const city = document.getElementById('city-special').value;
        const barangay = document.getElementById('barangay-special').value;
        const zipCode = document.getElementById('zip-code-special').value;
        const district = document.getElementById('district-special').value;

        // Concatenate all fields into one address with spaces instead of commas
        let fullAddress = `${house ? house + ' ' : ''}${buildingName ? buildingName + ' ' : ''}${blockNo ? blockNo + ' ' : ''}`;
        fullAddress += `${subdivision ? subdivision + ' ' : ''}${barangay ? barangay + ' ' : ''}`;  // Removed 'Barangay' prefix
        fullAddress += `${province ? province + ' ' : ''}${city ? city + ' ' : ''}`;
        
        // Display in preview section
        document.getElementById('address-preview').textContent = fullAddress.trim() !== '' ? fullAddress : 'Complete address will appear here...';
    }

    // Get the elements
    const businessNameInput = document.getElementById('business-name-special');
    const tradeNameInput = document.getElementById('trade-name-special');
    const sameAsBusinessCheckbox = document.getElementById('same-as-business-special');

    // Add event listener for the checkbox
    sameAsBusinessCheckbox.addEventListener('change', function() {
        if (this.checked) {
            tradeNameInput.value = businessNameInput.value;  // Set trade name to business name
            tradeNameInput.setAttribute('readonly', true);   // Make the trade name field read-only
            tradeNameInput.classList.add('readonly');        // Add grayish background
        } else {
            tradeNameInput.value = '';  // Clear the trade name field
            tradeNameInput.removeAttribute('readonly');  // Make the trade name field editable
            tradeNameInput.classList.remove('readonly');

        }
    });

    // Update trade name if business name changes while checkbox is checked
    businessNameInput.addEventListener('input', function() {
        if (sameAsBusinessCheckbox.checked) {
            tradeNameInput.value = businessNameInput.value;  // Sync trade name with business name
        }
    });
      // Toggle the visibility of the progress sidebar
      $("#progress-button").click(function() {
          $("#progress-menu").toggleClass('hidden-xs');
      });

    // For file input
    function showFileName() {
        const input = document.getElementById('file-upload');
        const fileName = input.files[0] ? input.files[0].name : ''; // Check if a file is selected
        //document.getElementById('file-name').textContent = fileName; // Set the file name to display
    }
      // Navigation button logic
      let currentSection = 0;
      const sections = ["#basic-information-section", 
                        "#business-information", 
                        "#business-operation", 
                        "#business-activity", 
                        "#event-information", 
                        "#summary-page", 
                        "#sum-bus-op"];
      
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

              $(sections[currentSection]).show();
              updateButtons();
              updateProgress();
          }
      });
      
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

            // JavaScript to set the current date in the "Application Date" field
    document.getElementById("applicationDateSpecial").textContent = new Date().toLocaleDateString();


      </script>


</body>
</html>