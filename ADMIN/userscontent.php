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

    $header = ['ID', 'First Name', 'Last Name', 'Middle Name', 'Suffix', 'DOB', 'Gender', 'Mobile Number', 'Tel Number', 'Email', 'House Number', 'Street', 'Barangay', 'Role'];
    $sheet->fromArray($header, NULL, 'A1');

    $sql = "SELECT id, first_name, middle_name, last_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, barangay, is_admin FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $rowIndex = 2;
        while ($row = $result->fetch_assoc()) {
            $sheet->fromArray(array_values($row), NULL, 'A' . $rowIndex++);
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
    $sql = "SELECT id, first_name, middle_name, last_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, barangay, is_admin, picture, verify_status FROM users";
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
            $html .= '<td>' . ($row['is_admin'] == 1 ? 'Admin' : 'User') . '</td>';
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
$sql = "SELECT id, first_name, middle_name, last_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, barangay, is_admin, picture, verify_status FROM users";
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
<link rel="shortcut icon" href="assets/images/favicon.ico" />

<!-- DataTables -->
<!-- DataTables -->
<link
      href="assets/plugins/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/plugins/datatables/buttons.bootstrap4.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Responsive datatable examples -->
    <link
      href="assets/plugins/datatables/responsive.bootstrap4.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <link
      href="assets/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
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
<!-- Search form -->
<div class="container mt-3">
    <form method="get" action="userscontent.php">
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
$sql = "SELECT id, first_name, middle_name, last_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, barangay, is_admin, picture, verify_status FROM users";
if ($search) {
    $sql .= " WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR email LIKE '%$search%'";
}
$result = $conn->query($sql);
?>

<!-- Filter form -->
<div class="container mt-3">
    <form method="get" action="userscontent.php">
        <div class="input-group mb-3">
            <select class="form-control" name="filter_role">
                <option value="">Filter by Role</option>
                <option value="admin" <?php echo isset($_GET['filter_role']) && $_GET['filter_role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
                <option value="user" <?php echo isset($_GET['filter_role']) && $_GET['filter_role'] == 'user' ? 'selected' : ''; ?>>User</option>
            </select>
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Apply Filter</button>
            </div>
        </div>
    </form>
</div>
<!-- Sort form -->
<div class="container mt-3">
    <form method="get" action="userscontent.php">
        <div class="input-group mb-3">
            <select class="form-control" name="sort_order">
                <option value="">Sort by Name</option>
                <option value="asc" <?php echo isset($_GET['sort_order']) && $_GET['sort_order'] == 'asc' ? 'selected' : ''; ?>>Ascending</option>
                <option value="desc" <?php echo isset($_GET['sort_order']) && $_GET['sort_order'] == 'desc' ? 'selected' : ''; ?>>Descending</option>
            </select>
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Sort</button>
            </div>
        </div>
    </form>
</div>
<?php
// Modify SQL query to include sort functionality
$sort_order = isset($_GET['sort_order']) ? $conn->real_escape_string($_GET['sort_order']) : '';
if ($sort_order) {
    $sql .= " ORDER BY first_name " . ($sort_order == 'asc' ? 'ASC' : 'DESC');
}
$result = $conn->query($sql);
?>
<?php
// Modify SQL query to include filter functionality
$filter_role = isset($_GET['filter_role']) ? $conn->real_escape_string($_GET['filter_role']) : '';
if ($filter_role) {
    $sql .= $search ? " AND" : " WHERE";
    $sql .= " is_admin = '" . ($filter_role == 'admin' ? 1 : 0) . "'";
}
$result = $conn->query($sql);
?>

<div class="table-container">
    <table  >
                
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
                <th scope="col">Verify Status</th>
                <th scope="col">Role</th>
                <th scope="col">Picture</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
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
                echo "<td>" . ($row["is_admin"] == 1 ? 'Admin' : 'User') . "</td>";
                echo "<td>" . $row["verify_status"] . "</td>";
                $picturePath = 'uploads/' . $row["picture"];
                if (file_exists($picturePath) && !empty($row["picture"])) {
                    echo "<td><img src='$picturePath' width='50' height='50'></td>";
                } else {
                    echo "<td>No Image</td>";
                }
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
<script>
$(document).ready(function() {
    $('table').DataTable({
        "paging": true,
        "searching": false,
        "ordering": true,
        "info": true
    });
});
</script>

