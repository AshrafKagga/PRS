<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRS</title>

     <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- libs CSS Files -->
  <link  rel="stylesheet" href="assets/libs/fontawesome-free/css/all.min.css">
  <link  rel="stylesheet" href="assets/libs/animate.css/animate.min.css">
  <link rel="stylesheet" href="./assets/libs/aos/aos.css">
  <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/libs/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/libs/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" href="./assets/libs/glightbox/css/plyr.min.css">
  <link rel="stylesheet" href="./assets/libs/remixicon/remixicon.css">
  <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
      <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +256701324243
      </div>
    </div>
  </div>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">PRS<span>.</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link" href="index.php">Home</a></li>
          <li><a class="nav-link" href="aboutus.php">About Us</a></li>
          <li><a class="nav-link" href="blog.php">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Recruitement order</a></li>
              <li class="dropdown"><a href="#"><span>Jobs</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">International Jobs</a></li>
                  <li><a href="#">Internal Jobs</a></li>
                  <li><a href="#">Skilled Job</a></li>
                  <li><a href="#">Unskilled Jobs</a></li>
                </ul>
              </li>
              <li><a href="#">Sciming And Sourcing</a></li>
              <li><a href="#">Interveiwing</a></li>
            </ul>
          </li>
          <li><a class="nav-link active" href="#">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="register.php" class="btn-get-started">Get Started</a>

    </div>
  </header><!-- End Header -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <span>Contact</span>
        <h2>Contact</h2>
        <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p><b>Professional Recruitment Services </b></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>ashkamhost@gmail.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+256-701324243</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up">

        <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d1722.164143752992!2d32.5680435501403!3d0.11600252219640425!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d0.1158082!2d32.568624!4m5!1s0x177d8f57e7ac1abf%3A0xf7f407d6105b1931!2sSaipali%20institute%20of%20technology%20%26%20Management%20Entebbe%20campus%20Saipali%20Balit%20avenue%20Kampala!3m2!1d0.1158099!2d32.5686178!5e1!3m2!1sen!2sug!4v1675856570100!5m2!1sen!2sug" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
    
  

 <!-- ===========footer ============ -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PRS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Ashraf K</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- libs JS Files -->
  <script src="assets/libs/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/libs/aos/aos.js"></script>
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/glightbox/js/glightbox.min.js"></script>
  <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
  <script src="assets/libs/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./assets/js/main.js"></script>
</body>
</html>