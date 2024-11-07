<?php 
session_start();
require_once 'config.php';
include 'db_connection.php';
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);
  
    // get profile info
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $userinfo = [
      'email' => $google_account_info['email'],
      'first_name' => $google_account_info['givenName'],
      'last_name' => $google_account_info['familyName'],
      'gender' => $google_account_info['gender'],
      'name' => $google_account_info['name'],
      'picture' => $google_account_info['picture'],
      'verifiedEmail' => $google_account_info['verifiedEmail'],
      'token' => $google_account_info['id'],
    ];
  
    // checking if user is already exists in database
    $sql = "SELECT * FROM users WHERE email ='{$userinfo['email']}'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      // user is exists
      $userinfo = mysqli_fetch_assoc($result);
      $token = $userinfo['token'];
    } else {
      // user is not exists
      $sql = "INSERT INTO users (email, first_name, last_name, gender, name, picture, verifiedEmail, token) VALUES ('{$userinfo['email']}', '{$userinfo['first_name']}', '{$userinfo['last_name']}', '{$userinfo['gender']}', '{$userinfo['name']}', '{$userinfo['picture']}', '{$userinfo['verifiedEmail']}', '{$userinfo['token']}')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $token = $userinfo['token'];
      } else {
        echo "User is not created";
        die();
      }
    }

  // Store email in session
  $_SESSION['email'] = $userinfo['email'];

  // Redirect to the same page to remove the code parameter from URL
  header('Location: Home.php');
  exit();
}

if (isset($_SESSION['user_token'])) {
  header("Location: Home.php");
  exit();
}

   


      //  //  //  //  //  //  //  //  //  //  //
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Please enter both email and password.";
    } else {
        $stmt = $conn->prepare("SELECT password, is_admin FROM users WHERE email = ?");
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($hashed_password, $is_admin);
                $stmt->fetch();

                if (password_verify($password, $hashed_password)) {
                    $_SESSION['email'] = $email;
                    $_SESSION['role'] = $is_admin ? 'admin' : 'user'; // Set the user's role based on is_admin

                    if ($is_admin) {
                        header('Location: ADMIN DASHBOARD OSSM/admn_dashboard.php');
                    } else {
                        header('Location: Home.php');
                    }
                    exit();
                } else {
                    $_SESSION['error'] = "Invalid password.";
                }
            } else {
                $_SESSION['error'] = "No account found with that email.";
            }
            $stmt->close();
        } else {
            $_SESSION['error'] = "Database error: Unable to prepare statement.";
        }
    }
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a href="home.php"><img src="logo.png" alt="Welcome Image" class="img-fluid mb-3 logo"></a>
        <h2>ONE-STOP SAN MATEO</h2>
        <p></p>
        
        <div class="form-container">
            <form action="" method="POST">   <?php
    if (isset($_SESSION['status'])) {
        ?>
        <div class="alert alert-danger">
            <h5><?= $_SESSION['status']; ?></h5>
        </div>
        <?php
        unset($_SESSION['status']);
    }
    ?>
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
                <a href="Forgot password.php" class="link">Forgot Password</a>
            </div>
<?php


if (isset($_SESSION['user_token'])) {
    header("Location: Home.php");
} else {
?>
    <div class="social-login-container">
        <a href="<?php echo $client->createAuthUrl(); ?>" class="gmail">
            <i class="bi bi-google"></i>
        </a>
        <a href="YOUR_FACEBOOK_AUTH_URL" class="facebook">
            <i class="bi bi-facebook"></i>
        </a>
        <a href="YOUR_TWITTER_AUTH_URL" class="x">
            <i class="bi bi-twitter"></i>
        </a>
    </div>
<?php
}
?>
           
    <div class="footer-links">
        <a href="#">Terms of Service</a> | 
        <a href="#">Privacy Policy</a>
    </div>

    <script>
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var emailError = document.getElementById('emailError');
            var passwordError = document.getElementById('passwordError');
            var isValid = true;
    
            // Email validation
            if (!email || !validateEmail(email)) {
                emailError.style.display = 'block';
                isValid = false;
            } else {
                emailError.style.display = 'none';
            }
    
            // Password validation
            if (!password) {
                passwordError.style.display = 'block';
                isValid = false;
            } else {
                passwordError.style.display = 'none';
            }

    
            return isValid; // Return false to prevent form submission if invalid
        }

        function validateEmail(email) {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    </script>
    
</body>
</html>
