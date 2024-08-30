<?php
function performOcrWithApiKey($imagePath, $apiKey) {
    $imageData = file_get_contents($imagePath);
    $base64Image = base64_encode($imageData);

    $url = "https://vision.googleapis.com/v1/images:annotate?key={$apiKey}";

    $jsonRequest = json_encode([
        "requests" => [
            [
                "image" => [
                    "content" => $base64Image
                ],
                "features" => [
                    [
                        "type" => "TEXT_DETECTION",
                        "maxResults" => 1
                    ]
                ]
            ]
        ]
    ]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonRequest);

    $response = curl_exec($ch);
    curl_close($ch);

    $responseDecoded = json_decode($response, true);

    if (isset($responseDecoded['responses'][0]['textAnnotations'][0]['description'])) {
        return $responseDecoded['responses'][0]['textAnnotations'][0]['description'];
    } else {
        return "No text found in the ID Document.";
    }
}
 
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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Handle the ID Document Upload
        if (isset($_FILES['validId'])) {
            $idDocument = $_FILES['validId'];
            $uploadError = $idDocument['error'];
    
            if ($uploadError === UPLOAD_ERR_OK) {
                $uploadDir = 'uploads/';
                $idDocumentPath = $uploadDir . basename($idDocument['name']);
    
                // Ensure the upload directory exists
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
    
                // Move the uploaded file to the upload directory
                if (move_uploaded_file($idDocument['tmp_name'], $idDocumentPath)) {
                    echo "ID Document uploaded successfully.<br>";
    
                    // Perform OCR on the ID document
                    $ocrText = performOcrWithApiKey($idDocumentPath, $apiKey);
                    echo "Extracted Text from ID: " . $ocrText . "<br>";
    
                } else {
                    echo "Error uploading ID Document.<br>";
                    exit;
                }
            } else {
                echo "File upload error: " . $uploadError . "<br>";
                exit;
            }
        } else {
            echo "No file was uploaded.<br>";
            exit;
        }
    }
    
    // Your Google Cloud Vision API key
    $apiKey = 'f11612787649e6de5b3c4a4c790e24003a1819ad';

    // Perform OCR
    // Perform OCR using the API key
    $ocrText = performOcrWithApiKey($idDocumentPath, $apiKey);
    echo "OCR Text: " . $ocrText . "<br>";

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "An account with this email already exists. Please use a different email.";
    } else {
        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, middle_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, subdivision, barangay, password_hash, id_document)
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssssss", $first_name, $last_name, $middle_name, $suffix, $dob, $gender, $mobile_number, $tel_number, $email, $house_number, $street, $subdivision, $barangay, $password_hash, $idDocumentPath);

        if ($stmt->execute()) {
            header("Location: login.html");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>
