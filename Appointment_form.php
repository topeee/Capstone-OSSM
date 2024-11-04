<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Appointment Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
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

        /* Appointment Details Table */
        .appointment-details {
            margin-top: 30px;
        }

        .appointment-details h3 {
            margin-bottom: 15px;
            color: #2c3e50;
            font-size: 24px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            overflow-x: auto;
        }

        .table thead {
            background-color: blue;
            color: #ecf0f1;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table-striped tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Appointment Booking Form */
        .appointment-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
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

        .dashboard-header {
            margin-top: 20px;
            text-align: center; /* Center the text */
            margin-bottom: 20px; /* Optional: Add some space below the header */
            color: #2c3e50; /* Optional: Change header color */
            font-size: 2em; /* Optional: Increase font size */
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

    <!-- Main Content -->
    <h1 class="dashboard-header">User Dashboard</h1>
    <div class="content" id="dashboardContent">
        <div class="dashboard-cards">
            <div class="card" onclick="showAppointmentDetails('Upcoming Appointment')">
                <h3>Upcoming Appointment</h3>
                <p id="upcomingCount">0</p>
            </div>
            <div class="card" onclick="showAppointmentDetails('Total Appointment')">
                <h3>Total Appointment</h3>
                <p id="totalCount">0</p>
            </div>
            <div class="card" onclick="showAppointmentDetails('Appointment Today')">
                <h3>Appointment Today</h3>
                <p id="todayCount">0</p>
            </div>
            <div class="card" onclick="showAppointmentDetails('Finished Appointment')">
                <h3>Finished Appointment</h3>
                <p id="finishedCount">0</p>
            </div>
        </div>
    </div>


            <!-- Appointment Details Table -->
    <div class="appointment-details" id="appointmentDetails">
        <h3>Appointment Details</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Service</th>
                    <th>Type of Document</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="appointmentTableBody">
                <!-- Appointment data will be populated here -->
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

    <script>
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

        function showAppointmentDetails(cardTitle) {
            const tableBody = document.getElementById("appointmentTableBody");
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
                const row = `<tr>
                    <td>${appointment.name}</td>
                    <td>${appointment.email}</td>
                    <td>${appointment.service}</td>
                    <td>${appointment.serviceOptions || '-'}</td>
                    <td>${appointment.date}</td>
                    <td>${appointment.time}</td>
                    <td><button class="delete-btn" onclick="deleteAppointment(${index}, '${cardTitle}')">Delete</button></td>
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
