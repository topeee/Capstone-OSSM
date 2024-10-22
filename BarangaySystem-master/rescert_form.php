<?php
ini_set('display_errors',0);
require('classes/resident.class.php');
$userdetails = $residentbmis->get_userdata();
$id_resident = $_GET['id_resident'];
$resident = $residentbmis->get_single_certofres($id_resident);
  ?>
<!DOCTYPE html>
<html id="clearance">
<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 4mm; }
</style>

 <head>
    <meta charset="UTF-8">
    <title>Barangay Information System</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../BarangaySystem/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../BarangaySystem/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../BarangaySystem/bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../BarangaySystem/bootstrap/css/morris-0.4.3.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../BarangaySystem/bootstrap/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="./BarangaySystem/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../BarangaySystem/bootstrap/css/select2.css" rel="stylesheet" type="text/css" />
    <script src="../BarangaySystem/bootstrap/css/jquery-1.12.3.js" type="text/javascript"></script>  
    
</head>
 <body class="skin-black" >
     <!-- header logo: style can be found in header.less -->
    
    
     <?php 
     
     include "classes/conn.php"; 

     ?> 
       
       <div class="col-xs-12 col-sm-6 col-md-8"  >
            <div style=" background: black;" >
                <div class="col-xs-4 col-sm-6 col-md-3" style="background: white; margin-right:10px; border: 2px solid black;">
                    <center><image src="../BarangaySystem/icons/beverlylogo.png" style="width:90%;height:164px;"/></center>
                    <div style="margin-top:20px; text-align: center; word-wrap: break-word;">
                        
                                    <p style="margin-top: 2em;">
                                    <b>Vincent Vilfamat</b><br>
                                    <span style="font-size:12px;">PUNONG BARANGAY</span>
                                    </p><br>
                                    <p>
                                    KAG. Mikhos Dungca<br>
                                    <span style="font-size:12px;">Sports / Law / Ordinance</span>
                                    </p><br>
                                    
                                    <p>
                                    KAG. PJ Mendros<br>
                                    <span style="font-size:12px;">Public Safety / Peace and Order</span>
                                    </p><br>
                                    
                                    <p>
                                    KAG. Eugene Evangelista<br>
                                    <span style="font-size:12px;">Culture & Arts / Tourism / Womens Sector</span>
                                    </p><br>
                                    <p>
                                    KAG. Kyle Pilapil<br>
                                    <span style="font-size:12px;">Budget & Finance / Electrification</span>
                                    </p><br>
                                   
                                    <p>
                                    KAG. Jr Gapas<br>
                                    <span style="font-size:12px;">Agriculture / Livelihood / Farmers Sector / PWD Sector</span>
                                    </p><br>
                                   
                                    <p>
                                    KAG. Kjell Ibabao<br>
                                    <span style="font-size:12px;">Health & Sanitation / Education</span>
                                    </p><br>
                                  
                                    <p>
                                    KAG. Remedios<br>
                                    <span style="font-size:12px;">Infrastracture / Labor Sector/ Environment / Beautification</span>
                                    </p>
                                    
                    </div>
                </div>
                <div class="col-xs-7 col-sm-5 col-md-8" style="background: white;  ">`
                <table width="100%">
<tbody>
<tr>
<td>
<p><em>Latest 1x1 ID Picture</em></p>
</td>
</tr>
</tbody>
</table>
<p><strong>REGISTRATION FORM FOR PERSONS WITH DISABLITY</strong></p>
<table width="766">
<tbody>
<tr>
<td colspan="23" width="766">
<p><strong>1. </strong><strong> NEW APPLICANT * RENEWAL *</strong></p>
</td>
</tr>
<tr>
<td colspan="15" width="522">
<p><strong>2. </strong><strong>PERSON WITH DISABILITY NUMBER (RR-PPMM-BBB-NNNNNNN) *</strong></p>
</td>
<td colspan="8" width="245">
<p><strong>3. </strong><strong>DATE APPLIED </strong>*(mm/dd/yyyy)</p>
</td>
</tr>
<tr>
<td colspan="23" width="766">
<p><strong>4. </strong><strong>PERSONAL INFORMATION *</strong></p>
</td>
</tr>
<tr>
<td colspan="6" width="274">
<p><strong>LAST NAME: *</strong></p>
</td>
<td colspan="4" width="157">
<p><strong>FIRST NAME: *</strong></p>
</td>
<td colspan="12" width="253">
<p><strong>MIDDLE NAME: *</strong></p>
</td>
<td width="81">
<p><strong>SUFFIX: *</strong></p>
</td>
</tr>
<tr>
<td colspan="13" width="445">
<p><strong>5. </strong><strong>DATE OF BIRTH: * </strong>(mm/dd/yyyy)</p>
</td>
<td colspan="5" width="144">
<p><strong>6. </strong><strong>SEX: *</strong></p>
<p><strong> Female</strong></p>
</td>
<td colspan="5" width="178">
<p><strong> Male</strong></p>
</td>
</tr>
<tr>
<td colspan="23" width="766">
<p><strong>7. </strong><strong>CIVIL STATUS: *</strong></p>
<p><strong> Single Separated Cohabitation (Live-In) Married Widow/er</strong></p>
</td>
</tr>
<tr>
<td colspan="10" width="432">
<p><strong>8. </strong><strong>TYPE OF DISABILITY: *</strong></p>
<p><strong>[ ] Deaf Or Hard of Hearing Disability [ ] Psychosocial Disability</strong></p>
<p><strong>[ ] Intellectual Disability [ ] Speech And Language Impairment</strong></p>
<p><strong>[ ] Learning Disability [ ] Visual Disability</strong></p>
<p><strong>[ ] Mental Disability [ ] Cancer (Ra 11215)</strong></p>
<p><strong>[ ] Physical Disability (Orthopedic) [ ] Rare Disease (Ra10747)</strong></p>
</td>
<td colspan="13" width="335">
<p><strong>9. </strong><strong>CAUSE OF DISABILITY: *</strong></p>
<p><strong>[ ] Congenital/Inborn [ ] Acquired</strong></p>
<p><strong> [ ] Autism [ ] Chronic Illness</strong></p>
<p><strong> [ ] ADHD [ ] Cerebral Palsy</strong></p>
<p><strong> [ ] Cerebral Palsy [ ] Injury</strong></p>
<p><strong> [ ] Down Syndrome [ ] Others,Specify: _____________</strong></p>
<p><strong> [ ] Others, Specify: ___________________________________</strong></p>
</td>
</tr>
<tr>
<td colspan="23" width="766">
<p><strong>10. </strong><strong>RESIDENCE ADDRESS *</strong></p>
</td>
</tr>
<tr>
<td colspan="6" width="274">
<p><strong>House No. And Street: *</strong></p>
</td>
<td colspan="7" width="170">
<p><strong>Barangay: *</strong></p>
</td>
<td colspan="4" width="132">
<p><strong>Municipality: *</strong></p>
<p><strong>SAN MATEO</strong></p>
</td>
<td colspan="4" width="103">
<p><strong>Province: *</strong></p>
<p><strong>RIZAL</strong></p>
</td>
<td colspan="2" width="87">
<p><strong>Region: *</strong></p>
<p><strong>4-A</strong></p>
</td>
</tr>
<tr>
<td colspan="23" width="766">
<p><strong>11. </strong><strong>CONTACT DETAILS</strong></p>
</td>
</tr>
<tr>
<td colspan="3" width="231">
<p><strong>Landline No.:</strong></p>
</td>
<td colspan="11" width="267">
<p><strong>Mobile No.: *</strong></p>
</td>
<td colspan="9" width="269">
<p><strong>E-Mail Address:</strong></p>
</td>
</tr>
<tr>
<td colspan="12" width="444">
<p><strong>12. </strong><strong>EDUCATIONAL ATTAINMENT: *</strong></p>
<p><strong> [ ] None [ ] Senior High School</strong></p>
<p><strong> [ ]Kindergarten [ ] College</strong></p>
<p><strong> [ ] Elementary [ ] Vocational</strong></p>
<p><strong> [ ] Junior High School [ ] Post Graduate</strong></p>
</td>
<td colspan="11" rowspan="3" width="323">
<p><strong>14.OCCUPATION: *</strong></p>
<p><strong>[ ] Managers</strong></p>
<p><strong>[ ] Professionals</strong></p>
<p><strong>[ ] Technicians And Associate Professionals</strong></p>
<p><strong>[ ] Clerical Support Workers</strong></p>
<p><strong>[ ] Service And Sales Workers</strong></p>
<p><strong>[ ] Skilled Agricultural, Forestry And Fishery Workers</strong></p>
<p><strong>[ ] Craft And Related Trade Workers</strong></p>
<p><strong>[ ] Plant And Machine Operators And Assemblers</strong></p>
<p><strong>[ ] Elementary Occupations</strong></p>
<p><strong>[ ] Armed Forces Occupations</strong></p>
<p><strong>[ ] Others, Specify: ______________________________________</strong></p>
</td>
</tr>
<tr>
<td colspan="5" width="262">
<p><strong>13. </strong><strong>STATUS OF EMPLOYMENT: *</strong></p>
<p><strong>[ ] Employed</strong></p>
<p><strong>[ ] Unemployed</strong></p>
<p><strong>[ ] Self- Employed</strong></p>
</td>
<td colspan="7" rowspan="2" width="182">
<p><strong>13b. TYPES OF EMPLOYMENT: *</strong></p>
<p><strong>[ ] Permanent/Regular</strong></p>
<p><strong>[ ] Seasonal</strong></p>
<p><strong>[ ] Casual</strong></p>
<p><strong>[ ] Emergency</strong></p>
</td>
</tr>
<tr>
<td colspan="5" width="262">
<p><strong>13a. CATEGORY OF EMPLOYMENT: *</strong></p>
<p><strong>[ ] Government</strong></p>
<p><strong> [ ] Private</strong></p>
</td>
</tr>
<tr>
<td colspan="23" width="766">
<p><strong>15. ORGANIZATION INFORMATION:</strong></p>
</td>
</tr>
<tr>
<td colspan="2" width="178">
<p><strong>Organization Affiliated:</strong></p>
</td>
<td colspan="6" width="236">
<p><strong>Contact Person:</strong></p>
</td>
<td colspan="12" width="206">
<p><strong>Office Address:</strong></p>
</td>
<td colspan="3" width="147">
<p><strong>Tel. Nos.:</strong></p>
</td>
</tr>
<tr>
<td colspan="23" width="766">
<p><strong>16. ID REFERENCE NO.:</strong></p>
</td>
</tr>
<tr>
<td width="144">
<p><strong>SSS NO.:</strong></p>
</td>
<td colspan="6" width="144">
<p><strong>GSIS NO.:</strong></p>
</td>
<td colspan="4" width="150">
<p><strong>PAG-IBIG NO.:</strong></p>
</td>
<td colspan="5" width="131">
<p><strong>PSN NO.:</strong></p>
</td>
<td colspan="7" width="197">
<p><strong>PHILHEALTH NO.: *</strong></p>
</td>
</tr>
<tr>
<td colspan="4" width="232">
<p><strong>17. FAMILY BACKGROUND: *</strong></p>
</td>
<td colspan="5" width="184">
<p><strong>LAST NAME</strong></p>
</td>
<td colspan="10" width="190">
<p><strong>FIRST NAME</strong></p>
</td>
<td colspan="4" width="160">
<p><strong>MIDDLE NAME</strong></p>
</td>
</tr>
<tr>
<td colspan="4" width="232">
<p><strong><em> FATHER&rsquo;S NAME: </em></strong><strong>*</strong></p>
</td>
<td colspan="5" width="184">&nbsp;</td>
<td colspan="10" width="190">&nbsp;</td>
<td colspan="4" width="160">&nbsp;</td>
</tr>
<tr>
<td colspan="4" width="232">
<p><strong><em> MOTHER&rsquo;S NAME: </em></strong><strong>*</strong></p>
</td>
<td colspan="5" width="184">&nbsp;</td>
<td colspan="10" width="190">&nbsp;</td>
<td colspan="4" width="160">&nbsp;</td>
</tr>
<tr>
<td colspan="4" width="232">
<p><strong>For in case of emergency:</strong></p>
<p><strong><em> GUARDIAN: </em></strong><strong>*</strong></p>
<p><strong><em>Contact No.:</em></strong><strong> *</strong></p>
</td>
<td colspan="5" width="184">&nbsp;</td>
<td colspan="10" width="190">&nbsp;</td>
<td colspan="4" width="160">&nbsp;</td>
</tr>
<tr>
<td colspan="4" width="232">
<p><strong>18. ACCOMPLISHED BY: *</strong></p>
</td>
<td colspan="5" width="184">
<p><strong>LAST NAME</strong></p>
</td>
<td colspan="10" width="190">
<p><strong>FIRST NAME</strong></p>
</td>
<td colspan="4" width="160">
<p><strong>MIDDLE NAME</strong></p>
</td>
</tr>
<tr>
<td colspan="4" width="232">
<p><strong> [ ] APPLICANT</strong></p>
</td>
<td colspan="5" width="184">&nbsp;</td>
<td colspan="10" width="190">&nbsp;</td>
<td colspan="4" width="160">&nbsp;</td>
</tr>
<tr>
<td colspan="4" width="232">
<p><strong> [ ] GUARDIAN</strong></p>
</td>
<td colspan="5" width="184">&nbsp;</td>
<td colspan="10" width="190">&nbsp;</td>
<td colspan="4" width="160">&nbsp;</td>
</tr>
<tr>
<td colspan="4" width="232">
<p><strong> [ ] REPRESENTATIVE</strong></p>
</td>
<td colspan="5" width="184">&nbsp;</td>
<td colspan="10" width="190">&nbsp;</td>
<td colspan="4" width="160">&nbsp;</td>
</tr>
<tr>
<td colspan="4" width="232">
<p><strong>19. Name Of Certifying Physician:</strong></p>
<p><strong> License No.:</strong></p>
</td>
<td colspan="5" width="184">&nbsp;</td>
<td colspan="10" width="190">&nbsp;</td>
<td colspan="4" width="160">&nbsp;</td>
</tr>
<tr>
<td colspan="4" width="232">
<p><strong>20. PROCESSING OFFICER: *</strong></p>
</td>
<td colspan="5" width="184">&nbsp;</td>
<td colspan="10" width="190">&nbsp;</td>
<td colspan="4" width="160">&nbsp;</td>
</tr>
<tr>
<td colspan="4" width="232">
<p><strong>21. APPROVING OFFICER: *</strong></p>
</td>
<td colspan="5" width="184">&nbsp;</td>
<td colspan="10" width="190">&nbsp;</td>
<td colspan="4" width="160">&nbsp;</td>
</tr>
<tr>
<td colspan="4" width="232">
<p><strong>22. ENCODER: *</strong></p>
</td>
<td colspan="5" width="184">&nbsp;</td>
<td colspan="10" width="190">&nbsp;</td>
<td colspan="4" width="160">&nbsp;</td>
</tr>
<tr>
<td colspan="23" width="766">
<p><strong>23. NAME OF REPORTING UNIT: (OFFICE/SECTION) *</strong></p>
</td>
</tr>
<tr>
<td colspan="23" width="766">
<p><strong>24. CONTROL NO.: *</strong></p>
</td>
</tr>
</tbody>
</table>
                
            </div>
        </div>
    <button class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#clearance')">Print</button>
    </body>
    <?php
    
    ?>


    <script>
         function PrintElem(elem)
    {
        window.print();
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        //mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        //mywindow.document.write('</head><body class="skin-black" >');
         var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        mywindow.document.write(data);
        //mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();

        printButton.style.visibility = 'visible';
        mywindow.close();

        return true;
    }
    </script>
</html>