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

                  @foreach($data as $row)
                  <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                    <a href="blog-single.html" class="blogCard -type-1 texttt">
                      <div class="blogCard__image">
                        <img class="w-1/1 rounded-8" src="{{asset('fotoberita/'.$row->foto_berita)}}" alt="{{$row->foto_berita}}">
                      </div>
                      <div class="blogCard__content mt-20">
                        <h4 class="blogCard__title text-20 lh-15 fw-500 mt-5">{{$row->judul_berita}}</h4>
                        <div class="blogCard__date text-14 mt-5">{{$row->tanggal_berita}}</div>
                      </div>
                    </a>
                  </div>
                  @endforeach

                  

                <div class="row justify-center pt-60 lg:pt-40">
                  <div class="col-auto">
                    <div class="pagination -buttons">
                      <button class="pagination__button -prev">
                        <i class="icon icon-chevron-left"></i>
                      </button>

                      <div class="pagination__count">
                        <a href="#">1</a>
                        <a class="-count-is-active" href="#">2</a>
                        <a href="#">3</a>
                        <span>...</span>
                        <a href="#">67</a>
                      </div>

                      <button class="pagination__button -next">
                        <i class="icon icon-chevron-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>


    </div>
  </main>

@endsection