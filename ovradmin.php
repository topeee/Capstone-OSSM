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
    $header = ['Ticket ID', 'Ticket No', 'Last Name', 'Violation Date', 'Violation Type', 'Fine Amount', 'Status'];
    $sheet->fromArray($header, NULL, 'A1');

    $sql = "SELECT id, first_name, last_name, email, dob, gender, mobile_number, house_number, street, barangay, is_admin FROM users";
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
    $html .= '<th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Email</th><th>DOB</th><th>Gender</th><th>Mobile Number</th><th>House Number</th><th>Street</th><th>Barangay</th><th>Role</th>';
    $html .= '</tr></thead><tbody>';
    $sql = "SELECT id, first_name, last_name, middle_name, dob, gender, mobile_number, email, house_number, street, barangay, is_admin AS Role FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html .= '<tr>';
            $html .= '<td>' . $row['id'] . '</td>';
            $html .= '<td>' . $row['first_name'] . '</td>';
            $html .= '<td>' . $row['middle_name'] . '</td>';
            $html .= '<td>' . $row['last_name'] . '</td>';
            $html .= '<td>' . $row['email'] . '</td>';
            $html .= '<td>' . $row['dob'] . '</td>';
            $html .= '<td>' . $row['gender'] . '</td>';
            $html .= '<td>' . $row['mobile_number'] . '</td>';
            $html .= '<td>' . $row['house_number'] . '</td>';
            $html .= '<td>' . $row['street'] . '</td>';
            $html .= '<td>' . $row['barangay'] . '</td>';
            $html .= '<td>' . ($row['Role'] == 1 ? 'Admin' : 'User') . '</td>';
            $html .= '</tr>';
        }
    } else {
        $html .= '<tr><td colspan="12">No users found</td></tr>';
    }
    $html .= '</tbody></table>';

    $mpdf->WriteHTML($html);
    $mpdf->Output('users.pdf', 'D');
    exit();
}

// USERS TABLE
// Fetch tickets from database
$sql = "SELECT ticket_id, ticket_no, last_name, violation_date, violation_type, fine_amount, status FROM OVR_Tickets WHERE 1";
$result = $conn->query($sql);

// Get ticket ID from request
if (isset($_GET['ticket_id']) && is_numeric($_GET['ticket_id'])) {
    $ticket_id = $_GET['ticket_id'];

    // Prepare SQL to delete a record
    $stmt = $conn->prepare("DELETE FROM OVR_Tickets WHERE ticket_id = ?");
    $stmt->bind_param("i", $ticket_id);

    $_SESSION['message'] = $stmt->execute() ? "Record deleted successfully" : "Error deleting record: {$stmt->error}";

    $stmt->close();
    header("Location: ovradmin.php");
    exit();
}

// Update ticket status
if (isset($_POST['ticketId']) && isset($_POST['newStatus'])) {
    $ticketId = $_POST['ticketId'];
    $newStatus = $_POST['newStatus'];

    // Prepare SQL to update the status
    $stmt = $conn->prepare("UPDATE OVR_Tickets SET status = ? WHERE ticket_id = ?");
    $stmt->bind_param("si", $newStatus, $ticketId);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Status updated successfully";
    } else {
        $_SESSION['message'] = "Error updating status: {$stmt->error}";
    }

    $stmt->close();
    header("Location: ovradmin.php");
    exit();
}
// Delete ticket
if (isset($_GET['delete_ticket_id']) && is_numeric($_GET['delete_ticket_id'])) {
    $delete_ticket_id = $_GET['delete_ticket_id'];

    // Prepare SQL to delete a record
    $stmt = $conn->prepare("DELETE FROM OVR_Tickets WHERE ticket_id = ?");
    $stmt->bind_param("i", $delete_ticket_id);

    $_SESSION['message'] = $stmt->execute() ? "Record deleted successfully" : "Error deleting record: {$stmt->error}";

    $stmt->close();
    header("Location: ovradmin.php");
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
<h2>VIOLATIONS</h2>
<div class="table-container">
    <table id="ticketsTable" class="display">
        <thead>
            <tr>
                <th scope="col">Ticket ID</th>
                <th scope="col">Ticket No</th>
                <th scope="col">Last Name</th>
                <th scope="col">Violation Date</th>
                <th scope="col">Violation Type</th>
                <th scope="col">Fine Amount</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["ticket_id"] . "</td>";
                    echo "<td>" . $row["ticket_no"] . "</td>";
                    echo "<td>" . $row["last_name"] . "</td>";
                    echo "<td>" . $row["violation_date"] . "</td>";
                    echo "<td>" . $row["violation_type"] . "</td>";
                    echo "<td>" . $row["fine_amount"] . "</td>";
                    echo "<td>" . $row["status"] . "</td>";
                    echo "<td><button class='btn btn-primary' data-toggle='modal' data-target='#changeStatusModal' onclick='changeStatus(\"" . $row["ticket_id"] . "\")'>Change Status</button> ";
                    echo "<a href='ovradmin.php?ticket_id=" . $row["ticket_id"] . "' class='btn btn-danger btn-sm'>Delete</a></td>";
               
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No tickets found</td></tr>";
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
                            <option value="paid">Paid</option>
                            <option value="unpaid">Unpaid</option>
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
        url: 'ovradmin.php',
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


<!-- Button container for centering -->
<div class="button-container">
    <form method="post">
        <button type="submit" name="export_excel" class="btn btn-success">Download Excel</button>
        <button type="submit" name="export_pdf" class="btn btn-danger">Download PDF</button>
        <a href="ovradmininput.php" class="btn btn-secondary">Add Violation</a>
    </form>
</div>

<?php 
include('dashboard_sidebar_end.php');
?>
