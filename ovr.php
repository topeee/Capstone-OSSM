<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="pwd app.css">
    <link rel="icon" type="img/png" href="logo.png">
    <title>OVR TICKET SEARCH</title>
    
    <style>
        

        body {
            background-image: url('ovrTryc.jpg'); /* Replace with your image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center; /* Centered title */
        }
        
        label {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 16px;
            background-color: #f1f1f1;
        }

        input:focus {
            outline: none;
            border: 1px solid #0044ff;
            background-color: #fff;
        }

        .note {
            font-size: 15px;
            color: #e74c3c;
            margin-bottom: 25px;
            text-align: center;
        }

       /* Flexbox for the buttons to align side by side */
       .btn-container {
            display: flex;
            justify-content: space-between; /* Ensure the buttons are spaced out */
        }

        button {
            width: 48%; /* Adjust width so buttons fit side by side */
            padding: 10px;
            background-color: #0044ff;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0033cc;
        }

        button[type="reset"]:hover {
            background-color: #e74c3c;
        }

        .btn-container {
            display: flex;
            gap: 10px; /* Space between buttons */
            justify-content: center; /* Center the buttons horizontally */
        }

        .form-text {
            font-size: 14px;
            color: #888;
        }

         /* Make buttons smaller on mobile */
         @media (max-width: 767px) {
            button {
                width: 100%; /* Full width buttons for smaller screens */
                margin-bottom: 10px;
            }

            .btn-container {
                flex-direction: column;
            }
        }

        
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img class="navbar-brand-logo" alt="Logo" src="logo.png" width="110" height="110">
            <span class="brand-name">OSSM</span>
          </a>
          <div class="d-flex align-items-center ms-auto">
            <span class="username">Hello, Username</span>
            <div class="dropdown-center ms-3">
              <a class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="Hamburger-Icon" src="Burger icon.png" alt="Burger Icon" width="36" height="36">
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="account_profilee.php">Profile</a></li>
                <li><a class="dropdown-item" href="#">History Transaction</a></li>
                <li><a class="dropdown-item logout-item" href="login.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
    </nav>

     <!-- OVR Ticket Search Form -->
     <div class="container">
        <h1>OVR TICKET SEARCH</h1>
        <p class="note">Please ensure the information entered is correct for accurate results.</p>
        <form action="search_result.php" method="POST">
            <div class="mb-3">
                <label for="tickNo" class="form-label"><span style="color: red;">*</span> Ticket No</label>
                <input type="number" class="form-control" id="tickNo" name="tickNo" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label"><span style="color: red;">*</span> Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <div class="btn-container">
                <button type="reset" class="btn btn-danger">Clear</button>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>

</body>
</html>
