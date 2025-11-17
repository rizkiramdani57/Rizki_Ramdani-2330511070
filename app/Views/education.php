<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Riwayat Pendidikan - CV</title>
  <meta name="description" content="Riwayat Pendidikan">
  <meta name="keywords" content="CV, Education, Pendidikan">

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
  
  <!-- Custom Style untuk Keterbacaan dan Konsistensi -->
  <style>
    body.resume-page {
      color: #ffffff;
      background: #0a0e27;
    }
    
    .section-title h2 {
      color: #ffffff;
      font-weight: 700;
    }
    
    .section-title p {
      color: #d0d0d0;
    }
    
    .resume-item {
      color: #ffffff;
    }
    
    .resume-title {
      color: #4e9eff;
      font-weight: 600;
      margin-bottom: 2rem;
    }
    
    .education-item {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 2rem;
      margin-bottom: 1.5rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .education-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(78, 158, 255, 0.2);
      border-color: rgba(78, 158, 255, 0.3);
    }
    
    .education-item h4 {
      color: #ffffff;
      font-weight: 600;
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
    }
    
    .education-item h5 {
      color: #4e9eff;
      font-weight: 500;
      font-size: 1.1rem;
      margin-bottom: 0.75rem;
    }
    
    .education-item .institution {
      color: #b0b0b0;
      font-style: italic;
      margin-bottom: 1rem;
    }
    
    .education-item .institution i {
      color: #4e9eff;
      margin-right: 0.5rem;
    }
    
    .education-item p {
      color: #d0d0d0;
      line-height: 1.8;
      margin-bottom: 0;
    }
    
    .badge {
      background: linear-gradient(135deg, #4e9eff 0%, #3d8eef 100%);
      color: #ffffff;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-weight: 500;
    }
    
    .text-center.py-5 {
      color: #d0d0d0;
    }
    
    .text-center.py-5 h4 {
      color: #ffffff;
    }
    
    .text-center.py-5 i {
      color: #4e9eff;
      opacity: 0.5;
    }
    
    @media (max-width: 768px) {
      .education-item {
        padding: 1.5rem;
      }
      
      .education-item h4 {
        font-size: 1.3rem;
      }
    }
  </style>
</head>

<body class="resume-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li><a href="<?= base_url('education') ?>" class="active">Pendidikan</a></li>
          <li><a href="<?= base_url('experience') ?>">Pengalaman</a></li>
          <li><a href="<?= base_url('skills') ?>">Keahlian</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Education Section -->
    <section id="education" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Riwayat Pendidikan</h2>
        <p>Berikut adalah riwayat pendidikan yang telah saya tempuh</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-12">
            <div class="resume-item" data-aos="fade-up">
              <div class="resume-content">
                <?php if (!empty($educations)): ?>
                  <?php foreach ($educations as $edu): ?>
                    <article class="education-item" data-aos="fade-up" data-aos-delay="100">
                      <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="flex-grow-1">
                          <h4><?= esc($edu['tingkat']) ?></h4>
                          <h5><i class="bi bi-calendar3 me-2"></i><?= esc($edu['tahun_mulai']) ?> - <?= esc($edu['tahun_selesai']) ?></h5>
                          <p class="institution"><i class="bi bi-building"></i> <?= esc($edu['institusi']) ?></p>
                        </div>
                        <div class="badge ms-3"><?= esc($edu['tahun_selesai']) ?></div>
                      </div>
                      <?php if (!empty($edu['deskripsi'])): ?>
                        <p><?= esc($edu['deskripsi']) ?></p>
                      <?php endif; ?>
                    </article>
                  <?php endforeach; ?>
                <?php else: ?>
                  <div class="text-center py-5" data-aos="fade-up">
                    <i class="bi bi-mortarboard display-1 text-muted"></i>
                    <h4 class="mt-3">Belum ada data pendidikan</h4>
                    <p class="text-muted">Silakan tambahkan data pendidikan melalui halaman admin.</p>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Education Section -->

  </main>

  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename"><?= isset($profile['nama']) && !empty($profile['nama']) ? esc($profile['nama']) : 'CV' ?></strong> <span>All Rights Reserved<br></span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
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

