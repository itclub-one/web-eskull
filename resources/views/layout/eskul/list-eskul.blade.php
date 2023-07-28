@extends ('layout.header')
  
@section('content')
<main class="main-content  ">
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}


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
                  <a href="#">Ekstrakurikuler</a>
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

                  <h1 class="page-header__title">Ekstrakurikuler</h1>

                </div>

                <div data-anim="slide-up delay-2">

                  <p class="page-header__text">Ada {{$total_eskul}}++ Ekstrakurikuler di SMK Negeri 1 Garut. <a href="pendaftaran">klik disini</a> untuk daftar</p>

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
                        <a class="" href="/eskul/{{$row->slug}}">
                            <div class="infoCard -type-1">
                                <div class="infoCard__image">
                                    <img style="width: 100px; height: 99px;" src="{{asset('images/logo-eskul/'.$row->logo)}}" alt="{{$row->logo}}">
                                </div>
                                <h5 class="infoCard__title text-17 lh-15 mt-10">{{$row->nama_eskul}}</h5>
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
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
@endsection