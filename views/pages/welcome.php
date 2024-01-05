
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Temu Janji Poliklinik</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/img/logo_udinus1.jpeg" rel="icon">
    <!-- {<link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/aos/aos.css" rel="stylesheet">
    <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public"><span>Poliklinik</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto active" href="#layanan">Layanan</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
            <div data-aos="zoom-out">
                <h1>Sistem Temu Janji <span>Pasien - Dokter</span></h1>
                <h2>Bimbingan Karir 2023 Bidang Web</h2>
                <div class="text-center text-lg-start">
                    <a href="#layanan" class="btn-get-started scrollto">Lihat Selengkapnya</a>
                </div>
            </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
            <img src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
        </svg>

    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= layanan Section ======= -->
        <section id="layanan" class="pricing">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Layanan</h2>
                    <p>Layanan Sistem Temu Janji</p>
                </div>

                <div class="row" data-aos="fade-left">
                    <div class="col-lg-3 col-md-6">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Login Admin</h3>
                            <ul>
                                <li>Apabila Anda adalah seorang Admin, silahkan Login terlebih dahulu untuk mengelola data website!</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/views/pages/auth/login-admin.php" class="btn-buy">Login</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Login Dokter</h3>
                            <ul>
                                <li>Apabila Anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk memulai melayani Pasien!</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/views/pages/auth/login-dokter.php" class="btn-buy">Login</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Login Pasien</h3>
                            <ul>
                                <li>Apabila Anda adalah seorang Pasien, silahkan Login terlebih dahulu untuk mulai menggunakan layanan kami!</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/views/pages/auth/login-pasien.php" class="btn-buy">Login</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section><!-- End layanan Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Sistem Temu Janji</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/aos/aos.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk_poli_baru/public/assets/landing/js/main.js"></script>

</body>

</html>