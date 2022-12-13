@extends ('layout.header')
  
@section('content')
<section data-anim="fade" class="breadcrumbs ">
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <div class="breadcrumbs__content">

            <div class="breadcrumbs__item ">
              <a href="#">Home</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">All courses</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">User Experience Design</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">User Interface</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="page-header -type-1">
    <div class="container">
      <div class="page-header__content">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <div data-anim="slide-up delay-1">

              {{-- <h1 class="page-header__title">{{$data->nama_eskul}}</h1> --}}

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-md layout-pb-lg">
    <div class="container">
      <div class="row no-gutters justify-content-center">
        <div class="col-xl-8 col-lg-9 col-md-11">
          <div class="shopCompleted-header">
            <img src="../img/logo/itc.png" alt="icon">
          </div>

          <div class="shopCompleted-info">
            <div class="row no-gutters y-gap-32">
              <div class="col-md-3 col-sm-6">
                <div class="shopCompleted-info__item">
                  <div class="subtitle">PEMBINA</div>
                  <div class="title text-purple-1 mt-5">andriansyah maulana</div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="shopCompleted-info__item">
                  <div class="subtitle">KETUA</div>
                  <div class="title text-purple-1 mt-5">naufal rabani</div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="shopCompleted-info__item">
                  <div class="subtitle">WAKIL KETUA</div>
                  <div class="title text-purple-1 mt-5">yusuf sekhan alfath</div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="shopCompleted-info__item">
                  <div class="subtitle">JADWAL KUMPULAN</div>
                  <div class="title text-purple-1 mt-5">senin & jum'at</div>
                </div>
              </div>
            </div>
          </div>

          <div class="shopCompleted-footer bg-light-4 border-light rounded-8">
            <div class="shopCompleted-footer__wrap">
              <center>
              <h2 class="title">
                VISI & MISI
              </h2>
              </center>
              <div data-anim="slide-up delay-3" class="row justify-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                  <h5>VISI</h5>
                  <p class="mt-30">You must follow any policies made available to you within the Services. Don't misuse our Services. For example, don't interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by law, including applicable export and re-export control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected misconduct. Using our Services does not give you ownership of any intellectual property rights in our Services or the content you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Don't remove, obscure, or alter any legal notices displayed in or along with our Services.</p>
                </div>
  
                <div class="col-xl-8 col-lg-9 col-md-11">
                  <div class="mt-60 lg:mt-40">
                    <h5>MISI</h5>
                    <p class="mt-30">When you upload, submit, store, send or receive content to or through our Services, you give Front (and those we work with) a worldwide license to use, host, store, reproduce, modify, create derivative works (such as those resulting from translations, adaptations or other changes we make so that your content works better with our Services), communicate, publish, publicly perform, publicly display and distribute such content. The rights you grant in this license are for the limited purpose of operating, promoting, and improving our Services, and to develop new ones. This license continues even if you stop using our Services (for example, for a business listing you have added to Front Maps). Some Services may offer you ways to access and remove content that has been provided to that Service. Also, in some of our Services, there are terms or settings that narrow the scope of our use of the content submitted in those Services.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection