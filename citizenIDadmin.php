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

    $header = ['First Name', 'Middle Name', 'Last Name', 'Suffix', 'Gender', 'Date Of Birth', 'Place Of Birth', 'Nationality', 'Social Welfare', 'Occupation', 'Religion', 'Civil Status', 'Telephone Number', 'Phone Number', 'Email', 'Work Phone', 'Mother First Name', 'Mother Middle Name', 'Mother Maiden Name', 'Mother Contact Number', 'Father First Name', 'Father Middle Name', 'Father Last Name', 'Father Contact Number', 'House Number', 'Street', 'Village Or Subdivision', 'Barangay', 'status'];
    $sheet->fromArray($header, NULL, 'A1');

    $sql = "SELECT FirstName, MiddleName, LastName, Suffix, Gender, DateOfBirth, PlaceOfBirth, Nationality, SocialWelfare, Occupation, Religion, CivilStatus, TelephoneNumber, PhoneNumber, Email, WorkPhone, MotherFirstName, MotherMiddleName, MotherMaidenName, MotherContactNum, FatherFirstName, FatherMiddleName, FatherLastName, FatherContactNum, HouseNumber, Street, VillageOrSubdivision, Barangay, status FROM CitizenID_Application_Form_BasicInfo WHERE 1";
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
    $sql = "SELECT `FirstName`, `MiddleName`, `LastName`, `Suffix`, `Gender`, `DateOfBirth`, `PlaceOfBirth`, `Nationality`, `SocialWelfare`, `Occupation`, `Religion`, `CivilStatus`, `TelephoneNumber`, `PhoneNumber`, `Email`, `WorkPhone`, `MotherFirstName`, `MotherMiddleName`, `MotherMaidenName`, `MotherContactNum`, `FatherFirstName`, `FatherMiddleName`, `FatherLastName`, `FatherContactNum`, `HouseNumber`, `Street`, `VillageOrSubdivision`, `Barangay`, `status` FROM `CitizenID_Application_Form_BasicInfo` WHERE 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html .= '<tr>';
            $html .= '<td>' . $row['FirstName'] . '</td>';
            $html .= '<td>' . $row['MiddleName'] . '</td>';
            $html .= '<td>' . $row['LastName'] . '</td>';
            $html .= '<td>' . $row['Suffix'] . '</td>';
            $html .= '<td>' . $row['Gender'] . '</td>';
            $html .= '<td>' . $row['DateOfBirth'] . '</td>';
            $html .= '<td>' . $row['PlaceOfBirth'] . '</td>';
            $html .= '<td>' . $row['Nationality'] . '</td>';
            $html .= '<td>' . $row['SocialWelfare'] . '</td>';
            $html .= '<td>' . $row['Occupation'] . '</td>';
            $html .= '<td>' . $row['Religion'] . '</td>';
            $html .= '<td>' . $row['CivilStatus'] . '</td>';
            $html .= '<td>' . $row['TelephoneNumber'] . '</td>';
            $html .= '<td>' . $row['PhoneNumber'] . '</td>';
            $html .= '<td>' . $row['Email'] . '</td>';
            $html .= '<td>' . $row['WorkPhone'] . '</td>';
            $html .= '<td>' . $row['MotherFirstName'] . '</td>';
            $html .= '<td>' . $row['MotherMiddleName'] . '</td>';
            $html .= '<td>' . $row['MotherMaidenName'] . '</td>';
            $html .= '<td>' . $row['MotherContactNum'] . '</td>';
            $html .= '<td>' . $row['FatherFirstName'] . '</td>';
            $html .= '<td>' . $row['FatherMiddleName'] . '</td>';
            $html .= '<td>' . $row['FatherLastName'] . '</td>';
            $html .= '<td>' . $row['FatherContactNum'] . '</td>';
            $html .= '<td>' . $row['HouseNumber'] . '</td>';
            $html .= '<td>' . $row['Street'] . '</td>';
            $html .= '<td>' . $row['VillageOrSubdivision'] . '</td>';
            $html .= '<td>' . $row['Barangay'] . '</td>';
            $html .= '<td>' . $row['status'] . '</td>';

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
$sql = "SELECT `id`, `FirstName`, `MiddleName`, `LastName`, `Suffix`, `Gender`, `DateOfBirth`, `PlaceOfBirth`, `Nationality`, `SocialWelfare`, `Occupation`, `Religion`, `CivilStatus`, `TelephoneNumber`, `PhoneNumber`, `Email`, `WorkPhone`, `MotherFirstName`, `MotherMiddleName`, `MotherMaidenName`, `MotherContactNum`, `FatherFirstName`, `FatherMiddleName`, `FatherLastName`, `FatherContactNum`, `HouseNumber`, `Street`, `VillageOrSubdivision`, `Barangay`, `status` FROM `CitizenID_Application_Form_BasicInfo` WHERE 1";

