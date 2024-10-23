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
      <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
      <link rel="stylesheet" href="bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap.min.js">
      <link rel="stylesheet" href="Footer.Clean.icons.css">
      <link rel="stylesheet" href="pwd app.css">
      <link rel="icon" type="img/png" href="logo.png">
      <title>Occupational Permit Application</title>


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

      <br>

    <main class="p-4 mx-auto" style="width: 70%; height: 10%; background-color: rgb(227, 249, 255);">
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
                    <li class="progress-item" data-target="employeedetails">
                        <a href="#">
                            Employee Details
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="moreemployeedetails">
                        <a href="#">
                           More Employee Details
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="mainRequirements">
                        <a href="#">
                            Main Requirements
                            <i class="bi bi-check-square"></i>
                        </a>
                    </li>
                    <li class="progress-item" data-target="additionalRequirement">
                        <a href="#">
                            Additional Requirements
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
                                <p>Application type: <strong>New</strong></p>
                            </div>
                            <div class="col-md-5">
                                <p>Occupational Permit Number:</p>
                            </div>
                        </div>

                        <div class="row mb-3 mx-auto">
                            <div class="col-md-5">
                                <p>Application Date: <strong><span id="currentDate"></span></strong></p>
                            </div>
                            <div class="col-md-5">
                                <p>Application Number:</p>
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
                                <input type="text" class="form-control" id="businessPermitNo" placeholder=" Type Business Permit No." >
                            </div>
                            <div class="col-md-4">
                                <label for="companyName" class="form-label">Company/Business Name</label>
                                <input type="text" class="form-control" id="companyName" placeholder="Type Company/Business Name" >
                            </div>
                            <div class="col-md-4">
                                <label for="companyAddress" class="form-label">Company/Business Address</label>
                                <input type="text" class="form-control" id="companyAddress" placeholder="Type Company/Business Address" >
                            </div>
                        </div>
                    </form>
                </div>
    
                <div class="form-section" id="employeedetails" style="display: none;">
                    <form>
                        <h4>Employee Information</h4>
                        <br>
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <label for="title" class="form-label">Title</label>
                                <select class="form-select" id="title" >
                                    <option value="" disabled selected></option>
                                    <option value="mr">Mr.</option>
                                    <option value="ms">Ms.</option>
                                    <option value="mrs">Mrs.</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" >
                            </div>
                            <div class="col-md-3">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" placeholder="Middle Name" >
                            </div>
                            <div class="col-md-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" >
                            </div>
                            <div class="col-md-1">
                                <label for="sfx" class="form-label">Suffix</label>
                                <select class="form-select" id="sfx" >
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
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" >
                                        <option value="" disabled selected></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>  
                                <div class="col-md-2">
                                    <label for="civil" class="form-label">Civil Status</label>
                                    <select class="form-select" id="civil" >
                                        <option value="" disabled selected></option>
                                        <option value="male">Single</option>
                                        <option value="female">Married</option>
                                        <option value="female">Divorced</option>
                                        <option value="female">Widowed</option>
                                    </select>
                                </div>  
                                <div class="col-md-3">
                                    <label for="birthDate" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="birthDate" placeholder="Date of Birth" >
                                </div>
                                <div class="col-md-1">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="age" placeholder="Age"  readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="birthPlace" class="form-label">Place of Birth</label>
                                    <input type="text" class="form-control" id="birthPlace" placeholder="Place of Birth" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="nationality" class="form-label">Nationality</label>
                                    <select class="form-select" id="nationality" >
                                        <option value="" disabled selected></option>
                                        <option value="male">Filipino</option>
                                        <option value="female">Others</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="smID" class="form-label">San Mateo ID No.</label>
                                    <input type="text" class="form-control" id="smID" placeholder="Type San Mateo ID No." >
                                </div> 
                                <div class="col-md-4">
                                    <label for="philSys" class="form-label">PhilSys No.</label>
                                    <input type="text" class="form-control" id="philSys" placeholder="Type PhilSys No." >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="tin" class="form-label">TIN</label>
                                    <input type="text" class="form-control" id="tin" placeholder="Type TIN no." >
                                </div>
                                <div class="col-md-4">
                                    <label for="SSS" class="form-label">SSS No.</label>
                                    <input type="text" class="form-control" id="SSS" placeholder="Type SSS No." >
                                </div>
                                <div class="col-md-4">
                                    <label for="pagIbig" class="form-label">PAG-IBIG No.</label>
                                    <input type="text" class="form-control" id="pagIbig" placeholder="Type PAG-IBIG No." >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="tele" class="form-label">Telephone Number</label>
                                    <input type="tel" class="form-control" id="tele" placeholder="(916) 345-6783" >
                                </div>
                                <div class="col-md-4">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="(+63) 0923-345-6783" >
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email" >
                                </div>
                            </div>
                    </form>
                </div>

                <div class="form-section" id="moreemployeedetails" style="display: none;">
                    <form>
                        <h4>More Employee Details</h4>
                        <br>
                        <H5>Address Information</H5>
                        <div class="row mb-3">
                            <div class="col-md-4 ">
                                <label for="houseNo"><span style="color: red;">*</span> House #</label>
                                <input type="text" class="form-control" id="houseNo" placeholder="House #" >
                            </div>
                            <div class="col-md-3 ">
                                <label for="street"><span style="color: red;">*</span> Street</label>
                                <input type="text" class="form-control" id="street" placeholder="Street" >
                            </div>
                            <div class="col-md-4 ">
                                <label for="sbd">Subdivison or Village</label>
                                <input type="text" class="form-control" id="sbd/vilg" placeholder="Subdivision or Village">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="barangay-dropdown"><span style="color: red;">*</span> Barangay</label>
                                <select class="form-select" id="barangay-dropdown" name="barangay-dropdown" >
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
                                <label for="sbd">Province</label>
                                <input type="text" class="form-control" id="sbd/vilg" placeholder="Subdivision or Village">
                            </div>
                            <div class="col-md-2 ">
                                <label for="district"><span style="color: red;">*</span> District</label>
                                <input type="text" class="form-control" id="district"  placeholder="District" >
                            </div>
                            <div class="col-md-2 ">
                                <label for="zip"><span style="color: red;">*</span> Zip Code</label>
                                <input type="text" class="form-control" id="zip" placeholder="Zip Code" >
                            </div>
                        </div>
                        <H5>Employment Details</H5>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="companyName" class="form-label">Company/Business Name</label>
                                <input type="text" class="form-control" id="companyName" placeholder="Company/Business Name" >
                            </div>
                            <div class="col-md-4">
                                <label for="placeAssignment" class="form-label">Place Of Assignment</label>
                                <input type="text" class="form-control" id="placeAssignment" placeholder="Place Of Assignment" >
                            </div>
                            <div class="col-md-4">
                                <label for="startDate" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="startDate" placeholder="Start Date" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="industry" class="form-label">Industry Category</label>
                                <select class="form-select" id="industry" >
                                    <option value="" disabled selected></option>
                                    <option value="34">AMUSEMENT (E-BINGO, E-CASINO AND THE LIKES)</option>
                                    <option value="35">ARCHITECTURAL/ENGINEERING SERVICES</option>
                                    <option value="36">AUTOMOTIVE</option>
                                    <option value="37">BANKING AND FINANCE</option>
                                    <option value="38">BEAUTY/PARLOR SHOPS</option>
                                    <option value="39">BUILDING MAINTENANCE SERVICES</option>
                                    <option value="40">BUSINESS PROCESS OUTSOURCING</option>
                                    <option value="41">CAR DEALERS/EXCHANGE</option>
                                    <option value="42">COMMERCIAL ESTABLISHMENTS (INCLUDING MALLS)</option>
                                    <option value="43">COMMERCIAL STORES (RETAIL/WHOLESALE TRADING)</option>
                                    <option value="44">COMMERCIAL STORES INSIDE MALLS (RETAIL/WHOLESALE/SUPERMARKET TRADING)</option>
                                    <option value="45">COMMISSARIES</option>
                                    <option value="46">DELIVERY/COURIER SERVICES</option>
                                    <option value="47">EATING ESTABLISHMENTS</option>
                                    <option value="48">EDUCATIONAL / LEARNING INSTITUTIONS</option>
                                    <option value="49">ENTERTAINMENT (MOVIE, TELEVISION, MUSIC & THEATER)</option>
                                    <option value="50">FACTORIES/WAREHOUSES</option>
                                    <option value="51">GAS STATIONS</option>
                                    <option value="52">GROCERY/CONVENIENCE STORES/SUPERMARKETS OUTSIDE MALL</option>
                                    <option value="53">HEALTH/MEDICAL CARE SERVICES (INCLUDING HOSPITALS)</option>
                                    <option value="54">HOTELS/CONDOMINIUMS/PLACE OF DWELLING</option>
                                    <option value="55">INFORMATION TECHNOLOGY</option>
                                    <option value="56">INSURANCE AGENCIES</option>
                                    <option value="57">JANITORIAL/MESSENGERIAL SERVICES</option>
                                    <option value="58">LAW FIRMS</option>
                                    <option value="59">MASSAGE CLINICS/HEALTH CLUBS</option>
                                    <option value="60">NIGHT CLUBS/BARS</option>
                                    <option value="61">OFFICE BASED OCCUPATION</option>
                                    <option value="62">OTHER COMMERCIAL SERVICES</option>
                                    <option value="63">OTHER INDEPENDENT CONTRACTORS</option>
                                    <option value="64">PRIVATE CONTRACTORS</option>
                                    <option value="65">PUBLIC MARKETS</option>
                                    <option value="66">SECURITY AGENCIES</option>
                                    <option value="67">SPORTS/RECREATIONAL</option>
                                    <option value="68">SUPERMARKETS/INSIDE MALLS</option>
                                    <option value="69">TRADING OF CHEMICALS</option>
                                    <option value="70">TRANSPORTATION</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="occupation" class="form-label">Occupation</label>
                                <select class="form-select" id="occupation" >
                                    <option value="" disabled selected></option>   
                                    <option value="1">ACCOUNTANT</option>
                                    <option value="102">ACTOR</option>
                                    <option value="103">ACTRESS</option>
                                    <option value="224">ANIMAL TRAINER</option>
                                    <option value="104">ASSISTANT DIRECTOR</option>
                                    <option value="225">AUCTIONEER</option>
                                    <option value="105">AUDIO MAN</option>
                                    <option value="106">AUDIO VIDEO SPECIALIST</option>
                                    <option value="45">BAGGER</option>
                                    <option value="107">BAND/COMBO LEADER</option>
                                    <option value="196">BAR MANAGER</option>
                                    <option value="16">BARBER</option>
                                    <option value="79">BARTENDER</option>
                                    <option value="17">BEAUTICIAN</option>
                                    <option value="159">BELLBOY</option>
                                    <option value="226">BONDSMAN</option>
                                    <option value="227">BONDSWOMAN</option>
                                    <option value="198">BOUNCER</option>
                                    <option value="252">BOXING PROMOTER/SPONSOR</option>
                                    <option value="32">BPO EMPLOYEE</option>
                                    <option value="72">BUTCHER</option>
                                    <option value="109">CAMERA MAN</option>
                                    <option value="7">CARWASH BOY</option>
                                    <option value="1">CASHIER</option>
                                    <option value="161">CHAMBERMAID</option>
                                    <option value="81">CHEF</option>
                                    <option value="110">CLUB SINGER</option>
                                    <option value="162">CONSIGNOR</option>
                                    <option value="111">CONTENT MODERATOR</option>
                                    <option value="73">COOK</option>
                                    <option value="112">DANCE/MUSIC INSTRUCTOR</option>
                                    <option value="47">DELIVERY CREW</option>
                                    <option value="9">DETAILMAN</option>
                                    <option value="113">DIGITAL CONTENT WRITER</option>
                                    <option value="83">DISHWASHER</option>
                                    <option value="114">DISK JOCKEY</option>
                                    <option value="229">DRIVING INSTRUCTOR</option>
                                    <option value="115">EDITOR</option>
                                    <option value="26">ELECTRICIAN</option>
                                    <option value="231">EMBALMER</option>
                                    <option value="232">EVENTS ORGANIZER</option>
                                    <option value="273">FLIGHT ATTENDANT</option>
                                    <option value="201">FLOOR MANAGER</option>
                                    <option value="84">FOOD HANDLER</option>
                                    <option value="233">FORENSIC EXPERT</option>
                                    <option value="234">FORTUNE TELLER</option>
                                    <option value="254">GOLF CADDIE</option>
                                    <option value="164">GUEST RELATIONS OFFICER</option>
                                    <option value="19">HAIR STYLIST</option>
                                    <option value="235">HANDWRITING EXPERT</option>
                                    <option value="203">HOSPITALITY GIRLS/HOSTESS</option>
                                    <option value="236">HOUSE PAINTER</option>
                                    <option value="165">HOUSEKEEPER</option>
                                    <option value="35">INSURANCE ADJUSTER</option>
                                    <option value="36">INSURANCE AGENT</option>
                                    <option value="27">JANITOR</option>
                                    <option value="28">JANITRESS</option>
                                    <option value="87">KITCHEN CREW</option>
                                    <option value="237">LIFEGUARD</option>
                                    <option value="88">LINE COOK</option>
                                    <option value="20">MAKE-UP ARTIST</option>
                                    <option value="132">MANAGERIAL</option>
                                    <option value="21">MANICURIST</option>
                                    <option value="256">MARTIAL ARTS INSTRUCTOR</option>
                                    <option value="193">MASSEUR-ATTENDANT</option>
                                    <option value="133">MASTER CUTTER</option>
                                    <option value="10">MECHANIC</option>
                                    <option value="48">MERCHANDISER</option>
                                    <option value="207">MODEL</option>
                                    <option value="118">MOVIE/TV/STAGE DIRECTOR</option>
                                    <option value="119">MOVIE/TV/VIDEO OUTFIT PRODUCTION CREW</option>
                                    <option value="22">NAIL TECHNICIAN</option>
                                    <option value="5">OFFICE BASE</option>
                                    <option value="2">OTHERS</option>
                                    <option value="90">PANTRY CREW</option>
                                    <option value="121">PHOTOGRAPHER</option>
                                    <option value="31">PLUMBER</option>
                                    <option value="50">PORTER</option>
                                    <option value="122">PRODUCER</option>
                                    <option value="258">PROFESSIONAL SPORTS PLAYERS</option>
                                    <option value="51">PROMO GIRL</option>
                                    <option value="52">PROMODISER</option>
                                    <option value="123">RADIO TECHNICIAN</option>
                                    <option value="3">RECEPTIONIST</option>
                                    <option value="40">SALES AGENT</option>
                                    <option value="55">SALES ASSOCIATE</option>
                                    <option value="12">SALES CLERK</option>
                                    <option value="57">SALES COORDINATOR</option>
                                    <option value="58">SALES MAN</option>
                                    <option value="251">SECURITY GUARD</option>
                                    <option value="92">SERVICE COUNTER CREW</option>
                                    <option value="174">SERVICE PROVIDER</option>
                                    <option value="259">SHOW PROMOTER/SPONSOR</option>
                                    <option value="124">SINGER</option>
                                    <option value="125">STAGE PERFORMER</option>
                                    <option value="126">STUNT MAN</option>
                                    <option value="213">TAXI DANCER</option>
                                    <option value="13">TECHNICIAN</option>
                                    <option value="244">TOURIST-GUIDE</option>
                                    <option value="93">USHER</option>
                                    <option value="94">USHERETTE</option>
                                    <option value="127">VIDEO EDITOR</option>
                                    <option value="95">WAITER</option>
                                    <option value="96">WAITRESS</option>
                                    <option value="245">WATCHMAN</option>
                                    <option value="128">WRITER</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="jobPosition" class="form-label">Job Position</label>
                                <input type="text" class="form-control" id="jobPosition" placeholder="Job Position" >
                            </div>
                        </div>
                    </form>
                </div>


                <div class="form-section" id="mainRequirements" style="display: none;">
                    <form>
                        <h4>Main Requirements</h4>
                        <div class="row mb-3">      
                            <div class="col-md-4">
                                <label for="nbi/police" class="form-label">NBA/Police Clearance No.</label>
                                <input type="text" class="form-control" id="nbi/police" placeholder="NBI/Police Clearance No." >
                            </div>
                            <div class="col-md-4">
                                <label for="dateClearance" class="form-label">Date of Clearance</label>
                                <input type="date" class="form-control" id="dateClearance" placeholder="Date of Clearance" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="mb-3">
                                <label for="nbiImageUpload" class="form-label">Upload NBI/Police Clearance</label>
                                <input type="file" class="form-control" id="nbiImageUpload" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="idImageUpload" class="form-label">Applicant Photo</label>
                                <i class="bi bi-info-circle-fill" 
                                data-bs-toggle="popover" 
                                data-bs-trigger="hover" 
                                data-bs-placement="bottom" 
                                data-bs-html="true"
                                data-bs-content="
                                    <strong>Your photo must:</strong><br><br>
                                    • Be of your face, inclusive of the top of your head to your shoulders.<br>
                                    • Look directly into the camera at a straight angle, face-centered.<br>
                                    • Have a white background and good lighting.<br><br>
                                    <strong>Smile:</strong> Neutral<br>
                                    <strong>Eyes:</strong> Visible and open<br>
                                    <strong>Glasses:</strong> Reading glasses allowed; no sun or dark glasses<br>
                                    <strong>Headgear:</strong> None, except for religious reasons">
                                </i>
                                <input type="file" class="form-control" id="idImageUpload"  onchange="displayImage(this, 'photo_upload')">
                            </div>
                            <div class="col-md-3">
                                <label for="signatureUpload" class="form-label">Applicant Signature</label>
                                <i class="bi bi-info-circle-fill" 
                                data-bs-toggle="popover" 
                                data-bs-trigger="hover" 
                                data-bs-placement="bottom" 
                                data-bs-html="true" 
                                data-bs-content="The signature to be uploaded must be in black ink on a white background.">
                                </i>
                                <input type="file" class="form-control" id="signatureUpload" onchange="displayImage(this, 'uploadedSignatureIcon')">
                            </div>
                            
                            <div class="col-md-3" style="padding-top: 30px;">
                                <button type="button" class="btn btn-primary" 
                                data-bs-toggle="modal" 
                                data-bs-target="#signatureModal">Add Digital Signature</button>
                            </div>
                            
                            <!-- Modal for Digital Signature -->
                            <div class="modal fade" id="signatureModal" tabindex="-1" aria-labelledby="signatureModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="signatureModalLabel">Add Digital Signature</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <canvas id="sig-canvas" width="465" height="160"></canvas>
                                            <input type="hidden" id="sig-dataUrl" />
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" id="sig-clearBtn">Clear/Redo</button>
                                            <button class="btn btn-primary" id="sig-submitBtn" data-bs-dismiss="modal">Save Signature</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div class="row mb-3">
                            <!-- Photo Applicant Display -->
                            <div class="col-md-6">
                                <div class="text-center mt-4 mb-4">
                                    <img src="uploadImage.jpg" id="photo_upload" class="img-thumbnail mx-auto d-block" alt="Applicant Photo" style="min-height: 150px; max-height: 250px">
                                </div>
                            </div>
                            <!-- Signature Display -->
                            <div class="col-md-6">
                                <div class="text-center mt-5 mb-4">
                                    <img id="uploadedSignatureIcon" src="signatureIcon.png" style="width: 350px; height: 150px; margin-right:  90px;" alt="Uploaded Signature" />
                                    <img id="displaySignature" src="" style="display: none; width: 350px; height: 150px; margin-right:  90px;" alt="Drawn Signature" />
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="col-lg-offset-0 col-lg-12 col-xs-12"> 
                            <i class="bi bi-info-circle-fill"></i>       
                            *Note:  File type should be JPG, JPEG, or PNG and 7MB maximum file size.
                        </div>
                    </form>
                </div>

                <div class="form-section" id="additionalRequirement" style="display: none;">
                    <form>
                        <h4>Additional Information</h4>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckYellow" onchange="toggleImageUpload()">
                            <label class="form-check-yellow" for="flexCheckYellow">
                                Yellow Card (entertainers or therapist)
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckAEP" onchange="toggleImageUpload()">
                            <label class="form-check-AEP" for="flexCheckAEP">
                                A.E.P (Alien Employment Permit for Foreigners) * You may apply for this document in D.O.L.E.
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDPOS" onchange="toggleImageUpload()">
                            <label class="form-check-DPOS" for="flexCheckDPOS">
                                DPOS Clearance (DPOS Department)
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckEmbalming" onchange="toggleImageUpload()">
                            <label class="form-check-Embalming" for="flexCheckEmbalming">
                                Embalming License (Department of Health)
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckParental" onchange="toggleImageUpload()">
                            <label class="form-check-Parental" for="flexCheckParental">
                                Parental Consent (Below 18 yrs old)
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckBirth" onchange="toggleImageUpload()">
                            <label class="form-check-Birth" for="flexCheckBirth">
                                Birth Certificate or Baptismal Certificate (Below 18 yrs old)
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckValidID" onchange="toggleImageUpload()">
                            <label class="form-check-ValidID" for="flexCheckValidID">
                                Valid ID of parent or giving consent (Below 18 yrs old)
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckWorkingChild" onchange="toggleImageUpload()">
                            <label class="form-check-WorkingChild" for="flexCheckWorkingChild">
                                Working Child's Permit (Department of Labor and Employment) (Below 15 yrs old)
                            </label>
                        </div>
                        <br>
                        
                        <div id="fileInputContainer"></div>
                        
                        
                        <br>

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
                                <tr>
                                    <td><strong>TIN:</strong></td>
                                    <td id="summaryTIN"></td>
                                </tr>
                                <tr>
                                    <td><strong>SSS No.:</strong></td>
                                    <td id="summarySSS"></td>
                                </tr>
                                <tr>
                                    <td><strong>PAG-IBIG No.:</strong></td>
                                    <td id="summaryPagIbig"></td>
                                </tr>
                                <tr>
                                    <td><strong>Telephone No.:</strong></td>
                                    <td id="summaryTelephone"></td>
                                </tr>
                                <tr>
                                    <td><strong>Phone No.:</strong></td>
                                    <td id="summaryPhone"></td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong></td>
                                    <td id="summaryEmail"></td>
                                </tr>
                                <tr>
                                    <td><strong>House No.:</strong></td>
                                    <td id="summaryHouseNo"></td>
                                </tr>
                                <tr>
                                    <td><strong>Street:</strong></td>
                                    <td id="summaryStreet"></td>
                                </tr>
                                <tr>
                                    <td><strong>Subdivision:</strong></td>
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
                                    <td id="summaryZipCode"></td>
                                </tr>
                                <tr>
                                    <td><strong>Company Name (Employment):</strong></td>
                                    <td id="summaryCompanyEmployment"></td>
                                </tr>
                                <tr>
                                    <td><strong>Place of Assignment:</strong></td>
                                    <td id="summaryPlaceAssignment"></td>
                                </tr>
                                <tr>
                                    <td><strong>Start Date:</strong></td>
                                    <td id="summaryStartDate"></td>
                                </tr>
                                <tr>
                                    <td><strong>Industry Category:</strong></td>
                                    <td id="summaryIndustryCategory"></td>
                                </tr>
                                <tr>
                                    <td><strong>Job Position:</strong></td>
                                    <td id="summaryJobPosition"></td>
                                </tr>
                                <tr>
                                    <td><strong>Clearance No.:</strong></td>
                                    <td id="summaryClearanceNo"></td>
                                </tr>
                                <tr>
                                    <td><strong>Date of Clearance:</strong></td>
                                    <td id="summaryClearanceDate"></td>
                                </tr>
                                <tr>
                                    <td><strong>Yellow Card:</strong></td>
                                    <td id="summaryYellowCard"></td>
                                </tr>
                                <tr>
                                    <td><strong>AEP (Alien Employment Permit):</strong></td>
                                    <td id="summaryAEP"></td>
                                </tr>
                                <tr>
                                    <td><strong>DPOS Clearance:</strong></td>
                                    <td id="summaryDPOS"></td>
                                </tr>
                                <tr>
                                    <td><strong>Embalming License:</strong></td>
                                    <td id="summaryEmbalmingLicense"></td>
                                </tr>
                                <tr>
                                    <td><strong>Parental Consent:</strong></td>
                                    <td id="summaryParentalConsent"></td>
                                </tr>
                                <tr>
                                    <td><strong>Birth Certificate:</strong></td>
                                    <td id="summaryBirthCertificate"></td>
                                </tr>
                                <tr>
                                    <td><strong>Valid ID of Parent:</strong></td>
                                    <td id="summaryValidIDParent"></td>
                                </tr>
                                <tr>
                                    <td><strong>Working Child's Permit:</strong></td>
                                    <td id="summaryWorkingChildPermit"></td>
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
    
        // Function to populate user summary
        function populateSummary() {
            // Company/Business Details
            const businessPermitNo = document.getElementById('businessPermitNo').value || 'Not Provided';
            const companyName = document.getElementById('companyName').value || 'Not Provided';
            const companyAddress = document.getElementById('companyAddress').value || 'Not Provided';

            document.getElementById('summaryBusinessPermitNo').innerText = businessPermitNo;
            document.getElementById('summaryCompanyName').innerText = companyName;
            document.getElementById('summaryCompanyAddress').innerText = companyAddress;

            // Employee Details
            const title = document.getElementById('title').value || 'Not Provided';
            const firstName = document.getElementById('firstName').value || 'Not Provided';
            const middleName = document.getElementById('middleName').value || '';
            const lastName = document.getElementById('lastName').value || 'Not Provided';
            const gender = document.getElementById('gender').value || 'Not Provided';
            const civilStatus = document.getElementById('civilStatus').value || 'Not Provided';
            const birthDate = document.getElementById('birthDate').value || 'Not Provided';
            const age = document.getElementById('age').value || 'Not Provided';
            const nationality = document.getElementById('nationality').value || 'Not Provided';

            document.getElementById('summaryTitle').innerText = title;
            document.getElementById('summaryFullName').innerText = `${title} ${firstName} ${middleName} ${lastName}`.trim();
            document.getElementById('summaryGender').innerText = gender;
            document.getElementById('summaryCivilStatus').innerText = civilStatus;
            document.getElementById('summaryDob').innerText = birthDate;
            document.getElementById('summaryAge').innerText = age;
            document.getElementById('summaryNationality').innerText = nationality;

            // More Employee Details
            const companyNameEmployment = document.getElementById('companyNameEmployment').value || 'Not Provided';
            const placeAssignment = document.getElementById('placeAssignment').value || 'Not Provided';
            const startDate = document.getElementById('startDate').value || 'Not Provided';
            const jobPosition = document.getElementById('jobPosition').value || 'Not Provided';

            document.getElementById('summaryCompanyEmployment').innerText = companyNameEmployment;
            document.getElementById('summaryPlaceAssignment').innerText = placeAssignment;
            document.getElementById('summaryStartDate').innerText = startDate;
            document.getElementById('summaryJobPosition').innerText = jobPosition;

            // Main Requirements
            const clearanceNo = document.getElementById('clearanceNo').value || 'Not Provided';
            const clearanceDate = document.getElementById('clearanceDate').value || 'Not Provided';

            document.getElementById('summaryClearanceNo').innerText = clearanceNo;
            document.getElementById('summaryClearanceDate').innerText = clearanceDate;

            // Additional Requirements
            const yellowCard = document.getElementById('yellowCard').checked ? 'Yes' : 'No';
            const aep = document.getElementById('aep').checked ? 'Yes' : 'No';
            const dpos = document.getElementById('dpos').checked ? 'Yes' : 'No';
            const embalmingLicense = document.getElementById('embalmingLicense').checked ? 'Yes' : 'No';
            const parentalConsent = document.getElementById('parentalConsent').checked ? 'Yes' : 'No';
            const birthCertificate = document.getElementById('birthCertificate').checked ? 'Yes' : 'No';
            const validIDParent = document.getElementById('validIDParent').checked ? 'Yes' : 'No';
            const workingChildPermit = document.getElementById('workingChildPermit').checked ? 'Yes' : 'No';

            document.getElementById('summaryYellowCard').innerText = yellowCard;
            document.getElementById('summaryAEP').innerText = aep;
            document.getElementById('summaryDPOS').innerText = dpos;
            document.getElementById('summaryEmbalmingLicense').innerText = embalmingLicense;
            document.getElementById('summaryParentalConsent').innerText = parentalConsent;
            document.getElementById('summaryBirthCertificate').innerText = birthCertificate;
            document.getElementById('summaryValidIDParent').innerText = validIDParent;
            document.getElementById('summaryWorkingChildPermit').innerText = workingChildPermit;
        }

        // Navigation button logic
// Array of section IDs in the form
let currentSection = 0;
const sections = [
    "#companyDetails",
    "#employeedetails",
    "#moreemployeedetails",
    "#mainRequirements",
    "#additionalRequirement",
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
        // If the current section is the Summary section (index 5), populate the summary
        if (currentSection === 5) {
            populateSummary(); // Populate the summary when transitioning to section 5
        }

        
    } else {
        // Handle form submission
        alert('Form submitted!');
    }
});




// Update visibility and text of navigation buttons
function updateButtons() {
    $("#prev-btn").toggle(currentSection > 0);
    $("#next-btn").text(currentSection === sections.length - 1 ? "Submit" : "Next");
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