<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sailor Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/')?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/')?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/')?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/')?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/')?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/')?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/')?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/')?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/')?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v2.3.1
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="<?php echo site_url('home')?>">ELECTRONIC STORE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li><a href="<?php echo site_url('data_barang/formTambah')?>">Input Data</a></li>
          <li><a href="<?php echo site_url('data_barang')?>">Data Barang</a></li>
        </ul>

      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

<!-- Konten -->
<?php echo $content ?>
<!-- Konten -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Rifky</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">Rifky Kurniawan | 5180311134</a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/')?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/')?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets/')?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url('assets/')?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url('assets/')?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('assets/')?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url('assets/')?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url('assets/')?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/')?>assets/js/main.js"></script>

</body>

</html>
