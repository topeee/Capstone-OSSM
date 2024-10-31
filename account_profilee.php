<?php
session_start();
include 'db_connection.php';
include 'header.php';
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
$query = "SELECT first_name, last_name, middle_name, suffix, dob, gender, tel_number, mobile_number, subdivision, house_number, street, barangay FROM users WHERE email = ?";
if ($stmt = $conn->prepare($query)) {
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($first_name, $last_name, $middle_name, $suffix, $dob, $tel_number, $gender, $mobile_number, $subdivision, $house_number, $street, $barangay);
    $stmt->fetch();
    $stmt->close();
} else {
    echo "Error preparing statement.";
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
        margin-bottom: 20px;
        border: 3px rgb(0, 70, 247) solid;
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
            <h5>PERSONAL INFORMATION</h5><br>
            <form class="row g-3" action="" method="POST">
                <div class="col-md-3 form-floating">    
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                    <label for="firstname"><?php echo htmlspecialchars($first_name); ?></label>
                </div>
                <div class="col-md-3 form-floating">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                    <label for="lastname"><?php echo htmlspecialchars($last_name); ?></label>
                </div>
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name">
                    <label for="middlename"><?php echo htmlspecialchars($middle_name); ?></label>
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
                    <?php echo htmlspecialchars($suffix); ?>
                </div>

                <div class="col-md-6 form-floating">
                    <input type="date" class="form-control" id="dob" name="dob" required>
                    <label for="dob">Date of Birth  <?php echo htmlspecialchars($dob); ?>  </label>
                </div>
                <div class="col-md-6 form-floating">
                    <select class="form-select" id="gender-dropdown" name="gender-dropdown" required>
                        <option value="" selected>Select a gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Prefer not to say">Prefer not to say</option>
                    </select>
                    <label for="gender-dropdown">Gender <?php echo htmlspecialchars($gender); ?></label>

                </div>

                <div class="col-md-4 form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    <label for="email">Email    <?php echo htmlspecialchars($email); ?> </label>
                </div>

                <div class="col-md-4 form-floating">
                    <input type="tel" class="form-control" id="mn" name="mn" placeholder="Mobile Number" required>
                    <label for="mn">Mobile Number  <?php echo htmlspecialchars( $mobile_number); ?> </label>
                </div>

                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" id="tn" name="tn" placeholder="Tel Number">
                    <label for="tn">Tel Number  <?php echo htmlspecialchars($tel_number); ?>  </label>     
                </div>

                <div class="col-md-2 form-floating">
                    <input type="text" class="form-control" id="street" name="street" placeholder="Street" required>
                    <label for="street">Street  <?php echo htmlspecialchars($street); ?></label>
                </div>
                
                <div class="col-md-2 form-floating">
                    <input type="text" class="form-control" id="house#" name="house#" placeholder="House #" required>
                    <label for="house#">House # <?php echo htmlspecialchars($house_number); ?></label>
                </div>

                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" id="sbd/vilg" name="sbd/vilg" placeholder="Subdivision or Village">
                    <label for="sbd/vilg">Subdivision or Village</label>
                    <?php echo htmlspecialchars($subdivision); ?>
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-CtwPqlu8tzE40qmaZBo1xym+bWvZmBZWtFlF0E2A5c0/3CC5NS95ImEAD3GZ0Oii" crossorigin="anonymous"></script>
</body>
</html>