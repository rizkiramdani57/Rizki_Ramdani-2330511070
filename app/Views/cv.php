<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CV - Rizki Ramdani</title>
  <meta name="description" content="Curriculum Vitae - Rizki Ramdani">
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
</head>

<body class="resume-page">

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
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Curriculum Vitae</h2>
        <p><?= isset($profile['deskripsi']) && !empty($profile['deskripsi']) ? $profile['deskripsi'] : 'Berikut adalah ringkasan pendidikan, pengalaman kerja, dan keterampilan profesional saya' ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6">

            <!-- Education Section -->
            <div class="resume-item" data-aos="fade-up">
              <h3 class="resume-title">Pendidikan</h3>

              <div class="resume-content">
                <?php if (!empty($educations)): ?>
                  <?php foreach ($educations as $edu): ?>
                    <article class="education-item">
                      <h4><?= esc($edu['tingkat']) ?></h4>
                      <h5><?= esc($edu['tahun_mulai']) ?> - <?= esc($edu['tahun_selesai']) ?></h5>
                      <p class="institution"><em><?= esc($edu['institusi']) ?></em></p>
                      <?php if (!empty($edu['deskripsi'])): ?>
                        <p><?= esc($edu['deskripsi']) ?></p>
                      <?php endif; ?>
                    </article>
                  <?php endforeach; ?>
                <?php else: ?>
                  <article class="education-item">
                    <h4>Belum ada data pendidikan</h4>
                    <p>Silakan tambahkan data pendidikan melalui halaman admin.</p>
                  </article>
                <?php endif; ?>
              </div>
            </div><!-- End Education Section -->

            <!-- Professional Skills Section -->
            <div class="resume-item skills-animation" data-aos="fade-up">
              <h3 class="resume-title">Keterampilan Profesional</h3>

              <div class="resume-content">
                <?php if (!empty($skills)): ?>
                  <?php foreach ($skills as $skill): ?>
                    <div class="skill-item">
                      <h4><?= esc($skill['nama']) ?></h4>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="<?= esc($skill['tingkat']) ?>" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                <?php else: ?>
                  <div class="skill-item">
                    <h4>Belum ada data keterampilan</h4>
                    <p>Silakan tambahkan data keterampilan melalui halaman admin.</p>
                  </div>
                <?php endif; ?>
              </div>
            </div><!-- End Professional Skills Section -->
          </div>

          <div class="col-lg-6">
            <!-- Experience Section -->
            <div class="resume-item" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Pengalaman Kerja</h3>

              <div class="resume-content">
                <?php if (!empty($experiences)): ?>
                  <?php foreach ($experiences as $exp): ?>
                    <article class="experience-item">
                      <h4><?= esc($exp['jabatan']) ?></h4>
                      <h5><?= esc($exp['tahun_mulai']) ?> - <?= !empty($exp['tahun_selesai']) ? esc($exp['tahun_selesai']) : 'Sekarang' ?></h5>
                      <p class="company"><em><?= esc($exp['perusahaan']) ?><?= !empty($exp['lokasi']) ? ', ' . esc($exp['lokasi']) : '' ?></em></p>
                      <?php if (!empty($exp['deskripsi'])): ?>
                        <?php 
                        $descriptions = explode("\n", $exp['deskripsi']);
                        $descriptions = array_filter(array_map('trim', $descriptions));
                        ?>
                        <?php if (!empty($descriptions)): ?>
                          <ul>
                            <?php foreach ($descriptions as $desc): ?>
                              <li><?= esc($desc) ?></li>
                            <?php endforeach; ?>
                          </ul>
                        <?php endif; ?>
                      <?php endif; ?>
                    </article>
                  <?php endforeach; ?>
                <?php else: ?>
                  <article class="experience-item">
                    <h4>Belum ada data pengalaman</h4>
                    <p>Silakan tambahkan data pengalaman kerja melalui halaman admin.</p>
                  </article>
                <?php endif; ?>
              </div>
            </div><!-- End Experience Section -->
          </div>
        </div>

      </div>

    </section><!-- /Resume Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename"><?= isset($profile['nama']) && !empty($profile['nama']) ? esc($profile['nama']) : 'Rizki Ramdani' ?></strong> <span>All Rights Reserved<br></span></p>
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

