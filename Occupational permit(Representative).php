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
      <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
      <link rel="stylesheet" href="bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap.min.js">
      <link rel="stylesheet" href="Footer.Clean.icons.css">
        <link rel="stylesheet" href="footer.css">
      <link rel="stylesheet" href="pwd app.css">
      <link rel="icon" type="img/png" href="logo.png">
      <title>Occupational Permit Application (Representative)</title>


      <style>

        #sig-canvas {
			border: 2px solid #CCCCCC;
			border-radius: 5px;
			cursor: crosshair;     
		}
		#sig-dataUrl {
			width: 100%;
		}
      </style>


    </head>
    <body>
     

      <br>

    <main class="p-4 mx-auto" style="width: 70%; height: auto; background-color: rgb(227, 249, 255);">
      <div class="container">
        <div class="row">
            <!-- Button to toggle progress sidebar -->
            <button id="progress-button" class="btn btn-primary mb-3 d-md-none">Toggle Progress</button>
    
            <!-- Sidebar -->
            <div id="progress-menu" class="col-md-3 progress-sidebar hidden-xs" style="background-color: rgb(227, 249, 255);">
                <h4 class="text-center">Progress</h4>
                <ul>
                    <li class="progress-item active" data-target="companyDetails">
                        <a href="#">
                            Company/Business Details
                            <i class="bi bi-check-square-fill"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="representativeInfo">
                        <a href="#">
                            Representative Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="additionalRepresentativeInfo">
                        <a href="#">
                             Additional Representative Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="section6">
                        <a href="#">
                            Summary of Information
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                </ul>
            </div>
    
            <!-- Main form -->
                    <div class="col-md-9">
                        <div class="form-section" id="companyDetails">
                        <h4>Company/Business Details</h4>
                        <p class="alert alert-info">
                            A separate application must be filed for each person seeking assistance. This is for Occupational Permit Only.
                        </p>

                        <form>
                            <div class="row mb-4 mx-auto">
                                <div class="col-md-5">
                                    <p>Application type: <strong>Representative</strong></p>
                                </div>
                                <div class="col-md-5">
                                    <p>Application Number:</p>
                                </div>
                            </div>

                            <div class="row mb-3 mx-auto">
                                <div class="col-md-5">
                                    <p>Application Date: <strong><span id="currentDate"></span></strong></p>
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <strong>Check if not Affiliated to a Company</strong>
                                </label>
                            </div>
                            <br>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="businessPermitNo" class="form-label">Business Permit No.</label>
                                    <input type="text" class="form-control" id="representativebusinessPermitNo" placeholder=" Type Business Permit No." >
                                </div>
                                <div class="col-md-4">
                                    <label for="companyName" class="form-label">Company/Business Name</label>
                                    <input type="text" class="form-control" id="representativecompanyName" placeholder="Type Company/Business Name" >
                                </div>
                                <div class="col-md-4">
                                    <label for="companyAddress" class="form-label">Company/Business Address</label>
                                    <input type="text" class="form-control" id="representativecompanyAddress" placeholder="Type Company/Business Address" >
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="form-section" id="representativeInfo" style="display: none;">
                        <form>
                            <h4>Representative Information</h4>
                            <br>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="representativetitle" class="form-label">Title</label>
                                    <select class="form-select" id="title" >
                                        <option value="" disabled selected></option>
                                        <option value="mr">Mr.</option>
                                        <option value="ms">Ms.</option>
                                        <option value="mrs">Mrs.</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="representativefirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="representativefirstName" placeholder="First Name" >
                                </div>
                                <div class="col-md-3">
                                    <label for="representativemiddleName" class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" id="representativemiddleName" placeholder="Middle Name" >
                                </div>
                                <div class="col-md-3">
                                    <label for="representativelastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="representativelastName" placeholder="Last Name" >
                                </div>
                                <div class="col-md-1">
                                    <label for="representativesfx" class="form-label">Suffix</label>
                                    <select class="form-select" id="representativesfx" >
                                        <option value="" disabled selected></option>
                                        <option value="jr">Jr.</option>
                                        <option value="sr">Sr.</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
                                        <option value="V">V</option>
                                        <option value="VI">VI</option>
                                        <option value="VII">VII</option>
                                        <option value="VIII">VIII</option>
                                        <option value="IX">IX</option>
                                        <option value="X">X</option>
                                    </select>
                                </div>
                            </div>
    
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <label for="representativegender" class="form-label">Gender</label>
                                        <select class="form-select" id="representativegender" >
                                            <option value="" disabled selected></option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>  
                                    <div class="col-md-2">
                                        <label for="representativecivil" class="form-label">Civil Status</label>
                                        <select class="form-select" id="representativecivil" >
                                            <option value="" disabled selected></option>
                                            <option value="male">Single</option>
                                            <option value="female">Married</option>
                                            <option value="female">Divorced</option>
                                            <option value="female">Widowed</option>
                                        </select>
                                    </div>  
                                    <div class="col-md-3">
                                        <label for="representativebirthDate" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="representativebirthDate" placeholder="Date of Birth" >
                                    </div>
                                    <div class="col-md-1">
                                        <label for="representativeage" class="form-label">Age</label>
                                        <input type="text" class="form-control" id="representativeage" placeholder="Age"  readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="representativebirthPlace" class="form-label">Place of Birth</label>
                                        <input type="text" class="form-control" id="representativebirthPlace" placeholder="Place of Birth" >
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="representativenationality" class="form-label">Nationality</label>
                                        <select class="form-select" id="representativenationality" >
                                            <option value="" disabled selected></option>
                                            <option value="male">Filipino</option>
                                            <option value="female">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="representativesmID" class="form-label">San Mateo ID No.</label>
                                        <input type="text" class="form-control" id="representativesmID" placeholder="Type San Mateo ID No." >
                                    </div> 
                                    <div class="col-md-4">
                                        <label for="representativephilSys" class="form-label">PhilSys No.</label>
                                        <input type="text" class="form-control" id="representativephilSys" placeholder="Type PhilSys No." >
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="representativetin" class="form-label">TIN</label>
                                        <input type="text" class="form-control" id="representativetin" placeholder="Type TIN no." >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="representativeSSS" class="form-label">SSS No.</label>
                                        <input type="text" class="form-control" id="representativeSSS" placeholder="Type SSS No." >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="representativepagIbig" class="form-label">PAG-IBIG No.</label>
                                        <input type="text" class="form-control" id="representativepagIbig" placeholder="Type PAG-IBIG No." >
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="representativetele" class="form-label">Telephone Number</label>
                                        <input type="tel" class="form-control" id="representativetele" placeholder="(916) 345-6783" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="representativephone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="representativephone" placeholder="(+63) 0923-345-6783" >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="representativeemail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="representativeemail" placeholder="Email" >
                                    </div>
                                </div>
                        </form>
                    </div>

                    <div class="form-section" id="additionalRepresentativeInfo" style="display: none;">
                        <h4>Representative Information</h4>
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-4 ">
                                    <label for="representativehouseNo"><span style="color: red;">*</span> House #</label>
                                    <input type="text" class="form-control" id="representativehouseNo" placeholder="House #" >
                                </div>
                                <div class="col-md-4">
                                    <label for="representativestreet"><span style="color: red;">*</span> Street</label>
                                    <input type="text" class="form-control" id="representativestreet" placeholder="Street" >
                                </div>
                                <div class="col-md-4 ">
                                    <label for="representativesbd">Subdivison or Village</label>
                                    <input type="text" class="form-control" id="representativesbd/vilg" placeholder="Subdivision or Village">
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="representativebarangay-dropdown"><span style="color: red;">*</span> Barangay</label>
                                    <select class="form-select" id="representativebarangay-dropdown" name="barangay-dropdown" >
                                        <option value="" selected>Select a barangay</option>
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
                                <div class="col-md-4 ">
                                    <label for="representativesbd">Province</label>
                                    <input type="text" class="form-control" id="representativesbd/vilg" placeholder="Subdivision or Village">
                                </div>
                                <div class="col-md-2 ">
                                    <label for="representativedistrict"><span style="color: red;">*</span> District</label>
                                    <input type="text" class="form-control" id="representativedistrict"  placeholder="District" >
                                </div>
                                <div class="col-md-2 ">
                                    <label for="representativezip"><span style="color: red;">*</span> Zip Code</label>
                                    <input type="text" class="form-control" id="representativezip" placeholder="Zip Code" >
                                </div>
                            </div>         
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="authorizationForm" class="form-label">Authorization Form *</label>
                                    <input type="file" class="form-control" id="authorizationForm">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="signatoryID" class="form-label">Valid ID of Signatory</label>
                                    <input type="file" class="form-control" id="signatoryID">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="representativeID" class="form-label">Valid ID of Authorized Representative</label>
                                    <input type="file" class="form-control" id="representativeID">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="representativeCompanyID" class="form-label">Valid Company ID</label>
                                    <input type="file" class="form-control" id="representativeCompanyID">
                                </div>
                            </div>
                            <div class="col-lg-offset-0 col-lg-12 col-xs-12"> 
                                <i class="bi bi-info-circle-fill"></i>       
                                *Note:  File type should be JPG, JPEG, or PNG and 7MB maximum file size.
                            </div>
                        </form>
                    </div>

                <!-- User Summary Section -->
                <div class="form-section" id="section6" style="display: none;">
                    <h4>User Summary</h4>
                    <form>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Company/Business Details -->
                                <tr>
                                    <td><strong>Business Permit No.:</strong></td>
                                    <td id="summaryBusinessPermitNo"></td>
                                </tr>
                                <tr>
                                    <td><strong>Company Name:</strong></td>
                                    <td id="summaryCompanyName"></td>
                                </tr>
                                <tr>
                                    <td><strong>Company Address:</strong></td>
                                    <td id="summaryCompanyAddress"></td>
                                </tr>
                
                                <!-- Representative Information -->
                                <tr>
                                    <td><strong>Title:</strong></td>
                                    <td id="summaryTitle"></td>
                                </tr>
                                <tr>
                                    <td><strong>Name:</strong></td>
                                    <td id="summaryFullName"></td>
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
                                    <td id="summaryBirthDate"></td>
                                </tr>
                                <tr>
                                    <td><strong>Age:</strong></td>
                                    <td id="summaryAge"></td>
                                </tr>
                                <tr>
                                    <td><strong>Place of Birth:</strong></td>
                                    <td id="summaryBirthPlace"></td>
                                </tr>
                                <tr>
                                    <td><strong>Nationality:</strong></td>
                                    <td id="summaryNationality"></td>
                                </tr>
                
                                <!-- Additional Representative Information -->
                                <tr>
                                    <td><strong>House #:</strong></td>
                                    <td id="summaryHouseNo"></td>
                                </tr>
                                <tr>
                                    <td><strong>Street:</strong></td>
                                    <td id="summaryStreet"></td>
                                </tr>
                                <tr>
                                    <td><strong>Subdivision/Village:</strong></td>
                                    <td id="summarySubdivision"></td>
                                </tr>
                                <tr>
                                    <td><strong>Barangay:</strong></td>
                                    <td id="summaryBarangay"></td>
                                </tr>
                                <tr>
                                    <td><strong>District:</strong></td>
                                    <td id="summaryDistrict"></td>
                                </tr>
                                <tr>
                                    <td><strong>Zip Code:</strong></td>
                                    <td id="summaryZip"></td>
                                </tr>
                
                                <!-- Document Uploads -->
                                <tr>
                                    <td><strong>Authorization Form:</strong></td>
                                    <td id="summaryAuthorizationForm"></td>
                                </tr>
                                <tr>
                                    <td><strong>Signatory ID:</strong></td>
                                    <td id="summarySignatoryID"></td>
                                </tr>
                                <tr>
                                    <td><strong>Representative ID:</strong></td>
                                    <td id="summaryRepresentativeID"></td>
                                </tr>
                                <tr>
                                    <td><strong>Company ID:</strong></td>
                                    <td id="summaryCompanyID"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
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
    
        // Function to populate user summary
            function populateSummary() {
    // Company/Business Details
    const businessPermitNo = document.getElementById('representativebusinessPermitNo').value || 'Not Provided';
    const companyName = document.getElementById('representativecompanyName').value || 'Not Provided';
    const companyAddress = document.getElementById('representativecompanyAddress').value || 'Not Provided';

    document.getElementById('summaryBusinessPermitNo').innerText = businessPermitNo;
    document.getElementById('summaryCompanyName').innerText = companyName;
    document.getElementById('summaryCompanyAddress').innerText = companyAddress;

    // Representative Information
    const title = document.getElementById('title').value || 'Not Provided';
    const firstName = document.getElementById('representativefirstName').value || 'Not Provided';
    const middleName = document.getElementById('representativemiddleName').value || '';
    const lastName = document.getElementById('representativelastName').value || 'Not Provided';
    const fullName = `${title} ${firstName} ${middleName} ${lastName}`.trim();
    const gender = document.getElementById('representativegender').value || 'Not Provided';
    const civilStatus = document.getElementById('representativecivil').value || 'Not Provided';
    const birthDate = document.getElementById('representativebirthDate').value || 'Not Provided';
    const age = document.getElementById('representativeage').value || 'Not Provided';
    const birthPlace = document.getElementById('representativebirthPlace').value || 'Not Provided';
    const nationality = document.getElementById('representativenationality').value || 'Not Provided';

    document.getElementById('summaryTitle').innerText = title;
    document.getElementById('summaryFullName').innerText = fullName;
    document.getElementById('summaryGender').innerText = gender;
    document.getElementById('summaryCivilStatus').innerText = civilStatus;
    document.getElementById('summaryBirthDate').innerText = birthDate;
    document.getElementById('summaryAge').innerText = age;
    document.getElementById('summaryBirthPlace').innerText = birthPlace;
    document.getElementById('summaryNationality').innerText = nationality;

    // Additional Representative Information
    const houseNo = document.getElementById('representativehouseNo').value || 'Not Provided';
    const street = document.getElementById('representativestreet').value || 'Not Provided';
    const subdivision = document.getElementById('representativesbd/vilg').value || 'Not Provided';
    const barangay = document.getElementById('representativebarangay-dropdown').value || 'Not Provided';
    const district = document.getElementById('representativedistrict').value || 'Not Provided';
    const zip = document.getElementById('representativezip').value || 'Not Provided';

    document.getElementById('summaryHouseNo').innerText = houseNo;
    document.getElementById('summaryStreet').innerText = street;
    document.getElementById('summarySubdivision').innerText = subdivision;
    document.getElementById('summaryBarangay').innerText = barangay;
    document.getElementById('summaryDistrict').innerText = district;
    document.getElementById('summaryZip').innerText = zip;

    // Document Uploads (Check for file upload presence)
    const authorizationForm = document.getElementById('authorizationForm').files.length ? 'Uploaded' : 'Not Uploaded';
    const signatoryID = document.getElementById('signatoryID').files.length ? 'Uploaded' : 'Not Uploaded';
    const representativeID = document.getElementById('representativeID').files.length ? 'Uploaded' : 'Not Uploaded';
    const companyID = document.getElementById('representativeCompanyID').files.length ? 'Uploaded' : 'Not Uploaded';

    document.getElementById('summaryAuthorizationForm').innerText = authorizationForm;
    document.getElementById('summarySignatoryID').innerText = signatoryID;
    document.getElementById('summaryRepresentativeID').innerText = representativeID;
    document.getElementById('summaryCompanyID').innerText = companyID;
}


        // Navigation button logic
