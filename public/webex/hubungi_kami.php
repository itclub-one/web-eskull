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


    <main class="main-content  ">

    <?php include "header.php"; ?>


      <div class="content-wrapper  js-content-wrapper">

        <section class="page-header -type-4 bg-beige-1">
          <div class="container">
            <div class="page-header__content">
              <div class="row">
                <div class="col-auto">
                  <div data-anim="slide-up delay-1">
                    <h1 class="page-header__title">Hubungi Kami</h1>
                  </div>

                  <div data-anim="slide-up delay-2">
                    <p class="page-header__text">We’re on a mission to deliver engaging, curated<br> courses at a reasonable price.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="layout-pt-md layout-pb-lg">
          <div data-anim-wrap class="container">
            <div class="row y-gap-50 justify-between">
              <div class="col-xl-5 col-lg-6">
                <h3 class="text-24 lh-1 fw-500">Our offices</h3>
                <div class="row y-gap-30 pt-40">

                  <div class="col-sm-6">
                    <div class="text-20 fw-500 text-dark-1">London</div>
                    <div class="y-gap-10 pt-15">
                      <a href="#" class="d-block">328 Queensberry Street, North Melbourne VIC 3051, Australia.</a>
                      <a href="#" class="d-block">+(1) 123 456 7890</a>
                      <a href="#" class="d-block">hi@educrat.com</a>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="text-20 fw-500 text-dark-1">Paris</div>
                    <div class="y-gap-10 pt-15">
                      <a href="#" class="d-block">328 Queensberry Street, North Melbourne VIC 3051, Australia.</a>
                      <a href="#" class="d-block">+(1) 123 456 7890</a>
                      <a href="#" class="d-block">hi@educrat.com</a>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="text-20 fw-500 text-dark-1">Los Angeles</div>
                    <div class="y-gap-10 pt-15">
                      <a href="#" class="d-block">328 Queensberry Street, North Melbourne VIC 3051, Australia.</a>
                      <a href="#" class="d-block">+(1) 123 456 7890</a>
                      <a href="#" class="d-block">hi@educrat.com</a>
                    </div>
                  </div>

                </div>
              </div>

              <div class="col-lg-6">
                <div class="px-40 py-40 bg-white border-light shadow-1 rounded-8 contact-form-to-top">
                  <h3 class="text-24 fw-500">Send a Message</h3>
                  <p class="mt-25">Neque convallis a cras semper auctor. Libero id faucibus nisl<br> tincidunt egetnvallis.</p>

                  <form class="contact-form row y-gap-30 pt-60 lg:pt-40" action="#">
                    <div class="col-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Name</label>
                      <input type="text" name="title" placeholder="Name...">
                    </div>
                    <div class="col-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address</label>
                      <input type="text" name="title" placeholder="Email...">
                    </div>
                    <div class="col-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Message...</label>
                      <textarea name="comment" placeholder="Message" rows="8"></textarea>
                    </div>
                    <div class="col-12">
                      <button type="submit" name="submit" id="submit" class="button -md -purple-1 text-white">
                        Send Message
                      </button>
                    </div>
                  </form>
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


<!-- Mirrored from creativelayers.net/themes/educrat-html/contact-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Jul 2022 12:44:46 GMT -->
</html>