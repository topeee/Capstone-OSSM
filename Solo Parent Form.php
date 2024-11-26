<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solo Parent Application Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jsPDF and html2canvas Libraries -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <style>
    body {
    background-color: #9ae2ff; /* Bootstrap primary blue */
    }
    /* Styles from the 1st page */
    .form-container {
      border: 3px solid black;
      padding: 20px;
      margin: 0px auto;
      max-width: 800px;
      background-color: white; /* Keep form content background white */
    }
    .header-text {
      text-align: center;
      font-weight: bold;
    }
    .photo-box {
      width: 200px;
      height: 200px;
      border: 1px solid black;
      text-align: center;
      vertical-align: middle;
      float: right;
    }
    .photo-box p {
      margin-top: 55px;
      font-size: 20px;
    }
    .field-label {
      font-weight: bold;
      display: inline-block;
      margin-right: 10px;
    }
    .field-line {
      display: inline-block;
      border-bottom: 1px solid black;
      width: 60%;
      height: 20px;
    }
    .section-title {
      font-weight: bold;
      padding-top: 10px;
    }
    .address-contacts-table {
      border: 2px solid black;
      border-collapse: collapse;
    }
    .address-contacts-table td {
      border: 1px solid black;
    }

    /* Styles from the 2nd page */
    .form-box {
      border: 2px solid black;
      padding: 20px;
      max-width: 800px;
      margin: 0 auto;
      background-color: white;
    }
    .form-box1 {
      border: 2px solid black;
      padding: 20px;
      max-width: 800px;
      margin: 0 auto;
      background-color: white;
    }
    .row-border {
      border: 1px solid black;
      padding: 10px;
      margin-bottom: 10px;
    }
    .signature-box, .thumb-box {
      border: 1px solid black;
      height: 100px;
    }
    .thumb-box {
      width: 100px;
    }
    .remarks-box {
      border: 1px solid black;
      height: 50px;
    }
    .table-bordered td, .table-bordered th {
      border: 1px solid black;
      text-align: center;
      vertical-align: middle;
    }
    .table td {
      height: 50px;
    }
    h5 {
      text-align: center;
      margin-top: 20px;
      margin-bottom: 15px;
    }
    .black-bar {
      background-color: black;
      color: white;
      text-align: center;
      font-weight: bold;
      margin-top: 20px;
    }
    .thin-rows td {
    height: 30px; /* Adjust as needed */
    padding: 0px; /* Optional: reduce padding to make it even thinner */
    }
    .button-card {
      position: fixed;
      top: 50%;
      right: 20px;
      width: 250px;
      transform: translateY(-50%);
      padding: 20px;
      border: 2px solid black;
      background-color: white;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .button-card button {
      width: 100%;
      margin-top: 10px;
    }
    @media print {
    .print-two-column {
        display: flex;
        flex-wrap: nowrap;
    }

    .print-two-column .col-md-6 {
        width: 50%;
        padding-left: 40px;
    }

    .print-two-column .form-group {
        margin-bottom: 10px;
    }
    .form-box{
      margin-bottom: 200px;
    }
    @media print {
    .button-card {
        display: none;
    }
}
}



  </style>
</head>
<body>

  <!-- Content from the 1st page -->
  <div class="container form-container">
    <div class="row">
      <div class="col-12 text-center">
        <img src="HeaderSoloParent.png" alt="Republic of the Philippines" style="height: 130px; width: auto;">
        <h4>APPLICATION FORM FOR SOLO PARENT</h4>
      </div>
    </div>

      
  <div class="form-box">
    <div class="row">
      <div class="col-9" style="height: 200px;">
        <div class="mb-3" style="margin: 0px; padding-bottom: 0px;">
          <span class="field-label">DATE OF ATTENDED ORIENTATION/ VENUE:</span>
          <span class="field-line"></span> <br>
          <span class="field-label">DATE FILED:</span> <br>
          <span class="field-line"></span> <br>
          <span class="field-label">CONTROL NO:</span> <br>
          <span class="field-line"></span> <br>
          <span class="field-label">SOLO PARENT CATEGORY:</span> <br>
          <span class="field-line" style="margin: 0px; padding-bottom: 0px;"></span>
        </div>
      </div>

      <div class="col-3">
        <div class="photo-box">
          <br>
          <p>PHOTO 2x2</p>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-12 section-title" style="margin: 0px; padding-top: 0px;">
        PRIMARY INFORMATION:
      </div>
      <div class="col-12" style="height: 240px;">
        <table class="table table-bordered">
          <tbody>
            <div class="form-section" style="border: 1px solid black; padding-right: 15px; padding-left: 15px; margin-top: 20px;">
              <div class="row">
                <!-- First row for Precinct, First, Middle, Last Name -->
                <div class="col-2 precinct-field" style="border: 1px solid black; border-top: none; border-left: none; width: 200px; height: 50px;">
                  <strong>Precinct #: id="summaryPrecinct"</strong>
                </div>
                <div class="col-3 first-field" style="border: 1px solid black; border-top: none; border-right: none; border-left: none; width: 200px; height: 50px;">
                  <strong>First Name:</strong>
                </div>
                <div class="col-3 middle-field" style="border: 1px solid black; border-top: none; border-right: none; width: 200px; height: 50px;">
                  <strong>Middle Name:</strong>
                </div>
                <div class="col-4 last-field" style="border: 1px solid black; border-top: none; border-right: none; width: 200px; height: 50px;">
                  <strong>Last Name:</strong>
                </div>
              </div>
  
              <div class="row mt-3">
                <!-- Second row for Religion, Gender, Birthdate -->
                <div class="col-4 religion-field"><strong>Religion:</strong> <p>________________________________</p></div>
                <div class="col-4 text-center"><strong>Gender:</strong> <br>
                  <input type="radio" name="gender" id="male">
                  <label for="male">Male</label>
                  <input type="radio" name="gender" id="female">
                  <label for="female">Female</label>
                </div>
                <div class="col-4 birth-field"><strong>Birth Date:</strong> <span style="font-size: 0.7em; font-style: italic;">(MONTH/DD/YYYY)</span> <p>________________________________</p></div>
              </div>
  
              <div class="row">
                <!-- Third row for Blood Type, Civil Status, Birthplace -->
                <div class="col-4 blood-field"><strong>Blood Type:</strong> <br> <p>________________________________</p></div>
                <div class="col-4 text-center civil-field">
                  <strong>Civil Status:</strong><br>
                  <input type="radio" name="status" id="Single" value="Single">
                  <label for="Single">Single</label>
                  <input type="radio" name="status" id="Married" value="Married">
                  <label for="Married">Married</label><br>
                  <input type="radio" name="status" id="Widowed" value="Widowed">
                  <label for="Widowed">Widowed</label>
                </div>
                <div class="col-4 place-field"><strong>Birth Place:</strong> <br> <p>________________________________</p></div>
              </div>
            </div>
          </tbody>
        </table>
      </div>
    </div>

    <div class="row">
      <div class="col-12 section-title">
        <strong>ADDRESS & CONTACTS:</strong>
      </div>
      <div class="col-12">
        <table class="table address-contacts-table" style="margin: 0px;">
          <tbody>
            <tr>
              <td colspan="4"><strong>LENGTH OF STAY IN SAN MATEO RIZAL:</strong>
                <br>
                <div class="text-align: center;">
                  (No. of Year/s) <span class="year-field" style=" padding-bottom: 5px; margin: 0 10px;">______________</span>
                  (No. of Month/s) <span class="month-field" style="  padding-bottom: 5px; margin: 0 10px;">______________</span>
                </div>
              </td>
            </tr>
            <tr>
                <td colspan="3">
                    <strong>Current Address:</strong>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div style="width: 20%;" class="lot-field">
                            <p style="border-bottom: 1px solid black; padding-bottom: 45px; margin: 0; text-align: center;" ></p>
                            <strong style="margin-top: 5px;" >LOT#</strong>
                        </div>
                        <div style="width: 20%;" class="blk-field">
                            <p style="border-bottom: 1px solid black; padding-bottom: 45px; margin: 0; text-align: center;"></p>
                            <strong style="margin-top: 5px;">BLK#</strong>
                        </div>
                        <div style="width: 40%;" class="street-field">
                            <p style="border-bottom: 1px solid black; padding-bottom: 45px; margin: 0; text-align: center;"></p>
                            <strong style="margin-top: 5px;" >STREET / SUBDIVISION</strong>
                        </div>
                        <div style="width: 20%;" class="brgy-field">
                            <p style="border-bottom: 1px solid black; padding-bottom: 45px; margin: 0; text-align: center;"></p>
                            <strong style="margin-top: 5px;" >BARANGAY</strong>
                        </div>
                    </div>
                </td>
            </tr>                               
            <tr>
                <td style="vertical-align: top; text-align: left; font-size: 0.8em; padding: 0; height: 60px;" class="land-field">
                    <strong>LANDLINE:</strong>
                </td>
                <td style="vertical-align: top; text-align: left; font-size: 0.8em; padding: 0; height: 60px;" class="mobile1-field">
                    <strong>MOBILE 1:</strong>
                </td>
                <td style="vertical-align: top; text-align: left; font-size: 0.8em; padding: 0; height: 60px;" class="mobile2-field">
                    <strong>MOBILE 2:</strong>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top; text-align: left; font-size: 0.8em; padding: 0; height: 60px;" class="emailed-field">
                    <strong>EMAIL ADDRESS:</strong>
                </td>
                <td style="vertical-align: top; text-align: left; font-size: 0.8em; padding: 0; height: 60px;" class="facebook-field">
                    <strong>FACEBOOK ACCOUNT:</strong>
                </td>
                <td style="vertical-align: top; text-align: left; font-size: 0.8em; padding: 0; height: 60px;" class="twtr-field">
                    <strong>TWITTER ACCOUNT:</strong>
                </td>
            </tr>                                            
        </tbody>
        </table>
      </div>
    </div>
    
    <div class="row">
      <div class="col-12 section-title">
        OTHER INFORMATION:
      </div>
      <div class="col-12">
        <div>
          <div>
            <label>4 P's Member:</label>
            <input type="radio" name="fourPsMember" id="fourPsNo" value="No">
            <label for="fourPsNo">No</label>
            <input type="radio" name="fourPsMember" id="fourPsYes" value="Yes">
            <label for="fourPsYes">Yes</label> 
            <span class="fourPsId-field">ID#: __________________________</span>
          </div>
      </div>
      <div>
        <div>
          <label>PhilHealth Member:</label>
          <input type="radio" name="philHealthMember" id="philHealthNo" value="No">
          <label for="philHealthNo">No</label>
          <input type="radio" name="philHealthMember" id="philHealthYes" value="Yes">
          <label for="philHealthYes">Yes</label> 
          <span class="philHealthId-field">ID#: ___________________________</span>
        </div>
      </div>        
      <br>
      <div>
            <div style="display: flex; gap: 20px;">Membership Category:
              <label for="individual"><input type="radio" name="membershipCategory" id="category_individual" value="Individually Paying"> Individually Paying</label>
              <label for="lifetime"><input type="radio" name="membershipCategory" id="category_lifetime" value="Lifetime"> Lifetime</label>
              <label for="ofw"><input type="radio" name="membershipCategory" id="category_ofw" value="OFW"> OFW</label>
              <label for="category_employed"><input type="radio" name="membershipCategory" id="category_employed" value="Employed">Employed</label>
          </div>
          <!-- Second row aligned with first row -->
          <div style="display: flex; gap: 20px; padding-left: 180px;">
              <label for="category_private"><input type="radio" name="membershipCategory" id="category_private" value="Private"> Private</label>
              <label for="category_government"><input type="radio" name="membershipCategory" id="category_government" value="Government"> Government</label>
              <label for="category_sponsored"><input type="radio" name="membershipCategory" id="category_sponsored" value="Sponsored"> Sponsored</label>
          </div>
          </div>
      </div>
      
      
      <br>
          <div>
              Employed:
              <input type="radio" name="employed" id="no" style="margin-left: 115px;"> No
              <input type="radio" name="employed" id="yes" style="margin-left: 50px;">
              <span>If Yes; kindly give the following information.</span>
              <br><br> 
              <p class="employer-field">Name of Employer: ______________________________________________________</p>
          </div>            
      </div>
    </div>
  

      <!-- Content from the 2nd page -->
      <div class="form-box1">
        <div class="row mb-3 row-border">
          <div class="col-md-12">
            <p style="margin-bottom: 0px; margin-top: 0px;" class="officeAddress-field">Office Address: _____________________________________________________________________ </p>
            <p style="display: inline-block; width: 45%; margin-bottom: 0px; margin-top: 0px;" class="occupation-field">Occupation: _______________________________</p>
            <p style="display: inline-block; width: 45%; margin-bottom: 0px; margin-top: 0px;" class="income-field">Monthly Income: ___________________________</p>
            <p style="display: inline-block; width: 30%; margin-bottom: 0px; margin-top: 0px;" class="tin-field">TIN #: _____________________ </p> 
            <p style="display: inline-block; width: 30%; margin-bottom: 0px; margin-top: 0px;" class="sss-field">SSS #: _____________________</p>
            <p style="display: inline-block; width: 30%; margin-bottom: 0px; margin-top: 0px;" class="gsis-field">GSIS #: _____________________</p>
          </div>
        </div>

        <h6>I. FAMILY INFORMATION</h6>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10%;">Relationship</th>
              <th style="width: 35%;">Full Name<br>
                <h6 style="font-size: 10px; font-style: italic;">(Last Name, First Name, Middle Name)</h6>
              </th>
              <th style="width: 20%;">Birth Date</th>
              <th style="width: 20%;">Civil Status</th>
              <th style="width: 20%;">Educ. Attainment</th>
              <th style="width: 15%;">Occupation</th>
            </tr>
          </thead>
          <tbody class="table table-bordered thin-rows">
          </tbody>
        </table>

        <h6>II. NEEDS/PROBLEMS OF SOLO PARENT</h6>
        <div class="row print-two-column" style="padding-left: 15px; padding-right: 15px;">
          <div class="col-md-6" style="padding-left: 40px;">
            <div class="form-group">
              <input type="checkbox" class="form-check-input" id="leaveBenefits">
              <label for="leaveBenefits" class="form-check-label">LEAVE BENEFITS</label>
            </div>
            <div class="form-group">
              <input type="checkbox" class="form-check-input" id="flexiTime">
              <label for="flexiTime" class="form-check-label">FLEXI-TIME AT WORK</label>
            </div>
            <div class="form-group">
              <input type="checkbox" class="form-check-input" id="medicalCare">
              <label for="medicalCare" class="form-check-label">MEDICAL CARE</label>
            </div>
            <div class="form-group">
              <input type="checkbox" class="form-check-input" id="employment">
              <label for="employment" class="form-check-label">EMPLOYMENT</label>
            </div>
          </div>
        
          <div class="col-md-6" style="padding-left: 10px;">
            <div class="form-group">
              <input type="checkbox" class="form-check-input" id="additionalIncome">
              <label for="additionalIncome" class="form-check-label">ADDITIONAL INCOME</label>
            </div>
            <div class="form-group">
              <input type="checkbox" class="form-check-input" id="housingShelter">
              <label for="housingShelter" class="form-check-label">HOUSING AND SHELTER</label>
            </div>
            <div class="form-group">
              <input type="checkbox" class="form-check-input" id="educationChildren">
              <label for="educationChildren" class="form-check-label">EDUCATION OF CHILDREN/CHILD</label>
            </div>
            <div class="form-group">
              <input type="checkbox" class="form-check-input" id="others">
              <label for="others" class="form-check-label">OTHERS:_________________</label>
              <span style="text-decoration: underline; margin-left: 10px; width: 100px; display: inline-block;"></span>
            </div>
          </div>
        </div>
        <div>        
        
          <div class="row mt-2" style="padding-left: 15px;">
            <div class="col-md-12">
              <strong>REMARKS:</strong> 
              ___________________________________________________________________________________
              ________________________________________________________________________________________________
            </div>
          </div>
        </div>
        


        <h6 style="margin-top: 20px; margin-bottom: 15px;">III. SOURCE/S OF INCOME</h6>
        <table style="width: 100%; border-spacing: 0; border-collapse: collapse;">
          <tr>
            <td style="padding: 0;">
              <label for="employed" style="display: inline-block; padding-left: 25px;">
                <input type="radio" name="familyResource" id="employed" value="Employeds" style="margin-right: 10px; vertical-align: middle;">
                EMPLOYED
              </label>
            </td>
          </tr>
          <tr>
            <td style="padding: 0;">
              <label for="selfEmployed" style="display: inline-block; padding-left: 25px;">
                <input type="radio" name="familyResource" id="selfEmployed" value="Self-Employed" style="margin-right: 10px; vertical-align: middle;">
                SELF-EMPLOYED
              </label>
            </td>
          </tr>
          <tr>
            <td style="padding: 0;">
              <label for="others" style="display: inline-block; padding-left: 25px;">
                <input type="radio" name="familyResource" id="others" value="Others" style="margin-right: 10px; vertical-align: middle;">
                OTHERS: <span style="text-decoration: underline; margin-left: 10px; width: 150px; display: inline-block;"></span>
              </label>
            </td>
          </tr>
        </table>

          <!-- Emergency Contact Section -->
        <h6>In case of emergency, please notify:</h6>
        <table class="table table-bordered" style="width: 100%; table-layout: fixed;">
          <tr class="thin-rows">
            <td style="width: 33%; height: 30px; font-size: 14px; font-weight: bold;" >FIRST NAME:</td>
            <td style="width: 33%; height: 30px; font-size: 14px; font-weight: bold; " >MIDDLE NAME:</td>
            <td style="width: 33%; height: 30px; font-size: 14px; font-weight: bold;" >LAST NAME:</td>
          </tr>
          </tr>
          <tr>
            <td style="height: 30px; padding: 0px;" class="emergencyFirstName-field"></td>
            <td style="height: 30px; padding: 0px;" class="emergencyMiddleName-field"></td>
            <td style="height: 30px; padding: 0px;" class="emergencyLastName-field"></td>
          </tr>
          <tr class="thin-rows">
            <td colspan="2" style="height: 30px; font-size: 14px; text-align: left; font-weight: bold;" class="emergencyContactNumber">CONTACT NUMBER/S:</td>
            <td style="height: 30px; font-size: 14px; text-align: left; font-weight: bold;" class="emergencyRelationship">RELATIONSHIP:</td>
            </tr>
            <tr>
              <td colspan="3" style="height: 50px; font-weight: bold; font-size: 14px; text-align: left; " class="emergencyAddress">ADDRESS:</td>
            </tr>
        </table>

        <p style="text-align: center; font-size: 14px; padding: 15  px;"> 
          I hereby that the information given above is true and correct. I further understand that any misinterpretation that may have 
          made will be subjected to criminal and civil liabilities provided for by existing laws.
        </p>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 0px;">
          <!-- Signature Section -->
          <div style="text-align: center;">
            <div style="border-bottom: 2px solid black; width: 300px; margin-top: 165px;"></div>
            <span style="font-size: 14px;">Signature above Printed Name</span>
            <br />
            <strong>SOLO PARENT</strong>
          </div>

            <!-- Date Section -->
            <div style="text-align: center;">
              <div style="border-bottom: 2px solid black; width: 200px; margin-top: 140px;"></div>
              <span style="font-weight: bold; font-size: 14px;">Date:</span>
            </div>

            <!-- Thumb Mark Section -->
            <div style="text-align: center;">
              <div style="border: 2px solid black; width: 150px; height: 150px; margin-bottom: 0;"></div>
              <span style="font-weight: bold; font-size: 14px;">Thumb Mark (Right)</span>
            </div>
          </div>
              
          <br>

          <div class="black-bar" style="margin: 0px;">TO BE FILLED-UP BY THE LOCAL GOVERNMENT OF SAN MATEO</div>
          <!-- Two-column table below the black bar -->
          <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
              <td style="width: 40%; border: 1px solid black; padding: 10px; vertical-align: top; font-size: 13px; font-weight: bolder;">
                Assessed by:<br><br><br>
                <div style="border-top: 1px solid black; margin: 5px 0; text-align: center;"></div>
                <div style="text-align: center; font-size: 12px;">
                  SIGNATURE ABOVE PRINTED NAME / DATE<br>
                  <strong>SOCIAL WORKER</strong>
                </div>
              </td>
              <td style="width: 60%; border: 1px solid black; padding: 10px; vertical-align: top; font-size: 13px; font-weight: bolder;">
                STATUS:
                <br>
                <br>
                <input type="radio" id="approved" name="status" style="margin-right: 5px;">
                <label for="approved" style="font-size: 14px;">Approved</label>
                <input type="radio" id="disapproved" name="status" style="margin-right: 5px;">
                <label for="disapproved" style="font-size: 14px;">Disapproved</label>
                <br>
                <br>
                <div class="col-md-12">
                  REMARKS: _________________________________________________
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
 <!-- Right-side Button Card -->
 <div class="button-card">
 <button class="btn btn-primary" onclick="handleSubmit()">Submit</button>
 <button class="btn btn-success" onclick="handleDownload()">Submit and Download</button>
  <button class="btn btn-warning" onclick="handlePrint()">Download and Print</button>
</div>


<script>
async function handleDownload() {
    try {
        const { jsPDF } = window.jspdf;

        // Select the element to capture
        const element = document.querySelector('.form-container');
        const canvas = await html2canvas(element, { scale: 2 });

        // Convert canvas to image format (base64)
        const imgData = canvas.toDataURL('image/png');

        // Create a new jsPDF instance
        const pdf = new jsPDF('p', 'mm', 'a4');
        const imgWidth = 210; // A4 width in mm
        const pageHeight = 297; // A4 height in mm
        const imgHeight = (canvas.height * imgWidth) / canvas.width;
        let heightLeft = imgHeight;
        let position = 0;

        // Add the first page
        pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
        heightLeft -= pageHeight;

        // Add more pages if content overflows
        while (heightLeft > 0) {
            position = heightLeft - imgHeight;
            pdf.addPage();
            pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
            heightLeft -= pageHeight;
        }

        // Save the PDF file
        pdf.save('Solo_Parent_Application_Form.pdf');
    } catch (error) {
        console.error('Error generating PDF:', error);
        alert('An error occurred while generating the PDF.');
    }
}


  function handleSubmit() {
    alert('Form Submitted');
  }

  function handlePrint() {
    window.print();
    window.download();
}


function handleSubmit() {
      const formData = {
        precinct: localStorage.getItem('summaryPrecinct') || 'N/A',
        firstName: localStorage.getItem('summaryFirstName') || 'N/A',
        middleName: localStorage.getItem('summaryMiddleName') || 'N/A',
        lastName: localStorage.getItem('summaryLastName') || 'N/A',
        religion: localStorage.getItem('summaryReligion') || 'N/A',
        dob: localStorage.getItem('summaryDob') || 'N/A',
        bloodType: localStorage.getItem('summaryBloodType') || 'N/A',
        birthPlace: localStorage.getItem('summaryBirthPlace') || 'N/A',
        civilStatus: localStorage.getItem('selectedStatus') || 'N/A',
        tele: localStorage.getItem('summaryTele') || 'N/A',
        mobile1: localStorage.getItem('summaryPhone') || 'N/A',
        email: localStorage.getItem('summaryEmail') || 'N/A',
        lotNumber: localStorage.getItem('summaryLotNumber') || 'N/A',
        blkNumber: localStorage.getItem('summaryBlkNumber') || 'N/A',
        street: localStorage.getItem('summaryStreet') || 'N/A',
        barangay: localStorage.getItem('summaryBarangay') || 'N/A',
        yearsOfStay: localStorage.getItem('summaryYearsOfStay') || 'N/A',
        monthsOfStay: localStorage.getItem('summaryMonthsOfStay') || 'N/A',
        employer: localStorage.getItem('summaryCompany') || 'N/A',
        officeAddress: localStorage.getItem('summaryOfficeAddress') || 'N/A',
        occupation: localStorage.getItem('summaryOccupation') || 'N/A',
        monthlyIncome: localStorage.getItem('summaryMonthlyIncome') || 'N/A',
        tinNumber: localStorage.getItem('summaryTinNumber') || 'N/A',
        sssNumber: localStorage.getItem('summarySssNumber') || 'N/A',
        gsisNumber: localStorage.getItem('summaryGsisNumber') || 'N/A',
        emergencyFirstName: localStorage.getItem('summaryemergencyFirstName') || 'N/A',
        emergencyMiddleName: localStorage.getItem('summaryemergencyMiddleName') || 'N/A',
        emergencyLastName: localStorage.getItem('summaryemergencyLastName') || 'N/A',
        emergencyContact: localStorage.getItem('summaryEmergencyContact') || 'N/A',
        emergencyRelationship: localStorage.getItem('summaryEmergencyRelationship') || 'N/A',
        emergencyAddress: localStorage.getItem('summaryEmergencyAddress') || 'N/A',
        selectedGender: localStorage.getItem('selectedGender') || 'N/A',
        selectedStatus: localStorage.getItem('selectedStatus') || 'N/A',
        selectedFamilyResource: localStorage.getItem('selectedFamilyResource') || 'N/A',
        selectedClassification: localStorage.getItem('selectedClassification') || 'N/A',
        selectedFourPsMember: localStorage.getItem('selectedFourPsMember') || 'N/A',
        selectedPhilHealthMember: localStorage.getItem('selectedPhilHealthMember') || 'N/A',
        selectedProblems: JSON.parse(localStorage.getItem('selectedProblems')) || [],
        selectedNeeds: JSON.parse(localStorage.getItem('selectedNeeds')) || [],
        familyData: JSON.parse(localStorage.getItem('familyData')) || []


      };


      $.ajax({
        url: 'Solo Parent Application DB.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          alert('Form data submitted successfully!');
          window.location.href = 'Home.php'; // Redirect to home page
        },
        error: function(xhr, status, error) {
          console.error('Error submitting form data:', error);
          alert('An error occurred while submitting the form data. Check console for details.');
        }
      });
    }
  document.addEventListener('DOMContentLoaded', function() {
    const precinctValue = localStorage.getItem('summaryPrecinct') || 'N/A';
    const firstNameValue = localStorage.getItem('summaryFirstName') || 'N/A';
    const middleNameValue = localStorage.getItem('summaryMiddleName') || 'N/A';
    const lastNameValue = localStorage.getItem('summaryLastName') || 'N/A';
    const religionValue = localStorage.getItem('summaryReligion') || 'N/A';
    const dobValue = localStorage.getItem('summaryDob') || 'N/A';
    const bloodValue = localStorage.getItem('summaryBloodType') || 'N/A';
    const placeValue = localStorage.getItem('summaryBirthPlace') || 'N/A';
    const civilValue = localStorage.getItem('summaryBirthPlace') || 'N/A';
    const teleValue = localStorage.getItem('summaryTele') || 'N/A';
    const mobile1Value = localStorage.getItem('summaryPhone') || 'N/A';
    const emailedValue = localStorage.getItem('summaryEmail') || 'N/A';
    const lotValue = localStorage.getItem('summaryLotNumber') || 'N/A';
    const blkValue = localStorage.getItem('summaryBlkNumber') || 'N/A';
    const streetValue = localStorage.getItem('summaryStreet') || 'N/A';
    const brgyValue = localStorage.getItem('summaryBarangay') || 'N/A';
    const yearValue = localStorage.getItem('summaryYearsOfStay') || 'N/A';
    const monthValue = localStorage.getItem('summaryMonthsOfStay') || 'N/A';
    const officeValue = localStorage.getItem('summaryOfficeAddress') || 'N/A';
    const employValue = localStorage.getItem('summaryCompany') || 'N/A';
    const occupationValue = localStorage.getItem('summaryOccupation') || 'N/A';
    const incomeValue = localStorage.getItem('summaryMonthlyIncome') || 'N/A';
    const tinValue = localStorage.getItem('summaryTinNumber') || 'N/A';
    const sssValue = localStorage.getItem('summarySssNumber') || 'N/A';
    const gsisValue = localStorage.getItem('summaryGsisNumber') || 'N/A';
    const emergencyFirstNameValue = localStorage.getItem('summaryemergencyFirstName') || 'N/A';
    const emergencyMiddleNameValue = localStorage.getItem('summaryemergencyMiddleName') || 'N/A';
    const emergencyLastNameValue = localStorage.getItem('summaryemergencyLastName') || 'N/A';
    const emergencyContactNumberValue = localStorage.getItem('summaryEmergencyContact') || 'N/A';
    const emergencyRelationshipValue = localStorage.getItem('summaryEmergencyRelationship') || 'N/A';
    const emergencyAddressValue = localStorage.getItem('summaryEmergencyAddress') || 'N/A';
    const fourPsIdValue = localStorage.getItem('summaryFourPsId') || '__________________________';
    const philHealthIdValue = localStorage.getItem('summaryPhilHealthId') || '__________________________';
    



    document.querySelector('.precinct-field').innerHTML = `<strong>Precinct #: ${precinctValue}</strong>`;
    document.querySelector('.religion-field').innerHTML = `<strong>Religion: <p>${religionValue}</p></strong>`;
    document.querySelector('.first-field').innerHTML = `<strong>First Name: <p>${firstNameValue}</p></strong>`;
    document.querySelector('.middle-field').innerHTML = `<strong>Middle Name:<p>${middleNameValue}</p></strong> `;
    document.querySelector('.last-field').innerHTML = `<strong>Last Name: <p>${lastNameValue}</p> </strong>`;
    document.querySelector('.birth-field').innerHTML = `<strong>Birth Date:<span style="font-size: 0.7em; font-style: italic;">(MONTH/DD/YYYY)</span> <p>${dobValue}</p> </strong> `;
    document.querySelector('.blood-field').innerHTML = `<strong>Blood Type:<br> <p>${bloodValue}</p> </strong> `;
    document.querySelector('.place-field').innerHTML = `<strong>Birth Place: <br> <p>${placeValue}</p></strong>`;
    document.querySelector('.land-field').innerHTML = `<strong>LANDLINE:</strong> <br> <p style="font-size: 17px; margin-left: 10px;">${teleValue}</p>`;
    document.querySelector('.mobile1-field').innerHTML = `<strong>MOBILE 1:</strong> <br> <p style="font-size: 17px; margin-left: 10px;">${mobile1Value}</p>`;
    document.querySelector('.emailed-field').innerHTML = `<strong>EMAIL ADDRESS:</strong> <br> <p style="font-size: 16px;">${emailedValue}</p>`;
    document.querySelector('.lot-field').innerHTML = `<p style="border-bottom: 1px solid black; margin: 0; text-align: center;">${lotValue}</p><strong>LOT#</strong>`;
    document.querySelector('.blk-field').innerHTML = `<p style="border-bottom: 1px solid black; margin: 0; text-align: center;">${blkValue}</p><strong>BLK#</strong>`;
    document.querySelector('.street-field').innerHTML = `<p style="border-bottom: 1px solid black; margin: 0; text-align: center;">${streetValue}</p><strong>STREET / SUBDIVISION</strong>`;
    document.querySelector('.brgy-field').innerHTML = `<p style="border-bottom: 1px solid black; margin: 0; text-align: center;">${brgyValue}</p><strong>BARANGAY</strong>`;
    document.querySelector('.year-field').innerHTML = `___${yearValue}___`;
    document.querySelector('.month-field').innerHTML = `___${monthValue}___`;
    document.querySelector('.employer-field').innerHTML = `<p>Name of Employer:<strong> ${employValue} </strong></p> `;
    document.querySelector('.officeAddress-field').innerHTML = ` Office Address: <strong> ${officeValue} </strong>`;
    document.querySelector('.occupation-field').innerHTML = ` Occupation:<strong> ${occupationValue} </strong>`;
    document.querySelector('.income-field').innerHTML = `Monthly Income:<strong> ${incomeValue} </strong>`;
    document.querySelector('.tin-field').innerHTML = `TIN #:<strong> ${tinValue} </strong>`;
    document.querySelector('.sss-field').innerHTML = `SSS #: <strong>${sssValue}</strong>`;
    document.querySelector('.gsis-field').innerHTML = `GSIS #: <strong>${gsisValue}</strong>`;
    document.querySelector('.emergencyFirstName-field').innerHTML = `${emergencyFirstNameValue}`;
    document.querySelector('.emergencyMiddleName-field').innerHTML = `${emergencyMiddleNameValue}`;
    document.querySelector('.emergencyLastName-field').innerHTML = `${emergencyLastNameValue}`;
    document.querySelector('.emergencyContactNumber').innerHTML = `CONTACT NUMBER/S: <strong>${emergencyContactNumberValue}</strong>`;
    document.querySelector('.emergencyRelationship').innerHTML = `RELATIONSHIP: <strong>${emergencyRelationshipValue}</strong>`;
    document.querySelector('.emergencyAddress').innerHTML = `ADDRESS: <strong>${emergencyAddressValue}</strong>`;
    document.querySelector('.fourPsId-field').innerHTML = `ID#: <strong>${fourPsIdValue}</strong>`;
    document.querySelector('.philHealthId-field').innerHTML = `ID#: <strong>${philHealthIdValue}</strong>`;
});

  document.addEventListener('DOMContentLoaded', function() {
    const selectedGender = localStorage.getItem('selectedGender');  // Retrieve stored gender
    
    if (selectedGender === 'Male') {
        document.getElementById('male').checked = true;
    } else if (selectedGender === 'Female') {
        document.getElementById('female').checked = true;
    }
})

