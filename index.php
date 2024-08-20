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
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
        </nav>

        <h2>Welcome to the Homepage</h2>
        <p>This is the homepage of your website. You can add content here to introduce visitors to your site and provide links to other pages.</p>
        
        <p>Feel free to customize this page with your own content and design. You can add sections for news, updates, or any other information relevant to your website.</p>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Website Name. All rights reserved.</p>
    </footer>
</body>
</html>
