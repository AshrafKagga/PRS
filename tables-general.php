<?php
//contecting the database;
include 'config.php';
//Editting and delting section php
if (isset($_GET['delid'])) {
  $rid = intval($_GET['deliid']);
  // $profilepic = $_GET['ppic'];
  // $ppicpath = "profilepics" . "/" .$profilepic;
  $sql = mysqli_query($conn, "delete from EMP where ID=$rid");
  // unlink($ppicpath);
  echo "<script>alert('Data Deleted');</script>";
  echo "<script>window.location.href ='tables-general.php'</script>";
}
?>
<?php
// include 'config.php';
session_start();
if (isset($_POST['logmeout'])) {

  header("Location: login.php");
  session_unset();
  session_destroy();
  $_SESSION['login'] = false;
}
$id = $_SESSION['id'];
// echo $id;exit;
$sql = mysqli_query($conn, "SELECT * FROM tb_user WHERE id=$id");
$row = mysqli_num_rows($sql);
if ($row > 0) {
  while ($row = mysqli_fetch_array($sql)) {

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
    <!-- <link href="assets/libs/simple-datatables/style.css" rel="stylesheet"> -->
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
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $row['username'] ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $row['name'] ?></h6>
                            <span><?php echo $row['position'] ?></span>
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
                        <a href="tables-general.php" class="active">
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
            </li><!-- End Logout Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Employees Table</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Employee</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <!-- Info boxes -->
        <div class="row my-4">
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

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Employees Table</h5>
                            <div class="d-flex" id="T_editor">
                                <div class="me-auto my-1 py-1" id="edit-area">
                                    <a href="#" class="view mx-3" title="View" data-toggle="tooltip" disabled><i
                                            class="material-icons bi bi-eye-fill"></i></a>
                                    <a href="#" class="edit mx-3" title="Edit" data-toggle="tooltip" disabled><i
                                            class="material-icons bi bi-pen"></i></a>
                                    <a href="#" class="delete mx-3" title="Delete" data-toggle="tooltip"
                                        onclick="return confirm('Do you really want to Delete ?');" disabled><i
                                            class="material-icons bi bi-trash"></i></a>
                                </div>
                                <button type="button" class="btn btn-primary my-1 ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Add Employee
                                </button>
                                <!-- Modal -->

                                <div class="modal fade" id="staticBackdrop" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                          <form method="POST" action="php/addEmp.php" class="row px-4">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Employee</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12"> <input type="text" name=name
                                                                placeholder="full names"
                                                                class="form-control form-control-sm my-2">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <select name="position" id="position"
                                                                class="form-control form-control-sm my-2">
                                                                <option value="">Select Position</option>
                                                                <option value="CEO">CEO</option>
                                                                <option value="Acountant">Acountant</option>
                                                                <option value="Networker">Networker</option>
                                                                <option value="Manager">Manager</option>
                                                                <option value="Managing Directer">Managing Directer</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input type="text" name=age placeholder="Age"
                                                                class="form-control form-control-sm my-2">

                                                        </div>
                                                        <div class="col-md-12"> <input type="email" name=email
                                                                placeholder="Enter User email"
                                                                class="form-control form-control-sm my-2">
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="addEMP">Add
                                                    Employee</button>
                                            </div>
                                          </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of the modal -->
                            </div>
                        </div>

                        <!-- VISA Table -->
                        <table class="table table-striped datatable dataTables_wrapper dt-bootstrap5" id="emp">
                            <thead>
                                <tr>
                                    <th style="width: 10px;">select</th>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $ret = mysqli_query($conn, "select *from EMP");
                                    $cnt = 1;
                                    $row = mysqli_num_rows($ret);
                                    if ($row > 0) {
                                    while ($row = mysqli_fetch_array($ret)) {
                                ?>
                                <!-- fetching the records -->
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <th scope="row"><?php echo $cnt; ?></th>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['position']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td>
                                        <!-- <a href="read.php?viewid=<?php echo htmlentities($row['ID']); ?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons bi bi-eye-fill"></i></a>
                                            <a href="edit.php?editid=<?php echo htmlentities($row['ID']); ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons bi bi-pen"></i></a>
                                            <a href="table-general.php?delid=<?php echo ($row['ID']); /*?>&&ppic=<?php echo $row['ProfilePic']; */ ?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons bi bi-trash"></i></a>
                                        -->
                                        <!-- <a href="#" id="E_detail">Details</button> -->
                                        <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#E_detail">
                                        Detail
                                    </button>
                                    </td>
                                </tr>
                                <?php
                                        $cnt = $cnt + 1;
                                    }
                                    } else {
                                    ?>
                                                <tr>
                                                    <th style="text-align:center; color:red;" colspan="6">No record Found</th>
                                                </tr>
                                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <!-- End fo employee Table -->

                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
    <!-- Employee detail modal -->
    <div class="modal fade" id="E_detail" tabindex="-1">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Employees Details</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section class="section profile">
                            <div class="row">
                                <div class="col-xl-4">

                                <div class="card">
                                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                    <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                                    <h2>Ashraf Kagga</h2>
                                    <h3>Web Designer</h3>
                                    <div class="social-links mt-2">
                                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                    </div>
                                </div>

                                </div>

                                <div class="col-xl-8">

                                <div class="card">
                                    <div class="card-body pt-3">
                                        <!-- Bordered Tabs -->
                                        <ul class="nav nav-tabs nav-tabs-bordered">

                                            <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-2">

                                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                                <h5 class="">About</h5>
                                                <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                                                <h5 class="">Profile Details</h5>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                                    <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Company</div>
                                                    <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Position</div>
                                                    <div class="col-lg-9 col-md-8">Web Designer</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Country</div>
                                                    <div class="col-lg-9 col-md-8">USA</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                                    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                                    <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                                    <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                                                </div>

                                            </div>
                                        </div><!-- End Bordered Tabs -->

                                    </div>
                                </div>

                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary">Save</button> -->
                    </div>
                  </div>
                </div>
              </div><!-- End Employee detail Modal-->
    <?php

  }
} ?>



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
    <script src="assets/libs/data-table/jquery.dataTables.min.js"></script>
    <script src="assets/libs/data-table/datatables.min.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/dash.js"></script>
    <script>
        $('#emp').DataTable({
            // 'dom': 'lfrtp',
            dom: 'Blfrtip',
            // buttons: ['copy', 'excel', 'pdf'],
            // lengthMenu: [ [10, 25, 50, -1], [10, 25, 50,"All"] ],
            // paging: true,
            // info: true,
            // searching: true
        });
        //     'dom': 'Blfrtp'
        // });
    </script>

</body>

</html>