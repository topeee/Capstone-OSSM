<?php
session_start();
include 'db_connection.php';
require 'vendor/autoload.php';

if (isset($_POST['export_excel'])) {
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="users.xlsx"');
    header('Cache-Control: max-age=0');

    require 'vendor/autoload.php';

    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('Users');

    $header = ['ID', 'First Name', 'Last Name', 'Middle Name', 'Suffix', 'DOB', 'Gender', 'Mobile Number', 'Tel Number', 'Email', 'House Number', 'Street', 'Barangay'];
    $sheet->fromArray($header, NULL, 'A1');

    $sql = "SELECT id, first_name, last_name, middle_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, barangay FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $rowIndex = 2;
        while ($row = $result->fetch_assoc()) {
            $sheet->fromArray($row, NULL, 'A' . $rowIndex++);
        }
    }

    $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit();
}
if (isset($_POST['export_pdf'])) {

    $mpdf = new \Mpdf\Mpdf();
    $html = '<h1>Users</h1>';
    $html .= '<table border="1" style="width:100%;border-collapse:collapse;">';
    $html .= '<thead><tr>';
    $html .= '<th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Email</th><th>Suffix</th><th>DOB</th><th>Gender</th><th>Mobile Number</th><th>Tel Number</th><th>House Number</th><th>Street</th><th>Barangay</th>';
    $html .= '</tr></thead><tbody>';

    $sql = "SELECT id, first_name, last_name, middle_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, barangay FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html .= '<tr>';
            $html .= '<td>' . $row['id'] . '</td>';
            $html .= '<td>' . $row['first_name'] . '</td>';
            $html .= '<td>' . $row['middle_name'] . '</td>';
            $html .= '<td>' . $row['last_name'] . '</td>';
            $html .= '<td>' . $row['email'] . '</td>';
            $html .= '<td>' . $row['suffix'] . '</td>';
            $html .= '<td>' . $row['dob'] . '</td>';
            $html .= '<td>' . $row['gender'] . '</td>';
            $html .= '<td>' . $row['mobile_number'] . '</td>';
            $html .= '<td>' . $row['tel_number'] . '</td>';
            $html .= '<td>' . $row['house_number'] . '</td>';
            $html .= '<td>' . $row['street'] . '</td>';
            $html .= '<td>' . $row['barangay'] . '</td>';
            $html .= '</tr>';
        }
    } else {
        $html .= '<tr><td colspan="13">No users found</td></tr>';
    }
    $html .= '</tbody></table>';

    $mpdf->WriteHTML($html);
    $mpdf->Output('users.pdf', 'D');
    exit();
}
// USERS TABLE
// Fetch users from database
$sql = "SELECT id, name, email FROM users"; // Adjust the table and column names as needed
$result = $conn->query($sql);

// Get user ID from request
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = $_GET['id'];

    // Prepare SQL to delete a record
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {           
        $_SESSION['message'] = "Record deleted successfully";
    } else {
        $_SESSION['message'] = "Error deleting record: {$stmt->error}";
    }

    $stmt->close();  
    header("Location: userscontent.php");
    exit();

}

// $conn->close(); // Commented out to prevent closing the connection prematurely
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Content</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>
<h2>Users Section</h2>

<?php
if (isset($_SESSION['message'])) {
    echo '<div class="alert alert-info">' . $_SESSION['message'] . '</div>';
    unset($_SESSION['message']);
}
?>

<table id="usersTable" class="display">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Suffix</th>
            <th scope="col">DOB</th>
            <th scope="col">Gender</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Tel Number</th>
            <th scope="col">House Number</th>
            <th scope="col">Street</th>
            <th scope="col">Barangay</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT id, first_name, last_name, middle_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, barangay FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<th scope='row'>" . $row["id"] . "</th>";
                echo "<td>" . $row["first_name"] . "</td>";
                echo "<td>" . $row["middle_name"] . "</td>";
                echo "<td>" . $row["last_name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["suffix"] . "</td>";
                echo "<td>" . $row["dob"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["mobile_number"] . "</td>";
                echo "<td>" . $row["tel_number"] . "</td>";
                echo "<td>" . $row["house_number"] . "</td>";
                echo "<td>" . $row["street"] . "</td>";
                echo "<td>" . $row["barangay"] . "</td>";
                echo "<td><a href='editUserAdmin.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Edit</a> ";
                echo "<a href='userscontent.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='14'>No users found</td></tr>";
        }
        ?>
    </tbody>
</table>
<script>
$(document).ready(function() {
    $('#usersTable').DataTable();
});
</script>
</body>
</html>

<!-- Removed duplicate Download Excel button -->
<form method="post">
    <button type="submit" name="export_excel" class="btn btn-success">Download Excel</button>
    <button type="submit" name="export_pdf" class="btn btn-danger">Download PDF</button>
</form>
