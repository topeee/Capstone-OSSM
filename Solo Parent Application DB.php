<?php
session_start(); // Start the session
include 'db_connection.php';
include 'header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $precinct = $_POST['precinct'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $religion = $_POST['religion'];
    $dob = $_POST['dob'];
    $bloodType = $_POST['bloodType'];
    $birthPlace = $_POST['birthPlace'];
    $civilStatus = $_POST['civilStatus'];
    $tele = $_POST['tele'];
    $mobile1 = $_POST['mobile1'];
    $email = $_POST['email'];
    $lotNumber = $_POST['lotNumber'];
    $blkNumber = $_POST['blkNumber'];
    $street = $_POST['street'];
    $barangay = $_POST['barangay'];
    $yearsOfStay = $_POST['yearsOfStay'];
    $monthsOfStay = $_POST['monthsOfStay'];
    $employer = $_POST['employer'];
    $officeAddress = $_POST['officeAddress'];
    $occupation = $_POST['occupation'];
    $monthlyIncome = $_POST['monthlyIncome'];
    $tinNumber = $_POST['tinNumber'];
    $sssNumber = $_POST['sssNumber'];
    $gsisNumber = $_POST['gsisNumber'];
    $emergencyFirstName = $_POST['emergencyFirstName'];
    $emergencyMiddleName = $_POST['emergencyMiddleName'];
    $emergencyLastName = $_POST['emergencyLastName'];
    $emergencyContact = $_POST['emergencyContact'];
    $emergencyRelationship = $_POST['emergencyRelationship'];
    $emergencyAddress = $_POST['emergencyAddress'];

    // Insert into the SoloParentApplication table
    $sql = "INSERT INTO SoloParentApplication (precinct, firstName, middleName, lastName, religion, dob, bloodType, birthPlace, civilStatus, tele, mobile1, email, lotNumber, blkNumber, street, barangay, yearsOfStay, monthsOfStay, employer, officeAddress, occupation, monthlyIncome, tinNumber, sssNumber, gsisNumber, emergencyFirstName, emergencyMiddleName, emergencyLastName, emergencyContact, emergencyRelationship, emergencyAddress) 
            VALUES ('$precinct', '$firstName', '$middleName', '$lastName', '$religion', '$dob', '$bloodType', '$birthPlace', '$civilStatus', '$tele', '$mobile1', '$email', '$lotNumber', '$blkNumber', '$street', '$barangay', '$yearsOfStay', '$monthsOfStay', '$employer', '$officeAddress', '$occupation', '$monthlyIncome', '$tinNumber', '$sssNumber', '$gsisNumber', '$emergencyFirstName', '$emergencyMiddleName', '$emergencyLastName', '$emergencyContact', '$emergencyRelationship', '$emergencyAddress')";

    if (!mysqli_query($conn, $sql)) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
