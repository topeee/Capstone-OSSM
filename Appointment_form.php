
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Appointment Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <!-- Include Bootstrap CSS for the user icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Bootstrap CSS and Icons for the user icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="Footer.Clean.icons.css">
    <link rel="stylesheet" href="pwd app.css">
    <link rel="icon" type="img/png" href="logo.png">


    <style>

        /* Body background with an overlay */
        body {
            background-image: url('municipal.jpg'); /* Replace 'your-image.jpg' with your image path */
            background-size: cover; /* Makes the image cover the whole page */
            background-position: center; /* Centers the image */
            background-repeat: no-repeat; /* Prevents the image from repeating */
            position: relative; /* Required for overlay */
         
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay; change color and opacity here */
            z-index: -1; /* Keeps overlay behind content */
        }

        /* Resetting default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #2c3e50;
            color: #ecf0f1;
        }

        .navbar .logo {
            height: 40px;
            margin-right: 15px;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            margin-left: auto;
        }

        .nav-link {
            cursor: pointer;
            color: #ecf0f1;
            font-size: 18px;
            text-decoration: none;
        }

        .nav-link:hover {
            color: #3498db;
        }

        /* Main Content */
        .content {
            padding: 20px;
        }

        .hidden {
            display: none;
        }

        /* Dashboard Cards */
        .dashboard-cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .dashboard-header {
            font-weight: 800;
            margin-top: 10px;
            text-align: center; /* Center the text */
            margin-bottom: 20px; /* Optional: Add some space below the header */
            color: skyblue;
            font-size: 2em; /* Optional: Increase font size */
        }

        .card {
            flex: 1;
            padding: 20px;
            background-color: #3498db;
            color: #fff;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .card:hover {
            background-color: #2980b9;
        }

        .card h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 24px;
            font-weight: bold;
        }

        .table .email-column {
            max-width: 200px; /* Specific width for the email column */
            white-space: normal; /* Allow wrapping within this column */
            word-wrap: break-word;
        }


        .table-striped tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Appointment Booking Form */
        .appointment-form {
            max-width: 600px;
            margin: -20px auto 20px; /* Negative top margin to move the form slightly up */
            background-color: green;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Added shadow for depth */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for scale and shadow */
        }


        .appointment-form h2 {
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .appointment-form label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: bold;
        }

        .appointment-form input, .appointment-form select, .appointment-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #bdc3c7;
            font-size: 16px;
        }

        .appointment-form input[type="date"], .appointment-form input[type="time"] {
            padding-right: 10px;
        }

        .appointment-form button {
            background-color: #3498db;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s;
        }

        .appointment-form button:hover {
            background-color: #2980b9;
        }

        .appointment-form .hidden {
            display: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .dashboard-cards {
                flex-direction: column;
            }
            
            .nav-links {
                flex-direction: column;
                gap: 10px;
            }
        }

       

        /* Style for delete button */
        .delete-btn {
            background-color: #e74c3c; /* Red background */
            color: #fff; /* White text */
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .delete-btn:hover {
            background-color: #c0392b; /* Darker red on hover */
        }

        /* Button container styles */
        td button {
            margin-right: 10px; /* Space between buttons */
            padding: 5px 10px;
            cursor: pointer;
            display: inline-block; /* Ensure buttons are inline */
        }

        /* Style for the View button */
        .view-btn {
            background-color: #4CAF50; /* Green for view */
            color: white;
        }

        /* Style for the Delete button */
        .delete-btn {
            background-color: #f44336; /* Red for delete */
            color: white;
        }

        /* Hover effects for buttons */
        .view-btn:hover {
            background-color: #45a049;
        }

        .delete-btn:hover {
            background-color: #e53935;
        }

        /* Action column: Buttons will be aligned side by side */
        td.action-buttons {
            display: flex;
            justify-content: space-between;
            gap: 10px; /* Space between buttons */
        }

        /* Style for the View button */
        .view-btn {
            background-color: #4CAF50; /* Green for view */
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            width: 45%; /* Adjust width */
            font-size: 12px;
        }

        /* Style for the Delete button */
        .delete-btn {
            background-color: #f44336; /* Red for delete */
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            width: 45%; /* Adjust width */
            font-size: 12px;
        }

        /* Hover effects for buttons */
        .view-btn:hover {
            background-color: #45a049;
        }

        .delete-btn:hover {
            background-color: #e53935;
        }

        /* Adjust table column widths */
        table {
            width: 100%;
            table-layout: fixed; /* Ensure fixed column widths */
        }

        /* Columns for name, email, and other details */
        td, th {
            padding: 8px;
            text-align: left;
            word-wrap: break-word; /* Wrap long words */
        }

        /* Resize columns for action buttons */
        th:nth-child(8), td:nth-child(8) {
            width: 150px; /* Adjust width for action column */
            text-align: center; /* Center the buttons */
        }

        .appointment-details {
            margin-top: 30px;
            text-align: center;
        }

        .appointment-details-container h3 {
            margin-bottom: 15px;
            color: skyblue;
            font-size: 24px;
        }

        .table {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff; /* White background for the table */
            margin-bottom: 30px; /* Add bottom margin */
        }


        .table thead {
            background-color: #2980b9; /* Dark blue for header */
            color: #ecf0f1;
        }

        .table th, .table td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            font-weight: bold;
            font-size: 18px;
        }

        .table td {
            font-size: 16px;
            color: #34495e; /* Darker text color for readability */
        }

        .table .email-column {
            max-width: 200px;
            white-space: normal;
            word-wrap: break-word;
        }

        .table-striped tbody tr:nth-child(even) {
            background-color: #f2f2f2; /* Light gray for alternate rows */
        }

        .table tbody tr:hover {
            background-color: #e0f7fa; /* Light blue on hover */
            transition: background-color 0.3s;
        }

        /* Add styles for the Status column */
        .table th:nth-child(7), .table td:nth-child(7) {
            text-align: center;
        }

        /* Delete button style */
        .delete-btn {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .delete-btn:hover {
            background-color: #c0392b;
        }

        /* Appointment Booking Form */
        .appointment-form {
            max-width: 600px;
            margin: -30px auto 20px; /* Negative top margin to move the form slightly up */
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Added shadow for depth */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for scale and shadow */
        }


        .appointment-form:hover {
            transform: scale(1.02); /* Slightly scale up on hover */
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3); /* Deeper shadow on hover */
        }

        .appointment-form h2 {
            margin-bottom: 20px;
            color: #2c3e50;
            text-align: center; /* Center title text */
            font-size: 24px;
        }

        .appointment-form label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: bold;
        }

        .appointment-form input,
        .appointment-form select,
        .appointment-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #bdc3c7;
            font-size: 16px;
            transition: border-color 0.3s ease, background-color 0.3s ease; /* Smooth transition for input */
        }

        .appointment-form input:focus,
        .appointment-form select:focus {
            border-color: #3498db; /* Change border color on focus */
            background-color: #f0f8ff; /* Light blue background on focus */
            outline: none; /* Remove default outline */
        }

        .appointment-form button {
            background-color: #3498db;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease, transform 0.2s ease; /* Smooth transition for button */
        }

        .appointment-form button:hover {
            background-color: #2980b9;
            transform: translateY(-2px); /* Lift button on hover */
        }

        .appointment-form button:active {
            transform: translateY(0); /* Return to original position when clicked */
        }

        .appointment-form .hidden {
            display: none;
        }

       

        .close-btn {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .dashboard-cards {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .card {
            color: white;
            padding: 30px;
            margin: 10px;
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
            width: 220px; /* Increased width */
            height: 150px; /* Increased height */
            font-size: 1.2em; /* Larger font size for content */
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        /* Unique Colors for Each Card */
        .card.upcoming {
            background-color: #3498db; /* Blue for Upcoming */
        }

        .card.total {
            background-color: #e67e22; /* Orange for Total */
        }

        .card.today {
            background-color: #27ae60; /* Green for Today */
        }

        .card.finished {
            background-color: #9b59b6; /* Purple for Finished */
        }

        .appointment-details-container {
            max-width: 1200px; /* Adjust max width */
            margin: 0 auto; /* Center the container */
            padding: 20px; /* Add padding for spacing */
            background-color: rgba(0, 0, 0, 0.6); /* Darker semi-transparent background */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
            margin-bottom: 30px; /* Add space at the bottom */
        }

        /* General container for the search bar and filter */
        .search-container {
            display: flex;
            gap: 20px;
            align-items: center;
            margin-bottom: 20px;
        }

        /* Search bar input styling */
        .search-input {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Search button styling */
        .search-btn {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Search button hover effect */
        .search-btn:hover {
            background-color: #45a049;
        }

        /* Status filter dropdown styling */
        .status-filter {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 25%;
            margin-right: 50px;
        }

        .hidden {
            display: none;
        }


        /* Modal background overlay */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5); /* Black with opacity */
            padding-top: 60px;
        }

        /* Modal content box */
        .modal-content {
            background-color: #ffffff;
            margin: auto;
            padding: 20px 30px;
            border-radius: 8px;
            width: 50%;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        /* Close button style */
        .close-btn {
            color: #aaa;
            float: right;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-btn:hover,
        .close-btn:focus {
            color: #555;
            text-decoration: none;
        }

        /* Modal header */
        .modal-content h3 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        /* Line separator between items */
        .modal-content p {
            font-size: 16px;
            margin: 10px 0;
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        /* Last item without a border */
        .modal-content p:last-child {
            border-bottom: none;
        }

        /* Icon styling */
        .modal-content .icon {
            font-size: 120px; /* Extra large icon */
            color: #007bff;
            margin-bottom: 20px; /* Space between icon and text */
        }


        /* Text styling */
        .modal-content strong {
            font-weight: 600;
            color: #555;
            margin-right: 8px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .modal-content {
                width: 80%;
            }
        }
        
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <img src="logo.png" alt="Barangay Logo" class="logo">
        <div class="nav-links">
            <span class="nav-link" onclick="showDashboard()">Dashboard</span>
            <span class="nav-link" onclick="showBookAppointment()">Book Appointment</span>
        </div>
    </nav>

    <h1 class="dashboard-header">User Dashboard</h1>
    <div class="content" id="dashboardContent">
        <div class="dashboard-cards">
            <div class="card upcoming" onclick="showAppointmentDetails('Upcoming Appointment')">
                <h3>Upcoming Appointment</h3>
                <p id="upcomingCount">0</p>
            </div>
            <div class="card total" onclick="showAppointmentDetails('Total Appointment')">
                <h3>Total Appointment</h3>
                <p id="totalCount">0</p>
            </div>
            <div class="card today" onclick="showAppointmentDetails('Appointment Today')">
                <h3>Appointment Today</h3>
                <p id="todayCount">0</p>
            </div>
            <div class="card finished" onclick="showAppointmentDetails('Finished Appointment')">
                <h3>Finished Appointment</h3>
                <p id="finishedCount">0</p>
            </div>
        </div>
    </div>

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
                <option value="all">All</option>
                <option value="upcoming">Upcoming</option>
                <option value="today">Today</option>
            </select>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
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
                <!-- Dynamic rows go here -->
            </tbody>
        </table>
    </div>


    <!-- Appointment Booking Form -->
    <div class="content hidden" id="bookAppointmentContent">
        <div class="appointment-form">
            <h2>Book a New Appointment</h2>
            <form id="appointmentForm">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" required>
                
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>

                <label for="service">Choose a Service</label>
                <select name="service" id="service" onchange="showServiceOptions()" required>
                    <option value="" disabled>Choose a service</option>
                    <option value="Service 1">Violation Management</option>
                    <option value="Service 2">Social Services</option>
                    <option value="Service 3">Educational Support</option>
                    <option value="Service 4">Economic & Investment Support</option>
                    <option value="Service 5">Health Services</option>
                    <option value="Service 6">Citizen ID</option>
                </select>
                
                <div id="serviceOptionsContainer" class="hidden">
                    <label for="serviceOptions">Type of Document</label>
                    <select name="serviceOptions" id="serviceOptions">
                        <!-- Options will be populated based on selected service -->
                    </select>
                </div>

                <label for="date">Choose Preferred Date</label>
                <input type="date" name="date" id="date" required>
                
                <label for="time">Choose Preferred Time</label>
                <input type="time" name="time" id="time" required>

                <button type="button" onclick="bookAppointment()">Book Appointment</button>
            </form>
        </div>
    </div>
    
        
        <!-- Modal -->
    <div id="appointmentModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h3>Appointment Summary</h3>
            <i class="icon bi bi-person-circle"></i> <!-- Centered, extra-large Bootstrap user icon -->
            
            <br>
            <p><strong>Full Name:</strong> <span id="modalName"></span></p>
            <p><strong>Email:</strong> <span id="modalEmail"></span></p>
            <p><strong>Service:</strong> <span id="modalService"></span></p>
            <p><strong>Type of Document:</strong> <span id="modalServiceOptions"></span></p>
            <p><strong>Date:</strong> <span id="modalDate"></span></p>
            <p><strong>Time:</strong> <span id="modalTime"></span></p>
            <p><strong>Status:</strong> <span id="modalStatus"></span></p>
        </div>
    </div>

    <footer>
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item"><a class="link-secondary" href="#">About us</a></li>
                    </ul>
                    <div class="col">
                        <ul class="list-inline my-2">
                            <li class="list-inline-item me-4">
                                <div class="bs-icon-circle bs-icon-primary bs-icon">
                                    <a href="https://www.facebook.com/sanmateorizalPIO" target="_blank">
                                        <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            <!-- Increased size for YouTube icon -->
                            <li class="list-inline-item me-4">
                                <div class="bs-icon-circle bs-icon-primary bs-icon" >
                                    <a href="https://www.youtube.com/@SanMateoRizal" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16" style="vertical-align: middle;">
                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="bs-icon-circle bs-icon-primary bs-icon">
                                    <a href="https://www.sanmateo.gov.ph/?fbclid=IwY2xjawGa8FxleHRuA2FlbQIxMAABHV7oEXf9A30xAMK0rZkUq2u79JjY-rg8Nx1htqvExUJJk_Bm0eYPp6P6RA_aem_EAarsNJrWise3DgKGtmDTg" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
                                          </svg>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-inline my-2">
                            <li class="list-inline-item"><a class="link-secondary" href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>            
        </footer>


    <script>

        // Filter the table rows based on the selected status
        function filterByStatus() {
            const statusFilter = document.getElementById('statusFilter').value;
            const rows = document.querySelectorAll('#appointmentTableBody tr');

            rows.forEach(row => {
                const appointmentDate = row.querySelector('td:nth-child(5)').textContent;
                const todayDate = new Date().toLocaleDateString();
                let status = row.querySelector('td:nth-child(7)').textContent.trim();

                // Determine if the row should be shown or hidden based on the filter
                if (statusFilter === 'all') {
                    row.style.display = ''; // Show all rows
                } else if (statusFilter === 'upcoming' && status === 'Upcoming') {
                    row.style.display = ''; // Show upcoming appointments
                } else if (statusFilter === 'today' && status === 'Today') {
                    row.style.display = ''; // Show today's appointments
                } else {
                    row.style.display = 'none'; // Hide rows that don't match the filter
                }
            });
        }
        // Get references to the search input, button, and table rows
        const searchInput = document.getElementById('searchInput');
        const searchButton = document.getElementById('searchButton');
        const tableBody = document.getElementById('appointmentTableBody');  // Reference to the table body

        // Add event listener to the search button
        searchButton.addEventListener('click', function() {
            const searchTerm = searchInput.value.toLowerCase(); // Convert search term to lowercase
            filterTable(searchTerm);
        });

        // Function to filter table based on search term
        function filterTable(searchTerm) {
            const rows = tableBody.querySelectorAll('tr');  // Get the current rows of the table
            rows.forEach(row => {
                const name = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
                const email = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const service = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const docType = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
                
                // Check if any of the columns match the search term
                if (
                    name.includes(searchTerm) || 
                    email.includes(searchTerm) ||
                    service.includes(searchTerm) || 
                    docType.includes(searchTerm)
                ) {
                    row.style.display = ''; // Show the row
                } else {
                    row.style.display = 'none'; // Hide the row
                }
            });
        }

        // Function to open the modal and display appointment details
        function viewAppointment(index, cardTitle) {
            let appointment;

            if (cardTitle === 'Upcoming Appointment') {
                appointment = appointments.filter(app => new Date(app.date) > new Date())[index];
            } else if (cardTitle === 'Appointment Today') {
                appointment = appointments.filter(app => new Date(app.date).toLocaleDateString() === new Date().toLocaleDateString())[index];
            } else if (cardTitle === 'Finished Appointment') {
                appointment = appointments.filter(app => new Date(app.date) < new Date())[index];
            } else if (cardTitle === 'Total Appointment') {
                appointment = appointments[index];
            }

            // Populate modal with the appointment details
            document.getElementById("modalName").innerText = appointment.name;
            document.getElementById("modalEmail").innerText = appointment.email;
            document.getElementById("modalService").innerText = appointment.service;
            document.getElementById("modalServiceOptions").innerText = appointment.serviceOptions || '-';
            document.getElementById("modalDate").innerText = appointment.date;
            document.getElementById("modalTime").innerText = appointment.time;
            document.getElementById("modalStatus").innerText = (new Date(appointment.date) < new Date()) ? "Completed" : "Upcoming";

            // Show the modal
            document.getElementById("appointmentModal").style.display = "block";
        }



        // Function to close the modal
        function closeModal() {
            document.getElementById("appointmentModal").style.display = "none";
        }


        function showServiceOptions() {
            const service = document.getElementById('service').value;
            const serviceOptionsContainer = document.getElementById('serviceOptionsContainer');
            const serviceOptions = document.getElementById('serviceOptions');
            
            serviceOptions.innerHTML = ''; // Reset options

            if (service === 'Service 1') {
                serviceOptions.innerHTML = `<option value="OVR Payment" selected>OVR Payment</option>`;
            } else if (service === 'Service 2') {
                serviceOptions.innerHTML = `
                    <option value="Senior Citizen Application">Senior Citizen Application</option>
                    <option value="PWD Application">PWD Application</option>
                    <option value="Solo Parent Application">Solo Parent Application</option>
                `;
            } else if (service === 'Service 3') {
                serviceOptions.innerHTML = `<option value="Scholarship Application" selected>Scholarship Application</option>`;
            } else if (service === 'Service 4') {
                serviceOptions.innerHTML = `
                    <option value="Occupational Permit">Occupational Permit</option>
                    <option value="Business Permit">Business Permit</option>
                    <option value="Tricycle Permit">Tricycle Permit</option>
                    <option value="Real Property">Real Property</option>
                    <option value="Market One Stop Shop">Market One Stop Shop</option>
                `;
            } else if (service === 'Service 5') {
                serviceOptions.innerHTML = `
                    <option value="Medical Records">Medical Records</option>
                    <option value="Death Certificate">Death Certificate</option>
                `;
            } else if (service === 'Service 6') {
                serviceOptions.innerHTML = `
                    <option value="Citizen ID">Citizen ID</option>
                    <option value="OSSM Query Portal">OSSM Query Portal</option>
                `;
            }

            serviceOptionsContainer.classList.toggle('hidden', !service);
        }



        const appointments = JSON.parse(localStorage.getItem('appointments') || '[]');

        function showDashboard() {
            document.getElementById("dashboardContent").classList.remove("hidden");
            document.getElementById("bookAppointmentContent").classList.add("hidden");
            updateDashboard();
        }

        function showBookAppointment() {
            document.getElementById("dashboardContent").classList.add("hidden");
            document.getElementById("bookAppointmentContent").classList.remove("hidden");
            document.getElementById("appointmentDetails").style.display = 'none';
        }

        // Map service codes to display names
        const serviceMapping = {
            "Service 1": "Violation Management",
            "Service 2": "Social Services",
            "Service 3": "Educational Support",
            "Service 4": "Economic & Investment Support",
            "Service 5": "Health Services",
            "Service 6": "Citizen ID"
        };

        //set time ap or pm

        function formatTimeTo12Hour(time) {
            const [hour, minute] = time.split(':');
            let period = "AM";
            let hour12 = parseInt(hour, 10);

            if (hour12 >= 12) {
                period = "PM";
                if (hour12 > 12) hour12 -= 12;
            } else if (hour12 === 0) {
                hour12 = 12;
            }

            return `${hour12}:${minute} ${period}`;
        }

        // code for book appointment
        function bookAppointment() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const service = document.getElementById("service").value;
            const serviceName = serviceMapping[service];
            const serviceOptions = document.getElementById("serviceOptions").value;
            const date = document.getElementById("date").value;
            const time = document.getElementById("time").value;
            const formattedTime = formatTimeTo12Hour(time); // Convert to 12-hour format with AM/PM

            if (name && email && service && date && time) {
                appointments.push({
                    name,
                    email,
                    service: serviceName,
                    serviceOptions,
                    date,
                    time: formattedTime // Store formatted time
                });
                localStorage.setItem('appointments', JSON.stringify(appointments));
                document.getElementById("appointmentForm").reset();
                alert("Appointment booked successfully!");
                updateDashboard();
            } else {
                alert("Please fill in all fields.");
            }
        }


        // for updating dashboard
        function updateDashboard() {
            const todayDate = new Date().toLocaleDateString();
            document.getElementById("totalCount").innerText = appointments.length;
            document.getElementById("todayCount").innerText = appointments.filter(app => new Date(app.date).toLocaleDateString() === todayDate).length;
            document.getElementById("upcomingCount").innerText = appointments.filter(app => new Date(app.date) > new Date()).length;
            document.getElementById("finishedCount").innerText = appointments.filter(app => new Date(app.date) < new Date()).length;
        }

        // Populate the table with appointment details when showing them
        function showAppointmentDetails(cardTitle) {
            tableBody.innerHTML = ""; // Clear existing rows

            let filteredAppointments = [];
            const todayDate = new Date().toLocaleDateString();

            if (cardTitle === 'Upcoming Appointment') {
                filteredAppointments = appointments.filter(app => new Date(app.date) > new Date());
            } else if (cardTitle === 'Total Appointment') {
                filteredAppointments = appointments;
            } else if (cardTitle === 'Appointment Today') {
                filteredAppointments = appointments.filter(app => new Date(app.date).toLocaleDateString() === todayDate);
            } else if (cardTitle === 'Finished Appointment') {
                filteredAppointments = appointments.filter(app => new Date(app.date) < new Date());
            }

            filteredAppointments.forEach((appointment, index) => {
                // Determine status based on appointment date
                let status = "Upcoming";
                if (new Date(appointment.date).toLocaleDateString() === todayDate) {
                    status = "Today";
                } else if (new Date(appointment.date) < new Date()) {
                    status = "Completed";
                }

                const row = `<tr>
                    <td>${appointment.name}</td>
                    <td>${appointment.email}</td>
                    <td>${appointment.service}</td>
                    <td>${appointment.serviceOptions || '-'}</td>
                    <td>${appointment.date}</td>
                    <td>${appointment.time}</td>
                    <td>${status}</td>
                    <td class="action-buttons">
                        <!-- Pass the index of the filtered list to viewAppointment -->
                        <button class="view-btn" onclick="viewAppointment(${index}, '${cardTitle}')">View</button>
                        <button class="delete-btn" onclick="deleteAppointment(${index}, '${cardTitle}')">Del</button>
                    </td>
                </tr>`;
                tableBody.innerHTML += row;
            });

            document.getElementById("appointmentDetails").style.display = 'block';
        }

        // for delete option
        function deleteAppointment(index, cardTitle) {
            // Find the actual index in the main appointments array
            const actualIndex = appointments.findIndex((appointment, i) => {
                if (cardTitle === 'Upcoming Appointment') return new Date(appointment.date) > new Date() && i === index;
                if (cardTitle === 'Total Appointment') return i === index;
                if (cardTitle === 'Appointment Today') return new Date(appointment.date).toLocaleDateString() === new Date().toLocaleDateString() && i === index;
                if (cardTitle === 'Finished Appointment') return new Date(appointment.date) < new Date() && i === index;
            });

            // Remove the appointment from the appointments array
            if (actualIndex !== -1) {
                appointments.splice(actualIndex, 1);
                localStorage.setItem('appointments', JSON.stringify(appointments)); // Update local storage
                showAppointmentDetails(cardTitle); // Refresh table with the same category
                updateDashboard(); // Update dashboard counts
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            updateDashboard(); // Update dashboard counts on load
            showAppointmentDetails('Upcoming Appointment'); // Automatically show upcoming appointments initially
        });


    </script>
</body>
</html>