<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Define the absolute path to the file
$filePath = __DIR__ . DIRECTORY_SEPARATOR . 'Solo Parent Application Form.pdf';

// Check if the file exists
if (file_exists($filePath)) {
    // Set headers to trigger a file download in the browser
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="Solo_Parent_Application_Form.pdf"');
    header('Content-Length: ' . filesize($filePath));

    // Clear the output buffer and output the file
    ob_clean();
    flush();
    readfile($filePath);
    exit;
} else {
    echo "File not found.";
}
