<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
  <title>Ballaleshwar Niwas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/26.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">ballaleshwarniwas@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +91 9545079399
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="home.html">Ballaleshwar Niwas</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="home.html">Home</a></li>
          <li><a class="nav-link scrollto" href="contact.html">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="#">Pays Dues</a></li>
          <li><a class="nav-link scrollto" href="team.html">Team</a></li>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="home.html">Home</a></li>
          <li>Team</li>
        </ol>
        <h2>Team Member</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <?php 
    include('config.php');

    $sql="SELECT * FROM `team`";
    $result= mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0){
      echo " <section id='team' class='team'>
      <div class='container'>

        <div class='section-title'>
          <span>Team</span>
          <h2>Team</h2>
          <p>Know to our Great team member who work together to make society happy and grateful.</p>
        </div>      
 ";

 while ($rows=mysqli_fetch_assoc($result)) {
  echo "<div class='row'>
  <div class='col-lg-4 col-md-6 d-flex align-items-stretch' data-aos='zoom-in'>
    <div class='member'>
      <img src='queryimage/{$rows['image']}' alt=''>
     
      <h4>{$rows['name']}</h4>
      <span>Chairman</span>
      <p>
        Dedicated leader, ensuring resident safety and comfort through efficient building management.
      </p>
      <div class='social'>
        <a href=''><i class='bi bi-twitter'></i></a>
        <a href=''><i class='bi bi-facebook'></i></a>
        <a href=''><i class='bi bi-instagram'></i></a>
        <a href=''><i class='bi bi-linkedin'></i></a>
      </div>
    </div>
  </div>

  ";
 }
    }    
    ?>
        </div>

      </div>
    </section><!-- End Team Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Ballaleshwar Niwas</h3>
              <p>
                Virar Mumbai <br>
                MH 401305, India<br><br>
                <strong>Phone:</strong> +1 9545079399<br>
                <strong>Email:</strong> ballaleshwarniwas@gmail.com<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="home.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Check Your Dues</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Reach Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="team.html">our Teams</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">Abouts Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="notice.html">Notice Board</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="rules.html">Rules And Regulations</a></li>

            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Search</h4>
            <p>Search rrlated to society information or any tabs.The search Button you reach us to website portofolio.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Search">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ballaleshwar Niwas 2024</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="#">T-Software Solution</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>