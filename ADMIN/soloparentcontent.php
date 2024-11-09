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

    $header = ['ID', 'Precinct', 'First Name', 'Middle Name', 'Last Name', 'Religion', 'DOB', 'Blood Type', 'Birth Place', 'Civil Status', 'Tele', 'Mobile1', 'Email', 'Lot Number', 'Blk Number', 'Street', 'Barangay', 'Years Of Stay', 'Months Of Stay', 'Employer', 'Office Address', 'Occupation', 'Monthly Income', 'TIN Number', 'SSS Number', 'GSIS Number', 'Emergency First Name', 'Emergency Middle Name', 'Emergency Last Name', 'Emergency Contact', 'Emergency Relationship', 'Emergency Address', 'Selected Gender', 'Selected Status', 'Selected Family Resource', 'Selected Classification', 'Selected Four Ps Member', 'Selected PhilHealth Member', 'Selected Problems', 'Selected Needs'];
    $sheet->fromArray($header, NULL, 'A1');

    $sql = "SELECT id, precinct, firstName, middleName, lastName, religion, dob, bloodType, birthPlace, civilStatus, tele, mobile1, email, lotNumber, blkNumber, street, barangay, yearsOfStay, monthsOfStay, employer, officeAddress, occupation, monthlyIncome, tinNumber, sssNumber, gsisNumber, emergencyFirstName, emergencyMiddleName, emergencyLastName, emergencyContact, emergencyRelationship, emergencyAddress, selectedGender, selectedStatus, selectedFamilyResource, selectedClassification, selectedFourPsMember, selectedPhilHealthMember, selectedProblems, selectedNeeds, familyData FROM SoloParentApplication";

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
    $html .= '<th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Email</th><th>Suffix</th><th>DOB</th><th>Gender</th><th>Mobile Number</th><th>Tel Number</th><th>House Number</th><th>Street</th><th>Barangay</th><th>Role</th>';
    $html .= '</tr></thead><tbody>';
    $html .= '<th>Role</th>';
    $sql = "SELECT id, precinct, firstName, middleName, lastName, religion, dob, bloodType, birthPlace, civilStatus, tele, mobile1, email, lotNumber, blkNumber, street, barangay, yearsOfStay, monthsOfStay, employer, officeAddress, occupation, monthlyIncome, tinNumber, sssNumber, gsisNumber, emergencyFirstName, emergencyMiddleName, emergencyLastName, emergencyContact, emergencyRelationship, emergencyAddress, selectedGender, selectedStatus, selectedFamilyResource, selectedClassification, selectedFourPsMember, selectedPhilHealthMember, selectedProblems, selectedNeeds, familyData FROM SoloParentApplication";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html .= '<tr>';
            $html .= '<td>' . $row['precinct'] . '</td>';
            $html .= '<td>' . $row['firstName'] . '</td>';
            $html .= '<td>' . $row['middleName'] . '</td>';
            $html .= '<td>' . $row['lastName'] . '</td>';
            $html .= '<td>' . $row['selectedGender'] . '</td>';
            $html .= '<td>' . $row['civilStatus'] . '</td>';
            $html .= '<td>' . $row['dob'] . '</td>';
            $html .= '<td>' . $row['birthPlace'] . '</td>';
            $html .= '<td>' . $row['religion'] . '</td>';
            $html .= '<td>' . $row['bloodType'] . '</td>';
            $html .= '<td>' . $row['tel_number'] . '</td>';
            $html .= '<td>' . $row['mobile_number'] . '</td>';
            $html .= '<td>' . $row['email'] . '</td>';
            $html .= '<td>' . $row['selectedClassification'] . '</td>';
            $html .= '<td>' . $row['monthly_income'] . '</td>';
            $html .= '<td>' . $row['selectedNeeds'] . '</td>';
            $html .= '<td>' . $row['selectedFamilyResource'] . '</td>';
            $html .= '<td>' . $row['employer'] . '</td>';
            $html .= '<td>' . $row['office_address'] . '</td>';
            $html .= '<td>' . $row['occupation'] . '</td>';
            $html .= '<td>' . $row['tin_number'] . '</td>';
            $html .= '<td>' . $row['sss_number'] . '</td>';
            $html .= '<td>' . $row['gsis_number'] . '</td>';
            $html .= '<td>' . $row['years_of_stay'] . '</td>';
            $html .= '<td>' . $row['months_of_stay'] . '</td>';
            $html .= '<td>' . $row['lotNumber'] . '</td>';
            $html .= '<td>' . $row['blkNumber'] . '</td>';
            $html .= '<td>' . $row['street'] . '</td>';
            $html .= '<td>' . $row['barangay'] . '</td>';
            $html .= '<td>' . $row['selectedFourPsMember'] . '</td>';
            $html .= '<td>' . $row['familyData'] . '</td>';
            $html .= '<td>' . $row['selectedPhilHealthMember'] . '</td>';
            $html .= '<td>' . $row['familyData'] . '</td>';
            $html .= '<td>' . $row['emergencyFirstName'] . '</td>';
            $html .= '<td>' . $row['emergencyContact'] . '</td>';
            $html .= '<td>' . $row['emergencyRelationship'] . '</td>';
            $html .= '<td>' . $row['emergencyAddress'] . '</td>';  
            $html .= '</tr>';
        }
    } else {
        $html .= '<tr><td colspan="14">No users found</td></tr>';
    }
    $html .= '</tbody></table>';

    $mpdf->WriteHTML($html);
    $mpdf->Output('users.pdf', 'D');
    exit();
}

