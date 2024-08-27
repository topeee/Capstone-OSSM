<?php


$servername = "153.92.15.26"; 
$username = "u271593949_ossmdb"; 
$password = "UcMPAq^5"; 
$dbname = "u271593949_ossmdb"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $middle_name = $_POST['middlename'];
    $suffix = $_POST['suffix-dropdown'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender-dropdown'];
    $mobile_number = $_POST['mn'];
    $tel_number = $_POST['tn'];
    $email = $_POST['email'];
    $house_number = $_POST['house#'];
    $street = $_POST['street'];
    $subdivision = $_POST['sbd/vilg'];
    $barangay = $_POST['barangay-dropdown'];
    $password = $_POST['password'];

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "An account with this email already exists. Please use a different email.";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO users (first_name, last_name, middle_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, subdivision, barangay, password_hash)
                VALUES ('$first_name', '$last_name', '$middle_name', '$suffix', '$dob', '$gender', '$mobile_number', '$tel_number', '$email', '$house_number', '$street', '$subdivision', '$barangay', '$password_hash')";

        if ($conn->query($sql) === TRUE) {
            header("Location: login.html");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
