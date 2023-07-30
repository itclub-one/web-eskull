<!DOCTYPE html>
<html lang="">
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}


<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="author" content="Mochammad Ikhsan Nawawi">
  <meta name="robots" content="index">
  <meta name="keywords" content="webex, smk negeri 1 garut, smea,smknegeri1garut, ekstrakurikuler">
  <meta name="title" content="Webex Smk Negeri 1 Garut">
  <meta name="description" content="Webex adalah Web Ekstrakurikuler Smk Negeri 1 Garut untuk mengelola ekstrakurikuler">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/index.html">
  <link rel="preconnect" href="https://fonts.gstatic.com/index.html" crossorigin>
  <link href="https://fonts.googleapis.com/css2dec5.css?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2f511.css?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet%401.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <link rel="icon" type="image/x-icon" href="{{asset('images/page-loader/smea.ico')}}">


  {{-- Select2 CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset('webex/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('webex/css/vendors.css')}}">
  
  @stack('css')
  <title>{{$title ?? 'Home - Webex | SMKN 1 Garut'}}</title>

</head>

<body class="preloader-visible" data-barba="wrapper">

  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg">
      <img src="{{asset('images/page-loader/smea.png')}}" alt="">
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
                <img style="height: 57px;" src="{{asset('images/page-loader/smea.png')}}" alt="logo">
              </a>
            </div>
    
              @include('layout.jelajah')

            
    
                <div class="explore__item">
                </div>
              </div>
            </div>
            {{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
            <div class="header-menu js-mobile-menu-toggle pl-30 xl:pl-20">
              <div class="header-menu__content">
                <div class="mobile-bg js-mobile-bg"></div>
    
                <div class="menu js-navList">
                  <ul class="menu__nav text-dark-1 -is-active">
                    <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                      <a data-barba class="" href="/">Home</a>
                    </li>
    
                    <li class="menu-item-has-children dropdown {{ (request()->is('kepala-sekolah','wakil-kepala-sekolah')) ? 'active' : '' }}" >
                      <a data-barba  href="#">Sambutan <i class="icon-chevron-right dropdown-toggle text-13 ml-10"></i></a>
                      <ul class="subnav dropdown-menu martoppp" >
                        
                        <li class="{{ (request()->is('kepala-sekolah')) ? 'active' : '' }}" ><a class=" dropdown-item" href="/kepala-sekolah">Sambutan Kepala Sekolah</a></li>
                        
                        <li class="{{ (request()->is('wakil-kepala-sekolah')) ? 'active' : '' }}"><a class=" dropdown-item" href="/wakil-kepala-sekolah">Sambutan Wakasek Bidang Kesiswaan</a></li>
                        
                      </ul>
                    </li>
                    
                    <li class="{{ (request()->is('visi-misi-sejarah')) ? 'active' : '' }}"><a class=" dropdown-item" href="/visi-misi-sejarah">Sejarah, Visi, dan Misi</a></li>
                    
                    
                    <li class="{{ (request()->is('dokumentasi_')) ? 'active' : '' }}">
                      <a class="" data-barba href="/dokumentasi_">Dokumentasi</a>
                    </li>
                    
                    <li class="{{ (request()->is('news')) ? 'active' : '' }}">
                      <a class="" data-barba href="/news">Berita</a>
                    </li>
                    
                    
                    <li class="{{ (request()->is('tentang-web-ini')) ? 'active' : '' }}"><a class=" dropdown-item" href="/tentang-web-ini">Tentang Web</a></li>
                    
                    <li class="{{ (request()->is('pendaftaran')) ? 'active' : '' }}"><a class=" dropdown-item" href="/pendaftaran">Daftar Ekstrakurikuler</a></li>
                    
                    <li class="{{ (request()->is('login')) ? 'active' : '' }}"><a class=" dropdown-item" href="/login">Login</a></li>
                    
                    
                    {{-- <li class="menu-item-has-children dropdown {{ (request()->is('pendaftaran','-')) ? 'active' : '' }}" >
                      <a data-barba  href="#">Daftar Ekstrakurikuler <i class="icon-chevron-right dropdown-toggle text-13 ml-10"></i></a>
                      <ul class="subnav dropdown-menu martoppp" >
                        
                        
                        
                      </ul>
                    </li> --}}
                    
                  </ul>
                </div>
    
                <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                  {{-- <div class="mobile-footer__number">
                    <div class="text-17 fw-500 text-dark-1">Hubungi Kami</div>
                    <div class="text-17 fw-500 text-purple-1">(0262) 233316</div>
                  </div>
    
                  <div class="lh-2 mt-10">
                    <div>JALAN CIMANUK NO 309 A,<br> Kecamatan Tarogong Kidul <br> Kabupaten Garut <br> Provinsi Jawa Barat.</div>
                    <div>smknegeri1garut@ymail.com</div>
                  </div>
    
                  <div class="mobile-socials mt-10">
    
                    <a href="https://www.facebook.com/SmkNegeri1Garut" class="d-flex items-center justify-center rounded-full size-40">
                      <i class="fa fa-facebook"></i>
                    </a>
    
                    <a href="https://twitter.com/smkn1garut" class="d-flex items-center justify-center rounded-full size-40">
                      <i class="fa fa-twitter"></i>
                    </a>
    
                    <a href="https://www.instagram.com/official_smkn1garut/?igshid=ezu05n0c45lv" class="d-flex items-center justify-center rounded-full size-40">
                      <i class="fa fa-instagram"></i>
                    </a>
    
                    <a href="https://www.linkedin.com/company/smk-negeri-1-garut" class="d-flex items-center justify-center rounded-full size-40">
                      <i class="fa fa-linkedin"></i>
                    </a>
    
                  </div> --}}
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
            <div class="header-right__icons text-white d-flex items-center ">
    
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

{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}

  <footer class="footer-section bg-light-9">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta d-flex">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>JALAN CIMANUK NO 309 A Tarogong Kidul</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta d-flex">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <a href="tel:(0262) 233316">
                              <span>(0262) 233316</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta d-flex">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>www.smknegeri1garut.sch.id</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a ><img src="{{asset('webex/img/general/footer.png')}}" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p>SMK NEGERI 1 GARUT<br>
                              JALAN CIMANUK NO 309 A Kecamatan Tarogong Kidul Kabupaten Garut Provinsi Jawa Barat</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="https://www.facebook.com/SmkNegeri1Garut" class="items-center justify-center rounded-full size-40">
                              <i class="fa fa-facebook"></i>
                            </a>
            
                            <a href="https://twitter.com/smkn1garut" class="items-center justify-center rounded-full size-40">
                              <i class="fa fa-twitter"></i>
                            </a>
            
                            <a href="https://www.instagram.com/official_smkn1garut/?igshid=ezu05n0c45lv" class="items-center justify-center rounded-full size-40">
                              <i class="fa fa-instagram"></i>
                            </a>
            
                            <a href="https://www.linkedin.com/company/smk-negeri-1-garut" class="items-center justify-center rounded-full size-40">
                              <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Link Terkait</h3>
                        </div>
                        <ul>
                            <li><a href="https://smknegeri1garut.sch.id">SMK Negeri 1 Garut</a></li>
                            <li><a href="https://jabarprov.go.id">Pemerintah Provinsi Jawa Barat</a></li>
                            <li><a href="https://garutkab.go.id">Pemerintah Kabupaten Garut</a></li>
                            <li><a href="https://www.youtube.com/channel/UCWqTHZxswHc813_p8tQcKBA">Youtube SMK Negeri 1 Garut</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Informasi</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Web ini diperuntukan untuk memudahkan Siswa dan Siswi SMK Negeri 1 Garut melihat berbagai kegiatan seluruh Ekstrakulikuler di SMK Negeri 1 Garut.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; {{date('Y')}} Webex <a href="https://smknegeri1garut.sch.id">SMK Negeri 1 Garut</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/tentang-web-ini">Tentang Kami</a></li>
                            <li><a href="/dokumentasi_">Dokumentasi</a></li>
                            <li><a href="/news">Berita</a></li>
                            <li><a href="/kepala-sekolah">Sambutan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
  
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}

  {{-- <footer class="footer -type-1 -dark bg-light-9">
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

                <a class="" href="/https://www.instagram.com/smkn1garut_official/"><i class="text-14 fa fa-instagram"></i></a>

              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="footer-footer border-top-dark">
        <div class="row justify-between y-gap-20"><center>
          <div class="col-md-6">
            <div class="footer-footer__copyright">Copyright © {{date('Y')}} Webex SMKN 1 Garut.</div>
          </div></center>
        </div>
      </div>
    </div>
</footer> --}}
</div>
</main>
</div>
<!-- barba container end -->

<!-- JavaScript -->

</body>


<!-- Mirrored from creativelayers.net/themes/educrat-html/home-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jul 2022 12:43:55 GMT -->
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/leaflet%401.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="{{asset('webex/js/vendors.js')}}"></script>
<script src="{{asset('webex/js/main.js')}}"></script>
{{-- Select2 JS --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@stack('script')
{{-- <script src="{{asset('webex/js/datatable.js')}}"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script> --}}