// USERS TABLE
// Fetch users from database
$sql = "SELECT id, precinct, firstName, middleName, lastName, selectedGender, civilStatus, dob, birthPlace, religion, bloodType, tele AS tel_number, mobile1 AS mobile_number, email, monthlyIncome AS monthly_income, officeAddress AS office_address, occupation, tinNumber AS tin_number, sssNumber AS sss_number, gsisNumber AS gsis_number, yearsOfStay AS years_of_stay, monthsOfStay AS months_of_stay, lotNumber AS lot_number, blkNumber AS block_number, street, barangay FROM SoloParentApplication";
$result = $conn->query($sql);

// Get user ID from request
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = $_GET['id'];

    // Prepare SQL to delete a record
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);

    $_SESSION['message'] = $stmt->execute() ? "Record deleted successfully" : "Error deleting record: {$stmt->error}";

    $stmt->close();
    header("Location: userscontent.php");
    exit();
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<style>
    /* Custom Table Styling */
    table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
        overflow-x: auto; /* Enables horizontal scrolling */
        display: block; /* Make table block to allow scrolling */
    }

    /* Table headers */
    th {
        background-color: #2196f3; /* Blue color for the header */
        color: white;
        font-weight: bold;
        text-align: center;
        padding: 12px;
        border-right: 1px solid #ddd; /* Right border for columns */
    }

    /* Table rows */
    td {
        text-align: center;
        padding: 12px;
        border-right: 1px solid #ddd; /* Right border for columns */
    }

    /* Row hover effect */
    tr:hover {
        background-color: #f1f1f1;
    }

    /* Table borders */
    .dataTable, .dataTable td, .dataTable th {
        border: 1px solid #ddd;
    }

    /* Alternate row colors */
    tr:nth-child(even) {
        background-color: #fafafa;
    }

    tr:nth-child(odd) {
        background-color: #ffffff;
    }

    /* Action buttons */
    .btn-primary {
        background-color: #2196f3;
        border-color: #2196f3;
    }

    .btn-danger {
        background-color: #f44336;
        border-color: #f44336;
    }

    .btn-sm {
        padding: 5px 10px;
        font-size: 12px;
    }

    /* Hover effects for buttons */
    .btn:hover {
        opacity: 0.9;
    }

    /* Button container */
    .action-buttons {
        display: flex;
        justify-content: space-around;
        margin: 10px 0;
    }

    /* Horizontal scroll for table */
    .table-container {
        overflow-x: auto;
        width: 100%;
    }

    .button-container {
        display: flex;
        justify-content: center; /* Center-aligns the buttons */
  
    }

    /* Optional: Adds spacing between buttons */
    .button-container button {
        margin: 0 10px;
    }
</style>

<?php 
include('dashboard_sidebar_start.php');
?>