// Array of section IDs in the form
let currentSection = 0;
const sections = [
    "#companyDetails",
    "#representativeInfo",
    "#additionalRepresentativeInfo",
    "#section6"
];

// Hide all sections except the first one
$(sections.slice(1).join(', ')).hide();

// Initialize button state
updateButtons();
updateProgress();

// Function to handle "Previous" button click
$("#prev-btn").click(function() {
    if (currentSection > 0) {
        $(sections[currentSection]).hide(); // Hide current section
        currentSection--; // Decrement section index
        $(sections[currentSection]).show(); // Show previous section
        updateIcon(currentSection + 1, "empty"); // Update progress icon
        updateButtons(); // Update buttons' visibility and text
        updateProgress(); // Update progress bar
    }
});



$("#next-btn").click(function() {
    const currentForm = $(sections[currentSection]).find('form')[0];
    if (currentForm && !currentForm.checkValidity()) {
        currentForm.reportValidity(); // Trigger form validation
        return;
    }

    if (currentSection < sections.length - 1) {
        $(sections[currentSection]).hide(); // Hide current section
        updateIcon(currentSection, "fill"); // Update progress icon for the current section

        currentSection++; // Increment section index

        // Show next section
        $(sections[currentSection]).show(); 
        updateButtons(); // Update buttons' visibility and text
        updateProgress(); // Update progress bar to reflect the new current section

        // If the current section is the Summary section, populate the summary
        if (currentSection === sections.length - 1) {
            populateSummary(); // Populate the summary
        }
    } else {
        // On the last section, redirect to the new page
        window.location.href = 'Occupational Permit Application (Representative) For Applicant.html'; // Redirect to the desired page
    }
});

