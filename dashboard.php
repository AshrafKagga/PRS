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
        <link rel="stylesheet" href="./assets/css/chart.css">

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

                    <!-- First columns -->
                    <div class="col-lg-8">
                        <!-- first cards row section -->
                        <div class="flex-column shadow p-3 mb-3 bgl">
                            <div class="row bg-light rounded align-items-center py-1">
                                <div class=" col-10">
                                    <span class="h5" style="font-weight: 600;">RECRUITEMENT MANAGEMENT</span>
                                </div>
                                <div class="col-2">
                                    <i class="fa fa-file"></i>
                                    <span class="h6"> Qt 2023</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                    <div class="col-3">
                                        <div class="card info-card sales-card lnear-dark">
                                                <h5 class="card-titles text-info">EMPLOYEES</h5>

                                                <div class="text-center">
                                                    <div class="ps-3 text-light">
                                                        <h3>145</h3>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="card info-card sales-card lnear-dark">
                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <li class="dropdown-header text-start">
                                                        <h6>Filter</h6>
                                                    </li>

                                                    <li><a class="dropdown-item" href="#">UG Shs</a></li>
                                                    <li><a class="dropdown-item" href="#">US Dollar</a></li>
                                                    <li><a class="dropdown-item" href="#">Euros</a></li>
                                                </ul>
                                            </div>
                                            <h5 class="card-titles text-info">MONTHLY SALARY</h5>

                                            <div class="text-center">
                                                <div class="ps-3 text-light">
                                                    <h3>shs.14525400</h3>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <div class="card info-card sales-card lnear-dark">
                                                <h5 class="card-titles text-info">VACANCIES</h5>

                                                <div class="text-center">
                                                    <div class="ps-3 text-light">
                                                        <h3>42</h3>
                                                    </div>
                                                </div>
                                            

                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- second cards row section  -->
                        <div class="row bgl shadow">
                            
                            <!-- hair title -->
                            <h4 class="mt-3" style="font-weight: 600;">Hairing Status</h4>
                            <!-- end of hair title -->
                            <!-- Sales Card -->
                            <div class="col-xl-6 col-md-6">
                                <div class="card info-card sales-card lnear-primary">

                                <div class="card-body">
                                    <h5 class="card-titles">Time To Fill</span></h5>

                                    <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-watch"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="text-pri">48 Days</h6>

                                    </div>
                                    </div>
                                </div>

                                </div>
                            </div><!-- End Sales Card -->

                            <!-- Revenue Card -->
                            <div class="col-xl-6 col-md-6">
                                <div class="card info-card revenue-card lnear-danger">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-titles">New Salaries <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="text-dan">$1,264</h6>
                                        <span class="text-light small pt-1 fw-bold">8%</span> <span class="text-light small pt-2 ps-1">increase</span>

                                    </div>
                                    </div>
                                </div>

                                </div>
                            </div><!-- End Revenue Card -->

                            <!-- Customers Card -->
                            <!-- <div class="col-xl-12 col-md-6">

                                <div class="card info-card customers-card lnear-success">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-titles">Customers <span>| This Year</span></h5>

                                        <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 class="text-suc">1244</h6>
                                            <span class="text-light small pt-1 fw-bold">-12%</span> <span class="text-light small pt-2 ps-1">decrease</span>

                                        </div>
                                        </div>

                                    </div>
                                </div>

                            </div> -->
                            <!-- End Customers Card -->

                            <!-- Reports -->
                            <div class="col-12">
                                <div class="card">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body bgl">
                                        <h5 class="card-title">Reports <span>/Today</span></h5>

                                        <!-- Line Chart and it's script -->
                                        <div id="reportsChart"></div>
                                        <script>
                                            document.addEventListener("DOMContentLoaded", () => {
                                                new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                    name: 'Registered Workers',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Uproved Workers',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Employers',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 250,
                                                    type: 'area',
                                                    toolbar: {
                                                    show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                                                },
                                                tooltip: {
                                                    x: {
                                                    format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                                }).render();
                                            });
                                        </script>
                                        <!-- End Line Chart -->

                                    </div>

                                </div>
                            </div><!-- End Reports -->
                        </div>
                    </div><!-- End First columns -->

                    <!-- --Second columns----------------- -->
                    <div class="col-lg-4">
                        <!-- Cash balance Card -->
                        <div class="col-xl-12 col-md-6">

                            <div class="card info-card customers-card">


                                <div class="card-body">

                                    <div class="">
                                        <div class="ps-3 col-12">
                                            <h5 class="card-titles text-dark">Cash | at end of Year</h5>
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- Bar Chart -->
                                                    <div id="cash_balance"></div>
                                                    <script>
                                                        document.addEventListener("DOMContentLoaded", () => {
                                                        new ApexCharts(document.querySelector("#cash_balance"), {
                                                            series: [{
                                                            name: 'Net Profit',
                                                            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                                                            }, {
                                                            name: 'Revenue',
                                                            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                                                            }, {
                                                            name: 'Free Cash Flow',
                                                            data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
                                                            }],
                                                            chart: {
                                                            type: 'bar',
                                                            height: 350
                                                            },
                                                            plotOptions: {
                                                            bar: {
                                                                horizontal: false,
                                                                columnWidth: '55%',
                                                                endingShape: 'rounded'
                                                            },
                                                            },
                                                            dataLabels: {
                                                            enabled: false
                                                            },
                                                            stroke: {
                                                            show: true,
                                                            width: 2,
                                                            colors: ['transparent']
                                                            },
                                                            xaxis: {
                                                            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                                                            },
                                                            yaxis: {
                                                            title: {
                                                                text: '$ (thousands)'
                                                            }
                                                            },
                                                            fill: {
                                                            opacity: 1
                                                            },
                                                            tooltip: {
                                                            y: {
                                                                formatter: function(val) {
                                                                return "$ " + val + " thousands"
                                                                }
                                                            }
                                                            }
                                                        }).render();
                                                        });
                                                    </script>
                                                    <!-- End Bar CHart -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Cash balance Card -->

                        <!-- Recent Activity -->
                        <div class="card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Recent Activity <span>| This Month</span></h5>

                                <div class="activity">

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">32 min</div>
                                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                        <div class="activity-content">
                                        Data Entry <a href="#" class="fw-bold text-dark">passports Table</a>
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">56 min</div>
                                        <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                        <div class="activity-content">
                                        New Registrations from Employees
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">2 hrs</div>
                                        <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                        <div class="activity-content">
                                        New registered co-oparation
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">1 day</div>
                                        <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                        <div class="activity-content">
                                        workers Asigned into there work place <a href="#" class="fw-bold text-dark">Company Name</a> 27/4/2023
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">2 days</div>
                                        <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                        <div class="activity-content">
                                        New registered co-oparations in count of <span>15</span>
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">4 weeks</div>
                                        <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                        <div class="activity-content">
                                        Registered employee in count of <span>2000</span>
                                        </div>
                                    </div><!-- End activity item-->

                                </div>

                            </div>
                        </div><!-- End Recent Activity -->

                        <!-- Budget Report -->
                        <!-- <div class="card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                                <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                        legend: {
                                            data: ['Allocated Budget', 'Actual Spending']
                                        },
                                        radar: {
                                            // shape: 'circle',
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
                        </div> -->
                        <!-- End Budget Report -->
                        
                    </div><!-- End second columns -->

                </div>
            </section>
            <?php

            }
            }?>
        </main><!-- End #main -->

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