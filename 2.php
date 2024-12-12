<?php

include 'koneksi.php';
 
error_reporting(0);
 
session_start();

if (empty($_SESSION['uname'])) {
  header('Location: login.php');
  echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Login dulu!')
            window.location.href='login.php';
            </SCRIPT>");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Cafe Trip</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Contact</a></li>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Chat</a></li>
          <li class="dropdown"><a href="#"><span>Mulai</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="index.html">Kopi Neko</a></li>
              <li><a href="#">Kopitagram</a></li>
            </ul>
          <li><a class="nav-link scrollto active" href="logout.php">Logout</a></li> 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1><u>Kopitagram Bandung</u></h1> <br>
          <p>Pilihan layanan:  Makan di tempat · Bawa pulang · Pengiriman tanpa kontak <br></p>
           <p> Alamat : Jl. Cianjur No.3, Kacapiring, Kec. Batununggal, Kota Bandung, Jawa Barat 40271</p>
          <p>Jam Buka : Senin-Jumat = 08 AM - 10 PM
            Sabtu-Minggu = 08 AM - 10 PM</p>
          <div>
            <a href="https://www.instagram.com/kopitagram/" class="btn-get-started scrollto">Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7826128075394!2d107.62904581477292!3d-6.9165736950024534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7f0f42f0815%3A0x9af310a526f57104!2sKopitagram%20-%20Ayani!5e0!3m2!1sen!2sid!4v1652987701150!5m2!1sen!2sid%22" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen>
          </iframe>

        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <section id="about" class="about">
    <div class="container">

      <div class="row justify-content-between">
        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
          <img src="assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0">
          <h3 data-aos="fade-up">Kontak Teman</h3>
          <p data-aos="fade-up" data-aos-delay="100">
            Ke Cafe kok sendiri? ayolah, kalo tidak punya pacar setidaknya punya teman!
          </p>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="table-wrap">
                  <table class="table">
                    <thead class="thead-primary">
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Nomor Ponsel</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Miranda</td>
                      <td>081*******</td>
                      <td>Aktif</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>SinyoGanteng</td>
                      <td>080*******</td>
                      <td>offline</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Zaqi</td>
                      <td>089*******</td>
                      <td>Aktif</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Arinda!</td>
                      <td>085*******</td>
                      <td>Tidak ada Status</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Novara</td>
                      <td>081*******</td>
                      <td>Aktif</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact Us</h2>
        <p>Contact us the get started</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Telkom University</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>FarizAlfarizi@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+6282289167585</p>
            </div>

            <img width=40%" border="1px" src="assets/img/3.jpeg">
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
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
  </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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