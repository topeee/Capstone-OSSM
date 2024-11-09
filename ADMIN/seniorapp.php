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

    $sql = "SELECT id, first_name, last_name, middle_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, barangay, is_role FROM users";
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
    $sql = "SELECT id, first_name, last_name, middle_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, barangay, is_admin FROM users";
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
            $html .= '<td>' . $row['role'] . '</td>';
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
$sql = "SELECT id, first_name, middle_name, last_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, barangay, is_admin FROM users"; // Adjust the table and column names as needed
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




<div class="container my-3">
    <!-- Top bar for search, filter, and column control -->
    <div class="d-flex justify-content-between align-items-center mb-2">
        <div class="container mt-3">
            <form method="get" action="seniorapp.php">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search by any field" name="search" value="<?php echo $_GET['search'] ?? ''; ?>">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <?php
        // Modify SQL query to include search functionality
        $search = $conn->real_escape_string(str_replace(' ', '%', $_GET['search'] ?? ''));
        $sql = "SELECT id, first_name, middle_name, last_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, barangay, is_admin FROM users";
        if ($search) {
            $sql .= " WHERE 
                first_name LIKE '%$search%' OR 
                middle_name LIKE '%$search%' OR 
                last_name LIKE '%$search%' OR 
                suffix LIKE '%$search%' OR 
                dob LIKE '%$search%' OR 
                gender LIKE '%$search%' OR 
                mobile_number LIKE '%$search%' OR 
                tel_number LIKE '%$search%' OR 
                email LIKE '%$search%' OR 
                house_number LIKE '%$search%' OR 
                street LIKE '%$search%' OR 
                barangay LIKE '%$search%' OR 
                is_admin LIKE '%$search%'";
        }
        $result = $conn->query($sql);
        ?>

        <!-- Filter and Columns button group -->
        <div class="btn-group">
            <button id="filterButton" class="btn btn-primary">Sort</button>
            <button id="columnToggle" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Columns
            </button>
            <div class="dropdown-menu dropdown-menu-right" style="column-count: 2;">
                <label class="dropdown-item"><input type="checkbox" id="select-all"> Select All</label>
                <label class="dropdown-item"><input type="checkbox" id="deselect-all"> Deselect All</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="1" checked> ID</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="2" checked> First Name</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="3" checked> Middle Name</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="4" checked> Last Name</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="5" checked> Suffix</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="6" checked> DOB</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="7" checked> Gender</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="8" checked> Mobile Number</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="9" checked> Tel Number</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="10" checked> Email</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="11" checked> House Number</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="12" checked> Street</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="13" checked> Barangay</label>
                <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="14" checked> Role</label>
            </div>
        </div>
    </div>
</div>

<div class="table-container" style="margin-left:10px; margin-right:10px; ">
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
                <th scope="col">Role</th>
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

<script>
$(document).ready(function() {
    // Initialize DataTable with built-in search
    var table = $('#usersTable').DataTable();

    // List of column headers and indices
    const headers = [
        "ID", "First Name", "Middle Name", "Last Name", "Suffix", "DOB", "Gender",
        "Mobile Number", "Tel Number", "Email", "House Number", "Street", "Barangay", "Role"
    ];

    // Map headers to column indices
    const headerIndexMap = headers.reduce((map, header, index) => {
        map[header.toLowerCase()] = index;
        return map;
    }, {});

    let isSortedAlphabetically = false;
    const headerRow = document.getElementById('headerRow');
    const originalHeaderOrder = Array.from(headerRow.children); // Store original header order
    
    document.getElementById('filterButton').addEventListener('click', function() {
        const headers = Array.from(headerRow.children); // Header cells
        const rows = Array.from(document.querySelectorAll('#usersTable tbody tr')); // Table rows

        if (!isSortedAlphabetically) {
            // Sort headers and data columns alphabetically
            headers.sort((a, b) => {
                const textA = a.textContent.trim().toLowerCase();
                const textB = b.textContent.trim().toLowerCase();
                return textA.localeCompare(textB);
            });
        } else {
            // Restore the original order
            headers.splice(0, headers.length, ...originalHeaderOrder);
        }

        // Rearrange the data columns to match the header sorting
        rows.forEach(row => {
            const cells = Array.from(row.children);
            const sortedCells = headers.map(header => {
                const index = Array.from(headerRow.children).indexOf(header);
                return cells[index];
            });
            row.innerHTML = ''; // Clear current row cells
            sortedCells.forEach(cell => row.appendChild(cell)); // Append sorted cells
        });

        // Clear the header row and append the sorted/restored headers
        headerRow.innerHTML = '';
        headers.forEach(header => headerRow.appendChild(header));

        // Toggle sorting state
        isSortedAlphabetically = !isSortedAlphabetically;
    });

    // JavaScript to toggle visibility of table columns
    document.querySelectorAll('.toggle-column').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const column = this.getAttribute('data-column');
            const isChecked = this.checked;

            // Toggle visibility of cells in the specified column
            document.querySelectorAll(`table tr > *:nth-child(${column})`).forEach(cell => {
                cell.style.display = isChecked ? "" : "none";
            });
        });
    });

    // Select All functionality
    document.getElementById('select-all').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.toggle-column');
        checkboxes.forEach(checkbox => {
            checkbox.checked = true;

            // Show all columns
            const column = checkbox.getAttribute('data-column');
            document.querySelectorAll(`table tr > *:nth-child(${column})`).forEach(cell => {
                cell.style.display = "";
            });
        });
        document.getElementById('deselect-all').checked = false;
    });

    // Deselect All functionality
    document.getElementById('deselect-all').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.toggle-column');
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;

            // Hide all columns
            const column = checkbox.getAttribute('data-column');
            document.querySelectorAll(`table tr > *:nth-child(${column})`).forEach(cell => {
                cell.style.display = "none";
            });
        });
        document.getElementById('select-all').checked = false;
    });

    // Ensure Select/Deselect All only affect their respective states
    document.querySelectorAll('.toggle-column').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            document.getElementById('select-all').checked = false;
            document.getElementById('deselect-all').checked = false;
        });
    });
});
</script>

<?php   
include('dashboard_sidebar_end.php');
?>