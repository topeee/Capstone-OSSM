<?php

include 'db_connection.php';

// Fetch appointment details from the database
$query = "SELECT id, reference_number, full_name, email, service, date, time, document_type, status FROM appointments WHERE 1";
$result = $conn->query($query);
if (isset($_POST['downloadExcel'])) {
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename=appointments.xls');
    header('Pragma: no-cache');
    header('Expires: 0');

    $sep = "\t";

    echo "Reference Number" . $sep . "Full Name" . $sep . "Email" . $sep . "Service" . $sep . "Type of Document" . $sep . "Date" . $sep . "Time" . $sep . "Status" . "\n";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row["reference_number"] . $sep . $row["full_name"] . $sep . $row["email"] . $sep . $row["service"] . $sep . $row["document_type"] . $sep . $row["date"] . $sep . $row["time"] . $sep . $row["status"] . "\n";
        }
    }
    exit();
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .appointment-details-container {
        width: 80%;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .details-header {
        text-align: center;
        color: #007bff;
        margin-bottom: 20px;
    }

    .search-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .search-input {
        width: 70%;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }

    .search-btn {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .status-filter {
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 12px;
        border: 1px solid #dee2e6;
        text-align: left;
    }

    .table th {
        background-color: #007bff;
        color: #fff;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f2f2f2;
    }

    .email-column {
        width: 20%;
    }
</style>


<?php 
include('dashboard_sidebar_start.php');
?>

<body>
    <!-- Appointment Details Table -->
    <div class="appointment-details-container" id="appointmentDetails">
        <h3 class="details-header">Appointment Details</h3>
        
        <!-- Search Bar and Status Filter -->
        <div class="search-container">
            <input type="text" id="searchInput" class="search-input" placeholder="Search here..." />
            <button id="searchButton" class="search-btn">Search</button>
            
            <!-- Status Filter Dropdown -->
            <label for="status" style="color: skyblue; font-weight: 800;">Status</label>
            <select id="statusFilter" class="status-filter" onchange="filterByStatus()">
                <option value="">All</option>
                <option value="pending">Pending</option>
                <option value="ongoing">Ongoing</option>
                <option value="Ready To Release">Ready to Release</option>
                <option value="completed">Completed</option>
            </select>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Reference Number</th>
                    <th>Full Name</th>
                    <th class="email-column">Email</th>
                    <th>Service</th>
                    <th>Type of Document</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="appointmentTableBody">
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["reference_number"] . "</td>";
                        echo "<td>" . $row["full_name"] . "</td>";
                        echo "<td class='email-column'>" . $row["email"] . "</td>";
                        echo "<td>" . $row["service"] . "</td>";
                        echo "<td>" . $row["document_type"] . "</td>";
                        echo "<td>" . $row["date"] . "</td>";
                        echo "<td>" . $row["time"] . "</td>";
                        echo "<td>" . $row["status"] . "</td>";
                        echo "<td><button class='btn btn-primary' data-toggle='modal' data-target='#changeStatusModal' onclick='changeStatus(\"" . $row["id"] . "\")'>Change Status</button></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No appointments found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    <form method="post" style="text-align: right;">
        <button type="submit" name="downloadExcel" class="btn btn-success">Download Excel</button>
    </form>
        <!-- Change Status Modal -->
        <div class="modal fade" id="changeStatusModal" tabindex="-1" aria-labelledby="changeStatusModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="changeStatusModalLabel">Change Appointment Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form id="changeStatusForm">
                    <input type="hidden" id="appointmentId" name="appointmentId">
                    <div class="form-group">
                    <label for="newStatus">New Status</label>
                    <select class="form-control" id="newStatus" name="newStatus">
                        <option value="pending">Pending</option>
                        <option value="ongoing">Ongoing</option>
                        <option value="Ready To Release">Ready to Release</option>
                        <option value="completed">Completed</option>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                </div>
            </div>
            </div>
        </div>

        <!-- Success Notification -->
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p>Status updated successfully!</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
     

    </div>

</body>
</html>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS for search and filter functionality -->
<script>
$(document).ready(function() {
    window.changeStatus = function(appointmentId) {
        // Set the appointment ID in the hidden input field
        document.getElementById('appointmentId').value = appointmentId;
        // Show the modal
        $('#changeStatusModal').modal('show');
    }
});

// Handle form submission
document.getElementById('changeStatusForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var appointmentId = document.getElementById('appointmentId').value;
    var newStatus = document.getElementById('newStatus').value;

    // Perform AJAX request to update the status in the database
    $.ajax({
        url: 'Appointment_update.php',
        type: 'POST',
        data: {
            appointmentId: appointmentId,
            newStatus: newStatus
        },
  
        success: function(response) {
            // Reload the page or update the table row with the new status
            location.reload();
            // Show success modal
$('#successModal').modal('show');
        },
        error: function(xhr, status, error) {
            console.error('Error updating status:', error);
        }
    });
});

// Search functionality
document.getElementById('searchButton').addEventListener('click', function() {
    var searchInput = document.getElementById('searchInput').value.toLowerCase();
    var tableRows = document.getElementById('appointmentTableBody').getElementsByTagName('tr');

    for (var i = 0; i < tableRows.length; i++) {
        var row = tableRows[i];
        var cells = row.getElementsByTagName('td');
        var match = false;

        for (var j = 0; j < cells.length; j++) {
            if (cells[j].innerText.toLowerCase().includes(searchInput)) {
                match = true;
                break;
            }
        }

        if (match) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
});

// Filter functionality
function filterByStatus() {
    var statusFilter = document.getElementById('statusFilter').value.toLowerCase();
    var tableRows = document.getElementById('appointmentTableBody').getElementsByTagName('tr');

    for (var i = 0; i < tableRows.length; i++) {
        var row = tableRows[i];
        var statusCell = row.getElementsByTagName('td')[7]; // Status column index

        if (statusFilter === "" || statusCell.innerText.toLowerCase() === statusFilter) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
}
</script>
<?php 
include('dashboard_sidebar_end.php');
?>
