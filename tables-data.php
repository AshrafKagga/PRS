<?php
    session_start();
    include 'config.php';
    
    $sql = "show Tables";
    $results = $conn->query($sql);

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

    <title>PRS Tables</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- libs CSS Files -->
    <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/libs/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/libs/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/libs/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/libs/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/libs/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/libs/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/libs/data-table/dataTables.bootstrap5.min.css" rel="stylesheet">

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
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Registration Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Payment Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Inquiry Report</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Reports Nav -->

            <li class="nav-item">
                <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-general.php">
                            <i class="bi bi-circle"></i><span>Employees Table</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.php" class="active">
                            <i class="bi bi-circle"></i><span>Data tables</span>
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
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Profits Chart</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Status Chart</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Registration Charts</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->

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
                <a class="nav-link collapsed" href="Live-Chat.php">
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
                <form method="post" class="nav-link collapsed">
                    <button type="submit" class="logout_btn1" name="logmeout">
                        <i class="bi bi-box-arrow-right"></i>
                        Sign Out
                    </button>
                </form>
            </li><!-- End Login Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <!-- =========main section=============== -->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data table</li>
                </ol>
            </nav>

            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box bg-info">
                        <span class="info-box-icon elevation-1"><i class="bi bi-box-arrow-in-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Registration Rate</span>
                            <span class="info-box-number">
                            10
                            <small>%</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3 bg-danger">
                        <span class="info-box-icon elevation-1"><i class="bi bi-suit-club-fill"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Companies</span>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3 bg-success">
                        <span class="info-box-icon elevation-1"><i class="bi bi-amd"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Employees</span>
                            <span class="info-box-number">760200</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3 bg-warning">
                        <span class="info-box-icon elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">New Employees</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- ======= End of info box ============ -->
        </div><!-- End Page Title -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper shadow">
            <!-- ===========card board section=================== -->
            <div class="card-body pt-3" bis_skin_checked="1">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
      
                  <li class="nav-item" role="presentation">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#Passports" aria-selected="true" role="tab">Passports Table</button>
                  </li>
      
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Jobs-table" aria-selected="false" tabindex="-1" role="tab">Jobs Table</button>
                  </li>
      
                  <!-- <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Employees-Table" aria-selected="false" tabindex="-1" role="tab">Employees Table</button>
                  </li> -->
      
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#payments" aria-selected="false" tabindex="-1" role="tab">Payments</button>
                  </li>
                  <li class="nav-item" role="presentation">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#complet-projects" aria-selected="false" tabindex="-1" role="tab">Registratiion</button>
                  </li>
      
              </ul>
              <!-- ========================================End of button section================================= -->
              <div class="tab-content pt-2" bis_skin_checked="1">
                <!-- passport section -->
                <div class="tab-pane fade show active Passports" id="Passports" role="tabpanel" bis_skin_checked="1">
                    <div class="data-table">
                        <div class="col d-flex">
                            <button type="button" class="btn btn-primary btn-sm mb-2 ms-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Register New Passport</button>
                        </div>
                        <!-- passports model section -->
                        <div class="modal fade" id="staticBackdrop" tabinedex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="ture">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST" action="php/addpassport.php" enctype="multipart/form-data" class="row px-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Register New Passport</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                                <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <label for="date">Holders Names</label>
                                                        <input type="text" name="names" placeholder="Full Names" class="form-control form-control-sm my-2">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="date">Passport Number</label>
                                                        <input type="text" name="pass_number" placeholder="Passport Number"
                                                            class="form-control form-control-sm my-2">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="date">Passport Image</label> 
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" name="pass-img"  required="true">
                                                            <span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php
                                                        $sql = mysqli_query($conn, "select *from tb_user where id='$id'");
                                                        $row = mysqli_num_rows($sql);
                                                        while($row = mysqli_fetch_array($sql)){ ?>
                                                        <input type="text" name="edited_by" value="<?php echo $row['name']?>" style="display:none;">
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="addpassport">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Passports Table -->
                        <table id="passport" class="table table-striped border rounded" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">select</th>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">passport number</th>
                                    <th scope="col">Registration Date</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Edited By</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $rec = mysqli_query($conn, "select *from passport");
                                    $cnt = 1;
                                    $row = mysqli_num_rows($rec);
                                    if ($row > 0) {
                                    while ($row = mysqli_fetch_array($rec)) {
                                    ?>
                                <!-- fetching the records -->
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <th scope="row"><?php echo $cnt; ?></th>
                                    <td><?php echo $row['names']; ?></td>
                                    <td><?php echo $row['pass_number']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td>
                                        <img src="assets/img/passports/<?=$row['pass_img']?>" width="30" height="30" alt="">
                                    </td>
                                    <td><?php echo $row['edited_by']; ?></td>
                                    <td>
                                        <a href="#" id="detail">Details</a>
                                    </td>
                                </tr>
                                <?php
                                        $cnt = $cnt + 1;
                                    }
                                    }
                                    ?>
                            </tbody>
                        </table>
                        <!-- End fo employee Table -->
                    </div>
                </div>
                <!-- ===========================End Passports Table section=========================================== -->

                <div class="tab-pane fade profile-edit pt-3" id="Jobs-table" role="tabpanel" bis_skin_checked="1">
                    <div class="data-table">
                        <div class="col d-flex">
                            <button type="button" class="btn btn-primary btn-sm mb-2 ms-auto" data-bs-toggle="modal" data-bs-target="#addjob">Add a Job</button>
                        </div>
                        <!-- jobs model section -->
                        <div class="modal fade" id="addjob" tabinedex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="ture">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST" action="php/addjob.php" class="row px-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New jobs</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                                <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <label for="date">Job Type</label>
                                                        <input type="text" name="job_type" placeholder="Job Type" class="form-control form-control-sm my-2">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="date">Job Location</label>
                                                        <input type="text" name="country" placeholder="county"
                                                            class="form-control form-control-sm my-2">
                                                            

                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="date">Required Positions</label> 
                                                        <input type="text" name="number_positions"
                                                            placeholder="Number Of Positions present"
                                                            class="form-control form-control-sm my-2">
                                                    </div>
                                                    <div class="col-md-12"> 
                                                        <label for="date">Expire Date</label>
                                                        <input type="date" name=expire_date
                                                            placeholder=""
                                                            class="form-control form-control-sm my-2">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php
                                                        $sql = mysqli_query($conn, "select *from tb_user where id='$id'");
                                                        $row = mysqli_num_rows($sql);
                                                        while($row = mysqli_fetch_array($sql)){ ?>
                                                        <input type="text" name="edited_by" value="<?php echo $row['name']?>" style="display:none;">
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="addjob">Update Table</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table id="jobs" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Job Type</th>
                                    <th>Country</th>
                                    <th>No. position</th>
                                    <th>Upload Date</th>
                                    <th>Expiry Date</th>
                                    <th>Edit By</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $ret = mysqli_query($conn, "select *from jobs");
                                    // $cnt = 1;
                                    $row = mysqli_num_rows($ret);
                                    if ($row > 0) {
                                    while ($row = mysqli_fetch_array($ret)) {
                                    ?>
                                <tr>
                                    <td><?php echo $row[ "job_type"]?></td>
                                    <td><?php echo $row[ "country"]?></td>
                                    <td><?php echo $row[ "number_positions"]?></td>
                                    <td><?php echo $row[ "date"]?></td>
                                    <td><?php echo $row[ "expire_date"]?></td>
                                    <td><?php echo $row[ "edited_by"]?></td>
                                </tr>  
                                <?php
                                        // $cnt = $cnt + 1;
                                    }
                                    } else {
                                    ?>
                                                <tr>
                                                    <th style="text-align:center; color:red;" colspan="8" colspan="6">No record Found</th>
                                                </tr>
                                                <?php
                                    }
                                    ?>                              
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Job Type</th>
                                    <th>Country</th>
                                    <th>No. position</th>
                                    <th>Upload Date</th>
                                    <th>Expiry Date</th>
                                    <th>Edit By</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- ===========================End Jobs-table=========================================== -->
               
                
                <!-- ===========================End Employees-Table section=========================================== -->
                
                <div class="tab-pane fade pt-3" id="payments" role="tabpanel" bis_skin_checked="1">
                    <div class="">
                        <div class="col d-flex">
                            <button type="button" class="btn btn-primary btn-sm mb-2 ms-auto" data-bs-toggle="modal" data-bs-target="#payment">Add Payment</button>
                        </div>
                        <!-- Payments model section -->
                        <div class="modal fade" id="payment" tabinedex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="ture">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="POST" action="php/payment.php" class="row px-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Recieve Payment</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                                <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <label for="date">Names</label>
                                                        <input type="text" name="names" placeholder="Full Names" class="form-control form-control-sm my-2">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="date">Type of payment</label>
                                                        <select name="pay_type" id="" class="form-control form-control-sm my-2">
                                                            <option value=""></option>
                                                            <option value="Cash">Cash</option>
                                                            <option value="Cheque">Cheque</option>
                                                            <option value="Bank Slip">Bank Slip</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="date" name="date" style="display: none;"
                                                            class="form-control form-control-sm my-2">
                                                    </div>
                                                    <div class="col-md-12"> 
                                                        <label for="reasion">Reasion</label>
                                                        <input type="text" name="reason"
                                                            placeholder="Reasion"
                                                            class="form-control form-control-sm my-2">
                                                    </div>
                                                    <div class="col-md-12"> 
                                                        <label for="amount_payied">Amount Payied</label>
                                                        <input type="text" name="amount_payied"
                                                            placeholder="Amount Payied"
                                                            class="form-control form-control-sm my-2">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php
                                                        $sql = mysqli_query($conn, "select *from tb_user where id='$id'");
                                                        $row = mysqli_num_rows($sql);
                                                        while($row = mysqli_fetch_array($sql)){ ?>
                                                        <input type="text" name="recieved_by" value="<?php echo $row['name']?>" style="display:none;">
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="payment">Add Payment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Payment table -->
                        <table id="tables" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Type Of Payment</th>
                                    <th>Payment Date</th>
                                    <th>Reasion</th>
                                    <th>Amount Payed</th>
                                    <th>Balance Pending</th>
                                    <th>Recieved By</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $pay = mysqli_query($conn, "select *from payment");
                                    $cnt = 1;
                                    $row = mysqli_num_rows($pay);
                                    if($row >0){
                                        while ($row = mysqli_fetch_array($pay)){
                                            ?>
                                <tr>
                                    <td><?= $cnt?></td>
                                    <td><?= $row["names"]?></td>
                                    <td><?= $row["pay_type"]?></td>
                                    <td><?= $row["date"]?></td>
                                    <td><?= $row["reason"]?></td>
                                    <td><?= $row["amount_payied"]?></td>
                                    <td><?= $row["balance"]?></td>
                                    <td><?= $row["recieved_by"]?></td>
                                </tr>
                                <?php
                                    $cnt = $cnt + 1;   
                                    } 
                                    }else{
                                        ?>
                                        <tr>
                                        <td style="color: red" colspan="8">No Data found</td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- ===========================End payments=========================================== -->
    
                </div>
                <!-- ===========================End registration section=========================================== -->
                <div class="tab-pane fade pt-3" id="complet-projects" role="tabpanel" bis_skin_checked="1">
                    <!-- settings -->
                    <!-- complet-projects -->
    
                </div>
      
              </div>
              <!-- ============================================End Bordered Tabs========================================== -->
      
            </div>
          <!-- ==============end of card board section ============= -->
        </div>
        <!-- ========= End Of the content-wrapper ============ -->

        

    </main><!-- End #main -->
    <main id="main" class="main">
        
    </main>
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- libs JS Files -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/chart.js/chart.umd.js"></script>
    <script src="assets/libs/echarts/echarts.min.js"></script>
    <script src="assets/libs/quill/quill.min.js"></script>
    <script src="assets/libs/simple-datatables/simple-datatables.js"></script>
    <script src="assets/libs/tinymce/tinymce.min.js"></script>
    <script src="assets/libs/php-email-form/validate.js"></script>
    <script src="assets/libs/data-table/jquery-3.5.1.js"></script>
    <script src="assets/libs/data-table/dataTables.bootstrap5.min.js"></script>
    <!-- <script src="assets/libs/data-table/jquery.dataTables.min.js"></script> -->
    <script src="assets/libs/data-table/datatables.min.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/dash.js"></script>
    <script>
    // datatables initiation 
    $('#tables').DataTable();
    $('#passport').DataTable();
    $('#jobs').DataTable();
    // $('#payment').DataTable();
    </script>
 
</body>

</html>