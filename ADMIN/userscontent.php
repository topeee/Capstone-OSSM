<?php
include 'db_connection.php';


//USERS TABLE
// Fetch users from database
$sql = "SELECT id, name, email FROM users"; // Adjust the table and column names as needed
$result = $conn->query($sql);





// Get user ID from request
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = $_GET['id'];

    // Prepare SQL to delete a record
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {           
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: {$stmt->error}";
    }

    $stmt->close();  
} else {
    echo "Invalid user ID";
}

// $conn->close(); // Commented out to prevent closing the connection prematurely
 include 'navbar.php'; 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Content</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body {
        padding: 20px;
    }
    table {
        width: 100%;
        margin-top: 20px;
    }
    @media (max-width: 768px) {
        table thead {
            display: none;
        }
        table, table tbody, table tr, table td {
            display: block;
            width: 100%;
        }
        table tr {
            margin-bottom: 15px;
        }
        table td {
            text-align: right;
            padding-left: 50%;
            position: relative;
        }
        table td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-weight: bold;
            text-align: left;
        }
    }
</style>
<body>

<h2>Users Section</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Suffix</th>
            <th scope="col">DOB</th>
            <th scope="col">Gender</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Tel Number</th>
            <th scope="col">House Number</th>
            <th scope="col">Street</th>
            <th scope="col">Barangay</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT id, first_name, last_name, middle_name, suffix, dob, gender, mobile_number, tel_number, email, house_number, street, barangay FROM users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<th scope='row'>" . $row["id"] . "</th>";
                echo "<td>" . $row["first_name"] . "</td>";
                echo "<td>" . $row["middle_name"] . "</td>";
                echo "<td>" . $row["last_name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["suffix"] . "</td>";
                echo "<td>" . $row["dob"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["mobile_number"] . "</td>";
                echo "<td>" . $row["tel_number"] . "</td>";
                echo "<td>" . $row["house_number"] . "</td>";
                echo "<td>" . $row["street"] . "</td>";
                echo "<td>" . $row["barangay"] . "</td>";
                echo "</tr>";
            echo "<td><a href='editUserAdmin.php ' class='btn btn-primary btn-sm'>Edit</a> ";
            echo "<a href='userscontent.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Delete</a></td>";
            }
        } else {
            echo "<tr><td colspan='14'>No users found</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>
echo "<td><a href='userscontent.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Delete</a></td>";
