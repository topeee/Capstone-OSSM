<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sidebar on Hover with Push Content</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400;1,500&display=swap"
    rel="stylesheet"
  />

  <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v6.3.0/css/all.css"
  />

  <!-- Bootstrap Icons -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
  />

  <style>
    /* CSS Variables */
    :root {
      --body-bg-color: #dce4e3;
      --green: #18c29c;
      --light-green: #8ed7c6;
      --text-color: #084236;
      --sidebar-width: 80px;
      --sidebar-expanded-width: 250px;
    }

    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Body */
    body {
      background-color: var(--body-bg-color);
      color: var(--text-color);
      font-family: "Poppins", sans-serif;
      display: flex;
      transition: margin-left 0.3s ease;
    }

    /* Sidebar (Navbar) */
    .navbar {
      z-index: 2;
      width: var(--sidebar-width);
      background-color: var(--green);
      height: 100vh;
      position: fixed;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: width 0.3s ease;
      overflow: hidden;
    }

    /* Expand Sidebar on Hover */
    .navbar:hover {
      width: var(--sidebar-expanded-width);
    }

    /* Content Shift on Sidebar Hover */
    .navbar:hover ~ .main-content {
      margin-left: var(--sidebar-expanded-width);
    }

    /* Navbar Elements */
    .navbar-container {
      padding: 1rem;
      transition: padding 0.3s ease;
    }

    .navbar-logo-div {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.7rem;
      transition: margin 0.3s ease;
    }

    /* Search Bar */
    .navbar-search {
      width: 100%;
      background-color: var(--light-green);
      padding: 1rem;
      border-radius: 10px;
      margin-bottom: 1.2rem;
      opacity: 0;
      transition: opacity 0.3s ease, transform 0.3s ease;
      transform: translateX(-20px);
    }

    /* Show search input on hover */
    .navbar:hover .navbar-search {
      opacity: 1;
      transform: translateX(0);
    }

    /* Menu List */
    .menu-list {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.5rem;
      width: 100%;
    }

    .menu-item .menu-link {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.7rem;
      font-weight: 500;
      color: inherit;
      transition: padding 0.3s ease;
    }

    .menu-link-text {
      display: none;
      opacity: 0;
      transition: opacity 0.3s ease, transform 0.3s ease;
      transform: translateX(-20px);
    }

    /* Show text on hover */
    .navbar:hover .menu-link-text {
      display: inline;
      opacity: 1;
      transform: translateX(0);
    }

    /* User Information */
    .user-container {
      background-color: var(--light-green);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0.5rem 1rem;
      opacity: 0;
      transition: opacity 0.3s ease, transform 0.3s ease;
      transform: translateX(-20px);
    }

    /* Show user container on hover */
    .navbar:hover .user-container {
      opacity: 1;
      transform: translateX(0);
    }

    /* Main Content */
    .main-content {
      flex-grow: 1;
      margin-left: var(--sidebar-width);
      padding: 2rem;
      transition: margin-left 0.3s ease;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <aside class="navbar">
    <div class="navbar-container">
      <div class="navbar-logo-div">
        <div class="navbar-toggler">
          <i class="fas fa-bars"></i>
        </div>
      </div>


      <div class="menu-list">
        <div class="menu-item">
          <a href="#" class="menu-link">
            <i class="fa-solid fa-house-user"></i>
            <span class="menu-link-text">Dashboard Overview</span>
          </a>
        </div>
        <div class="menu-item">
          <a href="#" class="menu-link">
            <i class="fa-solid fa-calendar-check"></i>
            <span class="menu-link-text">Appointments</span>
          </a>
        </div>
        <div class="menu-item">
          <a href="#" class="menu-link">
            <i class="fa-solid fa-users"></i>
            <span class="menu-link-text">Users</span>
          </a>
        </div>
        <div class="menu-item">
          <a href="#" class="menu-link">
            <i class="bi bi-person-square"></i>
            <span class="menu-link-text">Admin</span>
          </a>
        </div>
        <div class="menu-item">
          <a href="#" class="menu-link">
            <i class="bi bi-file-bar-graph"></i>
            <span class="menu-link-text">Reports</span>
          </a>
        </div>
      </div>
    </div>
  </aside>
</body>
</html>
