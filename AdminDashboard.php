<?php 

include 'db_connection.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="adminDashboard.css">
</head>
<body>

<div class="sidenav">
    <img src="logo.png" alt="Logo">
    <h2>Admin Panel</h2>
    <a href="#" data-content="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="#" data-content="users"><i class="fas fa-users"></i> Users</a>
    <a href="#" data-content="services"><i class="fas fa-file-alt"></i> E-SERVICES</a>
    <a href="#" data-content="settings"><i class="fas fa-cogs"></i> Settings</a>
    <a href="#" data-content="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<div class="main-content">
    <h1>Admin Dashboard</h1>
    
    <!-- Content Sections -->
    <div id="dashboard-content" class="content-section">
        <div class="container-group">
            <div class="container" id="new-applications">
                <i class="fas fa-plus-circle"></i> NEW APPLICATION
                <div class="number" id="new-count">10</div>
            </div>
            <div class="container" id="ongoing-applications">
                <i class="fas fa-spinner"></i> ON-GOING APPLICATION
                <div class="number" id="ongoing-count">5</div>
            </div>
            <div class="container" id="application-list">
                <i class="fas fa-list"></i> APPLICATION FORM LIST
                <div class="number" id="list-count">30</div>
            </div>
            <div class="container" id="requested-documents">
                <i class="fas fa-file"></i> REQUESTED DOCUMENTS
                <div class="number" id="requested-count">3</div>
            </div>
        </div>

        <!-- Chart Container -->
        <div class="chart-container">
            <canvas id="applicationChart"></canvas>
        </div>
    </div>

    <div id="users-content" class="content-section" style="display: none;">
        <h2>Users Section</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>Admin</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jane Smith</td>
                    <td>jane.smith@example.com</td>
                    <td>User</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    <?php

    $sql = "SELECT id, name, email, role FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <th scope='row'>" . $row["id"] . "</th>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["role"] . "</td>
                    <td>
                        <button class='btn btn-primary btn-sm'>Edit</button>
                        <button class='btn btn-danger btn-sm'>Delete</button>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No users found</td></tr>";
    }

    $conn->close();
    ?>
    </div>

    <div id="services-content" class="content-section" style="display: none;">
        <h2>E-Services Section</h2>
        <div class="container-group">
            <div class="container">
                <i class="fas fa-file-upload"></i> Violation Management
                <div class="number">5</div>
            </div>
            <div class="container">
                <i class="fas fa-file-download"></i> Social Services
                <div class="number">12</div>
            </div>
            <div class="container">
                <i class="fas fa-check-circle"></i> Educational Support
                <div class="number">8</div>
            </div>
            <div class="container">
                <i class="fas fa-times-circle"></i> Economic & Investment Support
                <div class="number">2</div>
            </div>
            <div class="container">
                <i class="fas fa-sync"></i> Health Services
                <div class="number">6</div>
            </div>
            <div class="container">
                <i class="fas fa-info-circle"></i> Citizen ID
                <div class="number">4</div>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="serviceModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Service Details</h2>
            <div class="modal-container-group">
                <div class="modal-container">
                    <i class="fas fa-file-upload"></i> Violation Management
                    <div class="number">Details about Violation Management</div>
                </div>
                <div class="modal-container">
                    <i class="fas fa-file-download"></i> Social Services
                    <div class="number">Details about Social Services</div>
                </div>
                <div class="modal-container">
                    <i class="fas fa-check-circle"></i> Educational Support
                    <div class="number">Details about Educational Support</div>
                </div>
            </div>
        </div>
    </div>

    <div id="settings-content" class="content-section" style="display: none;">
        <h2>Settings Section</h2>
        <p>This is where settings content will be displayed.</p>
    </div>

    <div id="logout-content" class="content-section" style="display: none;">
        <h2>Logout Section</h2>
        <p>You have logged out.</p>
    </div>
</div>

<script>
        // Sidebar navigation functionality
        document.querySelectorAll('.sidenav a').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default anchor behavior
            
            // Hide all content sections
            document.querySelectorAll('.content-section').forEach(section => {
                section.style.display = 'none';
            });

            // Get the content to display based on data-content attribute
            const contentId = this.getAttribute('data-content');
            const activeContent = document.getElementById(`${contentId}-content`);

            // Show the corresponding content section
            if (activeContent) {
                activeContent.style.display = 'block';
            }
        });
    });

    // Initialize the chart
    const ctx = document.getElementById('applicationChart').getContext('2d');
    const applicationChart = new Chart(ctx, {
        type: 'bar', // Change to 'line' for line chart
        data: {
            labels: ['New Applications', 'Ongoing Applications', 'Application Form List', 'Requested Documents'],
            datasets: [{
                label: 'Number of Applications',
                data: [10, 5, 30, 3], // Use the current counts for dynamic data
                backgroundColor: [
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(54, 162, 235, 0.6)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Modal functionality
const modal = document.getElementById('serviceModal');
const closeModal = document.querySelector('.close');

// Function to open modal
function openModal() {
    modal.style.display = 'block';
}

// Function to close modal
function closeModalFunction() {
    modal.style.display = 'none';
}

// Event listener for closing modal
closeModal.addEventListener('click', closeModalFunction);

// Event listeners for E-Services cards
const eServiceCards = document.querySelectorAll('#services-content .container');
eServiceCards.forEach(card => {
    card.addEventListener('click', openModal);
});

// Close modal when clicking outside of it
window.addEventListener('click', function(event) {
    if (event.target === modal) {
        closeModalFunction();
    }
});

</script>
</body>
</html>
