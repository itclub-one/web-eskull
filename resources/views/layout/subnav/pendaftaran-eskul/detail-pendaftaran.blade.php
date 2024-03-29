@extends ('layout.header')
  
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

              <div class="shopCompleted-header mt-5">
                <img src="{{asset('images/logo-eskul/'.$data->logo)}}" alt="{{$data->logo}}" width="500px">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="layout-pt-md layout-pb-lg">
    <div class="container">
      <div class="row no-gutters justify-content-center">
        <div class="col-lg-11">


          <div class="shopCompleted-footer bg-light-4 border-light rounded-8">
            <div class="shopCompleted-footer__wrap">
              <center>
              <h2 class="title">
               Calon Anggota Ekstrakulikuler
              </h2>
              </center>

              

                  <div data-anim="slide-up delay-3" class="row data_anggota">
                    <table id="data_anggota" class="table table-striped " style="width:100%">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>NIS</th>
                              <th>Nama Calon Anggota</th>
                              <th>Kelas</th>
                              <th>Alasan</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php
                            $no = 1;
                            $sortedPendaftaran = $data->pendaftaran->sortBy('jurusan');
                        @endphp
                        @foreach ($sortedPendaftaran as $row)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$row->nis}}</td>
                            <td>{{$row->nama_calon_anggota}}</td>
                            <td>{{$row->kelas_calon_anggota .' - '.$row->jurusan}}</td>
                            <td>{{$row->alasan}}</td>
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
  
  
  
        
      </div>
      
      
      
      
    </div>
  </section>
  
{{--------------------------------------------------------------------------------------------------------- 
    
-                                          Mochammad Ikhsan Nawawi                                        -

-                                instagram : https://instagram.com/sanbray_                               -

----------------------------------------------------------------------------------------------------------}}
  
@endsection