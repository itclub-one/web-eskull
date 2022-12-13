<!DOCTYPE html>
<html lang="">



<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/index.html">
  <link rel="preconnect" href="https://fonts.gstatic.com/index.html" crossorigin>
  <link href="https://fonts.googleapis.com/css2dec5.css?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2f511.css?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet%401.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <link rel="icon" type="image/x-icon" href="{{asset('logoeskul/smea.ico')}}">



  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset('webex/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('webex/css/vendors.css')}}">

  <title>Home - Webex | SMKN 1 Garut</title>
</head>

<body class="preloader-visible" data-barba="wrapper">

  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg">
      <img src="{{asset('logoeskul/lofgo smea.png')}}" alt="">
    </div>
  </div>
  <!-- preloader end -->

  <!-- barba container start -->
  <div class="barba-container" data-barba="container">

<header data-anim="fade" data-add-bg="" class="header -type-4 -shadow bg-white border-bottom-light js-header">


    <div class="header__container heighttt py-10">
      <div class="row justify-between items-center">

        <div class="col-auto">
          <div class="header-left d-flex items-center">

            <div class="header__logo">
              <a>
                <img style="height: 57px;" src="{{asset('webex/img/general/smea.png')}}" alt="logo">
              </a>
            </div>


            <div class="header__explore px-30 xl:px-20 -before-border -after-border xl:d-none">
              <a href="#" class="d-flex  items-center" data-el-toggle=".js-explore-toggle">
                <i class="icon icon-explore mr-15"></i>
                Jelajahi
              </a>

              <div class="explore-content py-25 rounded-8 bg-white toggle-element js-explore-toggle">


                <div class="explore__item">
                  <a href="mpk1" class="text-dark-1 ">MPK</a>
                </div>

                <div class="explore__item">
                  <a href="osis2" class="text-dark-1 ">OSIS</a>
                </div>

                <div class="explore__item">
                  <a href="#" class="d-flex  items-center justify-between text-dark-1">
                    Sekbid 1<div class="icon-chevron-right text-11"></div>
                  </a>
                  <div class="explore__subnav rounded-8">
                    <a class="text-dark-1 " href="irma3">IRMA</a>
                  </div>
                </div>

                <div class="explore__item">
                  <a href="#" class="d-flex  items-center justify-between text-dark-1">
                    Sekbid 2<div class="icon-chevron-right text-11"></div>
                  </a>
                  <div class="explore__subnav rounded-8">
                    <a class="text-dark-1 " href="pks4">PKS</a>
                  </div>
                </div>

                <div class="explore__item">
                  <a href="#" class="d-flex  items-center justify-between text-dark-1">
                    Sekbid 3<div class="icon-chevron-right text-11"></div>
                  </a>
                  <div class="explore__subnav rounded-8">
                    <a class="text-dark-1 " href="pramuka-putra5">PRAMUKA PUTRA</a>
                    <a class="text-dark-1 " href="pramuka-putri6">PRAMUKA PUTRI</a>
                    <a class="text-dark-1 " href="paskibra7">PASKIBRA</a>
                  </div>
                </div>

                <div class="explore__item">
                  <a href="#" class="d-flex  items-center justify-between text-dark-1">
                    Sekbid 4<div class="icon-chevron-right text-11"></div>
                  </a>
                  <div class="explore__subnav rounded-8">
                    <a class="text-dark-1 " href="volly8">VOLLY</a>
                    <a class="text-dark-1 " href="futsal-putra9">FUTSAL PUTRA</a>
                    <a class="text-dark-1 " href="futsal-putri10">FUTSAL PUTRI</a>
                    <a class="text-dark-1 " href="sepakbola35">SEPAK BOLA</a>
                    <a class="text-dark-1 " href="basket12">BASKET</a>
                    <a class="text-dark-1 " href="hockey13">HOCKEY</a>
                    <a class="text-dark-1 " href="badminton14">BADMINTON</a>
                    <a class="text-dark-1 " href="karate15">KARATE</a>
                    <a class="text-dark-1 " href="taekwondo16">TAEKWONDO</a>
                    <a class="text-dark-1 " href="silat17">SILAT</a>
                    <a class="text-dark-1 " href="tarung-derajat18">TARUNG DERAJAT</a>
                  </div>
                </div>

                <div class="explore__item">
                  <a href="#" class="d-flex  items-center justify-between text-dark-1">
                    Sekbid 5<div class="icon-chevron-right text-11"></div>
                  </a>
                  <div class="explore__subnav rounded-8">
                    <a class="text-dark-1 " href="kir19">KIR</a>
                  </div>
                </div>

                <div class="explore__item">
                  <a href="#" class="d-flex  items-center justify-between text-dark-1">
                    Sekbid 6<div class="icon-chevron-right text-11"></div>
                  </a>
                  <div class="explore__subnav rounded-8">
                    <a class="text-dark-1 " href="kopsis20">KOPSIS</a>
                  </div>
                </div>

                <div class="explore__item">
                  <a href="#" class="d-flex  items-center justify-between text-dark-1">
                    Sekbid 7<div class="icon-chevron-right text-11"></div>
                  </a>
                  <div class="explore__subnav rounded-8">
                    <a class="text-dark-1 " href="pmr21">PMR</a>
                  </div>
                </div>

                <div class="explore__item">
                  <a href="#" class="d-flex  items-center justify-between text-dark-1">
                    Sekbid 8<div class="icon-chevron-right text-11"></div>
                  </a>
                  <div class="explore__subnav rounded-8">
                    <a class="text-dark-1 " href="seni-tari22">SENI TARI</a>
                    <a class="text-dark-1 " href="marching-band23">MARCHING BAND</a>
                    <a class="text-dark-1 " href="seni-kriya24">SENI KRIYA</a>
                    <a class="text-dark-1 " href="paduan-suara25">PADUAN SUARA</a>
                    <a class="text-dark-1 " href="karawitan26">KARAWITAN</a>
                    <a class="text-dark-1 " href="teater27">TEATER</a>
                    <a class="text-dark-1 " href="seni-musik28">SENI MUSIK</a>
                  </div>
                </div>

                <div class="explore__item">
                  <a href="#" class="d-flex  items-center justify-between text-dark-1">
                    Sekbid 9<div class="icon-chevron-right text-11"></div>
                  </a>
                  <div class="explore__subnav rounded-8">
                    <a class="text-dark-1 " href="it-club29">IT-CLUB</a>
                    <a class="text-dark-1 " href="broadcast30">BROADCAST</a>
                  </div>
                </div>

                <div class="explore__item">
                  <a href="#" class="d-flex  items-center justify-between text-dark-1">
                    Sekbid 10<div class="icon-chevron-right text-11"></div>
                  </a>
                  <div class="explore__subnav rounded-8">
                    <a class="text-dark-1 " href="english-club31">ENGLISH CLUB</a>
                    <a class="text-dark-1 " href="korean-club32">KOREAN CLUB</a>
                    <a class="text-dark-1 " href="japan-club33">JAPAN CLUB</a>
                    <a class="text-dark-1 " href="deutsch-club34">DEUTSCH CLUB</a>
                  </div>
                </div>

                <div class="explore__item">
                </div>
              </div>
            </div>

            <div class="header-menu js-mobile-menu-toggle pl-30 xl:pl-20">
              <div class="header-menu__content">
                <div class="mobile-bg js-mobile-bg"></div>

                <div class="menu js-navList">
                  <ul class="menu__nav text-dark-1 -is-active">
                    <li>
                      <a data-barba class="" href="/">Home</a>
                    </li>

                    <li class="menu-item-has-children dropdown" >
                      <a data-barba  href="#">Tentang Kami <i class="icon-chevron-right dropdown-toggle text-13 ml-10"></i></a>
                      <ul class="subnav dropdown-menu martoppp" >

                        <li><a class=" dropdown-item" href="kepala-sekolah">Sambutan Kepala Sekolah</a></li>

                        <li><a class=" dropdown-item" href="wakil-kepala-sekolah">Sambutan Wakasek Bidang Kesiswaan</a></li>

                        <li><a class=" dropdown-item" href="visi-misi-sejarah">Sejarah, Visi, dan Misi</a></li>

                        <li><a class=" dropdown-item" href="tentang-web-ini">Tentang Web Ini</a></li>

                      </ul>
                    </li>

                    <li>
                      <a class="" data-barba href="dokumentasi_">Dokumentasi</a>
                    </li>

                    <li>
                      <a class="" data-barba href="news">Berita</a>
                    </li>

                    <li>
                      <a class="" data-barba href="contact-person">Hubungi Kami</a>
                    </li>
                  </ul>
                </div>

                <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                  <div class="mobile-footer__number">
                    <div class="text-17 fw-500 text-dark-1">Hubungi Kami</div>
                    <div class="text-17 fw-500 text-purple-1">(0262) 233316</div>
                  </div>

                  <div class="lh-2 mt-10">
                    <div>JALAN CIMANUK NO 309 A,<br> Kecamatan Tarogong Kidul <br> Kabupaten Garut <br> Provinsi Jawa Barat.</div>
                    <div>smknegeri1garut@ymail.com</div>
                  </div>

                  <div class="mobile-socials mt-10">

                    <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                      <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                      <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                      <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                      <i class="fa fa-linkedin"></i>
                    </a>

                  </div>
                </div>
              </div>

              <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                  <div class="icon-close text-dark-1 text-16"></div>
                </div>
              </div>

              <div class="header-menu-bg"></div>
            </div>

          </div>
        </div>


        <div class="col-auto">
          <div class="header-right d-flex items-center">
            <div class="header-right__icons text-white d-flex items-center">

              <div class="relative -before-border px-20 sm:px-15">

              <div class="xl:d-block -before-border pl-20 sm:pl-15">
                <button class="text-dark-1 items-center" data-el-toggle=".js-mobile-menu-toggle">
                  <i class="text-11 icon icon-mobile-menu"></i>
                </button>
              </div>

            </div>
          </div>
        </div>

      </div>

      </div>
    </div>
    </header>

  @yield('content')
  @yield('dokumentasi')



  <footer class="footer -type-1 -dark bg-light-9">
    <div class="container">
      <div class="footer-header border-bottom-dark">
        <div class="row y-gap-20 justify-between items-center">
          <div class="col-auto">
            <div class="footer-header__logo">
            <img style="height: 30px;" src="{{asset('webex/img/general/footer.png')}}" alt="logo">
            </div>
          </div>
          <div class="col-auto">
            <div class="footer-header-socials">
              <div class="footer-header-socials__title text-dark-1">Follow us on social media</div>
              <div class="footer-header-socials__list">

                <a class="" href="#"><i class="text-14 fa fa-facebook"></i></a>

                <a class="" href="#"><i class="text-14 fa fa-twitter"></i></a>

                <a class="" href="https://www.instagram.com/smkn1garut_official/"><i class="text-14 fa fa-instagram"></i></a>

              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="footer-footer border-top-dark">
        <div class="row justify-between y-gap-20"><center>
          <div class="col-md-6">
            <div class="footer-footer__copyright">Copyright © 2022 IT-Club SMKN 1 Garut.</div>
          </div></center>
        </div>
      </div>
    </div>
</footer>
</div>
</main>
</div>
<!-- barba container end -->

<!-- JavaScript -->

</body>


<!-- Mirrored from creativelayers.net/themes/educrat-html/home-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jul 2022 12:43:55 GMT -->
</html>
<script src="https://unpkg.com/leaflet%401.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="{{asset('webex/js/vendors.js')}}"></script>
<script src="{{asset('webex/js/main.js')}}"></script>
