
<?php
include 'db_connection.php';

// Assuming $email is retrieved from session or request
$email = $_SESSION['email'] ?? '';

if (empty($email)) {
    die("Email is not set in the session.");
}

// Fetch the user's first name from the database
$query = "SELECT first_name FROM users WHERE email = ?";
if ($stmt = $conn->prepare($query)) {
    $stmt->bind_param("s", $email); // Assuming email is a string
    $stmt->execute();
    $stmt->bind_result($first_name);
    $stmt->fetch();
    $stmt->close();
} else {
    // Handle query preparation error
    die("Database query failed: " . $conn->error);
}
?>

<html>

<header><nav class="navbar navbar-dark navbar-expand-lg">
    <div class="container-fluid"><a class="navbar-brand" href="index.php"><img class="navbar-brand-logo" alt="Logo" src="logo.png" width="110" height="110"><span class="brand-name">OSSM</span></a>
        <div class="d-flex align-items-center ms-auto"><span class="username">Hello, <?php echo htmlspecialchars($first_name); ?></span>
            <div class="dropdown-center ms-3"><a class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="Hamburger-Icon" src="Burger icon.png" alt="Burger Icon" width="36" height="36"></a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="account_profilee.php">Profile</a></li>
                    <li><a class="dropdown-item" href="trasaac_history.php">History Transaction</a></li>
                    <li><a class="dropdown-item logout-item" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
</header>







    
</body>
</html>
