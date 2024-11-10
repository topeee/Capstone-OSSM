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

    $header = ['ID', 'First Name', 'Middle Name', 'Last Name', 'Birth Place', 'Birthdate', 'Age', 'Gender', 'Civil Status', 'Blood Type', 'Nationality', 'Religion', 'Email', 'Telephone Number', 'Cellphone Number', 'Address'];
    $sheet->fromArray($header, NULL, 'A1');

    $sql = "SELECT `id`, `first_name`, `middle_name`, `last_name`, `birth_place`, `birthdate`, `age`, `gender`, `civil_status`, `blood_type`, `nationality`, `religion`, `email`, `telephone_number`, `cellphone_number`, `address` FROM `ScholarshipPersonalInformation` WHERE 1";
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
    $html .= '<th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Birth Place</th><th>Birthdate</th><th>Age</th><th>Gender</th><th>Civil Status</th><th>Blood Type</th><th>Nationality</th><th>Religion</th><th>Email</th><th>Telephone Number</th><th>Cellphone Number</th><th>Address</th>';
    $html .= '</tr></thead><tbody>';
    $html .= '<th>Role</th>';
    $sql = "SELECT `id`, `first_name`, `middle_name`, `last_name`, `birth_place`, `birthdate`, `age`, `gender`, `civil_status`, `blood_type`, `nationality`, `religion`, `email`, `telephone_number`, `cellphone_number`, `address` FROM `ScholarshipPersonalInformation` WHERE 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html .= '<tr>';
            $html .= '<td>' . $row['id'] . '</td>';
            $html .= '<td>' . $row['first_name'] . '</td>';
            $html .= '<td>' . $row['middle_name'] . '</td>';
            $html .= '<td>' . $row['last_name'] . '</td>';
            $html .= '<td>' . $row['birth_place'] . '</td>';
            $html .= '<td>' . $row['birthdate'] . '</td>';
            $html .= '<td>' . $row['age'] . '</td>';
            $html .= '<td>' . $row['gender'] . '</td>';
            $html .= '<td>' . $row['civil_status'] . '</td>';
            $html .= '<td>' . $row['blood_type'] . '</td>';
            $html .= '<td>' . $row['nationality'] . '</td>';
            $html .= '<td>' . $row['religion'] . '</td>';
            $html .= '<td>' . $row['email'] . '</td>';
            $html .= '<td>' . $row['telephone_number'] . '</td>';
            $html .= '<td>' . $row['cellphone_number'] . '</td>';
            $html .= '<td>' . $row['address'] . '</td>';
            $html .= '</tr>';
        }
    } else {
        $html .= '<tr><td colspan="16">No Data found</td></tr>';
    }
    $html .= '</tbody></table>';

    $mpdf->WriteHTML($html);
    $mpdf->Output('users.pdf', 'D');
    exit();
}

// USERS TABLE
// Fetch users from database
$sql = "SELECT `id`, `first_name`, `middle_name`, `last_name`, `birth_place`, `birthdate`, `age`, `gender`, `civil_status`, `blood_type`, `nationality`, `religion`, `email`, `telephone_number`, `cellphone_number`, `address` FROM `ScholarshipPersonalInformation` WHERE 1";
$result = $conn->query($sql);

// Get user ID from request
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = $_GET['id'];

    // Prepare SQL to delete a record
    $stmt = $conn->prepare("DELETE FROM ScholarshipPersonalInformation WHERE id = ?");
    $stmt->bind_param("i", $user_id);

    $_SESSION['message'] = $stmt->execute() ? "Record deleted successfully" : "Error deleting record: {$stmt->error}";

    $stmt->close();
    header("Location: userscontent.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['column']) && isset($_POST['value'])) {
    $id = $_POST['id'];
    $column = $_POST['column'];
    $value = $_POST['value'];

    $stmt = $conn->prepare("UPDATE ScholarshipPersonalInformation SET $column = ? WHERE id = ?");
    $stmt->bind_param('si', $value, $id);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error';
    }

    $stmt->close();
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

    /* Hover effects for
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
        width: 90%;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
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
include 'dashboard_sidebar_start.php';
?>
<div class="container mt-3 text-center">
    <h2>Scholarship Application Users</h2>
</div>

<!-- Search Form -->
<div class="container mt-3">
    <form method="get" action="scholarshipapp.php">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search by First Name" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>

<?php
// Search functionality
$search = isset($_GET['search']) ? $_GET['search'] : '';
$sql = "SELECT `id`, `first_name`, `middle_name`, `last_name`, `birth_place`, `birthdate`, `age`, `gender`, `civil_status`, `blood_type`, `nationality`, `religion`, `email`, `telephone_number`, `cellphone_number`, `address` FROM `ScholarshipPersonalInformation` WHERE `first_name` LIKE '%$search%'";
$result = $conn->query($sql);
?>

<!-- Sort Button -->
<div class="container mt-3">
    <form method="get" action="scholarshipapp.php">
        <div class="input-group mb-3">
            <select class="form-control" name="sort">
                <option value="first_name">Sort by First Name</option>
                <option value="last_name">Sort by Last Name</option>
                <option value="birthdate">Sort by Birthdate</option>
            </select>
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Sort</button>
            </div>
        </div>
    </form>
</div>

<?php
// Sort functionality
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'first_name';
$sql .= " ORDER BY `$sort`";
$result = $conn->query($sql);
?>



<div class="table-container">
    <table id="usersTable" class="display">
        <thead>
            <tr>
<th>ID</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Birth Place</th>
<th>Birthdate</th>
<th>Age</th>
<th>Gender</th>
<th>Civil Status</th>
<th>Blood Type</th>
<th>Nationality</th>
<th>Religion</th>
<th>Email</th>
<th>Telephone Number</th>
<th>Cellphone Number</th>
<th>Address</th>
            </tr>
        </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['first_name'] . '</td>';
                echo '<td>' . $row['middle_name'] . '</td>';
                echo '<td>' . $row['last_name'] . '</td>';
                echo '<td>' . $row['birth_place'] . '</td>';
                echo '<td>' . $row['birthdate'] . '</td>';
                echo '<td>' . $row['age'] . '</td>';
                echo '<td>' . $row['gender'] . '</td>';
                echo '<td>' . $row['civil_status'] . '</td>';
                echo '<td>' . $row['blood_type'] . '</td>';
                echo '<td>' . $row['nationality'] . '</td>';
                echo '<td>' . $row['religion'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['telephone_number'] . '</td>';
                echo '<td>' . $row['cellphone_number'] . '</td>';
                echo '<td>' . $row['address'] . '</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="16">No users found</td></tr>';
        }
        ?>
    </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#usersTable').DataTable();

        $('#usersTable').on('blur', 'td[contenteditable=true]', function() {
            var id = $(this).data('id');
            var column = $(this).data('column');
            var value = $(this).text();

            $.ajax({
                url: 'update_user.php',
                method: 'POST',
                data: {id: id, column: column, value: value},
                success: function(response) {
                    if(response == 'success') {
                        alert('User updated successfully');
                    } else {
                        alert('Failed to update user');
                    }
                }
            });
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
include 'dashboard_sidebar_end.php';
?>
