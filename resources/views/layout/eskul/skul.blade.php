@extends ('layout.header')
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
@section('content')
<section data-anim="fade" class="breadcrumbs ">
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <div class="breadcrumbs__content">

            <div class="breadcrumbs__item ">
              <a class="texttt" href="#">Home</a>
            </div>

            <div class="breadcrumbs__item ">
              <a class="texttt" data-el-toggle=".js-explore-toggle" href="#">Jelajahi</a>
            </div>

            <div class="breadcrumbs__item ">
              <a class="texttt" data-el-toggle=".js-explore-toggle" href="#">Sekbid</a>
            </div>

            <div class="breadcrumbs__item ">
              <a class="texttt" href="#">{{$data->nama_eskul}}</a>
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

              <h1 class="page-header__title">{{$data->nama_eskul}}</h1>

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
            <img src="{{asset('images/logo-eskul/'.$data->logo)}}" alt="{{$data->logo}}" width="500px">
          </div>

          <div class="shopCompleted-info">
            <div class="row no-gutters y-gap-32">
              <div class="col-md-3 col-sm-6">
                <div class="shopCompleted-info__item">
                  <div class="subtitle">PEMBINA</div>
                  <div class="title text-purple-1">{{$data->pembina}}</div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="shopCompleted-info__item">
                  <div class="subtitle">KETUA</div>
                  <div class="title text-purple-1">{{$data->ketua}}</div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="shopCompleted-info__item">
                  <div class="subtitle">WAKIL KETUA</div>
                  <div class="title text-purple-1">{{$data->wakilketua}}</div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="shopCompleted-info__item">
                  <div class="subtitle">JADWAL KUMPULAN</div>
                  <div class="title text-purple-1">{{$data->jadwal_kumpulan}}</div>
                </div>
              </div>
            </div>
          </div>

          <div>
            <p class="text-center mt-3"><a href="pendaftaran">klik disini</a> untuk daftar</p>
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
                  <p class="mt-30">{!!$data->visi!!}</p>
                </div>
  
                <div class="col-xl-8 col-lg-9 col-md-11">
                  <div class="mt-60 lg:mt-40">
                    <h5>MISI</h5>
                    <p class="mt-30">{!!$data->misi_eskul!!}</p>
                  </div>
                </div>
                <div class="col-xl-8 col-lg-9 col-md-11">
                  <div class="mt-60 lg:mt-40">
                    <h5>Program Kerja</h5>
                    <p class="mt-30">{!!$data->program_kerja!!}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="shopCompleted-footer bg-light-4 border-light rounded-8">
            <div class="shopCompleted-footer__wrap">
              <center>
              <h2 class="title">
                Anggota {{$data->nama_eskul}}
              </h2>
              </center>
              <div data-anim="slide-up delay-3" class="row data_anggota">
                <table id="data_anggota" class="table table-striped data_anggota" style="width:100%">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>NIS</th>
                          <th>Nama Anggota</th>
                          <th>Kelas</th>
                      </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                        $sortedAnggota = $data->anggota->sortBy('kelas_anggota');
                    @endphp
                    @foreach ($sortedAnggota as $row)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->nis}}</td>
                        <td>{{$row->nama_anggota}}</td>
                        <td>{{$row->kelas_anggota .' - '.$row->jurusan}}</td>
                    </tr>
                    
                    @endforeach
                  </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  {{-- @foreach ($data as $row) --}}
  <section class="layout-pt-md layout-pb-lg">
    <div data-anim="slide-up delay-2" class="container">

      <div class="row y-gap-30">
        @foreach ($data->dokumentasi as $row)
            

        <div class="col-xl-3 col-lg-4 col-md-6">
          <a href="/dokumentasi/{{$row->slug_dokumentasi}}" class="coursesCard -type-1 texttt">
            <div class="relative">
              <div class="coursesCard__image overflow-hidden rounded-8">
                <img class="w-1/1" src="{{asset('images/dokumentasi/foto-kegiatan/'.$row->foto_kegiatan)}}" alt="{{$row->nama_kegiatan}}">
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
                  <img src="{{asset('images/logo-eskul/'.$row->eskul->logo)}}" alt="itclub">
                  <div>{{$row->eskul->nama_eskul}}</div>
                </div>
              </div>
            </div>
          </a>
        </div>

        @endforeach
        
      </div>
      
      
      
      {{-- <div class="row">
        {{$data->links('layout.subnav.pagination.links')}}
      </div> --}}
    </div>
  </section>
  {{-- @endforeach --}}
  {{-- @push('script')
  <script type="text/javascript">
    $(document).ready(function(){ $('#data_anggota').DataTable(); }); 
  </script>
  @endpush --}}


{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
  
@endsection