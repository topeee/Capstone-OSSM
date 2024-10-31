<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Add your existing CSS styles here */
        /* Add your existing CSS styles here */
        /* Global Styles */
        body { 
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: black;
            overflow-x: hidden;
            transition: background 0.5s;
            background: #0066b2;
        }

        .dashboard-text {
            color: black;
            padding: 10px 20px;
            text-align: left;
            position: fixed;
            top: 0;
            left: 300px;
            width: calc(100% - 300px);
            z-index: 1;
            font-size: 36px;
            font-weight: bold;
            margin-top: 70px;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: left 0.3s, width 0.3s;
        }

        .sidenav {
            height: 100%;
            width: 300px;
            position: fixed;
            top: 0;
            left: 0;
            background:#89CFF0;
            backdrop-filter: blur(10px);
            border-right: 1px solid rgba(255, 255, 255, 0.2);
            overflow-x: hidden;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            transition: width 0.3s, backdrop-filter 0.3s;
        }

        .sidenav img {
            width: 130px;
            margin-bottom: 20px;
            margin-top: 20px;
            transition: width 0.3s;
            filter: drop-shadow(0 5px 5px rgba(0, 0, 0, 0.2));
        }

        .sidenav h2 {
            color: black;
            margin: 0;
            padding: 15px;
            font-size: 20px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: opacity 0.3s;
        }

        .sidenav a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: flex;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
            transition: background-color 0.3s ease, opacity 0.3s;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin-bottom: 10px;
            backdrop-filter: blur(10px);
        }

        .sidenav a i {
            margin-right: 15px;
            font-size: 22px;
        }

        .sidenav a:hover {
            background-color: #0000FF;
        }

        .main-content {
            margin-left: 300px;
            padding: 40px;
            padding-top: 10%;
            transition: margin-left 0.3s;
        }

        .container-group {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .container {
            width: calc(25% - 30px);
            height: 220px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            font-size: 20px;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.3s ease;
            color: black;
            text-align: center;
            position: relative; /* Allows positioning of the number inside */
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
            width: 50%;
            height: 300px; /* Adjust height as needed */
            margin-top: 20px; /* Space above the chart */
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 10px; /* Rounded corners */
            padding: 20px; /* Inner padding */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Slight shadow */
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
            flex-wrap: wrap;
            gap: 20px;
        }

        .modal-container {
            width: calc(33.33% - 20px);
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            border-radius: 10px;
            background: rgba(75, 192, 192, 0.5); /* Adjust color */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            color: black;
            text-align: center;
        }

    </style>
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
