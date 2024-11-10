<?php
session_start();
include 'db_connection.php';
if ($_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-colorschemes"></script>
</head>

<style>


.container-group {
    display: flex;
    flex-wrap: wrap;
}

.container {
    width: 20px;/* Adjusts width for a smaller rectangle */
    height: 120px; /* Reduces height for a more rectangular shape */
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
    border-radius: 12px; /* Adjust border-radius for a smaller curve */
    background: rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3); /* Adjust shadow for smaller size */
    font-size: 18px; /* Slightly smaller font for smaller container */
    font-weight: bold;
    transition: background 0.3s ease, transform 0.3s ease;
    color: black;
    text-align: center;
    position: relative;
}


.number {
    position: absolute;
    bottom: 10px; /* Adjusts the vertical position */
    right: 10px;  /* Adjusts the horizontal position */
    font-size: 23px;
    font-weight: 100;
    color: #0000FF; /* Number color */
}

.container i {
    margin-right: 10px;
    font-size: 26px;
    color: #0000FF;
}

.container:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-5px);
}

.logout {
    position: absolute;
    top: 20px;
    right: 20px;
    color: #000000;
    font-size: 18px;
    display: flex;
    align-items: center;
    cursor: pointer;
}

.logout i {
    margin-right: 8px;
    font-size: 22px;
}

.logout:hover {
    color: #ff3333;
}

