<?php include('server.php') ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Side</title>
    <link rel="stylesheet" href="css/adminhome.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://kit.fontawesome.com/feeb5568d9.css"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://kit.fontawesome.com/feeb5568d9.css"
      crossorigin="anonymous"
    />

    <script
      src="https://kit.fontawesome.com/feeb5568d9.js"
      crossorigin="anonymous"
    ></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class="fa-solid fa-hand-holding-heart"></i>
        <span class="logo_name">REF ADMIN</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="resources.php" target="_blank">
            <i class="bx bx-box"></i>
            <span class="links_name">Resources</span>
          </a>
        </li>
        <li>
          <a href="userindex.php" target="_blank">
            <i class="bx bx-user"></i>
            <span class="links_name">Users</span>
          </a>
        </li>
         <!-- <li> -->
          <!-- <a href="#">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Order list</span>
          </a>
        </li> -->
        <li>
          <a href="indexinq.php" target="_blank">
            <i class="bx bx-message"></i>
            <span class="links_name">Inquiries</span>
          </a>
        </li>
        <li>
          <a href="analytics.php" target="_blank">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <!-- <li> -->
          <!-- <a href="#">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-book-alt"></i>
            <span class="links_name">Total order</span>
          </a>
        </li>  -->

  
        <!-- <li>
          <a href="#">
            <i class="bx bx-heart"></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="links_name">Settings</span>
          </a>
        </li> -->
        <li class="log_out" target="_blank">
          <a href="login.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <!-- <div class="search-box">
          <input type="text" placeholder="Search..." />
          <i class="bx bx-search"></i>
        </div> -->
        <div class="profile-details">
          <i class="fa fa-person"></i>
          <span class="admin_name">ADMIN</span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>

      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Users</div>
              <div class="number">5,821</div>
              <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Increase over the past 6 months</span>
              </div>
            </div>
            <!-- <i class="bx bx-cart-alt cart"></i> -->
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Volunteer Paralegals</div>
              <div class="number">342</div>
              <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Willing to assist</span>
              </div>
            </div>
            <!-- <i class="bx bxs-cart-add cart two"></i> -->
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Downloaded Docs</div>
              <div class="number">544</div>
              <div class="indicator">
                <i class="bx bx-up-arrow-alt"></i>
                <span class="text">Over the past 2 months</span>
              </div>
            </div>
            <!-- <i class="bx bx-cart cart three"></i> -->
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Complaints</div>
              <div class="number">4</div>
              <div class="indicator">
                <i class="bx bx-down-arrow-alt down"></i>
                <span class="text">Reduced in number</span>
              </div>
            </div>
            <!-- <i class="bx bxs-cart-download cart four"></i> -->
          </div>
        </div>

        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Recent Appeals</div>
            <div class="sales-details">
              <ul class="details">
                <li class="topic">Date</li>
                <li><a href="#">26 Feb 2023</a></li>
                <li><a href="#">02 March 2023</a></li>
                <li><a href="#">04 March 2023</a></li>
                <li><a href="#">05 March 2023</a></li>
<!--              
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li>
                <li><a href="#">02 Jan 2021</a></li> -->
              </ul>
              <ul class="details">
                <li class="topic">Users</li>
                <li><a href="#">Jkimatn@gmail.com</a></li>
                <li><a href="#">mkila@gmail.com</a></li>
                <li><a href="#">tyker21@yahoo.com</a></li>
                <li><a href="#">moh34@gmail.com</a></li>
  
              </ul>
              <!-- <ul class="details">
                <li class="topic">Sales</li>
                <li><a href="#">Delivered</a></li>
                <li><a href="#">Pending</a></li>
                <li><a href="#">Returned</a></li>
                <li><a href="#">Delivered</a></li>
                <li><a href="#">Pending</a></li>
                <li><a href="#">Returned</a></li>
                <li><a href="#">Delivered</a></li>
                <li><a href="#">Pending</a></li>
                <li><a href="#">Delivered</a></li>
              </ul> -->
              <!-- <ul class="details">
                <li class="topic">Total</li>
                <li><a href="#">$204.98</a></li>
                <li><a href="#">$24.55</a></li>
                <li><a href="#">$25.88</a></li>
                <li><a href="#">$170.66</a></li>
                <li><a href="#">$56.56</a></li>
                <li><a href="#">$44.95</a></li>
                <li><a href="#">$67.33</a></li>
                <li><a href="#">$23.53</a></li>
                <li><a href="#">$46.52</a></li>
              </ul> -->
            </div>
            <div class="button">
              <a href="#">See All</a>
            </div>
          </div>
          <div class="top-sales box">
            <div class="title">Partners</div>
            <ul class="top-sales-details">
              <li>
                <a href="#">
                  <img src="img/care.jpeg" alt="" />
                  <span class="product">CARE INTERNATIONAL</span>
                </a>
                <!-- <span class="price">$1107</span> -->
              </li>
              <li>
                <a href="#">
                  <img src="img/usaid.png" alt="" />
                  <span class="product">USAID</span>
                </a>
                <!-- <span class="price">$1567</span> -->
              </li>
              <li>
                <a href="#">
                  <img src="img/unfpa.jpeg" alt="" />
                  <span class="product">UNFPA</span>
                </a>
                <!-- <span class="price">$1234</span> -->
              </li>
              <li>
                <a href="#">
                  <img src="img/irc.jpeg" alt="" />
                  <span class="product">IRC</span>
                </a>
                <!-- <span class="price">$2312</span> -->
              </li>
              <li>
                <a href="#">
                  <img src="img/kcross.png" alt="" />
                  <span class="product">Kenya Red Cross</span>
                </a>
                <!-- <span class="price">$1456</span> -->
              </li>
              <li>
             
            </ul>
          </div>
        </div>
      </div>
    </section>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
  </body>
</html>
