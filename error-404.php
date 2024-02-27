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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PRS Dashboard
  * Author: Ashraf K.
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>The page you are looking for doesn't exist.</h2>
        <a class="btn" href="index.php">Back to home</a>
        <img src="assets/img/not-found.svg" class="img-fluid py-5" alt="Page Not Found">
        <div class="credits">
          Designed by <a href="#">Ashraf K.</a>
        </div>
      </section>

    </div>
  </main><!-- End #main -->
  <?php

}
}?>
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
  <script src="assets/js/main.js"></script>

</body>

</html>