<?php
session_start();
include "config.php";
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);
  $_SESSION["id"] = "";
  if(mysqli_num_rows($result) > 0){
    if($password == $row["password"]){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: dashboard.php");
      // echo "hey its working";
    }
    else{
      echo "<script>alert('Wrong Password Entered');</script>";
    }
    }
    else{
      echo "<script>alert('Account not found');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PRS Login</title>
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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="dashboard.php" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">PRS</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="cards-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" action="login.php" method="post" autocomplete="on">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <!-- <div class="invalid-feedback">Please enter your username.</div> -->
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <!-- <div class="invalid-feedback">Please enter your password!</div> -->
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <!-- <label class="form-check-label" for="rememberMe">Remember me</label> -->
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit">Login</button>
                      <!-- <input type="submit" name="submit" value=submit> -->
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="register.php">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed by <a href="#">Ashraf K.</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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