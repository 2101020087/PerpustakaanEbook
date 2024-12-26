<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Welcome</title>
    <meta content="" name="description" />

    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/landing-page/img/open-book.png" rel="icon" />
    <link
      href="<?= base_url(); ?>/landing-page/img/apple-touch-icon.png"
      rel="apple-touch-icon"
    />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="<?= base_url(); ?>/landing-page/vendor/aos/aos.css"
      rel="stylesheet"
    />
    <link
      href="<?= base_url(); ?>/landing-page/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="<?= base_url(); ?>/landing-page/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="<?= base_url(); ?>/landing-page/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link
      href="<?= base_url(); ?>/landing-page/vendor/remixicon/remixicon.css"
      rel="stylesheet"
    />
    <link
      href="<?= base_url(); ?>/landing-page/vendor/swiper/swiper-bundle.min.css"
      rel="stylesheet"
    />

    <!-- Template Main CSS File -->
    <link
      href="<?= base_url(); ?>/landing-page/css/style.css"
      rel="stylesheet"
    />
  </head>
  <header id="header" class="header fixed-top">
    <div
      class="
        container-fluid container-xl
        d-flex
        align-items-center
        justify-content-between
      "
      class="logo d-flex align-items-center"
    >
      <a href="index.html" class="logo d-flex align-items-center"> </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a
              class="getstarted scrollto"
              href="<?= route_to('login') ?>"
              style="background-color: #48449c"
              >Login</a
            >
          </li>
          <li>
            <a
              class="getstarted scrollto"
              href="<?= route_to('register') ?>"
              style="background-color: #48449c"
              >Register</a
            >
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle" style="color: white"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
      <div
        class="
          container-fluid container-xl
          d-flex
          align-items-center
          justify-content-between
        "
      >
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up" style="margin-bottom: -1rem">
              <img
                src="<?= base_url(); ?>/landing-page/img/open-book.png"
                alt=""
                style="width: 10%"
              />
              <span
                ><img
                  src="<?= base_url(); ?>/landing-page/img/E B O O K.png"
                  alt=""
                  style="width: 50%"
              /></span>
            </h1>
            <h6
              data-aos="fade-up"
              data-aos-delay="400"
              style="text-align: justify"
            >
              Selamat datang di <strong>EBOOK</strong>, sebuah website yang
              menyediakan buku elektronik gratis. Kami menyediakan berbagai
              buku dengan referensi terbaik, ditulis oleh penulis yang hebat
              dan kategori yang populer. Temukan buku yang anda cari secara
              gratis disini.
            </h6>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a
                  href="<?= route_to('main-page') ?>"
                  class="
                    btn-get-started
                    scrollto
                    d-inline-flex
                    align-items-center
                    justify-content-center
                    align-self-center
                  "
                  style="background-color: #48449c"
                >
                  <span>Mulai Perjalanan Anda</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div
            class="col-lg-6 hero-img"
            data-aos="zoom-out"
            data-aos-delay="200"
          >
            <img
              src="<?= base_url(); ?>/landing-page/img/reading (1).png"
              class="img-fluid"
              id="img1"
              alt=""
              style="width: 80%"
            />
          </div>
        </div>
      </div>
    </section>

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/landing-page/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url(); ?>/landing-page/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>/landing-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/landing-page/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/landing-page/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/landing-page/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>/landing-page/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/landing-page/js/main.js"></script>
  </body>
</html>