document.addEventListener('DOMContentLoaded', function() {
    const selectedStatus = localStorage.getItem('selectedStatus');  // Retrieve stored civil status
    
    if (selectedStatus === 'Single') {
        document.getElementById('Single').checked = true;
    } else if (selectedStatus === 'Married') {
        document.getElementById('Married').checked = true;
    } else if (selectedStatus === 'Widowed') {
        document.getElementById('Widowed').checked = true;
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const selectedResource = localStorage.getItem('selectedFamilyResource');  // Retrieve stored family resource
    
    if (selectedResource === 'Employeds') {
        document.getElementById('employed').checked = true;
    } else if (selectedResource === 'Self-Employed') {
        document.getElementById('selfEmployed').checked = true;
    } else if (selectedResource === 'Others') {
        document.getElementById('others').checked = true;
    }
});


document.addEventListener('DOMContentLoaded', function() {
  const selectedClassification = localStorage.getItem('selectedFamilyClassification');
  
  if (selectedClassification === 'Individually Paying') {
    document.getElementById('category_individual').checked = true;
  } else if (selectedClassification === 'Lifetime') {
    document.getElementById('category_lifetime').checked = true;
  } else if (selectedClassification === 'OFW') {
    document.getElementById('category_ofw').checked = true;
  } else if (selectedClassification === 'Employed') {
    document.getElementById('category_employed').checked = true;
  } else if (selectedClassification === 'Private') {
    document.getElementById('category_private').checked = true;
  } else if (selectedClassification === 'Government') {
    document.getElementById('category_government').checked = true;
  } else if (selectedClassification === 'Sponsored') {
    document.getElementById('category_sponsored').checked = true;
  }
});



document.addEventListener('DOMContentLoaded', function() {
    // Retrieve and display 4 P's Member status
    const selectedFourPs = localStorage.getItem('selectedFourPs');
    if (selectedFourPs === 'No') {
        document.getElementById('fourPsNo').checked = true;
    } else if (selectedFourPs === 'Yes') {
        document.getElementById('fourPsYes').checked = true;
    }

    // Retrieve and display PhilHealth Member status
    const selectedPhilHealth = localStorage.getItem('selectedPhilHealth');
    if (selectedPhilHealth === 'No') {
        document.getElementById('philHealthNo').checked = true;
    } else if (selectedPhilHealth === 'Yes') {
        document.getElementById('philHealthYes').checked = true;
    }
});




document.addEventListener('DOMContentLoaded', function() {
    const storedProblems = JSON.parse(localStorage.getItem('selectedProblems')) || [];

    // Check each problem if it is in the storedProblems array
    storedProblems.forEach(problem => {
        const checkbox = document.getElementById(problem);
        if (checkbox) {
            checkbox.checked = true;
        }
    });
});

// first page.html script
document.addEventListener('DOMContentLoaded', function() {
    let selectedNeeds = JSON.parse(localStorage.getItem('selectedNeeds')) || [];
    selectedNeeds.forEach(id => {
        let checkbox = document.getElementById(id);
        if (checkbox) checkbox.checked = true;
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const familyData = JSON.parse(localStorage.getItem("familyData")) || [];
    const tableBody = document.querySelector(".thin-rows");

    familyData.forEach(member => {
        const newRow = document.createElement("tr");

        const relationshipCell = document.createElement("td");
        relationshipCell.textContent = member.relationship;
        newRow.appendChild(relationshipCell);

        const fullNameCell = document.createElement("td");
        fullNameCell.textContent = member.fullName;
        newRow.appendChild(fullNameCell);

        const birthDateCell = document.createElement("td");
        birthDateCell.textContent = member.birthDate;
        newRow.appendChild(birthDateCell);

        const civilStatusCell = document.createElement("td");
        civilStatusCell.textContent = member.civilStatus;
        newRow.appendChild(civilStatusCell);

        const educAttainmentCell = document.createElement("td");
        educAttainmentCell.textContent = member.educAttainment;
        newRow.appendChild(educAttainmentCell);

        const occupationCell = document.createElement("td");
        occupationCell.textContent = member.occupation;
        newRow.appendChild(occupationCell);

        tableBody.appendChild(newRow);
    });
});

</script>
</body>
</html>
