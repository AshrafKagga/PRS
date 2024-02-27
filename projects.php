<?php
    session_start();
    include 'config.php';
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

    <title>PRS Dashboard</title>
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
    <link href="assets/libs/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/libs/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/libs/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/libs/simple-datatables/style.css" rel="stylesheet">

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
                <a class="nav-link " href="dashboard.php">
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

            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        class="bi bi-chevron-down ms-auto"></i>
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
                <a class="nav-link collapsed" href="pages-register.php">
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

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboardh.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <h3 class="pagetitle">Projects</h3>
                                    <div class="">
                                        <p>You have total 95 projects.</p>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                                <div class="">
                                    <div class="toggle-wrap nk-block-tools-toggle">
                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                            data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                        <div class="toggle-expand-content" data-content="pageMenu">
                                            <ul class="nk-block-tools g-3">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#"
                                                            class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                                            data-bs-toggle="dropdown"><em
                                                                class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered
                                                                By</span><em
                                                                class="dd-indc icon ni ni-chevron-right"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><span>Open</span></a></li>
                                                                <li><a href="#"><span>Closed</span></a></li>
                                                                <li><a href="#"><span>Onhold</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nk-block-tools-opt d-none d-sm-block">
                                                    <a href="#" class="btn btn-primary"><em
                                                            class="icon ni ni-plus"></em><span>Add Project</span></a>
                                                </li>
                                                <li class="nk-block-tools-opt d-block d-sm-none">
                                                    <a href="#" class="btn btn-icon btn-primary"><em
                                                            class="icon ni ni-plus"></em></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .toggle-wrap -->
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="card card-bordered card-stretch">
                                <div class="card-inner-group">
                                    <div class="card-inner p-0">
                                        <table class="nk-tb-list nk-tb-ulist">
                                            <thead>
                                                <tr class="nk-tb-item nk-tb-head">
                                                    <th class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="pid-all">
                                                            <label class="custom-control-label" for="pid-all"></label>
                                                        </div>
                                                    </th>
                                                    <th class="nk-tb-col"><span class="sub-text">Project Name</span>
                                                    </th>
                                                    <th class="nk-tb-col tb-col-xxl"><span
                                                            class="sub-text">Client</span></th>
                                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Project
                                                            Lead</span></th>
                                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Team</span>
                                                    </th>
                                                    <th class="nk-tb-col tb-col-xxl"><span
                                                            class="sub-text">Status</span></th>
                                                    <th class="nk-tb-col tb-col-md"><span
                                                            class="sub-text">Progress</span></th>
                                                    <th class="nk-tb-col tb-col-mb"><span
                                                            class="sub-text">Deadline</span></th>
                                                    <th class="nk-tb-col nk-tb-col-tools text-end">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="btn btn-xs btn-trigger btn-icon dropdown-toggle me-n1"
                                                                data-bs-toggle="dropdown" data-offset="0,5"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-check-round-cut"></em><span>Mark
                                                                                As Done</span></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-archive"></em><span>Mark
                                                                                As Archive</span></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-trash"></em><span>Remove
                                                                                Projects</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr><!-- .nk-tb-item -->
                                            </thead>
                                            <tbody>
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="pid-01">
                                                            <label class="custom-control-label" for="pid-01"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <a href="html/apps-kanban.html" class="project-title">
                                                            <div class="user-avatar sq bg-purple"><span>DD</span></div>
                                                            <div class="project-info">
                                                                <h6 class="title">Dashlite Development</h6>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Softnio</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <span>Abu Bin Istiak</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <ul class="project-users g-1">
                                                            <li>
                                                                <div class="user-avatar sm bg-primary"><span>A</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="user-avatar sm bg-blue"><img
                                                                        src="./images/avatar/b-sm.jpg" alt=""></div>
                                                            </li>
                                                            <li>
                                                                <div class="user-avatar bg-light sm"><span>+12</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Open</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="project-list-progress">
                                                            <div class="progress progress-pill progress-md bg-light">
                                                                <div class="progress-bar" data-progress="93.5"></div>
                                                            </div>
                                                            <div class="project-progress-percent">93.5%</div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-mb">
                                                        <span class="badge badge-dim bg-warning"><em
                                                                class="icon ni ni-clock"></em><span>5 Days
                                                                Left</span></span>
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="html/apps-kanban.html"><em
                                                                                        class="icon ni ni-eye"></em><span>View
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-edit"></em><span>Edit
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-check-round-cut"></em><span>Mark
                                                                                        As Done</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr><!-- .nk-tb-item -->
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="pid-02">
                                                            <label class="custom-control-label" for="pid-02"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <a href="html/apps-kanban.html" class="project-title">
                                                            <div class="user-avatar sq bg-warning"><span>RW</span></div>
                                                            <div class="project-info">
                                                                <h6 class="title">Redesign Website</h6>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Runnergy</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <span>Alex Ashley</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <ul class="project-users g-1">
                                                            <li>
                                                                <div class="user-avatar sm bg-primary"><img
                                                                        src="./images/avatar/c-sm.jpg" alt=""></div>
                                                            </li>
                                                            <li>
                                                                <div class="user-avatar sm bg-blue"><span>N</span></div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Onhold</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="project-list-progress">
                                                            <div class="progress progress-pill progress-md bg-light">
                                                                <div class="progress-bar" data-progress="23"></div>
                                                            </div>
                                                            <div class="project-progress-percent">23%</div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-mb">
                                                        <span class="badge badge-dim bg-light text-gray"><em
                                                                class="icon ni ni-clock"></em><span>21 Days
                                                                Left</span></span>
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="html/apps-kanban.html"><em
                                                                                        class="icon ni ni-eye"></em><span>View
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-edit"></em><span>Edit
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-check-round-cut"></em><span>Mark
                                                                                        As Done</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr><!-- .nk-tb-item -->
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="pid-03">
                                                            <label class="custom-control-label" for="pid-03"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <a href="html/apps-kanban.html" class="project-title">
                                                            <div class="user-avatar sq bg-info"><span>KR</span></div>
                                                            <div class="project-info">
                                                                <h6 class="title">Keyword Research for SEO</h6>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Techyspec</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <span>Emily Smith</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <ul class="project-users g-1">
                                                            <li>
                                                                <div class="user-avatar sm bg-primary"><img
                                                                        src="./images/avatar/a-sm.jpg" alt=""></div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Ongoing</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="project-list-progress">
                                                            <div class="progress progress-pill progress-md bg-light">
                                                                <div class="progress-bar" data-progress="52.5"></div>
                                                            </div>
                                                            <div class="project-progress-percent">52.5%</div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-mb">
                                                        <span class="badge badge-dim bg-danger"><em
                                                                class="icon ni ni-clock"></em><span>Due
                                                                Tomorrow</span></span>
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="html/apps-kanban.html"><em
                                                                                        class="icon ni ni-eye"></em><span>View
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-edit"></em><span>Edit
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-check-round-cut"></em><span>Mark
                                                                                        As Done</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr><!-- .nk-tb-item -->
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="pid-04">
                                                            <label class="custom-control-label" for="pid-04"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <a href="html/apps-kanban.html" class="project-title">
                                                            <div class="user-avatar sq bg-danger"><span>WD</span></div>
                                                            <div class="project-info">
                                                                <h6 class="title">Website Development</h6>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Fitness Next</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <span>Michael Wood</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <ul class="project-users g-1">
                                                            <li>
                                                                <div class="user-avatar sm bg-blue"><span>N</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="user-avatar sm bg-primary"><img
                                                                        src="./images/avatar/c-sm.jpg" alt=""></div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Open</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="project-list-progress">
                                                            <div class="progress progress-pill progress-md bg-light">
                                                                <div class="progress-bar" data-progress="65.5"></div>
                                                            </div>
                                                            <div class="project-progress-percent">65.5%</div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-mb">
                                                        <span class="badge badge-dim bg-light text-gray"><em
                                                                class="icon ni ni-clock"></em><span>16 Days
                                                                Left</span></span>
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="html/apps-kanban.html"><em
                                                                                        class="icon ni ni-eye"></em><span>View
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-edit"></em><span>Edit
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-check-round-cut"></em><span>Mark
                                                                                        As Done</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr><!-- .nk-tb-item -->
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="pid-05">
                                                            <label class="custom-control-label" for="pid-05"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <a href="html/apps-kanban.html" class="project-title">
                                                            <div class="user-avatar sq bg-blue"><span>SO</span></div>
                                                            <div class="project-info">
                                                                <h6 class="title">SEO Optimization</h6>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Techyspec</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <span>Emily Smith</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <ul class="project-users g-1">
                                                            <li>
                                                                <div class="user-avatar sm bg-primary"><img
                                                                        src="./images/avatar/a-sm.jpg" alt=""></div>
                                                            </li>
                                                            <li>
                                                                <div class="user-avatar sm bg-primary"><img
                                                                        src="./images/avatar/d-sm.jpg" alt=""></div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Closed</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="project-list-progress">
                                                            <div class="progress progress-pill progress-md bg-light">
                                                                <div class="progress-bar" data-progress="100"></div>
                                                            </div>
                                                            <div class="project-progress-percent">100%</div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-mb">
                                                        <span class="badge badge-dim bg-success"><em
                                                                class="icon ni ni-clock"></em><span>Done</span></span>
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="html/apps-kanban.html"><em
                                                                                        class="icon ni ni-eye"></em><span>View
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-edit"></em><span>Edit
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-check-round-cut"></em><span>Mark
                                                                                        As Done</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr><!-- .nk-tb-item -->
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="uid1">
                                                            <label class="custom-control-label" for="uid1"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <a href="html/apps-kanban.html" class="project-title">
                                                            <div class="user-avatar sq bg-purple"><span>DD</span></div>
                                                            <div class="project-info">
                                                                <h6 class="title">Dashlite Development</h6>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Softnio</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <span>Abu Bin Istiak</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <ul class="project-users g-1">
                                                            <li>
                                                                <div class="user-avatar sm bg-danger"><span>D</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="user-avatar sm bg-primary"><img
                                                                        src="./images/avatar/c-sm.jpg" alt=""></div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Open</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="project-list-progress">
                                                            <div class="progress progress-pill progress-md bg-light">
                                                                <div class="progress-bar" data-progress="65.5"></div>
                                                            </div>
                                                            <div class="project-progress-percent">65.5%</div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-mb">
                                                        <span class="badge badge-dim bg-warning"><em
                                                                class="icon ni ni-clock"></em><span>5 Days
                                                                Left</span></span>
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="html/apps-kanban.html"><em
                                                                                        class="icon ni ni-eye"></em><span>View
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-edit"></em><span>Edit
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-check-round-cut"></em><span>Mark
                                                                                        As Done</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr><!-- .nk-tb-item -->
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="pid-07">
                                                            <label class="custom-control-label" for="pid-07"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <a href="html/apps-kanban.html" class="project-title">
                                                            <div class="user-avatar sq bg-danger"><span>WD</span></div>
                                                            <div class="project-info">
                                                                <h6 class="title">Website Development</h6>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Fitness Next</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <span>Alex Ashley</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <ul class="project-users g-1">
                                                            <li>
                                                                <div class="user-avatar sm bg-primary"><img
                                                                        src="./images/avatar/b-sm.jpg" alt=""></div>
                                                            </li>
                                                            <li>
                                                                <div class="user-avatar sm bg-indigo"><span>P</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Open</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="project-list-progress">
                                                            <div class="progress progress-pill progress-md bg-light">
                                                                <div class="progress-bar" data-progress="65.5"></div>
                                                            </div>
                                                            <div class="project-progress-percent">65.5%</div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-mb">
                                                        <span class="badge badge-dim bg-light text-gray"><em
                                                                class="icon ni ni-clock"></em><span>21 Days
                                                                Left</span></span>
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="html/apps-kanban.html"><em
                                                                                        class="icon ni ni-eye"></em><span>View
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-edit"></em><span>Edit
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-check-round-cut"></em><span>Mark
                                                                                        As Done</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr><!-- .nk-tb-item -->
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="pid-08">
                                                            <label class="custom-control-label" for="pid-08"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <a href="html/apps-kanban.html" class="project-title">
                                                            <div class="user-avatar sq bg-warning"><span>RW</span></div>
                                                            <div class="project-info">
                                                                <h6 class="title">Redesign Website</h6>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Runnergy</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <span>Michael Wood</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <ul class="project-users g-1">
                                                            <li>
                                                                <div class="user-avatar sm bg-pink"><span>I</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="user-avatar sm bg-primary"><img
                                                                        src="./images/avatar/a-sm.jpg" alt=""></div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-xxl">
                                                        <span>Onhold</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <div class="project-list-progress">
                                                            <div class="progress progress-pill progress-md bg-light">
                                                                <div class="progress-bar" data-progress="23"></div>
                                                            </div>
                                                            <div class="project-progress-percent">23%</div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-mb">
                                                        <span class="badge badge-dim bg-light text-gray"><em
                                                                class="icon ni ni-clock"></em><span>21 Days
                                                                Left</span></span>
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="html/apps-kanban.html"><em
                                                                                        class="icon ni ni-eye"></em><span>View
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-edit"></em><span>Edit
                                                                                        Project</span></a></li>
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-check-round-cut"></em><span>Mark
                                                                                        As Done</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr><!-- .nk-tb-item -->
                                            </tbody>
                                        </table><!-- .nk-tb-list -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="nk-block-between-md g-3">
                                            <div class="g">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><span class="page-link"><em
                                                                class="icon ni ni-more-h"></em></span></li>
                                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul><!-- .pagination -->
                                            </div>
                                            <div class="g">
                                                <div
                                                    class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                    <div>Page</div>
                                                    <div>
                                                        <select class="form-select js-select2" data-search="on"
                                                            data-dropdown="xs center">
                                                            <option value="page-1">1</option>
                                                            <option value="page-2">2</option>
                                                            <option value="page-4">4</option>
                                                            <option value="page-5">5</option>
                                                            <option value="page-6">6</option>
                                                            <option value="page-7">7</option>
                                                            <option value="page-8">8</option>
                                                            <option value="page-9">9</option>
                                                            <option value="page-10">10</option>
                                                            <option value="page-11">11</option>
                                                            <option value="page-12">12</option>
                                                            <option value="page-13">13</option>
                                                            <option value="page-14">14</option>
                                                            <option value="page-15">15</option>
                                                            <option value="page-16">16</option>
                                                            <option value="page-17">17</option>
                                                            <option value="page-18">18</option>
                                                            <option value="page-19">19</option>
                                                            <option value="page-20">20</option>
                                                        </select>
                                                    </div>
                                                    <div>OF 102</div>
                                                </div>
                                            </div><!-- .pagination-goto -->
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner-group -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
        <?php

        }
        }?>
    </main><!-- End #main -->



    </footer><!-- End Footer one section-->
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

    <!-- Template Main JS File -->
    <script src="assets/js/dash.js"></script>

</body>

</html>