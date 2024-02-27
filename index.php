<?php
  $errors = [];
  if (isset($_POST['request'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name)) {
      $errors[] = 'Name is empty';
    }
    if (empty($email)) {
      $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $ERROR[] = 'Email is invalid';
    }
    if (empty($message)) {
      $errors[] = 'What was your message';
    }
  }
?>
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
  <link rel="stylesheet" href="assets/libs/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="assets/libs/animate.css/animate.min.css">
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
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">PRS<span>.</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link active" href="index.php">Home</a></li>
          <li><a class="nav-link" href="aboutus.php">About Us</a></li>
          <li><a class="nav-link" href="blog.php">Blog</a></li>
          <li><a class="nav-link" href="team.php">Our Team</a></li>
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
          <li><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="register.php" class="btn-get-started">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-10 col-lg-12">
          <h1>PROFESSIONAL RECRUITEMENT SERVICES<span>.</span></h1>
          <h2>We are ready to prepare for you a job, success and empower you with the right network to thrive</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-3 col-md-4" id="cards-1">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="">Internal Recruitment License Number – Skilled Labour</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4" id="cards-2">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">External Recruitment License Number</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4" id="cards-3">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Internal Recruitment License Number – Unskilled Labour</a></h3>
          </div>
        </div>
        <div class="col-xl-3 col-md-4" id="cards-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href="">Uganda Association of External Recruitment Agencies (UAERA)</a></h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Hero section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about my-5">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
          <img src="assets/img/psr.jpg" class="img-fluid" id="float">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
          <h3>Welcome to <span>PRS</span>.</h3>
          <p class="fst-italic">
            Please allow us with this opportunity to introduce our Company <b>Professional
              Recruitment Services</b> Limited situated in Kampala Uganda.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i>Get tailored HR Solutions that match all your business needs.</li>
            <li><i class="bi bi-check-circle"></i> The expert team will provide professional services you.</li>
            <li><i class="bi bi-check-circle"></i> Our HR consultants will work with you to ensure maximum business success by offering Customised Competency Assessments, Performance Management, Employee Outsourcing and Staff Training.</li>
          </ul>
          <p>
            PRS is a Ugandan based company that started in 2016 after realizing
            the demand for manpower and high number of unemployed youth in the country.
            In 2016 we opened up our offices in Kampala and Masaka after meeting all the
            necessary requirements, we are expecting to extend country wide and a cross bo....
          </p>
          <a href="aboutus.php" class="wel-btn">Read More</a>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= carousal Section ======= -->
  <section id="jobs">
    <div id="jobCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="job-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(./assets/img/slide/slide\ \(1\).jpg)">
          <div class="container">
            <h2>HR Consultancy</h2>
            <p>Our HR consultants will work with you to ensure maximum business success by offering Customised Competency Assessments, Performance Management, Employee Outsourcing and Staff Training.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(./assets/img/slide/slide\ \(2\).jpg)">
          <div class="container">
            <h2>Salary Benchmarking</h2>
            <p>Because of our consultancy expertise, we also offer benchmarking services to our clients for the different professional jobs.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(./assets/img/slide/slide\ \(3\).jpg)">
          <div class="container">
            <h2>Selection Process</h2>
            <p>
              We source and systematically select the perfect candidates.
            </p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#jobCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#jobCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Carousel -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts my-5">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-user"></i>
            <span data-purecounter-start="0" data-purecounter-end="585" data-purecounter-duration="1" class="purecounter"></span>

            <p><strong>Happy clients</strong> consequuntur quae qui deca rode</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="far fa-hospital"></i>
            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
            <p>
              <strong>Departments</strong>
            <ul>
              <li>Internal Recruitement</li>
              <li>External Recruitement</li>
            </ul>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <strong><i class="bx bx-receipt"></i></strong>
            <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Projects</strong> aut commodi quaerat. Aliquam ratione</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features my-3">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="image col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./assets/img/slide/IMG-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/slide/IMG-2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/slide/IMG-3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/slide/IMG-4.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./assets/img/slide/IMG-5.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
          <div class="icon-box mt-5 mt-lg-0">
            <i class="bx bx-receipt"></i>
            <h4>House Workers</h4>
            <p>Requirements: CV, Passport, Able to speak english, Registration Fees.</p>
            <p>Qatar <br>Age 20-40yr</p>
          </div>
          <div class="icon-box mt-5">
            <i class="bx bx-cube-alt"></i>
            <h4>Cleaners</h4>
            <p>Requirements: CV, Passport, Able to speak english, Registration Fees. For both Male and Female.</p>
            <p>Qatar <br>Age 20-40yr</p>
          </div>
          <div class="icon-box mt-5">
            <i class="bx bx-images"></i>
            <h4>Accountancy</h4>
            <p>Requirements: CV, Passport, Educational Documents, Registration Fees.</p>
            <p>Qatar <br>Age 20-40yr</p>
          </div>
          <div class="icon-box mt-5">
            <i class="bx bx-shield"></i>
            <h4>Security Gurds</h4>
            <p>Requirements: Passport, CV, Registration Fees, Able to speak english. For both Male and Female.</p>
            <p>Qatar <br>Age 20-40yr</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ========== cta section ============= -->
  <section id="cta" class="cta">
    <div class="container aos-init aos-animate" data-aos="zoom-in">

      <div class="text-center">
        <h3>Make A Change In Your Life</h3>
        <p>It is frustrating to look for a job having no idea on where to find it. It is for this very
          reason that PRS is in existence, to help you find and secure jobs. Because of our company's
          legendary quality standards and services, you will be at the fore front of life changing opportunities. <br>
          Walk into our offices locacted at Wakaliga next to Pacify hotel or interact with us online</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>

    </div>
  </section>

  <!-- ============ Internal contact =========== -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h5 class="fw-bold text-uppercase">Request A Quote</h5>
            <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
          </div>
          <div class="row gx-3">
            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
              <h5 class="mb-4"><i class="fa fa-reply me-3 icon"></i>Reply within 24 hours</h5>
            </div>
            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
              <h5 class="mb-4"><i class="fa fa-phone-alt me-3 icon"></i>12 hrs telephone support</h5>
            </div>
          </div>
          <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
          <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
            <div id="phone" class=" d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
              <i class="fa fa-phone-alt icon"></i>
            </div>
            <div class="ps-4">
              <h5 class="mb-2">Call to ask any question</h5>
              <h4 class=" mb-0">+256-701324243</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="intcontact rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
            <form action="assets/forms/form.php" method="POST" name="form" id="form1">
              <div class="row g-3">
                <div class="col-xl-12">
                  <input type="text" class="form-control bg-light border-0" name="name" placeholder="Your Name" style="height: 55px;">
                </div>
                <div class="col-12">
                  <input type="email" class="form-control bg-light border-0" name="email" placeholder="Your Email" style="height: 55px;">
                </div>
                <div class="col-12">
                  <select class="form-select bg-light border-0" name="service" style="height: 55px;" paceholder="select service">
                    <option selected="">Select a Service</option>
                    <option value="1">Job Inquiry</option>
                    <option value="2">Salary Benchmarking</option>
                    <option value="3">Interveiws</option>
                  </select>
                </div>
                <div class="col-12">
                  <textarea class="form-control bg-light border-0" rows="3" name="message" placeholder="Message"></textarea>
                </div>
                <div class="col-12">
                  <button class="btn btn-dark w-100 py-3" type="submit" name="request">Request A Quote</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>











  <!-- ===========footer ============ -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>PRS<span>.</span></h3>
              <p>
                Entebbe Rd<br>
                Kawuku, Uganga<br><br>
                <strong>Phone:</strong> +256701324243<br>
                <strong>Email:</strong> ashirafkagga@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Assessment tests</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Selection Process</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Interviewing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Salary Benchmarking</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">HR Consultancy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, esse!</p>
            <form action="" method="post">
              <input type="email" name="email" placeholder="@example.com"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

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

  <!-- form validation -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  <script>
    const constraints = {
      name: {
        presence: {
          allowEmpty: false
        }
      },
      email: {
        presence: {
          allowEmpty: false
        },
        email: true
      },
      message: {
        presence: {
          allowEmpty: false
        }
      }
    };

    const form = document.getElementById('contact-form');

    form.addEventListener('submit', function(event) {
      const formValues = {
        name: form.elements.name.value,
        email: form.elements.email.value,
        message: form.elements.message.value
      };

      const errors = validate(formValues, constraints);

      if (errors) {
        event.preventDefault();
        const errorMessage = Object
          .values(errors)
          .map(function(fieldValues) {
            return fieldValues.join(', ')
          })
          .join("\n");

        alert(errorMessage);
      }
    }, false);
  </script>


  <!-- Template Main JS File -->
  <script src="./assets/js/main.js"></script>
</body>

</html>