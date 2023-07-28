@extends ('layout.header')
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
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
                  <a href="#">Dokumnetasi</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      


      <section class="page-header -type-1">
        
        <div class="container">
          <div class="page-header__content">
            <div class="row">
              <div class="col-auto">
                <div data-anim="slide-up delay-1">

                  <h1 class="page-header__title">Dokumentasi Ekstrakulikuler</h1>

                </div>

                <div data-anim="slide-up delay-2">

                  <p class="page-header__text">Dokumentasi dari semua ekstrakulikuler ada disini.</p>

                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>


      <section class="layout-pt-md layout-pb-lg">
        <div data-anim="slide-up delay-2" class="container">

          <div class="row y-gap-30">
            @foreach ($data as $row)

            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
              <a href="/dokumentasi/{{$row->slug_dokumentasi}}" class="coursesCard -type-1 texttt">
                <div class="relative">
                  <div class="coursesCard__image overflow-hidden rounded-8">
                    <img class="w-1/1" src="{{asset('images/dokumentasi/foto-kegiatan/'.$row->foto_kegiatan)}}" alt="{{$row->foto_kegiatan}}">
                    <div class="coursesCard__image_overlay rounded-8"></div>
                  </div>
                  <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">
                  </div>
                </div>
                <div class="h-100 pt-15">
                  <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">{{$row->nama_kegiatan}}</div>
                  <div class="d-flex x-gap-10 items-center pt-10">
                    <div class="d-flex items-center">
                      {{-- <div class="text-14 lh-1">{{$row->penyelenggara}}</div> --}}
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

            @endforeach
            
          </div>

          

          <div class="row">
            {{$data->links('layout.subnav.pagination.links')}}
          </div>
        </div>
      </section>

      
    </div>
  </main>

  @endsection