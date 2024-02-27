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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

        <section class="section dashboard">
            <div class="row">
                <div class="d-flex flex-wrap col-md-8 pt-2" style="justify-content: space-evenly;" id="graps">
                    <h6 style="width:100%;">Key matrices</h6>
                    <hr style="width:100%; height:2px; margin:0 0 5px 0;">
                    <div class="col-md-5 mb-3 bgl shadow p-3 rounded-4 cards-1">
                        <div class="row">
                            <div class="col-8">
                                <h6>REVENUE</h6>
                                <h5>$102530 <span>(+2%)</span></h5>
                                <span>Target $ <span>54650</span></span>
                            </div>
                            <div class="col-4">
                                <div> <i class="bi bi-speedometer2"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-3 bgl shadow p-3 rounded-4 cards-1">
                        <div class="row">
                            <div class="col-8">
                                <h6>REVENUE</h6>
                                <h5>$102530 <span>(+2%)</span></h5>
                                <span>Target $ <span>54650</span></span>
                            </div>
                            <div class="col-4">
                                <div> <i class="bi bi-speedometer2"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-3 bgl shadow p-3 rounded-4 cards-1">
                        <div class="row">
                            <div class="col-8">
                                <h6>REVENUE</h6>
                                <h5>$102530 <span>(+2%)</span></h5>
                                <span>Target $ <span>54650</span></span>
                            </div>
                            <div class="col-4">
                                <div> <i class="bi bi-speedometer2"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-3 bgl shadow p-3 rounded-4 cards-1">
                        <div class="row">
                            <div class="col-8">
                                <h6>REVENUE</h6>
                                <h5>$102530 <span>(+2%)</span></h5>
                                <span>Target $ <span>54650</span></span>
                            </div>
                            <div class="col-4">
                                <div> <i class="bi bi-speedometer2"></i></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-3 bgl shadow p-3 rounded-4 cards-1">
                        <div class="row">
                            <div class="col-8">
                                <h6>REVENUE</h6>
                                <h5>$102530 <span>(+2%)</span></h5>
                                <span>Target $ <span>54650</span></span>
                            </div>
                            <div class="col-4">
                                <div> <i class="bi bi-speedometer2"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mb-3 bgl shadow p-3 rounded-4 cards-1">
                        <div class="row">
                            <div class="col-8">
                                <h6>REVENUE</h6>
                                <h5>$102530 <span>(+2%)</span></h5>
                                <span>Target $ <span>54650</span></span>
                            </div>
                            <div class="col-4">
                                <div> <i class="bi bi-speedometer2"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 lnear-pupple rounded pt-2">
                    <!-- Content Wrapper. Contains page content -->
                    <h6>Breakdowns</h6>
                    <hr style="width:100%; height:2px; margin:0 0 5px 0;">
                    <div class="content-wrapper">
                        <!-- ===========card board section=================== -->
                        <div class="card-body pt-3" bis_skin_checked="1">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#Costs" aria-selected="true" role="tab">Costs</button>
                            </li>
                
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Revenue" aria-selected="false" tabindex="-1" role="tab">Revenue</button>
                            </li>
                
                        </ul>
                        <!-- ========================================End of button section================================= -->
                        <div class="tab-content pt-2" bis_skin_checked="1">
                            <!-- ===========================End Costs Table section=========================================== -->
                            <div class="tab-pane fade pt-3 show active" id="Costs" role="tabpanel" bis_skin_checked="1">
                                <div class="col-12">
                                    <!-- cost graph -->
                                    <div id="costs" style="min-height: 200px; padding:5px;" class="echart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                        var costs = echarts.init(document.querySelector("#costs")).setOption({
                                            legend: {
                                            data: ['Allocated Budget', 'Actual Spending']
                                            },
                                            radar: {
                                            shape: 'circle',
                                            // height: '150',
                                            indicator: [{
                                                name: 'Sales',
                                                max: 6500
                                                },
                                                {
                                                name: 'Administration',
                                                max: 16000
                                                },
                                                {
                                                name: 'Information Technology',
                                                max: 30000
                                                },
                                                {
                                                name: 'Customer Support',
                                                max: 38000
                                                },
                                                {
                                                name: 'Development',
                                                max: 52000
                                                },
                                                {
                                                name: 'Marketing',
                                                max: 25000
                                                }
                                            ]
                                            },
                                            series: [{
                                            name: 'Budget vs spending',
                                            type: 'radar',
                                            data: [{
                                                value: [4200, 3000, 20000, 35000, 50000, 18000],
                                                name: 'Allocated Budget'
                                                },
                                                {
                                                value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                name: 'Actual Spending'
                                                }
                                            ]
                                            }]
                                        });
                                        });
                                    </script>
                                </div>
                                <div class="cards">
                                    <div class="row">
                                        <span class="col-6">Your Add Matrice</span>
                                        <span class="h6 col-6">+ ADD A CHART</span>
                                    </div>
                                    <hr style="height: 3px; background: #fff; margin: 5px 0;">
                                    <div class="d-flex flex-column">
                                        <div class="col-12 bg-pupple text-center rounded-3 mb-2 text-light py-2">
                                            <h6>ASHRAF</h6>
                                            <span>Economic Value Add</span>
                                        </div>
                                        <div class="col-12 bg-pupple text-center rounded-3 mb-2 text-light py-2">
                                            <h6>BERRY RATIO</h6>
                                            <h6>2.2</h6>
                                        </div>
                                        <div class="col-12 bg-pupple text-center rounded-3 mb-2 text-light py-2">
                                            <h6>PAYROLL HEADCOUNT RATIO</h6>
                                            <h6>0.02</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ===========================End Costs section=========================================== -->
                            <div class="tab-pane fade pt-3" id="Revenue" role="tabpanel" bis_skin_checked="1">
                
                                <!-- Registratiion Report -->
                                <!-- ===========================End Costs section =========================================== -->
                
                            </div>
                        </div>
                        <!-- ============================================End Bordered Tabs========================================== -->
                
                        </div>
                    <!-- ==============end of card board section ============= -->
                    </div>
                    <!-- =========End Of the content-wrapper ============ -->
                </div>
            </div>
        </section>
        <?php

        }
        }?>
    </main><!-- End #main -->

    <!-- footer one section  -->
    <div class="row p-4" style="background: #290755; margin-left: 300px;">
        <div class="col-5 mx-auto bg-pupple py-3 rounded-3 text-light">
            <h5>EMPLOYEE SATIFICATION(NPS)</h5>
            <div class="row">
                <div class="col-4"><i class="bi bi-speedometer text-info" style="font-size: 70px;"></i></div>
                <div class="row col-8">
                    <div class="col-8">
                        <h6>3-MONTHs TREND</h6>
                        <h4 class="text-info">NAVIGATE</h4>
                    </div>
                    <div class="col-4">
                    <i class="fa fa-arrow-down bg-light text-info p-3 rounded-circle" style="font-size: 20px;"></i>
                    </div>
                    <div id="graph1"></div>
                    <script>
                        var options = {
                            series: [{
                                name: "Desktops",
                                data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
                            }],
                            chart: {
                            height: 350,
                            type: 'line',
                            zoom: {
                                enabled: false
                            }
                            },
                            dataLabels: {
                            enabled: false
                            },
                            stroke: {
                            curve: 'straight'
                            },
                            title: {
                            text: 'Product Trends by Month',
                            align: 'left'
                            },
                            grid: {
                            row: {
                                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                            },
                            xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                            }
                        };

                        var chart = new ApexCharts(document.querySelector("#graph1"), options);
                        chart.render();
                    </script>
                </div>
            </div>
        </div>
        <div class="col-5 mx-auto bg-pupple py-3 rounded-3 text-light">
            <h5>EMPLOYEE SATIFICATION(NPS)</h5>
            <div class="row">
                <div class="col-4"><i class="bi bi-speedometer text-info" style="font-size: 70px;"></i></div>
                <div class="row col-8">
                    <div class="col-8">
                        <h6>3-MONTHs TREND</h6>
                        <h4 class="text-info">NAVIGATE</h4>
                    </div>
                    <div class="col-4">
                    <i class="fa fa-arrow-down bg-light text-info p-3 rounded-circle" style="font-size: 20px;"></i>
                    </div>
                    <div id="graph2"></div>
                    <script>
                        var options = {
                            series: [{
                                name: "Desktops",
                                data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
                            }],
                            chart: {
                            height: 350,
                            type: 'line',
                            zoom: {
                                enabled: false
                            }
                            },
                            dataLabels: {
                            enabled: false
                            },
                            stroke: {
                            curve: 'straight'
                            },
                            title: {
                            text: 'Product Trends by Month',
                            align: 'left'
                            },
                            grid: {
                            row: {
                                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                            },
                            xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                            }
                        };

                        var chart = new ApexCharts(document.querySelector("#graph2"), options);
                        chart.render();
                    </script>
                </div>
            </div>
        </div>
    </div>

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