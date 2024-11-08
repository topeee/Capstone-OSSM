<?php
$gsisNumber = $_POST['gsisNumber'];
$emergencyFirstName = $_POST['emergencyFirstName'];
$emergencyMiddleName = $_POST['emergencyMiddleName'];
$emergencyLastName = $_POST['emergencyLastName'];
$emergencyContact = $_POST['emergencyContact'];
$emergencyRelationship = $_POST['emergencyRelationship'];
$emergencyAddress = $_POST['emergencyAddress'];
$selectedGender = $_POST['selectedGender'];
$selectedStatus = $_POST['selectedStatus'];
$selectedFamilyResource = $_POST['selectedFamilyResource'];
$selectedClassification = $_POST['selectedClassification'];
$selectedFourPsMember = $_POST['selectedFourPsMember'];
$selectedPhilHealthMember = $_POST['selectedPhilHealthMember'];
$selectedProblems = $_POST['selectedProblems'];
$selectedNeeds = $_POST['selectedNeeds'];
$familyData = $_POST['familyData'];

// Insert into the SoloParentApplication table
$sql = "INSERT INTO SoloParentApplication (precinct, firstName, middleName, lastName, religion, dob, bloodType, birthPlace, civilStatus, tele, mobile1, email, lotNumber, blkNumber, street, barangay, yearsOfStay, monthsOfStay, employer, officeAddress, occupation, monthlyIncome, tinNumber, sssNumber, gsisNumber, emergencyFirstName, emergencyMiddleName, emergencyLastName, emergencyContact, emergencyRelationship, emergencyAddress, selectedGender, selectedStatus, selectedFamilyResource, selectedClassification, selectedFourPsMember, selectedPhilHealthMember, selectedProblems, selectedNeeds, familyData) 
        VALUES ('$precinct', '$firstName', '$middleName', '$lastName', '$religion', '$dob', '$bloodType', '$birthPlace', '$civilStatus', '$tele', '$mobile1', '$email', '$lotNumber', '$blkNumber', '$street', '$barangay', '$yearsOfStay', '$monthsOfStay', '$employer', '$officeAddress', '$occupation', '$monthlyIncome', '$tinNumber', '$sssNumber', '$gsisNumber', '$emergencyFirstName', '$emergencyMiddleName', '$emergencyLastName', '$emergencyContact', '$emergencyRelationship', '$emergencyAddress', '$selectedGender', '$selectedStatus', '$selectedFamilyResource', '$selectedClassification', '$selectedFourPsMember', '$selectedPhilHealthMember', '$selectedProblems', '$selectedNeeds', '$familyData')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in SoloParentApplication table";
     
    // Get the last inserted ID
    $last_id = $conn->insert_id;

    // Insert into the family_data table
    foreach ($familyData as $familyMember) {
        $relationship = $familyMember['relationship'];
        $fullName = $familyMember['full_name'];
        $birthDate = $familyMember['birth_date'];
        $civilStatus = $familyMember['civil_status'];
        $educAttainment = $familyMember['educ_attainment'];
        $occupation = $familyMember['occupation'];

        $sqlFamily = "INSERT INTO family_data (user_id, relationship, full_name, birth_date, civil_status, educ_attainment, occupation) 
                      VALUES ('$last_id', '$relationship', '$fullName', '$birthDate', '$civilStatus', '$educAttainment', '$occupation')";

        if ($conn->query($sqlFamily) !== TRUE) {
            echo "Error: " . $sqlFamily . "<br>" . $conn->error;
        }
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
