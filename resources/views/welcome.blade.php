@extends ('layout.header')
  {{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
@section('content')



    
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
                      <img src="{{asset('webex/img/home-4/masthead/shape.svg')}}" alt="image">
                    </div>
                    <img data-move="20" class="js-mouse-move" src="{{asset('webex/img/logo/smeaa.png')}}" alt="image">
                  </div>

                  <div class="masthead-image__el1">
                    <div data-move="40" class="lg:d-none img-el -w-250 px-20 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                      <div class="size-50 d-flex justify-center items-center bg-red-2 rounded-full">
                        <img src="{{asset('webex/img/masthead/1.svg')}}" alt="icon">
                      </div>
                      <div class="ml-20">
                        <div class="text-orange-1 text-16 fw-500 lh-1">{{$total_eskul}}+</div>
                        <div class="mt-3">Ekstrakulikuler</div>
                      </div>
                    </div>
                  </div>

                  <div class="masthead-image__el2">
                    <div data-move="40" class="shadow-4 img-el -w-260 px-40 py-20 d-flex items-center bg-white rounded-8 js-mouse-move">
                      <div class="img-el__side">
                        <div class="size-50 d-flex justify-center items-center bg-dark-1 rounded-full">
                          <img src="{{asset('webex/img/masthead/2.svg')}}" alt="icon">
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
                  <img class="w-1/1" src="{{asset('webex/img/logo_pengembang/itc.png')}}" alt="logo image">
                </div>
              </div>
              <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                <div class="justify-center items-center px-4">
                  <img class="w-1/1" src="{{asset('webex/img/logo_pengembang/osis.png')}}" alt="clients image">
                </div>
              </div>
              <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                <div class="justify-center items-center px-4">
                  <img class="w-1/1" src="{{asset('webex/img/logo_pengembang/bc.png')}}" alt="clients image">
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

                  <p class="sectionTitle__text ">Terdiri dari {{$total_eskul}} Ekstrakulikuler yang ada di SMKN 1 Garut! <a href="pendaftaran">klik disini</a> untuk daftar</p>

                  <a href="/eskul/all" class="btn btn-primary ">Lihat Semua</a>

                </div>

              </div>
            </div>

            <div data-anim-wrap class="pt-60 lg:pt-50">
              <div class="overflow-hidden js-section-slider" data-gap="30" data-loop data-pagination data-slider-cols="xl-6 lg-4 md-3 sm-2">
                <div class="swiper-wrapper">


                    @foreach ($data as $row)
                  <div class="swiper-slide h-100">
                    <a class="" href="/eskul/{{$row->slug}}">
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




        <section class="layout-pt-lg layout-pb-lg section-bg">
          <div class="section-bg__item bg-light-6"></div>
  
          <div data-anim-wrap class="container">
          <div class="row y-gap-15 justify-between items-center">
              <div class="col-lg-6">
  
              <div class="sectionTitle ">
  
                  <h2 class="sectionTitle__title ">Dokumentasi</h2>
  
                  <p class="sectionTitle__text ">Geser untuk melihat dokumentasi dari semua ekstrakulikuler di sini!</p>

                  <a href="/dokumentasi_" class="btn btn-primary ">Lihat Semua</a>
                  
                </div>
                
              </div>
            </div>
            
            <div class="relative">
              <div class="overflow-hidden pt-60 lg:pt-50 js-section-slider" data-gap="30" data-loop data-pagination data-nav-prev="js-courses-prev" data-nav-next="js-courses-next" data-slider-cols="xl-4 lg-3 md-2 sm-2">
                <div class="swiper-wrapper">
  
                  @foreach ($dok as $row)
                  
                  
                  <div class="swiper-slide">
                    <div data-anim-child="slide-up delay-1">
                      
                      <a href="/dokumentasi/{{$row->slug_dokumentasi}}" class=" coursesCard -type-1 px-10 py-10 border-light bg-white rounded-8">
                        <div class="relative">
                          <div class="coursesCard__image overflow-hidden rounded-8">
                            <img class="w-1/1" src="{{asset('images/dokumentasi/foto-kegiatan/'.$row->foto_kegiatan)}}" alt="{{$row->foto_kegiatan}}">
                            <div class="coursesCard__image_overlay rounded-8"></div>
                          </div>
                          <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">
                            
                          </div>
                        </div>
                        
                        <div class="h-100 px-10 pt-10">
                          
                          <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">{{$row->nama_kegiatan}}</div>
                          
                          <div class="d-flex x-gap-10 items-center pt-10">
                            
                            <div class="d-flex items-center">
                              <div class="mr-2">
                              </div>
                              <div class="text-14 lh-1">{{$row->eskul->nama_eskul}}</div>
                            </div>
                            
                          </div>
                          
                          <div class="coursesCard-footer">
                            <div class="coursesCard-footer__author">
                              <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" alt="{{$row->eskul->logo}}">
                              <div>{{$row->eskul->nama_eskul}}</div>
                            </div>
                          </div>
                      </div>
                      </a>
  
                  </div>
                  </div>
                  @endforeach
                  {{--------------------------------------------------------------------------------------------------------- 
    
                    -                                          Mochammad Ikhsan Nawawi                                        -
                    
-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}


</div>
</div>


{{-- <button class="section-slider-nav -prev -dark-bg-dark-2 -outline-dark-1 -absolute-out size-50 rounded-full xl:d-none js-courses-prev">
  <i class="icon icon-arrow-left text-24"></i>
</button>

<button class="section-slider-nav -next -dark-bg-dark-2 -outline-dark-1 -absolute-out size-50 rounded-full xl:d-none js-courses-next">
  <i class="icon icon-arrow-right text-24"></i>
</button> --}}

              

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
                  
                  <a href="/news" class="btn btn-primary ">Lihat Semua</a>
                </div>
                
              </div>
            </div>
            
            
    
          <div class="row y-gap-30 pt-50">

            @foreach($news1 as $row)
            <div data-anim-child="slide-left delay-2" class="col-lg-9 col-md-6">
              <a href="/news/{{$row->slug_berita}}" class=" blogCard -type-1">
                <div class="blogCard__image">
                  <img src="{{asset('images/foto-berita/'.$row->foto_berita)}}" alt="image">
                </div>
                <div class="blogCard__content">
                  <h4 class="blogCard__title">{{$row->judul_berita}}</h4>
                  <div class="blogCard__date">{{\Carbon\Carbon::parse($row->tanggal_berita)->format('F d, Y')}}</div>
                </div>
              </a>
            </div>
            @endforeach
            
            {{-- @foreach($news as $row)
            <div data-anim-child="slide-left delay-2" class="col-lg-3 col-md-6">
              <a href="/news/{{$row->slug_berita}}" class=" blogCard -type-1">
                <div class="blogCard__image">
                  <img src="{{asset('images/foto-berita/'.$row->foto_berita)}}" alt="image">
                </div>
                <div class="blogCard__content">
                  <h4 class="blogCard__title">{{$row->judul_berita}}</h4>
                  <div class="blogCard__date">{{\Carbon\Carbon::parse($row->tanggal_berita)->format('F d, Y')}}</div>
                </div>
              </a>
            </div>
            @endforeach --}}

            
    
            
    

            <div class="col-lg-3">
              <div class="row y-gap-30">
    
                @foreach ($news2 as $row)
                    
                <div class="col-lg-12 col-md-6">
                  <a href="/news/{{$row->slug_berita}}" data-anim-child="slide-left delay-4" class="blogCard -type-2">
                    <div class="blogCard__image">
                      <img src="{{asset('images/foto-berita/'.$row->foto_berita)}}" alt="image" >
                    </div>
                    <div class="blogCard__content">
                      {{-- <div class="blogCard__category">COURSES</div> --}}
                      <h4 class="blogCard__title">{{$row->judul_berita}}</h4>
                      <div class="blogCard__date">{{\Carbon\Carbon::parse($row->tanggal_berita)->format('F d, Y')}}</div>
                    </div>
                  </a>
                </div>
             
                @endforeach

    
              </div>
            </div>
            
          </div>
        </div>
      </section>

        
        
@endsection
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}


        
      