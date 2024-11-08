<?php include 'db_connection.php'; 
include 'navbar.php'?>
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
    <h2>Edit User</h2>
    <form action="updateUserAdmin.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $user['first_name']; ?>" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $user['last_name']; ?>" required><br>

        <label for="middle_name">Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name" value="<?php echo $user['middle_name']; ?>"><br>

        <label for="suffix">Suffix:</label>
        <input type="text" id="suffix" name="suffix" value="<?php echo $user['suffix']; ?>"><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" value="<?php echo $user['dob']; ?>" required><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male" <?php if($user['gender'] == 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if($user['gender'] == 'Female') echo 'selected'; ?>>Female</option>
        </select><br>

        <label for="mobile_number">Mobile Number:</label>
        <input type="text" id="mobile_number" name="mobile_number" value="<?php echo $user['mobile_number']; ?>" required><br>

        <label for="tel_number">Telephone Number:</label>
        <input type="text" id="tel_number" name="tel_number" value="<?php echo $user['tel_number']; ?>"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br>

        <label for="house_number">House Number:</label>
        <input type="text" id="house_number" name="house_number" value="<?php echo $user['house_number']; ?>"><br>

        <label for="street">Street:</label>
        <input type="text" id="street" name="street" value="<?php echo $user['street']; ?>"><br>

        <label for="barangay">Barangay:</label>
        <input type="text" id="barangay" name="barangay" value="<?php echo $user['barangay']; ?>"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Update User">
    </form>
</body>
</html></select>