<div class="table-container">
    <table id="usersTable" class="display">
        <thead>
            <tr>
                <th scope="col">Precinct</th>   
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Civil Status</th>
                <th scope="col">DOB</th>
                <th scope="col">Birth Place</th>
                <th scope="col">Religion</th>
                <th scope="col">Blood Type</th>
                <th scope="col">Tel Number</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Email</th>
                <th scope="col">Monthly Income</th>
                <th scope="col">Problem/Needs</th>
                <th scope="col">Source Of Income</th>
                <th scope="col">Company Name/Employer Name</th>
                <th scope="col">Office Address</th>
                <th scope="col">Occupation</th>
                <th scope="col">TIN Number</th>
                <th scope="col">SSS Number</th>
                <th scope="col">GSIS Number</th>
                <th scope="col">Years of Stay</th>
                <th scope="col">Months of Stay</th>
                <th scope="col">Lot Number</th>
                <th scope="col">Block Number</th>
                <th scope="col">Street</th>
                <th scope="col">Barangay</th>
                <th scope="col">4 P's Member</th>
                <th scope="col">4 P's ID</th>
                <th scope="col">PhilHealth Member</th>
                <th scope="col">PhilHealth ID</th>
                <th scope="col">Emergency Contact Name</th>
                <th scope="col">Emergency Contact Number</th>
                <th scope="col">Relationship</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>" . $row["precinct"] . "</td>";
                    echo "<td>" . $row["firstName"] . "</td>";
                    echo "<td>" . $row["middleName"] . "</td>";
                    echo "<td>". $row["lastName"] . "</td>";
                    echo "<td>". $row["selectedGender"] . "</td>";
                    echo "<td>". $row["civilStatus"] ."</td>";
                    echo "<td>" . $row["dob"] . "</td>";
                    echo "<td>" . (isset($row["birth_place"]) ? $row["birth_place"] : '') . "</td>";
                    echo "<td>" . $row["religion"] . "</td>";
                    echo "<td>" . (isset($row["blood_type"]) ? $row["blood_type"] : '') . "</td>";
                    echo "<td>" . $row["tel_number"] . "</td>";
                    echo "<td>" . $row["mobile_number"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["monthly_income"] . "</td>";
                    echo "<td>" . (isset($row["problem_needs"]) ? $row["problem_needs"] : '') . "</td>";
                    echo "<td>" . (isset($row["source_of_income"]) ? $row["source_of_income"] : '') . "</td>";
                    echo "<td>" . (isset($row["company_name"]) ? $row["company_name"] : '') . "</td>";
                    echo "<td>" . $row["office_address"] . "</td>";
                    echo "<td>" . $row["occupation"] . "</td>";
                    echo "<td>" . $row["tin_number"] . "</td>";
                    echo "<td>" . $row["sss_number"] . "</td>";
                    echo "<td>" . $row["gsis_number"] . "</td>";
                    echo "<td>" . $row["years_of_stay"] . "</td>";
                    echo "<td>" . $row["months_of_stay"] . "</td>";
                    echo "<td>" . $row["lot_number"] . "</td>";
                    echo "<td>" . $row["block_number"] . "</td>";
                    echo "<td>" . $row["street"] . "</td>";
                    echo "<td>" . $row["barangay"] . "</td>";
                    echo "<td>" . (isset($row["four_ps_member"]) ? $row["four_ps_member"] : '') . "</td>";
                    echo "<td>" . (isset($row["four_ps_id"]) ? $row["four_ps_id"] : '') . "</td>";
                    echo "<td>" . (isset($row["philhealth_member"]) ? $row["philhealth_member"] : '') . "</td>";
                    echo "<td>" . (isset($row["philhealth_id"]) ? $row["philhealth_id"] : '') . "</td>";
                    echo "<td>" . (isset($row["emergency_contact_name"]) ? $row["emergency_contact_name"] : '') . "</td>";
                    echo "<td>" . (isset($row["emergency_contact_number"]) ? $row["emergency_contact_number"] : '') . "</td>";
                    echo "<td>" . (isset($row["relationship"]) ? $row["relationship"] : '') . "</td>";
                    echo "<td class='action-buttons'>
                            <a href='editUserAdmin.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Edit</a>
                            <a href='userscontent.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Delete</a>
                        </td>";
                echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='14'>No users found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script>
$(document).ready(function() {
    $('#usersTable').DataTable({
        "paging": true, // Enables pagination
        "lengthChange": false, // Disables length change
        "searching": true, // Enables search
        "ordering": true, // Enables column sorting
        "info": true, // Shows info about the table
        "autoWidth": false // Disables auto width for columns
    });
});
</script>

<!-- Button container for centering -->
<div class="button-container">
    <form method="post">
        <button type="submit" name="export_excel" class="btn btn-success">Download Excel</button>
        <button type="submit" name="export_pdf" class="btn btn-danger">Download PDF</button>
    </form>
</div>

<?php 
include('dashboard_sidebar_end.php');
?>
