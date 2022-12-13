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
              <a href="#">Tentang Kami</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">Sambutan Wakil Kepala Sekolah</a>
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

              <h1 class="page-header__title">Sambutan</h1>

            </div>

            <div data-anim="slide-up delay-2">

              <p class="page-header__text">Sambutan dari wakil kepala sekolah SMKN 1 Garut</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="layout-pt-md layout-pb-md">
    <div data-anim-wrap class="container">
      <div class="row y-gap-50 justify-between items-center">
        @foreach ($data as $row)
            
        <div class="col-lg-6 pr-50 sm:pr-15">
          <div class="composition -type-8">
            <div class="-el-1"><img src="{{asset('foto/'.$row->foto_wakasek)}}" alt="{{$row->foto_wakasek}}"></div>
          </div>
        </div>

        <div class="col-lg-5">
          <h2 class="text-30 lh-16">{{$row->nama_wakasek}}</h2>
          <p class="text-dark-1 mt-30">{{$row->pembuka_sambutan}}</p>
          <p class="pr-50 lg:pr-0 mt-25">{{$row->isi_sambutan}}</p>
          <p class="pr-50 lg:pr-0 mt-25">{{$row->penutup_sambutan}}</p>
        </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>
@endsection