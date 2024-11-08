
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

        /* Action column: Buttons will be aligned side by side */
        td.action-buttons {
            display: flex;
            justify-content: space-between;
            gap: 10px; /* Space between buttons */
        }

        /* Style for the View button */
        .view-btn {
            background-color: #3498db; /* Blue for view */
            color: white;
            padding: 12px 15px; /* Increased padding */
            cursor: pointer;
            width: 60%; /* Increased width */
            font-size: 12px;
            border-radius: 5px; /* Rounded corners */
        }

        
        /* Hover effects for buttons */
        .view-btn:hover {
            background-color: darkblue;
        }


        /* Style for the Delete button */
        .delete-btn {
            background-color: #f44336; /* Red for delete */
            color: white;
            padding: 12px 15px;
            cursor: pointer;
            width: 60%; /* Adjust width */
            font-size: 12px;
            border-radius: 5px;
        }

        .delete-btn:hover {
            background-color: #c0392b;
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
            color: white;
        }

        .card.total {
            background-color: white; /* Orange for Total */
            color: black;
        }

        .card.today {
            background-color: #3498db; /* Green for Today */
            color: white;
        }

        .card.finished {
            background-color: white; /* Purple for Finished */
            color: black;
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
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Search button hover effect */
        .search-btn:hover {
            background-color: darkblue;
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


        /* Modal content styling */
        .modal-content {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            max-width: 600px; /* Max width for modal */
            width: 100%; /* Ensure it takes up full width up to 600px */
            margin: 0 auto; /* Center the modal horizontally */
            display: flex; /* Flexbox layout */
            align-items: center; /* Vertically center items */
            justify-content: flex-start; /* Align content to the left */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed; /* Fix modal in the center of the screen */
            top: 50%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Ensure it is centered both vertically and horizontally */
        }

        /* Modal header */
        .modal-content h3 {
            text-align: left; /* Align heading to the left */
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        /* Modal content layout: Left (image) and Right (information) */
        .modal-body {
            display: flex; /* Use flexbox for side-by-side layout */
            align-items: flex-start; /* Align items to the top */
            width: 100%; /* Full width */
        }

        /* Image styling (on the left side) */
        .modal-photo {
            width: 150px; /* Set image size */
            height: 150px; /* Make image square */
            object-fit: cover;
            margin-right: 20px; /* Space between image and text */
            border-radius: 8px;
        }

        /* Right side content (text) */
        .modal-text {
            display: flex;
            flex-direction: column; /* Stack text vertically */
            justify-content: flex-start; /* Align text to the top */
            flex-grow: 1; /* Allow text to take up remaining space */
        }

        /* Text styling for heading and paragraphs */
        .modal-text h3 {
            color: #3498db; /* Heading color */
            font-size: 20px;
            margin-bottom: 10px;
        }

        .modal-text p {
            color: #555;
            font-size: 16px;
            margin: 5px 0;
        }

        /* Icon styling (optional) */
        .modal-content .icon {
            font-size: 120px; /* Icon size */
            color: #007bff;
            margin-bottom: 20px; /* Space between icon and text */
        }

        /* Line separator between items */
        .modal-content p {
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }


        /* Responsive adjustments */
        @media (max-width: 768px) {
            .modal-content {
                width: 80%;
            }
        }

        /* Barangay Official Cards styles */
        .barangay-official-card {
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 15px;
            margin: 10px;
            width: calc(33% - 20px); /* Three cards per row */
            display: flex; /* Use flexbox for layout */
            align-items: center; /* Vertically align items */
            text-align: left; /* Align text to the left */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-out, box-shadow 0.3s ease-out; /* Smooth transition for hover effect */
            height: 300px; /* Fix height for the card */
            position: relative;
            overflow: hidden; /* Prevent content from overflowing */
            border-left: 10px solid #3498db; /* Blue border, increased size */
            border-top: 10px solid #3498db; /* Blue border, increased size */
        }

        .barangay-official-card:hover {
            transform: scale(1.05); /* Zoom in effect */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Darker shadow on hover */
        }

        .barangay-officials-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .barangay-official-card h3 {
            font-weight: 900;
            color: #3498db;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .barangay-official-card p {
            color: #555;
            font-size: 14px;
            margin: 5px 0; /* Adjust margin for paragraphs */
        }

        /* Updated image styles to make the image even larger */
        .official-photo {
            width: 200px; /* Increased size */
            height: 250px; /* Increased size */
            object-fit: cover;
            margin-right: 20px; /* Increased space between image and text */
            border-radius: 8px; /* Keep rounded corners for the image */
            transition: transform 0.3s ease-out; /* Smooth transition for image zoom */
        }

        /* Ensure text is aligned properly on the card */
        .barangay-official-card .content {
            display: flex;
            flex-direction: column; /* Stack text vertically */
            justify-content: space-between; /* Make the text take up remaining space */
            flex-grow: 1; /* Allow text content to take up available space */
        }

        /* Zoom effect on image when card is hovered */
        .barangay-official-card:hover .official-photo {
            transform: scale(1.1); /* Zoom the image on hover */
        }

        .barangay-official-card .content h3 {
            margin: 0; /* Remove margin for name */
        }

        .barangay-official-card .content p {
            margin: 5px 0; /* Adjust margin for paragraphs */
        }

        .nav-link {
            cursor: pointer;
            padding: 10px;
            color: white; /* White color for initial state */
            text-decoration: none;
        }


        .nav-link.active {
            color: #007bff; /* Change color of active link to blue */
        }

        .nav-link:hover {
            color: #007bff; /* Color on hover for all links */
        }





    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <img src="logo.png" alt="Barangay Logo" class="logo">
        <div class="nav-links">
            <span class="nav-link" onclick="setActiveLink(this); showDashboard()">Dashboard</span>
            <span class="nav-link" onclick="setActiveLink(this); showBarangayOfficial()">Barangay Official</span>
            <span class="nav-link" onclick="setActiveLink(this); showBookAppointment()">Book Appointment</span>
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

        <br>
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
    

    <!-- Barangay Official Section (Hidden by default) -->
    <div class="content hidden" id="barangayOfficialContent">
        <div class="barangay-officials-container">
            <!-- Cards will be dynamically inserted here by JavaScript -->
        </div>
    </div>

    
    <script>

        // Function to handle active link styling
        function setActiveLink(link) {
            // Get all nav links
            const links = document.querySelectorAll('.nav-link');

            // Remove active class from all links
            links.forEach(link => {
                link.classList.remove('active');
            });

            // Add active class to the clicked link
            link.classList.add('active');
        }



        // Function to show barangay officials
        function showBarangayOfficial() {
            // Hide other sections (e.g., Dashboard and Appointment Book)
            document.getElementById("dashboardContent").classList.add("hidden");
            document.getElementById("bookAppointmentContent").classList.add("hidden");
            document.getElementById("barangayOfficialContent").classList.remove("hidden");

            // Simulating Barangay Official Data with image URLs
            const barangayOfficials = [
                { 
                    name: "Juan Dela Cruz", 
                    position: "Barangay Captain", 
                    contact: "09123456789",
                    image: "municipal.jpg"  // Image file path
                },
                { 
                    name: "Maria Santos", 
                    position: "Barangay Secretary", 
                    contact: "09123456788",
                    image: "municipal.jpg"  // Image file path
                },
                { 
                    name: "Carlos Garcia", 
                    position: "Barangay Treasurer", 
                    contact: "09123456787",
                    image: "municipal.jpg"  // Image file path
                },
                { 
                    name: "Liza Aquino", 
                    position: "Barangay Kagawad", 
                    contact: "09123456786",
                    image: "municipal.jpg"  // Image file path
                },
                { 
                    name: "Miguel Reyes", 
                    position: "Barangay Kagawad", 
                    contact: "09123456785",
                    image: "municipal.jpg"  // Image file path
                },
                { 
                    name: "Ana Lopez", 
                    position: "Barangay Kagawad", 
                    contact: "09123456784",
                    image: "municipal.jpg"  // Image file path
                }
            ];

            // Get the container where the cards will be shown
            const barangayOfficialContainer = document.querySelector("#barangayOfficialContent .barangay-officials-container");

            // Clear previous content if there is any
            barangayOfficialContainer.innerHTML = '';

            // Loop through the barangayOfficials array and create cards dynamically
            barangayOfficials.forEach(official => {
                const card = `
                    <div class="barangay-official-card">
                        <img src="${official.image}" alt="${official.name}" class="official-photo">
                        <div class="content">
                            <div class="info">
                                <h3>${official.name}</h3>
                                <p>Position: ${official.position}</p>
                                <p>Contact: ${official.contact}</p>
                            </div>
                        </div>
                    </div>
                `;
                barangayOfficialContainer.innerHTML += card;
            });
        }


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
            document.getElementById("barangayOfficialContent").classList.add("hidden");
            updateDashboard(); // Optional: if you want to update dashboard on view
        }

        function showBookAppointment() {
            document.getElementById("dashboardContent").classList.add("hidden");
            document.getElementById("bookAppointmentContent").classList.remove("hidden");
            document.getElementById("barangayOfficialContent").classList.add("hidden");
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