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
    $sql = "SELECT id, firstName, middleName, lastName, email, dob, selectedGender, mobile1, tele, lotNumber, street, barangay FROM SoloParentApplication";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html .= '<tr>';
            $html .= '<td>' . $row['id'] . '</td>';
            $html .= '<td>' . $row['firstName'] . '</td>';
            $html .= '<td>' . $row['middleName'] . '</td>';
            $html .= '<td>' . $row['lastName'] . '</td>';
            $html .= '<td>' . $row['email'] . '</td>';
            $html .= '<td>' . $row['dob'] . '</td>';
            $html .= '<td>' . $row['selectedGender'] . '</td>';
            $html .= '<td>' . $row['mobile1'] . '</td>';
            $html .= '<td>' . $row['tele'] . '</td>';
            $html .= '<td>' . $row['lotNumber'] . '</td>';
            $html .= '<td>' . $row['street'] . '</td>';
            $html .= '<td>' . $row['barangay'] . '</td>';
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
$sql = "SELECT id, precinct, firstName, middleName, lastName, selectedGender, civilStatus, dob, birthPlace, religion, bloodType, tele AS tel_number, mobile1 AS mobile_number, email, monthlyIncome AS monthly_income, officeAddress AS office_address, occupation, tinNumber AS tin_number, sssNumber AS sss_number, gsisNumber AS gsis_number, yearsOfStay AS years_of_stay, monthsOfStay AS months_of_stay, lotNumber AS lot_number, blkNumber AS block_number, street, barangay, lastName FROM SoloParentApplication";
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">




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
            <form method="get" action="soloparentcontent.php">
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
        $sql = "SELECT id, precinct, firstName, middleName, lastName, selectedGender, civilStatus, dob, birthPlace, religion, bloodType, tele AS tel_number, mobile1 AS mobile_number, email, monthlyIncome AS monthly_income, officeAddress AS office_address, occupation, tinNumber AS tin_number, sssNumber AS sss_number, gsisNumber AS gsis_number, yearsOfStay AS years_of_stay, monthsOfStay AS months_of_stay, lotNumber AS lot_number, blkNumber AS block_number, street, barangay, lastName FROM SoloParentApplication";
        if ($search) {
            $sql .= " WHERE 
                firstName LIKE '%$search%' OR 
                middleName LIKE '%$search%' OR 
                lastName LIKE '%$search%' OR 
                selectedGender LIKE '%$search%' OR 
                civilStatus LIKE '%$search%' OR 
                dob LIKE '%$search%' OR 
                birthPlace LIKE '%$search%' OR 
                religion LIKE '%$search%' OR 
                bloodType LIKE '%$search%' OR 
                tele LIKE '%$search%' OR 
                mobile1 LIKE '%$search%' OR 
                email LIKE '%$search%' OR 
                monthlyIncome LIKE '%$search%' OR 
                officeAddress LIKE '%$search%' OR 
                occupation LIKE '%$search%' OR 
                tinNumber LIKE '%$search%' OR 
                sssNumber LIKE '%$search%' OR 
                gsisNumber LIKE '%$search%' OR 
                yearsOfStay LIKE '%$search%' OR 
                monthsOfStay LIKE '%$search%' OR 
                lotNumber LIKE '%$search%' OR 
                blkNumber LIKE '%$search%' OR 
                street LIKE '%$search%' OR 
                barangay LIKE '%$search%' OR 
                lastName LIKE '%$search%'";
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
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="1" checked> Precinct</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="2" checked> First Name</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="3" checked> Middle Name</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="4" checked> Last Name</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="5" checked> Gender</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="6" checked> Civil Status</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="7" checked> DOB</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="8" checked> Birth Place</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="9" checked> Religion</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="10" checked> Blood Type</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="11" checked> Tel Number</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="12" checked> Mobile Number</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="13" checked> Email</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="14" checked> Monthly Income</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="15" checked> Problem/Needs</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="16" checked> Source Of Income</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="17" checked> Company Name/Employer Name</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="18" checked> Office Address</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="19" checked> Occupation</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="20" checked> TIN Number</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="21" checked> SSS Number</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="22" checked> GSIS Number</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="23" checked> Years of Stay</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="24" checked> Months of Stay</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="25" checked> Lot Number</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="26" checked> Block Number</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="27" checked> Street</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="28" checked> Barangay</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="29" checked> 4 P's Member</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="30" checked> 4 P's ID</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="31" checked> PhilHealth Member</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="32" checked> PhilHealth ID</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="33" checked> Emergency Contact Name</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="34" checked> Emergency Contact Number</label>
    <label class="dropdown-item"><input type="checkbox" class="toggle-column" data-column="35" checked> Relationship</label>
</div>
        </div>
    </div>
</div>
<div class="table-container" style="margin-left:20px;">
<table id="usersTable" class="table">
    <thead>
        <tr id="headerRow">
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
        // Fetch rows from the database
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td data-column='precinct'>" . $row["precinct"] . "</td>";
            echo "<td data-column='firstName'>" . $row["firstName"] . "</td>";
            echo "<td data-column='middleName'>" . $row["middleName"] . "</td>";
            echo "<td data-column='lastName'>" . $row["lastName"] . "</td>";
            echo "<td data-column='selectedGender'>" . $row["selectedGender"] . "</td>";
            echo "<td data-column='civilStatus'>" . $row["civilStatus"] . "</td>";
            echo "<td data-column='dob'>" . $row["dob"] . "</td>";
            echo "<td data-column='birthPlace'>" . (isset($row["birth_place"]) ? $row["birth_place"] : '') . "</td>";
            echo "<td data-column='religion'>" . $row["religion"] . "</td>";
            echo "<td data-column='bloodType'>" . (isset($row["blood_type"]) ? $row["blood_type"] : '') . "</td>";
            echo "<td data-column='telNumber'>" . $row["tel_number"] . "</td>";
            echo "<td data-column='mobileNumber'>" . $row["mobile_number"] . "</td>";
            echo "<td data-column='email'>" . $row["email"] . "</td>";
            echo "<td data-column='monthlyIncome'>" . $row["monthly_income"] . "</td>";
            echo "<td data-column='problemNeeds'>" . (isset($row["problem_needs"]) ? $row["problem_needs"] : '') . "</td>";
            echo "<td data-column='sourceOfIncome'>" . (isset($row["source_of_income"]) ? $row["source_of_income"] : '') . "</td>";
            echo "<td data-column='companyName'>" . (isset($row["company_name"]) ? $row["company_name"] : '') . "</td>";
            echo "<td data-column='officeAddress'>" . $row["office_address"] . "</td>";
            echo "<td data-column='occupation'>" . $row["occupation"] . "</td>";
            echo "<td data-column='tinNumber'>" . $row["tin_number"] . "</td>";
            echo "<td data-column='sssNumber'>" . $row["sss_number"] . "</td>";
            echo "<td data-column='gsisNumber'>" . $row["gsis_number"] . "</td>";
            echo "<td data-column='yearsOfStay'>" . $row["years_of_stay"] . "</td>";
            echo "<td data-column='monthsOfStay'>" . $row["months_of_stay"] . "</td>";
            echo "<td data-column='lotNumber'>" . $row["lot_number"] . "</td>";
            echo "<td data-column='blockNumber'>" . $row["block_number"] . "</td>";
            echo "<td data-column='street'>" . $row["street"] . "</td>";
            echo "<td data-column='barangay'>" . $row["barangay"] . "</td>";
            echo "<td data-column='fourPsMember'>" . (isset($row["four_ps_member"]) ? $row["four_ps_member"] : '') . "</td>";
            echo "<td data-column='fourPsID'>" . (isset($row["four_ps_id"]) ? $row["four_ps_id"] : '') . "</td>";
            echo "<td data-column='philhealthMember'>" . (isset($row["philhealth_member"]) ? $row["philhealth_member"] : '') . "</td>";
            echo "<td data-column='philhealthID'>" . (isset($row["philhealth_id"]) ? $row["philhealth_id"] : '') . "</td>";
            echo "<td data-column='emergencyContactName'>" . (isset($row["emergency_contact_name"]) ? $row["emergency_contact_name"] : '') . "</td>";
            echo "<td data-column='emergencyContactNumber'>" . (isset($row["emergency_contact_number"]) ? $row["emergency_contact_number"] : '') . "</td>";
            echo "<td data-column='relationship'>" . (isset($row["relationship"]) ? $row["relationship"] : '') . "</td>";
            echo "<td class='action-buttons'>
                    <form method='post' action='generate_file.php'>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <button type='submit' class='btn btn-success btn-sm'>generate</button>
                    </form>
                </td>";
            echo "</tr>";
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

    $(document).ready(function() {
    // Initialize DataTable with built-in search
    var table = $('#usersTable').DataTable();
});

// List of column headers and indices
const headers = [
        "Precinct", "First Name", "Middle Name", "Last Name", "Gender", "Civil Status", "DOB",
        "Birth Place", "Religion", "Blood Type", "Tel Number", "Mobile Number", "Email",
        "Monthly Income", "Problem/Needs", "Source Of Income", "Company Name/Employer Name",
        "Office Address", "Occupation", "TIN Number", "SSS Number", "GSIS Number", "Years of Stay",
        "Months of Stay", "Lot Number", "Block Number", "Street", "Barangay", "4 P's Member",
        "4 P's ID", "PhilHealth Member", "PhilHealth ID", "Emergency Contact Name",
        "Emergency Contact Number", "Relationship"
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
    })

            // Prevent dropdown from closing when clicking on label
            $('.dropdown-menu label').on('click', function(e) {
            e.stopPropagation();
        });
});
</script>



<?php 
include('dashboard_sidebar_end.php');
?>
