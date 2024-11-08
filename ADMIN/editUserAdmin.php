<?php 
include 'db_connection.php'; 
session_start(); // Start the session

// Check if the user ID is set in the URL
if (isset($_GET['id'])) {
    $user_id = intval($_GET['id']); // Ensure the user ID is an integer

    // Fetch user data from the database using prepared statements
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        $_SESSION['status'] = "Error fetching user data.";
        header("Location: userscontent.php");
        exit;
    }
    $stmt->close();
} else {
    header("Location: userscontent.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $middle_name = htmlspecialchars($_POST['middle_name']);
    $suffix = htmlspecialchars($_POST['suffix']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $mobile_number = htmlspecialchars($_POST['mobile_number']);
    $tel_number = htmlspecialchars($_POST['tel_number']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $house_number = htmlspecialchars($_POST['house_number']);
    $street = htmlspecialchars($_POST['street']);
    $barangay = htmlspecialchars($_POST['barangay']);
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $user['password'];
    $is_admin = intval($_POST['is_admin']);

    // Update user data using prepared statements
    $stmt = $conn->prepare("UPDATE users SET 
        first_name = ?, 
        last_name = ?, 
        middle_name = ?, 
        suffix = ?, 
        dob = ?, 
        gender = ?, 
        mobile_number = ?, 
        tel_number = ?, 
        email = ?, 
        house_number = ?, 
        street = ?, 
        barangay = ?, 
        password = ?, 
        is_admin = ? 
        WHERE id = ?");
    $stmt->bind_param("ssssssssssssssi", $first_name, $last_name, $middle_name, $suffix, $dob, $gender, $mobile_number, $tel_number, $email, $house_number, $street, $barangay, $password, $is_admin, $user_id);

    if ($stmt->execute()) {
        echo "<script>alert('User updated successfully.'); window.location.href='userscontent.php';</script>";
        exit;
    } else {
        $_SESSION['status'] = "Error updating user: {$stmt->error}";
    }
    $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1000px;
            margin: 10px auto;
            padding: 30px 40px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .form-group label {
            font-weight: bold;
            color: #555;
        }
        .form-control {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-row {
            display: flex;
            flex-wrap: wrap;
        }
        .form-group {
            padding: 10px;
        }

        .button-wrapper {
            display: flex;
            justify-content: center;
            gap: 15px; /* Space between the buttons */
            margin-top: 20px;
        }

        .btn-update {
            width: 150px;
            padding: 12px;
            font-size: 16px;
            background-color: #28a745; /* Green color for success */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: inline-block;
            text-align: center;
            box-sizing: border-box;
        }

        .btn-update:hover {
            background-color: #218838; /* Darker green on hover */
            transform: translateY(-3px); /* Slightly raise the button */
        }

        .btn-cancel {
            width: 150px;
            padding: 12px;
            font-size: 16px;
            background-color: red; /* Gray color for cancel */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: inline-block;
            text-align: center;
            box-sizing: border-box;
        }

        .btn-cancel:hover {
            background-color: #c82333; /* Darker red on hover */
            transform: translateY(-3px); /* Slightly raise the button */
        }

</style>
<body>
    <div class="container">
        <h2>Edit User</h2>
        <?php if(isset($_SESSION['status'])): ?>
            <div class="alert alert-info">
                <?php 
                echo $_SESSION['status']; 
                unset($_SESSION['status']);
                ?>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo htmlspecialchars($user['first_name']); ?>" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo htmlspecialchars($user['last_name']); ?>" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="middle_name">Middle Name:</label>
                    <input type="text" id="middle_name" name="middle_name" class="form-control" value="<?php echo htmlspecialchars($user['middle_name']); ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="suffix">Suffix:</label>
                    <input type="text" id="suffix" name="suffix" class="form-control" value="<?php echo htmlspecialchars($user['suffix']); ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" class="form-control" value="<?php echo htmlspecialchars($user['dob']); ?>" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" class="form-control" required>
                        <option value="Male" <?php if($user['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                        <option value="Female" <?php if($user['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="mobile_number">Mobile Number:</label>
                    <input type="text" id="mobile_number" name="mobile_number" class="form-control" value="<?php echo htmlspecialchars($user['mobile_number']); ?>" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="tel_number">Telephone Number:</label>
                    <input type="text" id="tel_number" name="tel_number" class="form-control" value="<?php echo htmlspecialchars($user['tel_number']); ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="house_number">House Number:</label>
                    <input type="text" id="house_number" name="house_number" class="form-control" value="<?php echo htmlspecialchars($user['house_number']); ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="street">Street:</label>
                    <input type="text" id="street" name="street" class="form-control" value="<?php echo htmlspecialchars($user['street']); ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="barangay">Barangay:</label>
                    <input type="text" id="barangay" name="barangay" class="form-control" value="<?php echo htmlspecialchars($user['barangay']); ?>">
                </div>

                <div class="form-group col-md-4">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>

                <div class="form-group col-md-4">
                    <label for="is_admin">Role:</label>
                    <select id="is_admin" name="is_admin" class="form-control" required>
                        <option value="0" <?php if($user['is_admin'] == 0) echo 'selected'; ?>>User</option>
                        <option value="1" <?php if($user['is_admin'] == 1) echo 'selected'; ?>>Admin</option>
                    </select>
                </div>
            </div>
            <div class="button-wrapper">
                <a href="userscontent.php" class="btn-cancel">Cancel</a>
                <button type="submit" class="btn-update">Update User</button>
            </div>
        </form>
    </div>
</body>
</html>