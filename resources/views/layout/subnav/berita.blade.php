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

                  <h1 class="page-header__title">Berita Terbaru</h1>

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

                  @foreach($berita_terbaru as $row)
                  <div data-anim-child="slide-up delay-4" class="col-lg-8 md:d-none">
                    <a href="news/{{$row->slug_berita}}" class="blogCard -type-1 texttt">
                      <div class="blogCard__image">
                        <img class="w-1/1 rounded-8" src="{{asset('images/foto-berita/'.$row->foto_berita)}}" alt="{{$row->foto_berita}}">
                      </div>
                      <div class="blogCard__content mt-20">
                        <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">{{$row->judul_berita}}</h4>
                        <div class="blogCard__date text-14 mt-5">{{\Carbon\Carbon::parse($row->tanggal_berita)->format('F d, Y')}}</div>
                      </div>
                    </a>
                  </div>
                  @endforeach
                  <div class="col-lg-4">

                    @foreach($berita_terbaru2 as $row)
                    <div data-anim-child="slide-up delay-4" class="col-lg-10 md:d-none">
                      <a href="news/{{$row->slug_berita}}" class="blogCard -type-1 texttt">
                        <div class="blogCard__image">
                          <img class="w-1/1 rounded-8" src="{{asset('images/foto-berita/'.$row->foto_berita)}}" alt="{{$row->foto_berita}}">
                        </div>
                        <div class="blogCard__content mt-20">
                          <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">{{$row->judul_berita}}</h4>
                          <div class="blogCard__date text-14 mt-5">{{\Carbon\Carbon::parse($row->tanggal_berita)->format('F d, Y')}}</div>
                        </div>
                      </a>
                    </div>
                    @endforeach
                  </div>

                  

                <div class="row">
                  {{$data->links('layout.subnav.pagination.links')}}
                </div>
              </div>

            </div>
          </div>
        </div>

        <div data-anim-wrap class="container">
          <div class="tabs -pills js-tabs">

            <div class="tabs__content pt-40 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-active">
                <div class="row y-gap-30">

                  @foreach($data as $row)
                  <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                    <a href="news/{{$row->slug_berita}}" class="blogCard -type-1 texttt">
                      <div class="blogCard__image">
                        <img class="w-1/1 rounded-8" src="{{asset('images/foto-berita/'.$row->foto_berita)}}" alt="{{$row->foto_berita}}">
                      </div>
                      <div class="blogCard__content mt-20">
                        <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">{{$row->judul_berita}}</h4>
                        <div class="blogCard__date text-14 mt-5">{{\Carbon\Carbon::parse($row->tanggal_berita)->format('F d, Y')}}</div>
                      </div>
                    </a>
                  </div>
                  @endforeach

                  

                <div class="row">
                  {{$data->links('layout.subnav.pagination.links')}}
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>


    </div>
  </main>

@endsection