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
        password = ? 
        WHERE id = ?");
    $stmt->bind_param("sssssssssssssi", $first_name, $last_name, $middle_name, $suffix, $dob, $gender, $mobile_number, $tel_number, $email, $house_number, $street, $barangay, $password, $user_id);

    if ($stmt->execute()) {
        echo "<script>alert('User updated successfully.'); window.location.href='userscontent.php';</script>";
        exit;
    } else {
        $_SESSION['status'] = "Error updating user: " . $stmt->error;
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
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
<body>
    <div class="container">
        <h2>Edit User</h2>
        <?php if(isset($_SESSION['status'])): ?>
            <div class="alert alert-info">
                <?php 
                echo $_SESSION['status']; 
                unset($_SESSION['status']); // Clear the status message
                ?>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo htmlspecialchars($user['first_name']); ?>" required><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo htmlspecialchars($user['last_name']); ?>" required><br>

            <label for="middle_name">Middle Name:</label>
            <input type="text" id="middle_name" name="middle_name" value="<?php echo htmlspecialchars($user['middle_name']); ?>"><br>

            <label for="suffix">Suffix:</label>
            <input type="text" id="suffix" name="suffix" value="<?php echo htmlspecialchars($user['suffix']); ?>"><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($user['dob']); ?>" required><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male" <?php if($user['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if($user['gender'] == 'Female') echo 'selected'; ?>>Female</option>
            </select><br>

            <label for="mobile_number">Mobile Number:</label>
            <input type="text" id="mobile_number" name="mobile_number" value="<?php echo htmlspecialchars($user['mobile_number']); ?>" required><br>

            <label for="tel_number">Telephone Number:</label>
            <input type="text" id="tel_number" name="tel_number" value="<?php echo htmlspecialchars($user['tel_number']); ?>"><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br>

            <label for="house_number">House Number:</label>
            <input type="text" id="house_number" name="house_number" value="<?php echo htmlspecialchars($user['house_number']); ?>"><br>

            <label for="street">Street:</label>
            <input type="text" id="street" name="street" value="<?php echo htmlspecialchars($user['street']); ?>"><br>

            <label for="barangay">Barangay:</label>
            <input type="text" id="barangay" name="barangay" value="<?php echo htmlspecialchars($user['barangay']); ?>"><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br>

            <input type="submit" value="Update User">
        </form>
    </div>
</body>
</html>