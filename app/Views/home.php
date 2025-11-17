<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home - CV</title>
  <meta name="description" content="Home - Curriculum Vitae">
  <meta name="keywords" content="CV, Resume, Portfolio">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
  
  <!-- Custom Style untuk Keterbacaan -->
  <style>
    body.index-page {
      color: #ffffff;
    }
    
    .hero-content h1 {
      color: #ffffff;
      font-weight: 700;
    }
    
    .hero-content h1 .highlight {
      color: #4e9eff;
    }
    
    .hero-content h2 {
      color: #e0e0e0;
      font-weight: 500;
    }
    
    .hero-content p {
      color: #d0d0d0;
      font-size: 1.1rem;
      line-height: 1.8;
    }
    
    .biodata-section {
      color: #ffffff;
    }
    
    .biodata-section .card {
      background: rgba(255, 255, 255, 0.05) !important;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1) !important;
    }
    
    .biodata-item {
      color: #ffffff;
    }
    
    .biodata-item strong {
      color: #ffffff;
      font-weight: 600;
    }
    
    .biodata-item div {
      color: #e0e0e0;
    }
    
    .biodata-item a {
      color: #4e9eff;
      transition: color 0.3s ease;
    }
    
    .biodata-item a:hover {
      color: #6bb3ff;
    }
    
    .hero-actions .btn-primary {
      background-color: #4e9eff;
      border-color: #4e9eff;
      color: #ffffff;
      font-weight: 500;
    }
    
    .hero-actions .btn-primary:hover {
      background-color: #3d8eef;
      border-color: #3d8eef;
    }
    
    .hero-actions .btn-outline {
      border-color: #4e9eff;
      color: #4e9eff;
      font-weight: 500;
    }
    
    .hero-actions .btn-outline:hover {
      background-color: #4e9eff;
      color: #ffffff;
    }
    
    .social-links a {
      color: #d0d0d0;
      transition: color 0.3s ease;
    }
    
    .social-links a:hover {
      color: #4e9eff;
    }
    
    .hero-image {
      margin-bottom: 2rem;
    }
    
    .hero-image img {
      transition: transform 0.3s ease;
    }
    
    .hero-image img:hover {
      transform: scale(1.05);
    }
    
    .hero-content {
      max-width: 100%;
    }
    
    @media (min-width: 768px) {
      .hero-content {
        text-align: left !important;
      }
    }
    
    @media (max-width: 768px) {
      .hero-image {
        margin-bottom: 2rem;
        margin-top: 1rem;
      }
      
      .hero-image img {
        max-width: 200px !important;
        width: 200px !important;
        height: 200px !important;
      }
      
      .hero-content {
        text-align: center !important;
      }
      .hero-content h1 {
        font-size: 2rem;
      }
      
      .hero-content h2 {
        font-size: 1.3rem;
      }
      
      .hero-content p {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body class="index-page">

  <?php 
  // Social media links - Edit link di bawah ini sesuai dengan akun Anda
  $instagram = 'https://www.instagram.com/rizki.rmdni_?utm_source=qr&igsh=MXMybGdqejR4NW15Nw==';
  $facebook = 'https://www.facebook.com/share/1CYyHaaE3Y/';
  $github = 'https://github.com/rizkiramdani57';
  ?>

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url() ?>" class="active">Home</a></li>
          <li><a href="<?= base_url('education') ?>">Pendidikan</a></li>
          <li><a href="<?= base_url('experience') ?>">Pengalaman</a></li>
          <li><a href="<?= base_url('skills') ?>">Keahlian</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="<?= $instagram ?>" target="_blank" rel="noopener noreferrer" class="instagram" title="Instagram"><i class="bi bi-instagram"></i></a>
        <a href="<?= $facebook ?>" target="_blank" rel="noopener noreferrer" class="facebook" title="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="<?= $github ?>" target="_blank" rel="noopener noreferrer" class="github" title="GitHub"><i class="bi bi-github"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center">
          <div class="col-lg-7 col-md-6">
            <div class="hero-content text-center text-md-start">
              <h1 data-aos="fade-up" data-aos-delay="200">
                Hello, I'm <span class="highlight"><?= isset($profile['nama']) && !empty($profile['nama']) ? esc($profile['nama']) : 'Your Name' ?></span>
              </h1>
              <h2 data-aos="fade-up" data-aos-delay="300">
                <span class="typed" data-typed-items="Mahasiswa Teknik Informatika, Web Developer Pemula, Programmer, Tech Enthusiast"></span>
              </h2>
              <p data-aos="fade-up" data-aos-delay="400">
                <?= isset($profile['deskripsi']) && !empty($profile['deskripsi']) ? esc($profile['deskripsi']) : 'Seorang developer yang berpengalaman dalam pengembangan aplikasi web modern menggunakan teknologi terkini. Memiliki passion dalam menciptakan solusi teknologi yang efisien dan user-friendly.' ?>
              </p>
              
              <!-- Biodata Section -->
              <?php if (isset($profile) && !empty($profile)): ?>
              <div class="biodata-section mt-4" data-aos="fade-up" data-aos-delay="450">
                <div class="card border-0 shadow-sm bg-transparent">
                  <div class="card-body p-4">
                    <div class="row g-3">
                      <div class="col-md-6">
                        <div class="biodata-item mb-3">
                          <i class="bi bi-person-fill me-2 text-primary"></i>
                          <strong>Nama:</strong>
                          <div class="ms-4 mt-1"><?= esc($profile['nama']) ?></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="biodata-item mb-3">
                          <i class="bi bi-envelope-fill me-2 text-primary"></i>
                          <strong>Email:</strong>
                          <div class="ms-4 mt-1">
                            <a href="mailto:<?= esc($profile['email']) ?>" class="text-decoration-none"><?= esc($profile['email']) ?></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="biodata-item mb-3">
                          <i class="bi bi-telephone-fill me-2 text-primary"></i>
                          <strong>Telepon:</strong>
                          <div class="ms-4 mt-1">
                            <a href="tel:<?= esc($profile['telepon']) ?>" class="text-decoration-none"><?= esc($profile['telepon']) ?></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="biodata-item mb-3">
                          <i class="bi bi-geo-alt-fill me-2 text-primary"></i>
                          <strong>Alamat:</strong>
                          <div class="ms-4 mt-1"><?= esc($profile['alamat']) ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              
              <div class="hero-actions mt-4" data-aos="fade-up" data-aos-delay="500">
                <a href="<?= base_url('experience') ?>" class="btn btn-primary me-2 mb-2">Lihat Pengalaman</a>
                <a href="<?= base_url('education') ?>" class="btn btn-outline me-2 mb-2">Lihat Pendidikan</a>
                <a href="<?= base_url('skills') ?>" class="btn btn-outline mb-2">Lihat Keahlian</a>
              </div>
              <div class="social-links mt-4" data-aos="fade-up" data-aos-delay="600">
                <a href="<?= $instagram ?>" target="_blank" rel="noopener noreferrer" class="me-3" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="<?= $facebook ?>" target="_blank" rel="noopener noreferrer" class="me-3" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="<?= $github ?>" target="_blank" rel="noopener noreferrer" class="me-3" title="GitHub"><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="hero-image text-center" data-aos="fade-left" data-aos-delay="100">
              <img src="<?= base_url('assets/img/profile/profile-photo.jpeg') ?>" alt="Profile Photo" class="img-fluid rounded-circle shadow-lg mx-auto d-block" style="max-width: 250px; width: 250px; height: 250px; border: 3px solid rgba(255, 255, 255, 0.2); object-fit: cover;">
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

  </main>

  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename"><?= isset($profile['nama']) && !empty($profile['nama']) ? esc($profile['nama']) : 'CV' ?></strong> <span>All Rights Reserved<br></span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href="<?= $instagram ?>" target="_blank" rel="noopener noreferrer" title="Instagram"><i class="bi bi-instagram"></i></a>
        <a href="<?= $facebook ?>" target="_blank" rel="noopener noreferrer" title="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="<?= $github ?>" target="_blank" rel="noopener noreferrer" title="GitHub"><i class="bi bi-github"></i></a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/typed.js/typed.umd.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/waypoints/noframework.waypoints.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>

  <!-- Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>

