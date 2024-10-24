
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>
                        <div class="alert alert-success">
                            <h5><?= $_SESSION['status'];?></h5>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                
                    }
                    ?>
            

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        }
        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Optional: Add background to content for better visibility */
            border-radius: 10px; /* Optional: Add rounded corners */
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1); /* Optional: Add a shadow */
        }
        .logo {
            max-width: 200px;
            height: auto;
        }
        .form-container {
            width: 100%;
            max-width: 400px;
            margin-top: 20px;
        }
        .btn-primary, .btn-secondary {
            width: 100%;
        }
        .resend-button {
            margin-top: 10px;
        }
        h2, h1, h6 {
            margin: 10px 0; /* Adjust spacing between text elements */
        }
        .error-message {
            color: red;
            display: none; /* Hidden by default */
            margin-top: 5px;
        }
    </style>
</head>
<body>
<div class="main-content">
        <img src="logo.png" alt="Welcome Image" class="img-fluid mb-4 logo">
        <h2>One-Stop San Mateo</h2>
        <h1>Forgot Password</h1>
        <h6>We will send a code to your email to reset your password.</h6>

        <div class="form-container">
            <form action="password_reset_code.php" method="POST">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="emailIn" name="email" placeholder="name@example.com" required>
                <label for="emailIn">Email address</label>
                <div class="error-message" id="errorMessage"></div> <!-- Error message -->
            </div>
            <button type="submit" class="btn btn-primary" name="password_reset_link">Send Password Link</button>
            <div class="resend-button" id="resendContainer" style="display:none;">
                <button type="button" class="btn btn-secondary" id="resendButton" onclick="resendCode()">Resend Code</button>
            </div>
            </form>
        </div>
        </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
