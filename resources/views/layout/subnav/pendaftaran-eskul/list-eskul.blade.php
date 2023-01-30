@extends ('layout.header')
  
@section('content')

<main class="main-content  ">



    <div class="content-wrapper  js-content-wrapper">


      <section data-anim="fade" class="breadcrumbs ">
        <div class="container">
          <div class="row">
            <div class="col-auto">
              <div class="breadcrumbs__content">

                <div class="breadcrumbs__item ">
                  <a href="#">Home</a>
                </div>

                <div class="breadcrumbs__item ">
                  <a href="#">List Ekstrakulikuler</a>
                </div>

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


                  @foreach ($data as $row)
                <div class="swiper-slide h-100">
                  <a class="" href="/pendaftaran/{{$row->slug}}">
                    <div data-anim-child="slide-left delay-2" class="infoCard -type-1">
                        <div class="infoCard__image">
                          <img style="width: 100px; height: 99px;" src="{{asset('images/logo-eskul/'.$row->logo)}}" alt="{{$row->logo}}">
                        </div>
                        <h5 class="infoCard__title text-17 lh-15 mt-10">{{$row->nama_eskul}}</h5>
                    </div>
                  </a>
                </div>

                @endforeach

                
                

                
                <button class="js-prev section-slider-nav -prev -dark-bg-dark-2 -outline-dark-1 -absolute-out size-50 rounded-full xl:d-none js-courses-prev">
                  <i class="icon icon-arrow-left text-24"></i>
                </button>
  
                <button class="js-next section-slider-nav -next -dark-bg-dark-2 -outline-dark-1 -absolute-out size-50 rounded-full xl:d-none js-courses-next">
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

      
    </div>
  </main>

  @endsection