@extends('layout.header')
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
@section('content')
<main class="main-content">


    <div class="content-wrapper js-content-wrapper">


      <section data-anim="fade" class="breadcrumbs">
        <div class="container">
          <div class="row">
            <div class="col-auto">
              <div class="breadcrumbs__content">

                <div class="breadcrumbs__item">
                  <a href="#">Home</a>
                </div>

                <div class="breadcrumbs__item">
                  <a href="#">Berita</a>
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

                  <h1 class="page-header__title">Berita Terkini</h1>

                </div>

                <div data-anim="slide-up delay-2">

                  <p class="page-header__text">Semua berita seputar ekstrakulikuler ada disini.</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="layout-pt-sm layout-pb-lg">
        <div data-anim-wrap class="container">
          <div class="tabs -pills js-tabs">

            <div class="tabs__content pt-40 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-active">
                <div class="row y-gap-30">

                  <div data-anim-child="slide-up delay-4" class="col-lg-12 col-md-6">
                    <a class="blogCard -type-1 texttt">
                      <div class="blogCard__image">
                        <img class="w-1/1 rounded-8" src="{{asset('images/foto-berita/'.$detail->foto_berita)}}" alt="{{$detail->foto_berita}}">
                      </div>
                      <div class="blogCard__content mt-20">
                        <h3 class="blogCard__title text-20 lh-15 fw-500 mt-5">{{$detail->judul_berita}}</h3>
                        <!-- Tambahkan deskripsi berita di sini -->
                          <div class="col-lg-12 col-md-6">
                            <div data-anim-child="slide-up delay-4" class="blogCard__content">
                              <p class="blogCard__text text-16 mt-3">{{$detail->deskripsi}}</p>
                            </div>
                          </div>
                          <!-- Akhir dari deskripsi berita -->
                        <div class="blogCard__author text-14">
                          <img class="rounded-8" width="20px" src="{{ asset('images/logo-eskul/'.optional($detail->eskul)->logo) }}" alt="">
                          {{ optional($detail->eskul)->nama_eskul ?? 'Unknown' }}
                        </div>
                        <div class="blogCard__date text-14 mt-2">{{ \Carbon\Carbon::parse($detail->tanggal_berita)->format('F d, Y') }}</div>
                      </div>
                    </a>
                  </div>
                  
                  

                </div>
              </div>

            </div>
          </div>
        </div>
      </section>


    </div>
  </main>
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
@endsection
