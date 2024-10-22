<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Global Styles */
        body { 
            
            margin: 0;
            font-family: 'Roboto', sans-serif;
            
            color: black;
            overflow-x: hidden;
            transition: background 0.5s;
            background: #fff;
        }

        .dashboard-text {
            color: black;
            padding: 10px 20px;
            text-align: left;
            position: fixed;
            top: 0;
            left: 300px;
            width: calc(100% - 300px);
            z-index: 1;
            font-size: 36px;
            font-weight: bold;
            margin-top: 70px;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: left 0.3s, width 0.3s;
        }

        .sidenav {
            height: 100%;
            width: 300px;
            position: fixed;
            top: 0;
            left: 0;
            background:#8B0000;
            backdrop-filter: blur(10px);
            border-right: 1px solid rgba(255, 255, 255, 0.2);
            overflow-x: hidden;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            transition: width 0.3s, backdrop-filter 0.3s;
        }


        .sidenav img {
            width: 130px;
            margin-bottom: 20px;
            margin-top: 20px;
            transition: width 0.3s;
            filter: drop-shadow(0 5px 5px rgba(0, 0, 0, 0.2));
        }

        .sidenav h2 {
            color: white;
            margin: 0;
            padding: 15px;
            font-size: 20px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: opacity 0.3s;
        }

        .sidenav a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: flex;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
            transition: background-color 0.3s ease, opacity 0.3s;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin-bottom: 10px;
            backdrop-filter: blur(10px);
        }

        .sidenav a i {
            margin-right: 15px;
            font-size: 22px;
        }

        .sidenav a:hover {
            background-color: navy;
        }

        .main-content {
            margin-left: 300px;
            padding: 40px;
            padding-top: 10%;
            transition: margin-left 0.3s;
        }

        .container-group {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .container {
            width: calc(25% - 30px);
            height: 220px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            font-size: 20px;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.3s ease;
            color: black;
            text-align: center;
            position: relative; /* Allows positioning of the number inside */

        }

        .number {
            position: absolute;
            bottom: 10px; /* Adjusts the vertical position */
            right: 10px;  /* Adjusts the horizontal position */
            font-size: 23px;
            font-weight: 100;
            color: #ff6b6b; /* Number color */
}

        .container i {
            margin-right: 10px;
            font-size: 26px;
            color: #ff6b6b;
        }

        .container:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }

        .logout {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #ff6b6b;
            font-size: 18px;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .logout i {
            margin-right: 8px;
            font-size: 22px;
        }

        .logout:hover {
            color: #ff3333;
        }

        .switch {
            position: fixed;
            top: 20px;
            right: 20px;
            font-size: 17px;
            display: inline-block;
            width: 4em;
            height: 2em;
            margin-right: 85%;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            --background: #2c2c54;
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--background);
            transition: 0.5s;
            border-radius: 30px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 1.5em;
            width: 1.5em;
            border-radius: 50%;
            left: 10%;
            bottom: 15%;
            background: #fff;
            transition: 0.5s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        input:checked + .slider {
            background-color: #6f42c1;
        }

        input:checked + .slider:before {
            transform: translateX(100%);
        }

        body.dark-mode {
    background: #141414;
    color: #e0e0e0;
}

body.dark-mode .dashboard-text {
    color: #ff6b6b;
}

body.dark-mode .sidenav {
    background: rgba(30, 30, 30, 0.8);
    border-right: 1px solid rgba(50, 50, 50, 0.5);
}

body.dark-mode .sidenav a {
    color: #e0e0e0;
}

body.dark-mode .sidenav a:hover {
    background-color: rgba(255, 107, 107, 0.6);
}

body.dark-mode .main-content {
    color: white;
}

body.dark-mode .container {
    background: rgba(40, 40, 40, 0.8);
    border: 1px solid rgba(60, 60, 60, 0.6);
    color: white; /* Set text color to white */
}

body.dark-mode .container:hover {
    background: rgba(60, 60, 60, 0.9);
}

body.dark-mode .logout {
    color: #ff6b6b;
}

body.dark-mode .logout:hover {
    color: #ff3333;
}


        .toggle-btn {
            position: absolute;
            top: 20px;
            left: 300px;
            z-index: 2;
            font-size: 24px;
            background-color: #2c2c54;
            color: white;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: left 0.3s, background-color 0.3s, transform 0.3s ease;
            overflow: auto ;

        }

        .toggle-btn:hover {
            background-color: #ff6b6b;
            transform: scale(1.1);
        }

        .collapsed .sidenav {
            width: 80px;
            backdrop-filter: blur(5px);
        }

        .collapsed .sidenav img {
            width: 50px;
        }

        .collapsed .dashboard-text {
            left: 80px;
            width: calc(100% - 80px);
        }

        .collapsed .toggle-btn {
            left: 80px;
        }

        .collapsed .sidenav h2, .collapsed .sidenav a span {
            opacity: 0;
            pointer-events: none;
        }

        .collapsed .main-content {
            margin-left: 80px;
        }

        .collapsed .logout {
            margin-left: -80px;
        }
    </style>
</head>
<body>

    <div class="sidenav">
        <img src="img/finallogo.png" alt="Logo">
        <h2>Admin Dashboard</h2>
        <a href="#home"><i class="fa-solid fa-home"></i> Home</a>
        <a href="#services"><i class="fa-solid fa-users"></i> Brgy Officials</a>
        <a href="#about"><i class="fa-solid fa-users-cog"></i> Brgy Staff</a>
        <a href="#contact"><i class="fa-solid fa-address-card"></i> Residence Record</a>
        <a href="#profile"><i class="fa-solid fa-file-alt"></i> Brgy Clearance</a>
        <a href="#profile"><i class="fa-solid fa-file-invoice"></i> Business Permit</a>
        <a href="#profile"><i class="fa-solid fa-file-certificate"></i> Certificate of Residency</a>
        <a href="#profile"><i class="fa-solid fa-book"></i> Blotter </a>
        
        <a href="#profile"><i class="fa-solid fa-house-user"></i> Household Record</a>
    </div>

    <div class="dashboard-text">
        
    </div>

    <div class="main-content">
        <div class="container-group">
        <div class="container"><i class="fa-solid fa-users"></i> POPULATION <span class="number">300</span></div>
            <div class="container"><i class="fa-solid fa-male"></i> MALE<span class="number">150</span></div>
            <div class="container"><i class="fa-solid fa-female"></i> FEMALE 3<span class="number">150</span></div>
            <div class="container"><i class="fa-solid fa-vote-yea"></i> VOTERS<span class="number">200</span></div>
            <div class="container"><i class="fa-solid fa-ban"></i> NON-VOTERS<span class="number">100</span></div>
            <div class="container"><i class="fa-solid fa-map-marker-alt"></i> PUROK<span class="number">7</span></div>
            <div class="container"><i class="fa-solid fa-clipboard-list"></i> BLOTTER RECORDS<span class="number">0</span></div>
            <div class="container"><i class="fa-solid fa-male"></i> UNDERWEIGHT <span class="number">10</span></div>
            <div class="container"><i class="fa-solid fa-wheelchair"></i> PERSON WITH DISABILITY<span class="number">10</span></div>
            <div class="container"><i class="fa-solid fa-user-alt"></i> SENIOR CITIZEN<span class="number">50</span></div>
            <div class ="container"><i class="fa-solid fa-folder-open"></i> REQUESTED DOCUMENT<span class="number">1</span></div>
        </div>
    </div>

    <div class="toggle-btn"><i class="fas fa-bars"></i></div>

    <div class="logout"><i class="fas fa-sign-out-alt"></i> Logout</div>

    <label class="switch">
        <input type="checkbox" id="modeToggle">
        <span class="slider"></span>
    </label>

    <script>
        const toggleBtn = document.querySelector('.toggle-btn');
        const sidenav = document.querySelector('.sidenav');
        const mainContent = document.querySelector('.main-content');
        const dashboardText = document.querySelector('.dashboard-text');
        const logout = document.querySelector('.logout');
        const modeToggle = document.getElementById('modeToggle');
        
        toggleBtn.addEventListener('click', () => {
            document.body.classList.toggle('collapsed');
        });

        modeToggle.addEventListener('change', () => {
            document.body.classList.toggle('dark-mode');
        });
    </script>

</body>
</html>