<!DOCTYPE html>
<html lang="">



<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="../../../fonts.googleapis.com/index.html">
  <link rel="preconnect" href="../../../fonts.gstatic.com/index.html" crossorigin>
  <link href="../../../fonts.googleapis.com/css2dec5.css?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

  <link href="../../../fonts.googleapis.com/css2f511.css?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../../../unpkg.com/leaflet%401.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/vendors.css">
  <link rel="stylesheet" href="css/main.css">

  <title>Home - Webex | SMKN 1 Garut</title>
</head>

<body class="preloader-visible" data-barba="wrapper">

  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>
  <!-- preloader end -->

  <!-- barba container start -->
  <div class="barba-container" data-barba="container">

    <?php include "header.php"; ?>
    
    <main class="main-content  ">

      <div class="content-wrapper  js-content-wrapper">


        <section data-anim-wrap class="masthead -type-3 bg-light-6 js-mouse-move-container">
          <div class="container">
            <div class="row y-gap-30 items-center justify-center">
              <div class="col-xl-7 col-lg-11 relative z-5">
                <div class="masthead__content pl-32 lg:pl-0">
                  <h1 data-anim-child="slide-up delay-1" class="masthead__title">
                    Temukan <span class="text-purple-1">Ekstrakulikuler</span> <br>yang ada di <br> SMKN 1 Garut
                  </h1>

                  <p data-anim-child="slide-up delay-2" class="masthead__text text-17 text-dark-1 mt-25">
                    Webex merupakan web yang berfungsi sebagai media<br class="lg:d-none">
                    untuk mengakses ekstrakulikuler yang ada di SMKN 1 Garut.
                  </p>
                </div>
              </div>

              <div data-anim-child="slide-up delay-5" class="col-xl-5 col-lg-7 relative z-2">
                <div class="masthead-image">
                  <div class="masthead-image__img1">
                    <div class="masthead-image__shape xl:d-none">
                      <img src="img/home-4/masthead/shape.svg" alt="image">
                    </div>
                    <img data-move="20" class="js-mouse-move" src="img/logo/smeaa.png" alt="image">
                  </div>

                  <div class="masthead-image__el1">
                    <div data-move="40" class="lg:d-none img-el -w-250 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                      <div class="size-50 d-flex justify-center items-center bg-red-2 rounded-full">
                        <img src="img/masthead/1.svg" alt="icon">
                      </div>
                      <div class="ml-20">
                        <div class="text-orange-1 text-16 fw-500 lh-1">34+</div>
                        <div class="mt-3">Ekstrakulikuler</div>
                      </div>
                    </div>
                  </div>

                  <div class="masthead-image__el2">
                    <div data-move="40" class="shadow-4 img-el -w-260 px-40 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                      <div class="img-el__side">
                        <div class="size-50 d-flex justify-center items-center bg-dark-1 rounded-full">
                          <img src="img/masthead/2.svg" alt="icon">
                        </div>
                      </div>
                      <div class="">
                        <div class="text-purple-1 text-16 fw-500 lh-1">Selamat Datang!</div>
                        <div class="mt-3">Para Juara</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>

        <section class="layout-pt-md layout-pb-md border-bottom-light">
          <div class="container">
            <div class="row justify-center">
              <div class="col text-center">
                <p class="text-lg text-dark-1">Web ini dikembangkan oleh :</p>
              </div>
            </div>

            <div class="row y-gap-30 justify-between sm:justify-start items-center pt-60 md:pt-50">

              <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                <div class="justify-center items-center px-4">
                  <img class="w-1/1" src="img/logo_pengembang/itc.png" alt="logo image">
                </div>
              </div>
              <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                <div class="justify-center items-center px-4">
                  <img class="w-1/1" src="img/logo_pengembang/osis.png" alt="clients image">
                </div>
              </div>
              <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                <div class="justify-center items-center px-4">
                  <img class="w-1/1" src="img/logo_pengembang/bc.png" alt="clients image">
                </div>
              </div>

            </div>
          </div>
        </section>

        <section class="layout-pt-lg layout-pb-lg">
          <div class="container">
            <div class="row y-gap-20 justify-center text-center">
              <div class="col-auto">

                <div class="sectionTitle ">

                  <h2 class="sectionTitle__title ">Ekstrakulikuler</h2>

                  <p class="sectionTitle__text ">Terdiri dari 34 Ekstrakulikuler yang ada di SMKN 1 Garut!</p>

                </div>

              </div>
            </div>

            <div data-anim-wrap class="pt-60 lg:pt-50">
              <div class="overflow-hidden js-section-slider" data-gap="30" data-loop data-pagination data-slider-cols="xl-6 lg-4 md-3 sm-2">
                <div class="swiper-wrapper">

                  <div class="swiper-slide h-100">
                    <a href="eskul/mpk.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/mpk.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">MPK</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/osis.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">OSIS</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/irma.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/irma.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">IRMA</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/pks.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">PKS</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/pramukaputra.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/pramukaputra.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">PRAMUKA PUTRA</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/pramukaputri.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/pramukaputri.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">PRAMUKA PUTRI</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/paskibra.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/osis.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">PASKIBRA</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/volly.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/volly.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">VOLLY</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/futsalputra.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/futsalputra.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">FUTSAL PUTRA</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/futsalputri.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/futsalputri.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">FUTSAL PUTRI</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/sepakbola.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/sepakbola.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">SEPAK BOLA</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/basket.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/basket.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">BASKET</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/osis.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">HOCKEY</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/badminton.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/badminton.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">BADMINTON</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/karate.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/karate.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">KARATE</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/taekwondo.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/taekwondo.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">TAEKWONDO</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/silat.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/pencaksilat.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">SILAT</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/tarungderajat.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/boxer.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">TARUNG DERAJAT</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/kir.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/kir.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">KIR</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/kopsis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/kopsis.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">KOPSIS</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/senitari.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/senitari.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">SENI TARI</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/marcingband.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/marchingband.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">MARCHING BAND</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/senikriya.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">SENI KRIYA</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/padus.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">PADUAN SUARA</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/osis.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">KARAWITAN</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/teater.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">TEATER</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/osis.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">SENI MUSIK</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/itc.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">IT-CLUB</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/broadcast.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">BROADCAST</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/englishclub.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">ENGLISH CLUB</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/koreanclub.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">KOREAN CLUB</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/osis.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">JAPAN CLUB</h5>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide h-100">
                    <a href="eskul/osis.php">
                      <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                          <div class="infoCard__image">
                            <img style="width: 100px; height: 99px;" src="img/logo/deutsch.png" alt="image">
                          </div>
                          <h5 class="infoCard__title text-17 lh-15 mt-10">DEUTSCH CLUB</h5>
                      </div>
                    </a>
                  </div>

                  <button class="section-slider-nav -prev -dark-bg-dark-2 -outline-dark-1 -absolute-out size-50 rounded-full xl:d-none js-courses-prev">
                    <i class="icon icon-arrow-left text-24"></i>
                  </button>
    
                  <button class="section-slider-nav -next -dark-bg-dark-2 -outline-dark-1 -absolute-out size-50 rounded-full xl:d-none js-courses-next">
                    <i class="icon icon-arrow-right text-24"></i>
                  </button>

                </div>

                <div class="d-flex justify-center x-gap-15 items-center pt-60 lg:pt-40">
                  <div class="col-auto">
                    <div class="pagination -arrows js-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="layout-pt-lg layout-pb-lg section-bg">
          <div class="section-bg__item bg-light-6"></div>

          <div data-anim-wrap class="container">
            <div class="row y-gap-15 justify-between items-center">
              <div class="col-lg-6">

                <div class="sectionTitle ">

                  <h2 class="sectionTitle__title ">Dokumentasi</h2>

                  <p class="sectionTitle__text ">Lihat dokumentasi dari semua ekstrakulikuler di sini!</p>

                </div>

              </div>
            </div>

            <div class="relative">
              <div class="overflow-hidden pt-60 lg:pt-50 js-section-slider" data-gap="30" data-loop data-pagination data-nav-prev="js-courses-prev" data-nav-next="js-courses-next" data-slider-cols="xl-4 lg-3 md-2 sm-2">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div data-anim-child="slide-up delay-1">

                      <a href="courses-single-1.html" class="coursesCard -type-1 px-10 py-10 border-light bg-white rounded-8">
                        <div class="relative">
                          <div class="coursesCard__image overflow-hidden rounded-8">
                            <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                            <div class="coursesCard__image_overlay rounded-8"></div>
                          </div>
                          <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                          </div>
                        </div>

                        <div class="h-100 px-10 pt-10">

                          <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Acara Paturay Tineung</div>

                          <div class="d-flex x-gap-10 items-center pt-10">

                            <div class="d-flex items-center">
                              <div class="mr-2">
                              </div>
                              <div class="text-14 lh-1">OSIS SMKN 1 Garut</div>
                            </div>

                          </div>

                          <div class="coursesCard-footer">
                            <div class="coursesCard-footer__author">
                              <img src="img/logo/osis.png" alt="image">
                              <div>Admin</div>
                            </div>
                          </div>
                        </div>
                      </a>

                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div data-anim-child="slide-up delay-1">

                      <a href="courses-single-1.html" class="coursesCard -type-1 px-10 py-10 border-light bg-white rounded-8">
                        <div class="relative">
                          <div class="coursesCard__image overflow-hidden rounded-8">
                            <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                            <div class="coursesCard__image_overlay rounded-8"></div>
                          </div>
                          <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                          </div>
                        </div>

                        <div class="h-100 px-10 pt-10">

                          <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Acara Paturay Tineung</div>

                          <div class="d-flex x-gap-10 items-center pt-10">

                            <div class="d-flex items-center">
                              <div class="mr-2">
                              </div>
                              <div class="text-14 lh-1">OSIS SMKN 1 Garut</div>
                            </div>

                          </div>

                          <div class="coursesCard-footer">
                            <div class="coursesCard-footer__author">
                              <img src="img/logo/osis.png" alt="image">
                              <div>Admin</div>
                            </div>
                          </div>
                        </div>
                      </a>

                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div data-anim-child="slide-up delay-1">

                      <a href="courses-single-1.html" class="coursesCard -type-1 px-10 py-10 border-light bg-white rounded-8">
                        <div class="relative">
                          <div class="coursesCard__image overflow-hidden rounded-8">
                            <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                            <div class="coursesCard__image_overlay rounded-8"></div>
                          </div>
                          <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                          </div>
                        </div>

                        <div class="h-100 px-10 pt-10">

                          <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Acara Paturay Tineung</div>

                          <div class="d-flex x-gap-10 items-center pt-10">

                            <div class="d-flex items-center">
                              <div class="mr-2">
                              </div>
                              <div class="text-14 lh-1">OSIS SMKN 1 Garut</div>
                            </div>

                          </div>

                          <div class="coursesCard-footer">
                            <div class="coursesCard-footer__author">
                              <img src="img/logo/osis.png" alt="image">
                              <div>Admin</div>
                            </div>
                          </div>
                        </div>
                      </a>

                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div data-anim-child="slide-up delay-1">

                      <a href="courses-single-1.html" class="coursesCard -type-1 px-10 py-10 border-light bg-white rounded-8">
                        <div class="relative">
                          <div class="coursesCard__image overflow-hidden rounded-8">
                            <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                            <div class="coursesCard__image_overlay rounded-8"></div>
                          </div>
                          <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                          </div>
                        </div>

                        <div class="h-100 px-10 pt-10">

                          <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Acara Paturay Tineung</div>

                          <div class="d-flex x-gap-10 items-center pt-10">

                            <div class="d-flex items-center">
                              <div class="mr-2">
                              </div>
                              <div class="text-14 lh-1">OSIS SMKN 1 Garut</div>
                            </div>

                          </div>

                          <div class="coursesCard-footer">
                            <div class="coursesCard-footer__author">
                              <img src="img/logo/osis.png" alt="image">
                              <div>Admin</div>
                            </div>
                          </div>
                        </div>
                      </a>

                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div data-anim-child="slide-up delay-1">

                      <a href="courses-single-1.html" class="coursesCard -type-1 px-10 py-10 border-light bg-white rounded-8">
                        <div class="relative">
                          <div class="coursesCard__image overflow-hidden rounded-8">
                            <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                            <div class="coursesCard__image_overlay rounded-8"></div>
                          </div>
                          <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                          </div>
                        </div>

                        <div class="h-100 px-10 pt-10">

                          <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Acara Paturay Tineung</div>

                          <div class="d-flex x-gap-10 items-center pt-10">

                            <div class="d-flex items-center">
                              <div class="mr-2">
                              </div>
                              <div class="text-14 lh-1">OSIS SMKN 1 Garut</div>
                            </div>

                          </div>

                          <div class="coursesCard-footer">
                            <div class="coursesCard-footer__author">
                              <img src="img/logo/osis.png" alt="image">
                              <div>Admin</div>
                            </div>
                          </div>
                        </div>
                      </a>

                    </div>
                  </div>

                </div>
              </div>


              <button class="section-slider-nav -prev -dark-bg-dark-2 -outline-dark-1 -absolute-out size-50 rounded-full xl:d-none js-courses-prev">
                <i class="icon icon-arrow-left text-24"></i>
              </button>

              <button class="section-slider-nav -next -dark-bg-dark-2 -outline-dark-1 -absolute-out size-50 rounded-full xl:d-none js-courses-next">
                <i class="icon icon-arrow-right text-24"></i>
              </button>

            </div>
          </div>
        </section>

        <section class="layout-pt-lg layout-pb-lg">
          <div data-anim-wrap class="container">
            <div data-anim-child="slide-left delay-1" class="row y-gap-20 justify-between items-center">
              <div class="col-lg-6">

                <div class="sectionTitle ">

                  <h2 class="sectionTitle__title ">Berita Terkini</h2>

                  <p class="sectionTitle__text ">Lihat berita terbaru dari SMKN 1 Garut di sini!</p>

                </div>

              </div>
            </div>

            <div class="row y-gap-30 pt-50">

              <div data-anim-child="slide-left delay-2" class="col-lg-4 col-md-6">
                <a href="berita.php" class="blogCard -type-1">
                  <div class="blogCard__image">
                    <img src="img/blog/1.png" alt="image">
                  </div>
                  <div class="blogCard__content">
                    <div class="blogCard__category">EDUCATION</div>
                    <h4 class="blogCard__title">Eco-Education in Our Lives: We Can Change the Future</h4>
                    <div class="blogCard__date">December 16, 2022</div>
                  </div>
                </a>
              </div>

              <div data-anim-child="slide-left delay-3" class="col-lg-4 col-md-6">
                <a href="blog-single.html" class="blogCard -type-1">
                  <div class="blogCard__image">
                    <img src="img/blog/2.png" alt="image">
                  </div>
                  <div class="blogCard__content">
                    <div class="blogCard__category">DESIGN</div>
                    <h4 class="blogCard__title">How to design a simple, yet unique and memorable brand identity</h4>
                    <div class="blogCard__date">December 16, 2022</div>
                  </div>
                </a>
              </div>


              <div class="col-lg-4">
                <div class="row y-gap-30">

                  <div class="col-lg-12 col-md-6">
                    <a href="#" data-anim-child="slide-left delay-4" class="blogCard -type-2">
                      <div class="blogCard__image">
                        <img src="img/blog/small/1.png" alt="image">
                      </div>
                      <div class="blogCard__content">
                        <div class="blogCard__category">COURSES</div>
                        <h4 class="blogCard__title">Medical Chemistry: The Molecular Basis</h4>
                        <div class="blogCard__date">December 16, 2022</div>
                      </div>
                    </a>
                  </div>

                  <div class="col-lg-12 col-md-6">
                    <a href="#" data-anim-child="slide-left delay-5" class="blogCard -type-2">
                      <div class="blogCard__image">
                        <img src="img/blog/small/2.png" alt="image">
                      </div>
                      <div class="blogCard__content">
                        <div class="blogCard__category">DEVELOPMENT</div>
                        <h4 class="blogCard__title">Qualification for Students’ Satisfaction Rate</h4>
                        <div class="blogCard__date">December 16, 2022</div>
                      </div>
                    </a>
                  </div>

                  <div class="col-lg-12 col-md-6">
                    <a href="#" data-anim-child="slide-left delay-6" class="blogCard -type-2">
                      <div class="blogCard__image">
                        <img src="img/blog/small/3.png" alt="image">
                      </div>
                      <div class="blogCard__content">
                        <div class="blogCard__category">LIFESTYLE</div>
                        <h4 class="blogCard__title">Simple Words about Science Complications</h4>
                        <div class="blogCard__date">December 16, 2022</div>
                      </div>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
        
        <?php include "footerbawah.php"; ?>
        
      </div>
    </main>
  </div>
  <!-- barba container end -->

  <!-- JavaScript -->
  <script src="../../../unpkg.com/leaflet%401.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script src="js/vendors.js"></script>
  <script src="js/main.js"></script>

</body>


<!-- Mirrored from creativelayers.net/themes/educrat-html/home-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jul 2022 12:43:55 GMT -->
</html>