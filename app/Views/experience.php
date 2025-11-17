<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Riwayat Pengalaman - CV</title>
  <meta name="description" content="Riwayat Pengalaman">
  <meta name="keywords" content="CV, Experience, Pengalaman">

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
    
    .experience-item {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 2rem;
      margin-bottom: 1.5rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .experience-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(78, 158, 255, 0.2);
      border-color: rgba(78, 158, 255, 0.3);
    }
    
    .experience-item h4 {
      color: #ffffff;
      font-weight: 600;
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
    }
    
    .experience-item h5 {
      color: #4e9eff;
      font-weight: 500;
      font-size: 1.1rem;
      margin-bottom: 0.75rem;
    }
    
    .experience-item .company {
      color: #b0b0b0;
      font-style: italic;
      margin-bottom: 1rem;
    }
    
    .experience-item .company i {
      color: #4e9eff;
      margin-right: 0.5rem;
    }
    
    .experience-item ul {
      color: #d0d0d0;
      padding-left: 0;
      list-style: none;
    }
    
    .experience-item ul li {
      padding: 0.5rem 0;
      padding-left: 1.5rem;
      position: relative;
      line-height: 1.8;
    }
    
    .experience-item ul li i {
      position: absolute;
      left: 0;
      color: #4e9eff;
    }
    
    .badge {
      background: linear-gradient(135deg, #4e9eff 0%, #3d8eef 100%);
      color: #ffffff;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-weight: 500;
    }
    
    .badge.bg-success {
      background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
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
      .experience-item {
        padding: 1.5rem;
      }
      
      .experience-item h4 {
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
          <li><a href="<?= base_url('education') ?>">Pendidikan</a></li>
          <li><a href="<?= base_url('experience') ?>" class="active">Pengalaman</a></li>
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

    <!-- Experience Section -->
    <section id="experience" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Riwayat Pengalaman</h2>
        <p>Berikut adalah riwayat pengalaman kerja, organisasi, magang, dan proyek yang telah saya lakukan</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-12">
            <div class="resume-item" data-aos="fade-up">
              <div class="resume-content">
                <?php if (!empty($experiences)): ?>
                  <?php foreach ($experiences as $exp): ?>
                    <article class="experience-item" data-aos="fade-up" data-aos-delay="100">
                      <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="flex-grow-1">
                          <h4><?= esc($exp['jabatan']) ?></h4>
                          <h5><i class="bi bi-calendar3 me-2"></i><?= esc($exp['tahun_mulai']) ?> - <?= !empty($exp['tahun_selesai']) ? esc($exp['tahun_selesai']) : 'Sekarang' ?></h5>
                          <p class="company">
                            <i class="bi bi-building"></i> <?= esc($exp['perusahaan']) ?><?= !empty($exp['lokasi']) ? ' <i class="bi bi-geo-alt"></i> ' . esc($exp['lokasi']) : '' ?>
                          </p>
                        </div>
                        <div class="badge <?= !empty($exp['tahun_selesai']) ? '' : 'bg-success' ?> ms-3">
                          <?= !empty($exp['tahun_selesai']) ? esc($exp['tahun_selesai']) : 'Aktif' ?>
                        </div>
                      </div>
                      <?php if (!empty($exp['deskripsi'])): ?>
                        <?php 
                        $descriptions = explode("\n", $exp['deskripsi']);
                        $descriptions = array_filter(array_map('trim', $descriptions));
                        ?>
                        <?php if (!empty($descriptions)): ?>
                          <ul>
                            <?php foreach ($descriptions as $desc): ?>
                              <li><i class="bi bi-check-circle"></i><?= esc($desc) ?></li>
                            <?php endforeach; ?>
                          </ul>
                        <?php endif; ?>
                      <?php endif; ?>
                    </article>
                  <?php endforeach; ?>
                <?php else: ?>
                  <div class="text-center py-5" data-aos="fade-up">
                    <i class="bi bi-briefcase display-1 text-muted"></i>
                    <h4 class="mt-3">Belum ada data pengalaman</h4>
                    <p class="text-muted">Silakan tambahkan data pengalaman melalui halaman admin.</p>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Experience Section -->

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