.switch {
    position: absolute;
    top: 20px;
    right: 150px; /* Adjust this value based on your layout */
    font-size: 17px;
    display: inline-block;
    width: 4em;
    height: 2em;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    --background: #2c2c54;
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--background);
    transition: 0.5s;
    border-radius: 30px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.slider:before {
    position: absolute;
    content: "";
    height: 1.5em;
    width: 1.5em;
    border-radius: 50%;
    left: 10%;
    bottom: 15%;
    background: #fff;
    transition: 0.5s;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

input:checked + .slider {
    background-color: #6f42c1;
}

input:checked + .slider:before {
    transform: translateX(100%);
}

body.dark-mode {
    background: #0a2351;
    color: #e0e0e0;
}

body.dark-mode .dashboard-text {
    color: #ff6b6b;
}

body.dark-mode .sidenav {
    background: #0039a6;
    border-right: 1px solid rgba(50, 50, 50, 0.5);
}

body.dark-mode .sidenav a {
    color: #e0e0e0;
}

body.dark-mode .sidenav h2 {
    color: #e0e0e0;
}

body.dark-mode .sidenav a:hover {
    background-color: rgb(21, 147, 231);
}

body.dark-mode .main-content {
    color: white;
}

body.dark-mode .container {
    background: rgba(4, 140, 177, 0.96);
    border: 1px solid rgba(60, 60, 60, 0.6);
    color: white; /* Set text color to white */
}

body.dark-mode .container:hover {
    background: rgba(13, 1, 55, 0.9);
}

body.dark-mode .logout {
    color: #ff6b6b;
}

body.dark-mode .logout:hover {
    color: #ff3333;
}
/* Style for the chart container */
.chart-container {
    width: 40%;
    height: 350px;
    margin-top: 120px;
    margin-left: 150px; /* Align container with the left side */
    background: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

}
.piechart-container {
    width: 40%;
    height: 350px;
    margin-top: 120px;
    margin-left: 150px; /* Align container with the left side */
    background: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

}

.card{
    width: 40%;
    height: 250px;
    margin-top: 80px;
    margin-left: 250px; /* Align container with the left side */
    background: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

#applicationChart {
    width: 100%; /* Make chart responsive */
    height: auto; /* Maintain aspect ratio */
}

/* Modal Styles */
.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1000; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.modal-container-group {
    display: flex;
    gap: 20px; /* Adjust the spacing between containers as needed */
    justify-content: space-around; /* Centers containers with space in between */
    align-items: center; /* Centers content vertically within each container */
}

.modal-container {
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    width: 100px; /* Adjust the width as needed for each container */
    box-sizing: border-box; /* Ensures padding doesn't affect overall width */
}

.card-container {
    display: flex;
    justify-content: space-around;
    gap: 20px;
    padding: 20px;
}

.card {
    flex: 1;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background-color: rgba(255, 255, 255, 0.9);
    text-align: center;
    width: 80%;
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 10px;
}

.card-text {
    font-size: 1rem;
    color: #555;
}

.lineChart {
    width: 100%;
    height: 100%;
}
</style>


<?php 
include('dashboard_sidebar_start.php');
?>

<body>
<div class="mai</div>n-content">
    
    
<!-- Content Sections -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="container" id="new-applications" style="color:#0000FF;">
                <i class="fas fa-plus-circle"></i> TOTAL USERS
                <div class="number" id="new-count"></div>
                <?php
                // Fetch the total number of users from the database
                $query = "SELECT COUNT(*) as total_users FROM users";   
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $total_users = $row['total_users'];
                ?>
                <script>
                    // Update the total users count dynamically
                    document.getElementById('new-count').innerText = <?php echo $total_users; ?>;
                </script>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="container" id="ongoing-applications" style="color:#0000FF;">
                <i class="fas fa-spinner"></i> ONGOING APPOINTMENTS
                <div class="number" id="ongoing-count"></div>
                <?php
                // Fetch the total number of ongoing appointments from the database
                $query = "SELECT COUNT(*) as ongoing_appointments FROM appointments WHERE status = 'ongoing'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $ongoing_appointments = $row['ongoing_appointments'];
                ?>
                <script>
                    // Update the ongoing appointments count dynamically
                    document.getElementById('ongoing-count').innerText = <?php echo $ongoing_appointments; ?>;
                </script>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="container" id="application-list">
                <i class="fas fa-list"></i> TOTAL CLIENTS
                <div class="number" id="list-count">30</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
            <a href="adminDocu.php">
                <div class="container" id="requested-documents">
                    <i class="fas fa-file"></i> REQUESTED DOCUMENTS
                    <div class="number" id="requested-count">5  </div>
                </div>
            </a>
        </div>
    </div>
</div>

<main>
    <div class="mt-5">
        <div class="row mt-5">
            <h5 class="card-title" style="margin-left: 70px;">Monthly Views</h5> 
            <h5 class="card-title" style="margin-left: 590px;">Pie Chart</h5>    
        </div>
            <div class="row">
                        <div class="chart-container">
                            <canvas id="lineChart"></canvas>
                        </div>
                </div>
            </div>

            <div class="row">
                    <div class="piechart-container">
                        <canvas id="pieChart"></canvas>
                    </div>
            </div>



        </div>
    </div>
</main>


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
    // Initialize the line chart
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    const lineChart = new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: ['August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Monthly Data',
                data: [35, 59, 90, 78, 0],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // Allow chart to resize
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Adjust the size of the chart container
    document.querySelector('.chart-container').style.width = '50%';
    document.querySelector('.chart-container').style.height = '500px';
    document.querySelector('.chart-container').style.marginLeft = '70px';
    document.querySelector('.chart-container').style.marginTop = '0px';


                // Initialize the pie chart
                const pieCtx = document.getElementById('pieChart').getContext('2d');
                const pieChart = new Chart(pieCtx, {
                    type: 'pie',
                    data: {
                        labels: ['TOTAL USERS', 'PENDING APPOINTMENTS', 'TOTAL CLIENTS', 'REQUESTED DOCUMENTS'],
                        datasets: [{
                            label: 'Pie Chart Data',
                            data: [7, 4, 30, 5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false
                    }
                });

                    // Adjust the size of the chart container
    document.querySelector('.piechart-container').style.width = '30%';
    document.querySelector('.piechart-container').style.height = '500px';
    document.querySelector('.piechart-container').style.marginLeft = '800px';
    document.querySelector('.piechart-container').style.marginTop = '-501px';

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
