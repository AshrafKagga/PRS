<?php
    include 'config.php';
    session_start();
    if(isset($_POST['logmeout'])){
        
        header("Location: login.php");
        session_unset();
        session_destroy();
        $_SESSION['login'] = false;
    }
    $id = $_SESSION['id'];
    // echo $id;exit;
    $sql = mysqli_query($conn,"SELECT * FROM tb_user WHERE id=$id");
    $row = mysqli_num_rows($sql);
    if($row > 0){
        while($row = mysqli_fetch_array($sql)){

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PRS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- libs CSS Files -->
  <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/libs/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/libs/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/libs/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/libs/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/libs/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/libs/fontawesome-free/css/all.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/dash.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PRS Dashboard
  * Author: Ashraf K.
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="dashboard.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">PRS</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
            </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
            </a><!-- End Notification Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
                You have 4 new notifications
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>
                <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
                </div>
            </li>

            <li>
                <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
                <i class="bi bi-x-circle text-danger"></i>
                <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
                </div>
            </li>

            <li>
                <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
                <i class="bi bi-check-circle text-success"></i>
                <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
                </div>
            </li>

            <li>
                <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
                <i class="bi bi-info-circle text-primary"></i>
                <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
                </div>
            </li>

            <li>
                <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
                <a href="#">Show all notifications</a>
            </li>

            </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
            </a><!-- End Messages Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
                You have 3 new messages
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li class="message-item">
                <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                    <h4>Maria Hudson</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>4 hrs. ago</p>
                </div>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li class="message-item">
                <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                    <h4>Anna Nelson</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>6 hrs. ago</p>
                </div>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li class="message-item">
                <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                    <h4>David Muldon</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>8 hrs. ago</p>
                </div>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
                <a href="#">Show all messages</a>
            </li>

            </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?=$row['profilepic']?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $row['username']?></span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                <h6><?php echo $row['name']?></h6>
                <span><?php echo $row['position']?></span>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="faq.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <form method="post" class="dropdown-item d-flex align-items-center">
                <button type="submit" class="logout_btn" name="logmeout">
                <i class="bi bi-box-arrow-right"></i>
                Sign Out
            </button>
                </form>
            </li>

            </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Reports-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.php">
              <i class="bi bi-circle"></i><span>Registration Report</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.php">
              <i class="bi bi-circle"></i><span> Payment Report</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.php">
              <i class="bi bi-circle"></i><span>Inqiury Report</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.php">
              <i class="bi bi-circle"></i><span>Employees Table</span>
            </a>
          </li>
          <li>
            <a href="tables-data.php">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.php">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.php">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.php">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.php">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.php">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.php">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="faq.php">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="Live-Chat.php">
          <i class="bi bi-envelope"></i>
          <span>Live Chat</span>
        </a>
      </li><!-- End Live Chat Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
          <form method="post" class="dropdown-item d-flex align-items-center">
                <button type="submit" class="logout_btn1" name="logmeout">
                <i class="bi bi-box-arrow-right"></i>
                Sign Out
            </button>
          </form>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar =========-->
  <!-- =======chart section ========-->
  <main class="main" id="main">
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header ui-sortable-handle row" style="cursor: move;">
        <h3 class="chart-title col-8">Direct Chat</h3>

        <div class="card-tools col-4">
          <span title="3 New Messages" class="badge badge-primary">3</span>
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
            <i class="fas fa-comments"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <!-- Conversations are loaded here -->
        <div class="direct-chat-messages">
          <!-- Message. Default to the left -->
          <div class="direct-chat-msg">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-name float-left">Alexander Pierce</span>
              <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
            </div>
            <!-- /.direct-chat-infos -->
            <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
              Is this template really for free? That's unbelievable!
            </div>
            <!-- /.direct-chat-text -->
          </div>
          <!-- /.direct-chat-msg -->

          <!-- Message to the right -->
          <div class="direct-chat-msg right">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-name float-right">Sarah Bullock</span>
              <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
            </div>
            <!-- /.direct-chat-infos -->
            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
              You better believe it!
            </div>
            <!-- /.direct-chat-text -->
          </div>
          <!-- /.direct-chat-msg -->

          <!-- Message. Default to the left -->
          <div class="direct-chat-msg">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-name float-left">Alexander Pierce</span>
              <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
            </div>
            <!-- /.direct-chat-infos -->
            <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
              Working with AdminLTE on a great new app! Wanna join?
            </div>
            <!-- /.direct-chat-text -->
          </div>
          <!-- /.direct-chat-msg -->

          <!-- Message to the right -->
          <div class="direct-chat-msg right">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-name float-right">Sarah Bullock</span>
              <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
            </div>
            <!-- /.direct-chat-infos -->
            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
              I would love to.
            </div>
            <!-- /.direct-chat-text -->
          </div>
          <!-- /.direct-chat-msg -->

        </div>
        <!--/.direct-chat-messages-->

        <!-- Contacts are loaded here -->
        <div class="direct-chat-contacts">
          <ul class="contacts-list">
            <li>
              <a href="#">
                <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                <div class="contacts-list-info">
                  <span class="contacts-list-name">
                    Count Dracula
                    <small class="contacts-list-date float-right">2/28/2015</small>
                  </span>
                  <span class="contacts-list-msg">How have you been? I was...</span>
                </div>
                <!-- /.contacts-list-info -->
              </a>
            </li>
            <!-- End Contact Item -->
            <li>
              <a href="#">
                <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">

                <div class="contacts-list-info">
                  <span class="contacts-list-name">
                    Sarah Doe
                    <small class="contacts-list-date float-right">2/23/2015</small>
                  </span>
                  <span class="contacts-list-msg">I will be waiting for...</span>
                </div>
                <!-- /.contacts-list-info -->
              </a>
            </li>
            <!-- End Contact Item -->
            <li>
              <a href="#">
                <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">

                <div class="contacts-list-info">
                  <span class="contacts-list-name">
                    Nadia Jolie
                    <small class="contacts-list-date float-right">2/20/2015</small>
                  </span>
                  <span class="contacts-list-msg">I'll call you back at...</span>
                </div>
                <!-- /.contacts-list-info -->
              </a>
            </li>
            <!-- End Contact Item -->
            <li>
              <a href="#">
                <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                <div class="contacts-list-info">
                  <span class="contacts-list-name">
                    Nora S. Vans
                    <small class="contacts-list-date float-right">2/10/2015</small>
                  </span>
                  <span class="contacts-list-msg">Where is your new...</span>
                </div>
                <!-- /.contacts-list-info -->
              </a>
            </li>
            <!-- End Contact Item -->
            <li>
              <a href="#">
                <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                <div class="contacts-list-info">
                  <span class="contacts-list-name">
                    John K.
                    <small class="contacts-list-date float-right">1/27/2015</small>
                  </span>
                  <span class="contacts-list-msg">Can I take a look at...</span>
                </div>
                <!-- /.contacts-list-info -->
              </a>
            </li>
            <!-- End Contact Item -->
            <li>
              <a href="#">
                <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                <div class="contacts-list-info">
                  <span class="contacts-list-name">
                    Kenneth M.
                    <small class="contacts-list-date float-right">1/4/2015</small>
                  </span>
                  <span class="contacts-list-msg">Never mind I found...</span>
                </div>
                <!-- /.contacts-list-info -->
              </a>
            </li>
            <!-- End Contact Item -->
          </ul>
          <!-- /.contacts-list -->
        </div>
        <!-- /.direct-chat-pane -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <form action="#" method="post">
          <div class="input-group">
            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
            <span class="input-group-append">
              <button type="button" class="btn btn-primary">Send</button>
            </span>
          </div>
        </form>
      </div>
      <!-- /.card-footer-->
    </div>
  </main>
  <!-- =======End of chart section====== -->

  <?php
}
}?>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>PRS</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="#">Ashraf K.</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- libs JS Files -->
  <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/chart.js/chart.umd.js"></script>
  <script src="assets/libs/echarts/echarts.min.js"></script>
  <script src="assets/libs/quill/quill.min.js"></script>
  <script src="assets/libs/simple-datatables/simple-datatables.js"></script>
  <script src="assets/libs/tinymce/tinymce.min.js"></script>
  <script src="assets/libs/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/dash.js"></script>

</body>

</html>