$result = $conn->query($sql);

// Get user ID from request
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = $_GET['id'];

    // Prepare SQL to delete a record
    $stmt = $conn->prepare("DELETE FROM CitizenID_Application_Form_BasicInfo WHERE id = ?");
    $stmt->bind_param("i", $user_id);

    $_SESSION['message'] = $stmt->execute() ? "Record deleted successfully" : "Error deleting record: {$stmt->error}";

    $stmt->close();
    header("Location: citizenIDadmin.php");
    exit();
}

// Update user status
if (isset($_POST['ticketId']) && isset($_POST['newStatus'])) {
    $ticketId = $_POST['ticketId'];
    $newStatus = $_POST['newStatus'];

    // Prepare SQL to update status
    $stmt = $conn->prepare("UPDATE CitizenID_Application_Form_BasicInfo SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $newStatus, $ticketId);

    $_SESSION['message'] = $stmt->execute() ? "Status updated successfully" : "Error updating status: {$stmt->error}";

    $stmt->close();
    header("Location: citizenIDadmin.php");
    exit();
}

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<style>
    /* Custom Table Styling */.table-container {
        overflow-x: auto;
        width: 90%;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
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

<div class="container mt-3">
    <h2 class="text-center">Citizen ID Administration</h2>
</div>

<!-- Search form -->
<div class="container mt-3">
    <form method="get" action="citizenIDadmin.php">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search by name or email" name="search" value="<?php echo $_GET['search'] ?? ''; ?>">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>

<?php
// Modify SQL query to include search functionality
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
$sql = "SELECT `id`, `FirstName`, `MiddleName`, `LastName`, `Suffix`, `Gender`, `DateOfBirth`, `PlaceOfBirth`, `Nationality`, `SocialWelfare`, `Occupation`, `Religion`, `CivilStatus`, `TelephoneNumber`, `PhoneNumber`, `Email`, `WorkPhone`, `MotherFirstName`, `MotherMiddleName`, `MotherMaidenName`, `MotherContactNum`, `FatherFirstName`, `FatherMiddleName`, `FatherLastName`, `FatherContactNum`, `HouseNumber`, `Street`, `VillageOrSubdivision`, `Barangay`, `status` FROM `CitizenID_Application_Form_BasicInfo` WHERE 1";
if ($search) {
    $sql .= " AND (FirstName LIKE '%$search%' OR LastName LIKE '%$search%' OR Email LIKE '%$search%')";
}
$result = $conn->query($sql);
?>
<div class="table-container">
    <table id="usersTable" class="display">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Suffix</th>
                <th scope="col">Gender</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Place Of Birth</th>
                <th scope="col">Nationality</th>
                <th scope="col">Social Welfare</th>
                <th scope="col">Occupation</th>
                <th scope="col">Religion</th>
                <th scope="col">Civil Status</th>
                <th scope="col">Telephone Number</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
                <th scope="col">Work Phone</th>
                <th scope="col">Mother First Name</th>
                <th scope="col">Mother Middle Name</th>
                <th scope="col">Mother Maiden Name</th>
                <th scope="col">Mother Contact Number</th>
                <th scope="col">Father First Name</th>
                <th scope="col">Father Middle Name</th>
                <th scope="col">Father Last Name</th>
                <th scope="col">Father Contact Number</th>
                <th scope="col">House Number</th>
                <th scope="col">Street</th>
                <th scope="col">Village Or Subdivision</th>
                <th scope="col">Barangay</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<th scope='row'>" . $row["id"] . "</th>";
                echo "<td>" . $row["FirstName"] . "</td>";
                echo "<td>" . $row["MiddleName"] . "</td>";
                echo "<td>" . $row["LastName"] . "</td>";
                echo "<td>" . $row["Suffix"] . "</td>";
                echo "<td>" . $row["Gender"] . "</td>";
                echo "<td>" . $row["DateOfBirth"] . "</td>";
                echo "<td>" . $row["PlaceOfBirth"] . "</td>";
                echo "<td>" . $row["Nationality"] . "</td>";
                echo "<td>" . $row["SocialWelfare"] . "</td>";
                echo "<td>" . $row["Occupation"] . "</td>";
                echo "<td>" . $row["Religion"] . "</td>";
                echo "<td>" . $row["CivilStatus"] . "</td>";
                echo "<td>" . $row["TelephoneNumber"] . "</td>";
                echo "<td>" . $row["PhoneNumber"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["WorkPhone"] . "</td>";
                echo "<td>" . $row["MotherFirstName"] . "</td>";
                echo "<td>" . $row["MotherMiddleName"] . "</td>";
                echo "<td>" . $row["MotherMaidenName"] . "</td>";
                echo "<td>" . $row["MotherContactNum"] . "</td>";
                echo "<td>" . $row["FatherFirstName"] . "</td>";
                echo "<td>" . $row["FatherMiddleName"] . "</td>";
                echo "<td>" . $row["FatherLastName"] . "</td>";
                echo "<td>" . $row["FatherContactNum"] . "</td>";
                echo "<td>" . $row["HouseNumber"] . "</td>";
                echo "<td>" . $row["Street"] . "</td>";
                echo "<td>" . $row["VillageOrSubdivision"] . "</td>";
                echo "<td>" . $row["Barangay"] . "</td>";
                echo "<td>" . $row["status"] . "</td>";
                echo "<td class='action-buttons'>
                        <button onclick='changeStatus(" . $row["id"] . ")' class='btn btn-warning btn-sm' data-toggle='modal' data-target='#changeStatusModal'>Change Status</button>
                        <a href='citizenIDadmin.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Delete</a>
                      </td>";
                echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='29'>No users found</td></tr>";
            }
            ?>

        </tbody>
    </table>
</div>
<!-- Change Status Modal -->
<div class="modal fade" id="changeStatusModal" tabindex="-1" aria-labelledby="changeStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeStatusModalLabel">Change Ticket Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="changeStatusForm">
                    <input type="hidden" id="ticketId" name="ticketId">
                    <div class="form-group">
                        <label for="newStatus">New Status</label>
                        <select id="newStatus" name="newStatus" class="form-control">
                            <option value="Release">Release</option>
                            <option value="To be release">To be release</option>
                            <option value="cancelled">Cancelled</option>
                            <option value="pending">Pending</option>
                        <option value="active">Active</option>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function changeStatus(ticketId) {
    document.getElementById('ticketId').value = ticketId;
}

document.getElementById('changeStatusForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var ticketId = document.getElementById('ticketId').value;
    var newStatus = document.getElementById('newStatus').value;

    $.ajax({
        url: 'citizenIDadmin.php',
        type: 'POST',
        data: {
            ticketId: ticketId,
            newStatus: newStatus
        },
        success: function(response) {
            location.reload();
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});
</script>

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