// Update button appearance and text based on the current section
function updateButtons() {
    $("#prev-btn").toggle(currentSection > 0);
    
    if (currentSection === sections.length - 1) {
        $("#next-btn").text("Go To Applicant Form")
                      .removeClass("btn-primary") // Remove "Next" button style
                      .addClass("btn-success")    // Add "Submit" button style
                      .attr("href", "Occupational Permit Application (Representative) For Applicant.html"); // Add href for the last section
    } else {
        $("#next-btn").text("Next")
                      .removeClass("btn-success")  // Remove "Submit" button style
                      .addClass("btn-primary")     // Add "Next" button style
                      .removeAttr("href");         // Remove href for non-final sections
    }
}



// Update progress icons based on the current section
function updateIcon(index, state) {
    const icon = $(".progress-item").eq(index).find("i");
    icon.toggleClass("bi-check-square-fill", state === "fill");
    icon.toggleClass("bi-check-square", state === "empty");
}

// Update progress bar to highlight the active section
function updateProgress() {
    $(".progress-item").removeClass("active");
    $(".progress-item").eq(currentSection).addClass("active");
}

// Handle click events on progress bar items
$(".progress-item").click(function() {
    const targetSection = $(this).data('target');
    $(".form-section").hide();
    $("#" + targetSection).show();
    currentSection = sections.indexOf("#" + targetSection);
    updateButtons();
    updateProgress();
});


              // Get the current date
        const today = new Date();
        const date = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
        document.getElementById('currentDate').textContent = date;
    
        // Function to calculate age
        function calculateAge(birthDate) {
            const today = new Date();
            const birthDateObj = new Date(birthDate);
            let age = today.getFullYear() - birthDateObj.getFullYear();
            const monthDifference = today.getMonth() - birthDateObj.getMonth();
    
            // Adjust if birth date hasn't occurred yet this year
            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDateObj.getDate())) {
                age--;
            }
            return age;
        }
    
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));
    
        // Event listener for when the date of birth is picked
        document.getElementById('birthDate').addEventListener('change', function() {
            const birthDate = this.value;
            const age = calculateAge(birthDate);
            document.getElementById('age').value = age;
        });
    
    
        // Drawing functionality for the signature
        (function() {
            // Get a regular interval for drawing to the screen
            window.requestAnimFrame = (function(callback) {
                return window.requestAnimationFrame || 
                    window.webkitRequestAnimationFrame ||
                    window.mozRequestAnimationFrame ||
                    window.oRequestAnimationFrame ||
                    window.msRequestAnimaitonFrame ||
                    function(callback) {
                        window.setTimeout(callback, 1000 / 60);
                    };
            })();
    
            var canvas = document.getElementById("sig-canvas");
            var ctx = canvas.getContext("2d");
            var drawing = false;
            var mousePos = { x: 0, y: 0 };
            var lastPos = mousePos;
    
            var sigText = document.getElementById("sig-dataUrl");
            var sigImage = document.getElementById("displaySignature");
            var clearBtn = document.getElementById("sig-clearBtn");
            var submitBtn = document.getElementById("sig-submitBtn");
    
            clearBtn.addEventListener("click", function() {
                clearCanvas();
                sigImage.setAttribute("src", ""); // Clear the drawn signature
                sigImage.style.display = 'none'; // Hide drawn signature
            });
    
            submitBtn.addEventListener("click", function() {
                var dataUrl = canvas.toDataURL();
                sigText.value = dataUrl;
                sigImage.setAttribute("src", dataUrl); // Set the drawn signature
                sigImage.style.display = 'block'; // Show drawn signature
    
                // Hide the uploaded signature if it exists
                const uploadedSignature = document.getElementById("uploadedSignatureIcon");
                uploadedSignature.style.display = 'none'; // Hide uploaded image
    
                hasDrawnImage = true; // Mark that we have a drawn image
            });
    
            canvas.addEventListener("mousedown", function(e) {
                drawing = true;
                lastPos = getMousePos(canvas, e);
            });
    
            canvas.addEventListener("mouseup", function() {
                drawing = false;
            });
    
            canvas.addEventListener("mousemove", function(e) {
                mousePos = getMousePos(canvas, e);
                renderCanvas();
            });
    
            function getMousePos(canvasDom, mouseEvent) {
                var rect = canvasDom.getBoundingClientRect();
                return {
                    x: mouseEvent.clientX - rect.left,
                    y: mouseEvent.clientY - rect.top
                };
            }
    
            function renderCanvas() {
                if (drawing) {
                    ctx.moveTo(lastPos.x, lastPos.y);
                    ctx.lineTo(mousePos.x, mousePos.y);
                    ctx.stroke();
                    lastPos = mousePos;
                }
            }
    
            function clearCanvas() {
                canvas.width = canvas.width; // Clears the canvas
            }
        })();
    
        // Allow for animation
        (function drawLoop() {
            requestAnimFrame(drawLoop);
            renderCanvas();
        })();
    
        function displayImage(input, imgElementId) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgElement = document.getElementById(imgElementId);
                    imgElement.src = e.target.result;
                    imgElement.style.display = 'block'; // Show uploaded image
    
                    // Hide drawn image if it's visible
                    const drawnImage = document.getElementById("displaySignature");
                    drawnImage.style.display = 'none'; // Hide drawn image
                    hasDrawnImage = false; // Reset drawn image status
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    
        function toggleImageUpload() {
            const checkboxes = [
                document.getElementById('flexCheckYellow'),
                document.getElementById('flexCheckAEP'),
                document.getElementById('flexCheckDPOS'),
                document.getElementById('flexCheckEmbalming'),
                document.getElementById('flexCheckParental'),
                document.getElementById('flexCheckBirth'),
                document.getElementById('flexCheckValidID'),
                document.getElementById('flexCheckWorkingChild')
            ];
    
            const fileInputContainer = document.getElementById('fileInputContainer');
            fileInputContainer.innerHTML = ''; // Clear previous inputs
    
            // Loop through checkboxes and add file inputs for each checked one
            checkboxes.forEach((checkbox, index) => {
                if (checkbox.checked) {
                    const input = document.createElement('input');
                    input.type = 'file';
                    input.className = 'form-control mb-3'; // Add margin for spacing
                    input.required = true;
                    input.id = `idImageUpload${index}`; // Unique ID for each file input
                    fileInputContainer.appendChild(input);
                }
            });
        }
    </script>
</body>
</html>