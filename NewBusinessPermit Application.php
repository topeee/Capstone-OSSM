<?php
session_start(); // Start the session
include 'header.html';
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
      <title>New Business Application</title>
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

.business-type-section {
    background-color: #f0f8ff;
    padding: 20px;
    border-radius: 8px;
    margin: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}


#business-summary-table th, #business-summary-table td, #summary-page th, #summary-page td {
    font-family: Arial, sans-serif; /* Apply your preferred font */
    font-size: 14px; /* Adjust the size to your liking */
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd; /* Optional: Adds a border between rows */
}

#business-summary-table th, #summary-page th {
    font-weight: bold;
    background-color: #f2f2f2; /* Optional: background color for headers */
}


      </style>
    </head>
    <body>
      
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
                    <li class="progress-item" data-target="required-information">
                        <a href="#">
                            Other Required Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="summary-page">
                        <a href="#">
                            Summary Page for Business Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="sum-bus-op">
                        <a href="#">
                            Summary Page for Business Operation
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="sum-ot-req">
                        <a href="#">
                            Summary Page for Other Required Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                </ul>
            </div>
    
            <!-- Main form -->
            <div class="col-md-9">
                <!-- Basic Information Section -->
                <div class="form-section" id="basic-information-section">
                    <div class="row mb-3">
                        <h2>Basic Documentary Requirements</h2>
                        <div class="col-md-8"><h4>Application Type: <span style="color: lightgreen;">NEW</span></h4></div>
                    </div>
                    <br>
                    <form>
                        <!-- 1st row -->
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <p><span style="color: red;">*</span> Do you operate as a nano business with assets under Php 50,000?</p>
                            </div>
                            <!-- Yes Option -->
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input custom-radio" type="radio" id="yes1" name="choice1" value="yes" onclick="toggleInfo(true)">
                                    <label class="form-check-label" for="yes1">Yes</label>
                                </div>
                            </div>
                            <!-- No Option -->
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input custom-radio" type="radio" id="no1" name="choice1" value="no" onclick="toggleInfo(false)">
                                    <label class="form-check-label" for="no1">No</label>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd row -->
                        <!-- Hidden information section -->
                        <div id="hidden-info" style="display:none;">
                            <div class="row mb-3">
                                <div class="col-md-12 d-flex align-items-center">
                                    <input type="checkbox" id="additional-doc" name="additional-doc" style="margin-right: 10px;">
                                    <label for="additional-doc">
                                        <span style="color: red;">*</span> I confirm that the business entity's total assets as of its present valuation, excluding the property used for the location of the office, plant, and equipment, do not exceed Php 50,000.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- 3rd row -->
                        <div class="row mb-3">
                            <div class="col-md-8 d-flex align-items-center">
                                <label for="beneficiary">
                                    <span style="color: red;">*</span> Do you receive assistance from the Pangkabuhayang San Mateo Program? 
                                </label>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input custom-radio" type="radio" id="yes2" name="choice2" value="yes">
                                    <label class="form-check-label" for="yes2">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input custom-radio" type="radio" id="no2" name="choice2" value="no">
                                    <label class="form-check-label" for="no2">No</label>
                                </div>
                            </div>
                        </div>
                        <!-- 5th row -->
                        <div class="row">
                            <div class="col-md-8">
                                <p><span style="color: red;">*</span> Does the business owner have a valid ID?</p>
                            </div>
                            <!-- Yes Option -->
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input custom-radio" type="radio" id="yes3" name="choice3" value="yes" onclick="toggleInfo2(true)">
                                    <label class="form-check-label" for="yes3">Yes</label>
                                </div>
                            </div>
                            <!-- No Option -->
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input custom-radio" type="radio" id="no3" name="choice3" value="no" onclick="toggleInfo2(false)">
                                    <label class="form-check-label" for="no3">No</label>
                                </div>
                            </div>
                        </div>                        
                        <!-- 2nd Hidden information section -->
                        <div id="hidden-info2" style="display:none;">
                            <div class="row mb-3 d-flex align-items-center justify-content-between">
                                <div class="col-md-4">
                                    <label for="sn">Surname:</label>
                                    <input type="text" id="input1" name="input1" class="form-control" placeholder="Enter Surname">
                                </div>
                                <div class="col-md-4">
                                    <label for="id number">ID type/number:</label>
                                    <input type="text" id="input2" name="input2" class="form-control" placeholder="Enter ID Number">
                                </div>
                                <div class="col-md-4 text-center">
                                    <button type="button" id="submit-button" class="btn btn-primary">Verify</button>
                                </div>
                            </div>
                        </div>
                        <!-- 6th row -->
                        <div class="row">
                            <div class="col-md-8 align-items-center">
                                <p><span style="color: red;">*</span> Evidence of business registration (CDA for cooperatives, SEC for corporations and partnerships, or DTI for sole proprietorships) is necessary.</p>
                            </div>
                            <div class="col-md-4">
                                <label class="file-input-label" for="file-upload"></label>
                                <input type="file" id="file-upload1" onchange="showFileName()">
                                <span id="file-name" class="file-chosen"></span>
                            </div>
                        </div>
                        <!-- 7th row -->
                        <div class="row">
                            <div class="col-md-8 align-items-center">
                                <p><span style="color: red;">*</span> If leasing, a contract of lease; if owned, a tax declaration (required)</p>
                            </div>
                            <div class="col-md-4">
                                <label class="file-input-label" for="file-upload"></label>
                                <input type="file" id="file-upload2" onchange="showFileName()" required>
                                <span id="file-name" class="file-chosen"></span>
                            </div>
                        </div>
                        <!-- 8th row -->
                        <div class="row">
                            <div class="col-md-12 align-items-center">
                                <p><span style="color: red;">*</span> Photos of location of business (required)</p>
                            </div>
                        </div>
                        <!-- sub row -->
                        <div class="row ms-5">
                            <div class="col-md-8 align-items-center">
                                <p><span style="color: red;">*</span> Front view of Business Location</p>
                            </div>
                            <div class="col-md-4">
                                <label class="file-input-label" for="file-upload"></label>
                                <input type="file" id="file-upload3" onchange="showFileName()">
                                <span id="file-name" class="file-chosen"></span>
                            </div>
                        </div>
                        <!-- sub row -->
                        <div class="row ms-5">
                            <div class="col-md-8 align-items-center">       
                                <p><span style="color: red;">*</span> Area of Business Activity</p>
                            </div>
                            <div class="col-md-4">
                                <label class="file-input-label" for="file-upload"></label>
                                <input type="file" id="file-upload4" onchange="showFileName()">
                                <span id="file-name" class="file-chosen"></span>
                            </div>
                        </div>
                        <!-- sub row -->
                        <div class="row ms-5">
                            <div class="col-md-8 align-items-center">
                                <p><span style="color: red;">*</span> Street View of Business Location (LEFT)</p>
                            </div>
                            <div class="col-md-4">
                                <label class="file-input-label" for="file-upload"></label>
                                <input type="file" id="file-upload5" onchange="showFileName()">
                                <span id="file-name" class="file-chosen"></span>
                            </div>
                        </div>
                        <!-- sub row -->
                        <div class="row ms-5">
                            <div class="col-md-8 align-items-center">
                                <p><span style="color: red;">*</span> Street View of Business Location (RIGHT)</p>
                            </div>
                            <div class="col-md-4">
                                <label class="file-input-label" for="file-upload"></label>
                                <input type="file" id="file-upload6" onchange="showFileName()">
                                <span id="file-name" class="file-chosen"></span>
                            </div>
                        </div>
                        <!-- sub row -->
                        <div class="row mb-3 d-flex align-items-center justify-content-between">
                            <div class="col-md-12">
                                <p><span style="color: red;">*</span> Other required documents as needed</p>
                            </div>
                            <div class="col-md-8">
                                <label for="id number">ID type/number:</label>
                                <input type="text" id="input2" name="input2" class="form-control" placeholder="Enter type of documents">
                            </div>
                            <div class="col-md-4">
                                <label class="file-input-label" for="file-upload"></label>
                                <input type="file" id="file-upload7" onchange="showFileName()">
                                <span id="file-name" class="file-chosen"></span>
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
                        <div class="business-type-section" style="background-color: #f0f8ff; padding: 20px; border-radius: 8px; margin: 10px;">
                            <div class="row mb-3 ms-3">
                                <h5 style="font-weight: 700;">Type of Business:</h5>
                                <div class="col-md-12 align-items-center">
                                    <p>Please choose one:</p>
                                </div>
                                <div class="col-md-4 form-check">
                                    <input type="radio" id="soleProprietorship" name="choice4" value="soleProprietorship" class="form-check-input" style="width: 20px; height: 20px;">
                                    <label for="soleProprietorship" class="form-check-label">Sole Proprietorship</label>
                                </div>
                                <div class="col-md-4 form-check">
                                    <input type="radio" id="partnership" name="choice4" value="partnership" class="form-check-input" style="width: 20px; height: 20px;">
                                    <label for="partnership" class="form-check-label">Partnership</label>
                                </div>
                                <div class="col-md-4 form-check">
                                    <input type="radio" id="corporation" name="choice4" value="corporation" class="form-check-input" style="width: 20px; height: 20px;">
                                    <label for="corporation" class="form-check-label">Corporation</label>
                                </div>
                            </div>
                            <div class="row mb-3 ms-3">
                                <div class="col-md-4 form-check">
                                    <input type="radio" id="cooperative" name="choice4" value="cooperative" class="form-check-input" style="width: 20px; height: 20px;">
                                    <label for="cooperative" class="form-check-label">Cooperative</label>
                                </div>
                                <div class="col-md-6 form-check">
                                    <input type="radio" id="opc" name="choice4" value="opc" class="form-check-input" style="width: 20px; height: 20px;">
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
                                <input type="text" id="dti-sec-cda" name="dti-sec-cda" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tin">Tax Identification Number (TIN):</label>
                                <input type="text" id="tin" name="tin" class="form-control" placeholder="XXX-XXX-XXX-XXX" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="sss">SSS Number:</label>
                                <input type="text" id="sss" name="sss" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="business-name">Business Name:</label>
                                <input type="text" id="business-name" name="business-name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="trade-name">Trade Name / Franchise:</label>
                                <input type="text" id="trade-name" name="trade-name" class="form-control">
                            </div>
                            <div class="col-md-4 d-flex align-items-end">
                                <input type="checkbox" id="same-as-business" name="same-as-business">
                                <label for="same-as-business" style="margin-left: 10px; margin-top: 10px;">Same as Business Name</label>
                            </div>
                        </div>
                        <!-- Main address field -->
                        <div class="row mb-3">
                        <!-- Row 1 -->
                            <h5 style="font-weight: 700;">Main Address:</h5>
                            <div class="col-md-4">
                                <label for="house">House/Blding No.</label>
                                <input type="text" id="house" name="house" class="form-control" oninput="updateAddressPreview()">
                            </div>
                            <div class="col-md-4">
                                <label for="building-name">Name of Building</label>
                                <input type="text" id="building-name" name="building-name" class="form-control" oninput="updateAddressPreview()">
                            </div>
                            <div class="col-md-4">
                                <label for="block-no">Block No. / Street</label>
                                <input type="text" id="block-no" name="block-no" class="form-control" required oninput="updateAddressPreview()">
                            </div>
                        </div>
                        <!-- Row 2 -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="subdivision">Subdivision</label>
                                <input type="text" id="subdivision" name="subdivision" class="form-control" oninput="updateAddressPreview()">
                            </div>
                            <div class="col-md-4">
                                <label for="province">Province</label>
                                <input type="text" id="province" name="province" class="form-control" required oninput="updateAddressPreview()">
                            </div>
                            <div class="col-md-4">
                                <label for="city">City/Municipality</label>
                                <input type="text" id="city" name="city" class="form-control" required oninput="updateAddressPreview()">
                            </div>                
                        </div>
                        <!-- Row 3 -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="barangay">Barangay</label>
                                <input type="text" id="barangay" name="barangay" class="form-control" required oninput="updateAddressPreview()">
                            </div>
                            <div class="col-md-4">
                                <label for="zip-code">Zip Code</label>
                                <input type="text" id="zip-code" name="zip-code" class="form-control" required oninput="updateAddressPreview()">
                            </div>  
                            <div class="col-md-4">
                                <label for="district">District</label>
                                <input type="text" id="district" name="district" class="form-control" oninput="updateAddressPreview()">
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
                            <input type="text" id="telephone" name="telephone" class="form-control">
                        </div>
                    <div class="col-md-4">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="mobile">Mobile No.</label>
                        <input type="text" id="mobile" name="mobile" class="form-control">
                    </div>
                </div>
                    <!-- Owner's Information Section -->
                    <h5 style="font-weight: 700;">Owner's Information:</h5>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="surname">Surname</label>
                            <input type="text" id="surname" name="surname" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="given-name">Given Name</label>
                            <input type="text" id="given-name" name="given-name" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="middle-name">Middle Name</label>
                            <input type="text" id="middle-name" name="middle-name" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="suffix">Suffix</label>
                            <input type="text" id="suffix" name="suffix" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="sex">Sex</label>
                            <select id="sex" name="sex" class="form-control">
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    
                   <!-- Business Operations -->
                    <div class="form-section" id="business-operation" style="display: none;">
                        <form>    
                            <h2>Business Operations</h2><br>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="business-area">Business Area (in sq. m.)</label>
                                    <input type="text" id="business-area" name="business-area" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="total-building">Total Floor/Building Area (in sq. m.)</label>
                                    <input type="type" id="total-building" name="total-building" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="from-time">Time Operation (From:)</label>
                                    <input type="time" id="from-time" name="from-time" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="time-to">To:</label>
                                    <input type="time" id="time-to" name="time-to" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <p>Total Number of Employees in the organization:</p>
                                <div class="col-md-6 d-flex align-items-center">
                                    <label for="female" class="custom-margin">Male:</label>
                                    <input type="text" id="male" name="male" class="form-control">
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <label for="female" class="custom-margin">Female:</label>
                                    <input type="text" id="female" name="female" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="num-emp">Number of Employees Living in San Mateo:</label>
                                    <input type="text" id="num-emp" name="num-emp" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <p>Number of Delivery Vehicle:</p>
                                <div class="col-md-6 d-flex align-items-center">
                                    <label for="motor" class="custom-margin">Van/Truck:</label>
                                    <input type="text" id="van/truck" name="van/truck" class="form-control">
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <label for="motor" class="custom-margin">Motor:</label>
                                    <input type="text" id="motor" name="motor" class="form-control">
                                </div>
                            </div>

                            <br><br>
                            <!-- New Address Field with Checkbox -->
                            <div class="row mb-3">
                                <h5 style="font-weight: 700;">Business Location Address:</h5>
                                <div class="col-md-12 mb-3">
                                    <input type="checkbox" id="same-as-main" name="same-as-main" onclick="copyMainAddress()">
                                    <label for="same-as-main">Same as Main Address</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="new-house">House/Blding No.</label>
                                    <input type="text" id="new-house" name="new-house" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="new-building-name">Name of Building</label>
                                    <input type="text" id="new-building-name" name="new-building-name" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="new-block-no">Block No. / Street</label>
                                    <input type="text" id="new-block-no" name="new-block-no" class="form-control">
                                </div>
                            </div>
                            <!-- Row 2 -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="new-subdivision">Subdivision</label>
                                    <input type="text" id="new-subdivision" name="new-subdivision" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="new-province">Province</label>
                                    <input type="text" id="new-province" name="new-province" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="new-city">City/Municipality</label>
                                    <input type="text" id="new-city" name="new-city" class="form-control">
                                </div>                
                            </div>
                            <!-- Row 3 -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="new-barangay">Barangay</label>
                                    <input type="text" id="new-barangay" name="new-barangay" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="new-zip-code">Zip Code</label>
                                    <input type="text" id="new-zip-code" name="new-zip-code" class="form-control">
                                </div>  
                                <div class="col-md-4">
                                    <label for="new-district">District</label>
                                    <input type="text" id="new-district" name="new-district" class="form-control">
                                </div>
                            </div>
                            <p style="color: red;">Reminder: Make sure your address is correct, because it will be reflected in the Mayor's Permit</p>
                            <br><br>

                            <div class="row mb-3">
                                <p><span style="color: red;">*</span> One field is at least required.</p>
                                <div class="col-md-4">
                                    <label for="tdn">Tax Declaration No.</label>
                                    <input type="text" id="tdn" name="tdn" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="pin">Property Identification No.</label>
                                    <input type="text" id="pin" name="pin" class="form-control">
                                </div>  
                                <div class="col-md-4">
                                    <label for="tct">Transfer Certificate of Title</label>
                                    <input type="text" id="tct" name="tct" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Are you the registered owner?</p>
                                </div>
                                <!-- Yes Option -->
                                <div class="col-md-2 form-check">
                                    <input type="radio" id="yes3" name="choice3" value="yes" class="form-check-input" onclick="toggleInfo3(true)">
                                    <label for="yes3" class="form-check-label">Yes</label>
                                </div>
                                <!-- No Option -->
                                <div class="col-md-2 form-check">
                                    <input type="radio" id="no3" name="choice3" value="no" class="form-check-input" onclick="toggleInfo3(false)">
                                    <label for="no3" class="form-check-label">No</label>
                                </div>
                            </div>
                            <!-- Another hidden information -->
                            <div id="extra-info3" style="display: none;">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="authorized-person">Is this a government property?</label>
                                    </div>
                                    <!-- Yes Option -->
                                    <div class="col-md-2 form-check">
                                        <input type="radio" id="yes4" name="choice4" value="yes" class="form-check-input" onclick="toggleInfo4(true)">
                                        <label for="yes4" class="form-check-label">Yes</label>
                                    </div>
                                    <!-- No Option -->
                                    <div class="col-md-2 form-check">
                                        <input type="radio" id="no4" name="choice4" value="no" class="form-check-input" onclick="toggleInfo4(false)">
                                        <label for="no4" class="form-check-label">No</label>
                                    </div>
                                </div>
                                <!-- Another hidden information -->
                                <div id="hidden-info4" style="display: none;">
                                    <div class="row mb-3 ms-5">
                                        <div class="col-md-6">
                                            <p>*Affidavit of Undertaking of Government Owned Properties</p>
                                        </div>
                                        <div class="col-md-4">
                                        <input type="file" id="file-upload8" onchange="showFileName()">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="ownership-change">Is this a company/corporate owned property?</label>
                                    </div>
                                    <!-- Yes Option -->
                                    <div class="col-md-2 form-check">
                                        <input type="radio" id="yes5" name="choice5" value="yes" class="form-check-input" onclick="toggleInfo5(true)">
                                        <label for="yes5" class="form-check-label">Yes</label>
                                    </div>
                                    <!-- No Option -->
                                    <div class="col-md-2 form-check">
                                        <input type="radio" id="no5" name="choice5" value="no" class="form-check-input" onclick="toggleInfo5(false)">
                                        <label for="no5" class="form-check-label">No</label>
                                    </div>
                                </div>
                                <!-- Another hidden information --> 
                                
                                <!-- Hidden Input Fields for "Yes" -->
                                <div id="hidden-info-yes" style="display: none;">
                                    <div class="row mb-3">
                                        <p>Owned / Represented By:</p>
                                        <div class="col-md-3">
                                            <label for="surname">Surname</label>
                                            <input type="text" id="surname" name="surname" class="form-control">
                                        </div>
                                        <!-- Given Name -->
                                        <div class="col-md-3">
                                            <label for="given-name">Given Name</label>
                                            <input type="text" id="given-name" name="given-name" class="form-control">
                                        </div>
                                        <!-- Middle Name -->
                                        <div class="col-md-3">
                                            <label for="middle-name">Middle Name</label>
                                            <input type="text" id="middle-name" name="middle-name" class="form-control">
                                        </div>
                                        <!-- Suffix -->
                                        <div class="col-md-3">
                                            <label for="suffix">Suffix</label>
                                            <input type="text" id="suffix" name="suffix" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <!-- Hidden Input Fields for "No" -->
                                <div id="hidden-info-no" style="display: none;">
                                    <p>Name of Lessor:</p>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label for="surname">Surname</label>
                                            <input type="text" id="surname-no" name="surname-no" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="given-name">Given Name</label>
                                            <input type="text" id="given-name-no" name="given-name-no" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="middle-name">Middle Name</label>
                                            <input type="text" id="middle-name-no" name="middle-name-no" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="suffix">Suffix</label>
                                            <input type="text" id="suffix-no" name="suffix-no" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Contract of Lease Validity -->
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label>Contract of Lease Validity</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lease-from">From:</label>
                                            <input type="time" id="lease-from" name="lease-from" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lease-to">To:</label>
                                            <input type="time" id="lease-to" name="lease-to" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br><br>
                        </form>    
                    </div>

    
                <!-- Business Activity -->
                <div class="form-section" id="business-activity" style="display: none;">
                    <h2>Business Activity</h2>
                    <p style="font-weight: 700;">Business Details:</p>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tci">Total Capital Investment (Paid up Capital + Lease Expenses + Equipments):</label>
                            <input type="text" id="tci" name="tci" class="form-control" required>
                        </div>
                    </div>

                            <p>Do you have tax incentives from any Goverment Entity?</p>
                        <div class="row mb-3 ms-2">
                            <div class="col-md-6 form-check">
                                <!-- Yes Option -->
                                <input type="radio" id="yesUpload" name="uploadChoice" value="yes" class="form-check-input" onclick="toggleFileInput(true)">
                                <label for="yesUpload" class="form-check-label">Yes</label>
                            </div>
                            <div class="col-md-6 form-check">
                                <!-- No Option -->
                                <input type="radio" id="noUpload" name="uploadChoice" value="no" class="form-check-input" onclick="toggleFileInput(false)">
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
                            <input type="radio" id="main-office" name="office-location" value="main-office" class="form-check-input">
                            <label for="main-office" class="form-check-label">Main Office</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="radio" id="branch" name="office-location" value="branch" class="form-check-input">
                            <label for="branch" class="form-check-label">Branch</label>
                        </div>
                        <div class="col-md-4 form-check">
                            <input type="radio" id="admin-office" name="office-location" value="admin-office" class="form-check-input">
                            <label for="admin-office" class="form-check-label">Admin Office Only</label>
                        </div>
                    </div>
            
                    <div class="row mb-3"> 
                        <div class="col-md-6">
                            <label for="line-business">Line of Business</label>
                            <div class="input-group">
                                <select id="line-business" name="line-business" class="form-control" onchange="updateProductsServices()">
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
                                <select id="products-services" name="products-services" class="form-control">
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
                                <input type="text" id="no-of-units" name="no-of-units" class="form-control" placeholder="Enter number of units">
                            </div>
                
                            <!-- Description Dropdown -->
                            <div class="col-md-3">
                                <label for="description">Description</label>
                                <select id="description" name="description" class="form-control" onchange="updateSizeOptions()">
                                    <option value="small-business">Small Business</option> <!-- Initial value -->
                                    <option value="large-business">Large Business</option>
                                    <option value="corporate">Corporate</option>
                                </select>
                            </div>
                
                            <!-- Size Dropdown (depends on description) -->
                            <div class="col-md-6">
                                <label for="size">Size</label>
                                <select id="size" name="size" class="form-control">
                                    <option value="">Select Size (e.g., sq. meters)</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="description">Description of Business</label>
                                <textarea id="descriptions" name="descriptions" class="form-control" rows="3" placeholder="Provide a brief description of the business"></textarea>    
                            </div>

                            <!-- + and - Buttons -->
                            <div class="col-md-3 d-flex align-items-end">
                                <button type="button" class="btn btn-success" onclick="addFieldGroup()">+</button>
                                <button type="button" class="btn btn-danger ml-2" onclick="removeFieldGroup()">-</button>
                            </div>
                            <!-- Description of Business -->
                            

                        </div>
                    </div>

                </div>

                <!-- Other required information section -->
        <div class="form-section" id="required-information" style="display: none;">
                    <div class="container mt-4">
            <form>
                            <div class="row mb-3">
                                <h2>Other Required Information</h2>
                            </div>
                        
                            <!-- Question 1 -->
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <label for="q1" class="form-label">1. Is the location/area to be used for office purposes only?</label>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q1-yes" name="q1" value="yes">
                            <label class="form-check-label" for="q1-yes">Yes</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q1-no" name="q1" value="no">
                            <label class="form-check-label" for="q1-no">No</label>
                        </div>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <label for="q2" class="form-label">2. Will there be walk-in transactions or sales?</label>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q2-yes" name="q2" value="yes">
                            <label class="form-check-label" for="q2-yes">Yes</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q2-no" name="q2" value="no">
                            <label class="form-check-label" for="q2-no">No</label>
                        </div>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <label for="q3" class="form-label">3. Will there be storage or display of merchandise?</label>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q3-yes" name="q3" value="yes">
                            <label class="form-check-label" for="q3-yes">Yes</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q3-no" name="q3" value="no">
                            <label class="form-check-label" for="q3-no">No</label>
                        </div>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <label for="q4" class="form-label">4. Are you serving or selling liquor?</label>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q4-yes" name="q4" value="yes" onclick="toggleHiddenMessage(true)">
                            <label class="form-check-label" for="q4-yes">Yes</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q4-no" name="q4" value="no" onclick="toggleHiddenMessage(false)">
                            <label class="form-check-label" for="q4-no">No</label>
                        </div>
                    </div>
                </div>
                <div id="hidden-message-q4" style="display: none;">
                    <div class="show ms-5">
                        <p><span>Please Note:</span> Once your Business Permit Renewal application has reached Final Approval, please renew your liquor permit.</p>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <label for="q5" class="form-label">5. Is your business located inside a city-owned market, private market, or private talipapa?</label>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input type="radio" id="q5-yes" name="q5" value="yes" class="form-check-input" onclick="toggleHiddenMessage5(true)">
                            <label for="q5-yes" class="form-check-label">Yes</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input type="radio" id="q5-no" name="q5" value="no" class="form-check-input" onclick="toggleHiddenMessage5(false)">
                            <label for="q5-no" class="form-check-label">No</label>
                        </div>
                    </div>
                </div>

                <div id="hidden-message-q5" style="display: none;">
                    <div class="row mb-3 ms-5">
                        <div class="col-md-8">
                            <label for="permit-yes" class="form-label">*Are you a market Operator?</label>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <input type="radio" id="permit-yes" name="permit" value="yes" class="form-check-input" onclick="showYesFields()">
                                <label for="permit-yes" class="form-check-label">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-check">
                                <input type="radio" id="permit-no" name="permit" value="no" class="form-check-input" onclick="showNoFields()">
                                <label for="permit-no" class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>

                    <!-- Yes Fields -->
                    <div id="yes-fields" style="display:none;">
                        <div class="row mb-3 ms-5">
                            <div class="col-md-6">
                                <label for="market-name" class="form-label">Market Name:</label>
                                <input type="text" id="market-name" name="market-name" class="form-control" placeholder="Market Name">
                            </div>
                            <div class="col-md-6">
                                <label for="operator-id" class="form-label">Operator ID:</label>
                                <input type="text" id="operator-id" name="operator-id" class="form-control" placeholder="Operator ID">
                            </div>
                        </div>
                        <div class="row mb-3 ms-5">
                            <div class="col-md-6">
                                <label for="floor-plan" class="form-label">Floor Plan</label>
                                <input type="file" id="floor-plan" name="floor-plan" class="form-control">
                            </div>
                        </div>
                    </div>

                    <!-- No Fields -->
                    <div id="no-fields" style="display:none;">
                        <div class="row mb-3 ms-5">
                            <div class="col-md-6">
                                <label for="market-dropdown" class="form-label">Market Name</label>
                                <select id="market-dropdown" name="market-dropdown" class="form-select">
                                    <option value="" disabled selected>Select a market</option>
                                    <option value="market1">Market 1</option>
                                    <option value="market2">Market 2</option>
                                    <option value="market3">Market 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Question 6 -->
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <label for="q6" class="form-label">6. Do you have a Community Tax Certificate?</label>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q6-yes" name="q6" value="yes" onclick="toggleCedulaField(true)">
                            <label class="form-check-label" for="q6-yes">Yes</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q6-no" name="q6" value="no" onclick="toggleCedulaField(false)">
                            <label class="form-check-label" for="q6-no">No</label>
                        </div>
                    </div>
                </div>

                <div id="cedula-field" class="row align-items-center mb-3 ms-5" style="display: none;">
                    <div class="col-md-6">
                        <label for="cedula-number" class="form-label">Enter Cedula Number:</label>
                        <input type="text" id="cedula-number" name="cedula-number" class="form-control" placeholder="Cedula Number">
                    </div>
                </div>

                <!-- Question 7 -->
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <label for="q7" class="form-label">7. Is your business registered as a Barangay Micro Business Enterprise (BMBE)?</label>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q7-yes" name="q7" value="yes" onclick="toggleBMBEField(true)">
                            <label class="form-check-label" for="q7-yes">Yes</label>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q7-no" name="q7" value="no" onclick="toggleBMBEField(false)">
                            <label class="form-check-label" for="q7-no">No</label>
                        </div>
                    </div>
                </div>
                <!-- Hidden input for BMBE Certificate -->
                <div id="bmbe-field" class="row align-items-center mb-3 ms-5" style="display: none;">
                    <div class="col-md-6">
                        <label for="bmbe-cert" class="form-label">*BMBE Certificate of Authority from DTI</label>
                    </div>
                    <div class="col-md-6">
                        <input type="file" id="bmbe-cert" name="bmbe-cert" class="form-control">
                    </div>
                </div>
            
                <!-- Question 8 -->
                <div class="row align-items-center mb-3">
                    <div class="col-md-8">
                        <label for="q8" class="form-label">8. Is your business activity covered by PAGCOR, Games Amusement Board (GAB), or PCSO regulations? (e.g., POGO, E-Games, E-Bingo, OTB, OCBS, Cockpit, STL, etc.)</label>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q8-yes" name="q8" value="yes">
                            <label class="form-check-label" for="q8-yes">Yes</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input custom-radio" type="radio" id="q8-no" name="q8" value="no">
                            <label class="form-check-label" for="q8-no">No</label>
                        </div>
                    </div>
                </div>
                <!-- Question 9 -->
                <div class="row mb-3">
                    <div class="col-md-8">
                        <label for="q9" class="form-label">9. Is your business qualified for any tax exemption program?</label>
                    </div>
                    <div class="col-md-2 form-check">
                        <input type="radio" id="q9-yes" name="q9" value="yes" class="form-check-input" onclick="toggleTaxExemptionFields(true)">
                        <label for="q9-yes" class="form-check-label">Yes</label>
                    </div>
                    <div class="col-md-2 form-check">
                        <input type="radio" id="q9-no" name="q9" value="no" class="form-check-input" onclick="toggleTaxExemptionFields(false)">
                        <label for="q9-no" class="form-check-label">No</label>
                    </div>
                </div>
                <!-- Hidden checkboxes for tax exemption options -->
                <div id="tax-exemption-options" class="row mb-3 ms-5" style="display: none;">
                    <div class="col-md-4 form-check">
                        <input type="checkbox" id="cooperative" name="exemption-type" value="cooperative" class="form-check-input">
                        <label for="cooperative" class="form-check-label">Cooperative</label>
                    </div>
                    <div class="col-md-4 form-check">
                        <input type="checkbox" id="peza" name="exemption-type" value="peza" class="form-check-input">
                        <label for="peza" class="form-check-label">PEZA Accredited</label>
                    </div>
                    <div class="col-md-4 form-check">
                        <input type="checkbox" id="inventor" name="exemption-type" value="inventor" class="form-check-input">
                        <label for="inventor" class="form-check-label">Inventor</label>
                    </div>
                </div>
                <!-- Question 10 -->
                <div class="row mb-3">
                    <div class="col-md-8">
                        <label for="q10" class="form-label">10. Is the owner of the business a person with a Disability?</label>
                    </div>
                    <div class="col-md-2 form-check">
                        <input type="radio" id="q10-yes" name="q10" value="yes" class="form-check-input">
                        <label for="q10-yes" class="form-check-label">Yes</label>
                    </div>
                    <div class="col-md-2 form-check">
                        <input type="radio" id="q10-no" name="q10" value="no" class="form-check-input">
                        <label for="q10-no" class="form-check-label">No</label>
                    </div>
                </div>
                <!-- Question 11 -->
                <div class="row mb-3">
                    <div class="col-md-8">
                        <label for="q11" class="form-label">11. Does the business employ Persons with Disability?</label>
                    </div>
                    <div class="col-md-2 form-check">
                        <input type="radio" id="q11-yes" name="q11" value="yes" class="form-check-input">
                        <label for="q11-yes" class="form-check-label">Yes</label>
                    </div>
                    <div class="col-md-2 form-check">
                        <input type="radio" id="q11-no" name="q11" value="no" class="form-check-input">
                        <label for="q11-no" class="form-check-label">No</label>
                    </div>
                </div>
                <!-- Question 12 -->
                <div class="row mb-3">
                    <div class="col-md-8">
                        <label for="q12" class="form-label">12. Does your business utilize an internet service subscription?</label>
                    </div>
                    <div class="col-md-2 form-check">
                        <input type="radio" id="q12-yes" name="q12" value="yes" class="form-check-input" onclick="toggleInternetServiceFields(true)">
                        <label for="q12-yes" class="form-check-label">Yes</label>
                    </div>
                    <div class="col-md-2 form-check">
                        <input type="radio" id="q12-no" name="q12" value="no" class="form-check-input" onclick="toggleInternetServiceFields(false)">
                        <label for="q12-no" class="form-check-label">No</label>
                    </div>
                </div>
                <!-- Hidden radio buttons for Prepaid and Postpaid -->
                <div id="internet-service-options" class="row mb-3 ms-5" style="display: none;">
                    <div class="col-md-6">
                        <label for="internet-type" class="form-label">*If yes, please choose one:</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input type="radio" id="prepaid" name="internet-type" value="prepaid" class="form-check-input">
                        <label for="prepaid" class="form-check-label">Prepaid</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input type="radio" id="postpaid" name="internet-type" value="postpaid" class="form-check-input">
                        <label for="postpaid" class="form-check-label">Postpaid</label>
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
                
                    <div class="col-md-6">
                        <label for="upload-rep-id" class="form-label">Scanned ID of the Representative:</label>
                        <input type="file" id="upload-rep-id" name="upload-rep-id" class="form-control">
                    </div>
                </div>     

                <div class="col-md-6"> 
                    <label for="upload-id" class="form-label">Scanned ID of the Owner:</label>
                    <input type="file" id="upload-id" name="upload-id" class="form-control">
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
                
                <!-- Summary Section for Other required information -->
                <div class="form-section" id="sum-ot-req" style="display: none;">
                    <h2>Summary of Other Required Information</h2>
                    <div class="summary-section mt-5">
                        <h5><strong>Other Required Information:</strong></h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody id="other-required-info-summary-table">
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

            //Other required information summary starts here
            function updateRequiredInformation () {
            const locloc = document.querySelector('input[name="q1"]:checked')?.value || "Not Provided";

            const RequiredSummaryTable = document.getElementById('other-required-info-summary-table');
            summaryTable.innerHTML = `
            <tr><td>Location of the Area</td><td>${locloc}</td></tr
            `;
            }

            // Attach 'oninput' event listeners to all form inputs and radio buttons
            document.querySelectorAll('#sum-ot-req input').forEach(input => {
                input.addEventListener('input', updateRequiredInformation);
            });
            document.querySelectorAll('#sum-ot-req input[type="radio"]').forEach(radio => {
                radio.addEventListener('change', updateRequiredInformation);
            });
            //Other required information summary ends here

            //Toggle the business activity government entity?
            function toggleFileInput(isVisible) {
            const fileInputContainer = document.getElementById('fileInputContainer');
            if (isVisible) {
                fileInputContainer.style.display = 'block'; // Show the file input if "Yes" is selected
            } else {
                fileInputContainer.style.display = 'none'; // Hide the file input if "No" is selected
            }
        }

            //Business operation & activity summary starts here
            function updateBusinessOperationSummary() {
            // Get form input values from the Business Operation section
            const businessArea = document.getElementById('business-area').value || "Not Provided";
            const totalBuilding = document.getElementById('total-building').value || "Not Provided";
            const fromTime = document.getElementById('from-time').value || "Not Provided";
            const toTime = document.getElementById('time-to').value || "Not Provided"; // updated ID
            const maleEmployees = document.getElementById('male').value || "Not Provided";
            const femaleEmployees = document.getElementById('female').value || "Not Provided";
            const numEmployeesInSanMateo = document.getElementById('num-emp').value || "Not Provided";
            const vanTruck = document.getElementById('van/truck').value || "Not Provided";
            const motor = document.getElementById('motor').value || "Not Provided";
            const tdn = document.getElementById('tdn').value || "Not Provided";
            const pin = document.getElementById('pin').value || "Not Provided";
            const tct = document.getElementById('tct').value || "Not Provided";

            // Get radio button values for ownership
            const ownerRegistered = document.querySelector('input[name="choice3"]:checked')?.value || "Not Provided";
            const governmentProperty = document.querySelector('input[name="choice4"]:checked')?.value || "Not Provided";
            const companyOwnedProperty = document.querySelector('input[name="choice5"]:checked')?.value || "Not Provided";

            // If the user is the registered owner, no further info is needed
            let ownerInfo = "";
            if (ownerRegistered === 'no') {
                // If it's not the registered owner, check for lessor or ownership details
                const surnameNo = document.getElementById('surname-no').value || "Not Provided";
                const givenNameNo = document.getElementById('given-name-no').value || "Not Provided";
                const middleNameNo = document.getElementById('middle-name-no').value || "Not Provided";
                const suffixNo = document.getElementById('suffix-no').value || "Not Provided";
                const leaseFrom = document.getElementById('lease-from').value || "Not Provided";
                const leaseTo = document.getElementById('lease-to').value || "Not Provided";

                ownerInfo = `
                    <tr><td>Name of Lessor</td><td>${surnameNo} ${givenNameNo} ${middleNameNo} ${suffixNo}</td></tr>
                    <tr><td>Contract of Lease (From)</td><td>${leaseFrom}</td></tr>
                    <tr><td>Contract of Lease (To)</td><td>${leaseTo}</td></tr>
                `;
            }

            // For government or company owned properties
            let additionalPropertyInfo = "";
            if (governmentProperty === 'yes') {
                additionalPropertyInfo = `<tr><td>Government Owned Property</td><td>Yes (Affidavit of Undertaking)</td></tr>`;
            }
            if (companyOwnedProperty === 'yes') {
                const surname = document.getElementById('surname').value || "Not Provided";
                const givenName = document.getElementById('given-name').value || "Not Provided";
                const middleName = document.getElementById('middle-name').value || "Not Provided";
                const suffix = document.getElementById('suffix').value || "Not Provided";
                
                additionalPropertyInfo += `
                    <tr><td>Company Owned Property</td><td>Yes</td></tr>
                    <tr><td>Owner/Representative</td><td>${surname} ${givenName} ${middleName} ${suffix}</td></tr>
                `;
            }

            // Business Activity Section
            const tci = document.getElementById('tci').value || "Not Provided";
            const taxIncentive = document.querySelector('input[name="uploadChoice"]:checked')?.value || "Not Provided";
            let fileUpload = "Not Provided";
            if (taxIncentive === 'yes') {
                fileUpload = document.getElementById('fileUpload').value.split('\\').pop() || "Not Provided";
            }
            const officeLocation = document.querySelector('input[name="office-location"]:checked')?.value || "Not Provided";
            const lineOfBusiness = document.getElementById('line-business').value || "Not Provided";
            const productsServices = document.getElementById('products-services').value || "Not Provided";

            // Equipment Fields (if applicable)
            let equipmentInfo = "";
            const equipmentGroups = document.querySelectorAll('#dynamic-field-group .row');
            equipmentGroups.forEach((group, index) => {
                const noOfUnits = group.querySelector('[name="no-of-units"]').value || "Not Provided";
                const description = group.querySelector('[name="description"]').value || "Not Provided";
                const size = group.querySelector('[name="size"]').value || "Not Provided";
                equipmentInfo += `
                    <tr><td>Equipment ${index + 1}:</td></tr>
                    <tr><td>&nbsp;&nbsp;No. of Units:</td><td>${noOfUnits}</td></tr>
                    <tr><td>&nbsp;&nbsp;Description:</td><td>${description}</td></tr>
                    <tr><td>&nbsp;&nbsp;Size:</td><td>${size}</td></tr>
                `;
            });

            // Description of Business
            const businessDescription = document.getElementById('descriptions').value || "Not Provided";

            // Create the summary table rows
            const businessSummaryTable = document.getElementById('business-summary-table');
            businessSummaryTable.innerHTML = `
                <!-- Business Operation Section -->
                <tr><th colspan="2">Business Operation</th></tr>
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
                <tr><td>Transfer Certificate of Title</td><td>${tct}</td></tr>
                <tr><td>Registered Owner</td><td>${ownerRegistered === 'yes' ? "Yes" : "No"}</td></tr>
                ${ownerInfo}
                ${additionalPropertyInfo}

                <!-- Business Activity Section -->
                <tr><th colspan="2">Business Activity</th></tr>
                <tr><td>Total Capital Investment (TCI)</td><td>${tci}</td></tr>
                <tr><td>Tax Incentives from Government Entity</td><td>${taxIncentive}</td></tr>
                ${taxIncentive === 'yes' ? `<tr><td>Uploaded File:</td><td>${fileUpload}</td></tr>` : ""}
                <tr><td>Office Location</td><td>${officeLocation}</td></tr>
                <tr><td>Line of Business</td><td>${lineOfBusiness}</td></tr>
                <tr><td>Products/Services</td><td>${productsServices}</td></tr>
                ${equipmentInfo}
                <tr><td>Description of Business</td><td>${businessDescription}</td></tr>
            `;
        }

        // Attach 'oninput' event listeners to all form inputs and radio buttons
        document.querySelectorAll('#business-operation input').forEach(input => {
            input.addEventListener('input', updateBusinessOperationSummary);
        });
        document.querySelectorAll('#business-operation input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', updateBusinessOperationSummary);
        });
        document.querySelectorAll('#business-activity input, #business-activity select').forEach(input => {
            input.addEventListener('input', updateBusinessOperationSummary);
        });
        document.querySelectorAll('#business-activity input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', updateBusinessOperationSummary);
        });

        //Business operation & activity summary ends here


        // Summarizr the input for Business Information
        // Function to update the summary table in real-time
        function updateSummary() {
        // Get form input values
        const businessType = document.querySelector('input[name="choice4"]:checked')?.nextElementSibling.innerText || "Not Selected";
        const dtiSecCda = document.getElementById('dti-sec-cda').value || "Not Provided";
        const tin = document.getElementById('tin').value || "Not Provided";
        const sss = document.getElementById('sss').value || "Not Provided";
        const businessName = document.getElementById('business-name').value || "Not Provided";
        const tradeName = document.getElementById('trade-name').value || "Not Provided";
        const house = document.getElementById('house').value || "Not Provided";
        const buildingName = document.getElementById('building-name').value || "Not Provided";
        const blockNo = document.getElementById('block-no').value  || "Not Provided";
        const subdivision = document.getElementById('subdivision').value || "Not Provided";
        const province = document.getElementById('province').value || "Not Provided";
        const city = document.getElementById('city').value || "Not Provided";
        const barangay = document.getElementById('barangay').value || "Not Provided";
        const zipCode = document.getElementById('zip-code').value || "Not Provided";
        const district = document.getElementById('district').value || "Not Provided";
        const telephone = document.getElementById('telephone').value || "Not Provided";
        const email = document.getElementById('email').value || "Not Provided";
        const mobile = document.getElementById('mobile').value || "Not Provided";
        const surname = document.getElementById('surname').value || "Not Provided";
        const givenName = document.getElementById('given-name').value || "Not Provided";
        const middleName = document.getElementById('middle-name').value || "Not Provided";
        const suffix = document.getElementById('suffix').value || "Not Provided";
        const sex = document.getElementById('sex').value || "Not Provided";

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

    function toggleInternetServiceFields(show) {
        document.getElementById('internet-service-options').style.display = show ? 'flex' : 'none';
    }

    function toggleTaxExemptionFields(show) {
        document.getElementById('tax-exemption-options').style.display = show ? 'flex' : 'none';
    }

    function toggleBMBEField(show) {
        document.getElementById('bmbe-field').style.display = show ? 'flex' : 'none';
    }

    
    function toggleCedulaField(show) {
        document.getElementById('cedula-field').style.display = show ? 'flex' : 'none';
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
        const description = document.getElementById('description').value;
        const sizeSelect = document.getElementById('size');
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
        const lineBusiness = document.getElementById('line-business').value;
        const productsServices = document.getElementById('products-services');

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
        if (isOwner) {
            extraInfo.style.display = 'none'; // Hide the extra information if "Yes" is selected
        } else {
            extraInfo.style.display = 'block'; // Show the extra information if "No" is selected
        }
    }

    function toggleInfo4(isOwner) {
        const hiddenInfo4 = document.getElementById('hidden-info4');
        if (isOwner) {
            hiddenInfo4.style.display = 'none'; // Hide the extra information if "Yes" is selected
        } else {
            hiddenInfo4.style.display = 'block'; // Show the extra information if "No" is selected
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
            document.getElementById('new-house').value = document.getElementById('house').value;
            document.getElementById('new-building-name').value = document.getElementById('building-name').value;
            document.getElementById('new-block-no').value = document.getElementById('block-no').value;
            document.getElementById('new-subdivision').value = document.getElementById('subdivision').value;
            document.getElementById('new-province').value = document.getElementById('province').value;
            document.getElementById('new-city').value = document.getElementById('city').value;
            document.getElementById('new-barangay').value = document.getElementById('barangay').value;
            document.getElementById('new-zip-code').value = document.getElementById('zip-code').value;
            document.getElementById('new-district').value = document.getElementById('district').value;
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
        const house = document.getElementById('house').value;
        const buildingName = document.getElementById('building-name').value;
        const blockNo = document.getElementById('block-no').value;
        const subdivision = document.getElementById('subdivision').value;
        const province = document.getElementById('province').value;
        const city = document.getElementById('city').value;
        const barangay = document.getElementById('barangay').value;
        const zipCode = document.getElementById('zip-code').value;
        const district = document.getElementById('district').value;

    // Concatenate all fields into one address with spaces instead of commas
    let fullAddress = `${house ? house + ' ' : ''}${buildingName ? buildingName + ' ' : ''}${blockNo ? blockNo + ' ' : ''}`;
    fullAddress += `${subdivision ? subdivision + ' ' : ''}${barangay ? barangay + ' ' : ''}`;  // Removed 'Barangay' prefix
    fullAddress += `${province ? province + ' ' : ''}${city ? city + ' ' : ''}`;

        
        // Display in preview section
        document.getElementById('address-preview').textContent = fullAddress.trim() !== '' ? fullAddress : 'Complete address will appear here...';
    }

    // Get the elements
    const businessNameInput = document.getElementById('business-name');
    const tradeNameInput = document.getElementById('trade-name');
    const sameAsBusinessCheckbox = document.getElementById('same-as-business');

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
                        "#required-information", 
                        "#summary-page", 
                        "#sum-bus-op", 
                        "#sum-ot-req"];
      
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


      </script>


</body>
</html>