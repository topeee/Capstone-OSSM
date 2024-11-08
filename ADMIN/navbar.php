<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="admin.css">
<title>Responsive Sidebar Menu</title>
</head>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #2c2c36;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    display: flex;
    align-items: center;
    width: 90%;
    height: 600px;
    background-color: #79335b;
    border-radius: 10px;
}

.sidebar {
    width: 200px;
    height: 600px;
    background-color: #510a32;
    color: white;
    transition: width 0.3s;
    overflow: hidden;
    border-radius: 10px;
    padding: 10px 0;
}

.sidebar .toggle-btn {
    background-color: transparent;
    color: white;
    border: none;
    font-size: 20px;
    position: relative;
    left: 10px;
    padding: 10px;
    cursor: pointer;
}

.sidebar ul.menu {
    list-style: none;
    padding-top: 20px;
}

.sidebar ul.menu li {
    padding: 0;
    text-align: left;
}

.sidebar ul.menu li a {
    text-decoration: none;
    color: white;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 15px;
    transition: background-color 0.3s;
    border-top-left-radius: 18px;
    border-bottom-left-radius: 18px;
}

.sidebar ul.menu li a:hover,
.sidebar ul.menu li a.active {
    background-color: #79335b;
}

.menu i {
    font-size: 18px;
    position: relative;
    left: 5px;
}

.menu span {
    margin-left: 5px;
}

/* Collapsed Sidebar */
.sidebar.collapsed {
    width: 60px;
}

.sidebar.collapsed .menu li a span {
    display: none;
}
.content {
        position: relative;
        transform: translate(-80%);
        left: 50%;
        top: -170px;
        width:200px;
        transition:  color 0.5s ease;      
    }
    .content:hover{
        color: #510a32;
        text-shadow: rgb(226, 115, 159) 1px 0 10px;
   }
</style>
<body>
    <div class="container">
        <div class="sidebar">
            <button class="toggle-btn" onclick="toggleSidebar()">⮜</button>
            <ul class="menu">
                <li><a href="#"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i><span>Emails</span></a></li>
                <li><a href="#" class="active"><i class="fa-solid fa-chart-column"></i><span>Charts</span></a></li>
                <li><a href="#"><i class="fa-solid fa-gem"></i><span>premium</span></a></li>
                <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i><span>logout</span></a></li>
            </ul>
        </div>
              <div class="content">
            <h1>A B A N</h1>
            <p>Follow for more :)</p>
        </div>
    </div>
    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const toggleBtn = document.querySelector('.toggle-btn');

            sidebar.classList.toggle('collapsed');

            // Update the toggle button arrow direction
            if (sidebar.classList.contains('collapsed')) {
                toggleBtn.innerHTML = '⮞'; // Point right when closed
            } else {
                toggleBtn.innerHTML = '⮜'; // Point left when open
            }
        }
    </script>