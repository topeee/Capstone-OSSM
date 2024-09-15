<?php
session_start();
include 'db_connection.php';
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Fetch the user's first name from the database
    $query = "SELECT first_name FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("s", $email); // Assuming email is a string
        $stmt->execute();
        $stmt->bind_result($first_name);
        $stmt->fetch();
        $stmt->close();
    }
} else {
    $first_name = 'Guest';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="img/png" href="logo.png">
</head>

<style>
    body {
        background-image: url('bg.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
    }

    .container {
        padding: 20px;
        border-radius: 8px;
        background-color: lightblue;
        margin-top: 20px;
        border: 10px rgb(0, 70, 247) solid;
        display: flex;
        align-items: flex-start;
        flex-wrap: wrap;
    }

    .header-container {
        background: linear-gradient(to right, #00aaff, #0044ff);
        color: white;
        border-radius: 8px;
        padding: 15px;
        width: 100%;
        margin-bottom: 20px;
        text-align: left;
    }

    .header-content h1 {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .header-content p {
        font-size: 0.9rem;
    }

    .main-content {
        flex-grow: 1;
        width: 100%;
    }

    h5 {
        font-weight: 700;
        color: rgb(2, 71, 97);
    }

    .form-floating {
        margin-bottom: 15px;
    }

    .navbar {
        background-color: rgba(0, 0, 0, 0.5); 
    }

    .navbar-brand-logo {
        height: 40px; 
        margin-right: 10px;
    }

    .username {
        color: white;
        margin-right: 15px;
        font-weight: bold;
    }

    .Hamburger-Icon {
        height: 30px;
    }

    .toggle-header {
        cursor: pointer;
        color: #0044ff;
        font-weight: bold;
        margin-top: 20px;
    }

    .transaction-history {
        display: none;
        margin-top: 10px;
        overflow-x: auto;
    }

    .transaction-history table {
        width: 100%;
        margin-top: 10px;
        border-collapse: collapse;
    }

    .transaction-history th,
    .transaction-history td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .transaction-history th {
        background-color: #f2f2f2;
    }

    /* Responsive Styles */
    @media (min-width: 768px) {
        .container {
            flex-wrap: nowrap;
        }

        .header-container {
            width: 250px;
            margin-bottom: 0;
            margin-right: 20px;
        }

        .main-content {
            width: calc(100% - 270px);
        }
    }

    @media (max-width: 767px) {
        .header-content h1 {
            font-size: 1.5rem;
        }

        .form-floating {
            width: 100%;
        }

        .navbar-brand-logo {
            height: 30px;
        }
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="Homepage.html">
                <img src="logo.png" alt="Logo" class="navbar-brand-logo">
                <span>OSSM</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <span class="username">Hello, <?php echo htmlspecialchars($first_name); ?></span>
                    <a class="nav-link" href="#"><img src="" alt="Burger Icon" class="Hamburger-Icon"></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="container">
        <!-- Edit Profile Header -->
        <div class="header-container">
            <div class="header-content">
                <h1>Edit Profile</h1>
                <p>Update your personal information and account settings.</p>
            </div>
        </div>

        <div class="main-content">
            <!-- Toggle Header for Transaction History -->
            <div class="toggle-header" onclick="toggleTransactionHistory()">
                <h5>View Transaction History</h5>
            </div>
            <div class="transaction-history" id="transaction-history">
                <h5>TRANSACTION HISTORY</h5>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Data - Replace with dynamic content -->
                        <tr>
                            <td>2024-08-01</td>
                            <td>Payment Received</td>
                            <td>₱100.00</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>2024-08-15</td>
                            <td>Refund Issued</td>
                            <td>₱50.00</td>
                            <td>Completed</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Retrieve the form data
                $first_name = $_POST['firstname'];
                $last_name = $_POST['lastname'];
                $middle_name = $_POST['middlename'];
                $suffix = $_POST['suffix-dropdown'];
                $dob = $_POST['dob'];
                $gender = $_POST['gender-dropdown'];
                $email = $_POST['email'];
                $mn = $_POST['mn'];
                $tn = $_POST['tn'];
                $street = $_POST['street'];
                $house = $_POST['house#'];
                $subdivision = $_POST['sbd/vilg'];
                $barangay = $_POST['barangay-dropdown'];
                $oldPassword = $_POST['old_password'];
                $newPassword = $_POST['new_password'];
                $confirmPassword = $_POST['confirm_password'];

                // Update the user's profile information
                $query = "UPDATE users SET first_name = ?, last_name = ?, middle_name = ?, suffix = ?, dob = ?, gender = ?, email = ?, mobile_number = ?, tel_number = ?, street = ?, house_number = ?, subdivision_village = ?, barangay = ? WHERE email = ?";
                if ($stmt = $conn->prepare($query)) {
                    $stmt->bind_param("ssssssssssssss", $firstname, $lastname, $middlename, $suffix, $dob, $gender, $email, $mn, $tn, $street, $house, $subdivision, $barangay, $email);
                    $stmt->execute();
                    $stmt->close();
                }

                // Update the user's password if a new password is provided
                if (!empty($newPassword) && $newPassword === $confirmPassword) {
                    // Verify the old password before updating
                    $query = "SELECT password FROM users WHERE email = ?";
                    if ($stmt = $conn->prepare($query)) {
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        $stmt->bind_result($password);
                        $stmt->fetch();
                        $stmt->close();

                        // Verify the old password
                        if (password_verify($oldPassword, $password)) {
                            // Update the password
                            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                            $query = "UPDATE users SET password = ? WHERE email = ?";
                            if ($stmt = $conn->prepare($query)) {
                                $stmt->bind_param("ss", $hashedPassword, $email);
                                $stmt->execute();
                                $stmt->close();
                            }
                        }
                    }
                }

                // Redirect the user to the updated profile page
                header("Location: account_profile.php");
                exit();
            }
            ?>
            <h5>PERSONAL INFORMATION</h5><br>
            <form class="row g-3" action="" method="POST">
                <div class="col-md-3 form-floating">    
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                    <label for="firstname"><?php echo htmlspecialchars($first_name); ?></label>
                </div>
                <div class="col-md-3 form-floating">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                    <label for="lastname"><?php echo htmlspecialchars($first_name); ?></label>
                </div>
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name">
                    <label for="middlename"><?php echo htmlspecialchars($first_name); ?></label>
                </div>
                <div class="col-md-2 form-floating">
                    <select class="form-select" id="suffix-dropdown" name="suffix-dropdown">
                        <option value="" selected>Select a suffix</option>
                        <option value="Jr">Jr.</option>
                        <option value="Sr">Sr.</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                    </select>
                    <label for="suffix-dropdown">Suffix</label>
                </div>

                <div class="col-md-6 form-floating">
                    <input type="date" class="form-control" id="dob" name="dob" required>
                    <label for="dob">Date of Birth</label>
                </div>
                <div class="col-md-6 form-floating">
                    <select class="form-select" id="gender-dropdown" name="gender-dropdown" required>
                        <option value="" selected>Select a gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Prefer not to say">Prefer not to say</option>
                    </select>
                    <label for="gender-dropdown">Gender</label>
                </div>
                <div class="col-md-4 form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="col-md-4 form-floating">
                    <input type="tel" class="form-control" id="mn" name="mn" placeholder="Mobile Number" required>
                    <label for="mn">Mobile Number</label>
                </div>
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" id="tn" name="tn" placeholder="Tel Number">
                    <label for="tn">Tel Number</label>    
                </div>
                <div class="col-md-2 form-floating">
                    <input type="text" class="form-control" id="street" name="street" placeholder="Street" required>
                    <label for="street">Street</label>
                </div>
                <div class="col-md-2 form-floating">
                    <input type="text" class="form-control" id="house#" name="house#" placeholder="House #" required>
                    <label for="house#">House #</label>
                </div>
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" id="sbd/vilg" name="sbd/vilg" placeholder="Subdivision or Village">
                    <label for="sbd/vilg">Subdivision or Village</label>
                </div>
                <div class="col-md-4 form-floating">
                    <select class="form-select" id="barangay-dropdown" name="barangay-dropdown" required>
                        <option value="" selected>Select a barangay</option>
                        <option value="Ampid I">Ampid I</option>
                        <option value="Ampid II">Ampid II</option>
                        <option value="Banaba">Banaba</option>
                        <option value="Dulong Bayan I">Dulong Bayan I</option>
                        <option value="Dulong Bayan II">Dulong Bayan II</option>
                        <option value="Guinayang">Guinayang</option>
                        <option value="Guitnangbayan I">Guitnangbayan I</option>
                        <option value="Guitnangbayan II">Guitnangbayan II</option>
                        <option value="Gulod Malaya">Gulod Malaya</option>
                        <option value="Malanday">Malanday</option>
                        <option value="Maly">Maly</option>
                        <option value="Pintong Bukawe">Pintong Bukawe</option>
                        <option value="Sto. Nino">Sto. Niño</option>
                        <option value="Sta. Ana">Sta. Ana</option>
                        <option value="Silangan">Silangan</option>
                    </select>
                    <label for="barangay-dropdown">Barangay</label>
                </div>
                <h5>CHANGE PASSWORD</h5><br>
                <div class="col-md-4 form-floating">
                    <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old Password" required>
                    <label for="old_password">Old Password</label>
                </div>
                <div class="col-md-4 form-floating">
                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password" required>
                    <label for="new_password">New Password</label>
                </div>
                <div class="col-md-4 form-floating">
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                    <label for="confirm_password">Confirm Password</label>
                </div>
                <!-- Update Profile Button -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function toggleTransactionHistory() {
            var transactionHistory = document.getElementById('transaction-history');
            if (transactionHistory.style.display === 'none' || transactionHistory.style.display === '') {
                transactionHistory.style.display = 'block';
            } else {
                transactionHistory.style.display = 'none';
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-CtwPqlu8tzE40qmaZBo1xym+bWvZmBZWtFlF0E2A5c0/3CC5NS95ImEAD3GZ0Oii" crossorigin="anonymous"></script>
</body>
</html>
