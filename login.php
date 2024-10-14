
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="64603179338-p984tmfnt1t548armn1ua3l7blvv0e67.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" type="img/png" href="logo.png">
    <title>Welcome</title>
    <style>
        body {
            background-image: url('bg.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative; 
        }
        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        .logo {
            max-width: 200px; 
            height: auto;
        }
        .link-container {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            width: 100%;
            max-width: 400px;
        }
        .link {
            text-decoration: underline;
            color: rgb(0, 0, 0);
        }
        .btn-center {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .btn-primary {
            width: 100%;
        }
        .form-container {
            width: 100%;
            max-width: 400px;
        }
        .form-check-label {
            margin-left: 5px;
        }
        .form-floating .form-control {
            border-radius: 0 0 8px 8px; 
        }
        .form-floating:first-child .form-control {
            border-radius: 8px 8px 0 0; 
        }
        .form-floating:last-child .form-control {
            border-radius: 0 0 8px 8px; 
        }
        .form-floating+.form-floating .form-control {
            border-top: 0; 
        }
        .form-floating label {
            padding-left: 12px;
        }
        .footer-links {
            position: absolute;
            bottom: 10px; 
            right: 10px; 
            font-size: 0.9em;
            color: rgb(0, 0, 0);
        }
        .footer-links a {
            text-decoration: none;
            color: rgb(0, 0, 0);
            margin-left: 15px;
        }
        .error-message {
            color: red;
            margin-top: 10px;
            display: none;
            text-align: left;
        }
        .error-container {
            text-align: left;
            margin-top: 10px;
        }
        h2 {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            font-style: normal;
            color: rgb(0, 0, 0);
        }
        .social-login-container {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .social-login-container a {
            color: #fff;
            text-decoration: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5em;
        }
        .facebook {
            background-color: #3b5998;
        }
        .gmail {
            background-color: #db4437;
        }
        .x {
            background-color: #1da1f2;
        }
        .captcha-container {
            display: flex;
            justify-content: center;
            margin-top: 20px; 
        }
        .error-message {
            color: red;
            margin-top: 5px;
            display: none;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <a href="index.php"><img src="logo.png" alt="Welcome Image" class="img-fluid mb-3 logo"></a>
        <h2>ONE-STOP SAN MATEO</h2>
        <p></p>
        <div class="form-container">
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div id="emailError" class="error-message">Please enter a valid email address.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div id="passwordError" class="error-message">Please enter your password.</div>
                </div>
                <div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>        
            </form>
            <div class="link-container">
                <a href="CreateAccount.php" class="link">Create Account</a>
                <a href="Forgot password.html" class="link">Forgot Password</a>
            </div>
            <div class="footer-links">
                <a href="#">Terms of Service</a> | 
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
    <?php
    
include 'db_connection.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

        

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare and bind
            $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($hashed_password);
                $stmt->fetch();

                if (password_verify($password, $hashed_password)) {
                    echo "<div class='alert alert-success mt-3'>Login successful!</div>";
                } else {
                    echo "<div class='alert alert-danger mt-3'>Invalid email or password.</div>";
                }
            } else {
                echo "<div class='alert alert-danger mt-3'>Invalid email or password.</div>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
    </body>
    </html>