<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            margin: 20px 0;
        }
        nav a {
            margin: 0 15px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        footer {
            text-align: center;
            padding: 10px;
            background: #333;
            color: #fff;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Website</h1>
    </header>
    
    <div class="container">
        <nav>
            <a href="index.php">Home</a>
            <a href="logout.php">Logout</a>
            <a href="Create Account.html">Register</a>
            <a href="Login.html">login</a>
        </nav>

        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h2>
        <p>This is the homepage of your website. You are successfully logged in.</p>
        
        <p>Feel free to customize this page with your own content and design.</p>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Website Name. All rights reserved.</p>
    </footer>
</body>
</html>
