<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar</title>

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400;1,500&display=swap"
      rel="stylesheet"
    />

    <!--fontawesome-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v6.3.0/css/all.css"
    />

    <style>
      /*css variables*/
      :root {
        --body-bg-color: #dce4e3;
        --green: #18c29c;
        --light-green: #8ed7c6;
        --light-grey: #dce4e3;
        --text-color: #084236;
      }

      /*reset*/
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      button {
        border: none;
        outline: none;
        background: none;
        cursor: pointer;
      }

      input {
        border: none;
        outline: none;
        background: none;
      }

      a {
        text-decoration: none;
        color: inherit;
      }

      li {
        list-style: none;
      }

      /*body*/
      body {
        background-color: var(--body-bg-color);
        color: var(--text-color);
        width: 100vw;
        height: auto;
        font-family: "Poppins", sans-serif;
        position: relative;
      }

      /*navbar*/
      .navbar {
        z-index: 2;
        width: 80px;
        max-width: 4rem;
        background-color: var(--green);
        height: 100vh;
        position: fixed;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: all 0.3s ease;
      }

      .navbar .navbar-container {
        padding: 1rem;
      }

      /*logo*/
      .navbar .navbar-container .navbar-logo-div {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.7rem;
        /* padding-left: 1rem; */
      }

      .navbar .navbar-container .navbar-logo-div .navbar-toggler {
        transition: 0.2s ease-in-out;
      }

      .navbar .navbar-container .navbar-logo-div .navbar-toggler i {
        font-size: 1rem;
      }

      .navbar .navbar-container .navbar-logo-div .navbar-toggler:hover {
        color: var(--light-grey);
      }

      .navbar .navbar-container .navbar-logo-div .navbar-logo-link {
        display: none;
      }

      /*search*/
      .navbar .navbar-search {
        width: 100%;
        background-image: url("../img/search.svg");
        background-repeat: no-repeat;
        background-color: var(--light-green);
        background-position: center;

        margin: 0 auto;
        /* background-position: 1rem 0.7rem; */
        padding: 1rem;
        /* padding-left: 3rem; */
        border-radius: 10px;
        margin-bottom: 1.2rem;
      }

      #icon-search {
        position: absolute;
        color: var(--green);
        font-size: 1.2rem;
        top: 4.5rem;
        left: 1.4rem;
      }

      .navbar .navbar-search::placeholder {
        visibility: hidden;
        opacity: 0;
      }

      /*menu list*/
      .navbar .menu-list {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1.5rem;
        width: 100%;
      }

      .navbar .menu-list .menu-item {
        width: 100%;
      }

      .navbar .menu-list .menu-item .menu-link {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.7rem;
        transition: 0.2s ease-in-out;
        font-weight: 500;
      }

      .navbar .menu-list .menu-item .menu-link .menu-link-text {
        display: none;
        color: inherit;
      }

      .navbar .menu-list .menu-item .menu-link:hover,
      .navbar .menu-list .menu-item .menu-link:hover {
        color: var(--light-grey);
      }

      /*user information div*/
      .navbar .user-container {
        background-color: var(--light-green);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.5rem 1rem;
      }

      .navbar .user-container .user-info {
        display: flex;
        align-items: center;
        gap: 0.4rem;
        display: none;
      }

      .navbar .user-container .user-info i {
        font-size: 1.2rem;
      }

      .navbar .user-container .user-info .user-details .user-name {
        font-size: 1.1rem;
        font-weight: light;
      }

      .navbar .user-container .user-info .user-details .user-occupation {
        font-size: 0.9rem;
        font-weight: lighter;
      }

      /*navbar.active*/
      /*navbar.active navbar*/
      .navbar.active {
        width: 350px;
        max-width: 20%;
      }

      /*navbar.active logo*/
      .navbar.active .navbar-container .navbar-logo-div {
        justify-content: space-between;
        padding-left: 1rem;
      }

      .navbar.active .navbar-container .navbar-logo-div .navbar-logo-link {
        display: block;
      }

      /*navbar.active search input*/
      .navbar.active .navbar-search {
        background-position: 1rem 0.7rem;
        padding: 1rem;
        padding-left: 3rem;
      }

      .navbar.active #icon-search {
        top: 5.1rem;
        left: 1.6rem;
      }

      .navbar.active .navbar-search::placeholder {
        visibility: visible;
        opacity: 1;
      }

      /*navbar.active menu*/
      .navbar.active .menu-list {
        padding-left: 1rem;
      }

      .navbar.active .menu-list .menu-item .menu-link {
        justify-content: flex-start;
      }

      .navbar.active .menu-list .menu-item .menu-link .menu-link-text {
        display: inline;
      }

      /*navbar.active user container*/
      .navbar.active .user-container {
        justify-content: space-between;
        align-items: center;
      }

      .navbar.active .user-container .user-info {
        display: flex;
      }

      /*dashboard*/
      .dashboard {
        width: auto;
        height: auto;
        margin-left: 5rem;
      }

      .navbar.active + .dashboard {
        margin-left: 22%;
      }

      /*media queries*/
      @media only screen and (max-width: 870px) {
        .navbar.active {
          max-width: 27%;
        }

        .navbar.active + .dashboard {
          margin-left: 30%;
        }
      }

      @media only screen and (max-width: 670px) {
        .navbar.active {
          min-width: 100%;
        }

        .navbar .navbar-container {
          position: relative;
          width: 100%;
        }

        .navbar .navbar-search {
          position: absolute;
          border-radius: 0;
          left: 0;
        }

        .navbar .menu-item {
          position: relative;
          top: 4rem;
        }
      }

      @media only screen and (max-width: 350px) {
        .dashboard .title {
          font-size: 1.7rem;
        }
      }

      .stat-cards-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-right: 20px;
        overflow-x: auto;
      }

      .stat-card {
        background-color: #2196f3;
        color: #ffffff;
        border-radius: 10px;
        padding: 15px 20px; /* Adjust padding as needed */
        display: flex;
        width: 320px; /* Adjust width as needed */
        height: 95px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .stat-card .icon {
        color: #00e5ff;
        font-size: 28px; /* Adjust size as needed */
        margin-right: 15px; /* Space between icon and text */
      }

      .stat-card .text-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .stat-card .title {
        font-size: 14px;
        font-weight: 500;
      }

      .stat-card .value {
        font-size: 18px;
        font-weight: 700;
        margin-top: 5px;
      }

      .stat-card .value span {
        color: #4caf50;
      }
    </style>
  </head>
  <body>
    <!-- SideNav -->
    <aside class="navbar">
      <div class="navbar-container">
        <div class="navbar-logo-div">
          <div class="navbar-toggler">
            <i class="fas fa-bars"></i>
          </div>
        </div>

        <input type="search" placeholder="Search" class="navbar-search" />
        <div id="icon-search">
          <i class="fas fa-search"></i>
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
        </div>
      </div>
    </aside>

    <script>
      // Elements
      const btnToggler = document.querySelector(".navbar-toggler");
      const inputSearch = document.querySelector(".navbar-search");
      const iconSearch = document.querySelector("#icon-search");
      const navbar = document.querySelector(".navbar");
      const menuItems = document.querySelectorAll(".menu-item .menu-link");
      const mainContent = document.getElementById("main-content");

      // Toggle navbar active class for expanding/collapsing the sidebar
      btnToggler.addEventListener("click", () => {
        navbar.classList.toggle("active");
      });

      // Add active class to navbar when search input or icon is clicked
      inputSearch.addEventListener("click", () => {
        if (!navbar.classList.contains("active")) {
          navbar.classList.add("active");
        }
      });

      iconSearch.addEventListener("click", () => {
        if (!navbar.classList.contains("active")) {
          navbar.classList.add("active");
        }
      });

      // Close sidebar if clicked outside of it
      window.addEventListener("click", (e) => {
        if (!navbar.contains(e.target) && !btnToggler.contains(e.target)) {
          navbar.classList.remove("active");
        }
      });
    </script>
  </body>
</html>
