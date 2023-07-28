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
      

{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
      


      <section class="layout-pt-lg layout-pb-lg">
        <div class="container">
          <div class="row y-gap-20 justify-center text-center">
            <div class="col-auto">

              <div class="sectionTitle ">

                <h2 class="sectionTitle__title ">List Ekstrakulikuler</h2>

                <p class="sectionTitle__text ">Cari Ekstrakulikuler yang Anda pilih ketika mendaftar!</p>

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
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
      
    </div>
  </main>

  @endsection